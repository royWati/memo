<?php
include('./db.php');
class App{

	public static function get_recipient_emails(){
		global $db;

		$data=$db->GetArray("SELECT username from ememo_users");

		foreach($data as $row){?>
			<option value="<?php echo $row["username"]; ?>"><?php echo $row["username"]; ?></option>
		<?php }
	}

	public static function add_temp_data($email){
		global $db;

		$data=array();
		$data['email']=$email;
		$db->AutoExecute('temp_storage',$data, 'INSERT');


		return "<div class='col-sm-12 alert alert-info alert-dismissible fade show' >
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close' id=".$email." onclick='delete_single_data(this.id)'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                                ".$email."
                            </div>
";
	}
	public static function single_temp_delete($email){

		global $db;

		$db->Execute("DELETE from temp_storage WHERE email='$email'");
		return 'email has been removed';

	}
	public static function delete_all_temp(){
		global $db;

		$db->Execute("TRUNCATE temp_storage");
	}

	public static function get_all_temp_data(){
		global $db;

		$data=$db->GetArray("SELECT email from temp_storage");

		?>
		<div class="row">
		<?php
		foreach($data as $row){?>
			<div class="col-sm-4 alert alert-info alert-dismissible fade show" >
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <?php echo $row['email']; ?>
                            </div>

		<?php }  ?> </div> <?php 
	}

	public static function add_memo_data($subject,$duedate,$introduction,$from){

		global $db;

		$temp_data=$db->GetArray("SELECT email from temp_storage");
		$ref_no=App::produce_reference_no();
		foreach ($temp_data as $row) {
			$data=array();
			$data['recepient']=$row['email'];
			$data['referenceno']=$ref_no;
			$data['requestor']=$from;
			$data['subject']=$subject;
			$data['duedate']=$duedate;
			$data['introduction']=$introduction;

			$db->AutoExecute('nonfinancialmemos',$data,'INSERT');

		}

		App::delete_all_temp();
		
		$response['success']=1;

		return json_encode($response);


	}

   public static function reference_no($length){
		  //  $substring_name=substr($username,0,3);
		    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		    $clen   = strlen( $chars )-1;
		    $id  = '';

		    for ($i = 0; $i < $length; $i++) {
		            $id .= $chars[mt_rand(0,$clen)];
		    }
		 //   return ($substring_name."".$id);
		    return $id;
  }

  public static function check_refrence_number($reference){
  		global $db;

  		$get_ref=$db->GetOne("SELECT * FROM nonfinancialmemos WHERE referenceno='$reference'");

  		if(!$get_ref){
  			return false;
  		}else{
  			return true;
  		}
  }

  public static function produce_reference_no(){

  		$ref_no;
  		for ($i=0; $i <100 ; $i++) { 
  			$ref_no=App::reference_no(8);
  			if(!App::check_refrence_number($ref_no)){
  				break;
  			}
  		}

  		return $ref_no;
  }
	
}
?>