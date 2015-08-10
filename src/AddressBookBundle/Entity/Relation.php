<?php

// src/AppBundle/Entity/User.php

namespace AddressBookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="relation")
 */
class Relation
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="AddressBookBundle\Entity\User", inversedBy="relations")
     */
    protected $user;

    /**
     * @ORM\Column(type="integer")
     */
    protected $contact_id;

    /**
     * @return mixed
     */
    public function getContactId()
    {
        return $this->contact_id;
    }

    /**
     * @param mixed $contact_id
     */
    public function setContactId($contact_id)
    {
        $this->contact_id = $contact_id;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


}