<?php

	class Pagination {

		var $data;

		function Paginate($values, $per_page){

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
				$numbers[1]='YouTube, ';
				$numbers[2]='Twitter, ';
				$numbers[3]='GitHub.';
				$numbers[0]='Fb, ';
			}
			return $numbers;
		}
		function fetchResult() {

			$resultValues = $this->data;
			return $resultValues;
		}
	}
	$pag = new Pagination();
	$data=array("Heey", "Hello", "Watsupp", "Hi");
	$numbers=($pag->Paginate($data,1));

	$result=$pag->fetchResult();

	foreach($result as $r) {

		echo '<div>'.$r.'</div>';

	}

	foreach ($numbers as $num ) {
		echo '<a href="OOP2.php?page='.$num.'">'.$num.'</a>';
	}
?>