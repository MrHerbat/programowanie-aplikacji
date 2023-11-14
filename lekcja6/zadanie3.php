<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button onclick="<a href='/zadanie2.php'>">Kraje</button> 
</body>
</html>
<?php
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
foreach ($oceny as $przedmioty => $nazwiska) 
{
    if($x<1)
    foreach ($nazwiska as $naz => $ocena) {
        echo "<td>".$naz."</td>";
    }
    echo "</tr>";
    echo "<tr><th>".$przedmioty."</th>";
    foreach ($nazwiska as $naz => $ocena) {
        echo "<td>".$ocena."</td>";
    }
    echo "</tr>";
    echo "<br>";
    $x++;
}
echo "</table>";
?>