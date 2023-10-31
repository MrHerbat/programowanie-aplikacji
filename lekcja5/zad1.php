<?php
//pobierz z pliku elementy i utwórz z nich tablicę o wielkości 30x30
//wyświetl dane liczby i elemnty tablicy i elementy te wraz z ich średnią arytmetyczną wyślij do pliku o nazwie tablica.txt

$tab = Array();
$tab2 = Array();
$srednia = 0;
$srednia2 = 0;
if(file_exists("dane.txt"))
{
     $myfile = fopen("dane.txt","r") or die ("Error occured while opening file");
     $a = fgets($myfile);
     $b = fgets($myfile);
    for($i = 0; $i < 30; $i++)
    {
        for($j = 0; $j < 30; $j++)
        {
            $tab[$i][$j] = rand($a, $b);
            $srednia += $tab[$i][$j];
            echo $tab[$i][$j]." ";
        }
        echo "<br>";
    }
    echo "<br>";
    echo "<br>";
    echo "Suma arytmetyczna tablicy: ".$srednia/(sizeof($tab)*sizeof($tab));
    
    

    $writeable = fopen("tablica.txt","w");
    for($i = 0; $i < 30; $i++)
    {
        for($j = 0; $j < 30; $j++)
        {
            $tab2[$i][$j] = rand($a, $b);
            $srednia2 += $tab2[$i][$j];
            fwrite($writeable, $tab2[$i][$j]." ");
        }
        echo "<br>";
        fwrite($writeable, "\n");
    }
    fwrite($writeable, "\n średnia arytmetyczna wynosi: ".$srednia2/(sizeof($tab2)*sizeof($tab2)));
}
else
{
    echo "This file does not exist";
}
fclose("dane.txt");

?>