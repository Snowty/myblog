<?php 
	require_once('include/connect.php');
	$key = $_GET['key'];
	$sql = "select * from article where title like '%$key%' order by dateline desc";
	$query = mysql_query($sql);
	if($query&&mysql_num_rows($query)){
		while($row = mysql_fetch_assoc($query)){
			$data[] = $row;
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>筱筱汀的碎碎念</title>
<link href="static/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
	<div class="myheading">
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <img src="static/1.jpg" style="width: 150px">
                    </a>
                </div>
				<ul class="nav navbar-nav">
                    <li><a href="article.list.php">文章列表</a> </li>
                </ul>
				<div class="txet-right">
					<a class="btn btn-default navbar-btn navbar-right pull-right" href="article.login.php">Sign in</a>
                    <form class="navbar-form navbar-right" role="search" method="get" action="article.search.php">
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
	
</div>
<!-- end header -->
</div >

<!-- start page -->
<div class="container">
	<!-- start content -->
	<div class="col-md-3">
	<?php
		if(empty($data)){	
			echo "当前没有文章，请管理员在后台添加文章";
		}else{
			foreach($data as $value){
	?>
		<div class="col-md-9 col-md-offset-2">
			<h1 ><?php echo $value['title']?></h1>
			<div class="col-md-9 col-md-offset-2">
				<?php echo $value['description']?>
			</div>
			<div class="col-md-9 col-md-offset-2">
				<p><a href="article.show.php?id=<?php echo $value['id']?>" class="more">查看详细</a>&nbsp;&nbsp;&raquo;&nbsp;&nbsp;</p>
			</div>
		</div>
	<?php
			}
		}
	?>
	</div>
	
</div>
<? require_once("include/footer.html");
?>