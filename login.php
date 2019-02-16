<html>
  <head>
    <title>Login Here!!</title>
    <style type="text/css">
      #logindiv
      {
        margin-left: 450px;
      }
    </style>
    <script type="text/javascript">
      function validateLogin()
      {
        var uname=document.forms[login][uname].value;
        if(email==null || password=='')
        {
          alert("Enter Username ");
          return false;
        }
      }
    </script>
  </head>
	<body>
    <div class="container">
      <?php include 'header.php';?>
		  <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
      <form name="login" action="login_process.php" method="post" class="leftdiv" onsubmit="return validateLogin()">
			<br/>
        <table border="0" align="center" width="400" style="background-color: silver; border-radius: 10px">
          <tr>
            <th style="padding: 20px;text-align: center;color: blue" colspan="2">Login Here</th>
          </tr>
          <tr>
            <td style="padding: 10px">Email:</td>
            <td style="padding: 10px"><input type="text" name="email"></td>
          </tr>
          <tr>
            <td style="padding: 10px">Password:</td>
            <td style="padding: 10px"><input type="password" name="password"></td>
          </tr>
          <tr>
            <td colspan="2" style="padding: 10px;text-align: center;"><input class="btn btn-primary" type="submit" value="Login" class="button"></div>
            </td>      
          </tr>
          <tr>
            <td colspan="2" style="padding: 10px;text-align: center;"><a href="contactadmin.php">Forgot Password?</a>&nbsp;|&nbsp;<a href="Signup.php">New User?</a></div>
            </td>
          </tr>
        </table>
      </form>
      <hr>
    </div>
	</body>
</html>