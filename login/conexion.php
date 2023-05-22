<?php
/*On Line*/
/*$DB_HOST="db5008799431.hosting-data.io";
$DB_NAME= "dbs7417789";
$DB_USER= "dbu2183178";
$DB_PASS= "Sabio11Junio2022";*/

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