<?php

session_start();

require_once 'variables.php';
require_once 'fonction.php';

if (!isset($pageName)){
    $pageName = "Welcome";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEANIS-BONNETS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        table, th, td{
            border : 1px solid green;
        }
        .coloV{
            color: green;
        }
        .coloB{
            color: blue;
        }
    </style>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="?page=home">BEANIES</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?page=home">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link active" href="?page=list">Produits</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link active" href="?page=cart">Basket</a>
                     </li>
                        <?php
                            if (isset($_SESSION['username'])) {
                        ?>        
                                <li class="nav-item">
                                    <a class="nav-link active" href="?page=login"> <?= ($_SESSION["username"]); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="?page=logout">Logout</a>
                                </li>
                        <?php 
                        } else {
                        ?>
                            <li class="nav-item">
                               <a class="nav-link active" href="?page=login">Connection</a>
                            </li>
                            <li class="nav-item">
                               <a class="nav-link active" href="?page=formulaire">Contact</a>
                            </li>
                        <?php    
                        }
                        ?>
                 <!-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
                 </ul>
            </div>
        </div>
    </nav>
    <?php
        if (isset($_GET['login']) && $_GET['login']== "success"){
    ?>        
            <div class="alert alert-primary" role="alert">
              You are connected!
            </div>
    <?php    
    }
    ?>
    <?php
        if (isset($_GET['logout']) && $_GET['logout']== "success"){
    ?>        
            <div class="alert alert-primary" role="alert">
              You are not connected
            </div>
    <?php    
    }
    ?>
