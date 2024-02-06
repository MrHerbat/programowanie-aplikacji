<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="imie">Podaj imię:</label>
        <input type="text" name="imie" id="" required> <br>
        <label for="nazwisko">Podaj nazwisko:</label>
        <input type="text" name="nazwisko" id="" required><br>
        <button type="submit">Prześlij</button>
    </form>
    <?php
    if(!empty($_POST))
    {
        $name = $_POST["imie"];
        $surname = $_POST["nazwisko"];
        echo "Masz na imię: ".ucwords($name)." ".ucwords($surname)."<br>";
        echo "Masz na imię: ".strtoupper($name)." ".strtoupper($surname)."<br>";
        echo "Masz na imię: ".strtolower($name)." ".strtolower($surname)."<br>";
        echo "Masz na imię: ".substr($name,0,4)." ".substr($surname,2,3)."<br>";
        $a = "Ala ma kota";
        $a = substr($a, 7, 4);
        echo $a."<br>";
        $a = "Ala ma dzisiaj matematyke.";
        $b = substr_count($a,"ma");
        echo $b."<br>";
        $b = str_replace("ma", "**", $a);
        echo $b."<br>";
        $c = "Ala nie ma matematyki";
        $b = substr_replace($c,"** **",8,5);
        echo $b."<br>";
        $c = "  Ala   ";
        $b = strlen($c);
        echo $b."<br>";
        echo $c."<br>";
        $c = trim($c);
        $b = strlen($c);
        echo $b."<br>";
        for($i = 97; $i<=122; $i++)
        {
            echo $i." => ".chr($i)." | ";
        }
        echo ": =>".ord(":")."<br>";
        $c = "Fizyka";
        $b = str_shuffle($c);
        echo $c."<br>";
        echo $b."<br>";
    }

    ?>
</body>
</html>