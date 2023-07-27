<?php include ('_conn.php'); ?>
<?php require ('lib/top.php'); ?>
<!-- 고객 지원 페이지 종료 -->
<div class="page-title-area" id="about">
    <div class="container">
        <div class="page-title-content">
            <h2>サポート</h2>
        </div>
    </div>
</div>

<?php
		$bno = $_GET['idx']; /* bno함수에 idx값을 받아와 넣음*/
		$hit = mysqli_fetch_array(mq("select * from board_jp where idx ='".$bno."'"));
		$hit = $hit['hit'] + 1;
		$fet = mq("update board_jp set hit = '".$hit."' where idx = '".$bno."'");
		$sql = mq("select * from board_jp where idx='".$bno."'"); /* 받아온 idx값을 선택 */
		$board_jp = $sql->fetch_array();
?>

<!-- 글 불러오기 -->
<div class="ml-5 mb-5 mt-5" id="board_read">
	<div class="container row" style = "float: none; margin:150 auto;">
		<div class="col-md-6" style="float:none; margin:0 auto;">
			<div class="col-md-8">
				<h2><?php echo $board_jp['title']; ?></h2>
			</div>
			<div class="col-ml-6">
				<div id="user_info">
					<?php echo $board_jp['name']; ?> <?php echo $board_jp['date']; ?> 照会:<?php echo $board_jp['hit']; ?>
						<div id="bo_line"></div>
				</div>
				<div id="bo_content">
					<?php echo nl2br("$board_jp[content]"); ?>
				</div>
				<!-- 목록, 수정, 삭제 -->
				<div id="bo_ser mt-3">
					<a href="Support.php"><button class="btn btn-primary">目録に</button></a>
					<?php
					if (isset($_SESSION['is_login']) &&  $_SESSION['is_login'] == 1) {
					?>
					<a href="modify.php?idx=<?php echo $board_jp['idx']; ?>"><button class="btn btn-primary">修整</button></a>
					<a href="delete.php?idx=<?php echo $board_jp['idx']; ?>"><button class="btn btn-danger">削除</button></a>
					<?php
					}
					?>
				</div>
			</div>   
		</div>
    </div>
</div>
		

    <!-- //End Page Title Area -->

<?php require('lib/bottom.php');?>     