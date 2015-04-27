<?php 
	require_once('../include/connect.php');
	$id = intval($_GET['id']);     //防止SQL注入
	$sql = "select * from article where id=$id";
	$query = mysql_query($sql);
	if($query&&mysql_num_rows($query)){
		$row = mysql_fetch_assoc($query);
	}else{
		echo "这篇文章不存在";
		exit;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>筱筱汀的碎碎念</title>
<link href="../static/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
	<div class="myheading">
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <img src="../static/1.jpg" style="width: 150px">
                    </a>
                </div>
				<div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="article.list.php">文章列表</a> </li>
                    </ul>
				<div class="txet-right">
					<a class="btn btn-default navbar-btn navbar-right pull-right" href="../article.logout.php">Sign out</a>
                    <form class="navbar-form navbar-right" role="search" method="get" action="../article.search.php">
                        <div class="form-group">
							<label class="sr-only">search</label>
                            <input type="text" class="form-control" id="s" name="key" placeholder="输入搜索的文章名">
                        </div>
                        <button type="submit" class="btn btn-default">搜索</button>
                    </form>	
                </div> 		
            </div>
        </nav>
    </div>
	<div class="container form-size line-hight">
		<div class="col-md-10">
			<h1><!--文章标题放置到这里--><?php echo $row['title']?></h1>
			<div>
				<!--文章内容放置到这里-->
				<?php echo $row['content']?>
			</div>
		</div>
	</div>
	<?php
		require_once("../include/footer.html");
	?>