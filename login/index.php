<?php 
	session_start();
    $_SESSION["mivariabledesesion"] = "LauraR";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="http://localhost/login/imagenes/Hogwarts.ico">
    <link rel="stylesheet" href="css/login.css">
    <title>Comunión de Laura</title>
</head>

<body>
    <main>
        <div id="contenedorcentrado">
            <div id="login">
                <form id="loginform" action="login.php" method="post">
                    <label for="usuario">Usuario</label>
                    <input id="usuario" type="text" name="usuario" placeholder="Usuario" required>
                    
                    <label for="password">Contraseña</label>
                    <input id="password" type="password" placeholder="Contraseña" name="password" required>
                    
                    <!--button type="submit" title="Ingresar" name="Ingresar">Acceder</button-->
                    <button type="submit">Acceder</button>
                </form>
            </div>
            <div id="derecho">
                <div class="titulo">
                    Comunión de Laura
                </div>
                <hr>
                <div class="pie-form">
                    10 de Junio de 2023
                    <hr>
                </div>
            </div>
        </div>
    </main>
</body>
</html>