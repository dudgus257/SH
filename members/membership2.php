<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <link rel="stylesheet" type="text/css" href="../css/membership2.css">
    <style type="text/css">
        
    </style>
    <script type="text/javascript" src="../jquery.js"></script>
    <script src="../js/jquery-3.6.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            
            $("submit, button").hover(function(){
            $(this).addClass("sel");
        }, function(){
            $(this).removeClass("sel")
        });

        $("a").hover(function(){
            $(this).addClass("sel2");
        }, function(){
            $(this).removeClass("sel2")
        }); 
                
        $(".gnb > ul > li, .nav_bg").mouseenter(function(){
            $(".gnb ul ul, .nav_bg").stop().slideDown("fast");
        });
        $(".gnb > ul > li, .nav_bg").mouseleave(function(){
            $(".gnb ul ul, .nav_bg").stop().slideUp("fast");
        });
                        
        })                   
    </script>
</head>
<body>
    <div class="wrap">
    <header>
    <h1 class="logo"><a href="#">SSOC</a></h1>
        <p class="line1">선</p>

        <h2 class="user_menu">사용자 메뉴</h2>
    <ul class="user_menu1">
        <li class="login"><a href="../login/login.php">로그인</a></li>
        <li class="slash">/</li>
        <li class="membership"><a href="membership.php">회원가입</a></li>
    </ul>

    <nav class="gnb">
        <h2>주요메뉴</h2>
            <ul>
                <li class="gnb1"><a href="#">온라인학습</a>
                    <ul class="gnb2">
                        <li><a href="#">전체</a></li>
                        <li><a href="#">외국어</a></li>
                        <li><a href="#">IT</a></li>
                        <li><a href="#">자기개발</a></li>
                        <li><a href="#">생활/취미</a></li>
                        <li><a href="#">인문소양</a></li>
                        <li><a href="#">자격취득</a></li>
                        <li><a href="#">부모</a></li>
                        <li><a href="#">청소년</a></li>
                        <li><a href="#">단기학습</a></li>
                    </ul>
                </li>
            

                <li class="gnb2"><a href="#">화상학습</a></li>

                <li class="gnb3"><a href="#">시흥학습</a>
                    <ul>
                        <li><a href="#">시흥클래스</a></li>
                    </ul>
                </li>

                <li class="gnb4"><a href="#">사람도서관</a>
                    <ul>
                        <li><a href="#">이용안내</a></li>
                        <li><a href="#">사람책 등록</a></li>
                        <li><a href="#">열람하기</a></li>
                        <li><a href="#">프로그램</a></li>
                        <li><a href="#">사람도서관 소식</a></li>
                    </ul>
                </li>

                <li class="gnb5"><a href="#">교육정보</a>
                    <ul>
                        <li><a href="#">교육도시 시흥</a></li>
                        <li><a href="#">교육안내</a></li>
                    </ul>
                </li>

                <li class="gnb6"><a href="#">e-스튜디오</a>
                    <ul>
                        <li><a href="#">이용안내</a></li>
                        <li><a href="#">예약하기</a></li>
                    </ul>
                </li>

                <li class="gnb7"><a href="#">소식나눔</a>
                    <ul>
                        <li><a href="#">쏙(SSOC)이란?</a></li>
                        <li><a href="#">공지사항</a></li>
                        <li><a href="#">이벤트</a></li>
                        <li><a href="#">자주 묻는 질문</a></li>
                    </ul>
                </li>
                <p class="gnb8"><a href="#">더보기</a></p>
            </ul>          
        </nav>
    <div class="nav_bg"></div>
</header>
        <p class="line2">선</p>

    <h2 class="login2">회원가입</h2>

    <div class="select0">
        <p class="select1">1</p>
        <p class="next1">next</p>
        <p class="select2">2</p>
        <p class="next2">next</p>
         <p class="select3">3</p>
    </div>
    <div class="select4">
        <p class="select5">회원가입<br>방법선택</p>
        
        <p class="select6">정보입력<br>및 약관동의</p>
        
         <p class="select7">회원가입<br>완료</p>
    </div>
    <p class="mem">
        회원가입 시 사용할 본인인증 방법을<br>선택하여 진행해 주세요.
    </p>
    <form name="login_form" action="login_ok.php" method="post" onsubmit="return login_form_check()">
        <fieldset>
            <legend>회원가입</legend>
            
                
                <p>                    
                    <button type="submit" class="login3">휴대폰번호로 회원가입<br><span class="login3_1">본인명의의 휴대폰번호로 본인인증을 해주세요.</span></button>
                </p>                
                <p>
                    <button type="button" class="membership2" onclick="location.href='sendmail.php'">이메일 주소로 회원가입</button>
                </p>
        </fieldset>
    </form>

    
        
       
            
            <p class="gseek5">
                SNS 계정으로 간편하게 회원가입하기
            </p>
        
        <div class="gseek6">
            <div class="naver">
                <ul>
                    <li class="naver2"><a href="#"></a></li>                    
                </ul>
            </div>
            <div class="kakao">
                <ul>
                    <li class="kakao2"><a href="#"></a></li>                    
                </ul>
            </div>
            <div class="apple">
                <ul>
                    <li class="apple2"><a href="#"></a></li>                    
                </ul>
            </div>            
        </div>
        <div class="gseek7">
            <div class="gseek8">
                <ul>
                    <li class="naver3"><a href="#">네이버로<br>시작하기</a></li>
                </ul>
            </div>
            <div class="gseek9">
                <ul>
                    <li class="kakao3"><a href="#">카카오로<br>시작하기</a></li>
                </ul>
            </div>
            <div class="gseek10">
                <ul>
                    <li class="apple3"><a href="#">Apple로<br>등록</a></li>
                </ul>
            </div>
        </div>

                                    <!-- 하단메뉴 -->

    <p class="line7">선</p>
        <div id="center">
            <ul class="center0">
                <li class="cen">학습지원센터</li>
                <li class="cen0">1600-2114</li>
                <li class="cen1">평일 09~18시, 토요일 09~13시 점심시간 12~13시, 공휴일 휴무</li>
            </ul>

            <ul class="center1">
                <li class="cen2">사람도서관　</li>
                <li class="cen3">031-310-5265~8</li>
                <li class="cen4">평일 09~18시, 점심시간 12~13시, 주말 · 공휴일 휴무</li>
            </ul>

            <ul class="center2">
                <li class="cen5">e-스튜디오　</li>
                <li class="cen6">031-310-2502</li>
                <li class="cen7">평일 09~18시, 점심시간 12~13시, 주말 · 공휴일 휴무</li>
            </ul>
        </div>

        <footer id="foot">
            <p class="foot0"><a href="#">로고</a></p>

            <div id="foot1">
                <ul>
                    <li class="foot2"><a href="#">개인정보 처리방침</a></li>
                    <li class="foot3"><a href="#">이용약관</a></li>
                    <li class="foot4"><a href="#">저작권 보호정책</a></li>
                    <li class="foot5"><a href="#">사이트맵</a></li>
                </ul>
            </div>

            <div id="foot6">
                <ul>
                    <li class="foot7">시흥시 평생교육원</li>
                    <li class="foot8">
                        <address>
                            (14902)경기도 시흥시 소래산길11(시흥ABC행복학습타운) TEL:031-310-2508 FAX:031-380-5366
                        </address>
                    </li>
                </ul>

                <br>

            <div id="foot9">
                <ul>
                    <li class="foot10">COPYRIGHTⓒ2022. SIHEUNG CITY.ALL RIGHTS RESERVED.</li>
                </ul>
            </div>
                
            </div>
        </footer>
    </div>
</body>
</html>