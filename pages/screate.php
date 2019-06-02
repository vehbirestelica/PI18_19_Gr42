<?php
session_start();
if(isset($_POST["btnsubmit"]))
{
    $_SESSION["email"]=$_POST["txtEmail"];
    header("location:sShow.php");
}

?>
<html>
<head></head>
<body>
    <form method="post">Enter Email<br>
    <input type="text" name="txtEmail"><br><br>
        <input type="submit" name="btnsubmit" value="Create Session">
    </form>
    </body>


</html>
