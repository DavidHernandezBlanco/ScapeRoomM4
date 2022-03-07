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
    <title>Prueba 6</title>
</head>
<body id="card-8">
    <div id="padding">
    <?php
    session_start();
    if (!($_SESSION['matematicas2']='check')) {
        header ('Location: ../ScapeRoom/planetas1.php');
    }
    ?>
    <div style='background-color: black;'>
        <p>Hemos pasado de nivel, ¡¡¡Lo estas haciendo genial!!! Continua así</p>
        <p>Esta vez nos hemos encontrado con una operación Matematica muy dificl para mi, vengo de un planeta donde apenas nos enseñan matematicas...</p>
        <p>Pero hoy estamos de suerte, porque seguro que tú nos podras ayudar</p>
        <p>Calcula cociente de la siguiente division: (Esta division nos ayudará a saber cuantos km de la Tierra estamos)</p>
        <h3>(3x^2-7x+5) : (x^2-x+1)</h3>
    </div>
    <form action="./intermedia.php" method="post">
    <input type="text" name="solucion">
    <button type="submit" name="enviar" class="btn btn-danger">enviar</button>
    </form>
    <?php
    if (isset($_GET['msg'])) {
        echo '<p id="msg">'.$_GET['msg'].'</p>';
    }
    ?>
    </div>
</body>
</html>