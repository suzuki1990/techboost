<?php
$name = "suzuki";
if ($name == "suzuki") {
  echo "私はsuzukiです";
} else {
  echo "あなたの名前ではありません";
}
?>

echo "\n"

<?php
$total = 0;
for ($i = 0; $i <= 1000; $i++) {
    $total += $i;
}
echo $total;
?>

echo "\n"

<?php
$fruits = array("peach","apple","banana","kiwi","melon");
foreach($fruits as $fruit) {
    echo "要素は" . $fruit;
    echo "\n";
}
?>

echo "\n";

<?php
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++) {

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}
?>