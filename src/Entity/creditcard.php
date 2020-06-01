<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CreditCardRepository")
 */

class creditcard
{
 
 /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    
 
    private $number;


    private $cvv;

    private $endDate;

   
    private $owner;


    private $user;

     private $direccion;
    
     function getId() {
         return $this->id;
     }

     function getNumber() {
         return $this->number;
     }

     function getCvv() {
         return $this->cvv;
     }

     function getEndDate() {
         return $this->endDate;
     }

     function getOwner() {
         return $this->owner;
     }

     function getUser() {
         return $this->user;
     }

     function getDireccion() {
         return $this->direccion;
     }

     function setId($id) {
         $this->id = $id;
     }

     function setNumber($number) {
         $this->number = $number;
     }

     function setCvv($cvv) {
         $this->cvv = $cvv;
     }

     function setEndDate($endDate) {
         $this->endDate = $endDate;
     }

     function setOwner($owner) {
         $this->owner = $owner;
     }

     function setUser($user) {
         $this->user = $user;
     }

     function setDireccion($direccion) {
         $this->direccion = $direccion;
     }


    
    
    
}