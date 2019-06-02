<?php
if (isset($_POST['submit']))
{
    
    setcookie("user",$_POST['username'],time()+3600);
    //user-eshte variabel e cookies(name) qe tragon se cookie do te fshihet pas nje ore(koha+3600 sekonda)
    //mundemi me perdor kohen sa dojme na,per nje muaj pershembull
    
}
    ?>
<html>
<body>
<h3>Set New PHP Cookie</h3>
<form action="" method="post">
    Enter Username:
    <input name="username" type="text" size="10"/><br/>
    <input name="submit" type="submit" value="Submit" /><br />
    </form><br/>
    Go to display Cookie Page <a href="display.php">Click here&raquo;</a>
</body>
</html>
