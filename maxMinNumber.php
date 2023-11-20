<?php
$numbers = [
 12,5,100,8,45,36,27,1000245,1456,300,22, 101,205,2008,5698,1000,587,123,
];

function findMaxMin($array){
    $minMax=[];
        $max=$array[0];
        $min=$array[0];
        for($i=1; $i<count($array); $i++){
        if($max<$array[$i]){
            $max=$array[$i];  
        }  
        if($min>$array[$i]){
            $min=$array[$i];  
        }     
    };

  array_push($minMax,$max,$min);
  return $minMax;
};
$result=findMaxMin($numbers);
echo "<h1>Version 2</h1>";
echo "<pre>";
print_r($result);
echo "</pre>";