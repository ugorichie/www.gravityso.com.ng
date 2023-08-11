
<?php
require_once("partials/header.php");
require_once("guard/engineerguard.php");
require_once("classes/Engineer.php");
$engineer_id = $_SESSION["engineer_id"];
$engr = new Engineer();
$engr = $engr -> getEngineerDetails($engineer_id);


?>
<head>
    <title> change password </title>
</head>

<div class="row" id="body">
    
      <?php  include_once("partials/sidebar.php")?>
    <!-- <div class="col d-none d-md-table-cell bg-primary">
        <div class="row" class="sidebar"> 
                <div id="side1"> </div>

                <div class="side2"> <p><a href="engineerdashboard.php"> <i class="fa-solid fa-house side4"></i> &nbsp; &nbsp; HOME PROFILE</a> </p> </div>

                <div class="side2"> <p> <a href="editprofile.php"><i class="fa-solid fa-user side4"></i>&nbsp; &nbsp; EDIT PROFILE</a> </p></div>

                <div class="side2"> <p> <a href="#"><i class="fa-solid fa-credit-card side4"></i>&nbsp;SUBSCRIPTION STATUS</a> </p> </div>

                <div class="side2 "> <p> <a href="#"> <i class="fa-solid fa-calendar-day side4"></i> &nbsp; &nbsp;  POST EVENTS</a> </p> </div>

                
                <div class="side2 "> <p> <a href="#"> <i class="fa-solid fa-calendar-day side4"></i> &nbsp; &nbsp;  CHANGE PASSWORD</a> </p> </div>

                <div class="side2 ">
                     <form action="process/logoutprocess.php" method="post">
                     <i class="fa-solid fa-right-from-bracket side4"></i> &nbsp; &nbsp; <button type="submit" name="logout" class="btn btn-outline text-danger">LOG OUT </button>
                     </form>
                </div>

        </div>
    </div> -->

    <div class="col-12 col-md-10">
    <h2 class="text-center text-muted mt-3"> CHANGE PASSWORD </h2>
            <div class="row my-3 d-flex justify-content-between"> 
                <div class="col-2">
                     <img src="upload/<?php echo $engr['engineer_image']?>" class="img-fluid img-thumbnail">
                </div>
                <div class="col-3 mt-4">
                  <?php include_once("partials/profilenav.php") ?>
                </div>
               

            </div>


            <div class="row">
               
               <div class="col-10">

                  <!-- HERE IS A BOOTSTRAP ALERT THAT POPS WITH A MESSAGE TO INFORM THE ENGINEER IF THE PASSWORD CHANGE WAS SUCCESSFUL OR NOT -->

                            <?php
                              if(isset($_SESSION["err_pass"])){
                                 ?>
                                    <div class="alert alert-danger alert-dismissible fade show my-2" role="alert">
                                     <?php echo $_SESSION['err_pass'] ?>
                                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                      </div>

                              <?php 
                                  unset ($_SESSION["err_pass"]);
                              }
                             ?>

                            <?php
                              if(isset($_SESSION["pass"])){
                                 ?>
                                    <div class="alert alert-success alert-dismissible fade show my-2" role="alert">
                                     <?php echo $_SESSION['pass'] ?>
                                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                      </div>

                              <?php 
                                  unset ($_SESSION["pass"]);
                              }
                             ?>

                   <form action="process/changepasswordprocess.php" method="post">
                       <div class="my-2"> <label for="pass">OLD  PASSWORD</label>  <input type="password"  name="pass" class="form-control my-1 passwd"> </div>	
                       <span><input type="checkbox" class="show" value="show"> &nbsp;show password</span>

                       <div class="my-2"> <label for="cpass"> NEW PASSWORD</label>  <input type="password" name="newpass" class="form-control my-1">
                       
                        </div>
                               

                       <br>     
                       <div class="d-flex justify-content-between">              
                            <button class="btn btn-primary col-3" type="submit" name="change"> CHANGE </button>
                            <a href="engineerdashboard.php" class="btn btn-outline-danger col-3" type="reset" name="discard"> DISCARD </a>
                         </div>
                     </form>
               
               
               </div>
           </div>
















    </div>
    <script src="bootstrap/js/bootstrap.bundle.min.js"> </script>
    <script>
      $(document).ready(function(){
        $('.show').click(function(){
          if($(this).is(':checked')){
            $('.passwd').attr('type','text');
          }else{
            $('.passwd').attr('type','password');
          }
        })

      })
    </script>
</body>
</html>