<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
    <title>Question paper page</title>
	<link rel="stylesheet" href="1.css" type="text/css">
		
		<script src="jquery-2.0.3.js">

		</script>
	


</head>
	<body>
<div class="container">
			<?php	
			include ('header.php');
			?> 
			<form action="mcqinsert.php" method="POST">
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
include ('connection.php');
$subid=$_SESSION['sub_id'];
if($subid=='1')
{
$subject="Maths";
}
else
{
$subject="English";
}
$qtype=$_POST["qtype"];
$noofquestions=$_POST["noofquestions"];
$totmarks=$_POST["totmarks"];
$time=$_POST["time"];
$date=$_POST["date"];

echo "<table  align='center' width='800'>";
echo"<tr>";
echo"<td>Subject :$subject</td>";

echo"<td colspan='2'></td>";

echo"<td align='right'>Marks : $totmarks</td>";
 
echo"</tr>";

echo"<tr>";
echo"<td>&nbsp;</td>";

echo"<td colspan='2'></td>";
echo"<td align='right'>Date :$date</td>";
 
echo"</tr>";
echo"<tr>";
echo"<td>&nbsp;</td>";

echo"<td colspan='2'></td>";
echo"<td align='right'>Time :$time</td>";
 
echo"</tr>";

echo"<tr>";
echo"<td>&nbsp;</td>";
echo"<td colspan='2'>&nbsp;</td>"; 
echo"<td>&nbsp;</td>"; 

echo"</tr>";


if ($qtype=="tbq1word")
{

$result=mysqli_query($conn,"SELECT * from tbq1word where subid=$subid");
echo "</table>";
echo"<table border='0' align='center' width='800'>";
while($row = mysqli_fetch_assoc($result))
{
$num = $row['wordid'];
if(isset($_REQUEST[$num]))
{
echo"<tr>";
echo"<td>";
$val = $_REQUEST[$num];
echo $val;
echo"</td>";
echo"</tr>";
}
}
echo "</table >";
}
else if ($qtype="tbqbrief")
{

$result=mysqli_query($conn,"SELECT * from tbqbrief where subid=$subid");
echo "</table>";
echo"<table border='0' align='center' width='800'>";
while($row = mysqli_fetch_assoc($result))
{
$num = $row['bid'];
if(isset($_REQUEST[$num]))
{
echo"<tr>";
echo"<td>";
$val = $_REQUEST[$num];
echo $val;
echo"</td>";
echo"</tr>";
}
}

echo "</table >";

}
else
{

$result=mysqli_query($conn,"SELECT * from tbqmcw where subid=$subid");
echo "</table>";
echo"<table border='0' align='center' width='800'>";
while($row = mysqli_fetch_assoc($result))
{
$num = $row['mcqid'];
if(isset($_REQUEST[$num]))
{
echo"<tr>";
echo"<td>";
$val = $_REQUEST[$num];
echo $val;
echo"</td>";
echo"</tr>";
}
}

echo "</table >";

}






?>
<hr>
<button class="btn btn-primary" onclick="myFunction()">Print this page</button>

<script>
function myFunction()
{
window.print();
}
</script>
<hr>
</div>
</body>

</html>