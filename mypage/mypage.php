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
    <title>회원정보</title>

    <!-- style -->
        <?php
            include "../include/style.php";
        ?>
    <!-- //style -->
</head>
<body>
    <?php
        include "../include/skip.php";
    ?>
    <!-- //skip -->

    <!-- header -->
    <?php
        include "../include/header.php";
    ?>
    <!-- //header -->

    <!-- main -->
    <main id="contents">
        <h2 class="ir_so">컨텐츠 영역</h2>
        <section class="join-type gray">
            <div class="member-form">
                <h3>회원 정보</h3>

                <form action="mypageSave.php" name="mypage" method="post">
                    <fieldset>
                        <legend class="ir_so">회원정보 입력폼</legend>
                        <div class="join-intro">
                            <div class="face">
                                <img src="../assets/img/mypage/default.svg" alt="기본이미지">
                            </div>
                            <div class="intro">여행에 관심이 많은 박지선입니다.</div>
                        </div>
                        <div class="join-box">
<?php
    $memberID = $_SESSION['memberID'];
    $sql = "SELECT youEmail, youName, youBirth, youPhone, youPass FROM myMember WHERE memberID = {$memberID}";
    $result = $connect -> query($sql);
    // echo "{$memberID}";
    if($result) {
        $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
    }
?>                      

                            <div class="modify">
                                <label for="youEmail">이메일</label>   
                                <input type="email" id="youEmail" name="youEmail" value='<?=$memberInfo['youEmail']?>' autocomplete="off">
                            </div>
                            <div class="modify">
                                <label for="youName">이름</label>   
                                <input type="text" id="youName" name="youName" value='<?=$memberInfo['youName']?>' maxlength="5" autocomplete="off">
                            </div>
                            <div class="modify">
                                <label for="youBirth">생년월일</label>   
                                <input type="text" id="youBirth" name="youBirth" value='<?=$memberInfo['youBirth']?>' maxlength="12" autocomplete="off">
                            </div>
                            <div class="modify">
                                <label for="youPhone">휴대폰 번호</label>   
                                <input type="text" id="youPhone" name="youPhone" value='<?=$memberInfo['youPhone']?>' maxlength="15" autocomplete="off">
                            </div>
                            <div>
                                <label for="youPass">비밀번호 입력</label>   
                                <input type="password" id="youPass" name="youPass" placeholder="로그인 비밀번호를 입력해주세요!" maxlength="15" autocomplete="off">
                            </div>
                        </div>
                        <button id="joinBtn" class="join-submit" type="submit">회원정보 수정</button>
                    </fieldset>
                </form>
            </div>
        </section>
    </main>
    <!-- //contents -->
    <!-- //main -->

    <!-- footer -->
    <?php
        include "../include/footer.php";
    ?>
    <!-- //footer -->
</body>
</html>