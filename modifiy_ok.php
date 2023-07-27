<!-- 게시판 글 수정 가능 구현-->
<?php include ('_conn.php');

$bno = $_GET['idx'];
$username = $_POST['name'];
$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
$title = $_POST['title'];
$content = $_POST['content'];
$sql = mq("update board_jp set name='".$username."',pw='".$userpw."',title='".$title."',content='".$content."' where idx='".$bno."'"); ?>

<script>alert("修正されました。");</script>
<meta http-equiv="refresh" content="0 url=Support.php">
<!-- // 게시판 글 수정 가능 구현-->