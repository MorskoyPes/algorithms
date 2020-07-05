<?php

$arr = [];
for ($i = 1; $i <= 10; $i++){
  array_push($arr, rand(1, 10));
}
print_r ($arr);

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

?>