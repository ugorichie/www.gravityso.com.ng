<?php
// $username = 'gravitysolution';
// $password = 'gravitysolution';

// // THIS IS FOR HTTP BASIC AUTHNETICATION THAT WAS LEARNT, WHEN TESTING ON POSTMAN,HEADER AUTHORIZATION SHOULD BE SET
// if (!isset($_SERVER['PHP_AUTH_USER'])){
//   header('WWW-Authenticate: Basic realm= "Parcel-Tracker"');
//   header('HTTP/1.0 401 UNAUTHORIZED');
//   echo ("you need to set a password and ussername");
//   exit;
// }
// if(($_SERVER['PHP_AUTH_USER'] !== $username) || ($_SERVER['PHP_AUTH_PW'] !== $password )){
//   header('HTTP/1.0 403 unauthorized ');
//   echo('username and password do not match');
//   exit;
// }

include("partials/header.php");
?>
<head>
  <title>Home</title>
</head>



       <!-- THE HEADER PICTURE  STARTS HERE -->
        <div class=" hero">
            <div class="row d-flex" id="overlay">
                <div class="col-d-none col-md-6"> <img> </div>
                <div class="col-12 col-md-6 shift"> 
                    <h3 id="txt1" class="text-white">Bridging The Gap Between <b style="color: rgb(78, 154, 255);">ENGINEERS</b> and <b style="color:rgb(78, 154, 255);">POTENTIAL CLIENTS</b></h3> 
                    <span class="text-white"> WE CONNECT POTENTIAL CLIENTS TO WELL-DESERVING ENGINEERS</span>

                    <br> <br><a href="register.php" class="btn btn-outline-secondary text-white align-center"> GET STARTED </a>
                    
                </div>
            </div>
        </div>

        



        <!-- THE JUMPER SECTION STARTS HERE -->

        <div class="row row-cols-d-none d-flex justify-content-center" id="jumpover">
            
            <div class="col-12 col-md-4 text-center" id="frjump"> 
                    <h5> As Engineers</h5>
                    <span class="text-muted"> Join a vibrant community of accredited engineers.<br> Register with us as. Get clients with ease. </span> <br> <br>
                    <a href="register.php" class="btn btn-outline-secondary btn-sm"> continue as engineer </a>


            </div>
            <div class="col-12 col-md-4 text-center" id="scjump">  
                <h5>  As Clients </h5>
                <span class="text-muted"> Explore variety of accredited engineers across the country.<br> Make your dream building come to pass seamlessly </span> <br> <br>
                <a href="client.php" class="btn btn-outline-secondary btn-sm"> continue as client </a>



            </div>
        </div>

        <!-- THE  JUMPER  ENDS HERE -->

        <div class="row  my-4 justify-content-center" >
            
            <div class="col-12 col-md-8 text-center" > 
                <h3> WELCOME.</h3>
                <p class="text-muted">
                  Gravity Solution, a web app, targeted at bridging the gap between qualified engineers and 
                  potential clients who have needs of building or structuring houses. <br>
                  
                  The aim of the web application is to reduce the incessant loss of lives,
                  properties, and money through structure and house collapse. 
                  Our survey carried out shows that (8 - 15) houses collapse every year in the country, and only about 10% of these damages are reported. 
                  These casualties are seen to be mostly due to the poor structure of the building which in turn traces down to the engineers involved, 
                  therefore the need to tackle this rising problem.
                  
                  A measure to cut undeserving, unqualified engineers off the system became a necessity,
                  hence the birth of Gravity Solution.
                </p>


            </div>
        </div>


        <!-- THE CAROUSEL SECTION  STARTS HERE -->

        <div class="row g-0 d-flex justify-content-center" >
            
            <div class="col-12 col-md-5" > 
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="asset/caro1.jpg" class="d-block w-100 img-fluid " alt="house image">
                        <div class="carousel-caption d-none d-md-block">
                            <a href="dashboard.php?id=15" class="btn btn-primary btn-sm"><b>VIEW ENGINEER DETAILS </b></a>
                          <h3>Roven Silver Hotel</h3>
                          <p>Roven Hotel located at Park Avenue Abuja spanning 4000sqkm.</p>
                          
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="asset/caro2.jpg" class="d-block w-100 img-fluid" alt="rehouse">
                        <div class="carousel-caption d-none d-md-block">
                        <a href="dashboard.php?id=17" class="btn btn-primary btn-sm"><b>VIEW ENGINEER DETAILS </b></a>
                          <h3>Chief James Homes</h3>
                          <p>Chief James Home in Lagos State stands tall at 600ft.</p>
                          
                        </div>
                      </div>
                      <div class="carousel-item py-0 px-0">
                        <img src="asset/caro4.jpg" class="d-block w-100 img-fluid" alt="house image">
                        <div class="carousel-caption d-none d-md-block">
                        <a href="dashboard.php?id=21" class="btn btn-primary btn-sm"><b>VIEW ENGINEER DETAILS </b></a>
                          <h3> Block Mason De Wing </h3>
                          <p>A french owned resturant located in Adamawa was my first contract.</p>
                         
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>


            </div>

            
            <div class="col-12 col-md-7 text-center sub" >  
                    <h4> Our Subsription Packages for Engineers</h4>
                    <span class="text-center  text-muted" id="faq"> Subscribing to our website and displaying your engineering portfolio can significantly enhance your professional visibility and attract potential clients. By following these simple steps  <code> <a href="#"> code is here </a></code> "creating an account, completing your profile, uploading your portfolio, and regularly updating it" - you can effectively showcase your skills and expertise to a wide audience. Embrace the opportunity to stand out in the competitive engineering landscape and unlock new professional opportunities. Start today and take your engineering career to new heights! </span>

            </div>
        </div>

        <!-- THE CAROUSEL SECTION  STARTS HERE -->



        <!-- THE F.A.Q / ACCORDION  STARTS HERE -->
            <div class="row">
            <div class="col-12"> 
              <h2 class="text-muted my-2 text-center" > F.A.Q.s </h2>
          </div>
          </div>
        <div class="row my-3 justify-content-center"> 

                    <div class="col-11"> 
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                  What is Gravity Solution known for?
                                    
                                </button>
                              </h2>
                              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                   Gravity Solution, a user friendly web app with an awesome graphic user interface (G.U.I) comes with easy features to allow our customers source for well deserving engineers to tackle and solve whatever problems they might have.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                  How do i source engineers?
                                </button>
                              </h2>
                              <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                  Quite an easy one. we curate the best well trained qualifies enigneers across the country. To access them, click &nbsp;<code><a href="client.php"> continue as a client</a> </code> and then input your location in the input provided to have access to engineers  in your viccinity. <br> Also, constant updates on engineering events happening around the country.
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                  Do i need to register as a client?
                                </button>
                              </h2>
                              <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                  Having to register as a client is not made available yet. regardless it doesnt  deprive you the access to our long list of qualified engineers.
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>

        </div>
            <!-- THE F.A.Q / ACCORDION  HAS ENDED -->




            <!-- THE EVENTS  STARTS HERE -->
            <div class="row">
            <div class="col-12"> 
              <h2 class="text-muted my-3 text-center"> ENGINEERING EVENTS </h2>
          </div>
          </div>
        <div class="row d-flex justify-content-evenly my-3" >

            <div class="col-10 col-md-2" > 
                <div class="card my-1" style="width: 14rem;">
                    <img src="asset/event1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                     <h5 class="card-title"> L/EARN INNITIATIVE</h5>
                     <p class="card-text">Catch them young, guiding newbies through the right path. &nbsp;<a href="#"> read more.</a></p>
                     <span class="text-muted"><?php $currentDate = new DateTime();
                                            $currentDate->modify('+3 months'); 
                                            $currentDate->format('Y-m-d');
                                            $formattedDate = $currentDate->format('jS \of F Y');
                                            echo 'Date: '. $formattedDate;// Output the date in yyyy-mm-dd format
                                            ?></span>      
                    </div>
                    </div>
            </div>

            <div class="col-10 col-md-2" > 
                <div class="card my-1" style="width: 14rem;">
                    <img src="asset/event2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                     <h5 class="card-title"> GROUND BREAKING</h5>
                     <p class="card-text">Annual on-site  review of some awesome projects and award day &nbsp;<a href="#"> read more.</a></p>
                     <span class="text-muted"> <?php $currentDate = new DateTime();
                                            $currentDate->modify('+5 months'); 
                                            $currentDate->format('Y-m-d');
                                            $formattedDate = $currentDate->format('jS \of F Y');
                                            echo  'Date: '.$formattedDate;// Output the date in yyyy-mm-dd format
                                            ?>.</span>       
                    </div>
                    </div>
            </div>



            <div class="col-10 col-md-2" > 
                 <div class="card my-1" style="width: 14rem;">
                <img src="asset/event3.jpg" class="card-img-top" alt="event_3">
                <div class="card-body">
                 <h5 class="card-title"> WOMEN IN CHARGE</h5>
                 <p class="card-text">A woman empowerment program for the female gender &nbsp;<a href="#"> read more. </a></p>  
                 <span class="text-muted"><?php $currentDate = new DateTime();
                                            $currentDate->modify('+3 months'); 
                                            $currentDate->modify('+7 days');
                                            $currentDate->format('Y-m-d');
                                            $formattedDate = $currentDate->format('jS \of F Y');
                                            echo'Date: '. $formattedDate;// Output the date in yyyy-mm-dd format
                                            ?></span>     
                </div>
                </div>
            </div>


            <div class="col-10 col-md-2 " >  
                <div class="card my-1" style="width: 14rem;">
                    <img src="asset/event4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                     <h5 class="card-title">YES WE CAN!</h5>
                     <p class="card-text">YES! Transitioning to the engineering world is very much possible  &nbsp;<a href="#"> read more. </a></p>       
                     <span class="text-muted"> Date: 19th January 2025.</span> 
                    </div>
                    </div>          
            </div>
        </div>

        <!-- THE EVENTS  SECTION ENDS HERE -->



    <!-- <script src="bootstrap/js/bootstrap.bundle.js"> </script> -->
   
    <?php require_once("partials/footer.php")?>
    
