<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <meta name="desription" content="Hire experienced engineering professionals">
    <meta name="keywords" conents="engineer, build, building, state, house, hotel, structure, project, engineering, expert,skilled, connect,clients,hire,online service,network,site,professional,experienced">
    <meta name="author" content="Oguchi Chukwuebuka Ugochukwu">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    
    <link href='fontawesome/css/all.min.css' rel="stylesheet">
    <link rel="icon" href="asset/ico.png" type="image/png" sizes="60x60">
    <link href="style.css" rel="stylesheet" type="text/css">
    

    <!-- OpenGraph Meta Tags -->
    <meta property="og:title" content="GRAVITY SOLUTION">
    <meta property="og:description" content="A plateform that bridges the gap between qualified engineers and potential customers for project/building needs">
    <meta property="og:image" content="gravityso.com.ng/asset/logo.png">
    <meta property="og:url" content="gravityso.com.ng">
    <meta property="og:type" content="website">
   
</head>
<body style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
    <div class="container-fluid">


                <!-- THE  NAVIGATION  STARTS HERE -->

        <div class="row my-4">
            <div class="col-12">
                        <nav class="navbar bg-body-tertiary fixed-top navbar-expand-lg" style=" background-color: rgb(240, 239, 239);">
                            <div class="container-fluid">
                            <a class="navbar-brand" href="#"><img src="asset/logo.png" alt="logo"></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon bg-primary"></span>
                            </button>
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="Toggle navigation">
                                <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel"> GRAVITY SOLUTION</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                 <?php

//if(!isset($_SESSION)){
    
    ?> 
                                      <div class="offcanvas-body">
                                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3"> 
                                <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                                </li>
                            
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Navigation
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="register.php">Engineer</a></li>
                                    <li><a class="dropdown-item" href="client.php">Client</a></li>
                                    <li>
                                    <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#faq">F.A.Q.s</a></li>
                                </ul>
                                </li>
                            </ul>
                            </div>
                                    
                                 <?php
                            //}
                                
                                ?>  
                               
                                    <!-- <button class="btn btn-secondary" type="submit">Login</button> &nbsp; &nbsp; &nbsp;
                                    <button class="btn btn-outline-secondary" type="submit">Sign Up</button> -->
                                
                            </div>
                            </div>
                        </nav>

            </div>
        
        </div>
            <!-- THE NAVIGATION  ENDS HERE -->