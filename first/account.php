<?php 

session_start();

$inp = $_POST['input'];
$getinp = $_SESSION['input'] = $inp;


$_SESSION['email'];

 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<style>
	
* {
	font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

</style>


<body>

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
                            <a class="nav-link active" aria-current="page" href="home.php"
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

 
   <center><h1>Your Profile Details</h1></center>
   <hr>
<br>
<br>

 <div class="card">
  <div class="card-header">
    <?php 

echo $_SESSION['email'];

    ?>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p><?php echo "$getinp";  ?></p>
      <footer class="blockquote-footer"> <cite title="Source Title"><?php $date=date_create("2013-03-15");
date_add($date,date_interval_create_from_date_string("40 days"));
echo date_format($date,"Y-m-d");?></cite></footer>
    </blockquote>
  </div>
</div>
   	<h2>



    	
    </h2>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
</body>
</html>