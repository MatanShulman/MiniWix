<?php

$filename="../folderD/1.html";

   
	if(!(isset( $_FILES["file"]["tmp_name"]))){
	echo "you didnt select a photo <br>";
	}

	
//move the file from temp dir  to upload
move_uploaded_file($_FILES["file"]["tmp_name"],"../folderD/upload/". $_FILES["file"]["name"]);
$temp="My site";
$text="5 best place I ever visit";
$fh= @fopen($filename, 'w') or die("can't open file");
fwrite($fh, '<html>  <body bgcolor='.$_POST["colorPick"].'><center>');
fwrite($fh, '<center>  <header ><img src="../folderD/upload/'.$_FILES["file"]["name"].'" width="70%" height="250px"></header>   </center> ');
fwrite($fh, '<center> <table  width="70%" border =2 cellpadding="2" > <tr>');
if( $_POST["aLink"] !="" && $_POST["aLink"] != 2 ){
fwrite($fh, '<td align="center"><font size = 12><a href="a.html">'.$_POST["aLink"].' </a> </font></td>');
}
if($_POST["bLink"] !="" && $_POST["bLink"] != 2){
	fwrite($fh, '<td align="center"><font size = 12><a href="b.html">'.$_POST["bLink"].' </a> </font></td>');
}
if($_POST["cLink"] != "" && $_POST["cLink"] != 2){

fwrite($fh, '<td align="center"><font size = 12><a href="c.html">'.$_POST["cLink"].' </a> </font></td>');
}
if($_POST["dLink"] !="" &&  $_POST["dLink"] != 2){
fwrite($fh, '<td align="center"><font size = 12><a href="d.html">'.$_POST["dLink"].' </a> </font></td>');
}
if($_POST["eLink"] !="" &&  $_POST["eLink"] != 2){
fwrite($fh, '<td align="center"><font size = 12><a href="e.html">'.$_POST["eLink"].' </a> </font></td>');
}
fwrite($fh, '</center></tr><table>');
fwrite($fh, '</center></body></html>');
fclose($fh);
//$myfile= @fopen("Gallery.html", "r") ordie("Unable to open file!");
//echofread($myfile,filesize("Gallery.html"));
//fclose($myfile);

?>