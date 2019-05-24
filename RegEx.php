<?php
   echo "<strong><h3>'PREG_SPLIT FUNCTION'</strong></h3><br>";
   $ip = "192.168.255.001";
   echo "This is an <strong>IP Address</strong> ".$ip;
   
   echo "<br><br>";
   $iparray = preg_split("/\./", $ip);
   echo "This is a 'preg_split' function used in that <strong> IP Address </strong> <br> ";
   print "$iparray[0] <br />";
   print "$iparray[1] <br />" ;
   print "$iparray[2] <br />"  ;
   print "$iparray[3] <br />"  ;

   // $copy_date = "Copyright 1999";
   // $copy_date = preg_replace("([0-9]+)", "2000", $copy_date);
   
   // print $copy_date;

   echo "<br><br><h3><strong>'PREG_MATCH FUNCTION'</strong> </h3><br>";

   	$line = "aAbBcC-dD_-/\}.23{-}eEfFgGhHiIjJkK./023][e2dGGE00.1333,2334";
    print $line;

   if (preg_match("/[a-zA-Z0-9-_\/\\}.\}{\]\[\,]/", $line, $match)) :

      print "<br>Match found!";
      endif;

    echo "<br><br><h3><strong>'PREG_REPLACE'</strong></h3><br>";
    $line = "a1A012bBcC0-dD_-/\}.23{-}eEfF12g0GhHi99IjJ0kK./023][e2dGGE00.1333,2334";
    $replaced_line=preg_replace("/\d/", "*", $line);
    print $line;
    echo "<br>We'll replace every digit with a '*' symbol. <br>";
    print $replaced_line;

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<style type="text/css">
h3 {
	position: block;
}
</style>
</body>
</html>