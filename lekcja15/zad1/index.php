<?php
$conn = mysqli_connect("localhost","root","","egzamin2") or die("Błąd połączenia");
$sql = "SELECT przyloty.czas,przyloty.kierunek,przyloty.nr_rejsu,przyloty.status_lotu FROM przyloty ORDER BY przyloty.czas ASC";
$wynik = mysqli_query($conn,$sql);
setcookie("lotnisko","tak",time()+(3600*2));
if(isset($_COOKIE["lotnisko"]))
{
    echo "<p><i>Witaj ponownie na stronie lotniska</i></p>";
}
else
{
    echo "<p><b>Dzień dobry! Strona lotniska używa ciasteczek</b></p>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Zadanie 1</title>
    <style>
        table,th,td{
            border: 1px solid black;
        }
        th{
            padding-left: 50px;
            padding-right: 50px;

        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>CZAS</th>
            <th>KIERUNEK</th>
            <th>NUMER REJSU</th>
            <th>STATUS</th>
        </tr>
        <?php
            while ($row = mysqli_fetch_array($wynik))
            {
                echo"
                <tr>
                    <td>".$row['czas']."</td>
                    <td>".$row['kierunek']."</td>
                    <td>".$row['nr_rejsu']."</td>
                    <td>".$row['status_lotu']."</td>
                </tr>
                ";
            }
        ?>
    </table>
</body>
</html>