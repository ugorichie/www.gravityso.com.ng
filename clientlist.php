<?php 
require_once("partials/header.php"); 

require_once("classes/Engineer.php");

if(isset($_GET["id"])){
    $state_id = $_GET["id"];
    $engr = new Engineer;
    $engr = $engr->fetchEngineer($state_id);
    
}
// echo "<pre>";
// print_r ($engr);
// echo "</pre>";

// echo "<br>";
?>
<head>
    <title>Listing Engineers</title>
</head>

<body>

    <div class="row text-center my-3"> 
            <h4> Search Results For Engineers In  <?php   echo $engr["0"]["state"]?> </h4>
    </div> 

    <?php $serial = 1?>
    <div class="row mt-3 my-5">
        <?php foreach( $engr as $eng){ ?>

            <div class=" col-1 col-md-1"> <h1 class="bignum text-center pt-3"><?php echo  $serial++?></h1>  </div>


            <div class= "col d-none d-md-table-cell col-md-2 ic1a container my-2" >
                    <img src= "upload/<?php echo $eng['engineer_image']?>" class="img-fluid pt-3">   
            </div>
            
            <div class="col-8 col-md-7 pt-3 px-5">
            <?php
                echo " <h5> Fullname : "." ".  $eng["engineer_lastname"]."  ". $eng["engineer_firstname"]. "</h5>";
                echo " <p> Gender :  ".  $eng["engineer_gender"]. "</p>";
                echo  " <p class='text-muted'> Email:  ".  $eng["engineer_email"]. "</p>";
            ?>
            </div>

            <div class=" col-3 col-md-2 pt-4">
                <a href="dashboard.php?id=<?php echo $eng['engineer_id'];?>" class="btn btn-primary bgb"> VIEW MORE DETAILS</a>
            </div>

            

        <?php } ?>
        

    </div>
    </div>
    <?php include("partials/footer.php")?>
 
                