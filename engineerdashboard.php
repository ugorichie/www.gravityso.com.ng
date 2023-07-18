<?php
require_once("partials/header.php");
require_once("classes/Engineer.php");
$engineer_id = $_SESSION["engineer_id"];
$engr = new Engineer();
$engr = $engr -> getEngineerDetails($engineer_id);
// echo "<pre>";
// print_r($engr);
// echo "</pre>";

require_once("classes/Work.php");
$nwork = new Work();
$work = $nwork -> getWork($engineer_id);

require_once("classes/Admin.php");
$newAdmin = new Admin();
$newAd = $newAdmin-> countStateEng($engr["state_id"]);

$newCom = $newAdmin->countComEng($engineer_id)

?>

<head>
    <title>Engineer Dashboard</title>

</head>

<div class="row" id="body">

    <?php include_once("partials/sidebar.php")   ?>

    <div class="col-12 col-md-10">
            <div class="row"> 
                <div class="col-10 bg-white bg-opacity-10 d-flex align-items-center justify-content-center " style="min-height:70px">

                        <h1 id="intro" >WELCOME  BACK  &nbsp; <?php echo " ".$engr["engineer_firstname"]?></h1>
                
                </div>
                <div class="col-2 d-flex align-items-center justify-content-center " style="min-height:150px">

                       <!-- <button class="btn btn-sm btn-outline-primary"> <a href="editprofile.php">edit profile</a></button> -->
                       <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           <i class="fa-solid fa-user-doctor fa-xl" style="color: #3f63a7;"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><p><a href="#"> &nbsp; HOME </a> </p></li>
                                        <li><p> <a href="editprofile.php">&nbsp; EDIT PROFILE</a> </p></li>
                                        <li><p> <a href="engineersub.php" > &nbsp; SUBSCRIPTION</a> </p></li>
                                        <li><p> <a href="#"> &nbsp; POST EVENTS</a> </p></li>
                                        <li><p> <a href="engineercollab.php"> &nbsp; COLLABORATION</a> </p></li>
                                        <li><p> <a href="changepassword.php"> &nbsp; CHANGE PASSWORD</a> </p></li>
                                        <li>
                                        <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                        <form action="process/logoutprocess.php" method="post">
                                             <button type="submit" name="logout" class="btn btn-outline text-danger">LOG OUT </button>
                                         </form>
                                        </li>
                                    </ul>
                                    </li>
                                </ul>

                
                </div>
            </div>
 
            <div class="row"> 
                <div class="col-3 col-md-2" id="jumpover">
                <img src="upload/<?php echo $engr['engineer_image']?>" class="img-fluid img-thumbnail img-roundedpill">
                </div>
                    <div class="col-xl-3 col-md-6">
                             <div class="card bg-primary text-white mb-4">
                                        <div class="card-body">TOTAL NUMBER OF ENGINEERS <br> IN YOUR STATE</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <span class="small text-white text-center"><?php echo $newAd;?> </span>
                                            
                                        </div>
                             </div>
                    </div>


                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                             <div class="card bg-info text-white mb-4">
                                        <div class="card-body">TOTAL NUMBER OF COMMENTS <br> ON YOUR PROFILE</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <span class="small text-white text-center"><?php echo $newCom;?> </span>
                                            
                                        </div>
                             </div>
                    </div>
            </div> 

            <div class="row bg-mute d-flex "> 
                <div class="col-12 d-flex d-inline flex-wrap justify-content-evenly bg-light py-2">
                        <?php
                            foreach($work as $work => $engr_work){
                        ?>


                        <div class="card my-1 cardwork">
                                <img src="workupload/<?php echo $engr_work['work_image']?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title"> <?php echo $engr_work['work_title']?></h5>
                                <p class="card-text"><?php echo $engr_work['work_description']?> &nbsp;<a href="#"> read more.</a></p>
                                    
                                </div> 
                        </div>

                        <?php
                            }
                        ?>
                        

                </div>
                <div class="col-12 py-3 d-flex justify-content-between px-5">
                        <a class="btn btn-primary btn-lg " href="editwork.php"> ADD WORK </a>
                        <button class="btn btn-outline-danger "> DELETE WORK </button>

                </div>

            </div>


            <div class=" d-flex justify-content-around my-4">

                <div class="col-xl-3 col-md-6 my-2">
                                    <div class="card bg-outline-info text-primary mb-4">
                                        <div class="card-body">UPDATE SUBSCRIBE</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-primary stretched-link" href="engineersub.php"> continue</a>
                                            <div class="small text-primary"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                </div>

                <div class="col-xl-3 col-md-6 my-2">
                                    <div class="card bg-outline-secondary text-primary mb-4">
                                        <div class="card-body">POST EVENTS</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-secondary stretched-link" href="#"> continue</a>
                                            <div class="small text-secondary"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                </div>
             </div>





        </div>




        
        
 </div>



<!-- this is div for container div in the header php -->
</div>
<script src="bootstrap/js/bootstrap.bundle.js"> </script>
<script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
<script src='jquery.min.js'></script>

<script>
    
</script>
</body>
</html>