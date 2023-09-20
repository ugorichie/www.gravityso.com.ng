<?php require_once("partials/header.php"); ?>
<?php  require_once("partials/state.php")?>

<head>
    <title> gravity solution </title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href='fontawesome/css/all.min.css' rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

    <div class="row" id="search">
                <?php
                     if(isset($_SESSION["sum_form_error"])){
                   ?>
                   <div class="alert alert-danger alert-dismissible fade show col-11 col-md-7" role="alert">
                         <?php echo $_SESSION['sum_form_error'] ?>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                    
                <?php 
                      unset ($_SESSION["sum_form_error"]);
                     }
                 ?>

        


        <form action="process/searchengineer.php" method="post" class="col-11 col-md-6 d-flex" > 
                <select class="form-control" name="state">
                    <option value=""> --SELECT A STATE-- </option>
                    <?php foreach($state as $key => $value){ ?>
                        <option value="<?php echo $key ?>"> <?php echo $value?></option>

                    <?php } ?>
                    
                </select>

                <button type="submit" name="butn" class="btn btn-outline-primary m-2"> SEARCH </button>
        </form>

        
    </div>
<!-- <div class="row">  -->

    <div class="row my-4">
            <div class="col-12 text-center text-muted"> <h3> SUCCESSFULLY NAVIGATE THROUGH OUR WEBSITE AS A CLIENT WITH THESE FEW STEPS </h3> </div>
    </div>
    <div class="row"> 
                <div class="col-12 col-md-6 row">
                    <div class="col-2"> <h1 class="bignum text-center pt-3"> 1 </h1> </div>
                        <div class="col-9 col-md-6">
                            <h5> FILTER </h5>
                            <p> To access our  qualified list of engineers, you need to specify a location/state. <br> It could be either the location of your (building) project or you wish to view the engineers in a particuler state. This is done using the search button above </p>
                        </div>
                        <div class="col d-none d-md-table-cell col-md-4 pt-2 ic1" style="border-radius: 100%" >
                            <lord-icon
                            src="https://cdn.lordicon.com/zniqnylq.json"
                            trigger="hover"
                            colors="primary:#66a1ee,secondary:#1b1091"
                            stroke="90"
                            style="width:120px;height:120px">
                            </lord-icon>
                        
                        </div>

                </div>

                <div class="col-12 col-md-6 row"> 
                    <div class="col-2"> <h1 class="bignum text-center pt-3"> 2 </h1>  </div>
                    <div class="col-9 col-md-6"> <h5> BROWSE THROUGH</h5>
                        <p> Take a moment to browse throught the filtered results of list of engineers registered in your selected locaion/state, and find the perfect match for your project needs.</p>
                     </div>
                        <div class="col d-none d-md-table-cell col-md-4 pt-2 ic1" style="border-radius: 100%" >
                                <lord-icon
                                src="https://cdn.lordicon.com/lbsajkny.json"
                                trigger="hover"
                                colors="primary:#66a1ee,secondary:#2516c7"
                                stroke="90"
                                style="width:120px;height:120px">
                            </lord-icon>
                        </div>
                    </div>
            </div>



    <div class="row"> 
            <div class="col-12 col-md-6 row "> 
                    <div class="col-2"> <h1 class="bignum text-center pt-3"> 3 </h1>  </div>
                    <div class="col-9 col-md-6"> <h5> PROFILING </h5>
                        <p> Once you have selected an engineer, you have an added feature to access their profile.
                            Herein you have access to their entire details including past works, bio-data, collborations, and a few more information.</p> </div>
                    <div class="col d-none d-md-table-cell col-md-4 pt-2 ic1"style="border-radius: 100%" >
                                <lord-icon
                                src="https://cdn.lordicon.com/gjyysfxi.json"
                                trigger="hover"
                                colors="primary:#66a1ee,secondary:#2516c7"
                                style="width:120px;height:120px">
                            </lord-icon>

                    
                    </div>
                </div>
                
                <div class="col-12 col-md-6 row"> 
                    <div class="col-2"> <h1 class="bignum text-center pt-3"> 4 </h1>  </div>
                    <div class="col-9 col-md-6"> <h5> MAKE CONTACTS </h5>
                        <p> Once you are certain on your choice of engineer, Make contacts with the engineer via any of the provided engineer contact information "email is best adviced".</p> </div>
                     <div class="col d-none d-md-table-cell col-md-4 pt-2 ic1"style="border-radius: 100%" >
                        <lord-icon
                            src="https://cdn.lordicon.com/sdhhsgeg.json"
                            trigger="hover"
                            colors="primary:#66a1ee,secondary:#2516c7"
                            stroke="90"
                            style="width:120px;height:120px">
                        </lord-icon>
                    </div>
                </div>
        </div>
   

        <div class="row"> 
                <div class="col-12 col-md-6 row ">
                    <div class="col-2"> <h1 class="bignum text-center pt-3"> 5 </h1> </div>
                        <div class="col-9 col-md-6">
                            <h5> APPOINTMENT </h5>
                            <p> Its of the norm that clients and engineers meet up to further discuss on their projects and how best to make it work, it is adviced that the meeting point should be a public place example; a bar, a cafe, a park. For security reasons</p>
                        </div>
                        <div class="col d-none d-md-table-cell col-md-4 pt-2 ic1" style="border-radius: 100%" >
                        <lord-icon
                            src="https://cdn.lordicon.com/mjmrmyzg.json"
                            trigger="hover"
                            colors="primary:#66a1ee,secondary: #2516c7"
                            stroke="90"
                            style="width:120px;height:120px">
                        </lord-icon>
                        </div>

                </div>

                <div class="col-12 col-md-6 row"> 
                    <div class="col-2"> <h1 class="bignum text-center pt-3"> 6 </h1>  </div>
                    <div class="col-9 col-md-6"> <h5> FEEDBACK</h5>
                        <p>We value your feedback and would greatly appreciate it if you could take a moment to share your comments and rate your experience with the engineer after your projrct is completed or after you have met with them  </p>
                     </div>
                        <div class="col d-none d-md-table-cell col-md-4 pt-2 ic1" style="border-radius: 100%" >
                                <lord-icon
                                src="https://cdn.lordicon.com/whttoese.json"
                                trigger="hover"
                                colors="primary:#66a1ee,secondary:#2516c7"
                                stroke="90"
                                style="width:120px;height:120px">
                            </lord-icon>
                        </div>
                    </div>
            </div>








<!-- </div> -->


</div>

<!-- <script src="bootstrap/js/bootstrap.bundle.js"> </script> -->
<script src="https://cdn.lordicon.com/bhenfmcm.js"></script>

<?php include("partials/footer.php") ?>

