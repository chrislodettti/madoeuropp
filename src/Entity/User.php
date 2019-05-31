<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     *@ORM\Column(type="string",length=45)
     */
    
      private $nombre;
    /**
     *@ORM\Column(type="string",length=45)
     */
      
        private $apellido;
        
    /**
     *@ORM\Column(type="string",length=45)
     */
        
    private $razon_social;
        
    /**
     *@ORM\Column(type="string",length=45)
     */
        private $telefono;
        
    /**
     *@ORM\Column(type="string",length=45)
     */
    private $username;
    /**
     *@ORM\Column(type="string",length=90)
     */
    private $password;
    /**
     *@ORM\Column(type="string",length=45)
     */
    private $role;
    /**
     *@ORM\Column(type="string",length=45)
     */
    private $email;
    
    /**
     *@ORM\Column(type="integer",length=11)
     */
    
      private $compra_id;
      function getRazon_social() {
          return $this->razon_social;
      }

      function getCompra_id() {
          return $this->compra_id;
      }

      function setRazon_social($razon_social) {
          $this->razon_social = $razon_social;
      }

      function setCompra_id($compra_id) {
          $this->compra_id = $compra_id;
      }

          
    public function getPosts(){
    return $this->posts;
    }
        
    public function __construct(){
    $this->posts=new ArrayCollection();
    }
    function getId() {
        return $this->id;
    }
    
        function getnombre() {
        return $this->nombre;
    }
        function getapellido() {
        return $this->apellido;
    }
        function getrazonsocial() {
        return $this->razon_social;
    }
    
        function gettelefono() {
        return $this->telefono;
    }

    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

    function getRole() {
        return $this->role;
    }

    function getEmail() {
        return $this->email;
    }

    function getTeamRole() {
        return $this->teamRole;
    }

        function setNombre($nombre) {
        $this->nombre = $nombre;
    }
         function setApellido($apellido) {
        $this->apellido = $apellido;
    }
         function setRazonsocial($razonsocial) {
        $this->razon_social = $razonsocial;
    }
         function setTelefono($telefono) {
        $this->telefono = $telefono;
    }
    function setUsername($username) {
        $this->username = $username;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setRole($role) {
        $this->role = $role;
    }

    function setEmail($email) {
        $this->email = $email;
    }



    public function getRoles() {
        return array($this->role);
    }

    public function getSalt() {
        
    }

    public function eraseCredentials() {
        
    }

}
