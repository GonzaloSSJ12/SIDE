<?php
    $Host = 'localhost';
    $UserBD = 'phpeladmin';
    $PasswordBD = 'adminphp';
    $BD = 'sidetec2';

    $Conexion = mysqli_connect($Host,$UserBD,$PasswordBD,$BD) or die("Error de conexion a la base de datos");
    $ErrQuery = "Error de consulta";

    $Consulta_crear_perfil = "INSERT INTO `perfil`(`dniPersona`, `idCargos`, `idPermiso`) VALUES ('','','')";

    $M = 'AES-256-CBC'; //Metodo
    $H = md5($M); //Hash
    $LI = openssl_cipher_iv_length($M); //Longitud del inicializador
    $I = openssl_random_pseudo_bytes($LI); //Inicializador, numero "random"
    //XDD
    // function Encr($Modo,$M,$H,$I){
    //     if ($Modo==1){
    //         $_SESSION['CFPWD'] = openssl_encrypt($_SESSION['PWD'],$M,$H,0,$I);
    //     }else if ($Modo==2){
    //         $_SESSION['DCFPWD'] = openssl_encrypt($_SESSION['CFPWD'],$M,$H,0,$I);
    //     }
    // }