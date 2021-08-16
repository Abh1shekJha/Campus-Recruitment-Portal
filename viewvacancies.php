<!DOCTYPE html>
<html>   
    
    <head>
        <title>Campus Recruitment System - </title>
    
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" href="img/">
    <!-- google fonts -->
    
        
    <!-- bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.css">
    <!-- style css-->
    <link rel="stylesheet" href="css/style.css">  
        
    </head>

    
    <body id="dashboard">

    
        <?php
            include "nav.php";
        ?>
        
          
        
        <section id="dashboard-area">
            
            <h3>Vacancies</h3>
            
            <div id="dashrow" class="row">
                <div id="user-details" class="col-md-2">
                    <div id="infoPanel">
                        <h5 class="userN">Welcome Admin!</h5>
                        
                        <a id="logout" href="admindashboard.php"><h5 class="logout">Dashboard Home</h5></a>
                        
                        <a id="logout" href="#logout"><h5 class="logout">Logout</h5></a>
                        
                        
                    </div>
                    
                    
                     
                    <?php
                        include "notificationpanel.php";
                    ?>
                    
                </div>
                <div id="options" class="col-md-10" style="height:100%;">
                    
                    <!--div id="optionPanel"-->
                        <div class="job-box" style="background-color: skyblue; padding:1%; margin: 1%;">
                        <?php
                            include "dbConn.php";
                            $sql = "SELECT * FROM vacancies ORDER BY v_date;";
                            $result = mysqli_query($conn,$sql);
                            while($rws = mysqli_fetch_array($result)){
                            ?>
                        
                        
                           
                           
                            <div alt="title" style=" background-color:aliceblue; padding: 1%;">
                                
                                
                                <h4 style=""><?php echo $rws[1]."\t";?> &nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp; <?php echo $rws[2];?> &nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp; Salary: <?php echo $rws[3];?>  &nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp; Advertisement id: <?php echo $rws[0];?> </h4> 
                                
                                
                                
                                
                                <h6></h6>
                               </div><p id="jobdesc" style="background-color:lightyellow; font-size: 18px; padding: 2%;">
                                <?php echo $rws[4];?>
                                </p>
                            <h5></h5>
                            
                            <?php 
                            }
                            ?>
                             </div>                       
                        
                    <!--/div-->
                    
                </div>
            </div>
        </section>
    
    
        <?php
            include "bottom.php";
        ?>