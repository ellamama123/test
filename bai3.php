<?php 
function LietKe($a)
{
    $i = 0;
    $j=0;
    $kcgn = abs($a[0] - $a[1]);
    $n = count($a);
    for ($i=0;$i<$n;$i++)
    {
        for ($j=$i+1;$j<$n;$j++)
            if (abs($a[$i]-$a[$j])<$kcgn)
                $kcgn = abs($a[$i]-$a[$j]);
        echo("Nhung cap gia tri gan nhau nhat: \n");
        for ($i=0;$i<$n;$i++)
            for ($j=$i+1;$j<$n;$j++)
                if (abs($a[$i]-$a[$j])==$kcgn)
                    echo("[" . $a[$i] . "," . $a[$j] . "]");
    }
}

$arr = [5,6,8,10,11];
print_r(LietKe($arr));
?>