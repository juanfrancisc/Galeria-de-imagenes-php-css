<?php
/*On Line*/
/*$DB_HOST="direccion";
$DB_NAME= "name_database";
$DB_USER= "usuario";
$DB_PASS= "password";*/

/*En local*/
$DB_HOST="localhost";
$DB_NAME= "fotos";
$DB_USER= "root";
$DB_PASS= "";
	# conectare la base de datos
    $con=@mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }

?>
