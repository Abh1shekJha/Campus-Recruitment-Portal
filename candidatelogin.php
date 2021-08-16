<?php
    if(isset($SESSION['s_uid'])){
        header('Location:studentdashboard.html');
    }
?>
<!DOCTYPE html>
<html>   
    
    <head>
        <title>Candidate Login | Campus Recruitment System - </title>
    
    
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
    
    
    <body>
    
        <?php
            include "nav.php";
        ?>

        
        
          <div id="adminCov" class=""></div>
        
        <div class="login-Form">
            
            <h3 class="optionEleHead">Student login</h3>
            
                 <form method="post" action="slogchek.php">
                    <table id="login-Table">
                        <tr>
                            <td><input type="text" name="uname" placeholder="Username"></td>
                        </tr>
                        <tr>
                            <td><input type="password" name="pwd" placeholder="Password"></td>
                        </tr>
                        <tr>
                            <td>
                                <input class="btn btn-dark" type="submit" name="submit" value="Log in">
                            </td>
                        </tr>
                    </table>
                </form>
        </div>
    
    
    
    <?php
        include "bottom.php";
    ?>