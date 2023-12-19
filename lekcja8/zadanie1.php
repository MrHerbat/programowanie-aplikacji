<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap:7px;
            border: 2px solid black;
            border-radius:15px;
            padding: 15px;
            width: 500px;
            background-color: #111;
            color: white;
        }
        button{
            background-color: #222;
            color: #ddd;
            border: 1px black solid;
            padding: 10px;
            transition: 0.5s;
        }
        button:hover{
            background-color: #ccc;
            color: black;
            transition: 0.5s;
        }
    </style>
</head>
<body>
    <h1>Obliczenie kosztu malowania mieszkania</h1>
    <form action="" method="post">
        <label for="wysokosc">Wysokosc</label>
        <input type="number" name="wysokosc" id="wysokosc" min="1" required>

        <label for="szerokosc">Szerokość:</label>
        <input type="number" name="szerokosc" id="szerokosc" min="1" required>

        <label for="dlugosc">Długość:</label>
        <input type="number" name="dlugosc" id="dlugosc" min="1" required>

        <label for="pedzel">Rodzaj pędzla:</label>
        <label for="szeroki">Szeroki</label>
        <input type="radio" name="pedzel" value="szeroki" required>
        <label for="waski">Wąski</label>
        <input type="radio" name="pedzel" value="waski" required>

        <label for="farba">Rodzja farby:</label>
        <select name="farba" id="farba">
            <option value="latex">latexowa</option>
            <option value="winylowa">winylowa</option>
            <option value="akrylowa">akrylowa</option>
        </select>

        <button type="submit" name="submit">Oblicz cene</button>
        <div id="wyniki">
        <?php
        if(isset($_POST["submit"]))
        {
            $wysokosc = $_POST["wysokosc"];
            $szerokosc = $_POST["szerokosc"];
            $dlugosc = $_POST["dlugosc"];
            $pedzel = $_POST["pedzel"];
            $farba = $_POST["farba"];
            $cena;
            $powierzchnia = $szerokosc*$dlugosc + 2*$szerokosc*$wysokosc+2*$dlugosc*$wysokosc;

            switch($farba)
            {
                case "latex":
                    $cena = 35;
                    break;
                case "winylowa":
                    $cena = 30;
                    break;
                case "akrylowa":
                    $cena = 25;
                    break;
            }

            switch($pedzel)
            {
                case "waski":
                    $time = 15;
                    break;
                case "szeroki":
                    $time = 5;
                    break;
            }
            $time=($time*$powierzchnia)/60;
            echo "Powierzchnia do malowania: ".$powierzchnia." m&sup2;<br>";
            echo "Wybrano farbę ".$farba." o cenie: ".$cena*$powierzchnia." zł<br>";
            echo "Czas malowania rodzajem pędzla ".$pedzel." wynosi:".$time." godzin.";
        }

        ?>
    </form>
    
</body>
</html>