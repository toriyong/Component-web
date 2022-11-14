<!DOCTYPE html>
<?php
  error_reporting( E_ALL );
  ini_set( "display_errors", 1 );
?>
<html lang="ko">
<head>
  <meta charset="utf-8">
  <title>LOGIN</title>
</head>
<body>
 <div style="width:400px; height:200px; padding:10px; margin:150px; text-align:center; border:5px solid gray;">
  <form method="post" action="login_check_1.php" class="loginForm">
  <h2>로그인</h2>
    <div class="idForm">
      <input type="text" name="id" class="id" placeholder="Username">
    </div>
    <div class="passForm">
      <input type="password" name="pw" class="pw" placeholder="Password">
    </div>
    <button type="submit" class="btn" onclick="button()">
      LOGIN
    </button>
 </form>
 <hr width"1px" size="8px">
<button type="submit" class="Btn" onclick="location.replye='../member/register.php'">
 SIGN UP!
</button>
</div>
</html>
