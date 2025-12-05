<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quốc gia</title>
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
        <h1>Quốc gia</h1>
        <div>
            <a href="index.php?page_layout=themquocgia" class="btn">Thêm quốc gia</a>
        </div>

    </div>
    <table width="40%" border=1 style="margin:auto;border-collapse: collapse;">
        <tr>
            <th>ID</th>
            <th>Tên quốc gia</th>
            <th>Chức năng</th>
        </tr>
        <?php
            include("connect.php");
            $sql = "SELECT * FROM `quoc_gia`";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["ten_quoc_gia"]?></td>
            <td class="chucnang">
                <a class="btn" href="index.php?page_layout=capnhatquocgia&id=<?php echo $row["id"] ?>&tenQuocGia=<?php echo $row["ten_quoc_gia"] ?>">Cập nhật</a>
                <a class="btn" style="background-color:red;" href="quocgia/xoaquocgia.php?id=<?php echo $row["id"] ?>">Xóa</a>
            </td>
        </tr>
        <?php }?>
    </table>
</body>
</html>