<?php
	include "../conf/conn.php";
	$id = $_GET['id'];
	$qry_take = mysqli_query($conn,"select * from tbl_posting where id_post='$id';");
	$hasil = mysqli_fetch_array($qry_take,MYSQLI_ASSOC);
										
?>
						<form name="news" action="pages/inputdynamic.php" method="POST"> 
						<table border="0px" width="100%" id="posting" cellpadding="10px">
						<tr>
							<td width="15%" >Tax Title</td>
							<td width="5%">:</td>
							<td width="80%"><input type="text" name="judul" class="textbox" value="<?php echo $hasil['jdl_post']; ?>"/></td>
						</tr>
						<tr>
							<td width="15%" >Source</td>
							<td width="5%">:</td>
							<td width="80%"><input type="text" name="source" class="textbox" value="<?php echo $hasil['source']; ?>"/></td>
						</tr>
						<tr>
							<td align="left" colspan="3">
								<textarea id="isi_post" name='isi_post' ><?php 	echo $hasil['isi']; ?></textarea>
							</td>
						</tr>
						<tr>
							<td align="left" colspan="3">
								<input type="image" name="save" src="img/save.png" height=60px width=60px />
								<input type="image" name="update" src="img/update.png" height=60px width=60px />
							</td>
						</tr>
						</table>
						<input style="display:none;" type="text" name="category" value="taxupd"/>
						<input style="display:none;" type="text" name="id" value="<?php echo $hasil['id_post']; ?>"/>						
						</form>