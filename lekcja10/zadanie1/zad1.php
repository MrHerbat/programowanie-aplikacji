<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie1</title>
</head>
<body>
    <h2>Oblicz, ile litrów musisz zatankować</h2>
    <form action="" method="post">
        <label for="kilometry">dystans do przejechania w km</label><br>
        <input type="number" name="kilometry" id="" min="0" required> <br>
        <label for="kilometry">spalanie samochodu w l/100km</label><br>
        <input type="number" name="spalanie" id="" min="0" step="0.1" required> <br>
        <label for="rodzaj">Rodzaj paliwa:</label>
        <label for="on">Olej napędowy</label>
        <input type="radio" name="rodzaj" id="on" value="on" required>
        <label for="b">Benzyna</label>
        <input type="radio" name="rodzaj" id="b" value="b" required> <br>
        <button type="submit">Oblicz</button>
    </form>
    <?php
    if(!empty($_POST))
    {
        $dystans = $_POST["kilometry"];
        $litry = $_POST["spalanie"];
        $rodzaj = $_POST["rodzaj"];
        $paliwo = ($dystans/100)*$litry;
        switch ($rodzaj)
        {
            case "on":
                $cena = $paliwo*3.8;
                break;
            case "b":
                $cena = $paliwo*4;
                break;

        }
        echo "<div>Potrzebujesz $paliwo litrów paliwa i będzie to kosztowało $cena zł.</div>";
    }
    ?>
</body>
</html>
