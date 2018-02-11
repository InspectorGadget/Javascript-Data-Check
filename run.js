function onRun() {
	document.getElementById("demo").innerHTML = "https://google.com";
}

function onProcess(username, password) {
	// window.alert("Your username is " + username);
	document.getElementById("username").innerHTML = "Your username is " + username;
	document.getElementById("password").innerHTML = "Your password is " + password;
}

function onReload() {
	location.reload();
}