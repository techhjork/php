<?php
$con = mysqli_connect('localhost','root','','sms2');
if(!$con){
 ?>
<script>
 alert("Some Server Side Error");
</script>
 <?php
}
?>