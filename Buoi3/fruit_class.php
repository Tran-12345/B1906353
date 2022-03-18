<!DOCTYPE html>
<html>
<body>

<h3>B1906353 - Duong Ngoc Tran</h3>

<?php
//khai bao 1 lop fruit
class Fruit {
  //gom 2 thuoc tinh
  public $name;
  public $color;

  // Methods, phuong thuc trong lop
//gan gia tri cho thuoc tinh
  function set_name($name) {
    $this->name = $name;
  }
//tra ve gia tri
  function get_name() {
    return $this->name;
  }
//phuong thuc xay dung
function construct($name) {
	$this->name = $name;
  }
//phuong thuc huy

function destruct() {
    echo "The fruit is {$this->name}.";
  }
}

// khoi tao bien kieu class Fruit()
$apple = new Fruit();
$banana = new Fruit();

//Cach goi phuong thuc da dinh nghia trong lop
$apple->set_name('Apple');
$banana->set_name('Banana');

//hien thi cac gia tri thong qua cac phuong thuc da dinh nghia
echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
?>



</body>
</html>
