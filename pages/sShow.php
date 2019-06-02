<?php
session_start();
//$_SESSION["email"]="xxx@xx.com";
//unset($_SESSION["email"]); 
if(isset($_SESSION["email"]))
{
echo "Email=".$_SESSION["email"];
}
else
{
    echo"Session variable does not exist";
}


?>
<html>
<head></head>
<body>
    <form method="post">
        <input type="submit" name="btnsubmit" value="Refresh">
    </form>
    </body>


</html>
