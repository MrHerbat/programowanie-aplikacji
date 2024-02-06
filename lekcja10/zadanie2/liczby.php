<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciąg arytmetyczny</title>
</head>
<body>
    <h2>Generowanie ciągu liczbowego</h2>
    <form action="" method="post">
        <label for="a">Pierwszy wyraz A1:</label>
        <input type="number" name="a" id="" required> <br>
        <label for="r">Podaj interwał:</label>
        <input type="number" name="r" id="" required> <br>
        <label for="n">Liczba wyrazów w ciągu N:</label>
        <input type="number" name="n" id="" required><br>
        <select name="ciag" id="" required>Wybierz rodzaj ciągu:
            <option value="ary">arytmetyczny</option>
            <option value="geo">geometryczny</option>
        </select> <br>
        <button type="submit">Generuj ciąg</button>
    </form>
    <?php
    if(!empty($_POST))
    {
        $a = $_POST["a"];
        $r = $_POST["r"];
        $n = $_POST["n"];
        $rodzaj = $_POST["ciag"];
        if($rodzaj == "ary")
        {
            echo "<div>Ciąg arytmetyczny zawiera wyrazy: ";
            for ($i=0; $i < $n; $i++) { 
                echo $a.", ";
                $a+=$r;
            }
            echo "</div>";
       }
       else
       {
        $temp = $a;
        echo "<div>Ciąg geometryczny zawiera wyrazy: ";
        for ($i=0; $i <= $n; $i++) 
        { 
            $a = $temp * power($r,$i-1);
            echo $a.", ";
        }
       }

    }
    function power($a, $q)
    {
        if($q == 0)
        {
            return 1;
        }
        if($q<0)
        {
            return $a/($q*-1);
        }
        $temp = $a;
        for ($i=0; $i < $q; $i++) 
        {
            $a*=$temp;
        }
        return $a;
        
    }

    ?>
</body>
</html>