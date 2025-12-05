<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thể loại</title>
    <style>
        body{
            margin-top:10vh;
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
    <div style="display:flex; justify-content:space-between; align-items:center; margin:auto; width:40%;">
        <h1>Thể loại</h1>
        <div>
            <a href="index.php?page_layout=themtheloai" class="btn">Thêm thể loại</a>
        </div>
    </div>
    <table width="40%" border=1 style="margin:auto;border-collapse: collapse;">
        <tr>
            <th>ID</th>
            <th>Tên thể loại</th>
        </tr>
        <?php
            include("connect.php");
            $sql = "SELECT * FROM `the_loai`";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["ten_the_loai"]?></td>
            <td class="chucnang">
                <a class="btn" href="index.php?page_layout=capnhattheloai&id=<?php echo $row["id"] ?>&tenTheLoai=<?php echo $row["ten_the_loai"]?>">Cập nhật</a>
                <a class="btn" style="background-color:red;" href="nguoidung/xoanguoidung.php?id=<?php echo $row["id"] ?>">Xóa</a>
            </td>
        </tr>
        <?php }?>
    </table>
</body>
</html>