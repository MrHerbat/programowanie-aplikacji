<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dane Nauczyciela</title>
    <style>
        form{
            border: 2px solid black;
            border-radius:25px;
            width: 400px;
            padding: 10px
        }
        #dane{
            border: 2px solid black;
            border-radius:25px;
            background-color: #eee;
            width: 400px;
            padding:10px;
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1>Dane nauczyciela</h1>
    <form action="" method="post">
        <label for="nazwisko">Nazwisko: </label>
        <input type="text" name="nazwisko" id=""> <br>
        <label for="przedmioty">Nauczane przedmioty:</label> <br>
        <select name="przedmioty[]" id="" multiple>
        <?php
            $file = fopen("przedmioty.txt","r");
            for ($i=0; $i < 6; $i++) { 
                $line = fgets($file);
                echo "<option value='".$line."'>".ucfirst($line)."</option>";
            }
        ?>
        </select> <br>
        <label for="awans">Stopień awansu: </label>
        <label for="stazysta">stażysta</label>
        <input type="radio" name="awans" id="stazysta" value="stazysta">
        <label for="mianowany">mianowany</label>
        <input type="radio" name="awans" id="mianowany" value="mianowany">
        <label for="dyplomowany">dyplomowany</label>
        <input type="radio" name="awans" id="dyplomowany" value="dyplomowany"> <br>
        <label for="lata">Lata stażu: </label>
        <input type="number" name="lata" id=""> <br>
        <button type="submit">Prześlij dane</button>
    </form>
    <div id="dane">
    <?php
    if(!empty($_POST))
    {
        if(empty($_POST["nazwisko"])||empty($_POST["lata"])||empty($_POST["awans"])||empty($_POST["przedmioty"])) 
        {
            echo "Proszę uzupełnić dane!";
        }
        else
        {
            $nazwisko = $_POST["nazwisko"];
            $awans = $_POST["awans"];
            $lata = $_POST["lata"];
            $przedmioty = $_POST["przedmioty"];
            $placa = 0;
            switch ($awans) {
                case 'stazysta':
                    $placa = 3000;
                    break;
                case 'mianowany':
                    $placa = 3500;
                    break;
                case 'mianowany':
                    $placa = 4000;
                    break;
                default:
                    $placa = 0;
                    break;
            }
            $placa+= intval($lata)*100;
            echo "Nazwisko: ".ucfirst($nazwisko)."<br>";
            echo "Nauczane przedmioty: <ul>";
            for ($i=0; $i < count($przedmioty); $i++) { 
                echo "<li>".$przedmioty[$i]."</li>";
            }
            echo "</ul>";
            echo "Stopień awansu: ".$awans." ze stażem o długości ".$lata." lat <br>";
            echo "Płaca minimalna: ".$placa;
        }
    }
    ?>
    </div>
</body>
</html>