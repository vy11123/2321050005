<?php
    //cookie
    #lưu ở phía người dùng
    #dùng cho những thông tin ít quan trọng
    $cookieName = "user";
    $cookieValue = "KieuVy";
    // 86400 = 30 ngày
    setcookie($cookieName, $cookieValue, time()+(86400), "/"); # dấu '/' để tồn tại toàn bộ trang web

    if(isset($_COOKIE[$cookieName])){
        echo "cookie đã tồn tại";
    }
    else{
        echo "cookie chưa tồn tại";
    }

    //session (cần bảo mật hơn)
    # Thông tin đăng nhập, giỏ hàng,.....
    session_start();
    $_SESSION['name'] = "Kieu Vy 123";
    echo $_SESSION['name'];
?>