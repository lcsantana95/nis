<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="asset/css/style.css">
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

        <?php 
		    include $_SERVER['DOCUMENT_ROOT'].'/config/rotas.php';
		?>

        <title>Desafio GESUAS</title>

        <link rel="apple-touch-icon" sizes="180x180" href="/asset/img/icon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/asset/img/icon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/asset/img/icon/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        
    </head>
    <body>

    	<?php include $content; ?>
		
		<!-- jQuery -->
        <script src="asset/js/jquery.min.js"></script>
        <script src="asset/js/sweetalert2.js"></script>
        <script src="asset/js/gesuas.js"></script>

    </body>
</html>