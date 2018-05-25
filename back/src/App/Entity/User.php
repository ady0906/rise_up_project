<?php

namespace App\Entity;

use App\Entity;
use Doctrine\ORM\Mapping;

/**
 * @Entity
 * @Table(name="users")
 */
class User
{
    /**
     * @var integer
     *
     * @Id
     * @Column(name="id", type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    public function getId() {
        return $this->id;
    }
    
    /**
     * @var string
     * @Column(type="string", length=64)
     */
    protected $firstname;
    
    public function getFirstname() {
        return $this->firstname;
    }
    
    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }
    
    /**
     * @var string
     * @Column(type="string", length=64)
     */
    protected $lastname;
    
    public function getLastname() {
        return $this->lastname;
    }
    
    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    /**
     * @var string
     * @Column(type="string", length=255)
     */
    protected $email;
    
    public function getEmail() {
        return $this->email;
    }
    
    public function setEmail($email) {
        $this->email = $email;
    }
    
    /**
     * @var string
     * @Column(type="string", length=64)
     */
    protected $country;
    
    public function getCountry() {
        return $this->country;
    }
    
    public function setCountry($country) {
        $this->country = $country;
    }
}