<?php
// z pliku pobierz dwie liczby naturalne. Pierwsza oznacza liczbę wierszy, a druga liczbę kolumn tablicy dwuwymiarowej.
// Tablicę tę wypełnij tak, aby na pierwszym miejscu (0,0), była liczba 2, a każda następna wartość, 
//idąc po wierszach była o 3 większa od wartości poprzedniej
// Tą tablicę wyświetl na stronie i zapisz do pliku
$pobieranie = fopen("dane.txt","r");
$zapis = fopen("tablica.txt","w");
$tab = Array();
$x = 2;
$w = fgets($pobieranie);
$k = fgets($pobieranie);
for($i=0;$i<$w;$i++)
{
    for($j=0;$j<$k;$j++)
    {
        $tab[$i][$j] = $x;
        echo $tab[$i][$j]." ";
        $x += 3; 
        fwrite($zapis, $tab[$i][$j]." ");
    }
    fwrite($zapis, "\n");
    echo "<br>";
}
fclose($zapis);
fclose($pobieranie);



?>