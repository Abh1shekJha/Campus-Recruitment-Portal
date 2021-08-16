<?php
    if(isset($_SESSION['r_uid'])){
    
        header('Location:recruiterdashboard.php');
    }
?>

<!DOCTYPE html>
<html>   
    
    <head>
        <title>Recruiter Login | Campus Recruitment System - </title>
    
    
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
    
    
    <body id="comp">
    
        <?php
            include "nav.php";
        ?>
        
        
         
        <div id="CompCov" class=""></div>
        
        <div class="login-Form">
            
            <h3 class="optionEleHead">Company login</h3>
            
             <form method="post" action="clogchek.php">
                <table id="login-Table">
                    <tr>
                        <td><input name="uname" type="text"  placeholder="Username"></td>
                    </tr>
                    <tr>
                        <td><input type="password" name="pwd" placeholder="Password"></td>
                    </tr>
                    <tr>
                        <td>
                            <input class="btn btn-dark" type="submit" name="submit" value="Login">
                        </td>
                    </tr>
                </table>
            </form>    
            
        </div>
    
    
    <?php
        include "bottom.php";
    ?>