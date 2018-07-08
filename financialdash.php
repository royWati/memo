
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
        <link rel="stylesheet" href="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">
        <link rel="stylesheet" href="vendors/bower_components/fullcalendar/dist/fullcalendar.min.css">

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
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
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
                            <li class="navigation__sub @@variantsactive">
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
                        </li>
                          <li class="navigation__sub @@variantsactive">
                            <a href="#"><i id="mee" class="zmdi zmdi-receipt"></i> Non-Financial Memo</a>

                            <ul>
                               <li class="@@sidebaractive"><a href="indexnonfinancialreceived.php">Received Requests</a></li>
                                <li class="@@boxedactive"><a href="indexnonfinancialsent.php">Sent Requests</a></li>
                                <li class="@@hiddensidebarboxedactive"><a href="indexnonfinancialdrafts.php">Memos in Draft</a></li>
                            </ul>
                        </li>
                        

                        <li class="@@typeactive"><a href="memocreation.php"><i id="mee" class="zmdi zmdi-collection-plus"></i>Create memo</a></li>

                        <li class="@@widgetactive"><a href=""><i id="mee" class="zmdi zmdi-view-list-alt"></i> My memo list</a></li>

                        <li class="navigation__sub @@tableactive">
                            <a href="http://www.pageskenya.com/"><i id="mee" class="zmdi zmdi-storage"></i> Storage Cabinate</a>

                            </li>

                        <li class="navigation__sub @@formactive">
                            <a href="#"><i id="mee" class="zmdi zmdi-account-add"></i> Delegate office </a>

                            </li>

                        <li class="navigation__sub @@uiactive">
                            <a href="#"><i id="mee" class="zmdi zmdi-trending-up"></i> General Statistics</a>
                        </li>

                         </ul>
                </div>
            </aside>

            <section class="content">
                <header class="content__title">
                    <h1>Dashboard</h1>
                    <small>Welcome to the memo management system.(E-Memo)</small>
                </header>

                          <div class="row quick-stats">
                    <div class="col-sm-6 col-md-12">
                        <div id="qstatspia" class="quick-stats__item">
                            <div id="qstats" class="quick-stats__info">
                                <h2><?php $subject=$_GET['subject']; echo $subject; ?></h2>
                                <small><?php $requestor=$_GET['requestor']; echo $requestor; ?></small>
                            </div>

                        </div>
                    </div>

                </div>
                
                            <button type="submit" class="btn btn-outline-info" name="submit">View Memo Details</button>
                <div class="row quick-stats">
                    <div class="col-sm-6 col-md-6">
                        <div id="qstatspia" class="quick-stats__item">
                            <div id="qstats" class="quick-stats__info">
                                <h2>Status</h2></br><h2><?php $status=$_GET['status']; echo $status; ?></h2></br></br>
                    <h2>Progress</h2></br><h2><?php $generalprogress=$_GET['generalprogress']; echo $generalprogressrequestor; ?></h2>
                            </div>

                        </div>
                    </div>
 <div class="col-sm-6 col-md-6">
                        <div id="qstatspia" class="quick-stats__item">
                            <div id="qstats" class="quick-stats__info">
                                <h2>Budget Requested</h2></br>
                                <h1>Kshs. 150,999</h1>
                            </div>

                        </div>
                    </div>

                </div>

                       <div class="row quick-stats">
                    <div class="col-sm-6 col-md-6">
                        <div id="qstatspia" class="quick-stats__item">
                            <div id="qstats" class="quick-stats__info">
                                <h2>Memo Participants</h2></br></br>
                        
                                <h2>First Recepient</h2></br></br>
<small>Jonathan Misoi(ICT)</small></br></br>
<h2>Second Recepient</h2></br></br>
<small>Jonathan Misoi(ICT)</small></br></br>
                                <h2>Third Recepient</h2></br></br>
<small>Jonathan Misoi(ICT)</small></br></br>
<h2>Fourth Recepient</h2></br></b>
<small>Jonathan Misoi(ICT)</small></br></br>
                            
                            </div>

                        </div>
                    </div>
 <div class="col-sm-6 col-md-6">
                        <div id="qstatspia" class="quick-stats__item">
                            <div id="qstats" class="quick-stats__info">
                                <h2>Memo Tracking</h2></br>
                                
                            </div>

                        </div>
                    </div>

                </div>

               
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
        <script src="vendors/bower_components/jqvmap/dist/maps/jquery.vmap.world.js"></script>
        <script src="vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
        <script src="vendors/bower_components/peity/jquery.peity.min.js"></script>
        <script src="vendors/bower_components/moment/min/moment.min.js"></script>
        <script src="vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>

        <!-- Charts and maps-->
        <script src="demo/js/flot-charts/curved-line.js"></script>
        <script src="demo/js/flot-charts/line.js"></script>
        <script src="demo/js/flot-charts/dynamic.js"></script>
        <script src="demo/js/flot-charts/chart-tooltips.js"></script>
        <script src="demo/js/other-charts.js"></script>
        <script src="demo/js/jqvmap.js"></script>

        <!-- App functions and actions -->
        <script src="js/app.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/rChat.js"></script>
        <script src="js/rChatSent.js"></script>
        
    </body>

<!-- Mirrored from byrushan.com/projects/super-admin/app/2.0/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Dec 2017 17:30:43 GMT -->
</html>