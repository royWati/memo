<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from byrushan.com/projects/super-admin/app/2.0/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Dec 2017 17:42:46 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendor styles -->
        <link rel="stylesheet" href="../vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="../vendors/bower_components/animate.css/animate.min.css">
    <link rel="stylesheet" href="../vendors/bower_components/select2/dist/css/select2.min.css">

        <!-- App styles -->
        <link rel="stylesheet" href="../css/app.min.css">
    </head>

    <body data-sa-theme="1">
        <div class="login">

            <!-- Login -->
            <div class="login__block active" id="l-login">
                <h id="title">E-Memo</h>
                <div class="login__block__header">
                    <i class="zmdi zmdi-account-circle"></i>
                    Create an account

                    <div class="actions actions--inverse login__block__actions">
                        <div class="dropdown">
                            <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-register" href="#">Create an account</a>
                                <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-forget-password" href="#">Forgot password?</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="login__block__body">
                    <form action="register.php" method="post">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control text-center" placeholder="Username">
                    </div>
                    <div class="form-group">  
                        <select name="department"class="select2">
                                <option value="null">-select-</option>
                                <option value="ict">ICT department</option>
                                <option value="procurement">Procurement department</option>
                                <option value="transport">Transport department</option>
                                <option value="sports">Sports department</option>
                            </select>

                    </div>

                    <div class="form-group">
                        <input type="password" name="password" class="form-control text-center" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="password" name-="confirmpass" class="form-control text-center" placeholder="Confirm Password">
                    </div>

                    <input type="submit" name="submit" class="btn btn--icon login__block__btn" value="+"/>
                        </form>
                    
<?php
include_once 'config.php';
include_once 'user.php';
//create an instance of DB_con class, an object
$con= new DB_connect();
//insert data
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $department=$_POST['department'];
    $password=$_POST['password'];
    $confirmpass='hey';
    
    //checking if passwords match
    if($password==$confirmpass){
        
        //making sure info is saved 
        if($con->insertAdmin($mysqli,$username,$department,$password)== true){
            
               $con->set_sign($mysqli);
        }
        
    }
    else{
        echo"please make sure you match the passwords, try again!!";
    }
}

    

?>
                    
                </div>
            </div>

            </div>

        <!-- Older IE warning message -->
            <!--[if IE]>
                <div class="ie-warning">
                    <h1>Warning!!</h1>
                    <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>

                    <div class="ie-warning__downloads">
                        <a href="http://www.google.com/chrome">
                            <img src="img/browsers/chrome.png" alt="">
                        </a>

                        <a href="https://www.mozilla.org/en-US/firefox/new">
                            <img src="img/browsers/firefox.png" alt="">
                        </a>

                        <a href="http://www.opera.com">
                            <img src="img/browsers/opera.png" alt="">
                        </a>

                        <a href="https://support.apple.com/downloads/safari">
                            <img src="img/browsers/safari.png" alt="">
                        </a>

                        <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
                            <img src="img/browsers/edge.png" alt="">
                        </a>

                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="img/browsers/ie.png" alt="">
                        </a>
                    </div>
                    <p>Sorry for the inconvenience!</p>
                </div>
            <![endif]-->

        <!-- Javascript -->
        <!-- Vendors -->
        <script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="../vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
        <script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="../vendors/bower_components/select2/dist/js/select2.full.min.js"></script>

        <!-- App functions and actions -->
        <script src="../js/app.min.js"></script>
    </body>

<!-- Mirrored from byrushan.com/projects/super-admin/app/2.0/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Dec 2017 17:42:46 GMT -->
</html>