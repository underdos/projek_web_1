<Doctype html>
<html>
<?php 
	include "../conf/conn.php";
	//ini untuk ambil data di tabel master (tbl_master)
	$qry_master = "select * from tbl_master where id=1";
	$qry_tbl_master = mysqli_query($conn,$qry_master);
	$hasil_master = mysqli_fetch_array($qry_tbl_master,MYSQLI_ASSOC);


?>
<head>
	<title>MMP Consulting</title>
<link rel='stylesheet' type='text/css' href='../css/global.css'>
<style type="text/css">
	@import(url:../css/global.css)
</style>
</head>

<body>

<div id='container'>
	<div id='menu'>
		<ul class='top_menu'>
			<a href='index.php'><li>Home</li></a> |
			<a href='news.php?ctr=0'><li>News</li></a> |
			<a href='taxupd.php?ctr=0'><li>Tax Update</li></a> |
			<a href='services.php'><li>Services</li></a> |
			<a class='visit' href='clients.php'><li>CLients</li></a> |
			<a href='about.php'><li>About Us</li></a>
		</ul>
	</div>
	<div id='header'>
		<div id="logo">
		<img src="../img/mmpcons.png"/ height=160px width=200px>
		</div><br/>
		<div id="profile">
			<p>
				<font size=5><b>CV. Mandiri Manunggal Persada</b></font><br/>
				Jl. Raya Bogor KM 40 Bogor</br>
				Telp. (021) 12345677 atau Fax. (021) 87654321	
			</p>
		</div>
	</div>
	<div id='content'>
		<table id='content-spliter' cellspacing='20px'>
			<tr valign='top'>
				<td width='70%'>
					<h3 class='tag_title'><img src='../img/rule.gif'/>OUR CLIENTS</h3>
					<hr/><br/>
					<div class='news'>
						<?php
							//ini untuk ambil data clients di tabel master  (tbl_master)
							$qry_posting_news = "select * from tbl_master where id=1;";
							$qry_exc_news = mysqli_query($conn,$qry_posting_news);
							for($i=0; $hasil = mysqli_fetch_array($qry_exc_news,MYSQLI_ASSOC); $i++){
								echo "<div class='content-news'>";
								echo "<p>".$hasil['clients']."</p>";
								echo "</div></br>";
							}						
						?>
					</div><br/>
					<div>
						<hr/>
					</div>
				</td>
				<td width='30%'>
					<div>
					<center>
						<div style="margin: 15px 0px 0px; display: inline-block; text-align: center; width: 200px;"><div style="display: inline-block; padding: 2px 4px; margin: 0px 0px 5px; border: 1px solid rgb(204, 204, 204); text-align: center; background-color: rgb(209, 214, 214);"><a href="http://localtimes.info/Asia/Indonesia/Jakarta/" style="text-decoration: none; font-size: 13px; color: rgb(250, 135, 20);"><img src="http://localtimes.info/images/countries/id.png"="" border=0="" style="border:0;margin:0;padding:0"=""> Jakarta</a></div><script type="text/javascript" src="http://localtimes.info/clock.php?continent=Asia&country=Indonesia&city=Jakarta&cp1_Hex=fa8714&cp2_Hex=d1d6d6&cp3_Hex=f11717&fwdt=200&ham=1&hbg=0&hfg=0&sid=0&mon=0&wek=0&wkf=0&sep=0&widget_number=1024"></script></div>						
					</center>
					</div>
					<h3 class='tag_title'>Follow & Contact us @</h3>
					<hr/><br/>
					<div id='contact'>
						<a href="#"><img src="../img/google.png" class="img_con"></a>
						<a href="#"><img src="../img/fb.png" class="img_con"></a>
						<a href="#"><img src="../img/bb.jpg" class="img_con"></a>
						<a href="#"><img src="../img/wa.jpg" class="img_con"></a>
						<a href="#"><img src="../img/ym.jpg" class="img_con"></a>
					</div><br/>
					<hr class='batas'/>
					<br/>
					<h3 class='tag_title'><img src='../img/statistic.gif'/>Statistic</h3>
					<hr/>
					<br/>
					<div id='statistic'>
					<table>
					<tr>
					<td>
						<!-- Histats.com  (div with counter) --><div id="histats_counter"></div>
						<!-- Histats.com  START  (aync)-->
						<script type="text/javascript">var _Hasync= _Hasync|| [];
						_Hasync.push(['Histats.start', '1,2637246,4,438,112,75,00011111']);
						_Hasync.push(['Histats.fasi', '1']);
						_Hasync.push(['Histats.track_hits', '']);
						_Hasync.push(['Histats.framed_page', '']);
						(function() {
						var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
						hs.src = ('http://s10.histats.com/js15_as.js');
						(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
						})();</script>
						<noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?2637246&101" alt="counter" border="0"></a></noscript>
						<!-- Histats.com  END  -->	
					</td>
					<td>
						<!-- RankWidget.com Google PageRank script -->
						<script type='text/javascript'><!--
						request_img = '01';
						request_typ = 'Google_PageRank';
						//--></script>
						<script type='text/javascript' src='http://www.rankwidget.com/get_rank.js'></script>
						<a href='http://www.rankwidget.com/' alt='RankWidget.com' target='_blank'><img border='0' src='http://www.rankwidget.com/images/logo-s.gif'></a>
						<!-- End of RankWidget.com Google PageRank script -->
					</td>
					</tr>
					</table>			
					</div>
					<br/>
					<hr class='batas'/>	
					<br/>
					<h3 class='tag_title'><img src='../img/event.gif'/>Recent Post..</h3>
					<hr/>
					<div>
						<marquee behaviour="scroll" direction="up" onLoad="this.setAttribute('scrollamount', 2, 2);" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 2, 2);">
						<ol>
						<?php
							//ini untuk ambil 20 data terupdate di tabel posting (tbl_posting)
							$qry_posting_news = "select * from tbl_posting order by id_post desc limit 0,20;";
							$qry_exc_news = mysqli_query($conn,$qry_posting_news);
							for($i=0; $hasil = mysqli_fetch_array($qry_exc_news,MYSQLI_ASSOC); $i++){
								echo "<li><a href='vnews.php?id=".$hasil['id_post']."'>".$hasil['jdl_post']."</a></li><hr/>";
							}						
						?>
						</ol>
						</marquee>
					</div>
					<h3 class='tag_title'><p align='right'><a href='#' class='more'>See All..</a></p>
					</h3>
					<hr class='batas'/>		
					<h3 class='tag_title'>Advertisement</h3>
					<hr/>
					<div>
						<img src="../img/kring-pajak.jpg" width=270px; /><br/>
						<img src="../img/sensus-pajak.jpg" width=270px; /><br/>
					</div>					
				</td>
			</tr>
		</table>
	</div><br/>
	<div id='footer'>
		<p align="center">&copy; Copyright <b>CV. Mandiri Manunggal Persada</b> All Right Reserved<br/>Developed by <a id='mylink' href="http://www.cybervile.com">CYBERVILE</a>
		</p>	
	</div>
</div>


</body>

</html>
