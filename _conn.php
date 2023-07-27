<!-- 데이터 베이스(mysql, php8.0, phpmyadmin 사용하여 로컬 호스트로 접속가능하게끔 함-->
<?php
    // 호스트, 유저명, 비밀번호, DB명, 포트번호
    $conn = new mysqli("localhost", "root", "", "bbs", "3307");
    mysqli_query($conn, "set names utf8");

    function mq($sql)
    {
        global $conn;
        return $conn->query($sql);
    }
?>
<!-- // 데이터 베이스-->