<!--로그아웃 기능 구현-->
<?php 
    session_unset(); // 세션에 등록되어 있는 모든 변수 해제 --> 즉 로그인 할 때 등록한 세션들을 해제시킴
    session_destroy(); // 세션에 등록된 모든 데이터를 삭제함으로써, 로그인되어 있는 상태 해제함
    session_start(); // 로그아웃이 일어나고 다시 모든 세션을 시작 --> 즉 초기화면으로 돌아감
    echo "<script>alert('ログアウトされました。');location.href='login.php'</script>"
?>
<!--// 로그아웃 기능 구현-->