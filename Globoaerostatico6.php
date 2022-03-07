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
    <title>Globo</title>
</head>
<body id="card-9">
    <div id="padding">
    <?php
    session_start();
    if (!($_SESSION['Globoaerostatico6']='check')) {
        header ('Location: ../ScapeRoom/trenmadrid5.php');
    }
    ?>
    <p>Me acabo de montar en un globo aerostatico, me han dicho que nos dejaran al lado de donde tenemos que llegar.</p>
    <p>Mientras volávamos me han hecho una pregunta y no se contestarla. ¿Podrias ayudarme a resolverla?</p>
    <p>¿Cual es el único ave que no puede volar?</p>
    <form action="./intermedia.php" method="post">
        <input type="text"  name="ave">
        <button type="submit" name="otro" class="btn btn-danger">Enviar</button>
    </form>
    <?php
        if (isset($_GET['msg'])) {
            echo '<p id="msg">'.$_GET['msg'].'</p>';
        }
    ?>
    </div>
</body>
</html>