<!DOCTYPE html>
<html>
<head><title>Login Page</title>
</head>
<style type="text/css">

.first-info{
	height: 773px;
	overflow: hidden;
	background-size: cover; 
}

#lkm{
	background-image: url("new.png");
	overflow: hidden;
	background-size: cover;
	 
}
body{

	background-image: url("new.png");
	overflow: hidden;
	background-size: cover;
	 
}

h1{
	margin-left: 450px;
	font-size: 40px;
	color: yellow;
}
.image-div{
	margin-top: -1%;
	margin-left: -1%;
	height: 90px;
	width:  1450px;
	background-color: white;
	border: 2px solid gray;
	opacity: 0.7;
	 
	
}
img{
	height: 80px;
	width: 100px;
	margin-top: 10px;
	
	
}
h3{
	text-align: center;
	font-size: 40px;
	margin-top: -5%;
	color:  #001f6c;
}
#h1tag{
	text-align: center;
	margin-top: 10px;
	color: #d1ac00;
	font-size: 20px;
	margin-left: 20px;
}
.main-div{
	height: 300px;
	width: 700px;
	margin-left: 350px;
	margin-top: 200px;
}
.user-div
{
	height: 300px;
	width: 700px;
	
	margin-left: 350px;
	margin-top: 100px;
	
	
}
form{
	text-align: center;
	margin-left: 30px;
	margin-top: 20px;
	
}
#input1{
	padding: 13px 40px 13px 40px;
	margin-top: 10px;
	border-radius: 10px;
	border: 2px solid black;
	
}
#input2{
	padding: 13px 40px 13px 40px;
	margin-top: 10px;
	border-radius: 10px;
	border: 2px solid black;
}
placeholder{
	color: black;
}
#input3{
	padding: 8px 30px 8px 30px;
	margin-top: 10px;
	margin-right: 2px;
	border-radius: 10px;
	border: 3px solid black;
}
#input6{
	padding: 13px 40px 13px 40px;
	margin-top: 10px;
	border-radius: 10px;
	border: 2px solid black;
	
}
#input4{
	padding: 13px 40px 13px 40px;
	margin-top: 10px;
	border-radius: 10px;
	border: 2px solid black;
}

#input8{
	
	padding: 13px 40px 13px 40px;
	margin-top: 10px;
	border-radius: 10px;
	border: 2px solid black;
}

#input5{
	padding: 8px 30px 8px 30px;
	margin-top: 10px;
	margin-right: 2px;
	border-radius: 10px;
	border: 5px solid gray;
}


label{
	height: 100px;
	width: 120px;
	margin-top: 30px;
	border: 2px solid gray;
	background-color: white;
	

}
#log{
height: 90px;
width: 80px;



}




</style>
<body>

<header class="image-div">
<img src="logo.png" id="log" alt="SSTPL-IMG">
<h3>Sehaj Synergy Technologies Pvt. Ltd.</h3>

</header>
<div class="main-div">
<form action="login.js" method="get">
<input type="text" id="input1" placeholder="Enter User Name" name="first"></br>
<input type="password" id="input2" placeholder="Enter Password" name="second" ></br>
<input type="button" id="input3" onclick="check(this.form)" value="Login">

</form>
</div>
</div><div id="result"></div>	
<script language="javascript">

var input = document.getElementById("input2");
  input.addEventListener("keyup", function(event) {
  // Number 13 is the "Enter" key on the keyboard
  if (event.keyCode === 13) {
    // Cancel the default action, if needed
    event.preventDefault();
    // Trigger the button element with a click
    document.getElementById("input3").click();
  }
});
var input = document.getElementById("input1");
  input.addEventListener("keyup", function(event) {
  // Number 13 is the "Enter" key on the keyboard
  if (event.keyCode === 13) {
    // Cancel the default action, if needed
    event.preventDefault();
    // Trigger the button element with a click
    document.getElementById("input3").click();
  }
});

function check(form)/*function to check userid & password*/
{

 /*the following code checkes whether the entered userid and password are matching*/
 /*if(form.first.value == "user" && form.second.value == "abcd")
  {
// Check browser support
if (typeof(Storage) !== "undefined") {
  // Store
  sessionStorage.setItem("lastname", "Smith");
  // Retrieve
  document.getElementById("result").innerHTML = sessionStorage.getItem("lastname");
  window.location='/user';
} else {
  document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
}
	
}*/
 if(form.first.value == "Bhutan@telecom" && form.second.value == "bhutan@123")
 {
 if (typeof(Storage) !== "undefined") {
  // Store
  sessionStorage.setItem("token", "cM=xK2v=yB7?35Z3V2+Be$-?=$P@!3nEkT9_whgmp=rw5tKU7$Wp42Gjna%gMAxKrUXkmMHzzn_N7&g-WF@wxG$*xGAZY=jr&*=&c9?qf?W%Y23#=3JGWxF8g^%jMZSP");
  // Retrieve
  document.getElementById("result").innerHTML = sessionStorage.getItem("lastname");
  window.location='stlight.php';
} else {
  document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
}
  
  }
 else
 {
   alert("Error Password or Username");/*displays error message*/
  }
}
</script>

</body>
</html>