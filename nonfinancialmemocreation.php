<?php
session_start();
if(!isset($_SESSION['karibu'])){
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from byrushan.com/projects/super-admin/app/2.0/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Dec 2017 17:29:20 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>E-Memo</title>

    <!-- Vendor styles -->
    <link rel="stylesheet" href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">
    <link rel="stylesheet" href="vendors/bower_components/dropzone/dist/dropzone.css">
    <link rel="stylesheet" href="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">
    <link rel="stylesheet" href="vendors/bower_components/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="vendors/bower_components/fullcalendar/dist/fullcalendar.min.css">
        <script src="vendors/bower_components/sweetalert2/dist/sweetalert2.min.js"></script>

    <!--  <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script> -->
     <script src="ckeditor/adapters/jquery.js"></script>
     <script src="ckeditor/ckeditor.js"></script>
 
    <!-- App styles -->
    <link rel="stylesheet" href="css/app.min.css">
</head>

<body data-sa-theme="1">
<main class="main">
    <div class="page-loader">
        <div class="page-loader__spinner">
            <svg viewBox="25 25 50 50">
                <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>

    <header class="header">
        <div class="navigation-trigger hidden-xl-up" data-sa-action="aside-open" data-sa-target=".sidebar">
            <i class="zmdi zmdi-menu"></i>
        </div>

        <div class="logo hidden-sm-down">
            <h1><a href="index.html">E-Memo</a></h1>
        </div>

        <form class="search">
            <div class="search__inner">
                <input type="text" class="search__text" placeholder="Search for people, files, documents...">
                <i id="mee" class="zmdi zmdi-search search__helper" data-sa-action="search-close"></i>
            </div>
        </form>

        <ul class="top-nav">
            <li class="hidden-xl-up"><a href="#" data-sa-action="search-open"><i class="zmdi zmdi-search"></i></a></li>

            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="top-nav__notify"><i id="mee" class="zmdi zmdi-email"></i></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                    <div class="dropdown-header">
                        Messages

                        <div class="actions">
                            <a href="messages.html" class="actions__item zmdi zmdi-plus"></a>
                        </div>
                    </div>

                    <div class="listview listview--hover">
                        <a href="#" class="listview__item">
                            <img src="demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">
                                    David Belle <small>12:01 PM</small>
                                </div>
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                            </div>
                        </a>


                        <a href="#" class="view-more">View all messages</a>
                    </div>
                </div>
            </li>

            <li class="dropdown top-nav__notifications">
                <a href="#" data-toggle="dropdown" class="top-nav__notify">
                    <i id="mee" class="zmdi zmdi-notifications"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                    <div class="dropdown-header">
                        Notifications

                        <div class="actions">
                            <a href="#" class="actions__item zmdi zmdi-check-all" data-sa-action="notifications-clear"></a>
                        </div>
                    </div>

                    <div class="listview listview--hover">
                        <div class="listview__scroll scrollbar-inner">
                            <a href="#" class="listview__item">
                                <img src="demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">David Belle</div>
                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                </div>
                            </a>
                        </div>

                        <div class="p-1"></div>
                    </div>
                </div>
            </li>

            <li class="dropdown hidden-xs-down">
                <a href="#" data-toggle="dropdown"><i id="mee" class="zmdi zmdi-check-circle"></i></a>

                <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                    <div class="dropdown-header">Tasks</div>

                    <div class="listview listview--hover">
                        <a href="#" class="listview__item">
                            <div class="listview__content">
                                <div class="listview__heading">HTML5 Validation Report</div>

                                <div class="progress mt-1">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 15%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </li>

            <li class="dropdown hidden-xs-down">
                <a href="#" data-toggle="dropdown"><i id="mee" class="zmdi zmdi-apps"></i></a>

                <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                    <div class="row app-shortcuts">
                        <a class="col-4 app-shortcuts__item" href="#">
                            <i class="zmdi zmdi-calendar"></i>
                            <small class="">Calendar</small>
                        </a>
                        <a class="col-4 app-shortcuts__item" href="#">
                            <i class="zmdi zmdi-file-text"></i>
                            <small class="">Files</small>
                        </a>
                        <a class="col-4 app-shortcuts__item" href="#">
                            <i class="zmdi zmdi-email"></i>
                            <small class="">Email</small>
                        </a>
                        <a class="col-4 app-shortcuts__item" href="#">
                            <i class="zmdi zmdi-trending-up"></i>
                            <small class="">Reports</small>
                        </a>
                        <a class="col-4 app-shortcuts__item" href="#">
                            <i class="zmdi zmdi-view-headline"></i>
                            <small class="">News</small>
                        </a>
                        <a class="col-4 app-shortcuts__item" href="#">
                            <i class="zmdi zmdi-image"></i>
                            <small class="">Gallery</small>
                        </a>
                    </div>
                </div>
            </li>

            <li class="dropdown hidden-xs-down">
                <a href="#" data-toggle="dropdown"><i id="mee" class="zmdi zmdi-more-vert"></i></a>

                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-item theme-switch">
                        Theme Switch

                        <div class="btn-group btn-group--colors mt-2 d-block" data-toggle="buttons">
                            <label class="btn active border-0" style="background-color: #222222"><input type="radio" value="1" autocomplete="off" checked></label>
                            <label class="btn border-0" style="background-color: #0a2606"><input type="radio" value="2" autocomplete="off"></label>
                            <label class="btn border-0" style="background-color: #000000"><input type="radio" value="3" autocomplete="off"></label>
                            <label class="btn border-0" style="background-color: #40350f"><input type="radio" value="4" autocomplete="off"></label>
                            <label class="btn border-0" style="background-color: #000f21"><input type="radio" value="5" autocomplete="off"></label>

                            <br>

                        </div>
                    </div>
                    <a href="#" class="dropdown-item" data-sa-action="fullscreen">Fullscreen</a>
                    <a href="#" class="dropdown-item">Clear Local Storage</a>
                </div>
            </li>
        </ul>

        <div class="clock hidden-md-down">
            <div class="time">
                <span class="hours"></span>
                <span class="min"></span>
                <span class="sec"></span>
            </div>
        </div>
    </header>

    <aside class="sidebar">
        <div class="scrollbar-inner">

                    <div class="user">
                        <div class="user__info" data-toggle="dropdown">
                            <img class="user__img" src="demo/img/profile-pics/cyroo.jpg" alt="">
                            <div>
                                <div class="user__name"> <?php
echo $_SESSION['karibu'];
?></div>
                                <div class="user__email">cyruskiprotich8@gmail.com</div>
                            </div>
                        </div>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">View Profile</a>
                            <a class="dropdown-item" href="#">Settings</a>
                            <a class="dropdown-item" href="#">Logout</a>
                        </div>
                    </div>

                    <ul class="navigation">
                       
                        <!--li class="navigation__sub @@variantsactive">
                            <a href="#"><i id="mee" class="zmdi zmdi-view-week"></i> Choose Screen</a>

                            <ul>
                                <li class="@@sidebaractive"><a href="hidden-sidebar.html">Hidden Sidebar</a></li>
                                <li class="@@boxedactive"><a href="boxed-layout.html">Boxed Layout</a></li>
                                <li class="@@hiddensidebarboxedactive"><a href="hidden-sidebar-boxed-layout.html">Boxed Layout with Hidden Sidebar</a></li>
                            </ul>
                        </li-->
                         <li class="navigation__active"><a href="index.php"><i id="mee" class="zmdi zmdi-view-dashboard"></i> Dashboard</a></li>
                            <!--li class="navigation__sub @@variantsactive">
                            <a href="#"><i id="mee" class="zmdi zmdi-money-box"></i> Budget</a>

                            <ul>
                                <li class="@@sidebaractive"><a href="hidden-sidebar.html">Hidden Sidebar</a></li>
                                <li class="@@boxedactive"><a href="boxed-layout.html">Boxed Layout</a></li>
                                <li class="@@hiddensidebarboxedactive"><a href="hidden-sidebar-boxed-layout.html">Boxed Layout with Hidden Sidebar</a></li>
                            </ul>
                        </li>
                          <li class="navigation__sub @@variantsactive">
                            <a href="#"><i id="mee" class="zmdi zmdi-receipt"></i> Financial Memo</a>

                            <ul>
                                <li class="@@sidebaractive"><a href="hidden-sidebar.html">Hidden Sidebar</a></li>
                                <li class="@@boxedactive"><a href="boxed-layout.html">Boxed Layout</a></li>
                                <li class="@@hiddensidebarboxedactive"><a href="hidden-sidebar-boxed-layout.html">Boxed Layout with Hidden Sidebar</a></li>
                            </ul>
                        </li-->
                          <li class="navigation__sub @@variantsactive">
                            <a href="#"><i id="mee" class="zmdi zmdi-receipt"></i> Memo Management</a>

                            <ul>
                                 <li class="@@sidebaractive"><a href="indexnonfinancialreceived.php">Received Requests</a></li>
                                <li class="@@boxedactive"><a href="indexnonfinancialsent.php">Sent Requests</a></li>
                                <li class="@@hiddensidebarboxedactive"><a href="indexnonfinancialdrafts.php">Memos in Draft</a></ul>
                        </li>
                        

                        <li class="@@typeactive"><a href="nonfinancialmemocreation.php"><i id="mee" class="zmdi zmdi-collection-plus"></i>Create memo</a></li>

                        <!--li class="@@widgetactive"><a href=""><i id="mee" class="zmdi zmdi-view-list-alt"></i> My memo list</a></li>

                        <li class="navigation__sub @@tableactive">
                            <a href="http://www.pageskenya.com/"><i id="mee" class="zmdi zmdi-storage"></i> Storage Cabinate</a>

                            </li>

                        <li class="navigation__sub @@formactive">
                            <a href="#"><i id="mee" class="zmdi zmdi-account-add"></i> Delegate office </a>

                            </li-->

                        <li class="navigation__sub @@uiactive">
                            <a href="#"><i id="mee" class="zmdi zmdi-trending-up"></i> General Statistics</a>
                        </li>

                         </ul>
                </div>
           </aside>

    <section class="content">
        <header class="content__title">
            <h1>NON-FINANCIAL MEMO FORM</h1>
            <small>Add New Non-Financial Memo</small>
        </header>
        <form action="nonfinancialmemocreation.php" method="post">
         
        <div class="card">
            <div class="card-body">
              
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        
                        <?php
 
require("./_connect.php");

//connect to db
$db = new mysqli($db_host,$db_user, $db_password, $db_name); 
if ($db->connect_errno) {
    //if the connection to the db failed
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}
    
$query="SELECT * from ememo_users";
//execute query
if ($db->real_query($query)) {
    //If the query was successful
    $res = $db->use_result();

    $opt="<select name='username'>";
    while ($row = $res->fetch_assoc()) {
        $opt .="<option value='{$row['user_id']}'>{$row['username']}</option>";
        $value="<option value='{$row['user_id']}'";
    }
}else{
    //If the query was NOT successful
    echo "An error occured";
    echo $db->errno;
}

$db->close();
?>
                     
                       <?php
                                include('./controller/class.php');
                             ?>  

                        <div class="form-group">

                            <label>To.</label>

                        </div>
                    </div>
                    <div class="col-sm-6 col-md-8">
                     <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group"> 
                                        <select name="firstrecepient" class="select2" id="recipient_emails" onchange="add_email()">
                                <option value="null">First recepient</option>
                                 <?php

                                  echo App::get_recipient_emails();

                               ?>
                            </select>

                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                             
                        </div>
                        <div class="row">
                            <div id="recipient_data" class="row"></div>
                        </div>
                        </div>
                
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                        </div>
                    </div>


                </div>

                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">

                            <label>From.</label>

                        </div>
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <div class="form-group">

                            <input type="text" name="requestor" class="form-control" value=" <?php echo $_SESSION['karibu']; ?>" disabled>

                            
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                        </div>
                    </div>


                </div>

                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">

                            <label>Subject.</label>

                        </div>
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <div class="form-group">

                            <input type="text" name="subject" class="form-control" id="subject">
                            
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                        </div>
                    </div>


                </div>

                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">

                            <label>Date Required.</label>

                        </div>
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <div class="form-group">

                            <input type="date" name="duedate" class="form-control" id="duedate" >
                            
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                        </div>
                    </div>


                </div>

                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">

                            <label>Introduction.</label>

                        </div>
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <div class="form-group">
                    <textarea name="introduction" id="introduction" class="ckeditor"></textarea>
                    <script>
                         CKEDITOR.replace( 'introduction' );
                        
                        // var data = $( 'introduction.editor' ).val();
                        
                        // var text=CKEDITOR.instances.contentDetails.getData();
                        // $('#yes').append(text);
                    </script>

                            
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                        
                        </div>
                    </div>


                </div>
            
            
               <button type="button" class="btn btn-outline-success" name="submit" onclick='add_data()'>Add Memo
                        </button>

            

            </div>
            
        </div>

        </form>

     <?php
if(isset($_POST['submit'])){
  //open a connection
$mysqli= new mysqli('localhost','root','','ememo');
if(!$mysqli){
    die('connection to the database failed'.$mysqli->error);
}
//create and execute a query
$sql="insert into nonfinancialmemos(referenceno,firstrecepient,secondrecepient,thirdrecepient,fourthrecepient,requestor,subject,duedate,introduction,attachment)VALUES(?,?,?,?,?,?,?,?,?,?)";
if($stmnt=$mysqli->prepare($sql)){
    //execute
    $referenceno=2;
    $attachment='mambo';
$stmnt->bind_param('ssssssssss',$referenceno,$_POST['firstrecepient'],$_POST['secondrecepient'],$_POST['thirdrecepient'],$_POST['fourthrecepient'],$_POST['requestor'],$_POST['subject'],$_POST['duedate'],$_POST['introduction'],$attachment);
    $stmnt->execute();
    $message="Your record has been successfully submitted. You may now proceed to book an interview";
   
}else{
    die("could not query the database".$mysqli->error);
}
    
echo $message;
}
    
    ?>

        
      
        <footer class="footer hidden-xs-down">
            <p>© Super Admin Responsive. All rights reserved.</p>

            <ul class="nav footer__nav">
                <a class="nav-link" href="#">Homepage</a>

                <a class="nav-link" href="#">Company</a>

                <a class="nav-link" href="#">Support</a>

                <a class="nav-link" href="#">News</a>

                <a class="nav-link" href="#">Contacts</a>
            </ul>
        </footer>
    </section>
</main>

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
<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
<script src="vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>

<script src="vendors/bower_components/salvattore/dist/salvattore.min.js"></script>
<script src="vendors/bower_components/flot/jquery.flot.js"></script>
<script src="vendors/bower_components/flot/jquery.flot.resize.js"></script>
<script src="vendors/bower_components/flot.curvedlines/curvedLines.js"></script>
<script src="vendors/bower_components/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="vendors/bower_components/dropzone/dist/min/dropzone.min.js"></script>
<script src="vendors/bower_components/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
<script src="vendors/bower_components/peity/jquery.peity.min.js"></script>
<script src="vendors/bower_components/moment/min/moment.min.js"></script>
<script src="vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="vendors/bower_components/select2/dist/js/select2.full.min.js"></script>
    
        <script src="vendors/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>
        <script src="vendors/bower_components/sweetalert2/dist/sweetalert2.min.js"></script>

<!-- Charts and maps-->
<script src="demo/js/flot-charts/curved-line.js"></script>
<script src="demo/js/flot-charts/line.js"></script>
<script src="demo/js/flot-charts/dynamic.js"></script>
<script src="demo/js/flot-charts/chart-tooltips.js"></script>
<script src="demo/js/other-charts.js"></script>
<script src="demo/js/jqvmap.js"></script>

<!-- App functions and actions -->
<script src="js/app.min.js"></script>
<script src="js/event-controller.js"></script>   
    
    <!-- Demo -->
        <script type="text/javascript">

            /*--------------------------------------
                Bootstrap Notify Notifications
            ---------------------------------------*/
            function notify(from, align, icon, type, animIn, animOut){
                $.notify({
                    icon: icon,
                    title: 'Bootstrap Notify',
                    message: 'Turning standard Bootstrap alerts into awesome notifications',
                    url: ''
                },{
                    element: 'body',
                    type: type,
                    allow_dismiss: true,
                    placement: {
                        from: from,
                        align: align
                    },
                    offset: {
                        x: 20,
                        y: 20
                    },
                    spacing: 10,
                    z_index: 1031,
                    delay: 2500,
                    timer: 1000,
                    url_target: '_blank',
                    mouse_over: false,
                    animate: {
                        enter: animIn,
                        exit: animOut
                    },
                    template:   '<div data-notify="container" class="alert alert-dismissible alert-{0} alert--notify" role="alert">' +
                                    '<span data-notify="icon"></span> ' +
                                    '<span data-notify="title">{1}</span> ' +
                                    '<span data-notify="message">{2}</span>' +
                                    '<div class="progress" data-notify="progressbar">' +
                                        '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                                    '</div>' +
                                    '<a href="{3}" target="{4}" data-notify="url"></a>' +
                                    '<button type="button" aria-hidden="true" data-notify="dismiss" class="close"><span>×</span></button>' +
                                '</div>'
                });
            }

            $('.notifications-demo > .btn').click(function(e){
                e.preventDefault();
                var nFrom = $(this).attr('data-from');
                var nAlign = $(this).attr('data-align');
                var nIcons = $(this).attr('data-icon');
                var nType = $(this).attr('data-type');
                var nAnimIn = $(this).attr('data-animation-in');
                var nAnimOut = $(this).attr('data-animation-out');

                notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut);
            });


            /*--------------------------------------
                Sweet Alert Dialogs
            ---------------------------------------*/

            // Basic
            $('#sa-basic').click(function(){
                swal({
                    title: "Here's a message!",
                    text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis',
                    buttonsStyling: false,
                    confirmButtonClass: 'btn btn-sm btn-light',
                    background: 'rgba(0, 0, 0, 0.96)'
                })
            });

            // Success Message
            $('#sa-success').click(function(){
                swal({
                    title: 'Good job!',
                    text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis',
                    type: 'success',
                    buttonsStyling: false,
                    confirmButtonClass: 'btn btn-sm btn-light',
                    background: 'rgba(0, 0, 0, 0.96)'
                })
            });

            // Success Message
            $('#sa-info').click(function(){
                swal({
                    title: 'Information!',
                    text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis',
                    type: 'info',
                    buttonsStyling: false,
                    confirmButtonClass: 'btn btn-sm btn-light',
                    background: 'rgba(0, 0, 0, 0.96)'
                })
            });

            // Warning Message
            $('#sa-warning').click(function(){
                swal({
                    title: 'Not a good sign...',
                    text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis',
                    type: 'warning',
                    buttonsStyling: false,
                    confirmButtonClass: 'btn btn-sm btn-light',
                    background: 'rgba(0, 0, 0, 0.96)'
                })
            });

            // Question Message
            $('#sa-question').click(function(){
                swal({
                    title: 'Hmm.. what did you say?',
                    text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis',
                    type: 'question',
                    buttonsStyling: false,
                    confirmButtonClass: 'btn btn-sm btn-light',
                    background: 'rgba(0, 0, 0, 0.96)'
                })
            });

            // Warning Message with function
            $('#sa-funtion').click(function(){
                swal({
                    title: 'Are you sure?',
                    text: 'You will not be able to recover this imaginary file!',
                    type: 'warning',
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonClass: 'btn btn-danger',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonClass: 'btn btn-light',
                    background: 'rgba(0, 0, 0, 0.96)'
                }).then(function(){
                    swal({
                        title: 'Are you sure?',
                        text: 'You will not be able to recover this imaginary file!',
                        type: 'success',
                        buttonsStyling: false,
                        confirmButtonClass: 'btn btn-light',
                        background: 'rgba(0, 0, 0, 0.96)'
                    });
                });
            });

            // Custom Image
            $('#sa-image').click(function(){
                swal({
                    title: 'Sweet!',
                    text: "Here's a custom image.",
                    imageUrl: 'demo/img/thumbs-up.png',
                    buttonsStyling: false,
                    confirmButtonClass: 'btn btn-light',
                    confirmButtonText: 'Super!',
                    background: 'rgba(0, 0, 0, 0.96)'
                });
            });

            // Auto Close Timer
            $('#sa-timer').click(function(){
                swal({
                    title: 'Auto close alert!',
                    text: 'I will close in 2 seconds.',
                    timer: 2000,
                    showConfirmButton: false,
                    buttonsStyling: false,
                    background: 'rgba(0, 0, 0, 0.96)'
                });
            });
        </script>
</body>
    
<!-- Mirrored from byrushan.com/projects/super-admin/app/2.0/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Dec 2017 17:30:43 GMT -->
</html>