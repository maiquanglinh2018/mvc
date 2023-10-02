<?php
require_once "models/db.php";

class Customer extends db {
    public function getCustomers() {
        $sql = "select * from customers";
        return $this->getData($sql);
    }

    public function createCustomer() {
        // Dữ liệu từ form
        $name = $_POST['name'];
        $age = $_POST['age'];

        // Chuẩn bị truy vấn SQL
        $sql = "INSERT INTO customers (ten, tuoi) VALUES (:ten, :tuoi)";

        // Chuẩn bị và thực thi truy vấn
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(':ten', $name);
        $stmt->bindParam(':tuoi', $age);

        $stmt->execute();
    }

    public function find($id)
    {
        return $this->connect->query("SELECT * FROM customers WHERE id = $id")->fetch();
    }

    public function updateCustomer()
    {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $id = $_POST['id'];

        // Chuẩn bị truy vấn SQL cập nhật
        $sql = "UPDATE customers SET ten = :ten_moi, tuoi = :tuoi_moi WHERE id = :id";

        // Chuẩn bị và thực thi truy vấn
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(':ten_moi', $name );
        $stmt->bindParam(':tuoi_moi', $age);
        $stmt->bindParam(':id', $id);


        $stmt->execute();
    }

    public function deleteCustomer()
    {
        $id = $_GET['id']; // Đây là ví dụ, bạn cần thay thế bằng ID thực tế của bản ghi cần xóa

        // Chuẩn bị truy vấn SQL xóa
        $sql = "DELETE FROM customers WHERE id = :id";

        // Chuẩn bị và thực thi truy vấn
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT); // Thay thế id bằng ID của bản ghi cần xóa

        $stmt->execute();
    }
}