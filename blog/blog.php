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
    <title>여행 블로그</title>
    <?php
        include "../include/style.php";
    ?>
</head>
<body>
<?php
        include "../include/skip.php";
    ?>
    <!-- //skip -->

    <?php
        include "../include/header.php";
    ?>
    <!-- //header -->

    <main id="contents">
        <h2 class="ir_so">컨텐츠 영역</h2>
        <section id="blog-type" class="section center mb100">
            <div class="container">
                <h3 class="section__title">여행 블로그</h3>
                <p class="section__desc">여행과 관련된 블로그입니다. 다양한 정보를 확인하세요!</p>
                <div class="blog__inner">
                    <div class="blog__search">
                        <form action="blogSearch.php" method="get" name="">
                            <fieldset>
                                <legend class="ir_so">검색 영역</legend>
                                <input type="search" name="blogSearch" id="blogSearch" class="search" placeholder="검색어를 입력해주세요!">
                                <label for="blogSearch" class="ir_so">검색</label>
                                <button class="button">검색</button>
                            </fieldset>
                        </form>
                    </div>
                    <div class="blog__btn">
                       <a href="blogWrite.php">글쓰기</a>
                    </div> 
                    <div class="blog__cont">
<?php
    $sql = "SELECT blogImgFile, blogCategory, blogTitle, blogContents, blogAuthor, blogRegTime, blogID FROM myBlog WHERE blogDelete = 1 ORDER BY blogID DESC";
    $result = $connect -> query($sql);

    foreach($result as $blog){?>
        <article class="blog">
            <figuer class="blog__header" aria-hidden="true">
                <a href="blogView.php?blogID=<?=$blog['blogID']?>" style="background-image: url(../assets/img/blog/<?=$blog['blogImgFile']?>);"></a>
            </figuer>
            <div class="blog__body">
                <span class="blog__cate"><?=$blog['blogCategory']?></span>            
                <div class="blog__title"><a href="blogView.php?blogID=<?=$blog['blogID']?>"><?=$blog['blogTitle']?></a></div>
                <div class="blog__desc"><?=$blog['blogContents']?></div>
                <div class="blog__info">
                    <span class="author"><a href="#"><?=$blog['blogAuthor']?></a></span>
                    <span class="date"><?=date('Y-m-d', $blog['blogRegTime'])?></span>
                    <span class="modify"><a href="blogModify.php?blogID=<?=$blog['blogID']?>">수정</a></span>
                    <span class="delete"><a href="blogRemove.php?blogID=<?=$blog['blogID']?>"onclick="return noticeRemove();">삭제</a></span>
                </div>
            </div>
        </article>
<?php } ?>


                        <!-- <article class="blog">
                            <figuer class="blog__header">
                                <img src="../assets/img/card04@2x.png" alt="블로그 이미지">
                            </figuer>
                            <div class="blog__body">
                                <span class="blog__cate">여수</span>
                                <div class="blog__title">여수밤바다</div>
                                <div class="blog__desc">연일 유례없는 최강한파로 대한민국이 꽁꽁 얼어붙으면서, 따뜻한 날씨와 여행이 그리워지는 계절이다. 다시 벚꽃이 피고, 온화한 기운이 퍼질때쯤 당신은 어디로 여행을 떠나고 싶은가? 아름다운 여수밤바다</div>
                                <div class="blog__info">
                                    <span class="author"><a href="#">박지선</a></span>
                                    <span class="date">2022-02-02 21:03</span>
                                    <span class="modify"><a href="#">수정</a></span>
                                    <span class="delete"><a href="#">삭제</a></span>
                                </div>
                            </div>
                        </article> -->
                                      
                    </div>
                    <div class="blog__pages">          
                        <ul>
                            <li><a href="#">&lt;&lt;</a></li>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#">&gt;</a></li>
                            <li><a href="#">&gt;&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>  
    <!-- //main -->

    <?php
        include "../include/footer.php";
    ?>
    <!-- //footer -->
    <script>
        function noticeRemove(){
            let notice = confirm("정말 삭제하시겠습니까?", "");
            return notice;
        }
    </script>
</body>
</html>