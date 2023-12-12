<?php
$a = 0;
$b = 0;
?>
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
        <h1>POTĘGOWANIE</h1>
    </header>   
    <section id="main1">
        <form action="strona2.php" method="POST">
            <div id="number">Podaj pierwszą liczbę: <input type="number" name="a"></div> </br>
            <div id="number">Podaj drugą liczbę: <input type="number" name="b"></div> </br>
            <button type="submit" name="potegowanie">potegowanie</button>
        </form>
        <?php
        if(isset($_POST["potegowanie"]))
        {
            $a = $_POST["a"];
            $b = $_POST["b"];
            $c = $a;
            if(empty($a) || empty($b))
            {
                echo "Wpisz podstawę i wykładnik potęgi";
            }
            elseif(isset($_POST["potegowanie"]) && !empty($a) && $b<=0)
            {
                    echo "Wykładnik potęgi musi być dodatni";
            }
            else
            {
                for($i = 0; $i+1<$b;$i++)
                {
                    $a=$a*$c;
                } 
                    echo "$c^$b = $a";
            }
        }
        
        ?>
    </section>
</body>
</html>
<?php
    

?>