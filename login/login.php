<?php

/*foreach($_POST as $campo => $valor){
  echo "- ". $campo ." = ". $valor;
}*/
session_start();

$usuario= $_POST["usuario"];
$password= $_POST["password"];
$nuevaURL="galeria.html";
echo "Usuario: ".$usuario." y pass es ".$password;

if ($usuario=="Laura") {
    if ($password==="aa"){
        header('Location: '.$nuevaURL);
    }
}
else{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Los datos introducidos no son correctos, intentelo de nuevo');
    window.location.href='index.html';
    </script>");

}

?>