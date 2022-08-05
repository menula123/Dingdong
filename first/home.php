<?php 

session_start();
$email = $_POST['email'];
$password = $_POST['password'];

$_SESSION['email'] = $email;
$_SESSION['password'] = $password;

if (!isset($_SESSION['email'])) {
	header("Location: index.php");
}


?>







 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DingDong | EveryWhere For Everyone</title>
	<link rel="icon" type="img" href="https://www.seekpng.com/png/detail/67-678785_open-subscribe-bell-icon-png.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
   

<style type="text/css">
 .masthead {

  min-height: 500px;
  background-image: url('');
  background-size:cover;
  position: absolute;
  background-repeat: no-repeat;
  background-color: white;
  width: 100%;
  opacity:;
  left: 0;
  color: rgb(255, 255, 255);
  font-weight: bolder;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-size:30px;
 }
</style>

    <div class="container-fluid"style="position: fixed;">
<div class="row" >
        <nav class="navbar navbar-expand-sm bg-light">
            <div class="container-fluid">
                <img class="nav-item" onclick="location.href='index.html'"
                    src="https://www.seekpng.com/png/detail/67-678785_open-subscribe-bell-icon-png.png" style="width: 70px;height: 60px;">
                <button class="navbar-toggler text-light bg-light" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"
                    style="background-color: rgb(142, 139, 135);">
                    <span class="navbar-toggler-icon bg-light "></span>
                </button>
                <div class="collapse navbar-collapse navbar-text-black" id="navbarSupportedContent"
                    style="margin-left: 50px;color: black;">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html"
                                style="color: black;">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active sticky-lg-right" aria-current="page" href="about.html"
                                style="color: black;">About</a>
                        </li>
<br>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                     
                            <button class="btn bg-danger sticky-lg-right " onclick="location.href='logout.php'">Logout</button>                    
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </div>


                        <li class="nav-item dropdown" style="position: absolute;top: 10px;right: 100px;">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" style="color: black;">
                                <?php   
                                   echo "$email";
                                ?>
                            </a>

                        </li>
<br>
<br>
<br>
<center>
<div class="container" >
    <h1>dingDONG</h1>

</center>

<br>
<br>
<br>
<br>
<br>

<center>
<div class="container">

   <form method="post" action="account.php">
   <input required class="form-control" id="input" name="input" type="text" placeholder="Post A Comment">
   <br>
   <button type="submit" >Post</button>
</form>
</div>
</center>

<br>
<br>
<br>
<br>






<br>
<br>
<br>
<br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
</body>
</html>