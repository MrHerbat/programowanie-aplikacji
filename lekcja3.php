<?php
/*
$w = 10;
$k = 7;
$s = 0;


$tab = Array();


for($i=0;$i<$w;$i++)
{
    for($j=0;$j<$k;$j++)
    {
        $tab[$i][$j] = rand(10,99);
        echo $tab[$i][$j]." ";
        $s += $tab[$i][$j];
    }
    echo "</br>";
}
echo "</br>";
echo "</br>";
echo "</br>";
echo "Suma liczb w tabeli to: ".$s;
  



$wk = 11;

$tab2 = Array();
for($i=0;$i<$wk;$i++)
{
    for($j=0;$j<$wk;$j++)
    {
        if($i == $j || $i+$j==$wk-1)
        {
            $tab2[$i][$j] = 1;
        }
        else
        {
            $tab2[$i][$j] = 0;
        }
        echo $tab2[$i][$j]." ";
    }
    echo "</br>";
}




$w2 = 5;
$k2 = 10;

$tab3 = Array();

for($i=0;$i<$w2;$i++)
{
    for($j=0;$j<$k2;$j++)
    {
        if(($i+$j)%2 == 0)
        {
            $tab3[$i][$j] = 'X';
        }
        else
        {
            $tab3[$i][$j] = 'O';
        }
        echo $tab3[$i][$j]." ";
    }
    echo "</br>";
}




//sort($nazwa) - sortowanie rosnące
//rsort($nazwa) - sortowanie malejące
//print_r($nazwa) - wyświetlanie informacji o tablicy w sposób zrozumiały dla użytkownika


$r = 20;
$tab4 = Array();

for($i=0;$i<$r;$i++)
{
    $tab4[$i] = rand(100,999);
    echo $tab4[$i]." ";
}
echo"</br>";
sort($tab4);
echo "Tablica posortowana rosnąco: ";
for($i=0;$i<$r;$i++)
{
    echo $tab4[$i]." ";
}
echo"</br>";
rsort($tab4);
echo "Tablica posortowana malejąco: ";
for($i=0;$i<$r;$i++)
{
    echo $tab4[$i]." ";
}
echo"</br>";
echo "Tablica zrozumiała dla użytkownika: ";
print_r($tab4);


$tab5 = Array();
$tab5Temp = Array();
$w3 = 8;
$k3 = 12;
for($i=0;$i<$w3;$i++)
{
    for($j=0;$j<$k3;$j++)
    {
        $tab5[$i][$j] = rand(10,99);
        echo $tab5[$i][$j]." ";
    }
    echo "</br>";
}
// echo"</br>";
// for($i=0;$i<$w3;$i++)
// {
//     sort($tab5[$i]);
//     for($j=0;$j<$k3;$j++)
//     {
//         echo $tab5[$i][$j]." ";
//     }
//     echo "</br>";
// }
echo"</br>";
for($i=0;$i<$w3;$i++)
{
    for($j=0;$j<$k3;$j++)
    {
        $tab5Temp[$j][$i] = $tab5[$i][$j];
    }
}
for($j=0;$j<$k3;$j++)
    {
        sort($tab5Temp[$j]);
    }
for($i=0;$i<$w3;$i++)
{
    for($j=0;$j<$k3;$j++)
    {
        $tab5[$i][$j] = $tab5Temp[$j][$i];
        echo $tab5[$i][$j]." ";
    }
    echo "</br>";
}
*/

$tab6 = Array();
$w4 = 30;
for($i=0;$i<$w4;$i++)
{
    if($i%3==0)
    {
        $tab6[$i] = 7;
    }
    else
    {
        $tab6[$i] = 0;
    }
    echo $tab6[$i];W
}





?>