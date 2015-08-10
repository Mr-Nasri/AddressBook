<?php

// src/AppBundle/Entity/User.php

namespace AddressBookBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    protected  $nom;
    /**
     * @ORM\Column(type="string", length=30,nullable=true)
     */
    protected $prenom;
    /**
     * @ORM\Column(type="string", length=50,nullable=true)
     */
    protected $addresse;
    /**
     * @ORM\Column(type="string", length=20,nullable=true)
     */
    protected $telephone;
    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    protected $site_web;

    /**
     * @return mixed
     */
    public function getAddresse()
    {
        return $this->addresse;
    }

    /**
     * @param mixed $addresse
     */
    public function setAddresse($addresse)
    {
        $this->addresse = $addresse;
    }


    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getSiteWeb()
    {
        return $this->site_web;
    }

    /**
     * @param mixed $site_web
     */
    public function setSiteWeb($site_web)
    {
        $this->site_web = $site_web;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }



    /**
     * @ORM\OneToMany(targetEntity="AddressBookBundle\Entity\Relation", mappedBy="user")
     */
    private $relations;

    /**
     * @return mixed
     */
    public function getRelations()
    {
        return $this->relations;
    }

    /**
     * @param mixed $relations
     */
    public function setRelations($relations)
    {
        $this->relations = $relations;
    }



    public function __construct()
    {
        parent::__construct();
    }

}