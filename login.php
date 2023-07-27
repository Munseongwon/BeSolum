<?php require ('lib/top.php'); ?>

<!--로그인 폼 구현 시작-->
<section class="container-fluid">
  <section class="row justify-content-center">
    <section class="col-12 col-sm-6 col-md-3">
    <form class="form-container" action="_login.php" method="post">
      <h4 class="text-center">ログイン</h4>
      <div class="form-group">
        <input name="id" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="メールを入ってください。">
      </div>
      <div class="form-group">
        <input name="pw" type="password" class="form-control" id="exampleInputPassword1" placeholder="パスワードを入ってください。">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">ログイン</button>
      </div>
    </form>
    </section>
  </section>
</section>
<!--//로그인 폼 구현 종료 -->

<?php require ('lib/bottom.php'); ?> 
    
   