<?php
include('./controller/db.php');
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


		return App::get_all_temp_data();
	}
	public static function single_temp_delete(){

	}
	public static function delete_all_temp(){

	}

	public static function get_all_temp_data(){
		global $db;

		$data=$db->GetArray("SELECT email from temp_storage");

		foreach($data as $row){?>
			<div class="col-sm-4 alert alert-warning alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <?php echo $row['email']; ?>
                            </div>
		<?php }
	}



	
}
?>