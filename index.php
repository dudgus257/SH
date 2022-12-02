<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>siheung_main</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/siheung.css">    
    <style type="text/css">        
    </style>    
    <script type="text/javascript" src="jquery.js"></script>
    <script src="js/jquery-3.6.1.min.js"></script>    
    <script type="text/javascript">          
    $(document).ready(function(){
            
            $(".gnb > ul > li, .gnb_full_bg").hover(function(){
                $(this).find("ul").stop().slideDown("fast");
                $(".gnb_full_bg").stop().slideDown("fast");
            }, function(){
                $(this).find("ul").hide();
                $(".gnb_full_bg").hide();
            })
    
            
            /* $(".gnb1").mouseenter(function(){
                $(".gnb1>ul").stop().slideDown("fast");
            });
    
            $(".gnb1").mouseleave(function(){
                $(".gnb1>ul").stop().slideUp("fast");
            });
    
            $(".gnb2").mouseenter(function(){
                $(".gnb2 ul ").stop().slideDown("fast");
            });
    
            $(".gnb2").mouseleave(function(){
                $(".gnb2 ul ").stop().slideUp("fast");
            });
    
            $(".gnb3").mouseenter(function(){
                $(".gnb3>ul").stop().slideDown("fast");
            });
    
            $(".gnb3").mouseleave(function(){
                $(".gnb3>ul").stop().slideUp("fast");
            });
    
            $(".gnb4").mouseenter(function(){
                $(".gnb4>ul").stop().slideDown("fast");
            });
    
            $(".gnb4").mouseleave(function(){
                $(".gnb4>ul").stop().slideUp("fast");
            });
    
            $(".gnb5").mouseenter(function(){
                $(".gnb5>ul").stop().slideDown("fast");
            });
    
            $(".gnb5").mouseleave(function(){
                $(".gnb5>ul").stop().slideUp("fast");
            });
    
            $(".gnb6").mouseenter(function(){
                $(".gnb6>ul").stop().slideDown("fast");
            });
            
            $(".gnb6").mouseleave(function(){
                $(".gnb6>ul").stop().slideUp("fast");
            }); */
    
                        /* gnb1 */
    
            /* $(".gnb1").mouseenter(function(){
                $(".bg1").stop().slideDown("fast");
            });
    
            $(".gnb1").mouseleave(function(){
                $(".bg1").stop().slideUp("fast");
            }); */
    
                        /* gnb2 */
    
            /* $(".gnb2").mouseenter(function(){
                $(".bg2").stop().slideDown("fast");
            });
    
            $(".gnb2").mouseleave(function(){
                $(".bg2").stop().slideUp("fast");
            }); */        
    
            /* here ↑ */
    
    
            /*     $(".gnb").mouseenter(function(){
                $(".small > ul").stop().slideDown("fast");
            });
                $(".gnb").mouseleave(function(){
                $(this).find("ul").stop().slideUp("fast");
            }); */
    
           /*  $(".gnb > ul > li, .nav_bg").mouseenter(function(){
            $(".gnb ul ul, .nav_bg").stop().slideDown("fast");
        });
        $(".gnb > ul > li, .nav_bg").mouseleave(function(){
            $(".gnb ul ul, .nav_bg").stop().slideUp("fast");
        }); */
    
            $("a").hover(function(){
                $(this).addClass("sel");
            }, function(){
                $(this).removeClass("sel")
            })
            
            $(function(){
            $(".next2").click(function(){
                    /* $(".direct2").animate({"margin-left": "-=200px"}, 1000 ); */
                    $(".direct2").animate({"margin-left": "-1200px"}, 500 );
                
                    /* $(".direct2>li:first-child").insertAfter(".direct2>li:last-child") ; */
                      
                });
            });
    
            
            $(function(){
            $(".prev2").click(function(){
                /* $(".direct2").animate({"margin-left": "+=200px"}, 1000 ); */
                $(".direct2").animate({"margin-left": "0px"}, 500 );
                      
    
                
                });
            });
    
           /*  $(".next2").click(function(){
                $(".direct3").animate({"margin-left": "-200px"}, 1000, function(){
                    $(".direct2>li:first-child").insertAfter(".direct2>li:last-child");
                });
            });
    
            $(".next2").click(function(){
                $(".direct3").animate({"margin-left": "-200px"}, 1000, function(){
                    $(".direct2>li:first-child").insertAfter(".direct2>li:last-child");
                });
            }); */
            
                        /* news slide ↓ */
    
            /* setInterval(fnSlide, 3000);
            function fnSlide() {
                $(".news_slide").animate({"margin-left": "-=300px"}, 3000, function (){
                    
                    
                });
            }; */
            
            
            
            
           
            
            
    
        });
    
            /* function left_func(){
                var inner = document.getElementById(".news_slide > li");
                inner.style.left = "-100px";
            } */
    
           /*  var gall = setInterval(galleryfun, 2000);
            var inter = true;
            var idx = 2;
    
                function galleryfun(){
                    
                    $(".news_slide").animate({
                        "left":-300*idx+"px" },300);
                        $(".news_slide li").eq(idx-1).addClass("on").siblings().removeClass("on");
         idx++;
                    if(idx> $(".news_slide li").length-3){
                        $(".news_slide").animate({ "left":0
                        },0);
                        idx=0;
                    }                
                }
    
                $("#insAfter").hover(function(){
                    if(inter==true){
                        clearInterval(gall);
                        inter=false;
                    }
                },function(){
                    if(inter==false){
                        gall = setInterval(galleryfun, 2000);
                        inter=true;
                    }
                }); */
    
    
            
    
            
    
    
    
    
    
    
    
            let currSlide = 1;
    
            
            function button_click(num){
                showSlide((currSlide += num))
            }
            function showSlide(num){
                const slides = document.querySelectorAll(".slide");
                if(num>slides.length){
                    currSlide =1;
                }if(num<1){
                    currSlide = slides.length;
                }
                for(let i=0; i<slides.length; i++){
                    slides[i].style.display="none";
                    }slides[currSlide -1].style.display="block";
                };
            
    
            var left_value = 0;
            
    
            function left_func(){
                var inner = document.getElementById("inner_div");
                left_value = left_value - 200;
                if(left_value <= -5474){
                    left_value = -5474;
                }
                inner.style.left = left_value+"px"; 
            }
    
            function right_func(){
                var inner = document.getElementById("inner_div");
                left_value = left_value + 200;
                if(left_value > 0){
                    left_value = 0;
                }
                inner.style.left = left_value+"px";
    
            }          
    </script>
    
