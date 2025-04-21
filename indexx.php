<?php
abstract class productfeatures{
    abstract function productdetails();
    abstract function productImage();
    abstract function productOwnerDetails();

} 
class UplodeProduct extends productfeatures{
    function productdetails(){
        echo "product details";

    }
    function productImage(){
        echo "product image";
    }
    function productOwnerDetails(){
        echo "product owner details";
    }
}
$uplode=new UplodeProduct();
$uplode->productdetails();
echo "<br/>";
$uplode->productImage();
echo "<br/>";
$uplode->productOwnerDetails();
?>