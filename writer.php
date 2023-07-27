<?php require ('lib/top.php'); ?>
<?php include ('_conn.php'); ?>
    <div class="page-title-area" id="about">
        <div class="container">
            <div class="page-title-content">
                <h2>サポート</h2>
            </div>
        </div>
    </div>
    <!-- 게시판 글 작성 화면 -->
    <div id="board_write">
        <div id="write_area">
            <form action="write_ok.php" method="post">
                <div id="in_title">
                    <textarea name="title" id="utitle" rows="1" cols="55" placeholder="題目" maxlength="100" required></textarea>
                </div>
                <div class="wi_line"></div>
                <div id="in_name">
                    <textarea name="name" id="uname" rows="1" cols="55" placeholder="著者" maxlength="100" required></textarea>
                </div>
                <div class="wi_line"></div>
                <div id="in_content">
                    <textarea name="content" id="ucontent" placeholder="内容" required></textarea>
                </div>
                <div class="bt_se mb-3">
                    <button class="btn btn-primary"type="submit">文の作成</button>
                </div>
            </form>
        </div>
    </div>
    <!-- //게시판 글 작성 -->
<?php require('lib/bottom.php');?>     