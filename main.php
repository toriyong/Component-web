<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TORI의 WEB_DEV</title>

</head>

<style>
  body { margin: 0; }
  .navbar {
    display: inline-block;
    width: 100%;
    background: Gray;
  }
  .navbar>div { float: right; }
  .navbar>ul {
    float: left;
    margin: 0;
    padding: 0;
    list-style: none;
  }
  .navbar>ul>li {
    display: inline-block;
    padding: 0;
  }
  .navbar a {
    display: block;
    text-decoration: none;
    padding: 10px 20px;
    color: white;
  }
  .navbar a:hover {
    background: Black;
     font-weight: bold;}
</style>
<body>
<nav class="navbar">
  <ul>
    <li><a href="../main.php">HOME</a></li>
    <li><a href="#">공지사항</a></li>
    <li><a href="/board/index.php">게시판</a></li>
  </ul>
  <div><a href="#">☰</a></div>
  <div><a href="/member/login.php">로그인</a></div>
</nav>

</body>
</html>
