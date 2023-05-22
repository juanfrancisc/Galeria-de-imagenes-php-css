<?php
$thefolder = "img/banner";
if ($handler = opendir($thefolder)) {
	echo "<ul>";
    echo "INSERT INTO `banner` (`titulo`, `descripcion`, `url_image`, `estado`) VALUES";
    while (false !== ($file = readdir($handler))) {
            echo "<li>('Comunión de Laura','10 de Junio 2023','$file','1'),</li>";
    }
    echo "</ul>";
    closedir($handler);
}

?>