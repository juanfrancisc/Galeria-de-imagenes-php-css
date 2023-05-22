<?php 
//Controlamos la session
session_start();
	
	if (!isset($_SESSION["mivariabledesesion"])) {	
		header('Location: index.php');
        }

include("conexion.php");
$active1="active";
$active2="";
$active3="";
$active4="";



?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Comunion Laura</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="css/fluid-gallery.css">
	<link rel="stylesheet" href="css/demo.css">


</head>
<body>


	
<div class="container gallery-container">
	
	<!--?php include('nav.php');?-->
	
    <h2 class="page-description text-center">Comunion Laura Rodriguez Torres</h2>

    <h3 class="page-description text-center">10 de Junio de 2023</h3>
    
    <div class="tz-gallery">

        <div class="row">

		<?php
			$nums=1;
			$sql_banner_top=mysqli_query($con,"select * from banner where estado=1 order by orden ");
            //var_dump($sql_banner_top);
            /*$arr = (array)$sql_banner_top; 
            if (!$arr) { 
                echo "Pronto subiremos las fotos";
            }
            else {*/
			while($rw_banner_top=mysqli_fetch_array($sql_banner_top)){
		?>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="img/banner/<?php echo $rw_banner_top['url_image'];?>">
                    <img src="img/banner/<?php echo $rw_banner_top['url_image'];?>" alt="<?php echo $rw_banner_top['titulo'];?>" >
                </a>
            </div>
		<?php 
			if ($nums%3==0){
				echo '<div class="clearfix"></div>';
			}
		$nums++;
			}
        /*}*/
		?>	
            
            

        </div>

    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>