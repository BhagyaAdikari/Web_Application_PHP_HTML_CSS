<!--IT23171992 J K C T Jayawardhana-->

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Login</title>

	<style>

			body{
                width: 100%;
                height: 100vh;
                background-size: cover;
                background-position: center;
                font-family:Arial;
            }

			*{
				margin:0;
			}

            .nav h1{
                font-size:10px;
                padding: 20px;
                padding-left: 60px;
                padding-right:800px;
                color:#ce7272;
            }



            .container{
				background-color: #daa30d;
				border-style:none;
				border-radius:10px;
				padding: 50px 40px;
                margin-top:100px;
                margin-bottom:50px;
				margin:auto;
                width:20%;

                
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
                font-size:30px;
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
                margin-bottom:8px;
			}

            .form-group input{
                width:270px;
                height:36px;
                border-style:none;
                font-size:16px;
                border-radius:5px;
                padding:5px 10px;
                margin-bottom:8px;
            }

            .container button{
                width:200px;
                height:36px;
                border-style:none;
                font-size:16px;
                border-radius:5px;
                padding:5px 10px;
                margin-bottom:5px;
                margin:auto;
                margin-top:20px;
                color:grey;
            }


            .container p{
                font-size:16px;
                font-style:none;
                margin-top:16px;
            }

            .container a{
                list-style-type: none;
                color:#ce7272;
            }

            .userpic{
                margin:auto;
                text-align:center;
                justify-content:center;
                margin:20px;
            }

	</style>

</head>


<body>


		<div class="container">
            <img id="userpic" src="images/new-logo-white.png" alt="" width="300px" align=center;>
			<h2 align=left;> Admin Login</h2>
			<form action="checkAdminCredentials.php" method="POST">

				<div class = "form-group">
					<!-- <label for="username">Username</label> -->
					<input type="text" class="form-control" id ="username" name="username" required placeholder="Username">
				</div>

				<div class = "form-group">
					<!-- <label for="password">Password</label> -->
					<input type="password" class="form-control" id ="password" name="password" required placeholder="Password">
				</div>

				<button type="submit" class="btn btn-primary">Sign in</button>
                <button type="submit" class="btn btn-primary"><a href="adminSignUp.php">Sign Up</a></button>
				
			</form>

			
		</div>
</body>


</html>