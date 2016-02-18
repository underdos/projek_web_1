<?php

include "../../conf/conn.php";

$id = $_GET['id'];
$mod = $_GET['mod'];
if ($mod == "news") {$opt=1;}
	elseif($mod == "artikel") {$opt=2;}
		elseif($mod == "taxupd") {$opt=3;}


$qry_delete = mysqli_query($conn,"delete from tbl_posting where id_post='$id';");

if ($qry_delete) 
	{ header('location:../index.php?opt='.$opt);}
	else {echo "GAGAL";}
?>