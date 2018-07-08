<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
include_once 'config.php';

class DB_connect{
    
    private $fname;
    private $sname;
    private $memno;
    private $idnum;
    private $prinloan;
    private $duration;
    private $loanbal;
    private $weekleypay;
    private $loanpaid;
    private $savings;
    private $tsavings;
    private $tinterest;
    
    public function __construct(){
        
    }
    //fname
    public function getFname(){
        return $this->fname;
    }
    public function setFname($fName){
        $this->fname=$fName;
    }
    //sname
    public function getSname(){
        return $this->sname;
    }
    public function setSname($sName){
        $this->sname=$sName;
    }
    
    // a function which inserts admin form info into the database 
    public function insertAdmin($mysqli,$username,$department,$password){
        //encrypt the password
        $salt='#!@*%';
	   $pepper='*-#$QW';
	   $password=hash('sha512',$salt.$password.$pepper);
      $stmt = $mysqli->prepare("SELECT username from ememo_users WHERE username = ?");
      $stmt->bind_param("s", $username);
      $stmt->execute();
       $stmt->store_result();
        if ($stmt->num_rows > 0) {
 
            echo"There already exists a user with that username";
        }
        else{
             if($stmnt=$mysqli->prepare("INSERT INTO ememo_users(username,department,password)VALUES(?,?,?)")){
            $stmnt->bind_param('sss',$username,$department,$password);
            $stmnt->execute();
            $tii="Sucessful Registration";
                echo $tii;
    
            
                    }
        else{
            $tii="oops couldnt perform the desired operation";
                echo $tii;
        }
       
            
        }
    }
    
    
    //set sign for sessions
    public function set_sign($mysqli){
        $email=$this->email;
        $sql="select password from agent_admin where number=? LIMIT 1";
        if($stmnt=$mysqli->prepare($sql)){
         $stmnt->bind_param('s', $email);
                $stmnt->execute();
                $stmnt->store_result();
            
        if($stmnt->num_rows>=1){
                         $stmnt->bind_result($db_pass);
                         $stmnt->fetch();
        
        $user_browser=$_SERVER['HTTP_USER_AGENT'];
            $_SESSION['email']=$email;
            $_SESSION['login']=hash('sha512',$db_pass.$user_browser);
        }
            else{
                die("".$mysqli->error);
            }
        
        
        }
    }
    
    
    //login function
    public function login($mysqli,$email,$password){
        //encrypting the password
        $salt='#!@*%';
        $pepper='*-#$QW';
        $password_1=hash('sha512',$salt.$password.$pepper);
        
        $query ="SELECT email, password FROM agent_admin WHERE email=? LIMIT 1";  
        if($stmt = $mysqli->prepare($query)){
                $stmt->bind_param('s', $email);
                $stmt->execute();
                $stmt->store_result();
            /*To check if the row exists*/
                if($stmt->num_rows>=1){
                         $stmt->bind_result($db_email, $db_password);
                         $stmt->fetch();
                    if(($password_1 == $db_password)){
                     /*   $user_browser=$_SERVER['HTTP_USER_AGENT'];
                        //X5S protection
                        $email=preg_replace("/^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/");
                        $_SESSION['email']=$db_email;
                        $_SESSION['login']=hash('sha512',$password.$user_browser);
                        //log in successfull
                        $success="log_in success";
                        echo json_encode($success);
                        return true;*/
                       ob_start();
        header("Location:http://localhost/Ootkei/admin/adminactivity.php");
        die();
                    }else{
                        echo "YOU ARE NOT AUTHORISED FOR ADMINISTRATIVE DUTIES!!!!!, Consult the system admin!!";
                    }
                }else {
                    echo "not logged in";
        }
        }else{
            throw new runtimeexception("Failed to execute query".$mysqli->error);
        }
    } 
    
    function log_check($mysqli){
        if(isset($_SESSION['email'], $_SESSION['login'])){
            $user_email=$_SESSION['email'];
            $login_string=$_SESSION['login'];
            
            $user_browser=$_SERVER['HTTP_USER_AGENT'];
            if($stmnt=$mysqli->prepare("select password from agent_admin where email=? LIMIT 1")){
                $stmnt->bind_param('s',$user_email);
                
                $stmnt->execute();
                $stmnt->store_result();
                
                if($stmnt->num_rows==1){
                    $stmnt->bind_result($db_password);
                    $stmnt->fetch();
                    $login_check=hash('sha512',hash('sha512',$db_password.$user_browser));
                    
                    if($login_check==$login_string){
                        //not logged in
                        return true;
                    }
                    else{
                        //not logged in
                        echo "invalid match";
                        return false;
                    }
                }
                else{
                    echo "non existent user";
                    return false;
                }
            }
            else{
                die("".$mysqli->error);
                return false;
            }
            
        }
        
        
    }
    
    
}
?>