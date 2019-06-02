<?php
if(isset($_COOKIE['user'])){
    
    echo "WELCOME".$_COOKIE['user']."!";

}
else{
    echo "No Cookie Found";
}
?>
<br/><br/>
Go to Delete Cookie Page <a href="delete.php">Click here&raquo;</a><br/>
Go to Cookie Set Page<a href="cookies.php">Click here&raquo;</a>
