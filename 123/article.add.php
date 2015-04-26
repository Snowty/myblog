

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>添加文章</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>
    <div class="myheading">
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <img src="1.jpg" style="width: 150px">
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li ><a href="../article.list.php">浏览文章</a> </li>
                        <li class="active"><a href="article.add.php">添加文章</a> </li>
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
         
<form class="form-horizontal" id="form1" name="form1" method="post" action="article.add.handle.php">
  <div class="form-group">
    <label for="title" class="col-sm-2 control-label">标题</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="title" name="title">
    </div>
  </div>
  <div class="form-group">
    <label for="author" class="col-sm-2 control-label">作者</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="author" name ="author">
    </div>
  </div>
  <div class="form-group">
    <label for="description" class="col-sm-2 control-label">简介</label>
    <div class="col-sm-8">
      <textarea class="form-control" rows="3" name="description" id="description"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label" for="content">内容</label>
    <div class="col-sm-8">
	    <textarea class="form-control" rows="10" name="content" id="content"></textarea>
        <script type="text/javascript">CKEDITOR.replace('content');</script>
        
    </div>
  </div>  
  
  <div class="form-group">
    <div class="col-sm-offset-9">
      <button type="submit" class="btn btn-info">提 交</button>
    </div>
  </div>
</form>
                    
                </div>

            </div>
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