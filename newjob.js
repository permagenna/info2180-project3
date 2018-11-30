

window.onload = function(){
	setUpEvents ();
}

function setUpEvents (){
	var homebut = document.getElementById("home");
	homebut.onclick= function(){
		alert("home");
	}
	var addbut = document.getElementById("adduser");
	addbut.onclick= function(){
		alert("Add User");
	}
	var newbut = document.getElementById("newjob");
	newbut.onclick= function(){
		alert("New Job");
	}
	var outbut = document.getElementById("logout");
	outbut.onclick= function(){
		alert("Log Out");
	}
}