<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Cập nhật thể loại</title>
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
        include ('connect.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM the_loai WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        $theloai = mysqli_fetch_assoc($result);
    ?>
    <main>
        <h1 style="text-align:center">Cập nhật thể loại</h1>
        <div class="container">
            <?php
                if(!empty($_POST['ten-the-loai'])){

                    $tentheloai = $_POST['ten-the-loai'];    

                    $sql = "UPDATE `the_loai` SET `ten_the_loai`='$tentheloai' WHERE `id`='$id'";
                    echo $sql;
                    mysqli_query($conn, $sql);
                    header('location: index.php?page_layout=theloai');    
                }
                else{
                    echo "<p class='warning'>Vui lòng nhập đầy đủ thông tin</p>";
                }
            ?>

            <form action="index.php?page_layout=capnhattheloai&id=<?php echo $id ?>" method="post">
                <div class="form">
                    <p>Tên thể loại</p>
                    <input type="text" name="ten-the-loai" placeholder="Tên thể loại">
                </div>
                <div class="form">
                    <input type="submit" value="Cập nhật">
                </div>
            </form>
        </div>
    </main>
</body>
</html>
