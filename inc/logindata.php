<?php
include"dbcon.php";
if(isset($_POST['login'])){
$user = filter_data($_POST['user']);
$pass = filter_data($_POST['pass']);
$sql ="SELECT * from admin WHERE  user='$user' AND pass='$pass'";
$run = mysqli_query($con,$sql);
$row = mysqli_num_rows($run);
if($row<1){
	?>
	<script type="text/javascript">
		alert("please enter right credential");
		window.open('login.php','_self');
	</script>
	<?php
}else{
	$data = mysqli_fetch_assoc($run);
	$id = $data['user'];

   session_start();
     $_SESSION['user'] = $data['user'];

     echo  htmlspecialchars($_SESSION['user']);
}
}
function filter_data($data){ // not for numeric!
 global $con;
 $safe_string = mysqli_real_escape_string($con, $data);
 return $safe_string;
}

?>
