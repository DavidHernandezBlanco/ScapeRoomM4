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
    <title>Bici</title>
</head>
<body id="card-10">
    <?php
    session_start();
    if (!($_SESSION['bicibarcelona8']='check')) {
        header ('Location: ../ScapeRoom/llavescoche7.php');
    }
    ?>
    <div id="padding">
    <div style="background-color: black; border-radius: 15px 50px; text-align: center">
    <p>Estamos llegando ya a nuestro destino parece, para terminar, necesito que utilices tú vista para poder ayudarme.</p>
    <p>Te voy a enseñar una hoja que me ha dado un señor, me ha dicho que el número de cuadrados y rectangulos es el número de calles que me quedan para llegar a nuestro destino</p>
    <p>Cuantos cuadrados y rectangulos hay?</p>
    </div>
    <div>
        <img src="./img/Cuadrado.png" width="200wh" height="450vh" class="column-2" alt="a">
    </div>
    <form action="./intermedia.php" method="post" class="column-2" style="padding-left: 5%"> 
        <input type="text" name="cuadros">
        <br>
        <br>
        <br>
        <button type="submit" name="next" class="btn btn-danger">Enviar</button>
    </form>
    </div>
    <?php
    if (isset($_GET['msg'])) {
        echo '<p id="msg">'.$_GET['msg'].'</p>';
    }
    ?>
</body>
</html>