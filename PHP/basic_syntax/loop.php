<?php

 //1. for
 //for($i = 0(초기식); $i < 10(반복 횟수 조건); $i++(증가식)){
 //}

 $arr = [2, 4, 6, 8, 1, 3];

 for($i = 0; $i < 10; $i++){
     echo $i.'Hello World'.'<br>';
 }

 for($i = 0; $i < count($arr); $i++){
    // echo $arr[$i].'<br>';
    echo $i." ".$arr[$i].'<br>';
}


 //2. foreach
 echo '---------------------------------<br>';
  foreach ($arr as $value) {
    //index : 
  echo "$value <br>";
}

 //3. while
 $sum = 0;
 $num = 1;
 while($num <= 100){
     $sum += $num;
     $num++;
 }
 echo $sum.'<br>';

?>