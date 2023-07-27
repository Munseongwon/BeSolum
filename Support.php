<?php require ('lib/top.php'); ?>
<?php include ('_conn.php'); ?>
<?php 
    if (isset($_GET["page"]))
        $page = $_GET["page"]; // 1, 2, 3, 4 ,5
    else
        $page = 1;    
?>
    <!-- 고객 지원 페이지 배너 시작 -->
    <div class="page-title-area" id="about">
        <div class="container">
            <div class="page-title-content">
                <h2>サポート</h2>
            </div>
        </div>
    </div>
    <!-- //고객 지원 페이지 배너 종료 -->

    <!-- 공지 사항글 시작 -->
    <section class="notice">
        <div class="page-title">
            <div class="container">
                <h3>お知らせ</h3>
                <table class="board-table mt-3">
                    <thead>
                        <tr>
                            <th width="70">番号</th>
                            <th width="300">タイトル</th>
                            <th width="120">ユーザ</th>
                            <th width="100">投稿日</th>
                            <th width="100">ヒット</th>
                        </tr>
                    </thead>
                    <?php
                    $sql = mq("SELECT * FROM board_jp"); // 보드 내의 모든 데이터를 sql 변수에 넣음
                    $total_record = mysqli_num_rows($sql); // 게시판 총 레코드 개수

                    $list = 5; // 한 페이지 당 보여줄 데이터 개수
                    
                    $block_cnt = 5; // 블록 당 보여줄 페이지 개수
                    $block_num = ceil($page / $block_cnt); // 현재 페이지 블록 구하기
                    $block_start = (($block_num - 1) * $block_cnt) + 1; // 블록의 시작 번호
                    $block_end = $block_start + $block_cnt - 1; // 블록 마지막 번호
                    
                    $total_page = ceil($total_record / $list); // 페이징한 페이지 수 구하기
                    if($block_end > $total_page){
                        $block_end = $total_page; // 만약 블록의 마지박 번호가 페이지수보다 많다면 마지박번호는 페이지 수
                    }
                    $total_block = ceil($total_page / $block_cnt); // 블록 총 개수
                    $start_num = ($page - 1) * $list; // 시작 번호 (page - 1)에서 $list를 곱한다

                    // board테이블에서 idx를 기준으로 내림차순해서 5개까지 표시
                    $sql2 = mq("select * from board_jp order by idx desc limit $start_num, $list");
                    while($board_jp = $sql2->fetch_array())
                    {
                    //title변수에 DB에서 가져온 title을 선택
                    $title=$board_jp["title"]; 
                    if(strlen($title)>30)
                    { 
                        //title이 30을 넘어서면 ...표시
                        $title=str_replace($board_jp["title"],mb_substr($board_jp["title"],0,30,"utf-8")."...",$board_jp["title"]);
                    }
                    ?>
                    <tbody>
                        <tr>
                            
                            <td width="70"><?php echo $board_jp['idx']; ?></td>
                            <td width="500">
                                <a href="read.php?idx=<?php echo $board_jp["idx"];?>"><?php echo $title;?></a>
                            </td>
                            <td width="120"><?php echo $board_jp['name']?></td>
                            <td width="100"><?php echo $board_jp['date']?></td>
                            <td width="100"><?php echo $board_jp['hit']; ?></td>
                        </tr>
                    </tbody>
                <?php 
                } 
                ?>
                </table>
                <?php
                if (isset($_SESSION['is_login']) &&  $_SESSION['is_login'] == 1) {
                ?>
                <div id="write_btn">
                    <a href="writer.php"><button class="btn btn-primary mt-5">文作成</button></a>
                </div>
                <?php
                }
                ?>
            </div>
            <div class="mb-5" id="page_num" style="text-align: center">
                <?php
                    if($page <= 1){                 
                    } else {
                        $pre = $page - 1;
                        echo "<a href='Support.php?page=$pre'>   [以前]   </a>";
                    }

                    for($i = $block_start; $i<=$block_end; $i++){
                        if($page == $i){
                            echo "<b> [$i] </b>";
                        } else {
                            echo "<a href='Support.php?page=$i'>   [$i]   </a>";
                        }
                    }

                    if($page >= $total_page){

                    } else {
                        $next = $page + 1;
                        echo "<a href='Support.php?page=$next'>  [次]  </a>";
                    }

                    if($page >= $total_page){
                        $next = $page + 1;
                        echo "<a href='Support.php?page=$total_page'>  [最後]  </a>";
                    } else {
                        echo "<a href='Support.php?page=$total_page'>  [最後]  </a>";
                    }
                ?>
            </div>
        </div>
    </section>
    <!--// 공지 사항글 종료 -->
           
<?php require('lib/bottom.php');?>   
