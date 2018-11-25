<html>
<head>
 <title>Delete</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Nunito:300" rel="stylesheet"> 
</head>
<body>

  <div class="pink">
    <p><img src="logo.png" style="width: 60"> Sport Center</p>
  </div>


  <div class="header">
  	<h2>Cancel Reservation</h2>
  </div>
	 
  <form method="post" action="delete2.php">
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
      
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Cancel Reservation</button>
  	</div>
  </form>
</body>
</html>