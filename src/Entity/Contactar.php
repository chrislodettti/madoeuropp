<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContactarRepository")
 */
class Contactar
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
    private $nombre ;
    /**
      *@ORM\Column(type="string",length=45)
     */
    private $apellido;
    /**
     *@ORM\Column(type="string",length=45)
     */
    private $email;
       /**
     *@ORM\Column(type="string",length=45)
     */
    private $mensaje;
    
     /**
     *@ORM\Column(type="integer")
     */
    private $telefono;
    function getTelefono() {
        return $this->telefono;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

        function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getEmail() {
        return $this->email;
    }

    function getMensaje() {
        return $this->mensaje;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setMensaje($mensaje) {
        $this->mensaje = $mensaje;
    }


    
 }