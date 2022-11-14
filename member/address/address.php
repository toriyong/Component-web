<!DOCTYPE html>

<?php
  error_reporting( E_ALL );
  ini_set( "display_errors", 1 );
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Address</title>
</head>
<body>
    <form method="get" action="/member/address/address_ok.php">
        <input name="address" type=text placeholder="ex) 백양로, 백양로 15">
        <input type=submit value="검색">
    </form>
</body>
</html>
