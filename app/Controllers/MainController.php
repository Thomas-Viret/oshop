<?php

namespace Oshop\Controllers;

use Oshop\Models\Category;

class MainController extends CoreController{

 

  public function home(){
    $categoryModel = new Category();
    $homeFiveCategory = $categoryModel->findHomeFive();
    $this->show('home', ['homeFiveCategory' => $homeFiveCategory]);

  }


  public function legalMentions(){
    $this->show('mentions');
  }

  public function pageNotFoundAction(){
    header('HTTP/1.0 404 Not Found');
    $this->show('404');
  }


}



?>