<?php

function provjeriLogin($username, $password) {
    
    
        $xml = simplexml_load_file('users.xml'); 
        
        foreach ($xml->user as $user) {
            if ($user->username == $username && $user->password == $password) {
                return true; 
            }
        }
    	return false; 
} 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['lozinka'];
    
    if (provjeriLogin($username, $password)) {
        header("Location: stranica.php");
    } else {
        echo "<script> 
				alert('Neuspjesna prijava!')
			</script>";
    }
}
?>

<html>
<head>
<title>Login</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">	
	<link rel="stylesheet" href="style.css">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<nav class="navbar bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="F1.svg.png" alt="Bootstrap"  height="24">
    </a>
  </div>
</nav>

<form action="" method="post">
  <div class="col-md-3 login" >
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control form-control-sm" name="username" aria-describedby="emailHelp" required>
  </div>
  <div class="col-md-3 login">
    <label for="lozinka" class="form-label">Password</label>
    <input type="password" class="form-control form-control-sm" name="lozinka" required>
  </div>
  <div class="login dugme">
  	<button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

</body>
</html>
