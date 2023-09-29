<?php
require_once "models/Product.php";
class ProductController
{
   public function listProduct()
    {
        //tạo ra 1 biến hứng dữ liệu từ hàm của model
        $product = new Product();
        $products = $product->getProduct();
//    echo "<pre>";
//    var_dump($products);
//    die;
        include_once "views/product/list.php";
        // lấy dữ liệu từ model ra controller và tạo 1 view danh sách đổ xuống view
//    echo "Đây là trang danh sách product";
    }

   public function addProduct()
    {
        echo "Đây là trang thêm product";
    }

   public function editProduct()
    {
        echo "Đây là trang sửa product";
    }

   public function deleteProduct()
    {
        echo "Đây là chức năng xóa product";
    }
}