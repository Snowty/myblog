<?php
	require_once('config.php');
	
	//连数据库
	if(!($con = mysql_connect(HOST,USERNAME,PASSWORD))){
		echo mysql_error();
	}
	
	//选库
	if(!mysql_select_db('xuege')){
		echo mysql_error();
	}
	
	//字符集
	mysql_query('set names utf8');
?>