</head>
<body>


    <!-- .more => 수정해야 함 버튼형식 -->


    <div class="wrap">

    <!-- header -->
    
    <header id="header" class="header">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <h2 class="screen_out">사용자 메뉴</h2>
        <div class="top">
            <ul class="top_menu">
                <li class="top1"><a href="#">시흥시청</a></li>
                <li class="top2"><a href="#">평생학습</a></li>
                <li class="top3"><a href="siheung_sub.php">분야별</a></li>
                <li class="top4"><a href="#">일자리경제</a></li>
                <li class="top5"><a href="#">통합예약</a></li>
                <li class="top6"><a href="#">아동친화도시</a></li>        
                <li class="top7"><a href="login/login.php">로그인</a></li>
                <li class="top8">|</li>
                <li class="top9"><a href="members/membership.php">회원가입</a></li>
            </ul>
        </div>
        <h1 class="logo"><a href="#">시흥</a></h1>

                                <!-- gnb -->

        <div class="nav_bg">
            <nav class="gnb">
                <h2 class="blind">주요메뉴</h2>
                    <ul>
                        <li class="gnb1"><span class="a1"><a href="#">수강신청</a></span>
                            <ul class="bg1">
                                <li>
                                    <ul class="small_gnb">
                                        <li><span class="gnb1_1"><a href="#">수강신청</a></span>
                                            <ul>
                                                <li><a href="#">수강신청</a></li>
                                                <li><a href="#">수강신청 방법</a></li>
                                                <li><a href="#">수강취소(수강료반환)방법</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>   
                        <li class="gnb2"><span class="a2"><a href="#">평생학습도시</a></span>
                            <ul class="bg2">
                                <li>
                                    <ul class="small_gnb1">
                                        <li><span class="gnb2_1"><a href="#">학습동아리란</a></span>
                                            <ul>
                                                <li><a href="#">시흥시학습동아리현황</a></li>
                                                <li><a href="#">학습동아리란</a></li>
                                                <li><a href="#">학습동아리검색</a></li>
                                                <li><a href="#">학습동아리 등록 신청</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="small_gnb2">
                                        <li><span class="gnb2_2"><a href="#">학습소외계층</a></span>
                                            <ul>
                                                <li><a href="#">성인문해교육</a></li>
                                                <li><a href="#">장애인 평생교육</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="small_gnb3">
                                        <li><span class="gnb2_3"><a href="#">평생학습마을</a></span>
                                            <ul>
                                                <li><a href="#">평생학습마을이란</a></li>
                                                <li><a href="#">평생학습마을소개</a></li>
                                                <li><a href="#">평생학습마을지도</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="small_gnb4">
                                        <li><span class="gnb2_4"><a href="#">일터학습지원</a></span>
                                            <ul>
                                                <li><a href="#">강사역량 강화교육</a></li>
                                                <li><a href="#">강사인턴</a></li>                                        
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="small_gnb5">
                                        <li><span class="gnb2_5"><a href="#">강사뱅크</a></span>
                                            <ul>
                                                <li><a href="#">강사뱅크란</a></li>
                                                <li><a href="#">강사뱅크 등록 및 현황</a></li>
                                                <li><a href="#">강사모집 게시판</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="small_gnb6">
                                        <li><span class="gnb2_6"><a href="#">평생학습네트워크</a></span></li>
                                    </ul>
                                    <ul class="small_gnb7">
                                        <li><span class="gnb2_7"><a href="#">평생학습축제</a></span>
                                            <ul>
                                                <li><a href="#">평생학습축제 소개</a></li>
                                                <li><a href="#">축제 게시판</a></li>
                                                <li><a href="#">축제사진갤러리</a></li>
                                            </ul>                                            
                                        </li>
                                    </ul>
                                    <ul class="small_gnb8">
                                        <li><span class="gnb2_8"><a href="#">학습재능기부</a></span>                                    
                                            <ul>
                                                <li><a href="#">재능기부란</a></li>
                                                <li><a href="#">학습재능기부(나눔)</a></li>
                                                <li><a href="#">학습재능기부(받음)</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="small_gnb9">
                                        <li><span class="gnb2_9"><a href="#">ESD인증</a></span>
                                            <ul>
                                                <li><a href="#">학습동아리 활성화</a></li>
                                                <li><a href="#">평생학습네트워크 활성화</a></li>
                                                <li><a href="#">평생학습마을 육성</a></li>
                                            </ul>
                                        </li>           
                                    </ul>
                                </li>
                            </ul>
                        </li>                        
                        <li class="gnb3"><span class="a3"><a href="#">시흥아카데미</a></span>
                            <ul class="bg3">
                                <li>
                                    <ul class="small_gnb10">
                                        <li><span class="gnb3_1"><a href="#">아카데미 소개</a></span></li>
                                    </ul>
                                    <ul class="small_gnb11">
                                        <li><span class="gnb3_2"><a href="#">지난 강의 목록</a></span>
                                            <ul>
                                                <li><a href="#">참살이 학부</a></li>
                                                <li><a href="#">꿈모작 학부</a></li>
                                                <li><a href="#">교양 학부</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="small_gnb12">
                                        <li><span class="gnb3_3"><a href="#">콘텐츠 모음집</a></span>
                                            <ul>
                                                <li><a href="#">콘텐츠 모음집</a></li>
                                                <li><a href="#">학교별 목록</a></li>
                                                <li><a href="#">주제별 목록</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="gnb4"><span class="a4"><a href="#">정보마당</a></span>
                            <ul class="bg4">
                                <li>
                                    <ul>
                                        <li><span class="gnb4_1"><a href="notice/list.php">공지사항</a></span></li>
                                    </ul>
                                    <ul>
                                        <li><span class="gnb4_2"><a href="#">교육개설요청</a></span></li>
                                    </ul>
                                    <ul>
                                        <li><span class="gnb4_3"><a href="#">자료실</a></span></li>
                                    </ul>
                                    <ul>
                                        <li><span class="gnb4_4"><a href="#">온라인 설문</a></span></li>
                                    </ul>
                                    <ul>
                                        <li><span class="gnb4_5"><a href="#">사이버 학습관</a></span></li>
                                    </ul>
                                </li>
                            </ul> 
                        </li>
                        <li class="gnb5"><span class="a5"><a href="#">평생학습기관</a></span>
                            <ul class="bg5">
                                <li>
                                    <ul class="small_gnb13">
                                        <li><span class="gnb5_1"><a href="#">시흥ABC행복학습타운</a></span>
                                            <ul>
                                                <li><a href="#">학습타운소개</a></li>
                                                <li><a href="#">시설배치도</a></li>
                                                <li><a href="#">시설소개</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="small_gnb14">
                                        <li><span class="gnb5_2"><a href="#">청년협업마을</a></span>
                                            <ul>
                                                <li><a href="#">청년협업마을 소개</a></li>
                                                <li><a href="#">시설배치도</a></li>
                                                <li><a href="#">프로그램소개</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="small_gnb15">
                                        <li><span class="gnb5_3"><a href="#">대야평생학습관</a></span>
                                            <ul>    
                                                <li><a href="#">대야평생학습관 소개</a></li>
                                                <li><a href="#">프로그램 소개</a></li>
                                            </ul>
                                        </li>                                                                        
                                    </ul>
                                    <ul class="small_gnb16">
                                        <li><span class="gnb5_4"><a href="#">정왕평생학습관</a></span>
                                            <ul> 
                                                <li><a href="#">정왕평생학습관 소개</a></li>
                                                <li><a href="#">프로그램 소개</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li><span class="gnb5_5"><a href="#">청년스테이션</a></span></li>                                                                    
                                    </ul>
                                </li>    
                            </ul>
                        </li>   
                        <li class="gnb6"><span class="a6"><a href="#">평생교육원</a></span>
                            <ul class="bg6">
                                <li>
                                    <ul class="small_gnb17">
                                        <li><span class="gnb6_1"><a href="#">평생교육원 소개</a></span>
                                            <ul>
                                                <li><a href="#">인사말</a></li>
                                                <li><a href="#">연혁</a></li>
                                                <li><a href="#">조직도</a></li>
                                                <li><a href="#">직원 업무 안내</a></li> 
                                            </ul>
                                        </li>           
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
            </nav>
        </div>
        <div class="gnb_full_bg"></div>  
