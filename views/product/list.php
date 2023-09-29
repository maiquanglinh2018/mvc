<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Tên sản phẩm</td>
            <td>Giá</td>
        </tr>
        <?php foreach ($products as $key=>$value) { ?>
        <tr>
            <td><?php echo $value['id'];?></td>
            <td><?php echo $value['ten_sp'];?></td>
            <td><?php echo $value['gia'];?></td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>