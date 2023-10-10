<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            color: lime;
            background-color: black;
            font-family: "Courier New", monospace;
        }
    </style>
</head>
<body>
    
</body>
</html>
<?php
/*
zadanie 1
utwórz tablicę dwuwymiarową o ilości wierszy 10 i ilości kolumn 15. Wypełnij tak, aby środkowa kolumna (lub dwie środkowe) były liczbami losowymi jednocyfrowymi,
a na pozostałych miejscach wstawiamy liczby losowe dwucyfrowe. Wyznacz największy element tablicy.
*/
$w = 10;
$k = 15;
$tab = Array();
for($i=0;$i<$w;$i++)
{
    for($j=0;$j<$k;$j++)
    {
        if($k%2 != 0)
        {
            if($j == ($k-1)/2)
            {
                $tab[$i][$j] = rand(0,9);
                echo "<b>".$tab[$i][$j]."</b>-"; 
            }
            else
            {
                $tab[$i][$j] = rand(10,99);
                echo $tab[$i][$j]."-"; 
            }
        }
        else
        {
            if($j == ($k/2)-1 || $j == $k/2)
            {
                $tab[$i][$j] = rand(0,9);
                echo "<b>".$tab[$i][$j]."</b>-"; 
            }
            else
            {
                $tab[$i][$j] = rand(10,99);
                echo $tab[$i][$j]."-"; 
            }
        }  
    }
    echo "</br>";
}
$max = $tab[0][0];
for($i=0;$i<$w;$i++)
{
    for($j=0;$j<$k;$j++)
    {
        if($tab[$i][$j] > $max)
        {
            $max = $tab[$i][$j];
        }
    }
}
echo "</br></br> Największa liczba w tabeli to: <b>".$max."</b>";
echo "<br>=============================================================================== <br>";

$suma = 0;
$srednia;
$tabasoc = Array("Kowalski" => 20, "Bogaty" => 17, "Zaborowski" => 15, "Soloch" => 23, "Czarny" => 19, "Grabarz" => 54, "Wolny" => 18);
foreach($tabasoc as $nazwisko => $wiek)
{
    echo "Nazwisko: $nazwisko | Wiek: $wiek  lat/lata<br>";
    $suma += $wiek;
}
$ilosc = sizeof($tabasoc);
$srednia = $suma/$ilosc;
echo "<br><br>Średnia wieku wynosi $srednia";
echo "<br>===============================================================================<br>";
$tabasoc2 = Array();
$tabasoc2["Róża"] = "czerwony";
$tabasoc2["Stokrotka"] = "biały";
$tabasoc2["Niezapominajka"] = "błękitny";
$tabasoc2["Mniszek"] = "żółty";
$tabasoc2["Krokus"] = "fioletowy";
$tabasoc2["Hortensja"] = "różowy";
foreach($tabasoc2 as $kwiat => $kolor)
{
    echo "$kwiat ma kolor $kolor <br>";
}
echo"<br><br>koloru czerwonego jest/są kwiat/y: ";
foreach($tabasoc2 as $kwiat => $kolor)
{
    if($kolor == "czerwony")
    {
        echo $kwiat;
    }
}
echo "<br><br>";
asort($tabasoc2);
foreach($tabasoc2 as $kwiat => $kolor)
{
    echo "$kwiat ma kolor $kolor <br>";
}
echo "<br><br>";
ksort($tabasoc2);
foreach($tabasoc2 as $kwiat => $kolor)
{
    echo "$kwiat ma kolor $kolor <br>";
}
echo "<br>=============================================================================== <br>";
$tabasoc3 = Array();
$tabasoc3[0]["imię"] = "Jan";
$tabasoc3[0]["nazwisko"] = "Kowalski";
$tabasoc3[0]["ulica"] = "Kowalowska";
$tabasoc3[1]["imię"] = "Maciej";
$tabasoc3[1]["nazwisko"] = "Nowak";
$tabasoc3[1]["ulica"] = "Nowakowska";
echo"<table border='1'><tr>";
foreach($tabasoc3[0] as $dane => $wartosc)
{
    echo"<th>$dane</th>";
}
echo"</tr>";
for($i=0;$i<sizeof($tabasoc3);$i++)
{
    echo "<tr>";
    foreach($tabasoc3[$i] as $dane => $wartosc)
    {
        echo"<td>$wartosc</td>";
    }
    echo"</tr>";
}
echo "</table>";
?>