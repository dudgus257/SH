<!DOCTYPE html>
<html lang="ko">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>분야별</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&display=swap" rel="stylesheet">
    <script type="text/javascript" src="jquery.js"></script>
    <scrip type="text/javascript">


    </scrip>
    <style type="text/css">
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

            /* wrap */
        .wrap{
            min-width:1600px
        }

        .header{
            height:271px;
            width:1600px;
            border-bottom:1px solid #DDDDE0;
            margin:auto;
            position:relative;
            z-index:10
        }
        /* header */
        .top{
            border-bottom:2px solid #36AE58;
            width:1600px;
            height:70px;            
            margin: auto
        }
        .top_menu{
            
            width:1200px;
            height:70px;
            position:relative;
            margin: auto 
        }
        
        .top1{
            float:left;
            position:relative;
            margin:25px 36px 26px 0
        }
        .top1 > a{
            width:72px;
            height:70px;
            font-weight:900;
            display:block
            /* margin:25px 36px 26px 218px  */
        }
        .top2{
            float:left;
            margin:25px 36px 26px 0;    
        }
        .top2 a{
            width:72px;
            height:70px;
            display:block;
            font-weight:900;
            
            
        }
        .top3 {
            float:left;
            margin:25px 36px 26px 0 
        }
        .top3 a {
            width:54px;
            height:18px;
            display:block;
            font-weight:900;
        }
        .top4 {
            float:left;
            margin:25px 36px 26px 0 
        }
        .top4 a {
            width:90px;
            height:18px;
            display:block;
            font-weight:900
        }
        .top5 {
            float:left;
            margin:25px 36px 26px 0 
        }
        .top5 a {
            width:72px;
            height:18px;
            display:block;
            font-weight:900
        }
        .top6 {
            float:left;
            margin:25px 36px 26px 0 
        }
        .top6 a {
            width:108px;
            height:18px;
            display:block;
            font-weight:900
        }
        .top7 {
            
            float:left;
            margin:25px 0px 26px 0px 
        }
        .top7 a {
            width:90px;
            height:18px;
            display:block;
            font-weight:900
        }
        .top8 {
            float:left;
            margin:25px 16px 36px 199px 
        }
        .top8 a {
            width:108px;
            height:18px;
            display:block;
            font-weight:900
        }
        .top9{
            float:left;
            margin:25px 16px 36px 0;
            width:5px;
            height:18px;
            display:block;
            font-weight:900
        }
        
        
        .top10 {
            float:left;
            margin:25px 0 36px 0 
        }
        .top10 a {
            width:82px;
            height:18px;
            display:block;
            font-weight:900
        }
                /* logo */

        .logo{
            width:225px;
            height:99px;
            margin:17px auto 0px
            
        }
        .logo a{
            
            display:block;
            background:url(images/logo_03.jpg) no-repeat;
            text-indent:-9999px;
            width:225px;
            height:99px;
        }
        /* .gnb{
            border:3px solid #cbcbcb
        } */
        .gnb{
            position:relative;
            margin:auto;
            width: 1200px;
            height: auto;                        
        }
        .nav_bg{            
            width:1200px;
            height:auto;
            background:#8484aa;
            margin:auto
        }        
        .gnb h2{
            position:absolute;
            left:-9999px;
            top:-9999px;
        }        
        /* .gnb>ul{
            width:100%;
            height: 40px;
            margin:30px auto;
            font-size:18px;
            color:#000
        } */

        .gnb>ul>li{
            float:left;
            width:171px;
            position:relative;
            line-height:40px;
            text-align:center;
            margin:25px 0 0 0;
            height:auto                               
        }

        .gnb>ul>li>a{
            display:block;
            height: 40px;                        
        }

        .gnb1>ul{
            display:none;
            height: auto;
            
        }
        .gnb2>ul{
            display:none
        }
        .gnb3>ul{
            display:none
        }
        .gnb4>ul{
            display:none
        }
        .gnb5>ul{
            display:none
        }
        .gnb6>ul{
            display:none
        }
        .gnb7>ul{
            display:none
        }
        
                        /* gnb1 */
        
        .a1{
            font-weight: bold;
        }
        .bg1{
            position:relative;
            background-color: #fff;
            border-bottom:1px solid #D9D7D7;
            width:1200px;
            height:700px;
            margin:20px 0 0 0;
        }
        .gnb1 ul ul{
            
            width:200px;
            height:700px;
            
        }
        /* .small_gnb ul{
            position:absolute;
            text-align:left;            
            font-size:15px;
            height:250px;
        } */
        .gnb1_1{
            /* float:left; */
            text-align:left;
            border-bottom:1px solid #36AE58;
            width:200px;
            height:auto;
            font-weight: bold;
            font-size:15px;
            /* margin-left:10px; */            
            display: block;            
        }
        .small_gnb{
            font-size:15px;
            text-align:left;
            margin-left:10px;
            height:auto
        }
              
        .small_gnb2 {
            position:absolute;
            text-align:left;
            left:250px;
            font-size:15px;
            top:0px
        }
        .gnb1_2{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            display: block;         
        }        
        .small_gnb3{
            position:absolute;
            text-align:left;
            left:500px;
            font-size:15px;
            top:0px
        }
        .gnb1_3{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            display: block;  
            font-size:15px;       
        }
        .small_gnb4{
            position:absolute;
            text-align:left;
            left:750px;
            font-size:15px;
            top:0px
        }
        .gnb1_4{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            display: block;         
        }     
        .small_gnb5{
            position:absolute;
            text-align:left;
            left:1000px;
            font-size:15px;
            top:0px
        }
        .gnb1_5{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;
            font-size:15px;
            font-weight: bold;
            display: block;         
        }        
        .small_gnb6{
            position:absolute;
            text-align:left;
            left:0px;
            font-size:15px;
            top:265px
        }
        .gnb1_6{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            display: block;         
        }     
        .small_gnb7{
            position:absolute;
            text-align:left;
            left:250px;
            font-size:15px;
            top:250px
        }
        .gnb1_7{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;
            line-height:50px;
            font-weight: bold;
            display: block;         
        }      
        .small_gnb8{
            position:absolute;
            text-align:left;
            left:500px;
            font-size:15px;
            top:250px
        }
        .gnb1_8{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;
            line-height:50px;
            font-weight: bold;
            display: block;         
        }
        .small_gnb9{
            position:absolute;
            text-align:left;
            left:750px;
            font-size:15px;
            top:250px
        }
        .gnb1_9{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;
            line-height:50px;
            font-weight: bold;
            display: block;         
        }   
        .small_gnb10{
            position:absolute;
            text-align:left;
            left:1000px;
            font-size:15px;
            top:250px
        }
        .gnb1_10{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;
            line-height:50px;
            font-weight: bold;
            display: block;         
        }
        .small_gnb11{
            position:absolute;
            text-align:left;
            left:0px;
            font-size:15px;
            top:550px
        }        
        .gnb1_11{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            display: block;         
        }
        .small_gnb12{
            position:absolute;
            text-align:left;
            left:250px;
            font-size:15px;
            top:550px
        }
        .gnb1_12{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            display: block;         
        }
        .small_gnb13{
            position:absolute;
            text-align:left;
            left:500px;
            font-size:15px;
            top:550px
        }
        .gnb1_13{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            display: block;         
        }
        .small_gnb14{
            position:absolute;
            text-align:left;
            left:750px;
            font-size:15px;
            top:550px
        }
        .gnb1_14{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            display: block;         
        }

                        /* gnb2 */
        .a2{
            font-weight: bold;
        }
        .bg2{
            position:relative;
            background-color: #fff;
            border-bottom:1px solid #D9D7D7;
            width:1200px;
            height:950px;
            margin:20px 0 0 -171px;
        }
        .small_gnb15{
            position:absolute;
            text-align:left;
            left:0px;
            font-size:15px;
            top:0px
        }
        .gnb2_1{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;         
        }
        .small_gnb16{
            position:absolute;
            text-align:left;
            left:250px;
            font-size:15px;
            top:0px
        }
        .gnb2_2{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;         
        }
        .small_gnb17{
            position:absolute;
            text-align:left;
            left:500px;
            font-size:15px;
            top:0px
        }
        .gnb2_3{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;         
        }
        .small_gnb18{
            position:absolute;
            text-align:left;
            left:750px;
            font-size:15px;
            top:0px
        }
        .gnb2_4{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;         
        }
        .small_gnb19{
            position:absolute;
            text-align:left;
            left:1000px;
            font-size:15px;
            top:0px
        }
        .gnb2_5{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;         
        }
        .small_gnb20{
            position:absolute;
            text-align:left;
            left:0px;
            font-size:15px;
            top:450px
        }
        .gnb2_6{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;         
        }
        .small_gnb21{
            position:absolute;
            text-align:left;
            left:250px;
            font-size:15px;
            top:450px
        }
        .gnb2_7{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:211px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;         
        }
        .small_gnb22{
            position:absolute;
            text-align:left;
            left:500px;
            font-size:15px;
            top:450px
        }
        .gnb2_8{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:230px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;         
        }
        .small_gnb23{
            position:absolute;
            text-align:left;
            left:760px;
            font-size:15px;
            top:450px
        }
        .gnb2_9{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;         
        }
        .small_gnb24{
            position:absolute;
            text-align:left;
            left:1000px;
            font-size:15px;
            top:450px
        }
        .gnb2_10{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;         
        }
        .small_gnb25{
            position:absolute;
            text-align:left;
            left:0px;
            font-size:15px;
            top:750px
        }
        .gnb2_11{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;         
        }
        .small_gnb26{
            position:absolute;
            text-align:left;
            left:250px;
            font-size:15px;
            top:750px
        }
        .gnb2_12{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;         
        }

                        /* gnb3 */

        .a3{
            font-weight: bold;
            
        }
        .bg3{
            position:relative;
            background-color: #fff;
            border-bottom:1px solid #D9D7D7;
            width:1200px;
            height:350px;
            margin:20px 0 0 -342px
        }
        
        .small_gnb27{
            position:absolute;
            text-align:left;
            left:0px;
            font-size:15px;
            top:0px
        }
        .gnb3_1{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;                     
        }
        .small_gnb28{
            position:absolute;
            text-align:left;
            left:250px;
            font-size:15px;
            top:0px
        }
        .gnb3_2{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;         
        }
        .small_gnb29{
            position:absolute;
            text-align:left;
            left:500px;
            font-size:15px;
            top:0px
        }
        .gnb3_3{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;         
        }
        .small_gnb30{
            position:absolute;
            text-align:left;
            left:750px;
            font-size:15px;
            top:0px
        }
        .gnb3_4{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;         
        }
        .small_gnb31{
            position:absolute;
            text-align:left;
            left:1000px;
            font-size:15px;
            top:0px
        }
        .gnb3_5{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;         
        }

                        /* gnb4 */
        .a4{
            font-weight: bold;
        }
        .bg4{
            position:relative;
            background-color: #fff;
            border-bottom:1px solid #D9D7D7;
            width:1200px;
            height:550px;
            margin:20px 0 0 -513px
        }     
        .small_gnb32{
            position:absolute;
            text-align:left;
            left:0px;
            font-size:15px;
            top:0px
        }
        .gnb4_1{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;         
        }     
        .small_gnb33{
            position:absolute;
            text-align:left;
            left:250px;
            font-size:15px;
            top:0px
        }
        .gnb4_2{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;         
        }     
        .small_gnb34{
            position:absolute;
            text-align:left;
            left:500px;
            font-size:15px;
            top:0px
        }
        .gnb4_3{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;         
        }   
        .small_gnb35{
            position:absolute;
            text-align:left;
            left:750px;
            font-size:15px;
            top:0px
        }
        .gnb4_4{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;         
        }    
        .small_gnb36{
            position:absolute;
            text-align:left;
            left:1000px;
            font-size:15px;
            top:0px
        }
        .gnb4_5{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;         
        }        
        .small_gnb37{
            position:absolute;
            text-align:left;
            left:0px;
            font-size:15px;
            top:300px
        }
        .gnb4_6{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;         
        }     
        .small_gnb38{
            position:absolute;
            text-align:left;
            left:250px;
            font-size:15px;
            top:300px
        }
        .gnb4_7{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;         
        }     
        .small_gnb39{
            position:absolute;
            text-align:left;
            left:500px;
            font-size:15px;
            top:300px
        }
        .gnb4_8{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;         
        }     
        .small_gnb40{
            position:absolute;
            text-align:left;
            left:750px;
            font-size:15px;
            top:300px
        }
        .gnb4_9{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;         
        }     
        .small_gnb41{
            position:absolute;
            text-align:left;
            left:1000px;
            font-size:15px;
            top:300px
        }
        .gnb4_10{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;         
        }
        .a5{
            font-weight: bold;
        }
        .bg5{
            position:relative;
            background-color: #fff;
            border-bottom:1px solid #D9D7D7;
            width:1200px;
            height:450px;
            margin:20px 0 0 -684px
        }
        .small_gnb42{
            position:absolute;
            text-align:left;
            left:0px;
            font-size:15px;
            top:0px
        }
        .gnb5_1{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;         
        }
        .small_gnb43{
            position:absolute;
            text-align:left;
            left:250px;
            font-size:15px;
            top:0px
        }
        .gnb5_2{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:209px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;         
        }
        .small_gnb44{
            position:absolute;
            text-align:left;
            left:500px;
            font-size:15px;
            top:0px
        }
        .gnb5_3{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;         
        }
        .small_gnb45{
            position:absolute;
            text-align:left;
            left:750px;
            font-size:15px;
            top:0px
        }
        .gnb5_4{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;         
        }
        .small_gnb46{
            position:absolute;
            text-align:left;
            left:1000px;
            font-size:15px;
            top:0px
        }
        .gnb5_5{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;         
        }
        .small_gnb47{
            position:absolute;
            text-align:left;
            left:0px;
            font-size:15px;
            top:250px
        }
        .gnb5_6{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;         
        }
        .small_gnb48{
            position:absolute;
            text-align:left;
            left:250px;
            font-size:15px;
            top:250px
        }
        .gnb5_7{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;       
        }

                    /* gnb6 */

        .a6{
            font-weight: bold;
        }
        .bg6{
            position:relative;
            background-color: #fff;
            border-bottom:1px solid #D9D7D7;
            width:1200px;
            height:650px;
            margin:20px 0 0 -855px
        }
        .small_gnb49{
            position:absolute;
            text-align:left;
            left:0px;
            font-size:15px;
            top:0px
        }
        .gnb6_1{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;       
        }
        .small_gnb50{
            position:absolute;
            text-align:left;
            left:250px;
            font-size:15px;
            top:0px
        }
        .gnb6_2{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;       
        }
        .small_gnb51{
            position:absolute;
            text-align:left;
            left:500px;
            font-size:15px;
            top:0px
        }
        .gnb6_3{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;       
        }
        .small_gnb52{
            position:absolute;
            text-align:left;
            left:750px;
            font-size:15px;
            top:0px
        }
        .gnb6_4{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;       
        }
        .small_gnb53{
            position:absolute;
            text-align:left;
            left:1000px;
            font-size:15px;
            top:0px
        }
        .gnb6_5{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;       
        }
        .small_gnb54{
            position:absolute;
            text-align:left;
            left:0px;
            font-size:15px;
            top:350px
        }
        .gnb6_6{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;       
        }
        .small_gnb55{
            position:absolute;
            text-align:left;
            left:250px;
            font-size:15px;
            top:350px
        }
        .gnb6_7{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;       
        }
        .small_gnb56{
            position:absolute;
            text-align:left;
            left:500px;
            font-size:15px;
            top:350px
        }
        .gnb6_8{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;       
        }
        .small_gnb57{
            position:absolute;
            text-align:left;
            left:750px;
            font-size:15px;
            top:350px
        }
        .gnb6_9{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;       
        }
        .a7{
            font-weight: bold;
        }
        .bg7{
            position:relative;
            background-color: #fff;
            border-bottom:1px solid #D9D7D7;
            width:1200px;
            height:250px;
            margin:20px 0 0 -1026px
        }
        .small_gnb58{
            position:absolute;
            text-align:left;
            left:0px;
            font-size:15px;
            top:0px
        }
        .gnb7_1{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;       
        }
        .small_gnb59{
            position:absolute;
            text-align:left;
            left:250px;
            font-size:15px;
            top:0px
        }
        .gnb7_2{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;       
        }
        .small_gnb60{
            position:absolute;
            text-align:left;
            left:500px;
            font-size:15px;
            top:0px
        }
        .gnb7_3{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;       
        }
        .small_gnb61{
            position:absolute;
            text-align:left;
            left:750px;
            font-size:15px;
            top:0px
        }
        .gnb7_4{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;            
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;       
        }
        .small_gnb62{
            position:absolute;
            text-align:left;
            left:1000px;
            font-size:15px;
            top:0px
        }
        .gnb7_5{
            float:left;
            text-align:left;
            border-bottom:1px solid #36AE58;
            width:200px;
            height:auto;            
            font-weight: bold;
            font-size:15px;
            display: block;       
        }

                        /* 검색창 */
        .content{
            position:relative;
            z-index:1
        }
        fieldset{
            display:block;
            width: 1200px;
            border : none;
            margin:auto
        }
        legend{
            text-indent: -9999px;
            font-size:0px
        }
        .search{            
            border:2px solid #36AE58;            
            width: 850px;
            height: 50px;
            margin:20px auto 20px;
            border-radius: 15px 0 15px 0;
            box-shadow: 10px 5px 5px #535353
                     
        }
        select, input{
            border:none;
            background: none;
            float:left;
            color :#c2bfbf;
            font-size:20px;
        }
        .search3{
            border:none;
            width: 494px;
            height: 48px;
            padding-left:50px;
            font-weight: bold;
            color :#c2bfbf;        
        }
        
            
        
        select{
            width: 200px;
            height: 50px;
            font-size:20px;
            font-weight: bold;
            color :#c2bfbf
            
        }
        .search_button{
            width: 100px;
            height: 50px;
            background-color:#36AE58;
            color : #fff;
            font-weight: bold;
            font-size:20px;
            border:none;
            margin:0 0 0 4px;
            border-radius: 10px 0 10px 0;            
        }
        
                        /* 복지메뉴 */

        .welfare{
            position:relative;  
            width:1600px;
            height: 500px;
            margin:0px auto 20px;
                
        }
        .welfare::before{
            content: "";
            position:absolute;
            background:url(images/welfare2.jpg) no-repeat;
            background-size: cover;        
            margin:auto;
            opacity: 0.3;
            top: 0px;
            left: 0px;
            right: 0px;
            bottom: 0px;
        }
        .welfare li{
            position:relative;
            
        }
        .welfare h2{
            text-indent:-9999px;
        }

        .welfare2{            
            position:relative;        
            width: 210px;
            height: 61px;
            background-color: #fff;
            text-align:center;
            margin:32px 0 0 300px;
            border-radius: 15px 0 0 0;
            z-index:2
                                    
        }
        .welfare2_1{
            position:absolute;            
            margin: 17px 0 0 -35px;
            font-weight: bold;
            z-index:2;
            
            
        }
        .welfare3{            
            position:relative;        
            width: 210px;
            height: 61px;
            background-color: #fff;
            text-align:center;
            margin:16px 0 0 300px;
            border-radius: 15px 0 0 0;
            z-index:2
                                    
        }
        .welfare3_1{
            position:absolute;            
            margin: 17px 0 0 -35px;
            font-weight: bold;
            z-index:2
        }
        .welfare4{            
            position:relative;        
            width: 210px;
            height: 61px;
            background-color: #fff;
            text-align:center;
            margin:16px 0 0 300px;
            border-radius: 15px 0 0 0;
            z-index:2
                                    
        }
        .welfare4_1{
            position:absolute;            
            margin: 17px 0 0 -35px;
            font-weight: bold;
            z-index:2
        }
        .welfare5{
            position:relative;        
            width: 210px;
            height: 61px;
            background-color: #fff;
            text-align:center;
            margin:16px 0 0 300px;
            border-radius: 15px 0 0 0;
            z-index:2
                                    
        }
        .welfare5_1{
            position:absolute;            
            margin: 17px 0 0 -35px;
            font-weight: bold;
            z-index:2
        }
        .welfare6{
            position:relative;        
            width: 210px;
            height: 61px;
            background-color: #fff;
            text-align:center;
            margin:16px 0 0 300px;
            border-radius: 15px 0 0 0;
            z-index:2
                                    
        }
        .welfare6_1{
            position:absolute;            
            margin: 17px 0 0 -35px;
            font-weight: bold;
            z-index:2
        }
        .child_welfare{            
            position:absolute;
            background:url(images/welfare.jpg) no-repeat;
            width: 800px;
            height:396px;
            margin:-380px 0 0 500px;
            z-index:1;
        }
        .child_welfare2{
            position:absolute;
            margin:30px 0 0 20px;
            font-size:50px;                        
            font-family: 'Nanum Pen Script', cursive;
            color:white
        }
        
        .child_welfare3{
            position:absolute;
            font-size:30px;
            margin:350px 0 0 650px;
            font-weight: bold;
            font-family: 'Nanum Pen Script', cursive;            
        }

                        /* direct_menu */
                    
        .direct_menu{
            position:relative;
            margin:0px auto 20px;
            width: 1600px;
            height: 170px;
            background-color:rgb(158, 231, 207);
            box-shadow: 10px 5px 5px #535353
        }
        .direct_menu2{
            
            width: 1200px;
            height: 170px;
            margin:auto 
        }
        .direct_menu2 span{
            font-size:15px
            
        }
        .di{
            position:absolute;
            background:url(images/bus.jpg) no-repeat;
            width: 67px;
            height: 65px;
            border-radius:50%;
            margin:19px 0 0 0;
            cursor:pointer
                                    
        }
        .dir{
            position:absolute;
            font-weight: bold;
            color:#535353;
            margin:100px 0 0 0;
            text-align:center;
            
            
        }
        .di2{
            position:absolute;
            background:url(images/car.jpg) no-repeat;
            width: 67px;
            height: 65px;
            border-radius:50%;
            margin:19px 36px 0 103px;
            cursor:pointer
                                    
        }
        .dir2{
            position:absolute;
            font-weight: bold;
            color:#535353;
            margin:100px 0 0 105px;
            text-align:center;
            

        }
        .di3{
            position:absolute;
            background:url(images/nope.jpg) no-repeat;
            width: 67px;
            height: 65px;
            border-radius:50%;
            margin:19px 36px 0 206px;
            cursor:pointer
                                    
        }
        .dir3{
            position:absolute;
            font-weight: bold;
            color:#535353;
            margin:100px 0 0 190px;
            text-align:center        
        }
        .di4{
            position:absolute;
            background:url(images/bicycle.jpg) no-repeat;
            width: 67px;
            height: 65px;
            border-radius:50%;
            margin:19px 36px 0 309px;
            cursor:pointer
                                    
        }
        .dir4{
            position:absolute;
            font-weight: bold;
            color:#535353;
            margin:100px 0 0 300px;
            text-align:center;
            font-size:15px;
            
        }
        .di5{
            position:absolute;
            background:url(images/recycle.jpg) no-repeat;
            width: 67px;
            height: 65px;
            border-radius:50%;
            margin:19px 36px 0 412px;
            cursor:pointer
                                    
        }
        .dir5{
            position:absolute;
            font-weight: bold;
            color:#535353;
            margin:100px 0 0 405px;
            text-align:center        
        }
        .di6{
            position:absolute;
            background:url(images/big_trash.jpg) no-repeat;
            width: 67px;
            height: 65px;
            border-radius:50%;
            margin:19px 36px 0 515px;
            cursor:pointer
                                    
        }
        .dir6{
            position:absolute;
            font-weight: bold;
            color:#535353;
            margin:100px 0 0 510px;
            text-align:center
        }
        .di7{
            position:absolute;
            background:url(images/pet.jpg) no-repeat;
            width: 67px;
            height: 65px;
            border-radius:50%;
            margin:19px 36px 0 618px;
            cursor:pointer
                                    
        }
        .dir7{
            position:absolute;
            font-weight: bold;
            color:#535353;
            margin:100px 0 0 620px;
            text-align:center        
        }
        .di8{
            position:absolute;
            background:url(images/park.jpg) no-repeat;
            width: 67px;
            height: 65px;
            border-radius:50%;
            margin:19px 36px 0 721px;
            cursor:pointer
                                    
        }
        .dir8{
            position:absolute;
            font-weight: bold;
            color:#535353;
            margin:100px 0 0 725px;
            text-align:center      
        }
        .di9{
            position:absolute;
            background:url(images/safty.jpg) no-repeat;
            width: 67px;
            height: 65px;
            border-radius:50%;
            margin:19px 36px 0 824px;
            cursor:pointer
                                    
        }
        .dir9{
            position:absolute;
            font-weight: bold;
            color:#535353;
            margin:100px 0 0 820px;
            text-align:center     
        }
        .di10{
            position:absolute;
            background:url(images/ground.jpg) no-repeat;
            width: 67px;
            height: 65px;
            border-radius:50%;
            margin:19px 36px 0 927px;
            cursor:pointer
                                    
        }
        .dir10{
            position:absolute;
            font-weight: bold;
            color:#535353;
            margin:100px 0 0 925px;
            text-align:center         
        }
        .di11{
            position:absolute;
            background:url(images/love2.jpg) no-repeat;
            width: 67px;
            height: 65px;
            border-radius:50%;
            margin:19px 36px 0 1030px;
            cursor:pointer
                                    
        }
        .dir11{
            position:absolute;
            font-weight: bold;
            color:#535353;
            margin:100px 0 0 1015px;
            text-align:center       
        }
        .di12{
            position:absolute;
            background:url(images/water.jpg) no-repeat;
            width: 67px;
            height: 65px;
            border-radius:50%;
            margin:19px 36px 0 1133px;
            cursor:pointer
                                    
        }
        .dir12{
            position:absolute;
            font-weight: bold;
            color:#535353;
            margin:100px 0 0 1120px;
            text-align:center            
        }
        .news h2{                                    
            margin:0 0 20px 0;
            
        }
        .news{
            
            position:relative;        
            width: 1200px;
            height: 1200x;
            margin:auto;
            
        }
        .sosik{
            color:#535353;        
        }
        .godang{
            position:absolute;
            background:url(images/godang.jpg) no-repeat;
            width: 780px;
            height: 398px;
        }
        .godang2{
            position:absolute;            
            background-color: #c4c3c3;
            height: 40px;
            width: 780px;
            margin:397px 0 0 0;
            border-radius: 0 0 10px 10px;                        
        }
        .bear{            
            position:absolute;
            background:url(images/bear.jpg) no-repeat;
            width: 376px;
            height: 398px;
            margin:0 0 0 824px        
        }
        .bear2{
            position:absolute;          
            background-color: #c4c3c3;
            height: 40px;
            width: 376px;
            margin:397px 0 0 824px;
            border-radius: 0 0 10px 10px;            
        }
        .information{            
            position:relative;            
            width: 1200px;
            height: 355px;
            margin:500px auto 50px;         
        }
        .notice{
            margin-bottom:20px;
            color:#535353
        }
        .notice2{
            position:absolute;
            border:1px solid #cecbcb;            
            width: 780px;
            height: 298px;
            box-shadow: 10px 5px 5px #535353       
        }
        .notice3{
            float:left;
            font-weight: bold;
            font-size:25px
        }
        .notice4{
            /* display:none; */
            position:absolute;
            margin:50px 0 0 10px;
            border:1px solid #000;
            height: 220px;
            font-size:20px;
            font-weight: bold;
            
            
        }
        .notice5{
            float:left;
            font-weight: bold;
            font-size: 25px;
            margin-left:20px
        }
        .notice6{
            display:none;
        }
        .notice7{
            float:left;
            font-weight: bold;
            font-size: 25px;
            margin-left:20px
        }
        .notice8{
            display:none
        }
        .notice9{
            float:left;
            font-weight: bold;
            font-size: 25px;
            margin-left:20px
        }
        .notice10{
            display:none
        }
        .more button{
            border:1px solid #fff;
            color : #000;
            width: 50px;
            height: 50px;
            font-size:50px;        
            float:right;
            background-color:white;
            border-radius: 50%;
            
            
            
        }
        .hospital{
            position:absolute;
            margin:-55px 0 0 830px;
            color: #4e92ec
        }
        .hospital2{
            display:flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
            position:relative;            
            height: 320px;
            width: 376px;
            margin:0 0 0 824px;
            
        }
        .hospital3{
            border:1px solid #e2e2e2;            
            width: 170px;
            height: 85px;
            box-shadow: 10px 5px 5px #535353            
        }
        .hospital4{
            position:absolute;
            font-weight: bold;            
            margin:30px 0 0 10px
                       
        }
        .hospital4_1{
            color:#4e92ec;            
        }
        .hospital5{
            border:1px solid #e2e2e2;
            
            width: 170px;
            height: 85px;
            box-shadow: 10px 5px 5px #535353;         
        }
        .hospital6{
            position:absolute;
            font-weight: bold;
            margin:30px 0 0 40px                 
        }
        .hospital6_1{
            color:#4e92ec;            
        }
        .hospital7{
            border:1px solid #e2e2e2;
            
            width: 170px;
            height: 85px;
            box-shadow: 10px 5px 5px #535353;
                
        }
        .hospital8{
            position:absolute;
            font-weight: bold;
            margin:30px 0 0 40px
                      
        }
        .hospital8_1{
            color:#4e92ec;            
        }
        .hospital9{
            border:1px solid #e2e2e2;
            
            width: 170px;
            height: 85px;
            box-shadow: 10px 5px 5px #535353;
                      
        }
        .hospital10{
            position:absolute;
            font-weight: bold;
            margin:30px 0 0 25px
                      
        }
        .hospital10_1{
            color:#4e92ec;            
        }
        .hospital11{
            border:1px solid #e2e2e2;
            ;
            width: 170px;
            height: 85px;
            box-shadow: 10px 5px 5px #535353;
                    
        }
        .hospital12{
            position:absolute;
            font-weight: bold;
            margin:30px 0 0 20px
                      
        }
        .hospital12_1{
            color:#4e92ec;            
        }
        .hospital13{                        
            position: relative;
            width: 170px;
            height: 85px;
            box-shadow: 10px 5px 5px #535353;  
            
            
                                   
        }
        .hospital13::before{            
            content: "";
            background:url(images/nori.jpg) no-repeat;                        
            background-size: cover;
            opacity: 0.5;
            position:absolute;                        
            top: 0px;
            left: 0px;
            right: 0px;
            bottom: 0px;
            
        }
        .hospital14{
            position:relative;
            font-size:20px;
            font-weight: bold;
            
            
        }
        .hospital14_1{
            font-family: 'Nanum Pen Script', cursive;
            position:absolute;
            margin:20px
        }
        .hospital14_2{
            font-family: 'Nanum Pen Script', cursive;
            position:absolute;
            margin:40px 0 0 90px
        }
        .tour{
            position:relative;
            margin:auto;
            background:url(images/sky.jpg) no-repeat;
            width: 1600px;
            height: 500px;            
        }
        .tour_title{            
            
            margin:20px 0 0 200px;
            width: 200px;                                    
        }
        .tour2{
            position:relative;            
            width: 1200px;
            height: 400px;
            margin:10px 0 0 200px;
               
        }
        .tour3{
            float:left;
            background:url(images/hojo.jpg) no-repeat;
            width: 780px;
            height: 388px;
            margin-top:20px                        
        }
        .tour4{
            float:right;            
            height: 390px;
            width: 376px;
            margin-top:20px;
            display:flex;
            flex-direction:column;
            flex-wrap: wrap;
            justify-content: space-between;
            text-indent:-9999px
        }
       
        .tour5{
            background:url(images/tour.jpg) no-repeat;
            box-shadow: 10px 5px 5px #535353;    
            width: 376px;
            height: 120px;   
        }
        .tour6{
            background:url(images/tour2.jpg) no-repeat;
            box-shadow: 10px 5px 5px #535353;
            width: 376px;
            height: 120px;
            
        }
        .tour7{
            background:url(images/tour3.jpg) no-repeat;
            box-shadow: 10px 5px 5px #535353;
            width: 376px;
            height: 120px;
        }
        .park{
            background:url(images/park2.jpg) no-repeat;
            margin:auto;
            width: 1600px;
            height: 484px;                                    
        }
        .bar{
            border-top:1px solid rgba(221, 221, 224, 1);
            text-indent:-9999px;
            width: 1600px;
            height: 1px;
            margin:38px auto 26px;
            font-size:0px
        }
        .news{
            
            width: 1200px;
            height: 20px;
            margin:auto
        }
        .news1{
            text-indent:-9999px
        }

       
        #frame_div{
            
            width: 1200px;
            height: 20px;
            position:relative;
            margin:-32px 0px 0 0;
            overflow:hidden;
        }
        
        #inner_div{
            width: 7000px;
            height: 20px;
            left:0px;
            position:absolute;                        
            transition: left 0.5s;        
        }
        .block_div{
            
            width: 220px;
            height: 20px;
            text-align:center;
            float:left;
            cursor: pointer;
        }

        .block_div2{
            color:#D9D7D7;
            width: 18px;
            height: 20px;
            text-align:center;
            float:left;
        }

        #inner_div{
            
            width:auto;
            margin-right:10px;
            margin-top:-1px;
            float:left;
            color: rgba(175, 174, 174, 1);
            font-weight: bold;
        }

        .playbutton{
            
            
            margin-top:2px;
            
            text-align:center
            
        }
        .playbutton button{   
            box-shadow: 6px 6px 6px lightgray; 
            font-weight: bold;         
            width: 50px;
            border:1px solid #36AE58;
            background-color:#36AE58;
            border-radius: 5px;
            color:#fff;                                    
        }
        #left{            
         margin-right:0px;
         cursor: pointer;                     
        }

        #right{                        
            cursor: pointer;
        }
        /* 하단메뉴 */
        .footer{
            position:relative;
            z-index:5
        }

        .bottom_menu{
            border:1px solid #36AE58;
            background-color: #36AE58;
            box-shadow: 6px 6px 6px lightgray; 
            width: 1200px;
            height: 70px;
            margin:60px auto
        }
        .bottom1{
            text-indent:-9999px
        }
        .bottom2 a{
            display:block;
            font-weight:900;
            color: rgba(255, 255, 255, 1);
            float:left;
            margin:-10px 0 0 107px 
        }
        .bottom3{
            font-weight:900;
            color: rgba(255, 255, 255, 1);
            float:left;
            margin:-10px 0 0 109px 
        }
        .bottom4 a{
            display:block;
            font-weight:900;
            color: rgba(255, 255, 255, 1);
            float:left;
            margin:-10px 0 0 132px 
        }
        .bottom5{
            font-weight:900;
            color: rgba(255, 255, 255, 1);
            float:left;
            margin:-10px 0 0 134px 
        }
        .bottom6 a{
            display:block;
            font-weight:900;
            color: rgba(255, 255, 255, 1);
            float:left;
            margin:-10px 0 0 122px 
        }
        .bottom7{
            font-weight:900;
            color: rgba(255, 255, 255, 1);
            float:left;
            margin:-10px 0 0 124px 
        }
        .bottom8 a{
            display:block;
            font-weight:900;
            color: rgba(255, 255, 255, 1);
            float:left;
            margin:-10px 0 0 122px 
        }

                                /* 약관 및 정책 */

        .foot{
            
            width: 1200px;
            height: 444px;
            margin:17px auto
            
        }
        .footer_logo{
            
            float:left
        }
        .footer_logo a{
            display:block;
            background:url(images/logo2_67.jpg) no-repeat;
            text-indent:-9999px;
            width: 247px;
            height: 109px;
            
        }
        .policy0{
            text-indent:-9999px
        }
        .policy{
            
            width: 850px;
            float:left;
            margin:-25px 0 0 52px 
        }
        .policy1{
            
            height: 20px;
            width: 850px;
        }
        .policy2 a{
            display:block;
            font-weight:900;
            
            float:left
        }
        .policy3{
            font-weight:900;
            color: rgba(221, 221, 224, 1);
            margin:0 0 0 17px;
            float:left
        }
        .policy4 a{
            display:block;
            font-weight:900;
            margin:0 0 0 16px;
            float:left
        }
        .policy5{
            font-weight:900;
            color: rgba(221, 221, 224, 1);
            margin:0 0 0 16px;
            float:left
        }
        .policy6 a{
            display:block;
            font-weight:900;
            margin:0 0 0 16px;
            float:left
        }
        .policy7{
            font-weight:900;
            color: rgba(221, 221, 224, 1);
            margin:0 0 0 16px;
            float:left
        }
        .policy8 a{
            display:block;
            font-weight:900;
            margin:0 0 0 16px;
            float:left
        }
        .policy9{
            font-weight:900;
            color: rgba(221, 221, 224, 1);
            margin:0 0 0 16px;
            float:left
        }
        .policy10 a{
            display:block;
            font-weight:900;
            margin:0 0 0 16px;
            float:left
        }
        .address1{
            text-indent:-9999px;
            font-size:36px
        }
        .address2{
            line-height:30px
        }
        .address3{
            font-weight:900;
            float:left
        }
        .copy{
            font-size:12px;
            font-weight:900
        }
        .footer_bar{
            color: rgba(221, 221, 224, 1);
        }
        .sel{color: #36AE58}
    </style> 
    <script type="text/javascript" src="jquery.js"></script>
    <script src="js/jquery-3.6.1.min.js"></script>    
    <script type="text/javascript">
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

$(".gnb7").mouseenter(function(){
    $(".gnb7>ul").stop().slideDown("fast");
});

$(".gnb7").mouseleave(function(){
    $(".gnb7>ul").stop().slideUp("fast");
});

});
   



    
    </script>
