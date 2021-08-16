

<!DOCTYPE html>
<html>   
    <?php
    include('header.php');
    ?>
    <head>
        <title> User Registration | Campus Recruitment System - </title>
    
    
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
                        <h3>Candidate Registration</h3>    
                    </div>
                    
                    <div class="col-md-12">
                       <form method="post" action="sregprocess.php">
                                           
                                            <table id="RegF">
                                               <tr>
                                                <td><input type="text" name="fname" placeholder="First Name"></td>
                                                <td><input type="text" name="lname" placeholder="Last Name"></td>
                                                </tr>
                                                 <tr>
                                                <td>                                <label for="branch">Branch: </label>

                                                <select name="branch" id="branch">
                                                
                                                  <option value="CSE">CSE</option>
                                                  <option value="ECE">ECE</option>
                                                  <option value="EEE">EEE</option>
                                                  <option value="ME">ME</option>
                                                  <option value="CE">CE</option>
                                                </select></td>
                                                <td><input type="text" name="erlno" placeholder="Enrollment No."></td>
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
                                                <td>Gender </td>
                                                <td><input type="radio" name="gender" value="M" alt="male"> Male
                                                    <input type="radio" name="gender" value="F" alt="female"> Female</td>                                                
                                                </tr>
                                                <tr>
                                                <td>Date of birth </td>
                                                <td><input type="date"  name="dob"></td>                                                
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