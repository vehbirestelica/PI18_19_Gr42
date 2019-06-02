<html>
<head>
    <title>Sortimet</title>
    </head>
<body>
    <?php
    
    $color=['A'=>'Black','B'=>'Green','C'=>'Red','D'=>'Yellow','E'=>'White'];
    
    echo "sort";
    
    echo "<pre>";
    print_r($color);
    
    sort($color);
    
    echo "<pre>";
    print_r($color);
    
    
    echo "<br />";
    
    $color=['A'=>'Black','B'=>'Green','C'=>'Red','D'=>'Yellow','E'=>'White'];
    
    echo "rsort";
    
    echo "<pre>";
    print_r($color);
    
    rsort($color);
    
    echo "<pre>";
    print_r($color);  
    
    echo "<br />";
    
    
    $color=['A'=>'Black','B'=>'Green','C'=>'Red','D'=>'Yellow','E'=>'White'];
    
    echo "ksort";
    
    echo "<pre>";
    print_r($color);
    
    ksort($color);
    
    echo "<pre>";
    print_r($color); 
    
    
     $color=['A'=>'Black','B'=>'Green','C'=>'Red','D'=>'Yellow','E'=>'White'];
    
    echo "krsort";
    
    echo "<pre>";
    print_r($color);
    
    krsort($color);
    
    echo "<pre>";
    print_r($color);  
    
    
    $color=['A'=>'Black','B'=>'Green','C'=>'Red','D'=>'Yellow','E'=>'White'];
    
    
    echo "asort";
    
    echo "<pre>";
    print_r($color);
    
    asort($color);
    
    echo "<pre>";
    print_r($color);  
    
    echo "arsort";
    
    $color=['A'=>'Black','B'=>'Green','C'=>'Red','D'=>'Yellow','E'=>'White'];
    
    echo "<pre>";
    print_r($color);
    
    arsort($color);
    
    echo "<pre>";
    print_r($color);  
    
    ?>
    
    </body>
</html>
