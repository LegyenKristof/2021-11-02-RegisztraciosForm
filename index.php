<?php

$sikeres = false;

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $nev = $_POST["nev"] ?? null;
    $jelszo = $_POST["jelszo"] ?? null;
    $jelszoIsmet = $_POST["jelszoIsmet"] ?? null;

    if (
        strlen($nev) <= 20 && 
        strlen($jelszo) >= 8 && 
        $jelszo == $jelszoIsmet &&
        trim($nev) != "" &&
        trim($jelszo) != ""
        ) $sikeres = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <script src="main.js"></script>
</head>
<body>

<form method="POST">
    <div>
        <span>Név:</span>
        <input type="text" name="nev" id="nev">
        <span id="nevSzamlalo">0 / 20</span>
    </div>
    <div>
        <span>Jelszó:</span>
        <input type="password" name="jelszo" id="jelszo">
        <span id="jelszoSzamlalo">0 / 8</span>
    </div>
    <div>
        <span>Jelszó ismét:</span>
        <input type="password" name="jelszoIsmet" id="jelszoIsmet">
        <span id="jelszoIsmetHelyes"></span>
    </div>
    <div>
        <input type="submit" value="Regisztráció">
    </div>
    <div>
        <?php 
        
        if ($sikeres){
            sleep(2);
            echo "Sikeres regisztráció!";
        } 

        ?>
    </div>
</form>
    
</body>
</html>