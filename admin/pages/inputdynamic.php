<?php

include "../../conf/conn.php";

$jdl = $_POST['judul'];
$source = $_POST['source'];
$category = $_POST['category'];
$isi_post = $_POST['isi_post'];
$id_user = 1;
$id_post = $_POST['id'];


$qry_save = "insert into tbl_posting values('','$id_user',curdate(),curtime(),'','$jdl','$category','$source','$isi_post');";
$qry_update = "update tbl_posting set isi='$isi_post' where id_post='$id_post';";
if ($_POST['save_x']) { 
	$qry_exc = $qry_save;
}
	else {
	$qry_exc = $qry_update;
}

$qry = mysqli_query($conn,$qry_exc);

if($qry_save) {
	header('location:../index.php');
}


/*
echo $jdl;
echo $source;
echo $category;
echo $isi_post;
*/


?>