<?php
$to = trim($_POST['form_user']); //받는사람 메일주소
$subject = '메일 인증';
$message = '메일이 인증되셨습니다. 회원가입을 계속 진행해주시기 바랍니다.';

//html 메일을 보낼 때 꼭 이 헤더가 붙어야 한다.
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=utf-8';

// Additional headers
//$headers[] = 'To: Kim<받는사람@gmail.com>';
$headers[] = 'From: webmaster<받는사람@gmail.com>';
//$headers[] = 'Cc: Kim1<참조인1@naver.com>,Kim2<참조인2@gmail.com>';
//$headers[] = 'Bcc: 숨은참조인3@gmail.com';

mail($to, $subject, $message, implode("\r\n", $headers));
echo "이메일을 보냈습니다.";
	echo "<script language=javascript> alert('인증되셨습니다. 회원가입을 계속 진행해주세요.'); location.replace('http://dudgus257.dothome.co.kr/siheung/members/membership3.php');
    </script>";


/* mail($to, $subject, $message, implode("\r\n", $headers));
echo "이메일을 보냈습니다.";
	echo "<script language=javascript> alert('인증성공!'); location.replace('http://www.taeriview.com');
    </script>";
 */

    
?>