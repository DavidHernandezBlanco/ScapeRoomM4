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
    <title>Espacio</title>
</head>

<body id="card-1">
    <div style="text-align: center;">
        <h1>Scape Room: De vuelta a casa</h1>
    </div>
    <a class="column-2" href="final.php"><p>.</p></a>
    <div class="column-2">
        <p>- Hola humano, que haces por aquí, te has perdido?</p>
        <p>- Si, me he perdido y quiero volver a la tierra, me puedes ayudar?</p>
        <p>- Por suspuesto, pero antes me puedes decir tu nombre?</p>
        <img src="./img/alien1.png" width="200" height="240" class="column-3">
        <p>Introduce tu nombre de avatar y presiona enter: </p>
            <?php
            if (empty($_POST['ava'])) {
                echo "<form action='index.php' method='post'>";
                echo "<input type='text' name='ava'/>";
                echo "</form>";

            } else if (!(empty($_POST['ava']))) {
                echo "<form action='index.php' method='post'>";
                echo "<p>Encantado {$_POST['ava']}, vamos a iniciar un largo camino desde el punto en el que nos encontramos hasta tu casa, yo te acompañaré todo el trayecto.</p>";
                echo "<p>Ahora elige a tu personaje:</p>";
                echo "<div id='card-2' class='column-5'>";
                echo "    <input class='column-5' type='radio' name='avaimg' id='1' value='1.PNG' />";
                echo "</div>";
                echo "<div id='card-5' class='column-5'>";
                echo "   <input class='column-5' type='radio' name='avaimg' id='4' value='6.PNG' />";
                echo "</div>";
                echo "<div id='card-6' class='column-5'>";
                echo "    <input class='column-5' type='radio' name='avaimg' id='5' value='7.PNG' />";
                echo "</div>";
                echo "</form>";
                echo "<a class='column-5' href='planetas1.php'><button type='submit' name='enviar' class='btn btn-danger'>Enviar</button></a>";
                echo "</br>";
            } else if (!(empty($_POST['ava']))) {
              header("Location: planetas1.php");
              exit;
            }
            if (isset($_POST['msg'])) {
              echo '<p id="msg">'.$_POST['msg'].'</p>';
            }
            ?>
</body>

</html>