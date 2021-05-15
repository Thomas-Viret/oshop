<?php

namespace Oshop\Controllers;

use Oshop\Models\Category;
use Oshop\Models\Product;
use Oshop\Models\Brand;
use Oshop\Models\Type;

class CatalogController extends CoreController{

  function category($params){


    //$params['id'] OU $datas['categoryId']
    $categoryModel = new Category();

    $categorie = $categoryModel->find($params['id']);

    $productModel = new Product();
    $products = $productModel->findAllByCategory($params['id']);
    

    $this->show('category', [
      'category' => $categorie,
      'products' => $products
    ]);
  }

  function allCategories(){
    $categoryModel = new Category();
    $categories = $categoryModel->findAll();
    $this->show('allcategories', [
      'categories' => $categories,
    ]);
  }

  //----------------------------------------------
  //----------------------------------------------
  function type($params){

    $typeModel = new Type();
    $type = $typeModel->find($params['id']);


    $productModel = new Product();

    $products = $productModel->findAllByType($params['id']);

    $this->show('type', [
      'type' => $type,
      'products' => $products
      ]);

  }


  function allTypes(){
    $typeModel = new Type();
    $types = $typeModel->findAll();
    $this->show('alltypes', [
      'types' => $types,
    ]);
  }

  //----------------------------------------------
  //----------------------------------------------
  function brand($params){

    $brandModel = new Brand();
    $brand = $brandModel->find($params['id']);

    $productModel = new Product();
    $products = $productModel->findAllByBrand($params['id']);

    $this->show('brand', [
      'marque' => $brand,
      'products' => $products
    ]);
  }

  function allBrands(){
    $brandModel = new Brand();
    $brands = $brandModel->findAll();
    $this->show('allbrands', [
      'brands' => $brands,
    ]);
  }

  //----------------------------------------------
  //----------------------------------------------
  function product($params){
   
    $typeModel = new Product();
    $product = $typeModel->find($params['id']);
    $typeCategory= new Category();
    $categoryProduct = $typeCategory->find($product->getCategoryId());
    $typeBrand = new Brand();
    $brandProduct = $typeBrand->find($product->getBrandId());

    $this->show('product', [
      'produit' => $product,
      'categorie' => $categoryProduct,
      'brand' => $brandProduct
      
      ]);
  }

  
  
}



?>