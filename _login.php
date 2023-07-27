<?php 
session_start();
require('_conn.php');
    $id = $_POST['id'];
    $pw = $_POST['pw'];

    // SELECT 조회, INSERT 삽입, DELETE 삭제, UPDATE 변경
    $sql = "SELECT * FROM `user` WHERE id='$id' AND pw='$pw'";
    $result = mysqli_query($conn, $sql); // 데이터베이스와, 해당 sql문 값을 받아올 result 변수 선언
    $row = $result -> num_rows; // 결과값을 정수로 변환 1
    # $row = mysql_fetch_array($result, MYSQL_ASSOC);
    if($row > 0){
        // 로그인 처리, 반드시 세션을 등록해주어야 요청과 응답에 대한 처리를 할 수 있음
        $_SESSION['id'] = $id; // 세션 id를 등록
        $_SESSION['is_login'] = 1; // 로그인이 된 상태
        echo "<script>alert('ログイン完了！');location.href='index.php'</script>"; // 모달창을 띄워 로그인이 되었다는 것을 알려줌
        
    } 
    else {
        echo "<script>alert('ログイン失敗！ID、パスワードを確認してください');location.href='login.php'</script>"; // 아이디 혹은 비밀번호가 잘못되었다면 모달창으로 다시 입력하라고 띄움
    }
    /*if($id == $row[user_id]){
        $_SESSION[user_no] = $row[no];
        $_SESSION[user_id] = $row[user_id];
        $_SESSION[is_login] = 1;
        echo "<script>alert('로그인 완료!');location.href='index.php'</script>";
    } else {
        echo "<script>alert('로그인 실패! 아이디, 비밀번호를 확인해주세요.');location.href='login.php'</script>";
    }*/
?>