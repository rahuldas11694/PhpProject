/*	console.log("HIIII");
	window.log = console.log;

	$("#login_submit").on("click",function(event){
			// event.preventDefault();
			log("YES in login")
			let getdata = $(this).serialize();
			$.post('home/checkUser',getdata,function(data){
			// 	log("DATA", data);
			// })
		})

	
	$(".signupbtn").on('click',function(event){
		event.preventDefault();

		let postdata = $(this).serialize();
		log(postdata);
		$.post("home/signup",postdata, function(data){
			log("Return Data", data);
			if(data === true){
				log("User Exists");
				$("#user_exists").html("User Already Exists");

			}
			else{
				window.location = "home/login";
			}

		});
	});
	});

*/

$(function() {

    $('#login-form-link').click(function(e) {
    	$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

	$('#login-form').submit(function(e){
		e.preventDefault();
		let getdata = $(this).serialize();
		console.log("INSIDE LOGIN FORM", getdata)
			$.get('home/checkUser',getdata,function(response){
				var obj = $.parseJSON(response);
				// console.log("DATA",$.parseJSON(response),$.parseJSON(response.Message));
				console.log(typeof response, typeof obj,obj.Message,obj.code) // response is in string convert that in object and access its values
				if(obj.code == 404 || obj.code == 401){
					$('.err_msg').text(obj.Message);// = obj.Message;
				}
				else{

				}
				
			})

	})

});
