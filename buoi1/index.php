<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buổi 1 php</title>
</head>
<body>
    <?php
        //1. In ra màn hình
        echo "Hello world! <br>";
        echo "Hi ";


        //2. Biến
        #Cú pháp: $ + tên biến = giá trị của biến
        $ten = "Kieu Vy";
        $tuoi = 20;

        #gọi biến ra: echo $ + tên biến
        #nối kí tự dùng dấu "(.)
        echo $ten . " " . $tuoi . " tuổi <br>";  


        //3. Hằng
        define("soPi", "3.14"); //(tên, giá trị)
        echo soPi . "<br>";


        //4. Phân biệt ' ' và " "
        echo '$ten' . "<br>"; // sẽ in ra $ten
        echo "$ten" . "<br>"; // sẽ in ra giá trị của biến $ten


        //5. Chuỗi
        #5.1 Kiểm tra độ dài của chuỗi
        echo strlen($ten) . "<br>";
        #5.2 Đếm số từ
        echo str_word_count($ten) . "<br>";
        #5.3 Tìm kiếm ký tự trong chuỗi
        echo strpos($ten, "V") . "<br>"; //vị trí đầu tiên ký tự xuất hiện trong chuỗi
        #5.4 Thay thế ký tự trong chuỗi
        echo str_replace("Vy", "Mai", $ten) . "<br>";


        //6. Toán tử
        $soThuNhat = 10;
        $soThuHai = 5;
        # phép tính +, -, *, /
        # phép gán +=, -=, *=, /=, %=
        # phép so sánh ==, !=, >, <, >=, <=, ===
        echo $soThuNhat + $soThuHai  . "<br>";
        

        //7. Câu điềm kiện
        // if("Điều kiện"){
        //     logic
        // }
        // elseif("Điều kiện"){
        //     logic
        // }
        // else{
        //     logic
        // }

        //KIểm tra tổng số thứ nhất vá số thứ 2 
        // nếu < 15 thì in ra nhỏ hơn 15
        // nếu = 15 thì in ra tổng = 15
        // nếu > 15 thì in ra lớn hơn 15
        $tong = $soThuNhat + $soThuHai;
        if($tong < 15){
            echo "Tổng nhỏ hơn 15!";
        } 
        elseif($tong == 15){
            echo "Tổng = 15!";
        }
        else{
            echo "Tổng lớn hơn 15!";
        }
        echo "<br>";

        //8. switch case
        $color = "red";
        switch ($color){
            case "red":
                echo "is red";
                break;
            case "blue":
                echo "is blue";
                break;
            default:
                echo "no color";
                break;
        }
        echo "<br>";

        //9. for
        for ($i=0; $i < 100; $i++){
            echo $i . ", ";
        }
        echo "<br>";


        //10. Mảng
        $mang = ["Giang", "Linh", "Cao Quyen"];

        //Đếm phần tử
        echo count($mang) . "<br>";
        echo $mang[1]  . "<br>";
        print_r($mang);
        //Thay đổi
        $mang[0] = "Hue";
        print_r($mang);
        //Thêm vào cuối
        $mang[] = "Vy";
        print_r($mang);
        //Xóa 
        unset($mang[3]);
        print_r($mang);

    ?>
</body>
</html>