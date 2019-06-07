<?php

namespace src\entities;
class Produit
{
  private $id;
  private $name;
  private $description;
  private $price;
  private $nbVues;
  private $date_creation;
  private $date_modification;
  private $etat_publication;
  private $image_name;

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

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {

        if ($price > 0) {
            $this->price = $price;
        } else {
            $this->price = 0;
        }
    }

    /**
     * @return mixed
     */
    public function getNbVues()
    {
        return $this->nbVues;
    }

    /**
     * @param mixed $nbVues
     */
    public function setNbVues($nbVues)
    {
        $this->nbVues = $nbVues;
    }

    /**
     * @return mixed
     */
    public function getDateCreation()
    {
        return $this->date_creation;
    }

    /**
     * @param mixed $date_creation
     */
    public function setDateCreation($date_creation)
    {
        $this->date_creation = $date_creation;
    }

    /**
     * @return mixed
     */
    public function getDateModification()
    {
        return $this->date_modification;
    }

    /**
     * @param mixed $date_modification
     */
    public function setDateModification($date_modification)
    {
        $this->date_modification = $date_modification;
    }

    /**
     * @return mixed
     */
    public function getEtatPublication()
    {
        return $this->etat_publication;
    }

    /**
     * @param mixed $etat_publication
     */
    public function setEtatPublication($etat_publication)
    {
        $this->etat_publication = $etat_publication;
    }

    /**
     * @return mixed
     */
    public function getImageName()
    {
        return $this->image_name;
    }

    /**
     * @param mixed $image_name
     */
    public function setImageName($image_name)
    {
        $this->image_name = $image_name;
    }


}