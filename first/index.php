<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>


    <center><h1 class="text-center" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;color: darkorange;">dingDong</h1></center>
    <center><p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Everywhere For Everyone</p></center>

<br>
<br>
<br>
<br>


<div class="container">
<form action="home.php" method="post" >
  <div class="mb-3 container">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">

  </div>
  <div class="mb-3 container">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input required type="password" class="form-control" id="password" name="password">
  </div>
  <button type="submit" class="btn btn-primary container">Login</button>
</form>
</div>

     


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>