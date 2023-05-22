<?php

/*foreach($_POST as $campo => $valor){
  echo "- ". $campo ." = ". $valor;
}*/


$usuario= $_POST["usuario"];
$password= $_POST["password"];

//echo "Usuario: ".$usuario." y pass es ".$password;

if ($usuario=="Laura" & $password=="Graciasatodos") {
        header('Location: galeria.php');
    }
else{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Los datos introducidos no son correctos, intentelo de nuevo');
    window.location.href='index.php';
    </script>");

}

?>