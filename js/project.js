console.log("HIIII");
window.log = console.log;
$("#sign_up").submit(function(event){
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

	$("#login_form").submit(function(event){
		// event.preventDefault();
		log("YES in login")
		let getdata = $(this).serialize();
		$.get('home/checkUser',getdata,function(data){
			log("DATA", data);
		})
	})

})