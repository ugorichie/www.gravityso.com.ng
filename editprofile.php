<?php
require_once("partials/header.php");
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
    <title> edit profile </title>
</head>

<div class="row" id="body">

  <?php include_once("partials/sidebar.php")?>

    <!-- <div class="col d-none d-md-table-cell bg-primary bg-opacity">
        <div class="row" class="sidebar"> 
                <div id="side1"> </div>

                <div class="side2"> <p><a href="#" class="text-white"> <i class="fa-solid fa-house side4"></i> &nbsp; &nbsp; HOME </a> </p> </div>

                <div class="side2"> <p> <a href="editprofile.php" class="text-white"><i class="fa-solid fa-user side4"></i>&nbsp; &nbsp; EDIT PROFILE</a> </p></div>
                

                <div class="side2"> <p> <a href="#" class="text-white"><i class="fa-solid fa-credit-card side4"></i>&nbsp;SUBSCRIPTION STATUS</a> </p> </div>

                <div class="side2 "> <p> <a href="#" class="text-white"> <i class="fa-solid fa-calendar-day side4"></i> &nbsp; &nbsp;  POST EVENTS</a> </p> </div>

                
                <div class="side2 "> <p> <a href="changepassword.php" class="text-white"> <i class="fa-solid fa-calendar-day side4"></i> &nbsp; &nbsp;  CHANGE PASSWORD</a> </p> </div>

                <div class="side2 ">
                     <form action="process/logoutprocess.php" method="post">
                     <i class="fa-solid fa-right-from-bracket side4 text-danger"></i> &nbsp; &nbsp; <button type="submit" name="logout" class="btn btn-outline text-danger">LOG OUT </button>
                     </form>
                </div>

        </div>


    </div> -->


    <div class="col-12 col-md-10">

                            <?php
                              if(isset($_SESSION["sum_form_error"])){
                                ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                     <?php echo $_SESSION['sum_form_error'] ?>
                                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                      </div>

                              <?php 
                                  unset ($_SESSION["sum_form_error"]);
                              }
                          ?>
              <h2 class="text-center text-muted mt-3"> EDIT PROFILE </h2>
            <div class="row d-flex justify-content-between"> 
                <div class="col-3 col-md-2">
                <img src="upload/<?php echo $engr['engineer_image']?>" class="img-fluid img-thumbnail img-roundedpill">
                </div>

                <div class="col-3 mt-4">
                  <?php include_once("partials/profilenav.php") ?>
                </div>
               
               
            </div>


            <div class="row">
               
               <div class="col-12 col-md-10">

                   <form action="process/editprocess.php" method="post" enctype="multipart/form-data">

                          <?php
                                      if(isset($_SESSION["sum_form"])){
                                        ?>
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <?php echo $_SESSION['sum_form'] ?>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                              </div>

                                      <?php 
                                          unset ($_SESSION["sum_form"]);
                                      }
                                  ?>
                        
                       <div class="my-2"> <label>CHANGE PROFILE PICTURE</label>  <input type="file" name="pic" class="form-control my-1"> </div>

                       <div class="my-1"> <label for="fname"> FIRST NAME</label>  <input type=" text" id="fname" name="fname" class="form-control my-1" value="<?php echo $engr['engineer_firstname']?>"></div>
                       <div class="my-2"> <label for="lname"> LAST NAME</label>  <input type="text" name="lname" class="form-control my-1" value="<?php echo $engr['engineer_lastname']?>"> </div>	
                      <div class="row my-2">
                        <div class=" col-8"> <label for="oname">OTHER NAME</label> <input type="text" id="oname" name="oname" class="form-control   my-1" value="<?php echo $engr['engineer_othername']?>"> </div>
                        <div class="col-4">
                                   <div class="my-2"> 
                                   <label for="state">STATE </label>  
                                   <select class="form-control drop-down" name="state">
                                       <option  value=""><?php echo $engr['state']?></option>
                                       <?php
                                       foreach($state as $key => $value){
                                        ?>
                                       <option value="<?php echo $key ?>"> <?php echo $value?> </option>";

                                       <?php
                                       }
                                       ?>
                                                                                           
                                   </select>
                               </div>
                       </div>
                           
                       <div class="row">
                               <div class="col-5">
                                   <div class="my-2"> 
                                   <label for="pass">YEARS OF EXPERIENCE </label>  
                                   <select class="form-control drop-down" name="yoe">
                                       <option  value=""><?php echo $engr['engineer_YOE']?></option>
                                       <option  value="0-2"> 0 - 2 </option>
                                       <option  value="3-5">  3 - 5</option>
                                       <option  value="6-8"> 6 - 8</option>
                                       <option  value="8-10"> 8 - 10</option>
                                       <option  value="10>"> ABOVE 10 </option>                                                        
                                   </select>
                                     </div>
                               </div>
                       </div>
                      
                      
                       <div class="my-2"> <label for="phone">PHONE NUMBER</label>  <input type="text" value="<?php echo $engr['engineer_phone']?>" name="phone" class="form-control my-1"> </div>

                       
                       <br>     
                       <div class="d-flex justify-content-between">              
                            <button class="btn btn-primary col-3" type="submit" name="update"> UPDATE </button>
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
        <h1 class="modal-title fs-5" id="exampleModalLabel">EXIT EDIT PROFILE</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ARE YOU SURE YOU WANT TO DISCARD?<br/>
      <br/> <span class="text-danger"> NOTE:</span> ALL CURRENT CHANGES WILL BE LOST
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal"> NO </button>
        <a  href="engineerdashboard.php" type="button" class="btn btn-primary btn-lg"> YES </a>
      </div>
    </div>
  </div>
</div>

<script src="bootstrap/js/bootstrap.bundle.min.js"> </script>
</body>
</html>
