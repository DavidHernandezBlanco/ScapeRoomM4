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
    <title>Prueba 1</title>
</head>

<body id="card-14">
    <div id="padding">
    <?php
    echo "Perfecto, he visto que tu nave espacial no tiene mucho combustible, hay que saberse el orden de los planetas de la Vía Láctea para calcular si disponemos del combustible necesario.";
    echo "Inténtalo y mucha suerte, tú puedes!";
    ?>
    <p>Introduzca aquí el nombre de los planetas para poder avanzar.</p>
    <p>Si fallas uno tendrás que volver a repetirlos todos, recuerda que tenemos una mision y hay que cumplirla, asique, hazlo lo mejor posible.</p>
    <form action="./intermedia.php" method="post">
        <input type="text" name="planeta1" placeholder="Planeta 1">
        <br>
        <input type="text" name="planeta2" placeholder="Planeta 2">
        <br>
        <input type="text" name="planeta3" placeholder="Planeta 3">
        <br>
        <input type="text" name="planeta4" placeholder="Planeta 4">
        <br>
        <input type="text" name="planeta5" placeholder="Planeta 5">
        <br>
        <input type="text" name="planeta6" placeholder="Planeta 6">
        <br>
        <input type="text" name="planeta7" placeholder="Planeta 7">
        <br>
        <input type="text" name="planeta8" placeholder="Planeta 8">
        <br>
        <button type="submit" name="index" class="btn btn-danger">Enviar</button>
    </form>
    <?php
    if (isset($_GET['msg'])) {
        echo '<p id="msg">'.$_GET['msg'].'</p>';
    }
    ?>
    </div>
</body>

</html>