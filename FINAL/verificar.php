<?php
    include('utilidades.php'); //Incluye el archivo que contiene las variables de conexion a la BD.
    session_start(); //Inicia la SESION.
    if(!isset($_POST['USERNAME'])){
        $_SESSION['USERNAME'] = NULL; //Define la variable del array SESSION 'USERNAME' como NULL si la variable del array POST 'USERNAME' no esta definida.
    }
    if(!isset($_POST['PASSWORD'])){
        $_SESSION['PASSWORD'] = NULL; //Define la variable del array SESSION 'PASSWWORD' como NULL si la variable del array POST 'PASSWORD' no esta definida.
    }

    $Consulta_ingreso = "SELECT perfil.dniPersona, perfil.idCargos, perfil.idPermiso, personas.password, personas.nombre, personas.apellido FROM perfil, personas WHERE perfil.dniPersona = '$_POST[USERNAME]' AND personas.password = '$_POST[PASSWORD]'";

    $Resultado_consulta = mysqli_query($Conexion,$Consulta_ingreso) or die("Error: Mala consulta");
    if(mysqli_num_rows($Resultado_consulta) > 0){
        $DatosUsuario = mysqli_fetch_row($Resultado_consulta);
    }
    $_SESSION['USERNAME'] = $DatosUsuario[0];
    $_SESSION['PASSWORD'] = $DatosUsuario[3];
    if(is_null($DatosUsuario[4])){
        $_SESSION['NOMBRE'] = "Nombre";
    }
    else{
        $_SESSION['NOMBRE'] = $DatosUsuario[4];
    }
    if(is_null($DatosUsuario[5])){
        $_SESSION['APELLIDO'] = "Apellido";
    }
    else{
        $_SESSION['APELLIDO'] = $DatosUsuario[5];
    }
    //Cargo
    switch ($DatosUsuario[1]) {
        case 1:
            //Invitado-Sin cargo
            $_SESSION['CARGO'] = "Invitado";
            break;
        case 2:
            //Padre
            $_SESSION['CARGO'] = "Padre";
            break;
        case 3:
            //Alumno
            $_SESSION['CARGO'] = "Alumno";
            break;
        case 4:
            //Preceptor
            $_SESSION['CARGO'] = "Preceptor";
            break;
        case 5:
            //Profesor
            $_SESSION['CARGO'] = "Profesor";
            break;
        case 6:
            //Directivo
            $_SESSION['CARGO'] = "Directivo";
            break;
        case 7:
            //Administrador
            $_SESSION['CARGO'] = "Administrador";
            break;            
    }
    //Permiso
    switch ($DatosUsuario[2]) {
        case 1:
            //Invitado-Sin permisos
            $_SESSION['PERMISO'] = "Invitado";
            break;
        case 2:            
            //Padre
            $_SESSION['PERMISO'] = "Padre";
            break;
        case 3:
            //Alumno
            $_SESSION['PERMISO'] = "Alumno";
            break;
        case 4:
            //Preceptor
            $_SESSION['PERMISO'] = "Preceptor";
            break;
        case 5:
            //Profesor
            $_SESSION['PERMISO'] = "Profesor";
            break;
        case 6:
            //Directivo
            $_SESSION['PERMISO'] = "Directivo";
            break;
        case 7:
            //Administrador
            $_SESSION['PERMISO'] = "Administrador";
            break;
    } 

    header("Location: index.php");
    exit();