<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            text-align:center;
            margin-top:30px;
        }
        .warning{
            color: red;
        }
        form{
            background-color: #cfcfcf;
            color:black;
            margin:auto;
            width:40%;
            display:flex;
            flex-direction:column;
            gap:10px;
            padding:10px;
            border-radius: 5px;
        }
        input{
            border:none;
            border-radius:5px;
        }
    </style>
</head>
<body>
    
    <form action="login.php" method="post">
        <!-- gửi thông tin đi: post, lấy thông tin: get -->
        <h1>Đăng nhập</h1>
        <div>
            <input type="text" name="username" placeholder="Tên đăng nhập">
        </div>
        <div>
            <input type="password" name="password" placeholder="Mật khẩu">
        </div>
        <div>
            <input type="submit" value="Đăng nhập">
        </div>
    </form>
    <?php
        include('connect.php');
        if(isset($_POST['username']) && isset($_POST['password'])){
            // Nếu tên đăng nhập = admin
            // Mật khẩu 123 thì cho phép người dùng vào trang chủ
            $tenDN = $_POST['username'];
            $matKhau = $_POST['password'];
            $sql = "SELECT * from nguoi_dung where ten_dang_nhap = '$tenDN' and mat_khau = '$matKhau'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                session_start();
                $_SESSION['username'] = $tenDN;
                header('location: trangchu.php');
            }
            else{
                echo "<p class='warning'>Sai thông tin đăng nhập</p>";
            }

            // tên biến = $_tên method['name trong input']
            // echo $tenDN;
            // if($tenDN == 'admin' && $matKhau == '123'){
            //     session_start();
            //     $_SESSION["username"] = $tenDN;
            //     header('location: trangchu.php');
            // }
            // else{
            //     echo "<p class='warning'>Sai thông tin đăng nhập</p>";
            // }
        }
    ?>
</body>
</html>
