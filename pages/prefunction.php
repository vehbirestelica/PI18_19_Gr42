<html>
<head>
    <title>Built functions</title></head>
<body>
    <?php
    $name= ('Computer Engineering Departament');
    echo strlen($name);
    echo "<br />";
    echo str_word_count($name);
    echo "<br />";
    echo str_replace("Electronics","Engineering","Computer Engineering Departament");
    echo "<br />";
    echo ucwords($name); 
    echo "<br />";
    echo strtoupper($name);
    echo "<br />";
    echo strtolower("Computer Engineering"); 
       
    ?> 
    </body>
</html>
