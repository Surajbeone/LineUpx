<!doctype html>
<html>
<head>
	<title> Sign-up</title>
	<link rel="stylesheet" type="text/css" href="newlogin.css">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
</head>
<body>
<h2>#1: Recu</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form method="post" action="server.php">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<form action="server.php" method="post" >

				<script>  
                        function validateform(){  
                        var name=document.myform.name.value;  
                        var password=document.myform.password.value;  
                        var x=document.myform.email.value;  
                        var atposition=x.indexOf("@");  
                        var dotposition=x.lastIndexOf(".");  
                          
                        if (name==null || name==""){  
                          alert("Name can't be blank");  
                          return false;  
                        }
                        else if(password.length<6){  
                          alert("Password must be at least 6 characters long.");  
                          return false;  
                          }  
                        
                        if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
                              alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
                              return false;  
                              }  

                        }  
                        </script>  
                        
        <h3 class="text-center">Create your account</h3>
        <div class="form-group" onsubmit="return validateform()">
            <input class="form-control item" type="text" name="username" maxlength="15" minlength="4" pattern="^[a-zA-Z0-9_.-]*$" id="username" placeholder="Username"  required>
        </div>
        <div class="form-group">
            <input class="form-control item" type="password" name="password" minlength="6" id="password" placeholder="Password" required>
        </div>
        <div class="form-group">
            <input class="form-control item" type="email" name="email" id="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block create-account" type="submit" name="CreateAccount">Create Account</button>
           
        </div>
    </form>
    <form>
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="server.php" method="post">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" minlength="6" required />
			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		Created</i> by
		<a>Billion Bazaar</a>
	</p>
</footer>

<script>
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>


</body>
</html>