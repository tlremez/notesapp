//ajax call to updateusername.php
$("#updateusernameform").submit(function(){
	//prevent default php processing
	event.preventDefault();
	//collect user inputs
	var datatopost = $(this).serializeArray();
	// console.log(datatopost);
	//send them to updateusername.php using Ajax
	$.ajax({
		url: "updateusername.php",
		type: "POST",
		data: datatopost,
		success: function(data){
			if (data) {
				$("#updateusernamenmessage").html(data);
			}else{
				location.reload();
			}
		},
		error: function(){
			$("#updateusernamenmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
		}
	});

});

//ajax call to updatepassword.php
$("#updatepasswordform").submit(function(){
	//prevent default php processing
	event.preventDefault();
	//collect user inputs
	var datatopost = $(this).serializeArray();
	// console.log(datatopost);
	//send them to updateusername.php using Ajax
	$.ajax({
		url: "updatepassword.php",
		type: "POST",
		data: datatopost,
		success: function(data){
			if (data) {
				$("#updatepasswordmessage").html(data);
			}
		},
		error: function(){
			$("#updatepasswordmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
		}
	});

});

//ajax call to updateemail.php
$("#updateemailform").submit(function(){
	//prevent default php processing
	event.preventDefault();
	//collect user inputs
	var datatopost = $(this).serializeArray();
	// console.log(datatopost);
	//send them to updateusername.php using Ajax
	$.ajax({
		url: "updateemail.php",
		type: "POST",
		data: datatopost,
		success: function(data){
			if (data) {
				$("#updateemailmessage").html(data);
			}
		},
		error: function(){
			$("#updateemailmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
		}
	});

});