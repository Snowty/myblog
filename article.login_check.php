<?php
	session_start();
	require_once('include/connect.php');
	function fetchOne($sql,$result_type=MYSQL_ASSOC){
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result,$result_type);
	return $row;
}
	function checkAdmin($sql){
	return fetchOne($sql);
	}
	$username = $_POST['username'];
	$password = md5($_POST['passwd']);
	$sql="select * from admin where username='{$username}' and password='{$password}'";
	$row=checkAdmin($sql);
	if($row){
		$_SESSION['adminName']=$row['username'];
		$_SESSION['adminId']=$row['id'];
		echo "<script>alert('登录成功');window.location.href='admin/article.add.php'</script>";
; 
	}else{
		echo "<script>alert('登录失败');window.location.href='article.list.php'</script>";
	}
	?>