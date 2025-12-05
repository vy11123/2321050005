<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Cập nhật người dùng</title>
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
        $sql = "SELECT * from nguoi_dung where id = '$id'";
        $result = mysqli_query($conn,$sql);
        $nguoiDung = mysqli_fetch_assoc($result);
    ?>
    <?php
        if((!empty($_POST['ten_dang_nhap'])) && 
        (!empty($_POST['mat_khau'])) &&
        (!empty($_POST['ho_ten']))&&
        (!empty($_POST['sdt'])) &&
        (!empty($_POST['email'])) &&
        (!empty($_POST['ngay_sinh'])) &&
        (!empty($_POST['vai_tro']))){
            $tenDangNhap = $_POST['ten_dang_nhap'];
            $password = $_POST['mat_khau'];
            $hoTen = $_POST['ho_ten'];
            $soDienThoai = $_POST['sdt'];
            $email = $_POST['email'];
            $vaiTro = $_POST['vai_tro'];
            $ngaySinh = $_POST['ngay_sinh'];
            $sql = "UPDATE `nguoi_dung` SET `ten_dang_nhap`='$tenDangNhap',`mat_khau`='$password',`ho_ten`='$hoTen',`email`='$email',`sdt`='$soDienThoai',`vai_tro_id`='$vaiTro',`ngay_sinh`='$ngaySinh' WHERE id='$id'";
            echo $sql;
            $result=mysqli_query($conn, $sql);
            header('location:index.php?page_layout=nguoidung');
        }
        else{
            echo "Vui long nhap day du thong tin!";
        }
    ?>
    <form action="../index.php?page_layout=capnhatnguoidung&id=<?php echo $id ?>" method="post">
        <!-- gửi thông tin đi: post, lấy thông tin: get -->
        <h1 style="text-align:center;">Cập nhật người dùng</h1>
        <div class="form">
            <p>Tên đăng nhập</p>
            <input type="text" name="ten_dang_nhap" placeholder="Tên đăng nhập" value="<?php echo $nguoiDung['ten_dang_nhap'] ?>">
        </div>
        <div class="form">
            <p>Mật khẩu</p>
            <input type="password" name="mat_khau" placeholder="Mật khẩu" value="<?php echo $nguoiDung['mat_khau'] ?>">
        </div>
        <div class="form">
            <p>Họ tên</p>
            <input type="text" name="ho_ten" placeholder="Họ tên" value="<?php echo $nguoiDung['ho_ten'] ?>">
        </div>
        <div class="form">
            <p>Email</p>
            <input type="email" name="email" placeholder="Email" value="<?php echo $nguoiDung['email'] ?>">
        </div>
        <div class="form">
            <p>Số điện thoại</p>
            <input type="text" name="sdt" placeholder="Số điện thoại" value="<?php echo $nguoiDung['sdt'] ?>">
        </div>
        <div class="form">
            <p>Ngày sinh</p>
            <input type="date" name="ngay_sinh" placeholder="Ngày sinh" value="<?php echo $nguoiDung['ngay_sinh'] ?>">
        </div>
        <div class="form">
            <p>Vai trò</p>
            <select name="vai_tro" id="">
                <option value="chonvaitro">--Chọn vai trò--</option>
                <option value="1" <?php echo $nguoiDung['vai_tro_id']==1 ? "selected":"" ?>>Admin</option>
                <option value="2" <?php echo $nguoiDung['vai_tro_id']==2 ? "selected":"" ?>>Đạo diễn</option>
                <option value="3" <?php echo $nguoiDung['vai_tro_id']==3 ? "selected":"" ?>>Diễn viên</option>
                <option value="4" <?php echo $nguoiDung['vai_tro_id']==4 ? "selected":"" ?>>Người dùng</option>
            </select>
        </div>
        <div>
            <input type="submit" value="Cap nhat">
        </div>
    </form>
    <!-- <?php
        if((!empty($_POST['ten_dang_nhap'])) && 
        (!empty($_POST['mat_khau'])) &&
        (!empty($_POST['ho_ten']))&&
        (!empty($_POST['sdt'])) &&
        (!empty($_POST['email'])) &&
        (!empty($_POST['ngay_sinh'])) &&
        (!empty($_POST['vai_tro']))){
            $tenDangNhap = $_POST['ten_dang_nhap'];
            $password = $_POST['mat_khau'];
            $hoTen = $_POST['ho_ten'];
            $soDienThoai = $_POST['sdt'];
            $email = $_POST['email'];
            $vaiTro = $_POST['vai_tro'];
            $ngaySinh = $_POST['ngay_sinh'];
            $sql = "UPDATE `nguoi_dung` SET `ten_dang_nhap`='$tenDangNhap',`mat_khau`='$password',`ho_ten`='$hoTen',`email`='$email',`sdt`='$soDienThoai',`vai_tro_id`='$vaiTro',`ngay_sinh`='$ngaySinh' WHERE id='$id'";
            echo $sql;
            $result=mysqli_query($conn, $sql);
            header('location:index.php?page_layout=nguoidung');
        }
        else{
            echo "Vui long nhap day du thong tin!";
        }
    ?> -->
</body>
</html>