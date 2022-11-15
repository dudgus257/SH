<?php
session_start();
// isset(  조건   )?  값1 : 값2;
//isset() 함수의 경우 해당 변수에 값이 존재하는지(null 값인지) 체크한다. null과 그외 값으로 구분할 수 있다. 직역해서 set 상태인 값이 true 아닌 값(null)은 false를 리턴한다.
$s_idx =  isset($_SESSION["s_idx"])?  $_SESSION["s_idx"] : "";
$s_name =  isset($_SESSION["s_name"])? $_SESSION["s_name"] : "";
$s_id =  isset($_SESSION["s_id"])? $_SESSION["s_id"] : "";
?>