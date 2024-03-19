<!-- z pliku pobierz liczbę będącą rozmiarem tablicy, 
a z formularza dwie liczby będące zakresem losowania liczb do tablicy.
Wyświetl elementy tablicy, posortuj ją malejąco. Dodaj na końcu liczby 100,200,300 
z tablicy utwórz łańcuch, potasuj znaki w tym łańcuchu i wyznacz kodów ASCII wszystkich elementów
znajdujących się w łańcuhu-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="" method="post">
            <label for="dolny">Podaj dolny zakres losowania:</label>
            <input type="number" name="dolny" id="" required> <br>
            <label for="gorny">Podaj gorny zakres losowania:</label>
            <input type="number" name="gorny" id="" required> <br>
            <button type="submit">Losuj</button><br>
        </form>
<?php
$file = fopen("rozmiar.txt",'r');
$rozmiar = fgets($file);
if(!empty($_POST))
{
    $tab = Array();
    $min = $_POST["dolny"];
    $max = $_POST["gorny"];
    for ($i=0; $i < $rozmiar; $i++) { 
        $tab[$i] = rand($min,$max);
        echo $tab[$i]." ";
    }
    echo "<br>";
    rsort($tab);
    for ($i=0; $i < $rozmiar; $i++) { 
        echo $tab[$i]." ";
    }
    echo "<br>";
    array_push($tab,100,200,300);
    for ($i=0; $i < count($tab); $i++) { 
        echo $tab[$i]." ";
    }
    echo "<br>";
    $string = implode("",$tab);
    echo $string."<br>";
    $string = str_shuffle($string);
    echo $string."<br>";
    $ascii = 0;
    for ($i=0; $i < strlen($string); $i++) {
        $ascii += ord($string[$i]); 
    }
    echo "Suma kodów ASCII łańcucha: ".$ascii;
}
?>
</body>
</html>