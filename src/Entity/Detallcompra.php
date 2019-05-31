<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DetallcompraRepository")
 */
class Detallcompra 
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
    private $price ;
    /**
     *@ORM\Column(type="integer")
     */
    private $compra_id ;
        /**
     *@ORM\Column(type="integer")
     */
    private $vehiculo_id;
    
    /**
     *@ORM\Column(type="string",length=90)
     */
    private $numcuenta;
    
    /**
     *@ORM\Column(type="datetime")
     */
    private $create_date;
    
    
    /**
     * @ORM\ManyToOne(targetEntity= "App\Entity\Compra",inversedBy="detallcompras")
     * @ORM\JoinColumn(nullable=false)
     */
    private $compra;
    function getCompraId(){
        return $this->compra;
    }
    function setCompra($compra){
        $this->compra=$compra;
    }
    function getCompra(){
        return $this->compra;
    }
    
    /**
     * @ORM\ManyToOne(targetEntity= "App\Entity\Vehicle",inversedBy="detallcompras")
     * @ORM\JoinColumn(nullable=false)
     */
    private $vehicle;
    function getVehicleId(){
        return $this->vehicle;
    }
    function getVehicle(){
        return $this->vehicle;
    }
    function setVehicle($vehicle){
        $this->vehicle=$vehicle;
    }
    
    
    
    function getId() {
        return $this->id;
    }

    function getPrice() {
        return $this->price;
    }

    function getCompra_id() {
        return $this->compra_id;
    }

    function getVehiculo_id() {
        return $this->vehiculo_id;
    }

    function getNumcuenta() {
        return $this->numcuenta;
    }

    function getCreate_date() {
        return $this->create_date;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setPrice($price) {
        $this->price = $price;
    }


    function setCompra_id($compra_id) {
        $this->compra_id = $compra_id;
    }

    function setVehiculo_id($vehiculo_id) {
        $this->vehiculo_id = $vehiculo_id;
    }

    function setNumcuenta($numcuenta) {
        $this->numcuenta = $numcuenta;
    }

    function setCreate_date($create_date) {
        $this->create_date = $create_date;
    }


}
    
