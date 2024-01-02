<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwiaciarnia</title>
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
        }
        button{
            border-radius: 20px;    
            background-color: #222;
            color: #ddd;
            border: 3px black solid;
            padding: 10px;
            transition: 0.5s;
        }
        button:hover{
            background-color: #afa;
            color: black;
            transition: 0.5s;
        }
    </style>
</head>
<body>
    <h1>Kwiaciarnia "Bratek"</h1>
    <form action="" method="post">
        <select name="kwiaty" id="">
            <!-- Tylko nazwy kwiatków -->
            <?php
                $file = fopen("kwiatki.txt", "r");
                for ($i=0; $i < 5; $i++) 
                { 
                    $flower = explode(' ', fgets($file));
                    echo "<option value='".$flower[0]."'>".$flower[0]."</option>";
                }
                fclose($file);
            ?>
        </select>
        <label for="ilosc">Ilość kwiatów:</label>
        <input type="number" name="ilosc" id="" min="0">
        <label for="ozdoba">Przyozdobić?</label>
        <input type="checkbox" name="ozdoba" id="">
        <button type="submit">Kup</button>
    </form>
    <div id="zamowienie">
        <?php
        if(!empty($_POST))
        {
            $file = fopen("kwiatki.txt","r");
            $kwiat = $_POST["kwiaty"];
            for ($i=0; $i < 8; $i++) { 
                $line = explode(" ", fgets($file));
                if($line[0] == $kwiat)
                {
                    $kolor = $line[1];
                    $cena = $line[2];
                    break;
                }
            }
            fclose($file);
            $ilosc = $_POST["ilosc"];
            if(!empty($_POST["ozdoba"]))
            {
                $ozd = $_POST["ozdoba"];
            }
            else
            {
                $ozd = false;
            }

            $suma = (isset($ozd)?20:0)+intval($ilosc)*intval($cena);
            echo "Kupiono ".$kwiat." koloru ".$kolor." sztuk ".$ilosc."<br>";
            echo "Przyozdobiono: ";
            echo isset($ozd)?"Tak":"Nie";
            echo "<br>";
            echo "Suma całości: ".$suma." złotych";
        }
        else
        {
            echo "Proszę uzupełnić dane";
        }
        ?>
    </div>
</body>
</html>