</head>
<body>
    <div class="wrap">
                                            <!-- header -->
        <header id="header" class="header">
            <h2 class="screen_out">사용자 메뉴</h2>
                <div class="top">
                    <ul class="top_menu">
                        <li class="top1"><a href="#">시흥시청</a></li>
                        <li class="top2"><a href="siheung.php">평생학습</a></li>
                        <li class="top3"><a href="#">분야별</a></li>
                        <li class="top4"><a href="#">일자리경제</a></li>
                        <li class="top5"><a href="#">통합예약</a></li>
                        <li class="top6"><a href="#">아동친화도시</a></li>        
                        <li class="top7"><a href="#">시흥시의회</a></li>
                        <li class="top8"><a href="#">자주찾는메뉴</a></li>                    
                        <li class="top9">|</li>
                        <li class="top10"><a href="#">Language</a></li>
                    </ul>
                </div>
                <h1 class="logo"><a href="#">시흥</a></h1>

                                        <!-- gnb -->

            <div class="nav_bg">
                <nav class="gnb">
                    <h2 class="blind">주요메뉴</h2>
                        <ul>
                            <li class="gnb1"><span class="a1"><a href="#">복지</a></span>
                                <ul class="bg1">
                                    <li>
                                        <ul class="small_gnb">
                                            <li><span class="gnb1_1"><a href="#">시흥등불SOS센터</a></span></li>
                                        </ul>
                                        <ul class="small_gnb2">
                                            <li><span class="gnb1_2"><a href="#">아동복지</a></span>
                                                <ul>
                                                    <li><a href="#">아동학대 및 보호</a></li>
                                                    <li><a href="#">영유아복지</a></li>
                                                    <li><a href="#">아동복지</a></li>
                                                    <li><a href="#">아동친화도시</a></li>
                                                    <li><a href="#">초등돌봄서비스</a></li>                                            
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb3">
                                            <li><span class="gnb1_3"><a href="#">여성/가정</a></span>
                                                <ul>
                                                    <li><a href="#">여성복지시설</a></li>
                                                    <li><a href="#">여성친화도시조성</a></li>
                                                    <li><a href="#">양성평등사업</a></li>
                                                    <li><a href="#">건강가정지원사업</a></li>
                                                    <li><a href="#">한부모가족지원사업</a></li>                                            
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb4">
                                            <li><span class="gnb1_4"><a href="#">어르신</a></span>
                                                <ul>
                                                    <li><a href="#">일반현황</a></li>
                                                    <li><a href="#">시설안내</a></li>
                                                    <li><a href="#">노인서비스</a></li>
                                                    <li><a href="#">경로식당</a></li>
                                                    <li><a href="#">공설묘지(정왕)</a></li>                                            
                                                </ul>                                        
                                            </li>
                                        </ul>
                                        <ul class="small_gnb5">
                                            <li><span class="gnb1_5"><a href="#">장애인</a></span>
                                                <ul>
                                                    <li><a href="#">장애인등록</a></li>
                                                    <li><a href="#">수당 및 연금</a></li>
                                                    <li><a href="#">각종지원내용</a></li>
                                                    <li><a href="#">장애인 일자리</a></li>
                                                    <li><a href="#">장애인종합복지관</a></li>                                            
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb6">
                                            <li><span class="gnb1_6"><a href="#">다문화가족</a></span>
                                                <ul>
                                                    <li><a href="#">다문화가족 시설현황</a></li>
                                                    <li><a href="#">다문화가족지원사업</a></li>
                                                    <li><a href="#">외국인주민지원사업안내</a></li>                                            
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb7">
                                            <li><span class="gnb1_7"><a href="#">Global Information</a></span>
                                                <ul>
                                                    <li><a href="#">中國語</a></li>
                                                    <li><a href="#">Tiếng Việt</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb8">
                                            <li><span class="gnb1_8"><a href="#">주거복지</a></span>
                                                <ul>
                                                    <li><a href="#">울터전</a></li>
                                                    <li><a href="#">주거지원사업</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb9">
                                            <li><span class="gnb1_9"><a href="#">자활고용지원</a></span>
                                                <ul>
                                                    <li><a href="#">자활사업안내</a></li>
                                                    <li><a href="#">가사 · 간병 방문지원사업</a></li>
                                                    <li><a href="#">전세점포지원</a></li>
                                                    <li><a href="#">희망저출/청년내일저축계좌</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb10">
                                            <li><span class="gnb1_10"><a href="#">사회복지</a></span>
                                                <ul>
                                                    <li><a href="#">국민기초생활보장</a></li>
                                                    <li><a href="#">위기가구지원</a></li>
                                                    <li><a href="#">사회복지시설현황</a></li>
                                                    <li><a href="#">지역사회서비스투자사업</a></li>
                                                    <li><a href="#">통합문화이용권<br>(문화누리카드)</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb11">
                                            <li><span class="gnb1_11"><a href="#">의료급여</a></span>
                                                <ul>
                                                    <li><a href="#">제도안내</a></li>
                                                    <li><a href="#">지원안내</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb12">
                                            <li><span class="gnb1_12"><a href="#">시흥시 자원봉사센터</a></span></li>
                                        </ul>
                                        <ul class="small_gnb13">
                                            <li><span class="gnb1_13"><a href="#">사회복지정보센터</a></span></li>
                                        </ul>
                                        <ul class="small_gnb14">
                                            <li><span class="gnb1_14"><a href="#">시흥지역사회보장협의체</a></span></li>
                                        </ul>                                        
                                    </li>
                                </ul>
                            </li>   
                            <li class="gnb2"><span class="a2"><a href="#">보건/위생</a></span>
                                <ul class="bg2">
                                    <li>
                                        <ul class="small_gnb15">
                                            <li><span class="gnb2_1"><a href="#">시흥시보건소</a></span>
                                                <ul>
                                                    <li><a href="#">인사말</a></li>
                                                    <li><a href="#">연혁 및 현황</a></li>
                                                    <li><a href="#">조직도</a></li>
                                                    <li><a href="#">찾아오시는길</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb16">
                                            <li><span class="gnb2_2"><a href="#">진료/민원안내</a></span>
                                                <ul>
                                                    <li><a href="#">진료안내</a></li>
                                                    <li><a href="#">민원안내</a></li>
                                                    <li><a href="#">인·허가안내</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb17">
                                            <li><span class="gnb2_3"><a href="#">보건사업 공지</a></span></li>
                                        </ul>
                                        <ul class="small_gnb18">
                                            <li><span class="gnb2_4"><a href="#">보건사업</a></span>
                                                <ul>
                                                    <li><a href="#">국가건강·암검진사업</a></li>
                                                    <li><a href="#">감염병예방사업</a></li>
                                                    <li><a href="#">출산관련사업</a></li>
                                                    <li><a href="#">모자보건사업</a></li>
                                                    <li><a href="#">건강증진사업</a></li>
                                                    <li><a href="#">예방접종사업</a></li>
                                                    <li><a href="#">의료비지원사업</a></li>
                                                    <li><a href="#">건강관리사업</a></li>
                                                    <li><a href="#">치매안심센터 운영</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb19">
                                            <li><span class="gnb2_5"><a href="#">건강도시</a></span>
                                                <ul>
                                                    <li><a href="#">건강도시 시흥</a></li>
                                                    <li><a href="#">건강도시 소통의장</a></li>
                                                    <li><a href="#">건강도시 갤러리/영상</a></li>
                                                    <li><a href="#">건강도시 e-뉴스레터</a></li>
                                                    <li><a href="#">심폐소생술&자동심장충격기</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb20">
                                            <li><span class="gnb2_6"><a href="#">건강한 놀이문화</a></span>
                                                <ul>
                                                    <li><a href="#">숨쉬는놀이터</a></li>
                                                    <li><a href="#">플레이스타트 시흥</a></li>
                                                    <li><a href="#">팝업놀이터</a></li>
                                                    <li><a href="#">플레이꾸러미</a></li>
                                                    <li><a href="#">플레이스타터</a></li>
                                                    <li><a href="#">플레이스타트 갤러리/영상</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb21">
                                            <li><span class="gnb2_7"><a href="#">행복건강센터</a></span>
                                                <ul>
                                                    <li><a href="#">행복건강센터현황</a></li>
                                                    <li><a href="#">특화사업</a></li>
                                                    <li><a href="#">행복건강센터 기능</a></li>
                                                    <li><a href="#">소생활권맞춤형건강증진시범사업</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb22">
                                            <li><span class="gnb2_8"><a href="#">중부건강생활지원센터</a></span>
                                                <ul>
                                                    <li><a href="#">센터소개 및 위치안내</a></li>
                                                    <li><a href="#">재활보건사업</a></li>
                                                    <li><a href="#">지역내소지역건강격차해소시범사업</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb23">
                                            <li><span class="gnb2_9"><a href="#">지역의료정보</a></span>
                                                <ul>
                                                    <li><a href="#">의료기관</a></li>
                                                    <li><a href="#">의약품판매업소</a></li>
                                                    <li><a href="#">기타</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb24">
                                            <li><span class="gnb2_10"><a href="#">집콕건강레시피</a></span>
                                                <ul>
                                                    <li><a href="#">소개영상</a></li>
                                                    <li><a href="#">집콕마음백신</a></li>
                                                    <li><a href="#">집콕건강백신</a></li>
                                                    <li><a href="#">집콕COOKING</a></li>
                                                    <li><a href="#">집콕플레이</a></li>
                                                    <li><a href="#">집콕챌린지</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb25">
                                            <li><span class="gnb2_11"><a href="#">의·약업소 자율점검</a></span></li>
                                        </ul>
                                        <ul class="small_gnb26">
                                            <li><span class="gnb2_12"><a href="#">우수 위생 업소</a></span>
                                                <ul>
                                                    <li><a href="#">음식점 위생등급 지정현황</a></li>
                                                    <li><a href="#">코로나19안심식당</a></li>
                                                    <li><a href="#">어린이기호식품우수판매업소</a></li> 
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="gnb3"><span class="a3"><a href="#">재난안전</a></span>
                                <ul class="bg3">
                                    <li>
                                        <ul class="small_gnb27">
                                            <li><span class="gnb3_1"><a href="#">재난안전</a></span>
                                                <ul>
                                                    <li><a href="#">국제안전도시</a></li>
                                                    <li><a href="#">시흥시시민안전보험</a></li>
                                                    <li><a href="#">자율안전점검</a></li>
                                                    <li><a href="#">어린이놀이시설점검</a></li>
                                                    <li><a href="#">안전신문고</a></li>
                                                    <li><a href="#">반려동물을위한재난대처법</a></li>
                                                    <li><a href="#">강수량</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb28">
                                            <li><span class="gnb3_2"><a href="#">중대재해처벌법</a></span>
                                                <ul>
                                                    <li><a href="#">중대재해처벌법이란?</a></li>
                                                    <li><a href="#">중대재해처벌법바로알기</a></li>
                                                    <li><a href="#">자료게시판</a></li>
                                                </ul>
                                            </li>
                                        </ul>    
                                        <ul class="small_gnb29">
                                            <li><span class="gnb3_3"><a href="#">민방위</a></span>
                                                <ul>
                                                    <li><a href="#">개요</a></li>
                                                    <li><a href="#">교육일정</a></li>
                                                    <li><a href="#">훈련정보</a></li>
                                                    <li><a href="#">담당부서(동)연락처</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb30">
                                            <li><span class="gnb3_4"><a href="#">어린이 안전체험관</a></span>
                                                <ul>
                                                    <li><a href="#">체험관 소개</a></li>
                                                    <li><a href="#">시설·이용안내</a></li>
                                                    <li><a href="#">예약하기</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb31">
                                            <li><span class="gnb3_5"><a href="#">재난&소통알리미</a></span></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="gnb4"><span class="a4"><a href="#">지능형도시/교통</a></span>
                                <ul class="bg4">
                                    <li>
                                        <ul class="small_gnb32">
                                            <li><span class="gnb4_1"><a href="#">스마트도시</a></span>
                                                <ul>
                                                    <li><a href="#">스마트도시란</a></li>
                                                    <li><a href="#">스마트도시 시흥(2020-2024)</a></li>
                                                    <li><a href="#">스마트도시 사업</a></li>
                                                    <li><a href="#">스마트도시 시흥 리빙랩</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb33">
                                            <li><span class="gnb4_2"><a href="#">도시계획</a></span>
                                                <ul>
                                                    <li><a href="#">2020시흥도시기본계획</a></li>
                                                    <li><a href="#">지구단위계획</a></li>
                                                    <li><a href="#">시흥시 경관계획</a></li>
                                                    <li><a href="#">개발행위허가</a></li>
                                                    <li><a href="#">개발제한구역불법행위단속</a></li>
                                                    <li><a href="#">도시행정자료실</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb34">
                                            <li><span class="gnb4_3"><a href="#">도시재생</a></span>
                                                <ul>
                                                    <li><a href="#">주시주거환경정비기본계획</a></li>
                                                    <li><a href="#">주택정비사업</a></li>
                                                    <li><a href="#">주거·도시환경사업</a></li>
                                                    <li><a href="#">도시재생전략계획</a></li>                                                
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb35">
                                            <li><span class="gnb4_4"><a href="#">도시개발</a></span>
                                                <ul>
                                                    <li><a href="#">택지개발(미래도시)</a></li>
                                                    <li><a href="#">택지개발(배곧)</a></li>
                                                    <li><a href="#">광명시흥공공주택지구</a></li>
                                                    <li><a href="#">산업단지개발</a></li>
                                                    <li><a href="#">월동지구, 월곶역세권 등</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb36">
                                            <li><span class="gnb4_5"><a href="#">희망마을만들기</a></span></li>
                                        </ul>
                                        <ul class="small_gnb37">
                                            <li><span class="gnb4_6"><a href="#">교통안내</a></span>
                                                <ul>
                                                    <li><a href="#">경기도버스정보시스템</a></li>
                                                    <li><a href="#">버스공영차고지</a></li>
                                                    <li><a href="#">대중교통 및 콜택시</a></li>
                                                    <li><a href="#">주차시설현황</a></li>
                                                    <li><a href="#">교통소식</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb38">
                                            <li><span class="gnb4_7"><a href="#">시흥전철사업</a></span>
                                                <ul>
                                                    <li><a href="#">신안산선 복선전철</a></li>
                                                    <li><a href="#">소사-원시선</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb39">
                                            <li><span class="gnb4_8"><a href="#">자전거활성화사업</a></span>
                                                <ul>
                                                    <li><a href="#">시흥시민 자전거보험</a></li>
                                                    <li><a href="#">자전거대여소</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb40">
                                            <li><span class="gnb4_9"><a href="#">주정차단속정보조회</a></span></li>
                                        </ul>
                                        <ul class="small_gnb41">
                                            <li><span class="gnb4_10"><a href="#">시흥시 건축문화상</a></span>
                                                <ul>
                                                    <li><a href="#">연도별수상작</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>        
                                </ul>                                 
                            </li>
                            <li class="gnb5"><span class="a5"><a href="#">교육/체육</a></span>
                                <ul class="bg5">
                                    <li>
                                        <ul class="small_gnb42">
                                            <li><span class="gnb5_1"><a href="#">시흥시 평생교육원</a></span></li>
                                        </ul>    
                                        <ul class="small_gnb43">
                                            <li><span class="gnb5_2"><a href="#">시흥배움터조성</a></span>
                                                <ul>
                                                    <li><a href="#">시흥혁신교육지구시즌3 교육사업</a></li>
                                                    <li><a href="#">서울대 교육협력</a></li>
                                                    <li><a href="#">학교급식지원</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb44">
                                            <li><span class="gnb5_3"><a href="#">교육지원사업</a></span>
                                                <ul>
                                                    <li><a href="#">교육경비지원사업</a></li>
                                                    <li><a href="#">적성검사 및 진로지도</a></li>
                                                    <li><a href="#">청소년 진로·심리 상담</a></li>
                                                    <li><a href="#">오이도꿈나무안심학교</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb45">
                                            <li><span class="gnb5_4"><a href="#">청소년성장지원</a></span>
                                                <ul>
                                                    <li><a href="#">청소년시설현황</a></li>
                                                    <li><a href="#">청소년주관행사</a></li>
                                                    <li><a href="#">청소년방과후아카데미</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb46">
                                            <li><span class="gnb5_5"><a href="#">국제교류</a></span>
                                                <ul>
                                                    <li><a href="#">청소년 국제교류</a></li>
                                                    <li><a href="#">교류도시</a></li>                                                    
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb47">
                                            <li><span class="gnb5_6"><a href="#">체육</a></span>
                                                <ul>
                                                    <li><a href="#">주요체육시설</a></li>
                                                    <li><a href="#">체육시설확충</a></li>
                                                    <li><a href="#">직장운동경기부</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb48">
                                            <li><span class="gnb5_7"><a href="#">시흥청년백서</a></span></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="gnb6"><span class="a6"><a href="#">환경/농어업</a></span>
                                <ul class="bg6">
                                    <li>
                                        <ul class="small_gnb49">
                                            <li><span class="gnb6_1"><a href="#">환경정책사업</a></span>
                                                <ul>
                                                    <li><a href="#">EM사업</a></li>
                                                    <li><a href="#">민간환경감시원</a></li>
                                                    <li><a href="#">환경오염신고 포상제</a></li>
                                                    <li><a href="#">자동차 관련</a></li> 
                                                    <li><a href="#">실내공기질 관리</a></li>
                                                    <li><a href="#">친환경콘덴싱보일러 지원사업</a></li>
                                                    <li><a href="#">도시생태현황지도</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb50">
                                            <li><span class="gnb6_2"><a href="#">환경소식</a></span>
                                                <ul>
                                                    <li><a href="#">환경소식</a></li>
                                                    <li><a href="#">화학안전관리</a></li>                                                   
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb51">
                                            <li><span class="gnb6_3"><a href="#">생활폐기물</a></span>
                                                <ul>
                                                    <li><a href="#">생활폐기물배출요령</a></li>
                                                    <li><a href="#">종량제봉투판매가격</a><li>
                                                    <li><a href="#">1회용품사용규제</a></li>
                                                    <li><a href="#">폐기물불법행위신고포상금신청</a><li>
                                                    <li><a href="#">폐기물불법소각금지</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb52">
                                            <li><span class="gnb6_4"><a href="#">맑은물사업소</a></span>
                                                <ul>
                                                    <li><a href="#">맑은물사업소소개</a></li>
                                                    <li><a href="#">상하수도요금사이버창구</a></li>                                                   
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb53">
                                            <li><span class="gnb6_5"><a href="#">하수</a></span>
                                                <ul>
                                                    <li><a href="#">하수도</a></li>
                                                    <li><a href="#">공공하수처리시설현황</a></li>                                                   
                                                    <li><a href="#">분뇨수집업체현황</a></li>
                                                    <li><a href="#">수질검사결과</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb54">
                                            <li><span class="gnb6_6"><a href="#">농업</a></span>
                                                <ul>
                                                    <li><a href="#">농업정보</a></li>
                                                    <li><a href="#">농업지원사업</a></li>                                                   
                                                    <li><a href="#">친환경농업</a></li>
                                                    <li><a href="#">농지관리</a></li>
                                                    <li><a href="#">농업기술센터</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb55">
                                            <li><span class="gnb6_7"><a href="#">동물보호 및 방역</a></span>
                                                <ul>
                                                    <li><a href="#">동물등록</a></li>
                                                    <li><a href="#">구제역</a></li>                                                   
                                                    <li><a href="#">광견병</a></li>
                                                    <li><a href="#">유기분실동물찾기</a></li>
                                                    <li><a href="#">동물누리보호센터</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb56">
                                            <li><span class="gnb6_8"><a href="#">공원녹지</a></span>
                                                <ul>
                                                    <li><a href="#">공원현황</a></li>
                                                    <li><a href="#">산림교육</a></li>                                                   
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb57">
                                            <li><span class="gnb6_9"><a href="#">대형폐기물</a></span></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="gnb7"><span class="a7"><a href="#">문화/관광</a></span>
                                <ul class="bg7">
                                    <li>
                                        <ul class="small_gnb58">
                                            <li><span class="gnb7_1"><a href="#">문화예술</a></span>
                                                <ul>
                                                    <li><a href="#">생태문화도시</a></li>
                                                    <li><a href="#">문화특화사업</a></li>                                                    
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb59">
                                            <li><span class="gnb7_2"><a href="#">볼거리</a></span>
                                                <ul>
                                                    <li><a href="#">자연</a></li>
                                                    <li><a href="#">역사</a></li>
                                                    <li><a href="#">시흥구경</a></li>
                                                    <li><a href="#">K-골든코스트</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb60">
                                            <li><span class="gnb7_3"><a href="#">즐길거리</a></span>
                                                <ul>
                                                    <li><a href="#">체험</a></li>
                                                    <li><a href="#">축제</a></li>
                                                    <li><a href="#">숙박</a></li>                                                    
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb61">
                                            <li><span class="gnb7_4"><a href="#">먹거리</a></span>
                                                <ul>
                                                    <li><a href="#">전통시장</a></li>
                                                    <li><a href="#">시흥특산물</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="small_gnb62">
                                            <li><span class="gnb7_5"><a href="#">문화관광</a></span>
                                                <ul>
                                                    <li><a href="#">관광안내책자 신청</a></li>
                                                    <li><a href="#">문화관광해설사예약</a></li>
                                                    <li><a href="#">문화/관광/체육</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                </nav>
            </div>                              
        </header>
                                        <!-- main -->

        <main id="content">
            <form name="search2" id="search2" action="search" method="post" onsubmit="return form_check()" onbutton="return form_check()">
                <fieldset>
                    <div class="search">
                    <legend>검색</legend>
                        <select name="total_search" id="total_search">
                            <option>통합검색</option>
                            <option>웹페이지검색</option>
                            <option>게시판검색</option>
                            <option>콘텐츠검색</option>
                            <option>파일검색</option>
                            <option>직원검색</option>
                        </select>
                    
                        <input type="text" class="search3" placeholder="검색어를 입력하세요.">
                        <button class="search_button" type="submit">검색

                            

                        </button>
                    </div>
                    
                </fieldset>
            </form>
                <div class="welfare">
                    <h2>복지 메뉴</h2>
                    <ul>
                        <li class="welfare2">
                            <a href="#">                            
                                <span class="welfare2_1">아동복지</span>
                            </a>
                        </li>
                        <li class="welfare3">
                            <a href="#">
                                <span class="welfare3_1">여성복지</span>                        
                            </a>
                        </li>
                        <li class="welfare4">
                            <a href="#">
                                <span class="welfare4_1">장애인복지</span>
                            </a>
                        </li>
                        <li class="welfare5">
                            <a href="#">
                                <span class="welfare5_1">어르신복지</span>
                            </a>
                        </li>
                        <li class="welfare6">
                            <a href="#">
                                <span class="welfare6_1">다문화가정</span>
                            </a>
                        </li>
                        <li class="child_welfare">
                            <span class="child_welfare2">아이들이 살기 좋은<br> 도시를 만들어 가겠습니다.</span>
                            <span class="child_welfare3">자세히보기 →</span>
                        </li>
                    </ul>
                </div>                
                <div class="direct_menu">
                    <ul class="direct_menu2">
                        <li>
                            <ul>
                                <li class="di"><a href="#"></a></li>
                                <span class="dir">버스시간표</span>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="di2"><a href="#"></a></li>
                                <span class="dir2">주차<br>시설현황</span>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="di3"><a href="#"></a></li>
                                <span class="dir3">불법주정차<br>사전알람신청</span>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="di4"><a href="#"></a></li>
                                <span class="dir4">자전거대여소<br>현황</span>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="di5"><a href="#"></a></li>
                                <span class="dir5">생활폐기물<br>배출요령</span>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="di6"><a href="#"></a></li>
                                <span class="dir6">대형폐기물<br>배출신청</span>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="di7"><a href="#"></a></li>
                                <span class="dir7">반려동물<br>등록</span>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="di8"><a href="#"></a></li>
                                <span class="dir8">시흥시<br>공원현황</span>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="di9"><a href="#"></a></li>
                                <span class="dir9">안전신문고</span>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="di10"><a href="#"></a></li>
                                <span class="dir10">지진대피소<br>현황</span>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="di11"><a href="#"></a></li>
                                <span class="dir11">비상대피시설<br>현황</span>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="di12"><a href="#"></a></li>
                                <span class="dir12">비상급수시설<br>현황</span>
                            </ul>
                        </li>
                    </ul>
                </div>                    
                <div class="news">
                    <h2 class="sosik">시흥소식</h2>                        
                        <ul>
                            <li class="godang"></li>
                            <li class="godang2"></li>                     
                        </ul>
                        <ul>
                            <li class="bear"></li>
                            <li class="bear2"></li>
                        </ul>
                </div>
                <div class="information">                    
                    <h2 class="notice">분야별 공지사항</h2>
                    <div class="notice2">                        
                        <ul>
                            <li><span class="notice3"><a href="#">보건</a></span>
                                <ul class="notice4">
                                    <li> · 2022년 노인학대 취업제한 점검 · 확인 관련 자료 제출<span>보건정책과</span><span>2022-10-26</span></li>
                                    <li> · 정왕 4동 찾아가는 치매조기검진 운영<span>정왕보건지소</span><span>2022-10-18</span></li>
                                    <li> · 모자보건프로그램 수강생 모집(정왕보건지소)<span>정왕보건지소</span><span>2022-09-27</span></li>
                                    <li> · 2022년도 의료기관 긴급복지 신고의무자 교육 안내<span>보건정책과</span><span>2022-09-23</span></li>
                                    <li> · 2022년도 의료기관 아동학대 신고의무자 교육 안내<span>보건정책과</span><span>2022-09-23</span></li>
                                    <li> · 코로나19 격리대상자의 시험목적 외출 허용 안내사항<span>감염병관리과</span><span>2022-07-14</span></li>
                                    <li> · 2022년도 심폐소생술교육 신청 안내(개인)<span>건강도시과</span><span>2022-07-13</span></li>
                                </ul>
                            </li>
                        </ul>                         
                        <ul>
                            <li><span class="notice5"><a href="#">도시행정</a></span>
                                <ul class="notice6">
                                    <li> · 김장철 음식물쓰레기 적정 배출 요령 안내<span>자원순환과</span><span>2022-11-02</span></li>
                                    <li> · 2022년 10월말 기준 시흥시 친환경차량 보조금 지원 현황<span>환경정책과</span><span>2022-11-01</span></li>
                                    <li> · 2022년 9월말 기준 시흥시 친환경차량 보조금 지원 현황<span>환경정책과</span><span>2022-10-04</span></li>
                                    <li> · 2022년 8월말 기준 시흥시 친환경차량 보조금 지원 현황<span>환경정책과</span><span>2022-09-02</span></li>
                                    <li> · 폐기물 무단투기 신고포상금 제도 안내<span>자원순환과</span><span>2022-08-30</span></li>                                    
                                </ul>
                            </li>
                        </ul>
                        <ul>
                            <li><span class="notice7"><a href="#">환경</a></span>
                                <ul class="notice8">
                                    <li> · 김장철 음식물쓰레기 적정 배출 요령 안내<span>2022-11-08</span></li>
                                    <li> · 2022년 시흥시 도시건축공동위원회 위원명단<span>2022-11-08</span></li>
                                    <li> · 2022년 상반기 시흥장현 공공주택지구 입주지원협의회 서면개…<span>2022-07-04</span></li>
                                    <li> · 2021년 시흥시 도시건축공동위원회 위원 명단<span>2022-04-18</span></li>
                                    <li> · 2021년 시흥시 도시계획위원회 위원 명단<span>2022-09-23</span></li>                                    
                                </ul>
                            </li>
                        </ul>
                        <ul>
                            <li><span class="notice9"><a href="#">농업</a></span>
                                <ul class="notice10">
                                    <li> · 청년창업농육성장학생 추가모집 안내<span>농업정책과</span><span>2020-03-15</span></li>
                                    <li> · 2020년 저탄소 농축산물 인증제 설명회 개최 안내<span>농업기술센터</span><span>2020-02-05</span></li>
                                    <li> · 2021년도 농림축산식품사업 신청공고<span>농업기술센터</span><span>2020-02-05</span></li>
                                    <li> · 2020년 농기계 구입 지원사업 신청 접수 안내<span>농업정책과</span><span>2020-01-31</span></li>
                                    <li> · 2020년 환경친화형농자재 지원사업 신청 및 추진 알림<span>농업기술센터</span><span>2020-01-17</span></li>                                    
                                </ul>
                            </li>                            
                        </ul>
                        <ul>
                            <li class="more"><button type="button">+</button></li>
                        </ul>
                    </div>                                                        
                    <div>
                        <h2 class="hospital">보건정보</h2>
                        <div class="hospital2">
                            <div class="hospital3">
                                <ul>
                                    <li class="hospital4">
                                        <a href="#">
                                        <span class="hospital4_1">보건소</span>오시는길<span class="hospital4_1">&nbsp&rharu;</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="hospital5">
                                <ul>
                                    <li class="hospital6">
                                        <a href="#">
                                        <span class="hospital6_1">진료</span>안내<span class="hospital6_1">&nbsp&rharu;</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="hospital7">
                                <ul>
                                    <li class="hospital8">
                                        <a href="#">
                                        <span class="hospital8_1">보건</span>민원<span class="hospital8_1">&nbsp&rharu;</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="hospital9">
                                <ul>
                                    <li class="hospital10">
                                        <a href="#">
                                        <span class="hospital10_1">보건</span>사업안내<span class="hospital10_1">&nbsp&rharu;</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="hospital11">
                                <ul>
                                    <li class="hospital12">
                                        <a href="#">
                                        <span class="hospital12_1">건강도시</span>시흥<span class="hospital12_1">&nbsp&rharu;</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="hospital13">
                                <ul>
                                    <li class="hospital14">
                                        <a href="#">
                                        <span class="hospital14_1">숨쉬는 놀이터</span><span class="hospital14_2">예약하기</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour">
                    <h2 class="tour_title">시흥관광정보</h2>
                    <div class="tour2">
                        <div>
                            <ul>
                                <li class="tour3">
                                    <a href="#"></a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <ul class="tour4">
                                <li class="tour5">
                                    <a href="#">시흥명소관광</a>
                                </li>
                                <li class="tour6">
                                    <a href="#">맑은물 상상누리 안내</a>
                                </li>
                                <li class="tour7">
                                    <a href="#">관광책자 신청</a>
                                </li>
                            </ul>
                        </div>
                    </div>                    
                </div>
                <div>
                    <p class="park"></p>
                </div>
                <div class="bar">선</div>
    
    <div class="news">
        <!-- <div class="playbutton">
            <a class="news2">left</a>
            <a class="news3">right</a>            
        </div> -->
        <h2 class="news1">주요소식더보기</h2>          
        <div id="frame_div">            
            <div id="inner_div">                            
                <div class="block_div">시흥시 지역사회보장협의체</div>
                <div class="block_div2">|</div>
                <div class="block_div">시화호지속가능파트너십</div>
                <div class="block_div2">|</div>
                <div class="block_div">대통령 직속 일자리위원회</div>
                <div class="block_div2">|</div>
                <div class="block_div">(사)시흥시기업인협회</div>
                <div class="block_div2">|</div>
                <div class="block_div">신용회복위원회</div>
                <div class="block_div2">|</div>
                <div class="block_div">법령-조례 원클릭 서비스</div>
                <div class="block_div2">|</div>
                <div class="block_div">시흥시사회복지정보센터</div>
                <div class="block_div2">|</div>
                <div class="block_div">학생안전지도 아이실드</div>
                <div class="block_div2">|</div>
                <div class="block_div">한국전지안전공사</div>
                <div class="block_div2">|</div>
                <div class="block_div">생활안전지도</div>
                <div class="block_div2">|</div>
                <div class="block_div">국가균형발전위원회</div>
                <div class="block_div2">|</div>
                <div class="block_div">소비자24</div>
                <div class="block_div2">|</div>
                <div class="block_div">시흥시 사회적경제지원센터</div>
                <div class="block_div2">|</div>
                <div class="block_div">자동차민원 대국민포털</div>
                <div class="block_div2">|</div>
                <div class="block_div">성범죄자알림이</div>
                <div class="block_div2">|</div>
                <div class="block_div">시흥시 학교급식지원센터</div>
                <div class="block_div2">|</div>
                <div class="block_div">전국 실시간 대기오염정보</div>
                <div class="block_div2">|</div>
                <div class="block_div">시흥시 장애인가족지원센터</div>
                <div class="block_div2">|</div>
                <div class="block_div">원산지표시 위반정보 공표</div>
                <div class="block_div2">|</div>
                <div class="block_div">경기도 평생학습e배움터</div>
                <div class="block_div2">|</div>
                <div class="block_div">시흥시자원봉사센터</div>
                <div class="block_div2">|</div>
                <div class="block_div">내고장알리미</div>
                <div class="block_div2">|</div>
                <div class="block_div">전기차 충전소</div>
                <div class="block_div2">|</div>
                <div class="block_div">시흥시 1%복지재단 나눔활동</div>
                <div class="block_div2">|</div>
                <div class="block_div">에너지절약포털</div>
                <div class="block_div2">|</div>
                <div class="block_div">한국장학재단(정부학자금대출)</div>
                <div class="block_div2">|</div>
                <div class="block_div">110화상수화 통역</div>
                <div class="block_div2">|</div>
                <div class="block_div">지방공기업경영정보시스템</div>
                <div class="block_div2">|</div>                                                 
            </div>             
        </div>
        <div class="playbutton">            
            <button id="left" onclick="right_func();">&#10094</button>
            <button id="right" onclick="left_func();">&#10095</button>
        </div>
    </div>
</main>                                        
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