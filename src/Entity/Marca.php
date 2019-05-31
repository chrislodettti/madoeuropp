<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

class Marca
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
    private $name;
    /**
     *@ORM\Column(type="string",length=45)
     */
    private $model;
 
  
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getModel() {
        return $this->model;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setModel($model) {
        $this->model = $model;
    }


}