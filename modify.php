<!--- 게시글 수정 -->
<?php require ('lib/top.php'); ?>
<?php 
    include ('_conn.php');
    $bno = $_GET['idx']; 
    $sql = mq("select * from board_jp where idx='$bno';");
	$board_jp = $sql->fetch_array();
?>
<div id="board_write">
    <div id="write_area">
        <form action="modifiy_ok.php?idx=<?php echo $bno; ?>" method="post">
            <div id="in_title">
                <textarea name="title" id="utitle" rows="1" cols="55" placeholder="題目" maxlength="100" required><?php echo $board_jp['title']; ?></textarea>
            </div>
            <div class="wi_line"></div>
            <div id="in_name">
                <textarea name="name" id="uname" rows="1" cols="55" placeholder="著者" maxlength="100" required><?php echo $board_jp['name']; ?></textarea>
            </div>
            <div class="wi_line"></div>
            <div id="in_content">
                <textarea name="content" id="ucontent" placeholder="内容" required><?php echo $board_jp['content']; ?></textarea>
            </div>
            <div class="bt_se mb-3">
                <button class="btn btn-primary"type="submit">修正する</button>
            </div>
        </form>
    </div>
</div>
<!--- // 게시글 수정 -->
<?php require('lib/bottom.php');?> 
