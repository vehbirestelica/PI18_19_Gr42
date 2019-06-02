 <?php
//Loops

echo 1;
echo 2;
echo 3;
echo "<br />";
echo "FOR LOOP";
echo "<br />";
for($i=0; $i<=10;  $i++)
{
    echo $i . ' <br />';
}
echo "<br />";
echo "WHILE LOOP";
echo "<br />";
$i=0;
while($i<= 10)
{
    echo $i . '<br />';
    
    ++$i;
}

echo "<br />";

$food = array(
    'Manchester United',
    'Barcelona',
    'AC Milan',
    'Liverpool',
    'Real Madrid',
    'Real Madrid' => array(
    
                    
                    'Marcelo','Ramos',
                    'Pepe'
    )

);
    


foreach($food as $key => $value)
    
{
    if (is_array($value))
        {
            foreach($value as $k => $a)
            {
                echo ' &nbsp; &nbsp;' .$k . ' '.$a .'<br />';
            }
        }
    else{
     echo $key . ' ' .$value . '<br />';
}
}
?>
