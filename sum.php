<?php
function sum($a) {
    $result = $a * 2;
    echo $result;
};
sum(4);
?>


<?php
function f($a, $b) {
  return $a + $b;
};

$result = f(1,2);
echo $result;
?>

<?php
$arr = array(1,3,5,7,9);
$result = array_product($arr);
var_dump($result);
?>

<?php
function f($a,$b,$c,$d,$e) {
   return $a * $b * $c *$d *$e;
};
$result = f(1,3,5,7,9);
echo $result;
?>
