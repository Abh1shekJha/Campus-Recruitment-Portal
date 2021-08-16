<!DOCTYPE html>
<html>   
    
    <head>
        <title>Recruiter Registration | Campus Recruitment System - </title>
    
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" href="img/">
    <!-- google fonts -->
    
        
    <!-- materialize -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.css">
    <!-- style css-->
    <link rel="stylesheet" href="css/style.css">  
        
    </head>
    
    
    <body id="RF">
    
    <?php
        include "nav.php";
    ?>
    
    
        <!-- Registration Form -->
        <section id="event-form">
            <div class="container" style="background-color:gray; padding:5%;">
                        
                <div id="EF-outer" class="row">
                    <div class="col-md-12">
                        <h3 style="background-color: powderblue; padding: 2%; border-radius:3%;">Post an Event</h3>    
                    </div>
                    
                    <div class="col-md-12">
                       <form method="post" action="eventlog.php">
                                           
                                            
                                                <input type="text" name="Evname" placeholder="Event Title" style="padding:2%; width:100%;">                                                                                      
                           <textarea name="Evdesc" style="width:100%; height:300px; color:gray;" placeholder="">    Event Description</textarea>
                                                 
                                                
                                                    <span>Date: </span><input type="date" name="Evdate" placeholder="Event Date">
                                                                              
                                                                                               
                                                        
                                                    <input type="submit" name="submit" value="Submit">
                                                
                                            
                                        </form>
                                    </div>
                    </div>
                </div>
            
        </section>
        
        
        <?php
            include "bottom.php";
        ?>