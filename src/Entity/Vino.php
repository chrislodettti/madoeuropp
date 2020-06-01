<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Vino
 * 
 * @ORM\Entity(repositoryClass="App\Repository\VinoRepository")
 */

Class Vino {
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
    private $volumen;
          /**
     *@ORM\Column(type="string",length=45)
     */
    private $vol_Alcohol;
        /**
     *@ORM\Column(type="integer")
     */
    private $yearvendimia;
    
     /**
     *@ORM\Column(type="string",length=45)
     */
    private $uvas;
    
    /**
     *@ORM\Column(type="string",length=45)
     */
    private $denominacion;
    
    /**
     *@ORM\Column(type="string",length=45)
     */
    private $Alergenos;
    
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
    private $Tipovino;
    
        /**
     * Constructor
     */
    public function __construct()
    {
        $this->sell = new \Doctrine\Common\Collections\ArrayCollection();

    }
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getVolumen() {
        return $this->volumen;
    }

    function getVol_Alcohol() {
        return $this->vol_Alcohol;
    }

    function getYearvendimia() {
        return $this->yearvendimia;
    }

    function getUvas() {
        return $this->uvas;
    }

    function getDenominacion() {
        return $this->denominacion;
    }

    function getAlergenos() {
        return $this->Alergenos;
    }

    function getCompra_id() {
        return $this->compra_id;
    }

    function getMarca_id() {
        return $this->marca_id;
    }

    function getLogo() {
        return $this->logo;
    }

    function getPrice() {
        return $this->price;
    }

    function getTipovino() {
        return $this->Tipovino;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setVolumen($volumen) {
        $this->volumen = $volumen;
    }

    function setVol_Alcohol($vol_Alcohol) {
        $this->vol_Alcohol = $vol_Alcohol;
    }

    function setYearvendimia($yearvendimia) {
        $this->yearvendimia = $yearvendimia;
    }

    function setUvas($uvas) {
        $this->uvas = $uvas;
    }

    function setDenominacion($denominacion) {
        $this->denominacion = $denominacion;
    }

    function setAlergenos($Alergenos) {
        $this->Alergenos = $Alergenos;
    }

    function setCompra_id($compra_id) {
        $this->compra_id = $compra_id;
    }

    function setMarca_id($marca_id) {
        $this->marca_id = $marca_id;
    }

    function setLogo($logo) {
        $this->logo = $logo;
    }

    function setPrice($price) {
        $this->price = $price;
    }

    function setTipovino($Tipovino) {
        $this->Tipovino = $Tipovino;
    }


    
   

    
}
