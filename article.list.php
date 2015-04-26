<?php 
	session_start();
	require_once('include/connect.php');
	$sql = "select * from article order by dateline desc";
	$query = mysql_query($sql);
	if($query&&mysql_num_rows($query)){
		while($row = mysql_fetch_assoc($query)){
			$data[] = $row;
		}
	}
require_once("include/header.html");
?>

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
<? require_once("include/footer.html");
?>