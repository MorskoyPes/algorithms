<?php
###############################################
echo "Пузырьковая сортировка";
echo "<br/>";


$arr = [];
for ($i = 1; $i <= 10; $i++){
  array_push($arr, rand(1, 10));
}
print_r ($arr);
echo "<br/>";

//$arr = [1, 2, 4, 3];
for ($x = 0; $x <= count($arr); $x++){
    for ($j = $x +1; $j <= count($arr) - 1; $j++){
      if ($arr[$j] < $arr[$x]){
            $flag = $arr[$x];
            $arr[$x] = $arr[$j];
            $arr[$j] = $flag;
        }
        }
}
print_r ($arr);
echo "<br/>";
echo "<br/>";

###############################################
echo "<Быстрая сортировка>";
echo "<br/>";

// $arrr = [];

// for ($i = 1; $i <= 10; $i++){
//     array_push($arrr, rand(1, 10));
// }
// print_r ($arrr);
// echo "<br/>";

// function qSort($arrr) {

// $t = count($arrr);
// $c = $t/2;
// $centr = $arrr[0];
// $left = [];
// $right = [];

// for ($i = 1; $i < count($arrr); $i++){
//     if ($arrr[$i] < $centr) {
//         $left[] = $arrr[$i];

//     }
//     else {
//         $right[] = $arrr[$i];

//     }
// }
//         $left = qSort($left);
//         $right = qSort($right);
//     return array_merge($left, array($centr), $right);
// }
// print_r (qSort($arrr));
// echo "<br/>";echo "<br/>";


###############################################
echo "<Сортировка вставками>";
echo "<br/>";

$arr = [];

for ($i = 1; $i <= 4; $i++){
    array_push($arr, rand(1, 10));
}
print_r ($arr);
echo "<br/>";

 for ($i = 0; $i < count($arr); $i++) {
        $cur_val = $arr[$i];
        $j = $i - 1;


        while (isset($arr[$j]) && $arr[$j] > $cur_val) {
            $arr[$j + 1] = $arr[$j];
            $arr[$j] = $cur_val;
            $j--;
        }
    }
print_r ($arr);
echo "<br/>";




?>