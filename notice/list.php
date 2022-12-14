<?php
include "../inc/session.php";

// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
$sql = "select * from notice;";

// 쿼리 전송
$result = mysqli_query($dbcon, $sql);

// 전체 데이터 가져오기
$total = mysqli_num_rows($result);

// paging : 한 페이지 당 보여질 목록 수
$list_num = 5;

// paging : 한 블럭 당 페이지 수
$page_num = 3;

// paging : 현재 페이지
$page = isset($_GET["page"])? $_GET["page"] : 1;

// paging : 전체 페이지 수 = 전체 데이터 / 페이지 당 목록 수,  ceil : 올림값, floor : 내림값, round : 반올림
$total_page = ceil($total / $list_num);
// echo "전체 페이지수 : ".$total_page;
// exit;

// paging : 전체 블럭 수 = 전체 페이지 수 / 블럭 당 페이지 수
$total_block = ceil($total_page / $page_num);

// paging : 현재 블럭 번호 = 현재 페이지 번호 / 블럭 당 페이지 수
$now_block = ceil($page / $page_num);

// paging : 블럭 당 시작 페이지 번호 = (해당 글의 블럭 번호 - 1) * 블럭 당 페이지 수 + 1
$s_pageNum = ($now_block - 1) * $page_num + 1;
if($s_pageNum <= 0){
    $s_pageNum = 1;
};

// paging : 블럭 당 마지막 페이지 번호 = 현재 블럭 번호 * 블럭 당 페이지 수
$e_pageNum = $now_block * $page_num;
// 블럭 당 마지막 페이지 번호가 전체 페이지 수를 넘지 않도록
if($e_pageNum > $total_page){
    $e_pageNum = $total_page;
};

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
    <link rel="stylesheet" type="text/css" href="../css/list.css">
    <style type="text/css">
        
    </style>
    <script type="text/javascript" src="../jquery.js"></script>
    <script src="../js/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="../js/list.js"></script>
    <script type="text/javascript">
        
    </script>
