<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>댓글</title>
    <?php
        include "../include/style.php";
    ?>
</head>
<body>
     <!-- header -->
     <?php
        include "../include/header.php";
    ?>
    <!-- //header -->

    <main id="contents">
        <h2 class="ir_so">컨텐츠 영역</h2>
        <section id="card-type" class="section center">
            <div class="container">
                <h3 class="section__title">봄 추천 여행지</h3>
                <p class="section__desc">
                    기대되는 봄 여행지 추천 황매산 <br>
                    낮에는 철쭉의 황홀함, 밤에는 은하수의 반짝임
                </p>
                <div class="card__inner">
                    <article class="card">
                        <figure class="card__header">
                            <img class="card__img" src="../assets/img/card01@2x.png" alt="이미지1">
                        </figure>
                        <div class="card__body">
                            <h3 class="card__title">황매산</h3>
                            <p class="card__desc">봄에 피는 또다른 꽃으로 철쭉이 있습니다. 철쭉을 볼 수 있는 곳 중에서도 황매산은 매 계절마다 다양한 매력을 뽐내는 곳이지만, 특히나 또 봄에 구경거리가 많습니다. 보통 5월 초중순부터 개화가 시작된다고 하니 계획을 잘 짜면 좋겠어요.</p>
                            <a class="card__btn" href="#">
                                더 자세히 보기
                                <svg width="52" height="8" viewBox="0 0 52 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M51.3536 4.35355C51.5488 4.15829 51.5488 3.84171 51.3536 3.64645L48.1716 0.464466C47.9763 0.269204 47.6597 0.269204 47.4645 0.464466C47.2692 0.659728 47.2692 0.976311 47.4645 1.17157L50.2929 4L47.4645 6.82843C47.2692 7.02369 47.2692 7.34027 47.4645 7.53553C47.6597 7.7308 47.9763 7.7308 48.1716 7.53553L51.3536 4.35355ZM0 4.5H51V3.5H0V4.5Z" fill="#5B5B5B"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                    <article class="card">
                        <figure class="card__header">
                            <img class="card__img" src="../assets/img/card02@2x.png" alt="이미지2">
                        </figure>
                        <div class="card__body">
                            <h3 class="card__title">황매산 풍경</h3>
                            <p class="card__desc">드넓은 벌판에 진분홍 철쭉이 펼쳐진 모습만으로도 아름다운 풍경인데, 이 풍경을 일출 때에 맞춰 보면 더욱 찬란한 모습을 보실 수 있습니다. 다만 이 모습을 보려면 꽤 이른 시간부터 등반할 준비가 필요합니다.</p>
                            <a class="card__btn" href="#">
                                더 자세히 보기
                                <svg width="52" height="8" viewBox="0 0 52 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M51.3536 4.35355C51.5488 4.15829 51.5488 3.84171 51.3536 3.64645L48.1716 0.464466C47.9763 0.269204 47.6597 0.269204 47.4645 0.464466C47.2692 0.659728 47.2692 0.976311 47.4645 1.17157L50.2929 4L47.4645 6.82843C47.2692 7.02369 47.2692 7.34027 47.4645 7.53553C47.6597 7.7308 47.9763 7.7308 48.1716 7.53553L51.3536 4.35355ZM0 4.5H51V3.5H0V4.5Z" fill="#5B5B5B"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                    <article class="card">
                        <figure class="card__header">
                            <img class="card__img" src="../assets/img/card03@2x.png" alt="이미지3">
                        </figure>
                        <div class="card__body">
                            <h3 class="card__title">황매산 은하수</h3>
                            <p class="card__desc">봄의 황매산이 유달리 매력적인 이유는 낮의 철쭉을 보고 나면, 밤에는 은하수를 볼 수 있다는 점 때문입니다. 황매산의 풍경을 촬영하려면 산길을 따라 높이 올라가야하기는 하지만, 그 덕에 은하수의 별빛을 방해하는 불빛 하나 없이 깜깜하다는 점이 은하수 촬영에 최상의 환경을 만들어 줍니다.</p>
                            <a class="card__btn" href="#">
                                더 자세히 보기
                                <svg width="52" height="8" viewBox="0 0 52 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M51.3536 4.35355C51.5488 4.15829 51.5488 3.84171 51.3536 3.64645L48.1716 0.464466C47.9763 0.269204 47.6597 0.269204 47.4645 0.464466C47.2692 0.659728 47.2692 0.976311 47.4645 1.17157L50.2929 4L47.4645 6.82843C47.2692 7.02369 47.2692 7.34027 47.4645 7.53553C47.6597 7.7308 47.9763 7.7308 48.1716 7.53553L51.3536 4.35355ZM0 4.5H51V3.5H0V4.5Z" fill="#5B5B5B"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                </div>
            </section>
            <!-- //card-type -->

            <section id="comment-type" class="section center pink">
                <h3 class="section__title">여행지 신청하기</h3>
                <p class="section__desc">
                    여행지 신청은 누구나 댓글을 달 수 있습니다. 회원가입 하지 않아도 신청 가능합니다. 100글자 이내로 써주세요.
                </p>
                <div class="comment__inner">
                    <div class="comment__form">
                    <div class="comment__form">
                        <form action="commentSave.php" method="post" name="comment">
                            <fieldset>
                                <legend class="ir_so">댓글쓰기</legend>
                                <div class="comment__wrap">
                                    <div>
                                        <label for="youName" class="ir_so">이름</label>
                                        <input type="text" name="youName" id="youName" class="input__style" placeholder="이름" autocomplete="off" required>
                                    </div>
                                    <div>
                                        <label for="youText" class="ir_so">댓글 쓰기</label>
                                        <input type="text" name="youText" id="youText" class="input__style width" placeholder="시간, 날짜를 적어주세요!" autocomplete="off" required>
                                    </div>
                                    <button class="comment__btn" type="submit" value="댓글 작성하기">작성하기</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="comment__list">
                    <!-- <div class="list">
                        <p class="comment__desc">저 신청할래요 :) 너무 예쁘네요~</p>
                        <div class="comment__icon">
                            <span class="face"><img src="../assets/img/face.png" alt="얼굴"></span>
                            <span class="name">박지선</span>
                            <span class="date">2022-03-11</span>
                        </div>
                    </div> -->
                    <?php
                        include "../connect/connect.php";
                        $sql = "SELECT * FROM myComment";
                        $result = $connect -> query($sql);
                        
                        // $count = $result -> num_rows;
                        // $commentInfo = $result -> fetch_array(MYSQLI_ASSOC);
                        // echo "<pre>";
                        // var_dump($commentInfo);
                        // echo "</pre>";
                        //for문으로 댓글 출력.

                        if($result) {
                            $count = $result -> num_rows;
                            if($count > 0){
                                for($i=1; $i<=$count; $i++){
                                    $commentInfo = $result -> fetch_array(MYSQLI_ASSOC);
                                    echo "<div class='list'>";
                                    echo "<p class='comment_desc'>".$commentInfo['youText']."</p>";
                                    echo "<div class='comment__icon'>";
                                    echo "<span class='face'><img src='../assets/img/face.png' alt='얼굴'></span>";
                                    echo "<span class='name'>".$commentInfo['youName']."</span>";
                                    echo "<span class='date'>".date('Y-m-d', $commentInfo['regTime'])."</span>";
                                    echo "</div>";
                                    echo "</div>";
                                }
                            }
                        }
                    ?>
                    
                    
                </div>
            </div>
        </section>
    </main>
    <!-- //main -->

    <!-- footer -->
    <?php
        include "../include/footer.php";
    ?>
    <!-- //footer -->
</body>
</html>