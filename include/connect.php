<?php
	require_once('config.php');
	
	//�����ݿ�
	if(!($con = mysql_connect(HOST,USERNAME,PASSWORD))){
		echo mysql_error();
	}
	
	//ѡ��
	if(!mysql_select_db('xuege')){
		echo mysql_error();
	}
	
	//�ַ���
	mysql_query('set names utf8');
?>