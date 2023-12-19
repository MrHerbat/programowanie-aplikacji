<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            background-color: #111;
            color: white;
        }
        button{
            background-color: #222;
            color: #ddd;
            border: 1px black solid;
            padding: 10px;
            transition: 0.5s;
        }
        button:hover{
            background-color: #ccc;
            color: black;
            transition: 0.5s;
        }
    </style>
</head>
<body>
    <h1>Jakich języków obcych się uczysz?</h1>
    <form action="" method="post">
        <select name="jezyki[]" id="jezyki" multiple>
            <option value="koreanski">Koreański</option>
            <option value="angielski">Angielski</option>
            <option value="niemiecki">Niemiecki</option>
            <option value="japonski">Japoński</option>
            <option value="rosyjski">Rosyjski</option>
            <option value="hiszpanski">Hiszpański</option>
        </select>
        <button type="submit" name="submit">Takich się uczę!</button>
    </form>
    <?php
    if(isset($_POST["submit"]))
    {
        $jezyki = $_POST["jezyki"];
        echo "Wybrano języki: ";
        for ($i=0; $i < count($jezyki); $i++) { 
            echo $jezyki[$i].", ";
        }
    }
    ?>
</body>
</html>