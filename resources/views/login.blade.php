<!DOCTYPE html>
<html>
<head>
    <title>SIMONE</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet"  type="text/css" >
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<link rel="shortcut icon"  href='https://i.ibb.co/yBG6mSK/Simone-4.png'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<link href="{{asset('style/css/login.css')}}" rel="stylesheet">

<body>
	<div class="container">
		<div class="img">
			<img src="https://i.ibb.co/yBG6mSK/Simone-4.png">
		</div>
		<div class="login-content">

        @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{session('loginError')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
        @endif

            {{-- form --}}
			<form action= "/" method="post">
                @csrf
				<img src="https://i.ibb.co/yBG6mSK/Simone-4.png">
				<h2 class="title">Welcome</h2>

                {{-- email --}}
           	    <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>email</h5>
                        {{-- <label for="email">email</label> --}}
                        <input type="email" id="email" name="email" class="input @error('email') is-invalid @enderror" autofocus required value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
           		</div>

                {{-- email --}}
           		<div class="input-div pass">
           		   <div class="i">
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
                        {{-- <label for="password">Password</label> --}}
           		    	<input type="password" id="password" name="password" class="input" required>
            	   </div>
            	</div>
            	<a href="#">Lupa Password?</a>
            	<input type="submit" class="btn btn-secondary" value="Login">
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
