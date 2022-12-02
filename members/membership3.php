<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>membership3</title>
    <link rel="stylesheet" type="text/css" href="../css/membership3.css">
    <style type="text/css">                
    </style>
    <script type="text/javascript" src="../jquery.js"></script>
    <script src="../js/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="../js/membership3.js"></script>
    <script type="text/javascript">                       
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


                    <p class="membership3">이메일 주소로 회원가입</p>
                    
                        <p class="membership4">
                            <span class="star">★</span>
                                 은 필수 입력 항목입니다.
                        </p>

                        <p class="line3">선</p>

                                <!-- form -->

                                
        <form name="join_form" action="insert.php" method="post" onsubmit="return form_check()">
            <fieldset>
                <legend>회원가입</legend>
                    <p>
                        <label for="u_id" class="c_title">
                            이메일 아이디<span class="star1">★</span>
                        <br>
                        <input type="email" name="u_id" id="id" placeholder="이메일을 입력해주세요.">                        
                        <span id="err_id" class="err_txt"></span>
                        </label>
                    </p>
                    
                    
                    <p>
                        <label for="pwd" class="pw">
                            비밀번호<span class="star3">★</span>
                        </label><br>

                        <input type="password" name="pwd" id="pwd">
                        <span id="err_pwd" class="err_txt"></span>

                        <br>
                    <p class="pw2">
                        <span class="star4">◆</span>
                        <span class="use">비밀번호는 최소 1개의 소문자, 1개의 대문자, 1개의 숫자 및 1개의 특수문자를 포함한 8~15자 이상이어야합니다.</span></p>
                    
                       <input type="password" name="repwd" id="repwd" placeholder="비밀번호를 한 번 더 입력해주세요.">
                    </p>

                    <div>
                        <label for="u_name" class="name">
                                이름<span class="star5">★</span>
                            <br>
                            <input type="text" name="u_name" id="name"><br>
                        </label>
                            <p class="name_under">
                                <span class="star6">◆</span>
                                 수료증에 표기되는 이름으로, 회원가입 후 수정 불가능합니다.
                            </p>
                            <span id="err_name" class="err_txt"></span>                        
                    </div>
                    
                <div>
                        <label for="sex" class="sex">성별</label>
                        <span class="star7">★</span>
                        <br>
                        
                    <div class="m_f">
                        <label for="sex1" class="m">
                            <input type="radio" id="sex1" name="gender" value="m">
                            남성
                        </label>                        
                        <label for="sex2" class="f">
                            <input type="radio" id="sex2" name="gender" value="f">
                            여성
                        </label>
                    </div>
                </div>

                    <div id="yymmdd">
                        <label for="birth" class="birth">생년월일
                            <span class="star8">★</span><br>
                            <input type="date" name="birth">
                            <!-- <select name="yy" id="year" value="year"></select>
                            <select name="mm" id="month" value="month"></select>
                            <select name="dd" id="day" value="day"></select> -->
                        </label>
                    </div>

                    
                    <div class="phone">
                        휴대전화<span class="star9">★</span>
                    </div>
                        
                    <p>
                        <input type="tel" name="mobile" id="mobile">
                        <br><span class="phone2">"-" 없이 숫자만 입력</span>
                    </p>

                    <div>
                        <span class="area">지역</span><br>
                        <div class="do0">
                            <label for="ps_code1" class="do">
                                <input type="radio" id="ps_code1" name="ps_code" value="경기도">
                                경기도
                            </label>
                            
                            <label for="ps_code2" class="do2">
                                <input type="radio" id="ps_code2" name="ps_code" value="경기도 외 지역">
                                경기도 외 지역
                            </label>
                        </div>
                    </div>
                    
                    <label for="addr_b">
                        <select name="addr_b" id="area3">
                            <option>행정구역 선택</option>
                            <option>가평군</option>
                            <option>고양시</option>
                            <option>과천시</option>
                            <option>광명시</option>
                            <option>광주시</option>
                            <option>구리시</option>
                            <option>군포시</option>
                            <option>김포시</option>
                            <option>남양주시</option>
                            <option>동두천시</option>
                            <option>부천시</option>
                            <option>성남시</option>
                            <option>수원시</option>
                            <option>시흥시</option>
                            <option>안산시</option>
                            <option>안성시</option>
                            <option>안양시</option>
                            <option>양주시</option>
                            <option>양평군</option>
                            <option>여주시</option>
                            <option>연천군</option>
                            <option>오산시</option>
                            <option>용인시</option>
                            <option>의왕시</option>
                            <option>의정부시</option>
                            <option>이천시</option>
                            <option>파주시</option>
                            <option>평택시</option>
                            <option>포천시</option>
                            <option>하남시</option>
                            <option>화성시</option>                        
                        </select>
                    </label>

                    <label for="addr_d">
                        <input type="text" name="addr_d" id="addr_d" placeholder="상세주소를 입력하세요.">
                    </label>

                    <p class="info">정보 수신 여부</p>
                    <p id="info0">
                        <input type="checkbox" name="all" id="all" value="y" >
                        <label for="all" id="all0">모두 수신</label>
                        <input type="checkbox" name="email" id="email" value="y">
                        <label for="email2" id="email0">이메일</label>
                        <input type="checkbox" name="sms" id="sms" value="y">
                        <label for="sms" id="sms0">SMS</label>
                    </p>

                <div class="info0">
                    <span class="star10">◆</span>
                    <p class="info1">
                        회원가입 및 비밀번호와 관련된 이메일과 SMS는 정보수신 동의 여부와 관계 없이 발송됩니다.
                    </p>
                    <p class="info2">
                        SMS 정보 수신에 동의하시면, SMS 번호 수집 및 마케팅
                        수신에 동의하는 것으로 간주되어 SMS로 프로모션, 이벤
                        트 등의 안내를 받을 수 있습니다.
                    </p>
                </div>

                <p class="line4">선</p>

                    <h3>약관 동의</h3>

                    <div class="apply">                        
                        <label for="apply" id="apply">&nbsp;&nbsp;전체 동의하기
                            <input type="checkbox" name="apply" id="apply0" value="y" onclick="selectAll(this)">
                        </label>
                    </div>

                <p class="line5">선</p>

                <div id="check">

                    <label for="location">
                        <div id="lo">
                            <ul>
                                <li><input type="checkbox" name="apply" id="lo0" value="y"></li>
                                <li class="lo1"><a href="#">[필수]</a></li>
                                <li class="lo2">이용약관 및 위치정보 이용약관</li>
                                <li class="lo3"><a href="#">내용보기</a></li>
                            </ul>
                        </div>
                    </label>    

                    <label for="privacy">
                        <div id="pr">
                            <ul>
                                <li><input type="checkbox" name="apply" id="pr0" value="y"></li>
                                <li class="pr1"><a href="#">[필수]</a></li>
                                <li class="pr2">개인정보 수집 및 이용에 관한 동의</li>
                                <li class="pr3"><a href="#">내용보기</a></li>
                            </ul>
                        </div>
                    </label>   

                   

                    <label for="deputy">
                        <div id="de">
                            <ul>
                                <li><input type="checkbox" name="apply" id="de0" value="y"></li>
                                <li class="de1"><a href="#">[필수]</a></li>
                                <li class="de2">개인정보 제3자 제공에 관한 동의</li>
                                <li class="de3"><a href="#">내용보기</a></li>
                            </ul>
                        </div>
                    </label> 
                </div>

                <p class="line6">선</p>

                    <p id="sub">
                        <a href="#"><button type="submit">가입하기</button></a>
                    </p>
            </fieldset>
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