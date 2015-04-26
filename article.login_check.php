<?php
	session_start();
	require_once('connect.php');
	$reback = '0';
	$name = $_POST['username'];
	$pwd = $_POST['passwd'];
	if(!empty($name) and !empty($pwd)){
		if($name=="xuege"&&$pwd=="123456"){
			$num = 1;
			echo "<script>alert('登录成功');window.location.href='admin/article.add.php'</script>";
		}else{
			
			echo "<script>alert('登录失败');window.location.href='article.login.php'</script>";
	    }
	}

?>
