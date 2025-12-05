<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Thêm quốc gia</title>
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
        if((!empty($_POST['ten_quoc_gia']))){
            $tenQuocGia = $_POST['ten_quoc_gia'];
            $sql = "INSERT INTO quoc_gia(ten_quoc_gia) values('$tenQuocGia')";
            echo $sql;
            mysqli_query($conn, $sql);
            // if($_GET['page_layout'] == "")
            header('location:index.php?page_layout=themphim');
        }
        else{
            echo "Vui long nhap day du thong tin!";
        }
    ?>
    
    <form action="index.php?page_layout=themquocgia" method="post">
        <!-- gửi thông tin đi: post, lấy thông tin: get -->
        <h1 style="text-align:center;">Thêm quốc gia</h1>
        <div class="form">
            <p>Tên quốc gia</p>
            <input type="text" name="ten_quoc_gia" placeholder="Tên quốc gia">
        </div>
        <div class="form">
            <input type="submit" value="Thêm mới">
        </div>
    </form>
</body>
</html>
