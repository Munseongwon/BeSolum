<!-- 게시판 글쓰기 기능 -->
<?php include ('_conn.php');

$username = $_POST['name'];
$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
$title = $_POST['title'];
$content = $_POST['content'];
$date = date('Y-m-d');
if($username && $userpw && $title && $content){
    $sql = mq("insert into board_jp(name,pw,title,content,date) values('".$username."','".$userpw."','".$title."','".$content."','".$date."')");
    echo "<script>
    alert('作文が完了しました。');
    location.href='Support.php';</script>";
}else{
    echo "<script>
    alert('作文に失敗しました。');
    history.back();</script>";
}
?>
<!-- // 게시판 글쓰기 기능 -->