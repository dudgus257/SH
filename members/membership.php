<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>membership</title>
    <link rel="stylesheet" type="text/css" href="../css/membership.css">
    <style type="text/css">
                
    </style>
    <script type="text/javascript" src="../jquery.js"></script>
    <script src="../js/jquery-3.6.1.min.js"></script>    
    <script type="text/javascript">
        $(document).ready(function(){
        
        $(".gnb > ul > li, .nav_bg").mouseenter(function(){
		$(".gnb ul ul, .nav_bg").stop().slideDown("fast");
	    });
	    $(".gnb > ul > li, .nav_bg").mouseleave(function(){
		$(".gnb ul ul, .nav_bg").stop().slideUp("fast");
	    });

        $("a").hover(function(){
            $(this).addClass("sel2");
        }, function(){
            $(this).removeClass("sel2")
        });

        
        $("button").hover(function(){
            $(this).addClass("sel");
        }, function(){
            $(this).removeClass("sel")
        });                            


        function selectAll(selectAll)  {
        const checkboxes 
            = document.getElementsByName('apply');
  
        checkboxes.forEach((checkbox) => {
        checkbox.checked = selectAll.checked;
        })
        }                            
    });
       
    </script>
</head>
<body>

    <div class="wrap">

    <header>
    <h1 class="logo"><a href="../siheung.php">SSOC</a></h1>
        <p class="line1">선</p>

        <h2 class="user_menu">사용자 메뉴</h2>
    <ul class="user_menu1">
        <li class="login"><a href="../login/login.php">로그인</a></li>
        <li class="slash">/</li>
        <li class="membership"><a href="#">회원가입</a></li>
    </ul>

    <nav class="gnb">
        <h2>주요메뉴</h2>
            <ul>
                <li class="gnb1"><a href="#">온라인학습</a>
                    <ul>
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
        <h2 class="m">경기도 평생학습포털<br>통합 회원가입</h2>            
                <div class="m2">                                    
                    <ul class="m3">
                        <li class="m3_1">일반회원<span class="m3_3">(14세 이상)</span></li>
                        <li class="m3_2">본인명의의 휴대폰 또는 아이핀으로<br> 인증합니다.</li>
                        <li><button type="button" class="m3_4" onclick="location.href='membership2.php'">가입하기</button></li>
                    </ul>                                   
                    <ul class="m4">                        
                        <li class="m4_1">어린이회원<span class="m4_3">(만 14세 미만)</span></li>
                        <li class="m4_2">부모님의 휴대폰 또는 아이핀 인증을 한번 더<br> 거쳐야 합니다.</li>
                        <li><button type="button" class="m4_4">가입하기</button></li>
                    </ul>
                </div>
                
                
                <p class="line3">선</p>

                <h3>통합회원 안내</h3>
                <p class="total_member">
                    시흥교육캠퍼스 쏙(SSOC)과 경기도평생학습포털 지식<br>(GSEEK)에서 제공하는 다양한 서비스를 하나의<br> 아이디로 이용하실 수 있습니다.
                </p>
                
               


                    

                        

                                <!-- form -->

                                
        

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