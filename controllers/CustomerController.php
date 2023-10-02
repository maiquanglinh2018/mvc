<?php
require_once "models/Customer.php";

class CustomerController
{
   public function listCustomer()
    {
        //tạo ra 1 biến hứng dữ liệu từ hàm của model
        $model = new Customer();
        $customers = $model->getCustomers();
//    echo "<pre>";
//    var_dump($products);
//    die;
        include_once "views/customer/list.php";
        // lấy dữ liệu từ model ra controller và tạo 1 view danh sách đổ xuống view
//    echo "Đây là trang danh sách product";
    }

    public function addCustomer()
    {
        require_once "views/customer/add.php";
    }

   public function createCustomer()
    {
        $model = new Customer();
        $model->createCustomer();

        header("Location: /");
    }

    public function editCustomer()
    {
        $customer = (new Customer())->find($_GET['id']);

        require_once "views/customer/edit.php";
    }

    public function saveEdit()
    {
        $model = new Customer();
        $model->updateCustomer();

        header("Location: /");
    }


    public function deleteCustomer()
    {
        $model = new Customer();
        $model->deleteCustomer();

        header("Location: /");
    }
}