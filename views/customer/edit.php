<!DOCTYPE html>
<html>
<head>
    <title>Thông tin cá nhân</title>
</head>
<body>
<h1>Nhập thông tin cá nhân</h1>
<form action="/edit-save" method="POST">
    <input type="hidden" name="id" value="<?= $customer['id']?> ">
    <label for="name">Tên:</label>
    <input type="text" id="name" name="name" required value="<?= $customer['ten']?>">
    <br><br>
    <label for="age">Tuổi:</label>
    <input type="number" id="age" name="age" required value="<?= $customer['tuoi']?>">
    <br><br>
    <input type="submit" value="Gửi">
</form>
</body>
</html>