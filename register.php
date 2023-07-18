<?php
// session_start();
include("partials/header.php");
include("partials/state.php");
require_once("classes/Engineer.php");
?>
<head>
 <title>form field</title>
</head>


  <!-- content/body starts here -->
   <div style="background:rgba(225, 222, 222, 0.239); padding:20px ">

                <?php
                     if(isset($_SESSION["form"])){
                   ?>
                   <div class="alert alert-danger alert-dismissible fade show col-11 col-md-12 text-center" role="alert">
                         <?php echo $_SESSION['form'] ?>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                    
                  <?php 
                      unset ($_SESSION["form"]);
                     }
                ?>


                <?php
                  if(isset($_SESSION["success_form"])){
                   ?>
                   <div class="alert alert-success alert-dismissible fade show col-11 col-md-12 text-center" role="alert">
                         <?php echo $_SESSION['success_form'] ?>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                    
                  <?php 
                      unset ($_SESSION["success_form"]);
                     }
                 ?>
                 
    
    
    <div class="row my-2 px-4">
        <div class="col-12 col-md-5 gx-5 py-3" style="background:rgba(225, 222, 222, 0.739)">

            <h4 class="my-5 text-center text-secondary">
                GRAVITY SOLUTION
            </h4>
            <!-- <a class="navbar-brand" href="#"><img src="asset/logo.png" alt="logo"></a> -->
              

              <div class="card my-5  log" id="login" name='reg'>
                    <div class="card-body ">
                    
                      <h5 class="card-title text-center"> LOGIN</h5>
                     
                      <p class="card-text text-center text-muted"> access your account </p>   
                    
                    </div>
              </div>

                  <div class="card my-5 log" id="register" name='reg'>
                    <div class="card-body">
                      <h5 class="card-title text-center">REGISTER AS AN ENGINEER</h5>
                      
                      <p class="card-text text-center text-muted">join the largest community of vibrant engineers </p>
                     
                    </div>
                  </div>

        </div>
        

        <div class="col-12 col-md-7 py-4 px-5" style="background:rgba(201, 218, 243, 0.839)"> 


            <div class="row .div" id="clientform">
                
                <div class="col">

                



                        <h3 class="text-center my-2"> LOGIN </h3>

                        <form action="process/loginprocess.php" method="post" id="client">
                           
                            
                            <div class="my-2"> <label for="user" required> EMAIL:</label>  <input type="text" id="user" name="logemail" placeholder="johnDoe@gmail.com" class="form-control my-1"></div>
                           
                          <div class="my-2"> <label for="pass"> PASSWORD</label>  <input type="password"  name="password" placeholder="********" class="form-control my-1 passwd"> 
                            <span><input type="checkbox" class="show" value="show"> &nbsp;  show password</span>
                          </div>	
                          <?php
                              if(isset($_SESSION["sum_form_error"])){
                                ?>

                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                     <?php echo $_SESSION['sum_form_error'] ?>
                                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                      </div>

                              <?php 
                                  unset ($_SESSION["sum_form_error"]);
                              }
                          ?>

                          <br>                   
                          <button type="submit" class="btn btn-primary col-12" name="login"> LOGIN </button>
                          
                         <br><div class="text-center text-muted my-3"> <span > OR </span>
                          <button type="reset" class="btn btn-primary-outline bg-muted col-12 border border-primary"> <span><i class="fa-brands fa-google-plus-g fa-flip" style="color: #ff0000;"></i> &nbsp; Continue with Gmail </span> </button> </div>

                        </form>

                </div> 
            </div>

            <div class="row" id="engrform">
               
                <div class="col">
                    <h3 class="text-center"> FORM FIELD</h3>

                    <form action="process/regprocess.php" method="post" id="engr">
                    <span class="text-muted"> All fields with <span class="text-danger">* </span> are required</span>
                        <div class="my-1"> <label for="fname" required> FIRST NAME<span class="text-danger">* </span></label>  <input type=" text" id="fname" name="fname" placeholder="example: John" class="form-control my-1"></div>
                        <div class="my-2"> <label for="lname"> LAST NAME<span class="text-danger">* </span></label>  <input type="text" name="lname" placeholder="example: Doe" class="form-control my-1"> </div>	
                       <div class="row my-2">
                         <div class=" col-8"> <label for="oname">OTHER NAME</label>  <input type="text" id="oname" name="oname" placeholder="Carl" class="form-control my-1"> </div>
                         <div class="col-4">
                                    <div class="my-2"> 
                                    <label for="state">STATE <span class="text-danger">* </span></label>  
                                    <select class="form-control drop-down" name="state">
                                        <option  value=""> -- SELECT --</option>
                                        <?php
                                        foreach($state as $key => $value){
                                        echo "<option value='$key'> $value </option>";
                                        }
                                        ?>
                                                                                            
                                    </select>
                                </div>
                        </div>
                        	
                        <div class="row">
                                <div class="col-4 col-md-2">
                                    <div class="my-2"> 
                                        <label for="gender">GENDER <span class="text-danger">* </span></label>  
                                    <br> <span><input type="radio" name="gender" value="male">  &nbsp; male</span> 
                                    <br> <span><input type="radio" name="gender" value="female">  &nbsp;female</span>
                                        
                                    </div>	
                                </div>

                                <div class="col-6 col-md-5">
                                    <div class="my-2"> 
                                    <label for="pass">YEARS OF EXPERIENCE <span class="text-danger">* </span></label>  
                                    <select class="form-control drop-down" name="yoe">
                                        <option  value=""> -- SELECT --</option>
                                        <option  value="0-2"> 0 - 2 </option>
                                        <option  value="3-5">  3 - 5</option>
                                        <option  value="6-8"> 6 - 8</option>
                                        <option  value="8-10"> 8 - 10</option>
                                        <option  value="10>"> ABOVE 10 </option>                                                        
                                    </select>
                                </div>
                                </div>

                                <div class="col-12 col-lg-5">
                                  <div class="my-2"> 
                                      <label for="dob"> DATE OF BIRTH<span class="text-danger">* </span></label>  
                                      <input type="date" name="dob" id="dob" class="form-control my-1"> 
                                  </div>	
                              </div>
                                
                        </div>
                        
                        <div class="my-2"> <label for="email">EMAIL<span class="text-danger">* </span></label>  <input type="email" id="email" name="email"  placeholder="example: johnDoe@gmail.com" class="form-control my-1"> </div>
                       
                        <div class="my-2"> <label for="pass"> PASSWORD<span class="text-danger">* </span></label>  <input type="password" name="pass" placeholder="********" class="form-control my-1 passwd"> </div>	
                        <span><input type="checkbox" class="show" value="show"> &nbsp;show password</span>

                        <div class="my-2"> <label for="cpass"> CONFIRM PASSWORD<span class="text-danger">*</span></label>  <input type="password" na id="cpass" name="confirmpass" placeholder="********" class="form-control my-1"> </div>
                        <div class="my-2"> <label for="phone">PHONE NUMBER<span class="text-danger">*</span></label>  <input type="text" name="phone" id="phone" placeholder="+234*********" class="form-control my-1"> </div>
                        <br>                   
                        <button class="btn btn-primary col-12" name="reg"> REGISTER </button>
                      </form>
                
                
                </div>
            </div>
        

        </div>
    </div>



    </div>

                                      </div>
    <script src="bootstrap/js/bootstrap.bundle.min.js"> </script>
    <script src='jquery.min.js'></script>
    <script>

      
      $(document).ready(function(){

        $("#engrform").hide()

        $('#login').hover(function(){
              $(this).addClass("bon");
            },function(){
              $(this).removeClass("bon");
            });

       $('#register').hover(function(){
              $(this).addClass("bon");
            },function(){
              $(this).removeClass("bon");
            });

        $('#login').click(function(){
            $(this).addClass('bod')
            $('#register').removeClass('bod')
            $("#engrform").hide()
            $("#clientform").show(1000)
        })


        $('#register').click(function(){
            $(this).addClass('bod')
            $('#login').removeClass('bod')
            $("#clientform").hide()
             $("#engrform").show(1000)

        })

        $('.show').click(function(){
          if($(this).is(':checked')){
            $('.passwd').attr('type','text');
          }else{
            $('.passwd').attr('type','password');
          }
        })





      })
    
    
     </script> 

<?php  include_once("partials/footer.php") ?>
  

    