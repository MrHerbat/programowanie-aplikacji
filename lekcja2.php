<?php
 function suma($a, $b)
 {
     $s = $a + $b;
     return $s;
 }

function suma_cyfr ($a)
{
    $sum = 0;
    while($a!=0)
    {
        $r = $a%10;
        $sum += $r;
        $a = ($a-$r)/10;
    }
    return $sum;
}

function zamiana ($a)
{
    $amount = 0;
    $replace = $a;
    $dzi = 1;
    while($replace!=0)
    {
        $j = $replace%10;
        $replace = ($replace-$j)/10;
        $amount++;
    }
    while($amount-1>0)
    {
        $dzi = $dzi * 10;
        $amount -= 1;
    }
    $r = $a%$dzi;
    $rj = $a%10;
    
    $pw = ($a-$r)/$dzi;
    $dk = ($a-$r)/$pw;
    $wynik = ($dk*$rj)+($r-$rj)+($pw);
    echo $wynik;
    return $wynik;
}

// function potega($a, $b)
// {
//     $p = 1;
//     while($b!=0)
//     {
//         $p = $a*$p;
//         $b--;
//     }
// }


$x = 7895773;

zamiana($x);
// echo "</br>";
// echo "</br>";
// echo potega(2,5);

// echo suma($x, $y);
// echo "</br>";
// echo "Suma cyfr liczby ".$x." wynosi --> ";
// echo suma_cyfr($x);
?>