<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VehicleRepository")
 */
class Vehicle
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
    private $Km;
    /**
    *@ORM\Column(type="integer")
     */
    private $plazas ;
     /**
     *@ORM\Column(type="integer")
     */
    private $puertas ;

     /**
     *@ORM\Column(type="string",length=45)
     */
    private $color ;
    /**
      *@ORM\Column(type="string",length=45)
     */
    private $marca;
    /**
     *@ORM\Column(type="string",length=45)
     */
    private $modelo;
    /**
     *@ORM\Column(type="integer")
     */
    private $compra_id;
    /**
     *@ORM\Column(type="integer")
     */
    private $marca_id;
    
     /**
     *@ORM\Column(type="string",length=45)
     */
    private $logo;
    
     /**
     *@ORM\Column(type="string",length=45)
     */
    private $price;
       /**
     *@ORM\Column(type="string",length=45)
     */
    private $vehiclekey;
   
         /**
     *@ORM\Column(type="string",length=45)
     */
    private $cambio ;
    
         /**
     *@ORM\Column(type="string",length=45)
     */
    private $combustible ;
  
    function getVehiclekey() {
        return $this->vehiclekey;
    }

    function setVehiclekey($vehiclekey) {
        $this->vehiclekey = $vehiclekey;
    }

        function getLogo() {
        return $this->logo;
    }

    function getPrice() {
        return $this->price;
    }

    function setLogo($logo) {
        $this->logo = $logo;
    }

    function setPrice($price) {
        $this->price = $price;
    }
    function getCambio() {
        return $this->cambio;
    }

    function getCombustible() {
        return $this->combustible;
    }

    function setCambio($cambio) {
        $this->cambio = $cambio;
    }

    function setCombustible($combustible) {
        $this->combustible = $combustible;
    }

            
    function getId() {
        return $this->id;
    }

    function getKm() {
        return $this->Km;
    }

    function getPlazas() {
        return $this->plazas;
    }

    function getPuertas() {
        return $this->puertas;
    }


    function getColor() {
        return $this->color;
    }

    function getMarca() {
        return $this->marca;
    }

    function getModelo() {
        return $this->modelo;
    }

    function getCompra_id() {
        return $this->compra_id;
    }

    function getMarca_id() {
        return $this->marca_id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setKm($Km) {
        $this->Km = $Km;
    }

    function setPlazas($plazas) {
        $this->plazas = $plazas;
    }

    function setPuertas($puertas) {
        $this->puertas = $puertas;
    }


    function setColor($color) {
        $this->color = $color;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setCompra_id($compra_id) {
        $this->compra_id = $compra_id;
    }

    function setMarca_id($marca_id) {
        $this->marca_id = $marca_id;
    }


    
 }