<?php
$tab=Array();
$tab["Europa"][0] = "Polska";
$tab["Europa"][1] = "Czechy";
$tab["Europa"][2] = "Wielka Brytania";
$tab["Azja"][0] = "Tajwan";
$tab["Azja"][1] = "Rosja";
$tab["Azja"][2] = "Korea Północna";
$tab["AmerykaN"][0] = "Kanada";
$tab["AmerykaN"][1] = "USA";
$tab["AmerykaN"][2] = "Meksyk";
echo "<table border='1'>";
foreach ($tab as $key => $kraje) 
{
    echo "</tr><th>".$key."</th>";
    for ($i=0; $i<=2 ; $i++) { 
        echo "<td>".$kraje[$i]."</td>";
    }
    echo "</tr>";
    echo "<br>";
}
echo "</table>";
?>