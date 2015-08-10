<?php

namespace AddressBookBundle\Controller;

use AddressBookBundle\Entity\Relation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AddressBookController extends Controller
{
    public function indexAction(Request $request)
    {
        $relation_repository = $this->getDoctrine()->getRepository('AddressBookBundle:Relation');
        $user_repository = $this->getDoctrine()->getRepository('AddressBookBundle:User');

        //on récupère les ids des utilisateurs que nous avons dans notre carnet d'addresses
        $query1 = $relation_repository->createQueryBuilder('r')
            ->select('r.contact_id')
            ->where('r.user = :user')
            ->setParameter('user',$this->getUser())
            ->getQuery();
        $listeRelations = $query1->getResult();

        //on récupère les utilisateurs à partir de leurs id
        $query2 = $user_repository->createQueryBuilder('u')
            ->where('u.id IN (:list)')
            ->setParameter('list',$listeRelations)
            ->getQuery();

        $users = $query2->getResult();

        $session = $request->getSession();

        $error = $session->getFlashBag()->get('error');
        $session->getFlashBag()->set('error', $error);

        return $this->render('AddressBookBundle:addressbook:addressbook.html.twig',array('users' => $users));
    }

    public function deleteAction(Request $request)
    {
        if($request->isXmlHttpRequest())
        {
            // on récupère l'utilisateur qu'on a souhaité supprimer et one le supprime
            $relation_repository = $this->getDoctrine()->getRepository('AddressBookBundle:Relation');
            $query = $relation_repository->createQueryBuilder('r')
                ->where('r.user = :user')
                ->setParameter('user',$this->getUser())
                ->andwhere('r.contact_id = :contact')
                ->setParameter('contact', $request->get('id'))
                ->getQuery();

            $relations = $query->getResult();

            foreach ($relations as $relation) {
                $this->getDoctrine()->getManager()->remove($relation);
            }

            $this->getDoctrine()->getManager()->flush();

        }
        return new Response("fine");
    }

    public function addAction(Request $request)
    {
        // on récupère l'utilisateur avec l'username saisi
        $relation_repository = $this->getDoctrine()->getRepository('AddressBookBundle:User');
        $query = $relation_repository->createQueryBuilder('u')
            ->where('u.username = :username')
            ->setParameter('username',$request->get('username'))
            ->getQuery();
        $users = $query->getResult();
        $user_contact = null;
        if($users != null)
        {
            $user_contact = $users[0];
        }

        // si l'utilisateur existe
        if($user_contact != null)
        {
            //var_dump($user_contact->id); die;
            //on vérifie si on l'a déjà dans nos contacts
            $relation_repository = $this->getDoctrine()->getRepository('AddressBookBundle:Relation');
            $query = $relation_repository->createQueryBuilder('r')
                ->where('r.user = :user')
                ->setParameter('user',$this->getUser())
                ->andwhere('r.contact_id = :contact')
                ->setParameter('contact', $user_contact->getId())
                ->getQuery();

            $relation = $query->getResult();


            if($relation != null)
            {
                $request = $this->get('request');
                $session = $request->getSession();

                $session->getFlashBag()->set('error', 'Vous possédez déjà ce contact');
                return $this->redirect($this->generateUrl('address_book_homepage'));
            }
            else
            {
                $em = $this->getDoctrine()->getManager();

                $r = new Relation();

                $r->setUser($this->getUser());
                $r->setContactId($user_contact->getId());

                $em->persist($r);
                $em->flush();

                return $this->redirect($this->generateUrl('address_book_homepage'));
            }
        }
        else
        {
            $session = $request->getSession();

            $session->getFlashBag()->set('error', 'Ce contact n\'existe pas !');
            return $this->redirect($this->generateUrl('address_book_homepage'));
        }
    }

}