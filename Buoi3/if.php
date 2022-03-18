
<!DOCTYPE html>
<html>
<body>

<h1>B1906353 - Duong Ngoc Tran</h1>
<?php
$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>
</body>
</html>
