<?php 

require __DIR__ . '/../vendor/autoload.php';

$router = new AltoRouter();

$router->setBasePath($_SERVER['BASE_URI']);

// route HOME
$router->map(
  'GET', 
  '/', 

  [
    'action' => 'home',
    'controller' => 'MainController'
  ],
  'home' 
);

// route catalogue/categorie
$router->map(
  'GET',
  '/catalogue/categorie/[i:id]',
  [
    'action' => 'category',
    'controller' => 'CatalogController'
  ],
  'catalog-category'
);



$router->map(
  'GET',
  '/catalogue/categories',
  [
    'action' => 'allCategories',
    'controller' => 'CatalogController'
  ],
  'catalog-categories'
);



// route mentions-legales
$router->map(
  'GET',
  '/mentions-legales/',
  [
    'action' => 'legalMentions',
    'controller' => 'MainController'
  ],
  'legal-mentions'
);

// route catalogue/type/id
$router->map(
  'GET',
  '/catalogue/type/[i:id]',
  [
    'action' => 'type',
    'controller' => 'CatalogController'
  ],
  'catalog-type'
);


$router->map(
  'GET',
  '/catalogue/types',
  [
    'action' => 'allTypes',
    'controller' => 'CatalogController'
  ],
  'catalog-types'
);

// route catalogue/marque/id
$router->map(
  'GET',
  '/catalogue/marque/[i:id]',
  [
    'action' => 'brand',
    'controller' => 'CatalogController'
  ],
  'catalog-brand'
);

$router->map(
  'GET',
  '/catalogue/marques',
  [
    'action' => 'allBrands',
    'controller' => 'CatalogController'
  ],
  'catalog-brands'
);

// route catalogue/produit/id
$router->map(
  'GET',
  '/catalogue/produit/[i:id]',
  [
    'action' => 'product',
    'controller' => 'CatalogController'
  ],
  'catalog-product'
);

$match = $router->match();


if($match){

  $controllerToUse = '\Oshop\Controllers\\' . $match['target']['controller'];
  $methodToUse = $match['target']['action'];
  $controller = new $controllerToUse();
  $controller->$methodToUse($match['params']);
} else {
  $controller = new Oshop\Controllers\MainController();
  $controller->pageNotFoundAction();
}


?>