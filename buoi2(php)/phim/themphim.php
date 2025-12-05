<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Thêm phim</title>
    <style>
        body{
            margin-top: 30px;
        }
        .warning{
            color: red;
        }
        input{
            border-radius: 5px;
            width: 100%;
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
        .form{
            padding:10px;
            margin:0 5px;
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
    <?php
        if((!empty($_POST['ten_phim'])) && 
        (!empty($_POST['dao_dien_id'])) &&
        (!empty($_POST['nam_phat_hanh']))&&
        (!empty($_POST['poster'])) &&
        (!empty($_POST['quoc_gia_id'])) &&
        (!empty($_POST['so_tap'])) &&
        (!empty($_POST['trailer'])) &&
        (!empty($_POST['mo_ta']))){
            $tenPhim = $_POST['ten_phim'];
            $daoDien = $_POST['dao_dien_id'];
            $namPhatHanh = $_POST['nam_phat_hanh'];
            $poster = $_POST['poster'];
            $quocGia = $_POST['quoc_gia_id'];
            $soTap = $_POST['so_tap'];
            $trailer = $_POST['trailer'];
            $moTa = $_POST['mo_ta'];
            $sql = "INSERT INTO `phim`(`ten_phim`, `dao_dien_id`, `nam_phat_hanh`, `poster`, `quoc_gia_id`, `so_tap`, `trailer`, `mo_ta`) VALUES ('$tenPhim','$daoDien','$namPhatHanh','$poster','$quocGia','$soTap','$trailer','$moTa')";
            echo $sql;
            mysqli_query($conn, $sql);
            header('location:index.php?page_layout=phim');
        }
        else{
            echo "Vui long nhap day du thong tin!";
        }
    ?>
    
    <form action="index.php?page_layout=themphim" method="post">
        <!-- gửi thông tin đi: post, lấy thông tin: get -->
        <h1 style="text-align:center;">Thêm phim</h1>
        <div class="form">
            <p>Tên phim</p>
            <input type="text" name="ten_dang_nhap" placeholder="Tên phim">
        </div>
        <div class="form">
            <p>Đạo diễn</p>
            <select name="quoc_gia" id="">
                <option value="0">--Chọn đạo diễn--</option>
                <?php
                    include('../connect.php');

                    $sql = "SELECT * FROM nguoi_dung where vai_tro_id = 2" ;
                    $result = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<option value="' . $row['id'] . '">' . $row['ho_ten'] . '</option>';
                    }
                ?>
            </select>
            <a href="../index.php?page_layout=themnguoidung" class="btn">Thêm đạo diễn</a>
        </div>
        <div class="form">
            <p>Năm phát hành</p>
            <input type="text" name="ho_ten" placeholder="Năm phát hành">
        </div>
        <div class="form">
            <p>Poster</p>
            <input type="text" name="poster" placeholder="Đường dẫn poster">
        </div>
        <div class="form">
            <p>Quốc gia</p>
            <select name="quoc_gia" id="">
                <option value="0">--Chọn quốc gia--</option>
                <?php
                    include('../connect.php');

                    $sql = "SELECT * FROM quoc_gia";
                    $result = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<option value="' . $row['id'] . '">' . $row['ten_quoc_gia'] . '</option>';
                    }
                ?>
            </select>
            <a href="index.php?page_layout=themquocgia" class="btn">Thêm quốc gia</a>
        </div>
        <div class="form">
            <p>Số tập</p>
            <input type="number" name="so_tap" placeholder="Số tập">
        </div>
        <div class="form">
            <p>Trailer</p>
            <input type="text" name="trailer" placeholder="Đường dẫn trailer">
        </div>
        <div class="form">
            <p>Mô tả</p>
            <textarea name="mo_ta" id="" placeholder="Nhập mô tả phim..."></textarea>
        </div>
        <div class="form">
            <input type="submit" value="Thêm mới">
        </div>
    </form>
</body>
</html>
