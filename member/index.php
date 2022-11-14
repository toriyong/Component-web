<?php
  error_reporting( E_ALL );
  ini_set( "display_errors", 1 );
?>


<?php
session_start();
if(!isset($_SESSION['username'])) {
    echo "<script>location.replace('login.php');</script>";
}

else {
    $username = $_SESSION['username'];
    $name = $_SESSION['name'];
}
?>
<body>
    <div class="base">
        <h2><?php echo "Hi, $name($username)님";?></h2>
        <button type="button" class="btn" onclick="location.href='logout.php'">
            LOGOUT
        </button>
        <button type="button" class="btn" onclick="location.replace('../main.php')">
            MAIN
        </button>
    </div>
</body>
