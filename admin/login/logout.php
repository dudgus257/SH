<?php
session_start();

// 세션 삭제
// unset(세션변수);
//PHP 함수 중 하나인 unset 함수는 변수 제거에 사용하는 함수입니다.
unset($_SESSION["s_idx"]);
unset($_SESSION["s_name"]);
unset($_SESSION["s_id"]);

// 페이지 이동
echo "
    <script type=\"text/javascript\">
        location.href=\"../../index.php\";
    </script>
";
?>