<?php 

abstract class MProductList
{
    private $sku;
    private $name;
    private $price;
    private $size;
    private $height;
    private $width;
    private $length;
    private $weight;
    
    abstract public function setValues($sku, $name, $price, $size, $height, $width, $length, $weight);
    abstract public function getInfo();
}

?>
