<?php
include "../dbconnect.php";
include "a.html";

?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <!--BOOTSTRAP-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!--BOOTSTRAP-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>
  <br><br>  <br><h3>BLOGS</h3><br>
  <div class="container">
 <?php $sql = "SELECT * FROM `blogs`" ;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo '<b>'.ucwords($row["blogname"]).'</b><div style="text-align:right"> (by '.$row["user_name"].')</div><div style="text-align:right"><small>'.$row["time"].'</small></div>';
echo '<div class="col"><hr>'.$row["content"].'<hr></div><br>';
}}
?> 

</div>

</body>
</html>
<?php
include "footer.html";
?>