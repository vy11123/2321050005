<?php
    // cookie
    #Lưu ở phía người dùng
    #Dùng cho những thông tin ít quan trọng
    $cookieName = "user";
    $cookieValue = "KieuVy";
    // $cookieName = "admin";
    // $cookieValue = "pass_admin";

    // 86400 = 30 ngày
    setcookie($cookieName, $cookieValue, time()+(86400),"/"); // '/' tồn tại trên toàn bộ trang ưeb

    if(isset($_COOKIE[$cookieName])){
        echo "Cookie đã tồn tại";
    }
    else{
        echo "Cookie chưa tồn tại";
    }

    // session
    #Thông tin đăng nhập, giỏ hàng,...
    session_start();
    $_SESSION["name"] = "Kiều Vy";
    echo $_SESSION["name"];
?>