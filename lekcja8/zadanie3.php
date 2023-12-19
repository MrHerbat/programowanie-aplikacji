<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwestionariusz</title>
    <style>
        form{
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap:7px;
            border: 2px solid black;
            border-radius:15px;
            padding: 15px;
            max-width: fit-content;
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
        #kwestionariusz{
            border:5px double black;
            border-radius: 15px;
            display: flex;
            width: fit-content;
            flex-direction: column;
            padding: 15px
        }
    </style>
</head>
<body>
    <h1>Kwestionariusz osobowy</h1>
    <form action="" method="post">
        <label for="nazwisko">Nazwisko: </label>
        <input type="text" name="nazwisko" id="nazwisko" required>
        <label for="imie">Imię: </label>
        <input type="text" name="imie" id="imie" required>
        <div>
            <label for="gender">Płeć: </label>
            <label for="male">Mężczyzna</label>
            <input type="radio" name="gender" value="male" required>
            <label for="female">Kobieta</label>
            <input type="radio" name="gender" value="female" requried>
        </div>
        <label for="hobby">Hobby:</label>
        <select name="hobby[]" id="hobby" multiple required>
            <option value="ksiazki">Książki</option>
            <option value="sport">Sport</option>
            <option value="gry">Gry wideo</option>
            <option value="rysowanie">Rysowanie</option>
            <option value="muzyka">Muzyka</option>
            <option value="pisanie">Pisanie</option>
        </select>
        <label for="miejscowosc">Liczba mieszkańców w twojej miejscowości: </label>
        <select name="miejscowosc" id="miejscowosc" required>
            <option value="pon5">poniżej 5 tys.</option>
            <option value="pon20">poniżej 20 tys.</option>
            <option value="pow20">powyżej 20 tys.</option>
        </select>
        <button type="submit" name="submit">Wyślij</button>
    </form>
    <?php
        if(isset($_POST["submit"]))
        {
            $nazwisko = $_POST["nazwisko"];
            $imie = $_POST["imie"];
            $plec = $_POST["gender"];
            $hobby = $_POST["hobby"];
            $miejscowosc = $_POST["miejscowosc"];

            switch ($plec) {
                case 'male':
                    $gender = "Mężczyzna";
                    break;
                case 'female':
                    $gender = "Kobieta";
                    break;
            }
            switch ($miejscowosc) {
                case 'pon5':
                    $miej = "poniżej 5 tysięcy mieszkańców.";
                    break;
                case 'pon20':
                    $miej = "między 5, a 20 tysięcy mieszkańców.";
                    break;
                case 'pow20':
                    $miej = "powyżej 20 tysięcy mieszkańców";
                    break;
            }

            echo "<div id='kwestionariusz'>";
            echo "<h2> Imię: ".$imie." | Nazwisko: ".$nazwisko."</h2>";
            echo "<h3>Płeć: ".$gender."</h3>";
            echo "<h3> Wybrano ".count($hobby)." hobby</h3>";
            echo "<h3>Hobby: ";
            for ($i=0; $i < count($hobby); $i++) { 
                echo $hobby[$i].", ";
            }
            echo "</h3><h3> Twoja miejscowość ma ".$miej."</h3>";
            echo"</div>";

        }
    ?>
</body>
</html>