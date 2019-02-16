<?php
 //session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Question paper generator</title>
  <link type="text/css" rel="stylesheet" href="StyleSheet1.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div id="top">
           <hr/>
    <h1 class="style2">
        <a href ="Index.php"><img src="2013_04_11 exam papers.jpg" alt="Question paper generator" align="left" 
            style="height: 60px; width: 10%;"/></a> 
        <strong>QUESTION PAPER GENERATOR</strong><br />
    </h1>
 </div>

<div id="conetnt" >   
    <div id = "menu">
    <hr />
   <?php
	 
  echo "<ul type='none'>";
  echo "<li> <a href='Index.php'>HOME</a></li>";
  echo "<li><a href='aboutus.php'>ABOUT US</a></li>";
   ?>
   <?php
    if(isset($_SESSION['currentuser']))
	{
    if($_SESSION['currentuser']=="admin@exam.com")
	{
    echo "<li> <a href='adminoptions.php'>ADMIN OPTIONS</a></li>";
    echo "<li> <a href='logout.php'>LOGOUT</a></li>";
    echo "<li> <a href='contact.php'>CONTACT</a></li>";
    echo "<li> Welcome ".$_SESSION['currentuser']." </li> ";
	}
	else
	{
	 echo "<li> <a href='logout.php'>LOGOUT</a></li>";
	 echo "<li> <a href='addpaperuser.php'>CREATE PAPER</a></li>";

     echo "<li> <a href='contact.php'>CONTACT</a></li>";
     echo "<li> Welcome ".$_SESSION['currentuser']."  </li> ";
	}
	}
	else 
	{
	echo "<li> <a href='login.php'>LOGIN</a></li>";
    echo "<li> <a href='contact.php'>CONTACT</a></li>";
	}
	?>
     </ul><hr />
</div></div>  
   <br/>
</body>
</html>