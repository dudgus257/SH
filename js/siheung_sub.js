$(document).ready(function(){

    $(".gnb > ul > li, .gnb_full_bg").hover(function(){
        $(this).find("ul").stop().slideDown("fast");
        $(".gnb_full_bg").stop().slideDown("fast");
    }, function(){
        $(this).find("ul").hide();
        $(".gnb_full_bg").hide();
    })
    /* 
    
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
    
    $(".gnb7").mouseenter(function(){
        $(".gnb7>ul").stop().slideDown("fast");
    });
    
    $(".gnb7").mouseleave(function(){
        $(".gnb7>ul").stop().slideUp("fast");
    }); */
    
    $("a").hover(function(){
        $(this).addClass("sel");
    }, function(){
        $(this).removeClass("sel")
    });
    
    $(".welfare2").hover(function(){
        $(this).addClass("sel2");
    }, function(){
        $(this).removeClass("sel2")
    });
    $(".welfare3").hover(function(){
        $(this).addClass("sel2");
    }, function(){
        $(this).removeClass("sel2")
    });
    $(".welfare4").hover(function(){
        $(this).addClass("sel2");
    }, function(){
        $(this).removeClass("sel2")
    });
    $(".welfare5").hover(function(){
        $(this).addClass("sel2");
    }, function(){
        $(this).removeClass("sel2")
    });
    $(".welfare6").hover(function(){
        $(this).addClass("sel2");
    }, function(){
        $(this).removeClass("sel2")
    });
    $(".child_welfare3").hover(function(){
        $(this).addClass("sel3")
    }, function(){
        $(this).removeClass("sel3")
    });
    
    
    $("#godang0 > div:gt(0)").hide();
    setInterval(function(){
        $('#godang0 > div:first').fadeOut(2000).next().fadeIn(2000).end().appendTo('#godang0');     
    }, 3000);
    
    $("#bear0 > div:gt(0)").hide();
    setInterval(function(){
        $('#bear0 > div:first').fadeOut(2000).next().fadeIn(2000).end().appendTo('#bear0');
    }, 3000);
    
    $("#godang0").hover(function(){
        $("#godang0").stop();
    });
    
    
    /* $("#wel > div:gt(0)").hide();
    setInterval(function(){
        $('#wel > div:first').fadeOut(1000).next().fadeIn(1000).end().appendTo('#wel');
    }, 3000); */
    
                /* welfare menu */
    
    $(".welfare2").on('click', function(){
        $('.child_welfare').stop().show();
    });
    $(".welfare2").on('click', function(){
        $('.woman_welfare').stop().hide();
    });
    $(".welfare2").on('click', function(){
        $('.invalid_welfare').stop().hide();
    });
    $(".welfare2").on('click', function(){
        $('.elders_welfare').stop().hide();
    });
    $(".welfare2").on('click', function(){
        $('.famliy_welfare').stop().hide();
    });
    $(".welfare3").on('click', function(){
        $('.woman_welfare').stop().show();
    });
    $(".welfare3").on('click', function(){
        $('.child_welfare').stop().hide();
    });
    $(".welfare3").on('click', function(){
        $('.invalid_welfare').stop().hide();
    });
    $(".welfare3").on('click', function(){
        $('.elders_welfare').stop().hide();
    });
    $(".welfare3").on('click', function(){
        $('.famliy_welfare').stop().hide();
    });
    $(".welfare4").on('click', function(){
        $('.invalid_welfare').stop().show();
    });
    $(".welfare4").on('click', function(){
        $('.child_welfare').stop().hide();
    });
    $(".welfare4").on('click', function(){
        $('.woman_welfare').stop().hide();
    });
    $(".welfare4").on('click', function(){
        $('.elders_welfare').stop().hide();
    });
    $(".welfare4").on('click', function(){
        $('.famliy_welfare').stop().hide();
    });
    $(".welfare5").on('click', function(){
        $('.elders_welfare').stop().show();
    });
    $(".welfare5").on('click', function(){
        $('.child_welfare').stop().hide();
    });
    $(".welfare5").on('click', function(){
        $('.woman_welfare').stop().hide();
    });
    $(".welfare5").on('click', function(){
        $('.invalid_welfare').stop().hide();
    });
    $(".welfare5").on('click', function(){
        $('.famliy_welfare').stop().hide();
    });
    $(".welfare6").on('click', function(){
        $('.famliy_welfare').stop().show();
    });
    $(".welfare6").on('click', function(){
        $('.child_welfare').stop().hide();
    });
    $(".welfare6").on('click', function(){
        $('.woman_welfare').stop().hide();
    });
    $(".welfare6").on('click', function(){
        $('.invalid_welfare').stop().hide();
    });
    $(".welfare6").on('click', function(){
        $('.elders_welfare').stop().hide();
    });
    
                        /* notice */
    $(".notice3").on('click', function(){
        $(".notice4").stop().show();
    });
    $(".notice3").on('click', function(){
        $(".notice6").stop().hide();
    });
    $(".notice3").on('click', function(){
        $(".notice8").stop().hide();
    });
    $(".notice3").on('click', function(){
        $(".notice10").stop().hide();
    });
    $(".notice5").on('click', function(){
        $(".notice6").stop().show();
    });
    $(".notice5").on('click', function(){
        $(".notice4").stop().hide();
    });
    $(".notice5").on('click', function(){
        $(".notice8").stop().hide();
    });
    $(".notice5").on('click', function(){
        $(".notice10").stop().hide();
    });
    $(".notice7").on('click', function(){
        $(".notice8").stop().show();
    });
    $(".notice7").on('click', function(){
        $(".notice4").stop().hide();
    });
    $(".notice7").on('click', function(){
        $(".notice6").stop().hide();
    });
    $(".notice7").on('click', function(){
        $(".notice10").stop().hide();
    });
    $(".notice9").on('click', function(){
        $(".notice10").stop().show();
    });
    $(".notice9").on('click', function(){
        $(".notice4").stop().hide();
    });
    $(".notice9").on('click', function(){
        $(".notice6").stop().hide();
    });
    $(".notice9").on('click', function(){
        $(".notice8").stop().hide();
    });
    });
    
    
       
    var left_value = 0;
            
    
            function left_func(){
                var inner = document.getElementById("inner_div");
                left_value = left_value - 200;
                if(left_value <= -5474){
                    left_value = -5474;
                }
                inner.style.left = left_value+"px"; 
            }
    
            function right_func(){
                var inner = document.getElementById("inner_div");
                left_value = left_value + 200;
                if(left_value > 0){
                    left_value = 0;
                }
                inner.style.left = left_value+"px";
    
            }