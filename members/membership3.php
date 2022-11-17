<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>membership3</title>
    
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
        
                    /* content */

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
            width:389px;
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
        .pw{
            font-weight:bold;
            margin:0 0 0 -10px 
        }
        input[type=password] {
            width:389px;
            height: 41px;
            font-size:15px;
            border-color: #cbc9c9;
            border-radius: 5px;
            outline:none;
            margin:16px 0 10px -10px 
            
        }
        .pw{
            font-weight:bold;
            margin: 0 0 0 -10px
        }
        .pw2{
            font-size:15px;
            font-weight:bold;
            line-height: 30px;
            width: 390px;
            height: 40px;
            margin: 0 0 55px -10px 
            
        }
        .star3{
            color :#f37b21;
            font-size:10px;
            margin:0 0 0 5px 
        }
        .star4{
            color :#f37b21;
            font-size:10px;        
        }
        .use{
            font-size:13px;
            color: #f37b21;
        }

        #repwd{
            margin: 0px 0 39px -10px;
            font-weight: bold;
        }
        .name{
            font-weight:bold;
            margin: 0 0 0 -10px
        }
        #name{
            width:389px;
            height: 41px;
            font-size:18px;
            border-color: #cbc9c9;
            border-radius: 5px;
            outline:none;
            margin:16px 0 10px -10px
        }
        .name_under{
            font-size:14px;
            text-align:left;
            margin:0 0 37px -10px;
            color:#f37b21;
            font-weight: bold;
        }
        .star5{
            color :#f37b21;
            font-size:10px;
            margin:0 0 0 5px 
        }
        .star6{
            color :#f37b21;
            font-size:10px;
            
        }
        .sex{
            font-weight: bold;
            margin:0 0 0 -10px 
        }
        .star7{
            color :#f37b21;
            font-size:10px;
            margin:0 0 0 0px 
        }
        input[type="radio"] {
            display:none;
            
        }
        .m_f{
            
            margin:16px 0 39px -10px;
            text-align:center
        }
        .m{
            display:inline-block;
            padding: 15px 10px;
            border:1px solid #cbc9c9;
            color: #cbc9c9;
            text-align:center;
            font-weight: bold;
            width: 175px;
            cursor:pointer;
            border-radius: 5px;
        }
        .f{
            display:inline-block;
            padding: 15px 10px;
            border:1px solid #cbc9c9;
            color: #cbc9c9;
            text-align:center;
            font-weight: bold;
            width: 175px;
            cursor:pointer;
            border-radius: 5px;
        }
        input[type="radio"]:checked+span{
            background-color:#000;
            color:#f37b21
        }
        .sel{background:#9199c3;color:#fff;font-weight:bold}

        .birth{
            
            font-weight: bold;
            margin:0 0 0 -10px 
        }
        .star8{
            color :#f37b21;
            font-size:10px;
            margin:0 0 0 5px 
        }
        #yymmdd{
            text-align:center;
            margin:0 0 39px 0 
        }
        #year{
            width: 150px; padding: .8em .5em;
            border: 1px solid #cbc9c9; 
            border-radius: 5px;
            margin:16px 0 0 -10px;
            font-weight: bold;
            font-size:18px
        }
        #month{
            width: 115px; padding: .8em .5em;
            border: 1px solid #cbc9c9; 
            border-radius: 5px;
            margin:16px 0 0 5px;
            font-weight: bold;
            font-size:18px
        }
        #day{
            width: 115px; padding: .8em .5em;
            border: 1px solid #cbc9c9; 
            border-radius: 5px;
            margin:16px 0 0 5px;
            font-weight: bold;
            font-size:18px;
        }
        .phone{   
            font-weight: bold;
            margin:0 0 0 -10px 
        }
        .star9{
            color :#f37b21;
            font-size:10px;
            margin:0 0 0 5px 
        }
        input[type=tel] {
            width:389px;
            height: 41px;
            font-size:18px;
            border-color: #cbc9c9;
            border-radius: 5px;
            margin:16px 0 16px 0
        }
        .phone2{
            font-weight: bold;
            color :#f37b21;
            font-size:14px;
        }
        .area{
            display:block;
            font-weight: bold;
            margin: 39px 0 -9px -10px;
            
        }
        .do0{
            
            margin:16px 0 16px -10px;
            text-align:center
        }
        .do{
            display:inline-block;
            padding: 15px 10px;
            border:1px solid #cbc9c9;
            color: #cbc9c9;
            text-align:center;
            font-weight: bold;
            width: 175px;
            cursor:pointer;
            border-radius: 5px;
        }
        .do2{
            display:inline-block;
            padding: 15px 10px;
            border:1px solid #cbc9c9;
            color: #cbc9c9;
            text-align:center;
            font-weight: bold;
            width: 175px;
            cursor:pointer;
            border-radius: 5px;
        }
        


        #area3{
            border: 1px solid #cbc9c9; 
            border-radius: 5px;
            font-weight: bold;
            width: 400px;
            padding: .8em .5em;
            font-size:18px;
            margin:0 0 39px -5px;
            
        }
        
        .info{
            font-weight: bold;
            margin:0 0 16px -10px; 
        }
        
        #info0{
            border:1px solid #fff;
            width: 400px;
            height: 0px;
            margin:0 0 30px 0
        }

        #all{
            float:left;
            margin:4px 9px 0 0;
            border: 1px solid #cbc9c9; 
            
        }
        #all0{
            float:left;
            margin:4px 24px 0 0;
            font-weight: bold;
        }

        #email{
            float:left;
            margin:4px 9px 0 0 
        }

        #email0{
            float:left;
            margin:4px 24px 0 0;
            font-weight: bold;
        }

        #sms{
            float:left;
            margin:4px 9px 0 0
        }

        #sms0{
            float:left;
            margin:4px 0 0 0;
            font-weight: bold;
        }
        
        .info0{
            
            border-radius: 5px;
            border-color:#cbc9c9;
            text-align:left;
            width: 400px;
            padding:0 0 0 5px;
            margin:0 0 20px -10px; 
            line-height: 30px;
            font-size:13px;
            font-weight: bold;
            color:#f37b21
        }

        .star10{
            font-size:10px
        }
        .info1{
            margin:-30px 0 0 20px
        }
        .info2{
            margin: 0 0 0 20px
        }

        .line4{
            text-indent:-9999px;
            border-bottom:2px solid #9199c3;
            font-size:0px;
            margin:0 0 20px 0
        }

        h3{
            text-align:center;
            margin:0 0 20px 0
        }

        .line5{
            text-indent:-9999px;
            border-bottom:2px solid #cbc9c9;
            margin:0 0 18px 0 
        }

        #apply{
            
            width:200px;
            padding:0 0 18px 0
        }

        #apply0{
            float:left
        }
        
        #apply1{
            float:left;
            margin:2px 0 0 10px;
            font-weight: bold;
        }

        #check a{
            color: #9199c3;
        }

        #check{
            font-size:17px;
            font-weight: bold;
            width: 400px;
            margin:0 0 0 0
        }

        #lo{
            border:1px solid #fff;
            width: 400px;
            margin:0 0 35px 0;
            
        }

        #lo0{
            float:left
        }

        .lo1{
            float:left;
            margin:1px 5px 0 10px;
            font-size:15px
        }

        .lo2{
            float:left;
            margin:1px 0 0 0;
            font-size:15px
            
        }
        .lo3{
            float:right;
            margin:1px 0 0 0;
            font-size:15px
        }        

        #pr{
            border:1px solid #fff;
            width: 400px;
            margin:0 0 35px 0
        }
        #pr0{
            float:left
        }

        .pr1{
            float:left;
            margin:1px 5px 0 10px;
            font-size:15px
        }

        .pr2{
            float:left;
            margin:1px 0 0 0;
            font-size:15px
        }

        .pr3{
            float:right;
            margin:1px 0 0 0px;
            font-size:15px
        }

        #de{
            border:1px solid #fff;
            width: 400px;
            margin:0 0 0 0
        }

        #de0{
            float:left
        }

        .de1{
            float:left;
            margin:1px 5px 0 10px;
            font-size:15px;
        }

        .de2{
            float:left;
            margin:1px 0 0 0;
            font-size:15px;
        }

        .de3{
            float:right;
            margin:1px 0 0 0;
            font-size:15px;
        }

        
        .line6{
            text-indent:-9999px;
            border-bottom:2px solid #9199c3;
            margin:20px 0 50px 0
        }

        #sub{
            text-align:center;
            
        }

        #sub button{
            font-size:20px;
            font-weight: bold;
            width: 400px;
            height: 50px;
            /* background-color:#f37b21;  */
            border:1px solid #9199c3;            
            border-radius: 10px;
            box-shadow:5px 5px 5px black;
            
        }

        #sub a{
            color:#000;
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
        
        function selectAll(selectAll)  {
        const checkboxes 
            = document.getElementsByName('apply');
  
        checkboxes.forEach((checkbox) => {
        checkbox.checked = selectAll.checked;
        })
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
        })


            $(".m").click(function(){
                $(this).addClass("sel");
            })

            $(".m").click(function(){
                $(".f").removeClass("sel");
            })

            $(".f").click(function(){
                $(this).addClass("sel");
            })
            $(".f").click(function(){
                $(".m").removeClass("sel");
            })

            //경기도 경기도 외 지역

            $(".do").click(function(){
                $(this).addClass("sel");
            })

            $(".do").click(function(){
                $(".do2").removeClass("sel");
            })

            $(".do2").click(function(){
                $(this).addClass("sel");
            })
            $(".do2").click(function(){
                $(".do").removeClass("sel");
            })




            var now = new Date();
            var year = now.getFullYear();
            var mon = (now.getMonth() + 1) > 9 ? ''+(now.getMonth() + 1) : '0'+(now.getMonth() + 1);
            var day = (now.getDate()) > 9 ? ''+(now.getDate()) : '0'+(now.getDate());

            //연도 selectbox 
            for(var i = 1902 ; i <= year ; i++) {
                $('#year').append('<option value="' + i + '">' + i + '</option>');
            }

            //월별 selectbox
            for(var i = 1; i <= 12; i++) {
                var mm = i > 9 ? i : "0"+i ;
                $('#month').append('<option value="' + mm + '">' + mm + '</option>')
            }

            //일별 selectbox
            for(var i = 1; i <= 31; i++) {
                var dd = i > 9 ? i : "0"+i ;
                $('#day').append('<option value="' + dd + '">' + dd + '</option>')
            }
            $("#year >option[value="+year+"]").attr("selected", "true");
            $("#month >option[value="+mon+"]").attr("selected", "true");
            $("#day >option[value="+day+"]").attr("selected", "true");
            

            

            
            
        });

        

        function form_check(){
            var id = document.getElementById("id");
            var no = document.getElementById("no");
            var pwd = document.getElementById("pwd");
            var decimal= /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
            var repwd = document.getElementById("repwd");
            var name = document.getElementById("name");
            var mobile = document.getElementById("mobile");
            var apply = document.getElementById("apply");
            
            
            
            if(!id.value){
                alert("이메일 아이디를 입력하세요.")
                /* txt.textContent = "이메일 아이디를 입력하세요."; */
                id.focus();
                return false;
            };

            /* if(!no.value){
                alert("이메일 인증번호를 입력해주세요.")
                txt.textContent = "인증번호를 입력하세요.";
                no.focus();
                return false;
            }; */

            if(!pwd.value){
                alert("비밀번호를 입력하세요.")
                /* txt.textContent = "비밀번호를 입력해주세요."; */
                pwd.focus();
                return false;
            };

                                        //비밀번호 정규식

            
                
            if(!decimal.test(pwd.value)){
                alert("비밀번호는 최소 1개의 소문자, 1개의 대문자, 1개의 숫자 및 1개의 특수문자를 포함한 8~15자 이상이어야합니다.")
                pwd.focus();
                return false;
            };
            

            //----------------------------------------------------------------------------------

            
            if(pwd.value != repwd.value){
                alert("비밀번호를 확인해 주세요.");
                repwd.focus();
                return false;
            };

            
            if(!name.value){
                alert("이름을 입력하세요.")                
                name.focus();
                return false;
            };

            if(!mobile.value){
                alert("휴대전화를 입력해주세요.")
                mobile.focus();
                return false;
            };
            
            if(!apply.checked){
                alert("약관동의가 필요합니다.");
                apply.focus();
                return false;
            };
        };
    


  
    
  /* var pwdCheck = $("#pwdCheck").val();
    
  // 비밀번호 일치 확인
  if(pwd != pwdCheck){
    alert("비밀번호가 일치하지 않습니다. 확인해주세요.");
    $("#pwdCheck").focus();
    return false;
  }
    
  return true;
}; */
       
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
                        </label><br>
                        <input type="email" name="id" id="id" placeholder="이메일을 입력해주세요.">                        
                        <span id="err_id" class="err_txt"></span>
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

                    <p>
                        <label for="name" class="name">
                            이름<span class="star5">★</span>
                        </label><br>
                        <input type="text" name="name" id="name"><br>
                        <p class="name_under">
                            <span class="star6">◆</span>
                             수료증에 표기되는 이름으로, 회원가입 후 수정 불가능합니다.</p>
                        <span id="err_name" class="err_txt"></span>
                    </p>
                    
                    <p>
                        <label for="sex" class="sex">성별</label>
                        <span class="star7">★</span>
                        <br>
                        
                    <div class="m_f">
                        <lable>
                            <input type="radio" id="sex1" name="sex" value="M">
                            <span class="m">남성</span>
                        </lable>
                        
                        <lable>
                            <input type="radio" id="sex2" name="sex" value="F">
                            <span class="f">여성</span>
                        </lable>
                    </div>
                    </p>

                    <p class="birth">생년월일<span class="star8">★</span></p>
                    <p id="yymmdd">
                        <select name="yy" id="year" value="year"></select>
                        <select name="mm" id="month" value="month"></select>
                        <select name="dd" id="day" value="day"></select>
                    </p>

                    
                    <div class="phone">
                        휴대전화<span class="star9">★</span>
                    </div>
                        
                    <p>
                        <input type="tel" name="mobile" id="mobile">
                        <br><span class="phone2">"-" 없이 숫자만 입력</span>
                    </p>

                    <p>
                        <label for="area" class="area">지역</label><br>
                        <div class="do0">
                            <lable>
                                <input type="radio" id="area" name="area" value="do">
                                <span class="do">경기도</span>
                            </lable>
                            
                            <lable>
                                <input type="radio" id="area2" name="area2" value="do2">
                                <span class="do2">경기도 외 지역</span>
                            </lable>
                        </div>
                    </p>
                    
                    <select name="area2" id="area3">
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

                    <p id="apply">
                        <input type="checkbox" name="apply" id="apply0" value="y" onclick="selectAll(this)">
                        <label for="apply" id="apply1">전체 동의하기</label>
                    </p>

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