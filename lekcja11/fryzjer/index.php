<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fryzjer</title>
</head>
<body>
    <h3>Dziś promocja na strzyżenie włosów</h3>
    <form action="" method="post">
        
        <input type="radio" name="wlosy" value="k" id="k" required>
        <label for="k">Krótkie</label> <br>
        <input type="radio" name="wlosy" value="s" id="s" required>
        <label for="s">Średnie</label> <br>
        <input type="radio" name="wlosy" value="p" id="p" required>
        <label for="p">Półdługie</label> <br>
        <input type="radio" name="wlosy" value="d" id="d" required>
        <label for="d">Długie</label> <br>
        <button type="submit">Odkryj Promocje</button>
    </form>
    <?php
    if(!empty($_POST))
    {
        $cena = 0;
        $choice = $_POST["wlosy"];
        switch ($choice) {
            case "k":
                $cena = 25;
                break;
            case "s":
                $cena = 30;
                break;
            case "p":
                $cena = 40;
                break;
            case "d":
                $cena = 50;
                break;
            default:
                # code...
                break;
        }
        echo "Cena strzyżenia: ".$cena;
    }
    ?>
</body>
</html>