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
        <section id="registration-form">
            <div class="container">
                        
                <div id="RF-outer" class="row">
                    <div class="col-md-12">
                        <h3>Company Registration</h3>    
                    </div>
                    
                    <div class="col-md-12">
                       <form method="post" action="cmpregis.php">
                                           
                                            <table id="RegF">
                                               <tr>
                                                <td><input type="text" name="Cname" placeholder="Company Name"></td>
                                                <td><input type="text" name="Location" placeholder="Location"></td>
                                                </tr>
                                                 <tr>
                                                <td>
                                                    <input type="text" name="HRName" placeholder="HR Name">
                                                </td>
                                                <td><input type="text" name="uname" placeholder="Username"></td>
                                                </tr>
                                                <tr>
                                                <td><input type="text" name="mobile" placeholder="Mobile"></td>
                                                <td><input type="email" name="email" placeholder="Email"></td>
                                                </tr>
                                                 <tr>
                                                <td><input type="password" name="pwd" placeholder="Password"></td>
                                                <td><input type="password" name="pwd1" placeholder="Confirm Password"></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="submit" name="submit" value="Sign Up"></td>
                                                </tr>
                                            </table>
                                        </form>
                                    </div>
                    </div>
                </div>
            
        </section>
        
        
        <?php
            include "bottom.php";
        ?>