<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="licznik">Podaj licznik:</label>
        <input type="number" name="licznik" id="licznik" required>
        <label for="mianownik">Podaj mianownik:</label>
        <input type="number" name="mianownik" id="mianownik" required>
        <button type="submit">Oblicz</button>
    </form>
</body>
</html>
<?php
class Ulamek
{
    public $licznik;
    public $mianownik;

    function __construct($licznik,$mianownik)
    {
        $this -> licznik = $licznik;
        $this -> mianownik = $mianownik;
    }

    public function wypiszUlamek()
    {
        echo "Ułamek wynosi:<sup>".$this->licznik."</sup>&frasl;<sub>".$this->mianownik."</sub><br>";
    }
    public function skracanie()
    {
        $a = $this->licznik;
        if($a<0)
        {
            $a*=-1;
        }
        $b = $this->mianownik;
        if($b<0)
        {
            $b*=-1;
        }
        while ($a!=$b) {
            if($a>$b)
            {
                $a-=$b;
            }
            else
            {
                $b-=$a;
            }
        }
        if($this->licznik < 0 && $this->mianownik < 0)
        {
            $a*=-1;
            $b*=-1;
        }
        $this->licznik = $this->licznik/$a;
        $this->mianownik = $this->mianownik/$a;
        return $this;
    }
}
if(!empty($_POST)){
    $l = $_POST["licznik"];
    $m = $_POST["mianownik"];
    if($m==0)
    {
        echo "<div style='color:red;'><b>NIE DZIELIĆ PRZEZ ZERO!</b></div>";
    }
    else
    {
        $ulamek = new Ulamek($l,$m);
        $ulamek -> wypiszUlamek();
        $ulamek -> skracanie();
        $ulamek -> wypiszUlamek();
    }
    
}




?>