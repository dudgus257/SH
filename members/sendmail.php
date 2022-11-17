<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            margin:-38px 0 0px 1246px 
        }
        .slash{
            float:left;
            margin:-38px 0 0 1309px 
        }
        .membership{
            float:left;
            margin:-38px 0 0 1328px 
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
        .membership2{
            font-size:40px;
            text-align:center;
            margin:auto;
            margin-top:38px;
            margin-bottom:16px
        }
        .select0{
            
            width: 1200px;
            padding-top:37px;
            
            margin:auto;
            
        }
        .select1{
            background:url(../images/check_11.jpg) no-repeat;
            text-indent:-9999px;
            width: 32px;
            height: 33px;
            float:left;
            margin-left:450px
        }
        .next1{
            background:url(../images/next_23.jpg) no-repeat;
            text-indent:-9999px;
            width: 52px;
            height: 8px;
            float:left;
            margin:10px 0 0 20px 
        }
        .select2{
            background:url(../images/two_11.jpg) no-repeat;
            text-indent:-9999px;
            width: 34px;
            height: 34px;
            float:left;
            margin-left:30px
        }
        .next2{
            background:url(../images/next2_14.jpg) no-repeat;
            text-indent:-9999px;
            width: 50px;
            height: 8px;
            float:left;
            margin:10px 0 0 20px 
        }
        .select3{
            background:url(../images/three_25.jpg) no-repeat;
            text-indent:-9999px;
            width: 34px;
            height: 34px;
            float:left;
            margin-left:30px
        }
        .select4{
            
            width: 1200px;
            margin:auto;
            padding-bottom:120px
        }
        .select5{
            color: #f37b21;
            font-weight:bold;
            float:left;
            margin:50px 0 0 -320px 
        }
        .select6{
            color: #f37b21;
            font-weight:bold;
            float:left;
            margin:50px 0 0 -195px;
            text-align:center
        }
        .select7{
            color: #d1ccc9;
            font-weight:bold;
            float:left;
            margin:50px 0 0 -49px;
            text-align:center
        }
                /* 이메일 주소로 회원가입 */

                .membership3{
            text-align:center;
            font-size:23px;
            font-weight:bold;
            margin:50px 0 0 0 
        }
        .star{
            
            color :#f37b21;
            width: 10px;
            height: 10px;
            font-size:10px
        }
        .membership4{
            width: 1200px;
            margin:10px  auto; 
            text-align:center;
            font-weight: bold;
            
        }
        .line3{
            font-size:0px;
            text-indent:-9999px;
            border-bottom:2px solid #cbc9c9;
            width: 400px;
            margin:38px auto 20px
        }
        form{
            width: 400px;
            margin:auto;
        }
        fieldset {
            display: block;
            margin-left: 2px;
            margin-right: 2px;
            padding-top: 0.35em;
            padding-bottom: 0.625em;
            padding-left: 0.75em;
            padding-right: 0.75em;
            width: 400px;
            border:none
        }
        
        legend{
            text-indent:-9999px;   
        }
        .c_title{
            font-weight:bold;
            margin:0 0 0 -10px 
            
        }
        .star1{
            color :#f37b21;
            font-size:10px;
            margin:0 0 0 5px 
            

        }
        #id{
            outline:none;
            margin:16px 20px 38px -10px; 
            font-weight: bold;
        }
        input[type=email] {
            width:251px;
            height: 41px;
            font-size:15px;
            border-color: #cbc9c9;
            border-radius: 5px;
            
        }
        input[type=text] {
            width:251px;
            height: 41px;
            font-size:15px;
            border-color: #cbc9c9;
            border-radius: 5px;
            
            
        }
        button{
            width: 110px;
            height: 41px;
            font-size:14px;
            font-weight:bold;
            outline:none;
            border-color: #9199c3;
            color: #9199c3;
            background-color: #fff;
            border-radius: 5px;
            box-shadow:5px 5px 5px #cbc9c9
            
        }
        input[type=button]{
            width: 110px;
            height: 41px;
            font-size:14px;
            font-weight:bold;
            outline:none;
            border-color: #9199c3;
            color: #9199c3;
            background-color: #fff;
            border-radius: 5px;
            box-shadow:5px 5px 5px #cbc9c9
            
        }
        .no{
            font-weight:bold;
            margin:0 0 0 -10px 
            
        }
        .star2{
            color :#f37b21;
            font-size:10px;
            margin:0 0 0 5px 
        }
        #no{
            outline:none;
            margin:16px 20px 39px -10px; 
            font-weight: bold;
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
        .sel2{
            color: #FC7D07;            
        }
    </style>
    <script type="text/javascript" src="../jquery.js"></script>
    <script src="../js/jquery-3.6.1.min.js"></script>    
    <script type="text/javascript">
function check() {
    form = document.sendmail;
    if (form.form_user.value == '') {
            alert('이메일주소를 입력해주세요.');
            form.form_user.focus();
            return false;
    }
    form.submit();
}

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
            <h2 class="membership2">회원가입</h2>
    
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
    
    
                        <p class="membership3"><span class="star">★</span>이메일을 인증해주세요.</p>
                        
                            
    
                            <p class="line3">선</p>
    <form name="sendmail" action="send_mail.php" method="post">
        <p>
            <label for="u_id" class="c_title">
                이메일 아이디<span class="star1">★</span>
            </label><br>
            <input type="email" name="form_user" id="id" placeholder="이메일을 입력해주세요.">
            <input type="button" value="인증하기" onclick="check();"><br>
            <span id="err_id" class="err_txt"></span>
        </p>
        
        <!-- <p>
            <label for="no" class="no">
                인증번호 확인<span class="star2">★</span>
            </label><br>
            <input type="text" name="no" id="no" placeholder="인증번호를 입력해주세요.">
            <button type="button" id="nochk" class="nochk" onclick="location.href='membership3.php'">인증번호 확인</button><br>
            <span id="err_no" class="err_txt"></span>
        </p> -->
    </form>

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