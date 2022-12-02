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
        $(this).removeClass("sel2");
    });


        $(".m").click(function(){
            $(this).addClass("sel");
            $(".f").removeClass("sel");
            $(".m input[type=radio]").attr("checked",true);
            $(".f input[type=radio]").attr("checked",false);
        });

        $(".f").click(function(){
            $(this).addClass("sel");
            $(".m").removeClass("sel");
            $(".f input[type=radio]").attr("checked",true);
            $(".m input[type=radio]").attr("checked",false);
        });

        $(".do").click(function(){
            $(this).addClass("sel");
            $(".do2").removeClass("sel");
            $(".do input[type=radio]").attr("checked",true);
            $(".do2 input[type=radio]").attr("checked",false);
        });

        $(".do2").click(function(){
            $(this).addClass("sel");
            $(".do").removeClass("sel");
            $(".do2 input[type=radio]").attr("checked",true);
            $(".do input[type=radio]").attr("checked",false);
        });


        //경기도 경기도 외 지역

        /* $(".do").click(function(){
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
*/



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
        var sex1 = document.getElementById("sex1");
        var sex2 = document.getElementById("sex2");          
        var mobile = document.getElementById("mobile");
        var ps_code1 = document.getElementById("ps_code1");
        var ps_code2 = document.getElementById("ps_code2");            
        var apply0 = document.getElementById("apply0");
        
        
        
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

        
        if(sex1.checked != true && sex2.checked != true){
            alert("성별을 선택해주세요.")
            sex1.focus();
            return false;
        };                        

        if(!mobile.value){
            alert("휴대전화를 입력해주세요.")
            mobile.focus();
            return false;
        };                        

        if(ps_code1.checked != true && ps_code2.checked != true){
            alert("지역을 선택해주세요.")
            ps_code1.focus();
            return false;
        };

        if(!apply0.checked){
            alert("약관동의가 필요합니다.");
            apply0.focus();
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