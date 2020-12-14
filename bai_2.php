<?php 

function maxSumt($arr) {
    $sum = 0;
    $i=0;$j=0;
    $n = count($arr);
    for ($i = 0; $i < $n - 2; $i++) {
        for ($j = $i + 1; $j < $n - 1; $j++) {
                if ($sum < $arr[$i] + $arr[$j] )
                    $sum = $arr[$i] + $arr[$j] ;
            }
        
    }
    return $sum;
}
$arr = [0,100,50,52,53];
print_r(maxSumt($arr));
?>