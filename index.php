<?php require './inc/start_session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require './inc/head.php'; ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
        if(!isset($_GET['vista']) || $_GET['vista']==""){
            $_GET['vista'] = "login";
        }

        if(is_file("./vistas/". $_GET['vista']. ".php") && $_GET['vista'] != "login" && $_GET['vista'] != "404"){
            if((!isset($_SESSION['id']) || $_SESSION['id']=="") || (!isset($_SESSION['usuario']) || $_SESSION['usuario']=="")){
                include "./vistas/logout.php";
                exit();
            }

            include './inc/navbar.php';
            include './vistas/'. $_GET['vista'] . '.php';
            include './inc/scripts.php';
        } else {
            if($_GET['vista'] == "login"){
                include './vistas/login.php';
            } else {
                include './vistas/404.php';
            }
        }
    
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>