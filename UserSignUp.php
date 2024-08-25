<!--IT23190320 W A H N Deshani-->

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
                background:linear-gradient(to top, rgba(0,0,0,0.7)50%, rgba(0,0,0,0.7)50%), url(./web/1.jpg);
                background-size: cover;
                background-position: center;
            }

			*{
				margin:0;
			}

            .nav h1{
                font-size:50px;
                padding: 20px;
                padding-left: 60px;
                padding-right:800px;
                color:#ce7272;
            }

            ul {
                display: flex;
                align-items: center;
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                
            }

            li {
                float: right;
            }

            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size:25px;
            }

            

            li a:hover {
                color:#ce7272;
                transition: 0.3s ease-in-out;
                margin-bottom:5px;
            }

			.hero {
				display:flex;
				align-items:center;
				justify-content:center;
				width:100%
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
				background-color:grey;
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



			footer{
                display:flex;
                flex-direction:column;
                align-items:center;
                justify-content:center;
                font-family:Arial;
                color:white;
                margin-top:-35px;
				margin-top:100px;
            }

            footer h2{
                font-size:40px;
            }

            footer h4{
                font-size:20px;
                margin-top:20px;
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

	</style>

</head>


<body>

			<div class="right">
				<div class="container">
					<h2>Register</h2>
					<form action="insertUserDetails.php" method="POST">
						<div class = "form-group">
							<!-- <label for="firstname">First Name</label> -->
							<input type="text" class="form-control" id ="firstname" name="firstname" required placeholder="First Name">
						</div>
						
						<div class = "form-group">
							<!-- <label for="lastname">Last Name</label> -->
							<input type="text" class="form-control" id ="lastname" name="lastname" required placeholder="Last Name">
						</div>

						<div class = "form-group">
							<!-- <label for="lastname">Mobile</label> -->
							<input type="text" class="form-control" id ="mobile" name="mobile" required placeholder="Contact Number">
						</div>

						<div class = "dorp">
							<input type="radio" class="dorp" id ="gender" name="gender" required value="m">Male
							<input type="radio" class="dorp" id ="gender" name="gender" required value="f">Female
						</div>

						<div class = "form-group">
							<!-- <label for="username">Username</label> -->
							<input type="text" class="form-control" id ="username" name="username" required placeholder="Username">
						</div>

						<div class = "form-group">
							<!-- <label for="email">Email</label> -->
							<input type="text" class="form-control" id ="email" name="email" required placeholder="Email">
						</div>

						<div class = "form-group">
							<!-- <label for="email">Image</label> -->
							Upload your photo : <input type="file" class="profpic" id ="profpic" name="profpic" required >
						</div>

						<div class = "form-group">
							<!-- <label for="password">Password</label> -->
							<input type="password" class="form-control" id ="password" name="password" required placeholder="Password">
						</div>

						<div class = "form-group">
							<!-- <label for="repeatpassword">Repeat password</label> -->
							<input type="password" class="form-control" id ="repeatpassword" name="repeatpassword" required placeholder="Repeat password">
						</div>

						<button type="submit" class="btn btn-primary">Sign Up</button>
						
					</form>

					<p>Allready have an account ? <a href="UserLogin.php">Login</p>
				</div>
			</div>
		</div>
		

		

</body>


</html>