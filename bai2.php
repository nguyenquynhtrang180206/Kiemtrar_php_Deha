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

$so = 7;
if (kiemTraSoNguyenTo($so)) {
    echo "$so là số nguyên tố";
} else {
    echo "$so không phải là số nguyên tố";
}
?>