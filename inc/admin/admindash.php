<?php
include '../header.php';
include '../dbcon.php';


?>
<div class="container bg-dark ">
<div class="text-center text-white">
<h1> Student Dashboard	</h1><a class="btn btn-primary align-right" href="../logout.php">Logout</a>
</div>
<div class="bg-info">
<table class="table text-white">
  <thead class="text-center text-white">
    <tr class="text-center text-white">
      <th scope="col">#</th>
      <th scope="col">Wt u want</th>
    </tr>
  </thead>
  <tbody class="text-center text-white">
    <tr>
      <th scope="row">1</th>
      <td><a href="addstud.php" class="text-center text-white">insert student</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><a href="updatestud.php" class="text-center text-white">update student</td>
    </tr>
  </tbody>
</table>
</div>
</div>