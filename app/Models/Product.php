<?php

namespace Oshop\Models;

use Oshop\Utils\Database;
use PDO;

class Product extends CoreModel{


    private $name;
    private $description;
    private $picture;
    private $price;
    private $rate;
    private $status;
    private $brand_id;
    private $category_id;
    private $type_id;

    public function findAll(){
        $sql = ' 
        SELECT * FROM `product`
        ';

        $pdo = Database::getPDO();

        $pdoStatement = $pdo->query($sql);

        $products = $pdoStatement->fetchAll(PDO::FETCH_CLASS, static::class);
        return $products;
    }

    //Methode pour chercher les produits par categorie
    public function findAllByCategory($categoryId){
        $sql = ' 
        SELECT * FROM `product` WHERE category_id = 
        ' . $categoryId;
        $pdo = Database::getPDO();

        $pdoStatement = $pdo->query($sql);

        $products = $pdoStatement->fetchAll(PDO::FETCH_CLASS, static::class);
        return $products;
        
    }

    //Methode pour chercher les produits par type
    public function findAllByType($typeId){
        $sql = ' 
        SELECT * FROM `product` WHERE type_id = 
        ' . $typeId;
        $pdo = Database::getPDO();

        $pdoStatement = $pdo->query($sql);

        $products = $pdoStatement->fetchAll(PDO::FETCH_CLASS, static::class);
        return $products;
        
    }

    //Methode pour chercher les produits par marque
    public function findAllByBrand($brandId){
        $sql = ' 
        SELECT * FROM `product` WHERE brand_id = 
        ' . $brandId;
        $pdo = Database::getPDO();

        $pdoStatement = $pdo->query($sql);

        $products = $pdoStatement->fetchAll(PDO::FETCH_CLASS, static::class);
        return $products;
        
    }

    public function find($id){
  
        $sql = ' 
        SELECT * FROM `product` WHERE id = ' . $id;
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $result = $pdoStatement->fetchObject(static::class);
        return $result;
      }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */ 
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */ 
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get the value of picture
     */ 
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     */ 
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     */ 
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Get the value of rate
     */ 
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set the value of rate
     */ 
    public function setRate($rate)
    {
        $this->rate = $rate;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     */ 
    public function setStatus($status)
    {
        $this->status = $status;
    }


    /**
     * Get the value of brand_id
     */ 
    public function getBrandId()
    {
        return $this->brand_id;
    }

    /**
     * Set the value of brand_id
     */ 
    public function setBrandId($brand_id)
    {
        $this->brand_id = $brand_id;
    }

    /**
     * Get the value of category_id
     */ 
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * Set the value of category_id
     */ 
    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;
    }

    /**
     * Get the value of type_id
     */ 
    public function getTypeId()
    {
        return $this->type_id;
    }

    /**
     * Set the value of type_id
     */ 
    public function setTypeId($type_id)
    {
        $this->type_id = $type_id;
    }


    
  








}// fin de definition de class

?>