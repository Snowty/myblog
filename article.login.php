<?php
    session_start();
	require_once('include/connect.php');
	$num="";
	for($i=0;$i<4;$i++){
		$num .= dechex(rand(0,15));
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Sign in</title>
	<link href="static/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="container col-md-3 col-md-offset-4" >
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
			<button type="submit" class="btn btn-primary">
			Submit
			</button>
		</div>
	</form>
	</div>
	
</div>
</body>
</html>