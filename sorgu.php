<?php
	
include("connect.php");
$sql="SELECT * FROM soru ORDER BY RAND() LIMIT 1" ;

if (!empty($_SESSION["gorulenSorular"])){
		
	$sql="SELECT * FROM soru where No not in (" . implode (", ", $_SESSION["gorulenSorular"]) . " ) ORDER BY RAND() LIMIT 1" ;
	//echo $sql;
	//echo '<br>';	
}
//echo $sql;
$result=mysqli_query($baglan,$sql);
	
	
	
	
if(mysqli_num_rows($result) > 0) {

	 if($x = mysqli_fetch_row($result)) {

		$array = array(
				'No' => $x[0],
				'Soru' => $x[1],
				'A' => $x[2],
				'B' => $x[3],
				'C' => $x[4],
				'D' => $x[5],
				'E' => $x[6],
				'Soru Puanı' => $x[7],
				'Cevap' => $x[8]
			);

	 }
}
	
	
			
mysqli_close($baglan);

function gorulenSorularaEkle($soruNo){
	$gSorular=array();
	if (!empty($_SESSION["gorulenSorular"])){
		$gSorular = $_SESSION["gorulenSorular"];
	}
	if(! $gSorular){
		$gSorular = array($soruNo);
	}
	else{
		array_push($gSorular,$soruNo);
		
	}
	$_SESSION["gorulenSorular"] = $gSorular;
	
		
	
}
?>