<!--IT23171992 J K C T Jayawardhana-->

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Login and registration</title>

	<style>

			body{
                width: 100%;
                height: 100vh;
               
                background-size: cover;
                background-position: center;
            }

			*{
				margin:0;
			}



			.hero {
				display:flex;
				align-items:center;
				justify-content:center;
				width:100%;
			}

			.left {
				display:flex;
				flex-direction:column;
				align-items:center;
				justify-content:center;
				width:50%
			}

			.left h1{
				margin:190px;
			}

			.right {
				display:flex;
				align-items:center;
				justify-content:center;
				width:50%;
				margin:auto;
			}

			.container{
				background-color:#daa30d;
				border-style:none;
				border-radius:10px;
				padding: 50px 85px;
				margin:20px ;
			}


			.container h2,button,p{
				width:100%;
				padding:auto;
				align-items: center;
				justify-content:center;
				display:flex;
				flex-direction:column;
				color:white;
			}

			.container h2{
                font-size:40px;
                font-weight:800;
                margin-bottom:20px;
            }

			.form-group{
				width:100%;
				padding:auto;
				align-items: center;
				justify-content:center;
				display:flex;
				flex-direction:column;
				color:white;
			}

			.form-group input{
                width:280px;
                height:25px;
                border-style:none;
                font-size:14px;
                border-radius:5px;
                padding:10px 10px;
                margin-bottom:8px;
            }

            .container button{
                width:190px;
                height:36px;
                border-style:none;
                font-size:14px;
                border-radius:5px;
                padding:5px 10px;
                margin-bottom:5px;
                margin:auto;
                margin-top:20px;
                color:grey;
            }


            .container p{
                font-size:15px;
                font-style:none;
                margin-top:16px;
            }

            .container a{
                list-style-type: none;
                color:#ce7272;
            }

			.dorp{
				width:200px;
				padding:auto;
				align-items: center;
				justify-content:center;
				display:flex;
				color:white;
				font-size:16px;
			}

			.dorp input{
				
                height:25px;
                border-style:none;
                font-size:16px;
                border-radius:5px;
                padding:10px 10px;
                margin-bottom:8px;
			}

			#logo{
				text-align:center;
				margin:auto;
				justify-content:center;
			}

	</style>

</head>

<script src="js/adminSignUp.js"></script>


<body>

			<div class="right">
				<div class="container">
					<img id="logo" src="images/new-logo-white.png" width="200px">
					<h2>Employee Register</h2>
					<form name="myForm" action="insertEmployeeDetails.php" method="POST" onsubmit="return validateAdminSignUp()">

						<div class = "form-group">
							<label>User Name</label><br>
							<input type="text" class="form-control" id ="username" name="username" required placeholder="username">
							<p id="usernameError"></p>
						</div><br>
						
						<div class = "form-group">
							<label>Email</label><br>
							<input type="text" class="form-control" id ="email" name="email" required placeholder="Last Name">
							<p id="emailError"></p>
						</div><br>

						<div class = "form-group">
							<label>Mobile</label><br>
							<input type="text" class="form-control" id ="mobile" name="mobile" required placeholder="Contact Number">
							<p id="mobileError"></p>
						</div><br>

						<div class = "form-group">
							<label>Password</label><br>
							<input type="password" class="form-control" id ="password" name="password" required placeholder="Password">
							<p id="passwordError"></p>
						</div><br>

						<div class = "form-group">
							<label>Repeat password</label><br>
							<input type="password" class="form-control" id ="repeatpassword" name="repeatpassword" required placeholder="Repeat password">
							<p id="RePasswordError"></p>
						</div><br>

						</lable>Do you agree with terms and conditions? </lable><input type="checkbox" id="terms" onclick="enableSignUpBtn()">
						

						<button type="submit" class="btn btn-primary" id="signUpBtn"  disabled>Sign Up</button>
						
					</form>
					

					<button>Allready have an account ? <a href="UserLogin.php">Login</button>
				</div>
			</div>
		</div>
		

		

</body>

<?php include 'footer.php' ?>


</html>