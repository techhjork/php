
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">	
</head>
<body>
<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="d-flex flex-column text-center">
  <a class="navbar-brand" href="#">SMS</a>
  <small class="text-muted">(STUDENT MANAGEMENT SYSTEM)</small>
 </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class=" ml-auto navbar-nav">
      <a class="nav-item nav-link active" href="#">Home</a>
      <a class="nav-item nav-link" href="#">Features</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
      <?php
       session_start();
       if(!isset($_SESSION['user'])):?>
       <a class="nav-item nav-link btn btn-success text-white" href="login.php">LOGIN</a>
       <?php else: ?>
        <a class="nav-item nav-link btn btn-info text-white" href="logout.php">LOGOUT</a>
      <?php endif; ?>
    </div>
  </div>
</nav>
</div>
