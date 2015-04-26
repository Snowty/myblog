<?php 
	session_start();
    if($_SESSION['adminName']!='xuege'){
    Header("HTTP/1.1 303 Please login before add article"); 
    Header("Location: ../article.list.php"); 
    exit;
    }
	require_once('../include/connect.php');
	//传递过来的信息入库,入库前对所有信息校验
	//print_r($_POST);
	if(!(isset($_POST['title'])&&(!empty($_POST['title'])))){//变量是否存在，并且非空
	                                                         //非法字符
		echo "<script>alert('标题不能为空');window.location.href='article.add.php'</script>";
	}
	$title = $_POST['title'];
	$author = $_POST['author'];
	$description = $_POST['description'];
	$content = $_POST['content'];
	
	$dateline = time();
	$insertsql = "insert into article(title,author,description,content,dateline)
				values ('$title','$author','$description','$content',$dateline)";
	//echo $insertsql;
	if(mysql_query($insertsql)){
		echo "<script>alert('文章发布成功');window.location.href='../article.list.php'</script>";
	}else{
		echo "<script>alert('失败！！！！');window.location.href='article.add.php'</script>";
	}

?>