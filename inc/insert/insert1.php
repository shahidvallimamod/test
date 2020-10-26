<?php

function insert($table,$amounts,$values){
	
	$servername='localhost';

$username='root';

$password='';

$dbname='data';

$conn=new PDO('mysql:host=' .$servername. ';dbname=' .$dbname, $username, $password);
	
$sql = "insert into $table";
	
	$count1=count($amounts);
	
	$sq='';
	
	for($i=1 ; $i<=$count1 ; $i++){
		
		$sq .=" {$amounts[$i-1]} ";
		
		if($i<$count1){
			
			$sq .=" , ";
			
		}
		
	}
	
	$sql .=" ($sq) " ;
	
	$sql .=' values ';
	
	$count2=count($values);
	
	$s='';
	
	
	
	for($j=1 ; $j<=$count2 ; $j++){
		
		$s .=" '{$values[$j-1]}' ";
		
		
		
		if($j<$count2){
			
			$s .=" , ";
		
		
		
	}
	
	}
	
	$sql .=" ($s) ";
	
	
	$stmt = $conn->prepare($sql);
	
	
	$stmt->execute();
	
	
	
	
}



?>