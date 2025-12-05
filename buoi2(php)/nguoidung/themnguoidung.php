<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Thêm người dùng</title>
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
    </style>
</head>
<body>
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
            $sql = "INSERT INTO nguoi_dung(ten_dang_nhap,mat_khau,ho_ten,email,sdt,vai_tro_id,ngay_sinh) values('$tenDangNhap','$password','$hoTen','$email','$soDienThoai','$vaiTro','$ngaySinh')";
            echo $sql;
            mysqli_query($conn, $sql);
            header('location:index.php?page_layout=nguoidung');
        }
        else{
            echo "Vui long nhap day du thong tin!";
        }
    ?>
    
    <form action="index.php?page_layout=themnguoidung" method="post">
        <!-- gửi thông tin đi: post, lấy thông tin: get -->
        <h1 style="text-align:center;">Thêm người dùng</h1>
        <div class="form">
            <p>Tên đăng nhập</p>
            <input type="text" name="ten_dang_nhap" placeholder="Tên đăng nhập">
        </div>
        <div class="form">
            <p>Mật khẩu</p>
            <input type="password" name="mat_khau" placeholder="Mật khẩu">
        </div>
        <div class="form">
            <p>Họ tên</p>
            <input type="text" name="ho_ten" placeholder="Họ tên">
        </div>
        <div class="form">
            <p>Email</p>
            <input type="email" name="email" placeholder="Email">
        </div>
        <div class="form">
            <p>Số điện thoại</p>
            <input type="tel" name="sdt" placeholder="Số điện thoại" required pattern="([0]{1}([3,4,8,9]{1})([0-9]{8}))">
        </div>
        <div class="form">
            <p>Ngày sinh</p>
            <input type="date" name="ngay_sinh" placeholder="Ngày sinh">
        </div>
        <div class="form">
            <p>Vai trò</p>
            <select name="vai_tro" id="">
                <option value="chonvaitro">--Chọn vai trò--</option>
                <option value="1">Admin</option>
                <option value="2">Đạo diễn</option>
                <option value="3">Diễn viên</option>
                <option value="4">Người dùng</option>
            </select>
        </div>
        <div class="form">
            <input type="submit" value="Thêm mới">
        </div>
    </form>
</body>
</html>
