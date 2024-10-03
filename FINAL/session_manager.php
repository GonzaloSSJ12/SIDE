<?php
    if(!isset($_SESSION)){
        session_start(); //Inicia la SESION.
    }
    if((!isset($_POST['USERNAME']))&&(!isset($_SESSION['USERNAME']))){
        $_SESSION['USERNAME'] = NULL; //Define la variable del array SESSION 'USERNAME' como NULL si la variable del array POST 'USERNAME' no esta definida.
    }
    if((!isset($_POST['PASSWORD']))&&(!isset($_SESSION['PASSWORD']))){
        $_SESSION['PASSWORD'] = NULL; //Define la variable del array SESSION 'PASSWWORD' como NULL si la variable del array POST 'PASSWORD' no esta definida.
    }
    if(($_SESSION['PASSWORD'] == NULL)&&($_SESSION['USERNAME'] == NULL)){
        header("Location: login.php"); //Redirige al usuario a la pagina de logeo si ambas variables del array SESSION son NULL.
        exit(); //Termina la ejecucion de codigo php en la pagina.
    }