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
    <title>Avión</title>
</head>
<body id="card-7">
    <div id="padding">
    <?php
    session_start();
    if (!($_SESSION['avionenjapon4']='check')) {
        header ('Location: ../ScapeRoom/barcoisla3.php');
    }
    ?>
    <div style="text-align: center; background-color: violet; border-radius: 15px 50px;">
    <p>Hemos pisado tierra firme hace unos minutos, he comenzado a caminar y me he vuetlo a perder por este país...</p>
    <p>¡¡Creo que es un país asiatico!!</p>
    <p>¿Me podrias decir dónde estamos?</p>
    </div>
    <form action="./intermedia.php" method="post">
        <input type="text" name="pais">
        <button type="submit" name="avanzar" class="btn btn-danger">Enviar</button>
    </form>
    <?php
    if (isset($_GET['msg'])) {
        echo '<p id="msg">'.$_GET['msg'].'</p>';
    }
    ?>
    </div>
</body>
</html>