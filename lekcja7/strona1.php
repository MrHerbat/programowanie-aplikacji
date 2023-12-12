
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a href="index.php"><img src="baner.jpg"></a>
        <h1>PROSTE DZIAŁANIA</h1>
    </header>   
    <section id="main1">
        <form action="strona1.php" method="POST">
            <div id="number">Podaj pierwszą liczbę: <input type="number" name="a"></div> </br>
            <div id="number">Podaj drugą liczbę: <input type="number" name="b"></div> </br>
            <button type="submit" name="dodawanie">dodawanie</button>
            <button type="submit" name="odejmowanie">odejmowanie</button>
            <button type="submit" name="mnozenie">mnożenie</button>
            <button type="submit" name="dzielenie">dzielenie</button>
        </form>
        <?php
        $a = $_POST["a"];
        $b = $_POST["b"];
        if((isset($_POST["dodawanie"])||isset($_POST["odejmowanie"])||isset($_POST["mnozenie"])) && (empty($a) || empty($b)))
        {
            echo "<i>Proszę uzupełnić obie liczby</i>";
        }
        elseif(isset($_POST["dodawanie"]) && (!empty($a) || !empty($b)))
        {
            echo "$a + $b = ".$a+$b;
        }
        elseif(isset($_POST["odejmowanie"]) && (!empty($a) || !empty($b)))
        {
            echo "$a - $b = ".$a-$b;
        }
        elseif(isset($_POST["mnozenie"]) && (!empty($a) || !empty($b)))
        {
            echo "$a * $b = ".$a*$b;
        }
        elseif(isset($_POST["dzielenie"]) && (empty($a) || empty($b)))
        {
            echo "<i>Nie wolno dzielić przez zero";
        }
        elseif(isset($_POST["dzielenie"]) && (!empty($a) || !empty($b)))
        {
            echo "$a / $b = ".$a/$b;
        }
        ?>
    </section>
</body>
</html>
<?php
    

?>