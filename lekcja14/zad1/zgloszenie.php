<?php
$conn = mysqli_connect("localhost","root","","ratownictwo") or die("Błąd połączenia z bazą danych");
if(!empty($_POST))
{
    $dyspozytor=$_POST["dyspozytor"];
    $zespol = $_POST["zespol"];
    $adres = $_POST["adres"];
    $czas = date("H:i:s");
    $zapytanie = "INSERT INTO zgloszenia (ratownicy_id, dyspozytorzy_id, adres,pilne,czas_zgloszenia) VALUES ('$zespol','$dyspozytor', '$adres',0
    ,'$czas')";
    mysqli_query($conn, $zapytanie);
}
mysqli_close($conn);
?>