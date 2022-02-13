<?php


namespace App\classes;


class Product
{
    protected $file;
    protected $directory;
    protected $products;
    protected $product;
    protected $price;
    protected $description;
    protected $imageName;
    protected $tempPath;


    public function __construct($post=null, $file=null)

    {
      $this->file      = $file;
      $this->imageName = $file['image']['name'];
      $this->imageName = $file['image']['tmp_name'];
      $this->directory = 'assets/img/product-image/'.$this->imageName;
    }

    public function index()
    {
        header('location: action.php?pages=add-product');
    }
    public function newProduct()
    {

        move_uploaded_file($this->tempPath, $this->directory);
    }
}
