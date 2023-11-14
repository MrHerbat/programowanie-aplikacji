<?php
$file = fopen("oceny.txt","w");
$oceny=Array(
    "Historia"=>Array("Nowak"=>4,"Sulewski"=>3),
    "Matematyka"=>Array("Nowak"=>2,"Sulewski"=>1),
    "Informatyka"=>Array("Nowak"=>5,"Sulewski"=>5),
    "J. Polski"=>Array("Nowak"=>3,"Sulewski"=>2),
);
echo "<table border='1'>";
echo "<tr>";
echo "<th></th>";
$x=0;
fwrite($file,"        ");
foreach ($oceny as $przedmioty => $nazwiska) 
{
    if($x<1)
    foreach ($nazwiska as $naz => $ocena) {
        echo "<td>".$naz."</td>";
        fwrite($file,$naz." ");
    }
    fwrite($file,"\n");
    echo "</tr>";
    echo "<tr><th>".$przedmioty."</th>";
    fwrite($file,$przedmioty."\n");
    foreach ($nazwiska as $naz => $ocena) {
        echo "<td>".$ocena."</td>";
        fwrite($file,$ocena." ");
    }
    echo "</tr>";
    fwrite($file, "\n");
    echo "<br>";
    $x++;
}
echo "</table>";
?>