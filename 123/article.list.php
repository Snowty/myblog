<?php 
	session_start();
	require_once('connect.php');
	$sql = "select * from article order by dateline desc";
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
<link href="bootstrap.min.css" rel="stylesheet" >
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
				<div class="txet-right">
					<button type="button" class="btn btn-default navbar-right" data-toggle="modal" data-target="#myModal" >Sign in</button>
					<div class="modal fade bs-example-modal-sm" id="myModal" role="dialog" aria-label="myModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-sm">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
									<h4 class="modal-title">Sign in</h4>
								</div>
								<div class="modal-body">
									<form id="login" name="login" method="post" action="article.login_check.php" onSubmit="">
										<div class="form-group">
											<label class="control-label">username</label>
											<input type="text" class="form-control" name="username">
										</div>
										<div class="form-group">
											<label class="control-label">password</label>
											<input type="password" class="form-control" name="passwd">
										</div>
										<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">
											Close
										</button>
										<button type="submit" class="btn btn-primary">
											Submit
										</button>
								</div>
									</form>
								</div>
								
							</div>
						</div>
					</div>
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
<div class="myfooter">
        <p class="text-center"><a href="http://weibo.com/royaljay">@筱筱汀</a></p>
    </div>
	<script src="jquery-2.1.1.min.js"></script>
<script src="bootstrap.min.js"></script>
<script>   
    $("#myModal").on("show.bs.modal",function(e) {
        var button = $(e.relatedTarget)
        var recipient = button.data("whatever");
        var modal = $(this);
        modal.find(".modal-title").text(recipient);
        modal.find(".modal-body input").val(recipient)
    })
    
</script>	
</body>
</html>