</header>

                <!-- main -->
                
<main id="content" class="content">
    <form name="search" id="search" action="search" method="post" onsubmit="return form_check()" onbutton="return form_check()">
        <fieldset>
            <legend>검색</legend>
                <select name="who" id="who">
                    <option>대상별</option>
                    <option>누구나</option>
                    <option>유아</option>
                    <option>초등학생</option>
                    <option>청소년</option>
                    <option>청년</option>
                    <option>성인</option>
                    <option>어르신</option>
                </select>
                <select name="how" id="how">
                    <option>교육분야별</option>
                    <option>방과후학교</option>
                    <option>직업능력</option>
                    <option>인문교양</option>
                    <option>시민교육</option>
                    <option>문화예술</option>
                    <option>생활건강</option>
                    <option>정보화</option>
                </select>
                <input type="text" class="search_txt" placeholder="검색어를 입력하세요.">
                <button class="search_button" type="submit">
                    
                        <i class="fas fa-search"></i>
                    
                </button>
        </fieldset>
    </form>                  

                                    <!-- 주요 소식 -->
            <div>
                <h2 class="hide">주요 소식</h2>
                    <div class="academy">
                        <div class="academy3">
                            <div>
                                <p class="academy0">시흥시 NEWS</p>
                                    <p class="academy0_1">                   
                                        1. 시흥 곳곳에서 펼쳐지는 평생학습프로그램 & 행사정보
                                        <br>
                                        2. One For All 콘서트 중 두번째 공연 렉쳐 콘서트 "하·모·베"
                                        <br>
                                        3. One For All 콘서트 중 세번째 공연 공감!회복콘서트(재즈+마술)
                                        <br>
                                        4. "김영철이 시흥에 온다~"
                                        <br>
                                        주제:내가 멈추지 않고 항상 변화하는 이유
                                        <br>
                                        5. -신중년 낭독연극배우- 신낭배우를 찾습니다!
                                        <br>
                                        6. 포스트 펜더믹 시대, 시흥의 과거를 통해 미래를 보다.
                                        <br>
                                        7. '22년 세바시와 함께하는 지식콘서트 제1회 배움을 보다.
                                        <br>
                                        8. 2022 제7회 시흥시청소년 동아리축제 청소년 깨어나다!!
                                    </p>
                            </div>
                                <a class="prev" onclick="button_click(-1)">&#10094</a>                           
                                <a class="next" onclick="button_click(1)">&#10095</a>
                        
                        </div>
                            <div class="slider">
                                <div><a href="#" id="slide0" class="slide" style="background-image:url(images/one.jpg);"></a></div>
                                <div><a href="#" class="slide" style="background-image:url(images/two.jpg);"></a></div>
                                <div><a href="#" class="slide" style="background-image:url(images/three.jpg);"></a></div>
                                <div><a href="#" class="slide" style="background-image:url(images/four.jpg);"></a></div>                  
                                <div><a href="#" class="slide" style="background-image:url(images/five.jpg);"></a></div>
                                <div><a href="#" class="slide" style="background-image:url(images/six.jpg);"></a></div>
                                <div><a href="#" class="slide" style="background-image:url(images/seven.jpg);"></a></div>
                                <div><a href="#" class="slide" style="background-image:url(images/eight.jpg);"></a></div>
                            </div>
                    </div>     
            </div>
                 
            
                        <!-- 바로가기 -->

    <div class="a">
        <div class="direct">
            <h2 class="direct_menu">바로가기 메뉴</h2>                
                <div class="direct1">
                    <ul class="direct2">                    
                        <li class="direct3"><a href="#"></a>
                            <ul>
                                <li><a href="#">평생학습 바로가기</a></li>
                            </ul>                        
                        </li>
                        <li class="direct4">
                            <ul>
                                <li><a href="#">대야평생학습관</a></li>
                            </ul>
                        </li>
                        <li class="direct5">
                            <ul>
                                <li><a href="#">정왕평생학습관</a></li>
                            </ul>
                        </li>
                        <li class="direct6">
                            <ul>
                                <li><a href="#">강사 등록</a></li>
                            </ul>
                        </li>
                        <li class="direct7">
                            <ul>
                                <li><a href="#">평생학습마을</a></li>
                            </ul>
                        </li>
                        <li class="direct8">
                            <ul>
                                <li><a href="#">시흥교육캠퍼스 쏙<br>(온라인 학습)</a></li>
                            </ul>
                        </li>
                        <li class="direct9">
                            <ul>
                                <li><a href="#">학습동아리</a></li>
                            </ul>
                        </li>
                        <li class="direct10">
                            <ul>
                                <li><a href="#">서울대스누지</a></li>
                            </ul>
                        </li>
                        <li class="direct11">
                            <ul>
                                <li><a href="#">행복교육지원센터<br>(학교&마을)</a></li>
                            </ul>
                        </li>
                        <li class="direct12">
                            <ul>
                                <li><a href="#">청년협업마을</a></li>
                            </ul>
                        </li>
                        <li class="direct13">
                            <ul>
                                <li><a href="#">청년스테이션</a></li>
                            </ul>
                        </li>
                        <li class="direct14">
                            <ul>
                                <li><a href="#">일자리경제포털<br>(교육)</a></li>
                            </ul>
                        </li>  
                    </ul>
                </div>
            
        </div>
        <div>
            <a class="prev2">&#10094</a>                           
            <a class="next2">&#10095</a>
        </div>
    </div>
        

            <!-- 공지사항 -->


    <div class=notice>
        <h2 class="notice1">공지사항</h2>
            <div class="notice2">
                <p class="notice3">평생학습과</p>
                <p class="notice4">2022-10-01</p>
                
                <div class="notice8">
                    <p class="notice9">'개그맨 김영철' 초청강연 참여자 모집</p>
                    <p class="notice9_1">
                        "김영철이 시흥에 온다~"<br>
                        제14회 시흥시평생학습축제 개막식에 개그맨 김영철님을 모시고 초청강연을 진행합니다.<br>
                        정말정말 어렵게 모셨습니다~ 다시 못 올 기회 얼른 신청하세요~ (가족, 지인과 함께 들으시면 더욱 좋습니다.)<br>
                        ★ 주제: 내가 멈추지 않고 항상 변화하는 이유(#자기개발, #꿈, #비전, #..
                    </p>
                </div>
            </div>
            <div class="notice5">
                <p class="notice6">평생학습과</p>
                <p class="notice7">2022-09-15</p>
                <div class="notice5_5">
                    <p class="notice9">2022. 시흥아카데미 「10월 소행성 인문학(미술)」학습자 모집</p>
                    <p class="notice9_2">
                        · 10. 5(수) 19:00 ~ 21:00 도상학으로 보는 랜선 미술관<br>
                        · 10. 12(수) 19:00 ~ 21:00 자연으로 읽는 미술 감상<br>
                        · 10. 19(수) 19:00 ~ 21:00 4대 작가로 보는 랜선 미술<br>
                        시흥아카데미에서 매월 주제별로 소행성 인문학 강의를 운영합니다.<br> (소행성: 소소한 행복과 성장) 10월은 미술인문학으로 편현주 강사님을 ...
                    </p>
                </div>
            </div>
        <a href="notice/list.php" class="notice10">전체 공지사항 &#8640;</a>
        <p class="notice11">|</p>
    </div>
    
                            <!-- 평생학습 인증현황 -->
        
    <div class=unesco>
        <p class="unesco1">평생학습 인증현황</p>
        <p class="unesco2">유네스코 글로벌 학습도시 가입</p>
        <p class="unesco3">시흥형 평생학습네트워크 활성화 사업(2018)</p>
    </div>
        
    <div class="bar">선</div>
    
    <div class="news">
        <!-- <div class="playbutton">
            <a class="news2">left</a>
            <a class="news3">right</a>            
        </div> -->
        <h2 class="news1">주요소식더보기</h2>          
        <div id="frame_div">            
            <div id="inner_div">                            
                <div class="block_div">시흥시 지역사회보장협의체</div>
                <div class="block_div2">|</div>
                <div class="block_div">시화호지속가능파트너십</div>
                <div class="block_div2">|</div>
                <div class="block_div">대통령 직속 일자리위원회</div>
                <div class="block_div2">|</div>
                <div class="block_div">(사)시흥시기업인협회</div>
                <div class="block_div2">|</div>
                <div class="block_div">신용회복위원회</div>
                <div class="block_div2">|</div>
                <div class="block_div">법령-조례 원클릭 서비스</div>
                <div class="block_div2">|</div>
                <div class="block_div">시흥시사회복지정보센터</div>
                <div class="block_div2">|</div>
                <div class="block_div">학생안전지도 아이실드</div>
                <div class="block_div2">|</div>
                <div class="block_div">한국전지안전공사</div>
                <div class="block_div2">|</div>
                <div class="block_div">생활안전지도</div>
                <div class="block_div2">|</div>
                <div class="block_div">국가균형발전위원회</div>
                <div class="block_div2">|</div>
                <div class="block_div">소비자24</div>
                <div class="block_div2">|</div>
                <div class="block_div">시흥시 사회적경제지원센터</div>
                <div class="block_div2">|</div>
                <div class="block_div">자동차민원 대국민포털</div>
                <div class="block_div2">|</div>
                <div class="block_div">성범죄자알림이</div>
                <div class="block_div2">|</div>
                <div class="block_div">시흥시 학교급식지원센터</div>
                <div class="block_div2">|</div>
                <div class="block_div">전국 실시간 대기오염정보</div>
                <div class="block_div2">|</div>
                <div class="block_div">시흥시 장애인가족지원센터</div>
                <div class="block_div2">|</div>
                <div class="block_div">원산지표시 위반정보 공표</div>
                <div class="block_div2">|</div>
                <div class="block_div">경기도 평생학습e배움터</div>
                <div class="block_div2">|</div>
                <div class="block_div">시흥시자원봉사센터</div>
                <div class="block_div2">|</div>
                <div class="block_div">내고장알리미</div>
                <div class="block_div2">|</div>
                <div class="block_div">전기차 충전소</div>
                <div class="block_div2">|</div>
                <div class="block_div">시흥시 1%복지재단 나눔활동</div>
                <div class="block_div2">|</div>
                <div class="block_div">에너지절약포털</div>
                <div class="block_div2">|</div>
                <div class="block_div">한국장학재단(정부학자금대출)</div>
                <div class="block_div2">|</div>
                <div class="block_div">110화상수화 통역</div>
                <div class="block_div2">|</div>
                <div class="block_div">지방공기업경영정보시스템</div>
                <div class="block_div2">|</div>                                                 
            </div>             
        </div>
        <div class="playbutton">            
            <button id="left" onclick="right_func();">&#10094</button>
            <button id="right" onclick="left_func();">&#10095</button>
        </div>
    </div>
</main>            

        <footer id="footer" class="footer">
            <div class="bottom_menu">
                <h2 class="bottom1">사용자 하단메뉴</h2>
                    <ul>
                        <li class="bottom2"><a href="#">관련누리집</a></li>
                        <li class="bottom3">|</li>
                        <li class="bottom4"><a href="#">시민</a></li>
                        <li class="bottom5">|</li>
                        <li class="bottom6"><a href="#">사업자</a></li>
                        <li class="bottom7">|</li>
                        <li class="bottom8"><a href="#">관광객</a></li>
                    </ul>
                </div>
            
<div class="foot">
            <p class="footer_logo"><a href="#">사이트 이용안내(시흥)</a></p>


            <h3 class="policy0">약관 및 정책</h3>


            <div class="policy">
            <ul class="policy1">
                <li class="policy2"><a href="#">개인정보처리방침</a></li>
                <li class="policy3">|</li>
                <li class="policy4"><a href="#">영상정보처리기기운영방침</a></li>
                <li class="policy5">|</li>
                <li class="policy6"><a href="#">저작권정책</a></li>
                <li class="policy7">|</li>
                <li class="policy8"><a href="#">누리집 지도</a></li>
                <li class="policy9">|</li>
                <li class="policy10"><a href="#">오시는길</a></li>
            </ul>

                <p class="address1">주소 및 전화 & 팩스번호</p>
                    <ul class="address2">
                        <li>
                            <p class="address3">시흥시 평생교육원</p>
                                <address>(14902) 경기도 시흥시 소래산길 11(시흥ABC행복학습타운)<span class="footer_bar">&nbsp;&nbsp;&nbsp;|</span></address>
                                <p>TEL: 031-310-2063<span class="footer_bar">&nbsp;&nbsp;&nbsp;|</span></p>
                                <p>FAX: 031-380-5366</p>
                        </li>
                        <li>
                            <p class="address3">대야평생학습관(구 평생학습센터)</p>
                                <address>(14914)경기도 시흥시 은행로 173번길14<span class="footer_bar">&nbsp;&nbsp;&nbsp;|</span></address>
                                <p>TEL:031-310-2511~4<span class="footer_bar">&nbsp;&nbsp;&nbsp;|</span></p>
                                <p>FAX:031-380-5367</p>
                        </li>
                        <li>
                        <p class="address3">정왕평생학습관(구 여성비전센터)</p>
                            <address>(15055)경기도 시흥시 정왕대로 233번길 21<span class="footer_bar">&nbsp;&nbsp;&nbsp;|</span></address>
                            <p>TEL: 031-310-6001~6<span class="footer_bar">&nbsp;&nbsp;&nbsp;|</span></p>
                            <p>FAX: 031-380-5374</p>
                        </li>
                        <li>
                            <p class="address3">정왕평생학습관(구 여성비전센터)수영장</p>
                            <p>　</p>
                            <p>TEL: 031-8084-0150<span class="footer_bar">&nbsp;&nbsp;&nbsp;|</span></p>
                        </li>
                    </ul>
                        <p class="copy">
                            COPYRIGHT ⓒ 2019.SIHEUNG CITY.ALL RIGHTS RESERVED
                        </p>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>