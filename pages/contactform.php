<?php include('form_process.php') ?>
<link rel="stylesheet" type="text/css" href="contactform.css">
<div class="container">
	<!-- PHP_SELF e therret faqen (form-process) vet duke u varur nga line 1 -->
<div class="success" style="font-size: 30px;">
<?php  
// Class Geeks 
class Hello { 
  public function sayhello() { 
     echo "Hello"; 
  } 
} 
  
// Trait forGeeks 
trait There { 
  public function sayThere() { 
     echo " There,<br/>"; 
  } 
} 
  
class Sample extends Hello { 
   use There; 
   public function HaveANiceDay() { 
      echo "Have a nice day :)"; 
  }  
} 
  
$test = new Sample(); 
$test->sayhello(); 
$test->sayThere(); 
$test->HaveANiceDay(); 
?> </div>
	<form id="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
		<h3>Quick Contact</h3>
		<h4>Contact us today, and get reply within 24 hours !</h4>
		<fieldset>
			<input type="text" placeholder="Your Name" tabindex="1" name=" name" value="<?= $name ?>" autofocus>
			<span class="error" ><?= $name_error ?></span>
		</fieldset>
		<fieldset>
			<input type="email" placeholder="Your Email Address"  tabindex="2" name="email" value="<?= $email ?>">
			<span class="error" ><?= $name_error ?></span>
		</fieldset>
		<fieldset>
			<input type="tel" placeholder="Your Phone Number" tabindex="3" name="phone" value="<?= $phone ?>">
			<span class="error" ><?= $phone_error ?></span>
		</fieldset>
		<fieldset>
			<input type="url" placeholder="Your Website starts with http://" tabindex="3" name="url" value="<?= $url ?>">
			<span class="error" ><?= $url_error ?></span>
		</fieldset>
		<fieldset>
			<textarea placeholder="Type Your Message Here..." tabindex="5" name="message" value="<?= $message ?>"></textarea>
		</fieldset>
		<fieldset>
			<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
		</fieldset>
		<div class="success"><?= $success; ?></div>
	</form>
</div>
<span>
<?php

	class Pagination {

	    function __construct() {
	        print "";
	    }
		var $data;
		public $msgg;

		function Paginate($values, $per_page){

			echo "\n\nYou can Find us on :";
			$total_values = count($values);
			
			if (isset($_GET['page']))
			{
				$current_page=$_GET['page'];
			}
			else {
				$current_page=1;
			}
			$counts=ceil($total_values/$per_page);
			$param1=($current_page-1)*$per_page;
			$this->data=array_slice($values,$param1,$per_page);

			for($x=1;$x<=$counts; $x++)
			{
				$numbers[]=$x;
				// $numbers[0]='Fb, ';
				// $numbers[1]='YouTube, ';
				// $numbers[2]='Twitter, ';
				// $numbers[3]='GitHub.';
			}
			return $numbers;
		}
		function fetchResult() {

			$resultValues = $this->data;
			return $resultValues;
		}
	}
	$pag = new Pagination();
	$data=array("Facebook", "YouTube", "Twitter", "GitHub");
	$numbers=($pag->Paginate($data,1));

	$result=$pag->fetchResult();
	foreach($result as $r) {

		echo '<div>'.$r.'</div>';
	} 
	foreach ($numbers as $num ) {
		echo '<a href="contactform.php?page='.$num.'">'.$num.'</a>';
	}
	    function __destruct() {
	       print " " . __CLASS__ . "\n";
	       $obj = new Pagination();
	}

?>
</span>
