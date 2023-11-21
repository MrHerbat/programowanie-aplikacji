<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,th{
            border: solid black 1px;
            background-color: gray;
        }
    </style>
</head>
<body>
    
</body>
</html>
<?php
$miasta = Array(
    "ludność"=>Array("Wrocław"=>680000,"Kraków"=>900000),
    "powierzchnia"=>Array("Wrocław"=>292,"Kraków"=>327)
);
echo "<table>";
echo "<tr>";
echo "<th></th>";
$x=0;
foreach ($miasta as $parametry => $city) 
{
    if($x<1)
    foreach ($city as $c => $liczba) {
        echo "<th>".$c."</th>";
    }
    echo "</tr>";
    echo "<tr><th>".$parametry."</th>";
    foreach ($city as $c => $liczba) {
        echo "<td>".$liczba."</td>";
    }
    echo "</tr>";
    echo "<br>";
    $x++;
}
echo "</table>";
?>