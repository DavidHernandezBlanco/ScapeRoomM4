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
    <title>Coche</title>
</head>
<body style='background-color: lightblue'>
    <div id="padding">
    <?php
    session_start();
    if (!($_SESSION['llavescoche7']='check')) {
        header ('Location: ../ScapeRoom/Globoaerostatico6.php');
    }
    ?>
    <p style="color: black;">Para escoger el coche tenemos dudas en la marca. Podrías ayudarme a saber cuales son estas?</p>
    <form action="./intermedia.php" method="post">
        <div class="column-3">
            <img src="./img/citroen.jpg" width="150vh" height="250vh" alt="">
            <br>
            <p style="color: black;">Coche 1</p><input class="column-2" align-items="center" type="text" name="citroen" id="1">
        </div>
        <div class="column-3">
            <img src="./img/skoda.png" width="150vh" height="250vh" alt="">
            <br>
            <p style="color: black;">Coche 2</p><input class="column-2" align-items="center" type="text" name="skoda" id="2">
        </div>
        <div class="column-3">
            <img src="./img/Logo_peugeot.jpg" width="150vh" height="250vh" alt="">
            <br>
            <p style="color: black;">Coche 3</p><input class="column-2" align-items="center" type="text" name="peugeot" id="3">
        </div>
        <button type="submit" name="coche" class="btn btn-danger">Enviar</button>
    </form>
    <?php
    if (isset($_GET['msg'])) {
        echo '<p id="msg">'.$_GET['msg'].'</p>';
    }
    ?>
    </div>
</body>
</html>