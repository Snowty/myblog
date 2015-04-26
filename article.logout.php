<?php
	session_start();
	session_destroy();
?>
<script>
alert('已安全退出');
window.location.href = 'article.list.php';
</script>