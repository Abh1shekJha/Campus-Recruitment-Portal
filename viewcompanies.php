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
            
            <h3>Recruiter List</h3>
            
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
                        
                        
                        
                          
                           
                            <div alt="title" style=" background-color:aliceblue; padding: 1%;">
                                
                                
                                <table alt="table-list" style="width:100%;">
                                    <tr style="background-color:black; color:#fff; padding:2%;">
                                    <th>Uid</th>
                                    <th>Company Name</th>
                                    <th>Company Location</th>
                                    <th>HR Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    
                                    </tr>
                                    
                                <?php
                                include "dbConn.php";
                                $sql = "SELECT * FROM recruiter_info;";
                                $result = mysqli_query($conn,$sql);
                                while($rws = mysqli_fetch_array($result)){
                                ?>
                                    
                                    <tr>
                                        <td><?php echo $rws[0];?></td>
                                        <td><?php echo $rws[1];?></td>
                                        <td><?php echo $rws[2];?></td>
                                        <td><?php echo $rws[3];?></td>
                                        <td><?php echo $rws[5];?></td>
                                        <td><?php echo $rws[6];?></td>
                                        
                                    </tr>
                                
                                
                                
                            
                            <?php 
                            }
                            ?>
                                    </table>
                                </div>                    
                        
                    <!--/div-->
                    </div>
                </div>
            </div>
        </section>
    
    
        <?php
            include "bottom.php";
        ?>