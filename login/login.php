<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
    <style type="text/css">
        input[type=checkbox]{
            width: 20px;
            height: 20px; 
            }

        #err_id{
            margin:0 0 0 0 
        }

        .err_txt{
            font-size:16px;
            color:red;
            
            
        }
        .err_no{font-size:16px;color:red}
        
        body,h1,h2,h3,p,div,ul,li,dl,dt,dd 
        {
            margin: 0;
            padding: 0;

        }

        body {
            font-family: "나눔고딕";
            font-size: 18px
        }

        ul,li,dl,dt,dd {
            list-style: none
        }
        
        a{
            text-decoration: none;
            color: #000
                /* inherit */
        }
        
        address {
            font-style: normal
        }
        

        /* 공통 클래스 */
        
        .blind{
            position:absolute;
            clip:rect(0 0 0 0);
            width:1px;
            height:1px;
            margin:-1px;
            overflow:hidden
            }
        
        .screen_out{
            overflow:hidden;
            position:absolute;
            width:0;
            height:0;
            line-height:0;
            text-indent:-9999px
            }
        
        .hide{
            position:absolute;
            left:-9999px;
            top:-9999px
            }
            /* header */

        .wrap{
            min-width:1600px
        }

        .logo{            
            margin:auto;
            margin-top: 17px;
            margin-bottom: 12px;
            width: 112px;
            height: 40px;
        }
            
        .logo a{
            display:block;
            background:url(../images/ssoc_03.jpg)no-repeat;
            text-indent:-9999px;
            width: 112px;
            height: 40px;
        } 
        .user_menu{
            text-indent:-9999px;
            font-size:0px
        }
        .user_menu1{
            font-size:18px;
            font-weight:bold;
            margin:auto;
            width: 1600px;
        }
        .login{
            float:left;
            margin:-29px 0 0 1246px 
        }
        .slash{
            float:left;
            margin:-29px 0 0 1309px 
        }
        .membership{
            float:left;
            margin:-29px 0 0 1328px 
        }
        .line1{
            font-size:0px;
            text-indent:-9999px;
            border-bottom:1px solid #cbc9c9;
            width: 1600px;
            margin:auto
        }
        
        .gnb{
            position:relative;
            margin:15px auto 0px; 
            width: 1200px;
        }
        
        .gnb h2{
            position:absolute;
            left:-9999px;
            top:-9999px}

        .gnb>ul{
            width:100%;
            height:40px;
            margin:auto;
            color:#d1ccc9;}

        .gnb>ul>li{
            font-weight:bold;
            float:left;
            margin:0px auto;
		    width:150px;
            height:40px;
            line-height:40px;
            text-align:center;
            position:relative}

        .gnb>ul>li>a{display:block;}

        .gnb ul ul{
            padding-top:20px;
            width:100%;
            position:absolute;
            left:0;
            top:40px;
            background:#fff;
            display:none}

        .nav_bg{
            width:100%;
            height:450px;
            background:#fff; 
            border-bottom:1px solid #cbc9c9;
            display:none}

        .gnb8 a{
            display:block;
            background:url(../images/more_07.jpg) no-repeat;
            width: 36px;
            height: 30px;
            text-indent:-9999px;
            position:absolute;
            margin:3px 0 0 1100px
            
            
        }

        .line2{
            text-indent:-9999px;
            font:0px;
            border-bottom:1px solid #cbc9c9;
            width: 1600px;
            margin:auto;  
        }
        
                    /* content */

        .login2{
            margin:50px 0 20px 0;
            text-align:center
        }
        legend{
            text-indent:-9999px        
        }
        fieldset{
            border:none;
            width: 800px;
            margin:auto;
            
            text-align:center
        }
        #u_id{
            margin:0px auto 20px;
            border:2px solid #000;
            border-radius:40px;
            width: 400px;
            height: 50px;
            font-size:17px        
        }
        #pwd{
            width: 400px;
            height: 50px;
            border-radius:40px;
            border:2px solid #000;            
            font-size:17px
        }
        .login3{
            border:1px solid #FC7D07;
            border-radius:40px;
            width: 400px;
            height: 50px;
            font-size:20px;        
            font-weight:bold;
            color:#FC7D07;
            background-color:#fff;
            margin:20px 0 0 0;  
            cursor:pointer                      
        }                                                        
        .membership2{
            border:1px solid #FC7D07;
            border-radius:40px;
            width: 400px;
            height: 50px;
            font-size:20px;        
            font-weight:bold;
            color:#FC7D07;
            background-color:#fff;
            margin:20px 0 0 0;  
            cursor:pointer 
        }
        .search_id{
            
            border-radius:40px;
            width: 400px;
            height: 20px;
            margin:20px auto 0;
            display:flex;
            flex-direction:row;
            flex-wrap:wrap;
            justify-content:space-between
        }
        .search_id2{            
            width: 198px;
            height: 20px;
            font-size:15px
            
        }
        .search_id3{
            border-left:1px solid #000;            
            width: 200px;
            height: 20px;
            font-size:15px
            
        }
        .line3{
            border-bottom:2px solid #cbc9c9;
            width: 1600px;
            text-indent:-9999px;
            font-size:0px;
            margin:20px auto 20px
        }
        .gseek{            
            width: 400px;
            height: auto;
            margin:50px auto 50px
        }
        .gseek2{
            font-size:16px;
            font-weight:bold
        }
        .gseek3{
            color:#FC7D07;
        }
        .gseek4{            
            width: 400px;
            height: auto;
            margin:auto;
            text-align:center
        }
        .gseek5{
            margin:50px 0 50px 0;
            font-size:25px;
            font-weight:bold
        }
        .gseek6{
            
            width: 230px;
            height: auto;
            margin:auto;
            display:flex;
            flex-direction:row;
            flex-wrap:wrap;
            justify-content:space-between
        }
        .naver{
            
            width: 65px;
            height: auto;            
        }
        .naver2 a{
            display:block;
            
            background:url(../images/naver.jpg)no-repeat;
            width: 41px;
            height: 41px;
            margin:auto            
        }
        .kakao{
            
            width: 65px;
            height: auto;
        }
        .kakao2 a{
            display:block;
            
            background:url(../images/kakao.jpg) no-repeat;
            width: 41px;
            height: 41px; 
            margin:auto            
        }
        .apple{
           
           width: 65px;
           height: auto; 
        }
        .apple2 a{
            display:block;
            
            background:url(../images/apple.jpg) no-repeat;
            width: 41px;
            height: 41px;   
            margin:auto
        }
        .gseek7{
            
            width: 230px;
            height: auto;
            margin:20px auto;
            display:flex;
            flex-direction:row;
            flex-wrap:wrap;
            justify-content:space-between
        }
        .gseek8{
            font-size:15px;
            
            width:65px
        }
        .gseek9{
            font-size:15px;
            
            width:65px
        }
        .gseek10{
            font-size:15px;
            
            width:65px
        }
        .naver3{
            text-align:center
        }
        .kakao3{
            text-align:center
        }
        .apple3{
            text-align:center
        }
        .line7{
            border-bottom:2px solid #cbc9c9;
            width: 1600px;
            text-indent:-9999px;
            font-size:0px;
            margin:50px auto 50px
        }

        #center{
            font-weight: bold;
            border:1px solid#fff;
            width: 1600px;
            margin:auto;
        }

        .center0{
            width: 1200px;
            margin:0 0 41px 0
        }
        .cen{
            float:left;
            margin:0 0 0 200px
        }

        .cen0{
            float:left;
            margin:0 0 0 39px
        }
        .cen1{
            float:left;
            margin:6px 0 0 81px;
            font-size:12px
        }

        .center1{
            border:1px solid #fff;
            margin:0 0 41px 0
        }
        .cen2{
            float:left;
            margin:0 0 0 200px
        }
        .cen3{
            float:left;
            margin:0 0 0 39px
        }
        .cen4{
            float:left;
            margin:6px 0 0 30px;
            font-size:12px
        }

        .center2{
            
            margin:0 0 20px 0
        }
        .cen5{
            float:left;
            margin:0 0 0 200px
        }
        .cen6{
            float:left;
            margin:0 0 0 39px
        }
        .cen7{
            float:left;
            margin:6px 0 41px 53px;
            font-size:12px
        }

        #foot{
            border:1px solid #f8f8f8;
            width: 1600px;
            height: 205px;
            background-color:#f8f8f8;
            margin:58px auto 0px
        }

        .foot0 a{
            display:block;            
            background:url(../images/foot_51.jpg) no-repeat;
            text-indent:-9999px;
            width: 200px;
            height: 60px;
            margin:41px 0 0 200px
        }
        
        #foot1{
            
            width: 1600px;
            margin:-40px 0 46px 455px;
            font-weight: bold;
            
        }

        .foot2{
            float:left
        }
        .foot3{
            float:left;
            margin:0 0 0 27px
        }
        .foot4{
            float:left;
            margin:0 0 0 27px
        }
        .foot5{
            float:left;
            margin:0 0 0 27px
        }

        #foot6{
            width: 1600px;
            margin:0 0 0px 455px;
            font-weight: bold;
        }
        .foot7{
            float:left;
            font-size:15px
        }
        .foot8{
            float:left;
            margin:0 0 0 30px ;
            font-size:14px
        }
        .foot9{
            border:1px solid #000;
            width: 1600px;
            margin:30px 0 0 0
        }
        .foot10{
            font-size:12px;
            color: rgb(124, 122, 122);
            margin:14px 0 40px 0
        }
        .sel{
            background-color:#FC7D07;
            color: #fff
        }
        .sel2{
            color: #FC7D07;            
        }
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
                        
        })
        function login_form_check(){
            var u_id = document.getElementById("u_id");
            var pwd = document.getElementById("pwd");

            if(!u_id.value){
                alert("아이디를 입력하세요.");
                u_id.focus();
                return false;
            };
            if(!pwd.value){
                alert("비밀번호를 입력하세요.");
                pwd.focus();
                return false;
            };
        };

           
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
        <li class="membership"><a href="../membership.php">회원가입</a></li>
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

    <h2 class="login2">로그인</h2>
    <form name="login_form" action="login_ok.php" method="post" onsubmit="return login_form_check()">
        <fieldset>
            <legend>로그인</legend>
                <p>
                    <label for="u_id"></label>
                    <input type="text" name="u_id" id="u_id" autofocus placeholder="&nbsp;&nbsp;&nbsp;아이디(이메일주소 또는 휴대폰번호)">
                </p>
                <p>
                    <label for="pwd"></label>
                    <input type="password" name="pwd" id="pwd" placeholder="&nbsp;&nbsp;&nbsp;비밀번호">
                </p>
                <p>                    
                    <button type="submit" class="login3">로그인</button>
                </p>
                <div class="search_id">
                    <ul>
                        <li class="search_id2"><a href="#">아이디찾기</a></li>                        
                    </ul>
                    <ul>
                        <li class="search_id3"><a href="#">비밀번호 재설정</a></li>
                    </ul>                    
                </div>
                <p>
                    <button type="button" class="membership2" onclick="location.href='../membership.php'">회원가입</button>
                </p>
        </fieldset>
    </form>

    <p class="line3">선</p>
        
        <div class="gseek">
            <p class="gseek2">
                경기도 지식(GSEEK) 회원은 간단한 동의절차만 거치면<br><span class="gseek3">별도 회원가입 없이 쏙(SSOC)을 이용</span>하실 수 있습니다.
            </p>
        </div>
        <div class="gseek4">
            <p>
                <a href="#"><image src="../images/seek.jpg"></a>                
            </p>
            <p class="gseek5">
                SNS 간편 로그인
            </p>
        </div>
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
                    <li class="naver3"><a href="#">네이버로<br>로그인</a></li>
                </ul>
            </div>
            <div class="gseek9">
                <ul>
                    <li class="kakao3"><a href="#">카카오로<br>로그인</a></li>
                </ul>
            </div>
            <div class="gseek10">
                <ul>
                    <li class="apple3"><a href="#">Apple로<br>로그인</a></li>
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