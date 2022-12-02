$(document).ready(function(){
            
    $(".gnb > ul > li, .gnb_full_bg").hover(function(){
        $(this).find("ul").stop().slideDown("fast");
        $(".gnb_full_bg").stop().slideDown("fast");
    }, function(){
        $(this).find("ul").hide();
        $(".gnb_full_bg").hide();
    })
        

    $("a").hover(function(){
        $(this).addClass("sel");
    }, function(){
        $(this).removeClass("sel")
    })
    
    $(function(){
    $(".next2").click(function(){
            /* $(".direct2").animate({"margin-left": "-=200px"}, 1000 ); */
            $(".direct2").animate({"margin-left": "-1200px"}, 500 );
        
            /* $(".direct2>li:first-child").insertAfter(".direct2>li:last-child") ; */
              
        });
    });

    
    $(function(){
    $(".prev2").click(function(){
        /* $(".direct2").animate({"margin-left": "+=200px"}, 1000 ); */
        $(".direct2").animate({"margin-left": "0px"}, 500 );
              

        
        });
    });

    
    
    
    
    
   
    
    

});

    
$(document).ready(function(){
    let currSlide = 1;


function button_click(num){
showSlide((currSlide += num))
}
function showSlide(num){
const slides = document.querySelectorAll(".slide");
if(num>slides.length){
    currSlide =1;
}if(num<1){
    currSlide = slides.length;
}
for(let i=0; i<slides.length; i++){
    slides[i].style.display="none";
    }slides[currSlide -1].style.display="block";
};


var left_value = 0;


function right(){
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


})

    

    







    