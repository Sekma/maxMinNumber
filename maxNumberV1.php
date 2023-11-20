<?php
$numbers = [
 12,5,100,8,45,36,27,1000245,1456,300,22, 101,205,2008,5698,1000,587,123,
];   
$max=$numbers[0];
for($i=0; $i<count($numbers); $i++){
    if($max<$numbers[$i]){
        $max=$numbers[$i];  
    }    
};
echo "<h1>Version 1</h1>";
echo "<p>La plus grande valeur est $max.</p>";