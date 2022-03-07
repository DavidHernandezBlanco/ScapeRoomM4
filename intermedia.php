<?php
if (isset($_POST['planeta1']) && strtolower($_POST['planeta1'])=='mercurio') {
        
    session_start();
    $_SESSION['matematicas2']='check';

    header('Location: ../ScapeRoom/matematicas2.php');
} else if (isset($_POST['index'])){
    header('Location: ../ScapeRoom/planetas1.php?msg=Incorrecto');
}

if (isset($_POST['planeta2']) && strtolower($_POST['planeta2'])=='venus') {
        
    session_start();
    $_SESSION['matematicas2']='check';

    header('Location: ../ScapeRoom/matematicas2.php');
} else if (isset($_POST['index'])){
    header('Location: ../ScapeRoom/planetas1.php?msg=Incorrecto');
}

if (isset($_POST['planeta3']) && strtolower($_POST['planeta3'])=='tierra') {
        
    session_start();
    $_SESSION['matematicas2']='check';

    header('Location: ../ScapeRoom/matematicas2.php');
} else if (isset($_POST['index'])){
    header('Location: ../ScapeRoom/planetas1.php?msg=Incorrecto');
}

if (isset($_POST['planeta4']) && strtolower($_POST['planeta4'])=='marte') {
        
    session_start();
    $_SESSION['matematicas2']='check';

    header('Location: ../ScapeRoom/matematicas2.php');
} else if (isset($_POST['index'])){
    header('Location: ../ScapeRoom/planetas1.php?msg=Incorrecto');
}

if (isset($_POST['planeta5']) && strtolower($_POST['planeta5'])=='jupiter') {
        
    session_start();
    $_SESSION['matematicas2']='check';

    header('Location: ../ScapeRoom/matematicas2.php');
} else if (isset($_POST['index'])){
    header('Location: ../ScapeRoom/planetas1.php?msg=Incorrecto');
}

if (isset($_POST['planeta6']) && strtolower($_POST['planeta6'])=='saturno') {
        
    session_start();
    $_SESSION['matematicas2']='check';

    header('Location: ../ScapeRoom/matematicas2.php');
} else if (isset($_POST['index'])){
    header('Location: ../ScapeRoom/planetas1.php?msg=Incorrecto');
}

if (isset($_POST['planeta7']) && strtolower($_POST['planeta7'])=='urano') {
        
    session_start();
    $_SESSION['matematicas2']='check';

    header('Location: ../ScapeRoom/matematicas2.php');
} else if (isset($_POST['index'])){
    header('Location: ../ScapeRoom/planetas1.php?msg=Incorrecto');
}

if (isset($_POST['planeta8']) && strtolower($_POST['planeta8'])=='neptuno') {
        
    session_start();
    $_SESSION['matematicas2']='check';

    header('Location: ../ScapeRoom/matematicas2.php');
} else if (isset($_POST['index'])){
    header('Location: ../ScapeRoom/planetas1.php?msg=Incorrecto');
}



if (isset($_POST['solucion']) && strtolower($_POST['solucion'])=='3') {
        
    session_start();
    $_SESSION['barcoisla3']='check';

    header('Location: ../ScapeRoom/barcoisla3.php');
} else if (isset($_POST['enviar'])){
    header('Location: ../ScapeRoom/matematicas2.php?msg=Incorrecto');
}



if (isset($_POST['barco1']) && strtolower($_POST['barco1'])=='santa maria') {
        
    session_start();
    $_SESSION['avionenjapon4']='check';

    header('Location: ../ScapeRoom/avionenjapon4.php');
} else if (isset($_POST['siguiente'])){
    header('Location: ../ScapeRoom/barcoisla3.php?msg=Incorrecto');
}

if (isset($_POST['barco2']) && strtolower($_POST['barco2'])=='niña') {
        
    session_start();
    $_SESSION['avionenjapon4']='check';

    header('Location: ../ScapeRoom/avionenjapon4.php');
} else if (isset($_POST['siguiente'])){
    header('Location: ../ScapeRoom/barcoisla3.php?msg=Incorrecto');
}

if (isset($_POST['barco3']) && strtolower($_POST['barco3'])=='pinta') {
        
    session_start();
    $_SESSION['avionenjapon4']='check';

    header('Location: ../ScapeRoom/avionenjapon4.php');
} else if (isset($_POST['siguiente'])){
    header('Location: ../ScapeRoom/barcoisla3.php?msg=Incorrecto');
}

if (isset($_POST['pais']) && strtolower($_POST['pais'])=='japón') {

    session_start();
    $_SESSION['trenmadrid5']='check';
    
    header('Location: ../ScapeRoom/trenmadrid5.php');
} else if (isset($_POST['avanzar'])){
    header('Location: ../ScapeRoom/avionenjapon4.php?msg=Incorrecto');
}



if (isset($_POST['avion']) && strtolower($_POST['avion'])=='boeing747') {

    session_start();
    $_SESSION['Globoaerostatico6']='check';
    
    header('Location: ../ScapeRoom/Globoaerostatico6.php');
} else if (isset($_POST['enviamos'])){
    header('Location: ../ScapeRoom/trenmadrid5.php?msg=Incorrecto');
}



if (isset($_POST['ave']) && strtolower($_POST['ave'])=='pingüino') {

    session_start();
    $_SESSION['llavescoche7']='check';
    
    header('Location: ../ScapeRoom/llavescoche7.php');
} else if (isset($_POST['otro'])){
    header('Location: ../ScapeRoom/Globoaerostatico6.php?msg=Incorrecto');
}



if (isset($_POST['citroen']) && strtolower($_POST['citroen'])=='citroen') {

    session_start();
    $_SESSION['bicibarcelona8']='check';
    
    header('Location: ../ScapeRoom/bicibarcelona8.php');
} else if (isset($_POST['coche'])){
    header('Location: ../ScapeRoom/llavescoche7.php?msg=Incorrecto');
}

if (isset($_POST['skoda']) && strtolower($_POST['skoda'])=='skoda') {

    session_start();
    $_SESSION['bicibarcelona8']='check';
    
    header('Location: ../ScapeRoom/bicibarcelona8.php');
} else if (isset($_POST['coche'])){
    header('Location: ../ScapeRoom/llavescoche7.php?msg=Incorrecto');
}

if (isset($_POST['skoda']) && strtolower($_POST['skoda'])=='skoda') {

    session_start();
    $_SESSION['bicibarcelona8']='check';
    
    header('Location: ../ScapeRoom/bicibarcelona8.php');
} else if (isset($_POST['coche'])){
    header('Location: ../ScapeRoom/llavescoche7.php?msg=Incorrecto');
}



if (isset($_POST['cuadros']) && strtolower($_POST['cuadros'])=='23') {

    session_start();
    $_SESSION['final']='check';
    
    header('Location: ../ScapeRoom/final.php');
} else if (isset($_POST['next'])){
    header('Location: ../ScapeRoom/bicibarcelona8.php?msg=Incorrecto');
}
?>