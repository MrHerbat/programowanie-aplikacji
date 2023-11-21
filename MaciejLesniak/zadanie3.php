<?php 
// w pliku napisz 6 rekordów (linijek) podających się z nazwiska i liczby będącej wiekiem
// pobierz dane z pliku iwtświetl je w postaci $nazwisko." wiek: ".$wiek;
// znajdź najstarszą osobę i wypisz jej nazwisko i wiek 
$osoby = fopen("osoby.txt","r");
$tab = Array();
$oldestAge = 0;
$oldestName = "";
for ($i=0; $i < 6; $i++) { 
    $tab[$i] = fgets($osoby);
}
foreach ($tab as $osoba)
{
    $separate = explode(" ", $osoba);
    echo $separate[0]." wiek: ".$separate[1]."<br>";
    if($oldestAge<$separate[1])
    {
        $oldestAge = $separate[1];
        $oldestName = $separate[0];    
    }
}
echo "<br><b>Najstarsza osoba to: ".$oldestName." wiek: ".$oldestAge."</b>";


?>