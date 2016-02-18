<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "../conf/conn.php";
$category = 'news';
?>

<table id="tbl_data" cellspacing="0" cellpadding="2">
	<tr>
		<th width="50px">NO</th>
		<th width="75px">ID POST</th>
		<th width="400px">JUDUL POSTINGAN</th>
		<th width="75px">UPDATE</th>
		<th width="75px">DELETE</th>
	</tr>


<?php
$qry_view = mysqli_query($conn,"select * from tbl_posting where category='$category' order by tgl_post asc");

for ($i=0; $hasil = mysqli_fetch_array($qry_view,MYSQLI_ASSOC); $i++){
	echo "<tr>";
	echo "<td align='center'>".($i+1)."</td>";
	echo "<td align='center'>".$hasil['id_post']."</td>";
	echo "<td align='center'>".$hasil['jdl_post']."</td>";
	echo "<td align='center'><a href='index.php?opt=4&id=".$hasil['id_post']."&mod=news'>Update</a></td>";
	echo "<td align='center'><a href='pages/delete.php?id=".$hasil['id_post']."&mod=news'>Delete</a></td>";
	echo "</tr>";
}
echo "</table>";
?>
</br>
<hr/>
<a href="index.php?opt=4" ><input type="button" value="ADD NEWS" /></a>