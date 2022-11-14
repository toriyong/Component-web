<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>주 소</title>
</head>
<body>

<?php
  error_reporting( E_ALL );
  ini_set( "display_errors", 1 );
?>
<?php
    $conn= mysqli_connect('localhost', 'root', '000000', 'web_dev');

    $address= $_GET['address'];
    $arr= explode(" ",$address);

    if($arr[1]){
        $sql = "SELECT * FROM zipcode_db WHERE DORO='$arr[0]' AND BUILD_NO1='$arr[1]'";
    } else {
        $sql = "SELECT * FROM zipcode_db WHERE DORO='$arr[0]' ORDER BY BUILD_NO1 ASC";
    }

    $res = mysqli_query($conn, $sql);
    $num = 1;
?>
    <table>
<?php
    while($row = mysqli_fetch_array($res)){
        $full = $row['SIDO']." ".$row['SIGUNGU']." ".$row['DORO']." ".$row['BUILD_NO1']." ".$row['BUILD_NM']; ?>
        <tbody>
            <td><?=$num?></td>
            <td><a href="/member/address/detail.php?full=<?=$full?>"><?=$full?></a></td>
        </tbody> <?php
        $num++;
    }
?>
    </table>
</body>
</html>
