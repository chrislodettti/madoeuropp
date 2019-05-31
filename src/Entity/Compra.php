<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CompraRepository")
 */
class Compra 
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     *@ORM\Column(type="integer")
     */
    private $usuario_id;
    /**
     *@ORM\Column(type="string",length=45)
     */
    private $num_referencia ;
     /**
     *@ORM\Column(type="string",length=45)
     */
    private $marca ;
     /**
     *@ORM\Column(type="string",length=45)
     */
    private $modelo ;
     /**
     *@ORM\Column(type="string",length=45)
     */
    private $bastidor ;
    /**
     *@ORM\Column(type="integer")
     */
    private $price;

    /**
     *@ORM\Column(type="string",length=90)
     */
    private $matricula;
    
    
    
    
    
    function getId() {
        return $this->id;
    }
    function getUsuario_id() {
        return $this->usuario_id;
    }

    function getNum_referencia() {
        return $this->num_referencia;
    }

    function getMarca() {
        return $this->marca;
    }

    function getModelo() {
        return $this->modelo;
    }

    function getBastidor() {
        return $this->bastidor;
    }

    function getPrice() {
        return $this->price;
    }



    function getMatricula() {
        return $this->matricula;
    }

    function setUsuario_id($usuario_id) {
        $this->usuario_id = $usuario_id;
    }

    function setNum_referencia($num_referencia) {
        $this->num_referencia = $num_referencia;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setBastidor($bastidor) {
        $this->bastidor = $bastidor;
    }

    function setPrice($price) {
        $this->price = $price;
    }

    function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

}
