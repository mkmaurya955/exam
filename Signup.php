<!DOCTYPE html>
<html>
<head>
    <title>Sign up page</title>
</head>
<body>
    <div class="container">
    <?php
        include ('header.php');
        include ('connection.php');
    ?>
    <form action="signupscript.php" method="post">
        <h1 style="margin-top: -25px;color: blue;text-align: center;">SIGNUP FORM</h1>
        <hr/>
        <table border="1" width="600" align="center" style="background-color: silver">
            <tr>
                <th colspan="2">
                    <h4 style="text-align: center; padding: 20px">Personal Details:<br /></h4>
                </th>
            </tr>
            <tr>
                <td style="padding: 10px">First Name:</td>
                <td style="padding: 10px"><input name="Fname" id="Text1" type="text" />*</td>
            </tr>
            <tr>
                 <td style="padding: 10px">Last Name</td>
                 <td style="padding: 10px"><input name="Lname" id="Text2" type="text" /></td>
            </tr>
            <tr>
                <td style="padding: 10px">Contact number:</td>
                <td style="padding: 10px"><input name="contact" id="Text3" type="text" /></td>
            </tr>
            <tr>
                <td style="padding: 10px">Collage name:</td>
                <td style="padding: 10px"><input name="collg" id="Text4" type="text" /></td>
            </tr>
            <tr>
                <td style="padding: 10px">Board/university name:</td>
                <td style="padding: 10px"><input name="board" id="Text5" type="text" /></td>
            </tr>
            <tr>
                <td style="padding: 10px">Email address:</td>
                <td style="padding: 10px"><input name="email" id="Text6" type="text" /></td>
            </tr>
            <tr>
                <td style="padding: 10px">Password:</td>
                <td style="padding: 10px"><input name="passwd" id="Password1" type="password" />*</td>
            </tr>
            <tr>
                <td style="padding: 10px">Address:</td>
                <td style="padding: 10px"><textarea name="address" id="TextArea1" name="S1" rows="2"></textarea></td>
            </tr>
            <tr>
                <td style="padding: 10px">Country:</td>
                <td style="padding: 10px"><input name="country" id="Text7" type="text" /></td>
            </tr>
            <tr>
                <td style="padding: 10px">Description:</td>
                <td style="padding: 10px"><input name="desc" id="Text8" type="text" /></td>
            </tr>
            <tr>
                <td style="padding: 10px">User type:</td>
                <td style="padding: 10px"><input value="student" type="radio" name="type" />Student.&nbsp;
                    <input value="teacher" type="radio" name="type"/>Teacher.</td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 10px; text-align: center">
                    <input class="btn btn-primary" id="Submit1" type="submit" value="Submit" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input class="btn btn-primary" id="Reset1" type="reset" value="Reset" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input class="btn btn-primary" id="Button1" type="button" value="Cancel" /><br />
                </td>
            </tr>
            
        </table>
   

    
    <hr />
     </div>
   </form>
</div>
</body>
</html>
