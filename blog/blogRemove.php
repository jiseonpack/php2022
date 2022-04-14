<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>블로그 삭제하기</title>
</head>
<body>
<?php

    $blogID = $_GET['blogID'];
    $blogID = $connect -> real_escape_string($blogID);

    //쿼리문
    $sql = "DELETE FROM myBlog WHERE blogID = {$blogID}";
    $result = $connect -> query($sql);

    if($result){
        echo "<script>alert('삭제되었습니다.')</script>";
    } else {
        echo "<script>alert('sql오류')</script>";
    }

    
?>

<script>
    location.href = "blog.php";
</script>
</body>
</html>