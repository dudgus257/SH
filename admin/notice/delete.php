<?php
// 데이터 가져오기 - post 방식 활용, 이전 페이지에 hidden 필드 사용
// $s_idx = $_POST["g_idx"];

// 데이터 가져오기 - get 방식 활용, 페이지 경로에 데이터 포함
$n_idx = $_GET["n_idx"];

// 데이터 가져오기 - 세션 활용
//include "../inc/session.php";

// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
// delete from 테이블명 where 필드명='값';
$sql = "delete from notice where idx=$n_idx;";

// 쿼리 전송
mysqli_query($dbcon, $sql);

// DB 종료
mysqli_close($dbcon);

// 페이지 이동
echo "
    <script type=\"text/javascript\">
        alert(\"삭제 처리되었습니다.\");
        location.href = \"list.php\";
    </script>
    ";
?>