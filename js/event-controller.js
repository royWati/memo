function add_email(){
	var email=document.getElementById('recipient_emails').value;
	variables="email="+email;

	var url="./controller/apis/add-temp-data.php?"+variables;
		$.ajax({
			type:"POST",
			url:url,
			dataType:"text",

			success:function(response){
					$("#recipient_data").append(response);
					//alert(response);
				//	$.("#recipient_data").html('200 status');
				
			}
		});
}

function onchange_taster(value){
	alert(value);
}

function delete_single_data(email){
	var email=document.getElementById('recipient_emails').value;
	variables="email="+email;

	var url="./controller/apis/delete-single-temp-data.php?"+variables;
		$.ajax({
			type:"POST",
			url:url,
			dataType:"text",

			success:function(response){
				
				
			}
		});
}

function add_data(){
	var subject=document.getElementById('subject').value;
	var duedate=document.getElementById('duedate').value;
	//var introduction=document.getElementById('introduction').value;

	var introduction=CKEDITOR.instances.introduction.getData();
	//var text_data=;
	variables="subject="+subject+"&duedate="+duedate+"&introduction="+introduction;

	

	var data = $( 'textarea.editor' ).value;

	alert(introduction);

	var url="./controller/apis/add-memo-data.php?"+variables;
		$.ajax({
			type:"POST",
			url:url,
			dataType:"json",

			success:function(response){
				if(response.success==1){
					alert('the data has been posted to the recipient');
					location.reload();
				}else{
					console.log('error while adding memo');
				}
				
			}
		});
}

