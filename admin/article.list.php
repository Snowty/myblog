<?php 
	session_start();
	require_once('../include/connect.php');
	$sql = "select * from article order by dateline desc";
	$query = mysql_query($sql);
	if($query&&mysql_num_rows($query)){
		while($row = mysql_fetch_assoc($query)){
			$data[] = $row;
		}
	}

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>添加文章</title>
    <link href="../static/bootstrap.min.css" rel="stylesheet">
    <link href="../static/style.css" rel="stylesheet">
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
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
                        <li class="active"><a href="article.list.php">浏览文章</a> </li>
                        <li ><a href="article.add.php">添加文章</a> </li>
						<li><a href="article.manage.php">管理文章</a> </li>
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
			</div>
        </nav>
    </div>
    <div class="mybody container">
    <h1 class="col-lg-offset-5">添加文章</h1>
         
<div class="container form-size line-hight">
	<div class="col-md-10">
	<?php
		if(empty($data)){	
			echo "当前没有文章，请管理员在后台添加文章";
		}else{
			foreach($data as $value){
	?>
	<div class="col-md-10">
		<h1><?php echo $value['title']?></h1>
        <blockquote>
        <p><?php echo $value['description']?></p>
        </blockquote>
		<div class="meta">
		<p class="links"><a href="article.show.php?id=<?php echo $value['id']?>" class="more">查看详细</a>&nbsp;&nbsp;&raquo;&nbsp;&nbsp;</p>
		</div>
		</div>
	<?php
			}
		}
	?>
	</div>
<div class="container">
	<p id="legal"></p>
</div>
<? require_once("../include/footer.html");
?>