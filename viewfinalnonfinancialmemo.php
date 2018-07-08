<?php  

session_start();
if(!isset($_SESSION['karibu'])){
    header("Location:login.php");
}


 function fetch_data()  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "ememo");  
     $referenceno=$_GET['referenceno'];
     $ses=$_SESSION['karibu'];
      $sql = "SELECT * FROM nonfinancialmemos WHERE referenceno='$referenceno' && recepient='$ses'";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= $row['introduction'];
      }  
      return $output;  
 }  
 if(isset($_POST["create_pdf"]))  
 {  
      require_once('tcpdf/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Approved Memo Converted to PDF");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage();  
      $content = '';  
      $content .= '<br /><br />  
      <table border="1" cellspacing="0" cellpadding="5">  
           <tr>  
                <th width="5%"></th>  
                  
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '';  
      $obj_pdf->writeHTML($content);  
     $subject=$_GET['subject'];
      $obj_pdf->Output($subject, 'I');  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>eMemo|Doc-Preview</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />            
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:700px;">  
                <h3 align="center"></h3><br />  
                <div class="table-responsive">  
                     <?php  
                     echo fetch_data();  
                     ?>  
                     <br />  
                     <form method="post">  
                          <input type="submit" name="create_pdf" class="btn btn-success" value="Create PDF" />  
                     </form>  
                </div>  
           </div>  
      </body>  
 </html>  