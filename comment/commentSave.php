<?php
    include "../connect/connect.php";

    $youName = $_POST['youName'];
    $youText = $_POST['youText'];
    $regTime = time();

    //닷홈 테이블에 추가

    $sql = "INSERT INTO myComment(youName, youText, regTime) VALUES('$youName', '$youText', '$regTime')";
    $result = $connect -> query($sql);

    // if($result){
    //     echo "INSERT INTO TRUE";
    // } else {
    //     echo "INSERT INTO FALES";
    // }

    Header("Location: ../comment/comment.php#comment-type");
?>




