<?php 
$host="localhost";
$usr="root";
$pwd="";
$db="voting";
$koneksi=mysqli_connect($host,$usr,$pwd,$db);
if (!$koneksi) {
	echo "Tidak terhubung database";
}
?>