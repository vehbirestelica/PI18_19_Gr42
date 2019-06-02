<?php
if(isset($_COOKIE['user'])){
    setcookie("user","",time()-3600);//expiration data-1h=3600s
    //deleting a cookie
    echo "Cookie Deleted successfully";
}
?>
<br/><br/>
Go to  Cookie Display Page <a href="display.php">Click&raquo; here</a><br/>
Go to Cookie Set Page<a href="cookies.php">Click here&raquo;</a>
