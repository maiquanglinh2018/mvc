<?php
require_once  'controllers/CustomerController.php';

$request = rtrim($_SERVER['REQUEST_URI'], '/');
$query_string = !empty($_SERVER['QUERY_STRING']) ? '?'.$_SERVER['QUERY_STRING'] : '';

switch ($request) {
    case '/':

        //điều hướng về hàm listProduct trong productController
        $customerController = new CustomerController();
        $customerController->listCustomer();
        break;
    case '/add':
        $customerController = new CustomerController();
        $customerController->addCustomer();
        break;
    case '/create':
        $customerController = new CustomerController();
        $customerController->createCustomer();
        break;
    case '/edit'.$query_string:

        $customerController = new CustomerController();
        $customerController->editCustomer();
        break;
    case '/edit-save'.$query_string :
        $customerController = new CustomerController();
        $customerController->saveEdit();
        break;
    case '/delete'.$query_string:
        $customerController = new CustomerController();
        $customerController->deleteCustomer();
        break;
    // kiểm tra case = add-producrt điều hướng về hàm addProduct
}

// xây dựng 1 bảng trên CSDL  (customer) gồm id,ten,tuoi
//tạo model Customer xây dựng những hàm getCustomer,
//addCustomer - thêm
//editCustomer - Sửa
//deleteCustomer - xóa
// hoàn thiện các chức năng danh sách customer, thêm
//sửa,xóa customer
// lấy điểm lab 1 + 2