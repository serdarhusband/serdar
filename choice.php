<html>

<?php
session_start();
include("sorgu.php");
if(!empty ($array)){
	gorulenSorularaEkle($array['No']);
?>
<?php echo $array['Soru'],"<br>" ;  ?>

<a href="siklar.php?answer=A">A</a>	<?php echo $x[2],"<br>" ;?>
 
<a href="siklar.php?answer=B">B</a>	<?php echo $x[3],"<br>" ;  ?>

<a href="siklar.php?answer=C">C</a>	<?php echo $x[4],"<br>" ;  ?>

<a href="siklar.php?answer=D">D</a>	<?php echo $x[5],"<br>" ;  ?>

<a href="siklar.php?answer=E">E</a>	<?php echo $x[6],"<br>" ;  

}
else{
	
	echo '<br> bravo soruları bitirdiniiiiz :) ';

}
?>



<html>




