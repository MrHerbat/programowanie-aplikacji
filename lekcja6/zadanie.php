<?php
// explode(separator, nazwa_stringa)
// w pliku umieść 10 rekordów składających się z nazwiska i liczby oznaczającej wiek. 
// Pobierz dane z pliku i wyświelt je na stronie w postaci
// $nazwisko." wiek: ".$wiek
// wyznacz średnią wielku wypisanych osób
//
// String w tablice:
$myfile = fopen("dane.txt","r");
$srednia = fopen("średnia.txt", "w");
$tab = Array();
$x = 0;
$y=0;
for ($i=0; $i<10; $i++) 
{ 
    $dane = fgets($myfile);
    $tab = explode(";",$dane);
    echo $tab[0]." Wiek: ".$tab[1];
    echo"<br>";
    $x+=$tab[1];
    $y++;
}
fwrite($srednia, $x/$y);
echo "<br>Średnia arytmetyczna wieku wszystich osób na liście wynosi: ".$x/$y
fclose($myfile);
fclose($srednia);
?>