<?php

include "../../conf/conn.php";

$category = $_POST['category'];
$isi = $_POST['isi_post'];
$id_user = 1;
$id = 1;



$qry_update = "update tbl_master set $category='$isi' where id='$id';";

$qry = mysqli_query($conn,$qry_update);

if($qry) {
	header('location:../index.php');
}


/*
echo $jdl;
echo $source;
echo $category;
echo $isi_post;
*/


?>