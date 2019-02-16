<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
    <title>users page</title>
		<link rel="stylesheet" href="1.css" type="text/css"/>
		  <script type="text/javascript" src="jquery.min.js"></script>
  <script type="text/javascript" src="jquery.timepicker.js"></script>
  <link rel="stylesheet" type="text/css" href="jquery.timepicker.css" />


</head>
	<body>
<div class="container">
			<?php	
			include ('header.php');
			?> 
			<form action="user_retrive.php" method="POST">
			<h3 style="text-align: center;color: blue;margin-top: -20px">Welcome to ADMIN DASHBORD</h3>
			<hr>

			<div class="row">
				<div class="col-sm-4"> 
					<div class="dropdown">
  						<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Users<span class="caret"></span></button>
  						<ul class="dropdown-menu">
    						<li><a href="users.php">Show Users</a></li>
    						<li><a href="delusers.php">Delete Users</a></li>
   						</ul>
					</div>
				</div>
	
				<div class="col-sm-4">
					<div class="dropdown">
  						<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Papers<span class="caret"></span></button>
  						<ul class="dropdown-menu">
    						<li><a href="papers.php">Show Papers</a></li>
    						<li><a href="addpaper.php">Add Paper</a></li>
   						</ul>
					</div>

				</div>
			</div>
			<hr>
		<?php
echo "<h4><u>List of current users..</u></h4>";
include ('connection.php');

$result=mysqli_query($conn,"Select * from tbuser");
$rows = mysqli_num_rows($result);
echo "<table border='1'><tr> <th>Fname</th> <th>Lname</th> <th>Contact</th><th>Collg</th><th>board</th><th>Email</th><th>Paswd</th><th>Address</th><th>Country</th><th>Desc</th><th>Type</th></tr>";
for ($j = 0 ; $j < $rows ; ++$j)
	{
		$row = mysqli_fetch_row($result); 
		echo "<tr>";   
		for ($k = 0 ; $k < 11 ; ++$k) 
		echo "<td>$row[$k]</td>"; 
		echo "</tr>"; 
	}
echo "</table>"; 
echo "<hr>";
$query = mysqli_query($conn,"SELECT uemail from tbuser"); 
echo "<h4>Please select the email to delete the user</h4>";
echo '<select name="Email">'; 

while ($row = mysqli_fetch_array($query)) {
   echo "<option>" .$row['uemail']. "</option>";
}

echo '</select>';

		 ?>

<input type = "submit" value="Delete user" name="deluser"/> 
<hr>
</div>
</div>

</form>
</body>
</html>
