<?php
    include "../connect/connect.php";

    //변수 설정
    $type = $_POST['type'];

    //쿼리문 생성
    //이메일 중복검사
    $sql = "SELECT youEmail, youNickName FROM myMember ";

    if($type == "emailCheck"){
        $youEmail = $connect -> real_escape_string(trim($_POST['youEmail'])); //특수문자 방지
        $sql .= "WHERE youEmail = '{$youEmail}'";
    }

    //닉네임 중복검사
    if($type == "nickCheck"){
        $youNickName = $connect -> real_escape_string(trim($_POST['youNickName']));
        $sql .= "WHERE youNickName = '{$youNickName}'";
    }

    $result = $connect -> query($sql);
    $jsonResult = "bad";

    //데이터 유무 확인
    if($result -> num_rows == 0){
        $jsonResult = "good";
    }
    echo json_encode(array("result" => $jsonResult));
?>