<?php
	include "../conf/conn.php";
	$id = 1;
	$qry_take = mysqli_query($conn,"select * from tbl_master where id='$id';");
	$hasil = mysqli_fetch_array($qry_take,MYSQLI_ASSOC);
										
?>
						<form name="news" action="pages/inputstatic.php" method="POST"> 
						<table border="0px" width="100%" id="posting" cellpadding="10px">
						<tr>
							<td colspan="3" width="15%" ><h3>Tambahkan Details Pelanggan (Clients)</h3></td>
						</tr>
						<tr>
							<td align="left" colspan="3">
								<textarea id="isi_post" name='isi_post' ><?php 	echo $hasil['clients']; ?></textarea>
							</td>
						</tr>
						<tr>
							<td align="left" colspan="3">
								<input type="image" name="save" src="img/save.png" height=60px width=60px />
							</td>
						</tr>
						</table>
						<input style="display:none;" type="text" name="category" value="clients"/>
						<input style="display:none;" type="text" name="id" value="<?php echo $hasil['id']; ?>"/>						
						</form>