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
    <title>회원정보 수정완료</title>
</head>
<body>
    <?php
        $youEmail = $_POST['youEmail'];
        $youName = $_POST['youName'];
        $youBirth = $_POST['youBirth'];
        $youPhone = $_POST['youPhone'];
        $password = $_POST['youPass'];
        $memberID = $_SESSION['memberID'];
       
        $sql = "SELECT youPass FROM myMember WHERE memberID = {$memberID}";
        $result = $connect -> query($sql);
        
        if($result){
            $youPass = $result -> fetch_array(MYSQLI_ASSOC);
            // echo "<pre>";
            // var_dump($memberInfo);
            // echo "</pre>";
            //비밀번호 확인
            if($password == $youPass['youPass']){
                //수정(쿼리문 작성)
                $sql = "UPDATE myMember SET youEmail = '{$youEmail}', youName = '{$youName}', youBirth = '{$youBirth}', youPhone = '{$youPhone}' WHERE memberID = '{$memberID}'";
                $connect -> query($sql);
                echo "<script>alert('수정이 완료되었습니다.'); </script>";
            } else {
                echo "<script>alert('비밀번호오류입니다. 다시 한번 확인해주세요.'); history.back(1)</script>";
            }
        }
    ?>
    <script>
        location.href = "mypage.php";
        //history.back(1)
    </script>
</body>
</html>