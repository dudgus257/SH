$(document).ready(function(){

    $(".gnb1").mouseenter(function(){
        $(".gnb1>ul").stop().slideDown("fast");
    });
    
    $(".gnb1").mouseleave(function(){
        $(".gnb1>ul").stop().slideUp("fast");
    });
    
    $(".gnb2").mouseenter(function(){
        $(".gnb2 ul ").stop().slideDown("fast");
    });
    
    $(".gnb2").mouseleave(function(){
        $(".gnb2 ul ").stop().slideUp("fast");
    });
    
    $(".gnb3").mouseenter(function(){
        $(".gnb3>ul").stop().slideDown("fast");
    });
    
    $(".gnb3").mouseleave(function(){
        $(".gnb3>ul").stop().slideUp("fast");
    });
    
    $(".gnb4").mouseenter(function(){
        $(".gnb4>ul").stop().slideDown("fast");
    });
    
    $(".gnb4").mouseleave(function(){
        $(".gnb4>ul").stop().slideUp("fast");
    });
    
    $(".gnb5").mouseenter(function(){
        $(".gnb5>ul").stop().slideDown("fast");
    });
    
    $(".gnb5").mouseleave(function(){
        $(".gnb5>ul").stop().slideUp("fast");
    });
    
    $(".gnb6").mouseenter(function(){
        $(".gnb6>ul").stop().slideDown("fast");
    });
    
    $(".gnb6").mouseleave(function(){
        $(".gnb6>ul").stop().slideUp("fast");
    });
    });
            function remove_notice(g_no){
                var ck = confirm("정말 삭제하시겠습니까?");
                if(ck){
                    location.href="delete.php?n_idx="+g_no;
                };
            };