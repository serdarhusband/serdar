<?php
 
 $baglan=mysqli_connect("localhost","root",""); // Kullanıcı adı ve şifreniz

	if(!$baglan){
	die('Bağlantı Hatası:' . mysqli_error()); //Doğru değilse ekrana php hata mesajı yazdır
}
	$vt_sec=mysqli_select_db($baglan,"sorbak");//veritabanını seç
	if(!$vt_sec){
	die("Veritabanı Hatası:".mysql_error()); //Doğru değilse ekrana php hata mesajı yazdır
	return $baglan;
}
	
?>