<?php
$numbers = [
 12,5,100,8,45,36,27,1000245,1456,300,22, 101,205,2008,5698,1000,587,123,
];

function findMax($array){
    $max=$array[0];
    for($i=0; $i<count($array); $i++){
    if($max<$array[$i]){
        $max=$array[$i];  
    }    
 };
 return $max;
}
$result=findMax($numbers);
echo "<h1>Version 2</h1>";
echo "<p>La plus grande valeur est $result.</p>";