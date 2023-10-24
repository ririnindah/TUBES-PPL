<!DOCTYPE html>
<html>
<head>
    <title>SIMONE</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet"  type="text/css" >
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<link rel="shortcut icon"  href='https://i.ibb.co/yBG6mSK/Simone-4.png'>
</head>
<link href="{{asset('style/css/login.css')}}" rel="stylesheet">

<body>
	<div class="container">
		<div class="img">
			<img src="https://i.ibb.co/yBG6mSK/Simone-4.png">
		</div>
		<div class="login-content">
			<form action= "/dashboard_opt" method="GET">
				<img src="https://i.ibb.co/yBG6mSK/Simone-4.png">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input">
            	   </div>
            	</div>
            	<a href="#">Lupa Password?</a>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script>  // login1

const inputs = document.querySelectorAll(".input");


function addcl(){
  let parent = this.parentNode.parentNode;
  parent.classList.add("focus");
}

function remcl(){
  let parent = this.parentNode.parentNode;
  if(this.value == ""){
    parent.classList.remove("focus");
  }
}


inputs.forEach(input => {
  input.addEventListener("focus", addcl);
  input.addEventListener("blur", remcl);
});
</script>
 

</body>

</html>