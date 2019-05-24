<!DOCTYPE html>
<html>
<head>
    <style>
    
        #teksti{
            background-color:#d9d9d9;
            border-radius: 20px 20px 20px 20px;
        }
        body{
            background-image: url("images/contact.jpg");
            background-position: center;
        }
        .kontakti{
            color: #333333;
        }
         b {
        color: red;
        font-size: 11.5px;
       }
      
    </style>
<title>Contact us!</title>
<script>
function goBack() {
    window.history.back()
}
</script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body><br>
<button id="teksti"onclick="goBack()">&laquo <i class="fas fa-home"> Home </i></button>
<form method="post" action="">
    <br>
    <div class="kontakti">
<fieldset><legend>Contact Us!</legend>
<table>
<tr>
<td colspan="2">
<p><label>Subject :</label>
<input id="teksti"type="text" name="subject" size="90"/ >    
</p>
    <p><label>Feedback :</label><br/>
<textarea id="teksti" name="Feedback" rows="9" cols="100" size="200"></textarea>    
</p>
    <hr/>
<p><label>Your Name :</label>
<input id="teksti"type="text" name="client" placeholder="Your name..."/>    
<?php

extract($_POST);
if(isset($submit))
{
    $pattern="/^[A-Z]/";
    if(preg_match($pattern, $client))
    {
        echo " ";
    }
    else {
        echo "Your name must start with a capital letter ! ";
    }
}
?>
</p>
<p>
<label>Your Age :</label>
<input id="teksti"type="radio" name="age" value="<18"/> &lt;18
<input id="teksti"type="radio" name="age" value=">18"/> &gt;18
<input id="teksti"type="radio" name="age" value=">45"/> &gt;45
</p>
<p>
<label>Continent :</label>
<select id="teksti"name="continent">
<option>Choose your continent :</option>   
<option>Africa</option>
<option>Asia</option>    
<option>Australia</option>    
<option selected="selected">Europe</option>    
<option>North America</option>    
<option>South America</option>  
</select>
</p>
<label>E-mail : </label>
<input id="teksti"type="email" name="email" placeholder="e-mail"/>
</select>
<?php

extract($_POST);
if(isset($submit))
{
    $pattern3="/[a-zA-Z0-9.-]+@[a-zA-Z0-9]+\.(net|com|edu)/";
    if(preg_match($pattern3, $email))
    {
        echo " Your Email format is correct. ";
    }
    else {
        echo "Your Email Format is wrong. It must have a <big>.net, .com, .edu</big> domain ! ";
    }

}

?>

</p>
<P><label>Date :</label>
<input id="teksti"type="" name="date"/>   
<?php

extract($_POST);
if(isset($submit))
{
    $pattern5="/^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$/";
    if(preg_match($pattern5, $date))
    {
        echo " Your Date format is correct. ";
    }
    else {
        echo "Your Date Format is wrong !It must be 'dd/mm/yyyy'";
    }

}

?> 
</P>
<p>
<label>Time :</label>
<input id="teksti"type="time" name="time" />
</p>
<p>
<label>Phone Number :</label>
<input id="teksti" type="phone" name="phonenumber" />
<?php extract($_POST);
if(isset($submit))
{    $pattern2="/(04)\d[-.]\d\d\d[-.]\d\d\d/";

    if(preg_match($pattern2,$phonenumber))
    {
        echo "Your Phone Format is correct !";
    }
    else
    {
        echo "Phone Number format is wrong !";
    } 
}
?>
</p>
<P><label>Rate our site :</label>
<input id="teksti"type="number" name="rate" min="1" max="10"/>
<?php

extract($_POST);
if(isset($submit))
{
    $pattern4="/{0-10}/";
    if(preg_match($pattern4, $rate))
    {
        echo " Thank you for your fedback :)";
    }
    else {
        echo "<b> * This is a required field !</b>";
    }
}
?>
</P>
<input id="teksti" name="submit"  type="submit" value="Submit"/>
<input id="teksti" type="reset"  value="Reset"/>
</td>
</tr>      
</table>   
</fieldset>   
</div> 
</form>
    <?php 
    $copyright = "Copyright 1999";
    $copyright = preg_replace("/([0-9]+)/", "2000", $copyright);

    print $copyright;
    ?>
</body>
</html>
