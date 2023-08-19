<?php
require_once("partials/header.php");
require_once("guard/engineerguard.php");
include("partials/state.php");
require_once("classes/Engineer.php");
$engineer_id = $_SESSION["engineer_id"];
$engr = new Engineer( );
$engr = $engr -> getEngineerDetails($engineer_id);
// echo "<pre>";
// print_r($engr);
// echo "</pre>";

?>
<head>
    <title> edit work </title>
</head>

<div class="row" id="body">

    <?php  include_once("partials/sidebar.php")  ?>

    <div class="col-12 col-md-10">
    <h2 class="text-center text-muted mt-3"> ADD TO WORK HISTORY </h2>
            <div class="row d-flex justify-content-between"> 
                <div class="col-3 col-md-2">
                <img src="upload/<?php echo $engr['engineer_image']?>" class="img-fluid img-thumbnail">
                </div>

                <div class="col-3 mt-4">
                  <?php include_once("partials/profilenav.php") ?>
                </div>
               
               
            </div>


            <div class="row">
               
               <div class="col-12 col-md-10">

                             <?php
                              if(isset($_SESSION["nwork"])){
                                 ?>
                                    <div class="alert alert-success alert-dismissible fade show my-2" role="alert">
                                     <?php echo $_SESSION['nwork'] ?>
                                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                      </div>

                              <?php 
                                  unset ($_SESSION["nwork"]);
                              }
                             ?>

                              <?php
                              if(isset($_SESSION["err_nwork"])){
                                 ?>
                                    <div class="alert alert-danger alert-dismissible fade show my-2" role="alert">
                                     <?php echo $_SESSION['err_nwork'] ?>
                                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                      </div>

                              <?php 
                                  unset ($_SESSION["err_nwork"]);
                              }
                             ?>


                   <form action="process/workprocess.php" method="post" enctype="multipart/form-data">

                
                   <div class="my-2"> <label for="wf"> WORK FILE <span class="text-danger"> * </span></label>  <input type="file" id="wf" name="workpic" class="form-control my-1"> </div>

                   <div class="my-2"> <label for="title"> WORK TITLE <span class="text-danger"> * </span></label>  <input type="text" id="title" name="worktit" class="form-control my-1"> </div>
                      
                       <div class="my-2"> <label for="desc">WORK DESCRIPTION </label>  <textarea name="workdesc" id="desc" rows="8" class="form-control my-1"></textarea> </div>

                       
                       <br>     
                       <div class="d-flex justify-content-between">              
                            <button class="btn btn-primary col-3" type="submit" name="addwork"> COMPLETE </button>
                            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            DISCARD
                            </button>

                         </div>
                     </form>
               
               
               </div>
           </div>













    


    </div>

<!-- Modal for DISCARD -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">EXIT THIS PAGE</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ARE YOU SURE YOU WANT TO DISCARD?<br/>
      <br/> <span class="text-danger"> NOTE:</span> ALL CURRENT PROCESS TO ADD WORK DETAILS WILL BE LOST
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal"> NO </button>
        <a  href="engineerdashboard.php" type="button" class="btn btn-outline-danger btn-lg"> YES </a>
      </div>
    </div>
  </div>
</div>

<script src="bootstrap/js/bootstrap.bundle.min.js"> </script>
</body>
</html>
