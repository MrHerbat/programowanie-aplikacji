<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $data = getdate();
        $dzien = $data["mday"];
        if($dzien < 10)
            $dzien = "0".$dzien;
        $nazwadnia = $data["weekday"];
        switch ($nazwadnia) {
            case "Monday":
                $nazwadnia = "poniedziałek";
                break;
            case "Tuesday":
                $nazwadnia = "wtorek";
                break;
            case "Wednesday":
                $nazwadnia = "środa";
                break;
            case "Thursday":
                $nazwadnia = "czwartek";
                break;
            case "Friday":
                $nazwadnia = "piątek";
                break;
            case "Saturday":
                $nazwadnia = "wtorsobotaek";
                break;
            default:
                $nazwadnia = "niedziela";
                break;
        }
        $miesiac = $data["mon"];
        switch ($miesiac) {
            case 1:
                $miesiac = "styczeń";
                break;
            case 2:
                $miesiac = "luty";
                break;
            case 3:
                $miesiac = "marzec";
                break;
            case 4:
                $miesiac = "kwiecień";
                break;
            case 5:
                $miesiac = "may";
                break;
            case 6:
                $miesiac = "czerwiec";
                break;
            case 7:
                $miesiac = "lipiec";
                break;
            case 8:
                $miesiac = "sierpień";
                break;
            case 9:
                $miesiac = "wrzesień";
                break;
            case 10:
                $miesiac = "styczeń";
                break;
            case 11:
                $miesiac = "listopad";
                break;
            case 12:
                $miesiac = "grudzień";
                break;
        }
        $rok = $data["year"];
        echo "Dziś jest $nazwadnia $dzien $miesiac $rok </br>";
        echo date("H:i")."</br>";
        echo date("Y-m-d")."</br>";
        echo date("d-m-Y")."</br>";
        echo date("G:i:s")."</br>";
        echo date("H-i-sa")."</br>";
        echo date("Y-m-d G:i:s")."</br>";
        $wakacje = mktime(date("H"),date("i"),date("s"),6,21,2024);
        echo date("d:m:Y",$wakacje)."<br>";
    ?>
</body>
</html>