
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>CodePen - Login </title>
  <link rel="icon" type="image/png" href="images/icon.png"/>

  <link rel="stylesheet" href="css/reset.css">

  <link rel="stylesheet" href="css/index.css" media="screen" type="text/css" />

</head>

<body>

  <div class="wrap">
  <form action="index_in.php" method="POST" enctype="multipart/form-data">
		<div class="avatar">
      		<img src="images/icon-2.png">
		</div>
		<input type="text" placeholder="username" name="uname" required >
		<div class="bar">
			<i></i>
		</div>
		<input type="password" placeholder="password" name="pword" required>
		<a href="" class="forgot_link">forgot ?</a>
		<button>Sign in</button>
  </form>  
	</div>

    <a href="signup.php"><button  type="button" class="my-button span"><span>&#10010;</span></button></a> 

</body>
</html>