<!-- 3. Viết một hàm PHP có tên inHinhChuNhat nhận vào hai tham số là chiều rộng và chiều cao, và in ra một hình chữ nhật sử dụng dấu sao (*) với kích thước đã cho. Gọi hàm này để in ra một hình chữ nhật có chiều rộng là 5 và chiều cao là 3  -->
<?php
function inHinhChuNhat($chieuRong, $chieuCao) {
    echo "Hình chữ nhật với chiều rộng = $chieuRong, chiều cao = $chieuCao:<br>";
    for ($i = 1; $i <= $chieuCao; $i++) {
        for ($j = 1; $j <= $chieuRong; $j++) {
            echo "*";
        }
        echo "<br>"; 
    }
}

inHinhChuNhat(5, 3);
?>