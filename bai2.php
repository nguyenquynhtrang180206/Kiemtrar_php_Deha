<!-- 2. Viết một chương trình PHP để kiểm tra xem một số nguyên có phải là số nguyên tố hay không. -->
<?php
function kiemTraSoNguyenTo($n) {
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

// Test trường hợp 1: số nguyên tố
$so1 = 7;
if (kiemTraSoNguyenTo($so1)) {
    echo "$so1 là số nguyên tố";
} else {
    echo "$so1 không phải là số nguyên tố";
}

echo "<br>"; // xuống dòng, dùng "\n" nếu chạy CLI

// Test trường hợp 2: không phải số nguyên tố
$so2 = 8;
if (kiemTraSoNguyenTo($so2)) {
    echo "$so2 là số nguyên tố";
} else {
    echo "$so2 không phải là số nguyên tố";
}
?>