</head>
<body>
<div class="wrap">
    <!-- header -->

    <header id="header" class="header">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <h2 class="screen_out">사용자 메뉴</h2>
            <div class="top">
                <ul class="top_menu">
                    <li class="top1"><a href="#">시흥시청</a></li>
                    <li class="top2"><a href="../siheung.php">평생학습</a></li>
                    <li class="top3"><a href="../siheung_sub.php">분야별</a></li>
                    <li class="top4"><a href="#">일자리경제</a></li>
                    <li class="top5"><a href="#">통합예약</a></li>
                    <li class="top6"><a href="#">아동친화도시</a></li>                                        
                    <li class="top7"><a href="#">시흥시의회</a></li>
                    <li>
                        <ul class="login">
                            <?php if(!$s_idx){ ?>
                                <li class="top8">
                                    <a href="../login/login.php">로그인</a>
                                </li>
                                <li class="top9">|</li>
                                <li class="top10">
                                    <a href="../members/membership.php">회원가입</a>
                                </li>
                            <?php } else if($s_id == "admin"){ ?>
                                <span class="admin_hello"><?php echo $s_name; ?>님, 안녕하세요.</span><br>
                                <a href="../admin/index.php">[관리자 페이지]</a><br>
                                <a href="../login/logout.php">로그아웃</a>
                                <a href="../members/member_info.php">내 정보</a>
                            <?php } else{ ?>
                                <br><?php echo $s_name; ?>님, 안녕하세요.<br>
                                <a href="../login/logout.php">로그아웃</a>
                                <a href="../members/member_info.php">내 정보</a>
                            <?php }; ?>
                        </ul>                                                                                                                
                    </li>                                                            
                </ul>
            </div>
        <h1 class="logo"><a href="../siheung.php">시흥</a></h1>

                            <!-- gnb -->

        <div class="nav_bg">
            <nav class="gnb">
                <h2 class="blind">주요메뉴</h2>
                    <ul>
                        <li class="gnb1"><span class="a1"><a href="#">수강신청</a></span>
                            <ul class="bg1">
                                <li><span class="gnb1_1"><a href="#">수강신청</a></span>
                                    <ul class="small_gnb">
                                        <li><a href="#">수강신청</a></li>
                                        <li><a href="#">수강신청 방법</a></li>
                                        <li><a href="#">수강취소(수강료반환)방법</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>   
                        <li class="gnb2"><span class="a2"><a href="#">평생학습도시</a></span>
                            <ul class="bg2">                                                                
                                <li><span class="gnb2_1"><a href="#">학습동아리란</a></span>
                                    <ul class="small_gnb1">
                                        <li><a href="#">시흥시학습동아리현황</a></li>
                                        <li><a href="#">학습동아리란</a></li>
                                        <li><a href="#">학습동아리검색</a></li>
                                        <li><a href="#">학습동아리 등록 신청</a></li>
                                    </ul>
                                </li>                                                                        
                                <li><span class="gnb2_2"><a href="#">학습소외계층</a></span>
                                    <ul class="small_gnb2">
                                        <li><a href="#">성인문해교육</a></li>
                                        <li><a href="#">장애인 평생교육</a></li>
                                    </ul>
                                </li>                                                                        
                                <li><span class="gnb2_3"><a href="#">평생학습마을</a></span>
                                    <ul class="small_gnb3">
                                        <li><a href="#">평생학습마을이란</a></li>
                                        <li><a href="#">평생학습마을소개</a></li>
                                        <li><a href="#">평생학습마을지도</a></li>
                                    </ul>
                                </li>                                                                        
                                <li><span class="gnb2_4"><a href="#">일터학습지원</a></span>
                                    <ul class="small_gnb4">
                                        <li><a href="#">강사역량 강화교육</a></li>
                                        <li><a href="#">강사인턴</a></li>
                                    </ul>
                                </li>                                                                        
                                <li><span class="gnb2_5"><a href="#">강사뱅크</a></span>
                                    <ul class="small_gnb5">
                                        <li><a href="#">강사뱅크란</a></li>
                                        <li><a href="#">강사뱅크 등록 및 현황</a></li>
                                        <li><a href="#">강사모집 게시판</a></li>
                                    </ul>
                                </li>
                                <li><span class="gnb2_6"><a href="#">평생학습네트워크</a></span>
                                    <ul class="small_gnb6"></ul>
                                </li>                                                                            
                                <li><span class="gnb2_7"><a href="#">평생학습축제</a></span>
                                    <ul class="small_gnb7">
                                        <li><a href="#">평생학습축제 소개</a></li>
                                        <li><a href="#">축제 게시판</a></li>
                                        <li><a href="#">축제사진갤러리</a></li>
                                    </ul>
                                </li>                                                                        
                                <li><span class="gnb2_8"><a href="#">학습재능기부</a></span>
                                    <ul class="small_gnb8">
                                        <li><a href="#">재능기부란</a></li>
                                        <li><a href="#">학습재능기부(나눔)</a></li>
                                        <li><a href="#">학습재능기부(받음)</a></li>
                                    </ul>
                                </li>                                                                        
                                <li><span class="gnb2_9"><a href="#">ESD인증</a></span>
                                    <ul class="small_gnb9">
                                        <li><a href="#">학습동아리 활성화</a></li>
                                        <li><a href="#">평생학습네트워크 활성화</a></li>
                                        <li><a href="#">평생학습마을 육성</a></li>
                                    </ul>
                                </li>                                                                   
                            </ul>
                        </li>
                        <li class="gnb3"><span class="a3"><a href="#">시흥아카데미</a></span>
                            <ul class="bg3">
                                <li><span class="gnb3_1"><a href="#">아카데미 소개</a></span>
                                    <ul class="small_gnb10">                                        
                                    </ul>
                                </li>
                                <li><span class="gnb3_2"><a href="#">지난 강의 목록</a></span>
                                    <ul class="small_gnb11">
                                        <li><a href="#">참살이 학부</a></li>
                                        <li><a href="#">꿈모작 학부</a></li>
                                        <li><a href="#">교양 학부</a></li>
                                    </ul>
                                </li>
                                <li><span class="gnb3_3"><a href="#">콘텐츠 모음집</a></span>
                                    <ul class="small_gnb12">
                                        <li><a href="#">콘텐츠 모음집</a></li>
                                        <li><a href="#">학교별 목록</a></li>
                                        <li><a href="#">주제별 목록</a></li>
                                    </ul>
                                </li>                                                                                                                                                
                            </ul>
                        </li>
                        <li class="gnb4"><span class="a4"><a href="#">정보마당</a></span>
                            <ul class="bg4">
                                <li><span class="gnb4_1"><a href="list.php">공지사항</a></span></li>
                                <li><span class="gnb4_2"><a href="#">교육개설요청</a></span></li>
                                <li><span class="gnb4_3"><a href="#">자료실</a></span></li>
                                <li><span class="gnb4_4"><a href="#">온라인 설문</a></span></li>
                                <li><span class="gnb4_5"><a href="#">사이버 학습관</a></span></li>
                            </ul> 
                        </li>
                        <li class="gnb5"><span class="a5"><a href="#">평생학습기관</a></span>
                            <ul class="bg5">
                                <li><span class="gnb5_1"><a href="#">시흥ABC행복학습타운</a></span>
                                    <ul class="small_gnb13">
                                        <li><a href="#">학습타운소개</a></li>
                                        <li><a href="#">시설배치도</a></li>
                                        <li><a href="#">시설소개</a></li>
                                    </ul>
                                </li>                                                                                                                                                    
                                <li><span class="gnb5_2"><a href="#">청년협업마을</a></span>
                                    <ul class="small_gnb14">
                                        <li><a href="#">청년협업마을 소개</a></li>
                                        <li><a href="#">시설배치도</a></li>
                                        <li><a href="#">프로그램소개</a></li>
                                    </ul>
                                </li>                                                                        
                                <li><span class="gnb5_3"><a href="#">대야평생학습관</a></span>
                                    <ul class="small_gnb15">
                                        <li><a href="#">대야평생학습관 소개</a></li>
                                        <li><a href="#">프로그램 소개</a></li>
                                    </ul>
                                </li>                                                                        
                                <li><span class="gnb5_4"><a href="#">정왕평생학습관</a></span>
                                    <ul class="small_gnb16">
                                        <li><a href="#">정왕평생학습관 소개</a></li>
                                        <li><a href="#">프로그램 소개</a></li>
                                    </ul>
                                </li>                                                                    
                                <li><span class="gnb5_5"><a href="#">청년스테이션</a></span></li>                                                                    
                            </ul>
                        </li>
                        <li class="gnb6"><span class="a6"><a href="#">평생교육원</a></span>
                            <ul class="bg6">                                                                
                                <li><span class="gnb6_1"><a href="#">평생교육원 소개</a></span>
                                    <ul class="small_gnb17">
                                        <li><a href="#">인사말</a></li>
                                        <li><a href="#">연혁</a></li>
                                        <li><a href="#">조직도</a></li>
                                        <li><a href="#">직원 업무 안내</a></li> 
                                    </ul>
                                </li>                                                                    
                            </ul>
                        </li>
                    </ul>
            </nav>
        </div>
    </header>
   
                                    <!-- 콘텐트 -->

    <div class="notice">
        <h2 class="notice2">공지사항</h2>
        <?php if('$u_id'){ ?>
        
        <div class="write_area">
            <span>전체 <?php echo $total; ?>개</span>
            
            <div id="search_box">
                <form action="search_result.php" method="get">
                        <select name="catgo" class="search">
                            <option value="title">제목</option>
                            <option value="writer">작성자</option>
                            <option value="content">내용</option>
                        </select>
                        <input type="text" name="search" class="search2" required="required">
                        <button type="button" class="search3">검색</button>
                </form>
            </div>
            
        </div>

        <?php } else{ ?>
        <p>전체 <?php echo $total; ?>개</p>
        <?php }; ?>
        <table class="notice_list_set">
            <tr class="notice_list_title">
                <th class="no">no</th>
                <th class="n_title">title</th>
                <th class="writer">writer</th>
                <th class="w_date">date</th>
                <th class="cnt">count</th>
            </tr>
            <?php
                // paging : 해당 페이지의 글 시작 번호 = (현재 페이지 번호 - 1) * 페이지 당 보여질 목록 수
                $start = ($page - 1) * $list_num;

                // paging : 시작번호부터 페이지 당 보여질 목록수 만큼 데이터 구하는 쿼리 작성
                // limit 몇번부터, 몇 개
                $sql = "select * from notice order by idx desc limit $start, $list_num;";
                // echo $sql;
                /* exit; */

                // DB에 데이터 전송
                $result = mysqli_query($dbcon, $sql);

                // DB에서 데이터 가져오기
                // pager : 글번호(역순)
                // 전체데이터 - ((현재 페이지 번호 -1) * 페이지 당 목록 수)
                $i = $total - (($page - 1) * $list_num);
                while($array = mysqli_fetch_array($result)){
            ?>
            <tr class="notice_list_content">
                <td><?php echo $i; ?></td>
                <td class="notice_content_title">
                    <a href="view.php?n_idx=<?php echo $array["idx"]; ?>">
                    <?php echo $array["n_title"]; ?>
                    </a>
                </td>
                <td><?php echo $array["writer"]; ?></td>
                <?php $w_date = substr($array["w_date"], 0, 10); ?>
                <td><?php echo $w_date; ?></td>
                <td><?php echo $array["cnt"]; ?></td>
            </tr>
            <?php
                    $i--;
                }; 
            ?>
        </table>
        <p class="pager">
            <?php
            // pager : 이전 페이지
            if($page <= 1){
            ?>
            <a href="list.php?page=1">이전</a>
            <?php } else{ ?>
            <a href="list.php?page=<?php echo ($page - 1); ?>">이전</a>
            <?php }; ?>

            <?php
            // pager : 페이지 번호 출력
            for($print_page = $s_pageNum;  $print_page <= $e_pageNum; $print_page++){
            ?>
            <a href="list.php?page=<?php echo $print_page; ?>"><?php echo $print_page; ?></a>
            <?php }; ?>
            
            <?php
            // pager : 다음 페이지
            if($page >= $total_page){
            ?>
            <a href="list.php?page=<?php echo $total_page; ?>">다음</a>
            <?php } else{ ?>
            <a href="list.php?page=<?php echo ($page + 1); ?>">다음</a>
            <?php }; ?>
        </p>
    </div>

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