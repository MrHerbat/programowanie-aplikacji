<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Pojazd
        {
            public $rocznik;
            public $marka;
            public $kolor;
            
            public function malowanie()
            {
                $this->kolor="czerwony";
                echo "<br>przemalowano auto. <br>";
            }
            public function zmianaRocznika($zmienionyRocznik)
            {
                echo "zmieniono rocznik <br>";
                $this->rocznik=$zmienionyRocznik;
            }
            // function __construct()
            // {
            //     $this->marka ="Fiat";
            //     $this->rocznik="1983";
            //     $this->kolor="niebieski";
            // }
            function __construct($marka,$rocznik,$kolor)
            {
                $this->marka =$marka;
                $this->rocznik=$rocznik;
                $this->kolor=$kolor;
            }
            function __destruct()
            {
                echo "Usunięto obiekt <br>";
            }
        }

        $autko = new Pojazd("Fiat 126 elegant",1999,"zielony");
        // $autko -> marka = "Opel";
        // $autko -> kolor = "czarny";
        // $autko -> rocznik = 2013;
        echo "kolor auta:".$autko->kolor." | marka auta: ".$autko->marka." | rocznik auta: ".$autko->rocznik."<br>";
        $autko -> malowanie();
        echo "kolor auta:".$autko->kolor."<br>";
        $autko->zmianaRocznika(2024);
        echo "rocznik auta: ".$autko->rocznik."<br>";
    ?>
</body>
</html>