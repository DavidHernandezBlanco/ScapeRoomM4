<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shizuru&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./img/alien1.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Barco</title>
</head>
<body id="card-11">
    <div id="padding" style="padding-top: 4%">
    <?php
    session_start();
    if (!($_SESSION['barcoisla3']='check')) {
        header ('Location: ../ScapeRoom/matematicas2.php');
    }
    ?>
    <div>
    <p>¡Acabamos de aterrizar! Vaya aterrizaje más fuerte hemos tenidoo...</p>
    <p>¿Dónde estamos? Parece ser que nos hemos equivocado de dirección</p>
    <p>Estamos perdidos en una isla ayudame a construir un barco para poder navegar.</p>
    <p>¿Que tres barcos acompañaban a Cristobal Colón para alcanzar las Indias?</p>
    </div>
    <form action="./intermedia.php" method="post">
        <input type="text"  name="barco1" placeholder="Barco 1">
        <input type="text"  name="barco2" placeholder="Barco 2">
        <input type="text"  name="barco3" placeholder="Barco 3">
        <button type="submit" name="siguiente" class="btn btn-danger">Enviar</button>
    </form>
    <?php
    if (isset($_GET['msg'])) {
        echo '<p id="msg">'.$_GET['msg'].'</p>';
    }
    ?>
    </div>
</body>
</html>