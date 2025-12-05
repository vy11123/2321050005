<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Cập nhật phim</title>
    <style>
        .warning{
            color: red;
        }
        body{
            margin-top:30px;
        }
        form{
            color:black;
            margin:auto;
            width:40%;
            flex-direction:column;
            border:1px solid;
            border-radius:5px;
            display:flex;
            padding:10px;
            gap:10px;
        }
        input{
            border-radius:5px;
            width:100%;
        }
        .form{
            margin:10px;
            border: 1 solid black;
        }
    </style>
</head>
<body>
    <?php
        include(__DIR__ . "/../connect.php");
        $id = $_GET['id'];
        $sql = "SELECT * from phim where id = '$id'";
        $result = mysqli_query($conn,$sql);
        $phim = mysqli_fetch_assoc($result);
    ?>
    <?php
        if((!empty($_POST['ten_phim'])) && 
        (!empty($_POST['ho_ten'])) &&
        (!empty($_POST['nam_phat_hanh']))&&
        (!empty($_POST['poster'])) &&
        (!empty($_POST['ten_quoc_gia'])) &&
        (!empty($_POST['so_tap'])) &&
        (!empty($_POST['trailer'])) &&
        (!empty($_POST['mo_ta']))){
            $tenPhim = $_POST['ten_phim'];
            $hoTen = $_POST['ho_ten'];
            $namPhatHanh = $_POST['nam_phat_hanh'];
            $poster = $_POST['poster'];
            $tenQuocGia = $_POST['ten_quoc_gia'];
            $soTap = $_POST['so_tap'];
            $trailer = $_POST['trailer'];
            $moTa = $_POST['mo_ta'];
            $sql = "UPDATE `phim` SET `ten_phim`='$tenPhim',`dao_dien_id`='$hoTen',`nam_phat_hanh`='$namPhatHanh',`poster`='$poster',`quoc_gia_id`='$tenQuocGia',`so_tap`='$soTap',`trailer`='$trailer',`mo_ta`='$moTa' WHERE id='$id'";
            echo $sql;
            $result=mysqli_query($conn, $sql);
            header('location:index.php?page_layout=phim');
        }
        else{
            echo "Vui long nhap day du thong tin!";
        }
    ?>
    <form action="../index.php?page_layout=capnhatphim&id=<?php echo $id ?>" method="post">
        <!-- gửi thông tin đi: post, lấy thông tin: get -->
        <h1 style="text-align:center;">Cập nhật phim</h1>
        <div class="form">
            <p>Tên phim</p>
            <input type="text" name="ten_phim" placeholder="Tên phim" value="<?php echo $phim['ten_phim'] ?>">
        </div>
        <div class="form">
            <p>Họ tên</p>
            <input type="text" name="ho_ten" placeholder="Họ tên" value="<?php echo $phim['dao_dien_id'] ?>">
        </div>
        <div class="form">
            <p>Năm phát hành</p>
            <input type="text" name="nam_phat_hanh" placeholder="Năm phát hành" value="<?php echo $phim['nam_phat_hanh'] ?>">
        </div>
        <div class="form">
            <p>Poster</p>
            <input type="poster" name="poster" placeholder="Poster" value="<?php echo $phim['poster'] ?>">
        </div>
        <div class="form">
            <p>Tên quốc gia</p>
            <input type="text" name="ten_quoc_gia" placeholder="Tên quốc gia" value="<?php echo $phim['quoc_gia_id'] ?>">
        </div>
        <div class="form">
            <p>Số tập</p>
            <input type="number" name="so_tap" placeholder="Số tập" value="<?php echo $phim['so_tap'] ?>">
        </div>
        <div class="form">
            <p>Trailer</p>
            <input type="text" name="trailer" placeholder="Trailer" value="<?php echo $phim['trailer'] ?>">
        </div>
        <div class="form">
            <p>Mô tả</p>
            <input type="text" name="mo_ta" placeholder="Mô tả" value="<?php echo $phim['mo_ta'] ?>">
        </div>
        <div>
            <input type="submit" value="Cap nhat">
        </div>
    </form>
</body>
</html>