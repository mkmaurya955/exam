<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
    <title>users page</title>
	<link rel="stylesheet" href="1.css" type="text/css">
		
		<script src="jquery-2.0.3.js">

		</script>

</head>
	<body>

<div class="container">
			<?php	
			include ('header.php');
			?> 
			<form action="briefinsert.php" method="POST">
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
			<table border="2">

<tr>
		<td>Select the subject :</td>
		<td>
		<select name="subid">
			<option value="1">Mathematics</option>
			<option value="2">Computer Organisation</option>
			<option value="3">Object Oriented Programing Language</option>
			<option value="4">Web Courses</option>
			<option value="5">Professional Communication</option>
		</select>	
		</td>		
	</tr>	

<tr>
<td>Enter the brief question :</td>
<td><input type="text" size="100" name="txtquestion"/></td>

</tr>
<tr>
<td>Enter the prefered answer :</td>
<td><input type="text" size="100" name="txtanswer"/></td>


</table>
<hr>
<input class="btn btn-primary" type="submit" />


<hr>
</div>

</body>
</html>
