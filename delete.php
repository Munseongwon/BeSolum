<!--게시글 삭제 기능 구현 시작-->
<?php
	include ('_conn.php');
	
	$bno = $_GET['idx'];
	$sql = mq("delete from board_jp where idx='$bno';");
?>
<script>alert("削除されました");</script>
<meta http-equiv="refresh" content="0 url=Support.php" />
<!--//게시글 삭제 기능 구현 종료-->