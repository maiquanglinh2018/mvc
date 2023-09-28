<?php
require_once "models/db.php";
//model lấy danh sách product
//function getProduct() {
//    $sql = "select * from product";
//    return getData($sql);
//}
class Product extends db{
    public function getProduct() {
        $sql = "select * from product";
        return $this->getData($sql);
    }
}