<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
    <title>Add paper</title>
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
			<form action="selectquestion.php" method="POST">
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
		<table border="1" align ="center">
	<tr>
		<td colspan="2" align="center"><b>QUESTION PAPER DETAILS</b> </td>
	</tr>
	<tr>
		<td>Select the subject :</td>
		<td>
		<select name="subid">
			<option value="1">Mathematics</option>
			<option value="2">Computer Organisation</option>
			<option value="2">Object Oriented Programing Language</option>
			<option value="2">Web Courses</option>
			<option value="2">Professional Communication</option>
		</select>	
		</td>		
	</tr>	
		<tr>
		<td>Select the question type:</td>
		<td>
		<select name="qtype">
			<option value="tbq1word">One Word</option>
			<option value="tbqbrief">Brief</option>
			<option value="tbqqmcq">MCQ</option>
		</select>	
		</td>		
	</tr>
	
	<tr>
		<td>Enter total number of marks:</td>
		<td><input type="text" name="txtmarks"/></td>
	</tr>
	<tr>
		<td>Enter total number of questions:</td>
		<td><input type="text" name="txtquestion"/></td>
	</tr>		
	<tr>
		<td>Enter the time of examination:</td>
		<td>    <div class="demo">
                <p><input id="basicExample" name="txttime" type="text" class="time" /></p>
            </div>

            <script>
                $(function() {
                    $('#basicExample').timepicker();
                });
            </script>
	</td>
	</tr>
	<tr>
		<td>Enter the date of examination:</td>
		<td><input type="date" name="edate"/></td>
	</tr>
	<tr>
	<td colspan="2" align="center"><input type="submit"value="Select questions"/></td>
	</tr>

</div>
</table>
<hr>
</form>
</div>
</body>
</html>
