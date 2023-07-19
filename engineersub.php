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
    <title> subscription </title>
</head>

<div class="row" id="body">

        <?php require_once("partials/sidebar.php") ?>
        <!-- <div class="row" class="sidebar"> 
                <div id="side1"> </div>

                <div class="side2"> <p><a href="engineerdashboard.php" class="text-white"> <i class="fa-solid fa-house side4"></i> &nbsp; &nbsp; HOME PROFILE </a> </p> </div>

                <div class="side2"> <p> <a href="editprofile.php" class="text-white"><i class="fa-solid fa-user side4"></i>&nbsp; &nbsp; EDIT PROFILE</a> </p></div>
                

                <div class="side2"> <p> <a href="#" class="text-white"><i class="fa-solid fa-credit-card side4"></i>&nbsp;SUBSCRIPTION</a> </p> </div>

                <div class="side2 "> <p> <a href="#" class="text-white"> <i class="fa-solid fa-calendar-day side4"></i> &nbsp; &nbsp;  POST EVENTS</a> </p> </div>

                
                <div class="side2 "> <p> <a href="changepassword.php" class="text-white"> <i class="fa-solid fa-calendar-day side4"></i> &nbsp; &nbsp;  CHANGE PASSWORD</a> </p> </div>

                <div class="side2 ">
                     <form action="process/logoutprocess.php" method="post">
                     <i class="fa-solid fa-right-from-bracket side4  text-danger"></i> &nbsp; &nbsp; <button type="submit" name="logout" class="btn btn-outline text-danger">LOG OUT </button>
                     </form>
                </div>
         </div>
       </div> -->

    <div class="col-12 col-md-10">
    <h2 class="text-center text-muted mt-3"> SUBSCRIPTION  </h2>
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


                   <form action="process/subprocess.php" method="post" id="paymentForm" >

                   <?php
                              if(isset($_SESSION["sum"])){
                                ?>

                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                     <?php echo $_SESSION['sum'] ?>
                                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                      </div>

                              <?php 
                                  unset ($_SESSION["sum"]);
                              }
                          ?>

                    <div class="my-2"> <label for="email"> EMAIL <span class="text-danger"> * </span></label>  <input type="email" name="email" class="form-control my-1" id="email-address"> </div>
                                    
                   <div class="my-2"> <label for="amount"> AMOUNT <span class="text-danger"> * </span></label>  <input type="number" name="amount" class="form-control my-1" id="amount"> </div>
 
                   <div class="my-2 col-6"> <label for="date"> SUBSCRIPTION DATE <span class="text-danger"> * </span></label>  <input type="date" name="subdate" class="form-control my-1"> </div>
                      

                       
                       <br>     
                       <div class="d-flex justify-content-between">              
                            <button class="btn btn-primary col-3" type="submit" name="sub" onclick="payWithPaystack()"> SUBSCRIBE </button>
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
      <br/> <span class="text-danger"> NOTE:</span> ALL CURRENT DATA WILL BE LOST
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal"> NO </button>
        <a  href="engineerdashboard.php" type="button" class="btn btn-primary btn-lg"> YES </a>
      </div>
    </div>
  </div>
</div>

<script src="bootstrap/js/bootstrap.bundle.min.js"> </script>
<script src="https://js.paystack.co/v1/inline.js"></script>
<script> 

                var paymentForm = document.getElementById('paymentForm');

                paymentForm.addEventListener('submit', payWithPaystack, false);

                function payWithPaystack(e) {
                        e.preventDefault();
                var handler = PaystackPop.setup({

                    key: 'pk_test_5c7a89b6ba213e8358ed171e1a7ff553e9edd1d9', // Replace with your public key

                    email: document.getElementById('email-address').value,

                    amount: document.getElementById('amount').value * 100, // the amount value is multiplied by 100 to convert to the lowest currency unit

                    currency: 'NGN', // Use GHS for Ghana Cedis or USD for US Dollars

                    ref: '<?php echo time();?>', // Replace with a reference you generated

                    callback: function(response) {

                    //this happens after the payment is completed successfully

                    var reference = response.reference;

                    alert('Payment complete! Reference: ' + reference);

                    // Make an AJAX call to your server with the reference to verify the transaction

                    },

                    onClose: function() {

                    alert('Transaction was not completed, window closed.');

                    },

                });

                handler.openIframe();

                }


</script>
</body>
</html>