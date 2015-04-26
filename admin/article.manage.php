<?php 
	session_start();
	require_once('../connect.php');
	$sql = "select * from article order by dateline desc";
	$query = mysql_query($sql);
	if($query && mysql_num_rows($query)){ //没出错并且结果条数>0
		while($row = mysql_fetch_assoc($query)){ //关联数组
			$data[] = $row;
		}
	}else{
		$data = array();
	}

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>管理文章</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="myheading">
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <img src="1.jpg" style="width: 150px"
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li ><a href="../article.list.php">浏览文章</a> </li>
                        <li ><a href="article.add.php">添加文章</a> </li>
						<li class="active"><a href="article.manage.php">管理文章</a> </li>
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
		<h1 class="col-lg-offset-5">管理文章</h1>
		<table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>编号</th>
                    <th>标题</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php 
						if(!empty($data)){       
							foreach($data as $value){
					?>
				<tr>
					<td bgcolor="#FFFFFF">&nbsp;<?php echo $value['id']?></td>
					<td bgcolor="#FFFFFF">&nbsp;<?php echo $value['title']?></td>
					<td bgcolor="#FFFFFF"><a href="article.del.handle.php?id=<?php echo $value['id']?>">删除</a> 
					<a href="article.modify.php?id=<?php echo $value['id']?>">修改</a></td>
				</tr>
				<?php
						}
					}
						?>
                </tr>
                            
            </tbody>
		</table>	
  
    </div>
		<div class="myfooter">
            <p class="text-center"><a href="http://weibo.com/royaljay">@筱筱汀</a></p>
        </div>
	<script src="jquery-2.1.1.min.js"></script>
	<script src="bootstrap.min.js"></script>
	<script>
    $(".navbar-nav a").click(function(e){
        $(this).tab("show");
    })
	</script>
</body>
</html>