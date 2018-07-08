
</html>
<html lang="en">    
<head>
    <title> </title>
    
        <!-- Vendor styles -->
        <link rel="stylesheet" href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">
        <link rel="stylesheet" href="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">

        <!-- App styles -->
        <link rel="stylesheet" href="css/app.min.css">
  </head>
    <body>
        <header>
        <a class="hlink" href="" id="logo"></a>
    <nav>
        <a class="hlink" href="#" id="menu-icon"></a>
       <ul>
           </ul>
        </nav>
    </header>
        <div class="card">
                    <div class="card-body">
                
                        <div class="table-responsive">
<table  id="data-table" class="table">
    <thead>
       <tr>
                                                  <th>id</th>
                                                <th>Subject</th>
                                                <th>Ref. No</th>
                                                <th>Due Date</th>
           
                                                 <th>Recepient</th>
                                                 <th>Progress</th>
                                                 <th>Status</th>
                                                <th>Action</th>
           
                                                
                                            </tr>
    </thead>
<tbody>
<?php
    
session_start();
if(isset($_SESSION['karibu'])){
}
require("./_connect.php");

//connect to db
$db = new mysqli($db_host,$db_user, $db_password, $db_name); 
if ($db->connect_errno) {
    //if the connection to the db failed
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}
    
$ses= $_SESSION['karibu'];
$query="SELECT * FROM nonfinancialmemos WHERE requestor='$ses' ORDER BY id DESC ";
//execute query
if ($db->real_query($query)) {
    //If the query was successful
    $res = $db->use_result();

    while ($row = $res->fetch_assoc()) {
           $id=$row["id"];
        $subject=$row["subject"];
        $referenceno=$row["referenceno"];
        $duedate=$row["duedate"];
        $recepient=$row["recepient"];
        
        $requestor=$row["requestor"];
        $progress=$row["progress"];
        $generalprogress=$row["generalprogress"];
        $status=$row["status"];   
        $generalstatus=$row["generalstatus"];
        $introduction=$row['introduction'];
        
           echo  "<tr>";
            echo"<td>$id</td>";
            echo "<td> $subject</td>";
            echo "<td> $referenceno</td>";
            echo "<td>$duedate</td>";
        echo "<td> $recepient</td>";
            echo "<td><div class=\"progress mt-1\">
                                    <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: $generalprogress%\" aria-valuenow=\"55\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </td>";
            echo "<td> $status</td>";
        echo "<td><a href=\"nonfinancialdashsent.php?subject=$subject&&referenceno=$referenceno&&dudedate=$duedate&&recepient=$recepient&&requestor=$requestor&&introduction=$introduction&&progress=$progress&&generalprogress=$generalprogress&&status=$status&&generalstatus=$generalstatus\"><button class=\"btn btn-primary btn--icon-text\"><i class=\"zmdi zmdi-home\"></i> dashboard</button></td>";
    
                echo "</tr>";
           
        
    }
}else{
    //If the query was NOT successful
    echo "An error occured";
    echo $db->errno;
}

$db->close();
?>

    </tbody>
    </table>
        </div>
            </div>
        </div>
        <!-- Javascript -->
        <!-- Vendors -->
        <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>

        <!-- Vendors: Data tables -->
        <script src="vendors/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="vendors/bower_components/jszip/dist/jszip.min.js"></script>
        <script src="vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>

        <!-- App functions and actions -->
        </body>
    
</html>