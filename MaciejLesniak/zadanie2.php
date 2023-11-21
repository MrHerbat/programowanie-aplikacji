<?php
// Utwórz tablicę asocjacyjną, gdzie kluczami są nazwy towarów, natomiast wartościami ich cena
// Wypełnij tą tablicę 20 rekordami, gdzie nazwy towarów będą pobrane z pliku, a ceny
// Będą liczbami losowymi z przedziału 10-99. Wypisz tą tablicę w postaci
// Nazwa: [nazwa] Cena: [cena w zł]
$towary = fopen("towary.txt","r");
$tab = Array();
for ($i=0; $i < 20; $i++) { 
    $tab[fgets($towary)] = rand(10,99);
}
foreach ($tab as $towar => $cena)
{
    echo $towar." Cena: ".$cena."zł<br>";
}

?>