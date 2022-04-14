<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 사이트</title>
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
    <section id="slide-type" class="mb300 type">
        <div class="slider__wrap">
                <div class="slider__img">
                    <div class="slider__inner">
                        <div class="slider s1">
                            <div class="desc">
                                <span>DEVELOPER</span>
                                <h4>NEW FRONTEND</h4>
                                <p>
                                    너무 무리하지 말아요<br>
                                    이미 당신은 해내고 있고<br>
                                    앞으로도 잘 할수 있어요 :)
                                </p>
                                <div class="btn">
                                <a href="#" class="white">자세히 보기</a>
                                <a href="#" class="black">사이트 보기</a>
                                </div>
                            </div>
                    </div>
                        <div class="slider s2">
                            <div class="desc">
                                <span>DEVELOPER</span>
                                <h4>NEW FRONTEND</h4>
                                <p>
                                    너무 무리하지 말아요<br>
                                    이미 당신은 해내고 있고<br>
                                    앞으로도 잘 할수 있어요 :)
                                </p>
                                <div class="btn">
                                <a href="#" class="white">자세히 보기</a>
                                <a href="#" class="black">사이트 보기</a>
                                </div>
                            </div>
                    </div>
                        <div class="slider s3">
                            <div class="desc">
                                <span>DEVELOPER</span>
                                <h4>NEW FRONTEND</h4>
                                <p>
                                    너무 무리하지 말아요<br>
                                    이미 당신은 해내고 있고<br>
                                    앞으로도 잘 할수 있어요 :)
                                </p>
                                <div class="btn">
                                <a href="#" class="white">자세히 보기</a>
                                <a href="#" class="black">사이트 보기</a>
                                </div>
                            </div>
                    </div>
                        <div class="slider s4">
                            <div class="desc">
                                <span>DEVELOPER</span>
                                <h4>NEW FRONTEND</h4>
                                <p>
                                    너무 무리하지 말아요<br>
                                    이미 당신은 해내고 있고<br>
                                    앞으로도 잘 할수 있어요 :)
                                </p>
                                <div class="btn">
                                <a href="#" class="white">자세히 보기</a>
                                <a href="#" class="black">사이트 보기</a>
                                </div>
                            </div>
                    </div>
                        <div class="slider s5">
                            <div class="desc">
                                <span>DEVELOPER</span>
                                <h4>NEW FRONTEND</h4>
                                <p>
                                    너무 무리하지 말아요<br>
                                    이미 당신은 해내고 있고<br>
                                    앞으로도 잘 할수 있어요 :)
                                </p>
                                <div class="btn">
                                <a href="#" class="white">자세히 보기</a>
                                <a href="#" class="black">사이트 보기</a>
                                </div>
                            </div>
                    </div>
                        <div class="slider s6">
                            <div class="desc">
                                <span>DEVELOPER</span>
                                <h4>NEW FRONTEND</h4>
                                <p>
                                    너무 무리하지 말아요<br>
                                    이미 당신은 해내고 있고<br>
                                    앞으로도 잘 할수 있어요 :)
                                </p>
                                <div class="btn">
                                <a href="#" class="white">자세히 보기</a>
                                <a href="#" class="black">사이트 보기</a>
                                </div>
                            </div>
                    </div>
                    </div>
                </div>
                <div class="slider__btn">
                    <a href="#" class="prev"></a>
                    <a href="#" class="next"></a>
                </div>
                <div class="slider__dot">
                </div>
            </div>
        </section>
 
    <!-- //banner -->

        <h2 class="ir_so">컨텐츠 영역</h2>
        <section id="blog-type" class="section center type">
            <div class="container">
                <h3 class="section__title">여행 블로그</h3>
                <p class="section__desc">여행과 관련된 블로그입니다. 다양한 정보를 확인하세요!</p>
                <div class="blog__inner">
                    <div class="blog__cont">
<?php
    $sql = "SELECT * FROM myBlog WHERE blogDelete = 1 ORDER BY blogID DESC LIMIT 3";
    $result = $connect -> query($sql);
