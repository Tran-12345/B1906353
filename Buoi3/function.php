<!DOCTYPE html>
<html>
<body>

<h3>B1906353 - Duong Ngoc Tran</h3>

<?php
function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, 10);
// it will return 15
echo addNumbers(5, “so 10”);
// neu 1 tham so la chuoi co the se xuat thong bao loi
?>

Nếu bị lỗi do tham số có kiểu không tương thích ta thêm 
declare(strict_types=0); lúc này không thông báo lỗi (áp dụng cho PHP 7)

<?php
declare(strict_types=0);
function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, 10);
// it will return 15
echo addNumbers(5, “so 10”);
// neu 1 tham so la chuoi co the se xuat thong bao loi
?>

</body>
</html>