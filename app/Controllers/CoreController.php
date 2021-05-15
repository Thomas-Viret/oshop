<?php

namespace Oshop\Controllers;

use Oshop\Models\Brand;
use Oshop\Models\Type;
use Oshop\Models\Category;

class CoreController{
   
    /**
     * Méthode permettant d'afficher un rendu HTML
     *
     * @param string $viewName
     * @param array $viewData
     * @return void
     */
  protected function show($viewName, $viewData = []){

    $absoluteURL = $_SERVER['BASE_URI'];
    global $router;
    $brandModel = new Brand();
    $footerFiveBrands = $brandModel->findFooterFive();
    $typeModel = new Type();
    $footerFiveType = $typeModel->findAllForFooter();

    extract($viewData);

    require __DIR__ . '/../views/header.tpl.php';
    require __DIR__ . '/../views/' . $viewName . '.tpl.php';
    require __DIR__ . '/../views/footer.tpl.php';
  }










}// fin de class CoreController

?>