?>
<?php foreach($result as $blog){ ?>
        <article class="blog">
            <figuer class="blog__header">
                <a href="../blog/blogView.php?blogID=<?=$blog['blogID']?>" style="background-image:url(../assets/img/blog/<?=$blog['blogImgFile']?>)"></a>
            </figuer>
            <div class="blog__body">
                <span class="blog__cate"><?=$blog['blogCategory']?></span>
                <div class="blog__title"><?=$blog['blogTitle']?></div>
                <div class="blog__desc"><?=$blog['blogContents']?></div>
                <div class="blog__info">
                    <span class="author"><a href="#"></a><?=$blog['blogAuthor']?></span>
                    <span class="date"></a><?=date('Y-m-d', $blog['blogRegTime'])?></span>
                </div>
            </div>
        </article>
<?php } ?>

                        <!-- <article class="blog">
                            <figuer class="blog__header">
                                <a href="#"><img src="../assets/img/blog/Img_16481029806627.png" alt="이미지"></a>
                            </figuer>
                            <div class="blog__body">
                                <span class="blog__cate">blog__cate</span>
                                <div class="blog__title">좋은 여행지</div>
                                <div class="blog__desc">좋은 여행지 내용</div>
                                <div class="blog__info">
                                    <span class="author">박지선</span>
                                    <span class="date">2022-02-02</span>
                                </div>
                            </div>
                        </article> -->
                    </div>
                    <div class="blog__btn">
                        <a href="../blog/blog.php">더 보기</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- //blog-type -->

        <section id="quiz-type" class="section center gray">
            <div class="container">
            <h3 class="section__title">Quiz</h3>
                <p class="section__desc">
                    웹디자이너, 웹 퍼블리셔, 프론트앤드 개발자를 위한 강의 퀴즈입니다.
                </p>
                <div class="quiz__inner">
                    <div class="quiz__header">
                        <!-- <span class="quiz__subject">javascript</span> -->
                        <div class="quiz__subject">
                            <label for="quizSubject">과목 선택</label>
                            <select name="quizSubject" id="quizSubject"> <!--  onchange="quizData(this.value);" -->
                                <option value="javascript">javascript</option>
                                <option value="jquery">jquery</option>
                                <option value="html">html</option>
                                <option value="css">css</option>
                            </select>
                        </div>
                    </div>
                    <div class="quiz__body">
                        <div class="title">
                            <span class="quiz__num"></span>.
                            <span class="quiz__ask"></span>
                            <div class="quiz__desc"></div>
                        </div>
                        <div class="contents">
                            <div class="quiz__selects">
                                <label for="select1">
                                    <input class="select" type="radio" id="select1" name="select" value="1">
                                    <span class="choice"></span>
                                </label>
                                <label for="select2">
                                    <input class="select" type="radio" id="select2" name="select" value="2">
                                    <span class="choice"></span>
                                </label>
                                <label for="select3">
                                    <input class="select" type="radio" id="select3" name="select" value="3">
                                    <span class="choice"></span>
                                </label>
                                <label for="select4">
                                    <input class="select" type="radio" id="select4" name="select" value="4">
                                    <span class="choice"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="quiz__footer">
                        <div class="quiz__btn">
                            <button class="comment blue none">해설 보기</button>
                            <button class="next orange right ml10 none">다음 문제</button>
                            <button class="confirm blue right">정답 확인</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <!-- layer -->
        <div class="layer_bg"></div>
        <div class="layer">
            <h2>제목</h2>
            <a href="#" class="close">닫기</a>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
        let quizAnswer = "";
        function quizView(view){
            $(".quiz__num").text(view.quizID);
            $(".quiz__ask").text(view.quizAsk);
            $("#select1 + span").text(view.quizChoice1);
            $("#select2 + span").text(view.quizChoice2);
            $("#select3 + span").text(view.quizChoice3);
            $("#select4 + span").text(view.quizChoice4);
            $(".layer h2").text(view.quizComment);
            quizAnswer = view.quizAnswer;
        }

        //정답 체크
        function quizCheck() {
            let selectCheck = $(".quiz__selects input:checked").val()
            //값을 가져오는지 확인
            // alert(selectCheck)
            
            //정답을 체크 안했으면 체크해달라고 안내
            if(selectCheck == null || selectCheck == ''){
                alert("정답을 체크해주세요!")
                return
            } else {
                $(".quiz__btn .next").fadeIn();
                $(".quiz__btn .comment").fadeIn();
                //정답을 체크 햇으면 맞는지 않맞는지 판단
                if(selectCheck == quizAnswer){
                    //정답
                    $(".quiz__selects #select" + quizAnswer).addClass("correct");
                    $(".quiz__selects input").attr("disabled",true)
                } else {
                    //오답
                    $(".quiz__selects #select" + selectCheck).addClass("incorrect");
                    $(".quiz__selects #select" + quizAnswer).addClass("correct");
                    $(".quiz__selects input").attr("disabled",true)
                }
            }
        }
        
        //문제 데이터 가져오기
        function quizData(){
            let quizSubject = $("#quizSubject").val();
            $.ajax({
                url: "../quiz/quizInfo.php",
                method: "POST",
                data: {"quizSubject": quizSubject},
                dataType: "json",
                success: function(data){
                    console.log(data);
                    // $(".section__title").text(data.quiz.quizSubject + " 퀴즈");
                    quizView(data.quiz);
                },
                error: function(request, status, error){
                    console.log('request' + request);
                    console.log('status' + status);
                    console.log('error' + error);
                }
            })
        }
        quizData()

        //과목 선택
        $("#quizSubject").change(function(){
            quizData();
                $(".quiz__selects input").attr("disabled",false)
                $(".quiz__selects input").prop("checked", false);
                $(".quiz__selects input").removeClass("correct");
                $(".quiz__selects input").removeClass("incorrect");
                $(".quiz__btn .next").fadeOut();
                $(".quiz__btn .comment").fadeOut();
        })

        //정답 확인
        $(".quiz__btn .confirm").click(function() {
            //정답을 클릭 했는지 안했는지 판단
            quizCheck();

            //보여지는거 
            // $(".quiz__btn .next").fadeIn();//fadeOut //fadeToggle

            // $(".quiz__btn .next").slideDown();
            // $(".quiz__btn .next").show();

            //해설보기 -> 틀렸을때 나와야함
            // $(".quiz__btn .comment").fadeIn();


            //다음문제 버튼
            $(".quiz__btn .next").click(function(){
                quizData();
                $(".quiz__selects input").attr("disabled",false)
                $(".quiz__selects input").prop("checked", false);
                $(".quiz__selects input").removeClass("correct");
                $(".quiz__selects input").removeClass("incorrect");
                $(".quiz__btn .next").fadeOut();
                $(".quiz__btn .comment").fadeOut();
            })
        })

        // layer
        $(".quiz__btn .comment").click(function () {
            $(".layer").slideDown(300);
            $(".layer_bg").show();
        })
        $(".layer .close").click(function () {
            $(".layer").slideUp(300);
            $(".layer_bg").hide();
        })
    </script>
        <!-- //quiz -->

        <section id="notice-type" class="section center pink">
            <div class="container">
                <h3 class="section__title">새로운 소식</h3>
                <p class="section__desc">여행과 관련된 새로운 소식입니다. 다양한 정보를 확인하세요!</p>
                <div class="notice__inner">
                    <?php
                       $sql = "SELECT * FROM myBoard ORDER BY boardID DESC LIMIT 5";
                       $result = $connect -> query($sql);
                    ?>
                    <article class="notice">
                        <h4>최신게시판</h4>
                        <ul>
                            <?php foreach($result as $myBoard){ ?>
                            <li><a href="../board/boardView.php?boardID=<?=$myBoard['boardID']?>"><?=$myBoard['boardTitle']?></a><span class="time"><?=date('Y-m-d', $myBoard['regTime'])?></span></li>
                            <?php } ?>
                        </ul>
                        <a href="../board/board.php" class="more">더보기</a>
                    </article>
                     <article class="notice">
                         <h4>댓글</h4>
                         <ul>
                            <?php
                                $sql = "SELECT * FROM myComment ORDER BY commentID DESC LIMIT 5";
                                $result = $connect -> query($sql);
                            ?>
                             <?php foreach($result as $myComment){ ?>
                             <li><a href="../comment/comment.php"><?=$myComment['youText']?></a><span class="time"><?=date('Y-m-d', $myComment['regTime'])?></span></li>
                             <?php } ?>
                         </ul>
                         <a href="../board/board.php" class="more">더보기</a>
                     </article>
                </div>
            </div>
        </section>
        
        <!-- //notice-type -->

    </main>
    <!-- //main -->

    <?php
        include "../include/footer.php";
    ?>
    <!-- //footer -->
    <script>
        const sliderWrap = document.querySelector(".slider__wrap");
        const sliderImg = document.querySelector(".slider__img");
        const sliderInner = document.querySelector(".slider__inner");
        const slider = document.querySelectorAll(".slider");
        const sliderBtn = document.querySelector(".slider__btn");
        const sliderBtnPrev = document.querySelector(".slider__btn .prev");
        const sliderBtnNext = document.querySelector(".slider__btn .next");
        const sliderDot = document.querySelector(".slider__dot");
        
        let posInitial = "";
        let dotIndex = "";
        let sliderTimer = "";
        let interval = 2500;

        let currentIndex = 0;
        let sliderWidth = sliderImg.offsetWidth;    //이미지 가로 값
        let sliderLength = slider.length    //이미지 갯수
        let slideFirst = slider[0]; //첫 번째 이미지
        let slideLast = slider[sliderLength - 1]; //마지막 이미지
        let cloneFirst = slideFirst.cloneNode(true);    //첫 번째 이미지 복사
        let cloneLast = slideLast.cloneNode(true);  //마지막 이미지 복사

        //이미지 복사 jQrery = appendTo()/preppendTo
        sliderInner.appendChild(cloneFirst);
        sliderInner.insertBefore(cloneLast, slideFirst);

        //이미지 복사 jQrery = appendTo()/preppendTo
        sliderInner.appendChild(cloneFirst);
        sliderInner.insertBefore(cloneLast, slideFirst);

        function gotoSlider(index){
            sliderInner.classList.add("transition");
            sliderInner.style.left = -sliderWidth * (index + 1) + "px";
            console.log(currentIndex);
            currentIndex = index;
            // console.log(index)
            dotActive();
        }

        function dotInit(){
            for(let i=0; i<sliderLength; i++){
                dotIndex += "<a href='#' class='dot'></a>";
            }
            dotIndex += "<a href='#' class='play'>play</a>";
            dotIndex += "<a href='#' class='stop show'>stop</a>";
            sliderDot.innerHTML = dotIndex;
            sliderDot.firstElementChild.classList.add("active");
        }

        //닷 버튼 활성화
        function dotActive(){
            let dotAll = document.querySelectorAll(".slider__dot .dot");
            dotAll.forEach(dot => { //전체 닷 메뉴 비활성화
                dot.classList.remove("active");
            })
            //현재 보고 있는 이미지 닷 활성화
            if(currentIndex == sliderLength){   //마지막 이미지 왔을 때
                dotAll[0].classList.add("active");
            } else if(currentIndex == -1){     //처음 이미지 왔을 때
                dotAll[sliderLength -1].classList.add("active");
            } else {
                dotAll[currentIndex].classList.add("active");
            }
        }
        
        dotInit();

        function autoPlay(){
            sliderTimer = setInterval(()=>{
                gotoSlider(currentIndex + 1);
            }, interval)
        }
        autoPlay()
        function stopPlay(){
            clearInterval(sliderTimer);
        }

        sliderBtnPrev.addEventListener("click", () => {
            let prevIndex = currentIndex - 1;
            gotoSlider(prevIndex);
        });
        sliderBtnNext.addEventListener("click", () => {
            let nextIndex = currentIndex + 1;
            gotoSlider(nextIndex);
        });
        
        sliderInner.addEventListener("transitionend", () => {
            sliderInner.classList.remove("transition");
            if(currentIndex == -1){
                sliderInner.style.left =  -(sliderLength * sliderWidth) + "px";
            console.log(currentIndex);
            currentIndex = sliderLength -1;
            }
            if(currentIndex == sliderLength){
                sliderInner.style.left = -(1 * sliderWidth) + "px";
            console.log(currentIndex);
            currentIndex = 0;
            }
        });
        

        document.querySelector(".play").addEventListener("click", () => {
            document.querySelector(".play").classList.remove("show");
            document.querySelector(".stop").classList.add("show");
            autoPlay();
        ;})
        document.querySelector(".stop").addEventListener("click", () => {
            document.querySelector(".play").classList.add("show");
            document.querySelector(".stop").classList.remove("show");
            stopPlay();
        })
        document.querySelectorAll(".slider__dot .dot").forEach((dot,index) => {
           dot.addEventListener("click", () => {
            gotoSlider(index);
           });
       });
</script>
</body>
</html>