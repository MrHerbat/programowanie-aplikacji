<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 1</title>
</head>
<body>
    <form action="" method="post">
        <label for="nazwisko">Nazwisko: </label>
        <input type="text" name="nazwisko" id="nazwisko">
        <br>
        <label for="zawod">Twoj zawod: </label>
        <select name="zawod" id="">
            <?php
                $dane = fopen("dane.txt","r");
                for ($i=0; $i < 8; $i++)
                { 
                    $line = fgets($dane);
                    echo "<option value='$line'>$line</option>";
                }
                fclose($dane);
            ?>
        </select>
        <br>
        <button type="submit">Prześlij</button>
    </form>
    <h3>
    <?php
    if(!empty($_POST["nazwisko"]))
    {
        $nazwisko = $_POST["nazwisko"];
        $zawod = $_POST["zawod"];
        
        echo "Masz na nazwisko ".ucfirst($nazwisko)." i pracujesz jako ".$zawod;
        $zapis = fopen("nazwisko.txt","a");
        fwrite($zapis, ucfirst($nazwisko)." ".$zawod);
    }
    else
    {
        echo "Brak nazwiska";
    }


    ?>
    <h3>
</body>
</html>
