<?php 
	header('Content-Type:text/html; charest=utf-8');

	$str = $_POST['title']."+".$_POST['content']."\n";
	$fh = fopen('msg.txt', 'a');
	fwrite($fh,$str);
	fclose($fh);
	echo "OK！已经写入一次数据！";

?>