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

<form>
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
</form>
    
</body>
</html>