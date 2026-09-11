<!--1.  Viết một chương trình PHP để in ra số chẵn từ 1 đến 10 -->
<?php
$ketQua = [];
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        $ketQua[] = $i;
    }
}
echo "Các số chẵn từ 1 đến 10: " . implode(", ", $ketQua);
?>