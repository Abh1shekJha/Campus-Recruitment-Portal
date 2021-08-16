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
            
            <h3>Dashboard</h3>
            
            <div id="dashrow" class="row">
                <div id="user-details" class="col-md-2">
                    <div id="infoPanel">
                        <h5 class="userN">Welcome Admin!</h5>
                        
                        <a id="logout" href="#logout"><h5 class="logout">Logout</h5></a>
                    </div>
                    
                    
                     
                    <?php
                        include "notificationpanel.php";
                    ?>
                    
                </div>
                <div id="options" class="col-md-10">
                    
                    <div id="optionPanel">
                        <a href="postevent.php"><div class="optionEle">
                            Post an Event
                        </div></a>
                        <a href="viewvacancies.php"><div class="optionEle">
                            View Vacancies
                        </div></a>
                        <a href="viewcandidates.php"><div class="optionEle">
                            View List of Candidates Registered
                        </div></a>
                        <a href="viewcompanies.php"><div class="optionEle">
                            View List of Companies Registered
                        </div></a>
                        <a href=""><div class="optionEle">
                            Manage Portal
                        </div></a>
                        
                        
                    </div>
                    
                </div>
            </div>
        </section>
    
    
        <?php
            include "bottom.php";
        ?>