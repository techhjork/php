<?php
include"header.php";

?>
<div class="container">
	<?php
	$_SESSION['user'] ;
	print_r($_SESSION);
	?>
</div>

<div class="container my-5 col-4">
<h1>LOGIN</h1>
<form class="align-center my-5" method="POST" action="logindata.php">
  <div class="form-group">
    <label for="exampleInputEmail1">username</label>
    <input type="text" name="user" class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">password</label>
    <input type="text" name="pass" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" name="login" class="btn btn-primary">Login</button>
</form>
</div>

<?php
include"footer.php";
?>