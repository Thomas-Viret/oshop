<?php 

namespace Oshop\Models;

use Oshop\Utils\Database;
use PDO;


class CoreModel {

  protected $id;
  protected $created_at;
  protected $updated_at;

  /**
   * Get the value of id
   */ 
  public function getId()
  {
    return $this->id;
  }

  /**
   * Get the value of created_at
   */ 
  public function getCreated_at()
  {
    return $this->created_at;
  }

  /**
   * Get the value of updated_at
   */ 
  public function getUpdated_at()
  {
    return $this->updated_at;
  }

}// fin de class CoreModel
?>