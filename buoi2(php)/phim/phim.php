<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phim</title>
    <style>
        body{
            margin-top: 30px;
            text-align:center;
        }
        table{
            width: 100%;
            border-collapse: collapse; 
        }
        .btn{
            background-color:white;
            border: 1px solid black;
            border-radius: 5px;
            padding:5px;
        }
        .chucnang{
            display: flex;
            justify-content:center;
            gap:10px;
        }
        a{
            color:black;
            text-decoration:none;
        }
    </style>
</head>
<body>
    <div style="display:flex; justify-content:space-between; align-items:center;">
        <h1>Thông tin Phim</h1>
        <div>
            <a href="index.php?page_layout=themphim" class="btn">Thêm Phim</a>
        </div>
    </div>
    <table border=1>
        <tr>
            <th>Tên phim</th>
            <th>Đạo diễn</th>
            <th>Năm phát hành</th>
            <th>Poster</th>
            <th>Quốc gia</th>
            <th>Số tập</th>
            <th>Trailer</th>
            <th>Mô tả</th>
            <th>Chức năng</th>
        </tr>
        <?php 
            include("connect.php");
            $sql = "SELECT p.*, qg.ten_quoc_gia, dd.ho_ten FROM phim p join quoc_gia qg on qg.id = p.quoc_gia_id JOIN nguoi_dung dd ON dd.id = p.dao_dien_id";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $row["ten_phim"]?></td>
            <td><?php echo $row["ho_ten"]?></td>
            <td><?php echo $row["nam_phat_hanh"]?></td>
            <td><?php echo $row["poster"]?></td>
            <td><?php echo $row["ten_quoc_gia"]?></td>
            <td><?php echo $row["so_tap"]?></td>
            <td><?php echo $row["trailer"]?></td>
            <td><?php echo $row["mo_ta"]?></td>
            <td class="chucnang">
                <a class="btn" href="phim/capnhatphim.php?id=<?php echo $row["id"]; ?>">Cập nhật</a>
                <a class="btn" style="background-color:red;" href="phim/xoaphim.php?id=<?php echo $row["id"]; ?>">Xóa</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>