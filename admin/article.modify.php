<?php
	session_start();
	if($_SESSION['adminName']!='xuege'){
	Header("HTTP/1.1 303 Please login before add article"); 
	Header("Location: ../article.list.php"); 
	exit;
}
	require_once('../include/connect.php');
	//读取旧信息
	$id=$_GET['id'];
	$query = mysql_query("select * from article where id=$id");
	$data = mysql_fetch_assoc($query);

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>修改文章</title>
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
                        <img src="../static/1.jpg" style="width: 150px"
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="article.list.php">浏览文章</a> </li>
                        <li ><a href="article.add.php">添加文章</a> </li>
						<li ><a href="article.manage.php">管理文章</a> </li>
                    </ul>
                    <a class="btn btn-default navbar-btn navbar-right pull-right" href="../article.logout.php">Sign out</a>
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="输入搜索内容">
                        </div>
                        <button type="submit" class="btn btn-default">搜索</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <div class="mybody container">
    <h1 class="col-lg-offset-5">修改文章</h1>
         
<form class="form-horizontal" id="form1" name="form1" method="post" action="article.modify.handle.php">
  <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
  <div class="form-group">
    <label for="title" class="col-sm-2 control-label">标题</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="title" name="title" value= "<?php echo $data['title'] ?>" >
    </div>
  </div>
  <div class="form-group">
    <label for="author" class="col-sm-2 control-label">作者</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="author" name ="author" value= "<?php echo $data['author'] ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="description" class="col-sm-2 control-label">简介</label>
    <div class="col-sm-8">
      <textarea class="form-control" rows="3" name="description" id="description"><?php echo $data['description'] ?></textarea>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label" for="content">内容</label>
    <div class="col-sm-8">
		<textarea class="form-control" rows="10" name="content" id="content"><?php echo $data['content'] ?></textarea>
        <script type="text/javascript">CKEDITOR.replace('content');</script>
    </div>
  </div>  
  
  <div class="form-group">
    <div class="col-sm-offset-9">
      <button type="submit" class="btn btn-info" name="button" id="button">提交</button>
    </div>
  </div>
</form>
                    
                </div>

            </div>
    </div>
   	<?php	require_once("../include/footer.html");?> 