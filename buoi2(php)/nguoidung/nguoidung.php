<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Người dùng</title>
    <style>
        body{
            margin-top: 30px;
        }
        table{
            width: 100%;
            border-collapse: collapse; 
        }
        .chucnang{
            display: flex;
            justify-content:center;
            gap:10px;
        }
        .btn{
            background-color:white;
            border: 1px solid black;
            border-radius: 5px;
            padding:5px;
        }
        a{
            color:black;
            text-decoration:none;
        }
    </style>
</head>
<body>
    <div style="display:flex; justify-content:space-between; align-items:center;">
        <h1>Thông tin Người dùng</h1>
        <div>
            <a href="index.php?page_layout=themnguoidung" class="btn">Thêm người dùng</a>
        </div>
    </div>
    
    <table border=1>
        <tr>
            <th>ID</th>
            <th>Tên đăng nhập</th>
            <th>Họ tên</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Vai trò</th>
            <th>Ngày sinh</th>
            <th>Chức năng</th>
        </tr>
        <?php
            include("connect.php");
            $sql ="SELECT nd.*, vt.ten_vai_tro FROM nguoi_dung nd join vai_tro vt on nd.vai_tro_id = vt.id";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){    
        ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["ten_dang_nhap"]; ?></td>
            <td><?php echo $row["ho_ten"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["sdt"]; ?></td>
            <td><?php echo $row["ten_vai_tro"]; ?></td>
            <td><?php echo $row["ngay_sinh"]; ?></td>
            <td class="chucnang">
                <a class="btn" href="nguoidung/capnhatnguoidung.php?id=<?php echo $row["id"] ?>">Cập nhật</a>
                <a class="btn" style="background-color:red;" href="nguoidung/xoanguoidung.php?id=<?php echo $row["id"] ?>">Xóa</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>