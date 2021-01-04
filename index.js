//Ajax coll for the sign up form
//Once the form is submited
$("#signupform").submit(function(){
	//prevent default php processing
	event.preventDefault();
	//collect user inputs
	var datatopost = $(this).serializeArray();
	// console.log(datatopost);
	//send them to signup.php using Ajax
	$.ajax({
		url: "signup.php",
		type: "POST",
		data: datatopost,
		success: function(data){
			if (data) {
				$("#signupmessage").html(data);
			}
		},
		error: function(){
			$("#signupmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
		}
	});

});
	
//Ajax Call for the login form
//Once the form is submitted
$("#loginform").submit(function(){ 
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to login.php using AJAX
    $.ajax({
        url: "login.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data == "success"){
                window.location = "mainpageloggedin.php";
            }else{
                $('#loginmessage').html(data);   
            }
        },
        error: function(){
            $("#loginmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });

});

//Ajax Call for the forgot password form
//Once the form is submitted
$("#forgotpasswordform").submit(function(){ 
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to forgotpassword.php using AJAX
    $.ajax({
        url: "forgotpassword.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            $('#forgotpasswordmessage').html(data);
        },
        error: function(){
            $("#forgotpasswordmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });

});
$(function(){
    $("#loginModal").on('shown.bs.modal', function(){
        $("#loginmessage").empty();
        $("#loginform")[0].reset();
    });
    $("#signupModal").on('shown.bs.modal', function(){
        $("#signupform")[0].reset();
        $("#signupmessage").empty();
    });
    $("#forgotpasswordModal").on('shown.bs.modal', function(){
        $("#forgotpasswordform")[0].reset();
        $("#forgotpasswordmessage").empty();
    });
});