<?php

namespace Oshop\Models;
use Oshop\Utils\Database;
use PDO;

class Category extends CoreModel{


  private $name;
  private $subtitle;
  private $picture;
  private $home_order;


  public function findAll(){
    $sql = ' 
    SELECT * FROM `category`
    ';
    $pdo = Database::getPDO();
    $pdoStatement = $pdo->query($sql);
    $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, static::class);
    return $results;
  }



  public function find($id){
    $sql = ' 
    SELECT * FROM `category` WHERE id = ' . $id;
    $pdo = Database::getPDO();
    $pdoStatement = $pdo->query($sql);
    $result = $pdoStatement->fetchObject(static::class);
    return $result;
  }

  public function findHomeFive(){
    $sql = ' 
      SELECT *
      FROM `category`
      WHERE home_order > 0
      ORDER BY home_order
      LIMIT 5
    ';

    $pdo = Database::getPDO();
    $pdoStatement = $pdo->query($sql);
    $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, static::class);
    return $results;
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
   *
   * @return  self
   */ 
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }


  /**
   * Get the value of home_order
   */ 
  public function getHome_order()
  {
    return $this->home_order;
  }


  /**
   * Get the value of subtitle
   */ 
  public function getSubtitle()
  {
    return $this->subtitle;
  }

  /**
   * Get the value of picture
   */ 
  public function getPicture()
  {
    return $this->picture;
  }
  
}// fin de class Category













?>