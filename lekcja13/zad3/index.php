<?php
class Osoba{
    public $nazwisko;
    public $wzrost;
    public function wypisz()
    {
        echo "Nazwisko: ".$this->nazwisko." Wzrost: ".$this->wzrost." cm <br>";
    }
    public function czyWysoki()
    {
        echo "Czy jest wysoki? ";
        if($this->wzrost >=180)
        {
            return "tak";
        }
        else
        {
            return "nie";
        }
    }
}

$os = new Osoba();
$os->wzrost = 181;
$os->nazwisko = "Tokasiewicz";
$os->wypisz();
echo $os->czyWysoki();

?>