<?php
$plik = fopen("rozmiar.txt",'r');
$x = fgets($plik);
fclose($plik);
$tab = Array();
for ($i=0; $i < $x; $i++) 
{ 
    $tab[$i] = rand(1,100);
    echo $tab[$i]." ";
}
echo "<br>";
echo "----------------------------------------------------------------";
echo "<br>";
sort($tab);
for ($i=0; $i < $x; $i++) 
{ 
    echo $tab[$i]." ";
}
$rozmiar = count($tab);
echo "<br>";
echo "rozmiar tablicy: $rozmiar";
echo "<br>";
$a = array_count_values($tab)[15];
echo "Liczba 15 wystąpiła ".$a." razy";
echo "<br>";
echo "----------------------------------------------------------------";
echo "<br>";
array_pop($tab);
for ($i=0; $i < count($tab); $i++) 
{ 
    echo $tab[$i]." ";
}
$rozmiar = count($tab);
echo "<br>";
echo "rozmiar tablicy: $rozmiar";
echo "<br>";
echo "----------------------------------------------------------------";
echo "<br>";
array_push($tab,777,888,999);
for ($i=0; $i < count($tab); $i++) 
{ 
    echo $tab[$i]." ";
}
$rozmiar = count($tab);
echo "<br>";
echo "rozmiar tablicy: $rozmiar";
echo "<br>";
echo "----------------------------------------------------------------";
echo "<br>";
array_unshift($tab,1000,1001);
for ($i=0; $i < count($tab); $i++) 
{ 
    echo $tab[$i]." ";
}
$rozmiar = count($tab);
echo "<br>";
echo "rozmiar tablicy: $rozmiar";
echo "<br>";
echo "----------------------------------------------------------------";
echo "<br>";
rsort($tab);
for ($i=0; $i < count($tab); $i++) 
{ 
    echo $tab[$i]." ";
}
$rozmiar = count($tab);
echo "<br>";
echo "rozmiar tablicy: $rozmiar";
echo "<br>";
echo "----------------------------------------------------------------";
echo "<br>";
$taba = array_unique($tab);
rsort($taba);
for ($i=0; $i < count($taba); $i++) 
{ 
    echo $taba[$i]." ";
}
$rozmiar = count($taba);
echo "<br>";
echo "rozmiar tablicy: $rozmiar";
echo "<br>";
echo "----------------------------------------------------------------";
echo "<br>";
$tab2 = array(-15,-16,-17);
array_splice($tab,5,sizeof($tab2),$tab2);
for ($i=0; $i < count($tab); $i++) 
{ 
    echo $tab[$i]." ";
}
$rozmiar = count($tab);
echo "<br>";
echo "rozmiar tablicy: $rozmiar <br>";
echo "suma elementów tablicy to: ".array_sum($tab)."<br>";
echo "czy liczba 5000 znajduje się w tablicy? ";
if(array_search(5000,$tab))
    echo "tak";
else
    echo"nie";
echo "<br>";
echo "----------------------------------------------------------------";
echo "<br>";
$tab3 = array("Kowalski"=>4,"Aleksandrowicz"=>3.5,"Majewski"=>3,"Kościuszko"=>5);
foreach ($tab3 as $uczen => $ocena) {
    echo "$uczen - $ocena | ";
}
ksort($tab3);
echo "<br>";
foreach ($tab3 as $uczen => $ocena) {
    echo "$uczen - $ocena | ";
}
arsort($tab3);
echo "<br>";
foreach ($tab3 as $uczen => $ocena) {
    echo "$uczen - $ocena | ";
}
$tab3 = array_change_key_case($tab3,2);
echo "<br>";
foreach ($tab3 as $uczen => $ocena) {
    echo "$uczen - $ocena | ";
}
$tab3 = array_change_key_case($tab3,0);
echo "<br>";
foreach ($tab3 as $uczen => $ocena) {
    echo "$uczen - $ocena | ";
}
echo "<br>";
echo "----------------------------------------------------------------";
echo "<br>";
$tab4 = array_merge($tab,$tab2);
for ($i=0; $i < count($tab4); $i++) 
{ 
    echo $tab4[$i]." ";
}
echo "<br>";
echo "----------------------------------------------------------------";
echo "<br>";
echo array_search(3.5,$tab3)." ma średnią 3.5";
echo "<br>";
echo "----------------------------------------------------------------";
echo "<br>";
$tab = array_slice($tab,5,3);
print_r($tab);
?>