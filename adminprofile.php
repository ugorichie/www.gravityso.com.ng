<?php

    require_once("partials/header.php");
    require_once("classes/Admin.php");
    $newAdmin = new Admin();
$admin = $newAdmin-> getEngr();
?>
 <head>
    <title> admin portal </title>
    <style>
        .adscroll{
            height: 500px;
            overflow: auto;
        }
    </style>
</head>

<div class="row MY-2" >
        <div class="col" >
            <h1 class="text-muted text-center"> 
                ADMIN PORTAL
            </h1>
        </div>
</div>

<div class="row">
    <div class="col">
        <h3> LIST OF SUCCESSFULLY REGISTERED ENGINEERS</h3>

        <div class="row adscroll mx-3 mb-5">    
                    <div class="card-body" style="min-height:200px">
                        <table class="table table-striped table-hover ">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">DETAILS</th>  
                        <th scope="col">VIEW</th>
                        <th scope="col">DELETE</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            $inc = 1;
                            foreach( $admin as $eng){
                        ?>
                            <tr>
                        <th scope="row"><?php echo $inc++?></th>
                        <td>
                            <p class="text-primary"> <?php echo $eng["engineer_firstname"]." ".$eng["engineer_lastname"] ?> </p>
                            <span> <?php echo $eng["engineer_email"] ?></span>
                            <span class="d-block text-muted"> <?php echo $eng["engineer_YOE"]. " years of experience" ?></span>
                        </td>     
                        <td> <a href="dashboard.php?id=<?php echo $eng['engineer_id'];?>" class="btn btn-info btn-lg"> VIEW MORE DETAILS</a> </td>
                        <td> <form action="process/adminprocess.php" method="post"> <input type="hidden" name="en_id" value="<?php echo $eng["engineer_id"]?>"> <button class="btn btn-danger btn-lg " name="delprofile"> DELETE PROFILE</button> </form></td>
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



















<?php
    require_once("partials/footer.php");