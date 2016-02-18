<?php

	include "../conf/conn.php";
	include "ceklog.php";

?>


<Doctype html>
<html>

<head>
	<title>MMP Consulting</title>
<link rel='stylesheet' type='text/css' href='css/admin.css'>
<style type="text/css">
	@import(url:css/admin.css)
</style>
<script language="javascript" type="text/javascript" src="tiny_mce/tiny_mce.js"></script>
<script language="javascript" type="text/javascript">
		tinyMCE.init({
			mode : "textareas",
			elements : "textareas",
			theme : "advanced",
			plugins : "pagebreak,style,fmath_formula,table,save,advimage,advlink,insertdatetime,preview,media, searchreplace,print,paste,fullscreen,noneditable,visualchars,xhtmlxtras,autosave",

		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,code,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,fmath_formula,charmap,media,|,print,|,fullscreen",
        theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,
			file_browser_callback : "ajaxfilemanager",
			paste_use_dialog : false,
			theme_advanced_resizing : true,
			theme_advanced_resize_horizontal : true,
			apply_source_formatting : true,
			force_br_newlines : true,
			force_p_newlines : false,	
			relative_urls : true
		});
		function ajaxfilemanager(field_name, url, type, win) {
			var ajaxfilemanagerurl = "../../../tiny_mce/plugins/ajaxfilemanager/ajaxfilemanager.php";
			var view = "detail";
			switch (type) {
				case "image":
				view = "thumbnail";
					break;
				case "media":
					break;
				case "flash": 
					break;
				case "file":
					break;
				default:
					return false;
			}
            tinyMCE.activeEditor.windowManager.open({
                url: "../../../tiny_mce/plugins/ajaxfilemanager/ajaxfilemanager.php?view=" + view,
                width: 782,
                height: 440,
                inline : "yes",
                close_previous : "no"
            },{
                window : win,
                input : field_name
            });
            
		}
</script>

</head>
<body>

<div id='container'>
	<div id="header">
		<h2>Administrator Page on MMPCONS.COM</h2>
	</div>
	<div id="main">
		<table width="900px" border="0px" cellpadding="5px">
			<tr>
				<td width="20%" valign="top">
					<div id="leftnav">
						<h3><i>Main Menu</i></h3>
								<hr/><i>Dynamic Contents</i><hr/>
								<ul class="sub">
									<li><a href="index.php?opt=1">News</a></li>
									<li><a href="index.php?opt=2">Artikel</a></li>
									<li><a href="index.php?opt=3">Tax Updates</a></li>
								</ul><br/>
								<hr/><i>Static Contents</i><hr/>
								<ul class="sub">
									<li><a href="index.php?opt=7">Welcome</a></li>
									<li><a href="index.php?opt=8">Services</a></li>
									<li><a href="index.php?opt=9">Clients</a></li>
									<li><a href="index.php?opt=10">About Us</a></li>
								</ul><hr/>
								<ul class="sub">
									<li><a href="logout.php">LOGOUT</a></li>
								</ul>
								<hr/>			
					</div>
				</td>
				<td width="80%" valign="top">
					<div>			
					<?php 
						error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
						$opt = $_GET['opt'];
								switch($opt){
									case 1:
										include "pages/vnews.php"; 
										break;
									case 2:
										include "pages/vartikel.php";
										break;
									case 3:
										include "pages/vtaxupd.php";
										break;
									case 4:
										include "pages/news.php";
										break;
									case 5:
										include "pages/artikel.php";
										break;
									case 6:
										include "pages/taxupd.php";
										break;		
									case 7:
										include "pages/welcome.php";
										break;		
									case 8:
										include "pages/services.php";
										break;				
									case 9:
										include "pages/clients.php";
										break;											
									case 10:
										include "pages/about.php";
										break;																					
									default:
										break;
								}
					?>
					</div>
				</td>
			</tr>
		</table>
	</div>
</div>


</body>

</html>
