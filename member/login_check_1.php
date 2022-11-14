<!DOCTYPE html>
<?php
  error_reporting( E_ALL );
  ini_set( "display_errors", 1 );
?>
<html>
<head>
   <meta charset="utf-8">
   <title></title>
</head>
<body>
   <?php
   session_start();        //DB에 접근하기 위한 SQL
   $host = 'localhost';    // host명
   $user = 'root';         // 접근하려는 유저명
   $pw = '000000';         // PW명
   $db_name = 'WEB_DEV';   // 접속하려는 DB명
      $mysqli = new mysqli($host, $user, $pw, $db_name);

      //login.php에서 입력받은 id, password를 POST방식으로 보냄
      $username = $_POST['id'];
      $userpass = $_POST['pw'];
      $address = $_POST['join_addr'];
      // AND를 통해 id와 password를 동시에!!!!!!
      $q = "SELECT * FROM user_info WHERE login_id = '$username' AND login_pw = '$userpass'";
      $result = $mysqli->query($q);
      $row = $result->fetch_array(MYSQLI_ASSOC);

      //결과가 존재하면 세션 생성
      if ($row != null) {
         $_SESSION['username'] = $row['login_id'];
         $_SESSION['name'] = $row['name'];
         echo "<script>location.replace('index.php');</script>";
         exit;
      }

      //결과가 존재하지 않으면 로그인 실패
      if($row == null){
        echo "<script>alert('ID / password를 확인해주세요')</script>";
        echo "<script>location.replace('login.php');</script>";
        exit;
      }
      ?>
   </body>
</html>
