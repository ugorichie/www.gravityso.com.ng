<?php
include("partials/header.php");
require_once("classes/Engineer.php");

if(isset($_GET["id"])){
    $en_id = $_GET["id"];
    $engr = new Engineer;
    $engr = $engr->getEngineerDetails($en_id);

 require_once("classes/Work.php");
$nwork = new Work();
$work = $nwork -> getWork($en_id);

require_once("classes/comment.php");
$newComment = new Comment();
$com =$newComment -> getComment($en_id);

require_once("classes/collab.php");
$collabs = new Collab;
$collab = $collabs -> getcollab($en_id);
    
}
// echo "<pre>";
// print_r ($collab);
// echo "</pre>";

 ?>


<head>
    <title>Engineer details</title>
</head>

            <!-- THE NAVIGATION  ENDS HERE -->


        <div class="row mt-3 px-5">
                <div class="col-11 col-md-3 my-1">  
                    <img src="upload/<?php echo $engr['engineer_image']?>" class="img-fluid my-4">
                </div>
                <div class="col-md-1"> </div>
                
                <div class="col-11 col-md-8 grad"> 

                        <div class="row">  
                                <div class="col-8"> 
                                    <h2 class="d-inline"><?php echo $engr["engineer_lastname"]. " ".$engr["engineer_firstname"] ?></h2> &nbsp;<span class="text-muted"> <i class="fn fa-solid fa-location-dot"></i> <?php echo $engr["state"]?>, Nigeria. </span>
                                    <p class="text-primary"> <b> structural and bulding <?php echo $engr["role"]?></b> </p>
                                </div>

                                <div class="col-4"> 
                                    <span class="text-muted mt-3"> <b><i class="fa-regular fa-handshake"></i> CERTIFIED. </b> </span>
                                 </div>

                         </div>

                        <div class="row d-flex flex-column">  
                            <div class="col-8"> 
                                <span class="text-muted d-block"> RATING. </span>
                                <h2 class="d-inline"> 4.0 </h2> &nbsp; <span class="txt"> <i class="fa-solid fa-star ic"></i> <i class="fa-solid fa-star ic"></i> <i class="fa-solid fa-star ic"></i> <i class="fa-solid fa-star ic"></i> </i><i class="fa-regular fa-star"></i></span>
                            </div>

                        <div class="col-12 my-3"> 
                       
                             <span class="it"><a href="#" data-bs-target="#terms" data-bs-toggle="modal" data-bs-whatever="@mdo"> <b> <i class="fa-solid fa-envelope"></i>&nbsp; E-Mail </b> </a></span> &nbsp;&nbsp; &nbsp; &nbsp;  &nbsp;
                            <span class="it"><a href="#"> <b> <i class="fa-solid fa-fax"></i>&nbsp; FAX </b> </a> </span>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
                            <span class="it"> <a href="#"> <b> <i class=" fa-solid fa-envelope"></i>&nbsp; RESUME</b> </a> </span>
                        </div>

                        <div class="col-12 my-2"> 
                                <span id="work"> <a class="it"href="#dot"> <i class="fa-solid fa-business-time"></i> &nbsp; My Works </a></span> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
                                 <span id="about"> <a class="it"href="#dot"><i class="fa-solid fa-user "></i> &nbsp; About </a></span>
                         </div>

                        </div>


                </div>
        </div>

        <div class="row px-5" >

            <div class="col-11 col-md-3">  
                 <p class="text-center d-inline"> COLLABORATIONS </p>
                 <hr>
                    <div class="row d-flex flex-column"> 

                         <div class="col-12">
                                    <?php
                                        foreach ($collab as $col){
                                    ?>

                                  <div class="row"> 
                                     <div class="col-12 my-3"> <h5 class="d-inline"> <?php echo $col['collab_title']?></h5>  &nbsp;<span class="collab my-2 mx-4"> <?php echo $col['collab_role']?> </span>
                                        <span class="text-muted d-block"><?php echo $col['collab_address']?></span> 
                                    </div>
                        
                                </div>

                                <?php
                                    }
                                ?>
            
                                <!--<div class="row"> 
                                    <div class="col-12 my-3"> <h5 class="d-inline"> FRACAZ MORRE CINEMA</h5> &nbsp; <span class="collab my-2 mx-4"> Structure Worker </span>
                                        <span class="text-muted d-block">33 Beast Reels Avenue <br> Borah Central District <br> Bauchi Nigeria. </span> 
                                    </div>
                                 </div> -->
                             
                            </div>
                            

                            <div class="col-12 mt-3"> 
                                    <h4> LEAVE A COMMENT BELOW</h4>
                                    

                                    <form action="process/commentprocess.php" method="post">
                                        <div> 
                                        <input type="hidden" value="<?php echo $engr['engineer_id']?>" name="engineer_id">
                                            <label for="email"> EMAIL: </label>
                                            <input type="email" name="email" id="email"class="form-control my-1" placeholder="joe@gamil.com">
                                            
                                        </div>
                                        <div>
                                            <label for="comment"> COMMENT </label>
                                        <textarea  name="comment" class="form-control my-1 " rows="5" placeholder="comment here" id="comment"></textarea>
                                        </div>
                                        <select name="rating" id="" class="form-control dropdown my-1">
                                            <option value="">ratings</option>
                                            <option value="5">5 star</option>
                                            <option value="4">4 star</option>
                                            <option value="3">3 star</option>
                                            <option value="2">2 star</option>
                                            <option value="1">1 star</option>
                                        </select>
                                        <button name="submit" type="submit" class="btn btn-primary my-2">SUBMIT COMMENT</button>
                                    </form>
                            </div>
                    </div>

            </div>
            
            <div class="col-md-1"> </div>

            <div class="col-12 col-md-8 grad2" id="dot">

                <div class="row d-flex flex-column"> 

                    <div class="col-12 py-3" id="aboutslide">

                        <p> ABOUT </p> 
                        
                        <div class="row row-cols-lg-auto g-5 ">
                            <div class="col-12"> 
                                <p class="ap"> Office Address: </p> 
                            </div>
                            <div class="col-12"> 
                               <p> Ethan Hills,  Heavens-Gate District, Lagos-Island, Lagos Nigeria.  </p>
                            </div>
                        </div>

                        <div class="row row-cols-lg-auto g-5">
                            <div class="col-12"> 
                                <p class="ap"> Phone: </p> 
                            </div>
                            <div class="col-12"> 
                               <p class="txt"> <?php echo $engr["engineer_phone"] ?> </p>
                            </div>
                        </div>


                        <div class="row row-cols-lg-auto g-5 ">
                            <div class="col-12"> 
                                <p class="ap"> Address: </p> 
                            </div>
                            <div class="col-12"> 
                               <p> S.26.E 62th Street,  Ogunsiji District, Allen Avenue, Ikeja, Lagos Nigeria.  </p>
                            </div>
                        </div>

                        <div class="row row-cols-lg-auto g-5 ">
                            <div class="col-12"> 
                                <p class="ap"> linkedin Profile: </p> 
                            </div>
                            <div class="col-12"> 
                               <p class="txt"> <a href="#"> www.linkedin.com/<?php echo $engr["engineer_firstname"] ?></a>  </p>
                            </div>

                        </div>

                        <div class="row row-cols-lg-auto g-5 ">
                            <div class="col-12"> 
                                <p class="ap"> facebook Profile: </p> 
                            </div>
                            <div class="col-12"> 
                               <p class="txt"> <a href="#"> www.facebook/<?php echo $engr["engineer_firstname"] ?> </a>  </p>
                            </div>
                         </div>

                        <div class="row row-cols-lg-auto g-5 ">
                            <div class="col-12"> 
                                <p class="ap"> Twitter Profile: </p> 
                            </div>
                            <div class="col-12"> 
                               <p class="txt"> <a href="#"> www.twitter/<?php echo $engr["engineer_firstname"] ?> </a>  </p>
                            </div>
                         </div>



                    </div>





                        <div class="col-12" id="workslide"> 
                            <p class="mx-5"> MY WORKS </p>
                                <div class="row row-cols-lg-auto d-flex justify-content-center flex-wrap my-2">

                                    <?php foreach($work as $work => $engr_work){?>

                                    <div class="col-9 col-md-3 my-1 mx-1"> 
                                        <div class="card" style="width: 14rem;">
                                            <img class="card-img-top" src="workupload/<?php echo $engr_work['work_image']?>" class="img-fluid" alt="Card image cap">
                                            <div class="card-body">
                                            <h5 class="card-title"> <?php echo $engr_work['work_title']?></h5>
                                            <p class="card-text"><?php echo $engr_work['work_description']?> <a href=""> read more.</a>.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <?php } ?>
                                    
                                </div>

                        </div>
                        
                    <div class="row scroll-container">    
                    <div class="card-body">
                        <table class="table table-striped table-hover ">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Email / Comments</th>  
                        <th scope="col">Ratings</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            $inc = 1;
                            foreach( $com as $comment){
                        ?>
                            <tr>
                        <th scope="row"><?php echo $inc++?></th>
                        <td>
                            <p class="text-primary"> <?php echo $comment["commenter_email"]   ?> </p>
                            <span> <?php echo $comment["comment_message"] ?></span>
                            <span class="d-block text-muted"> <?php echo $comment["comment_time"] ?></span>
                        </td>     
                        <td> <?php echo $comment["rating"]." <i class='fa-solid fa-star ic'></i> "?></td>
                        </tr>

                        <?php
                            }

                            ?>


                    </tbody>
                    </table>

                        </div>
                        
                    </div>
 

 
                 </div>



            </div>
                
        </div>

    </div>



    </div>





<div class="modal fade" id="terms" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="terms">Send Message to <?php echo $engr['engineer_lastname']." ".$engr['engineer_firstname']?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name" value="<?php echo $engr['engineer_email']?>">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Send message</button>
      </div>
    </div>
  </div>
</div>





<script src="bootstrap/js/bootstrap.bundle.js"> </script>
<script src='jquery.min.js'></script>

<script>
    $(document).ready(function(){

   
        $("#aboutslide").hide()


        $('#about').click(function(){
            $("#workslide").hide()
            $("#aboutslide").show(1000)
        })

        $('#work').click(function(){
            $("#aboutslide").hide()
            $("#workslide").show(1000)
        })

    })

</script>
<?php include("partials/footer.php")?>