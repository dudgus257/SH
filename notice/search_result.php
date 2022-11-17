<?php
include "../inc/session.php";

// DB 연결
include "../inc/dbcon.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>notice</title>
</head>
<body>
    <div id="notice_area">

    <?php
        //검색 변수
    $catagory = $_GET['catgo'];
    $search_con = $_GET['search'];

    ?>
    <h1><?php echo $catagory; ?>에서 '<?php echo $search_con; ?>'검색결과</h1>
    
        <table class="notice_list_set">
            <tr class="notice_list_title">
                <th class="no">no</th>
                <th class="n_title">title</th>
                <th class="writer">writer</th>
                <th class="w_date">date</th>
                <th class="cnt">count</th>
            </tr>

            <?php
                $sql2 = mq("select * from notice where $catagory like '%$search_con%' order by idx desc");
                while($notice = $sql2->fetch_array()){

                $title=$notice["title"];
                    if(strlen($title)>30)
                        {
                            $title=str_replace($notice["title"], mb_substr($notice["title"],0,30,"utf-8")."...",$notice["title"]);
                        }
                $sql3 = mq("select * from reply where con_num='".$notice['idx']."'");
                $rep_count = mysqli_num_rows($sql3);

                ?>
                <tbody>
            <tr>
                <td width="70"><?php echo $notice['idx']; ?></td>
                <td width="500">
                    <?php 
                        $lockimg = "<img src='/img/lock.png' alt='lock' title='lock' with='20' height='20' />";
                        if($notice['lock_post']=="1")
                        { ?><a href='/page/board/ck_read.php?idx=<?php echo $notice["idx"];?>'><?php echo $title, $lockimg;
                        }else{?>
                    <?php
                        $noticetime = $notice['date']; //$boardtime변수에 board['date']값을 넣음
                        $timenow = date("Y-m-d"); //$timenow변수에 현재 시간 Y-M-D를 넣음
                        
                        if($noticetime==$timenow){
                        $img = "<img src='/img/new.png' alt='new' title='new' />";
                        }else{
                        $img ="";
                        }
                    ?>
                        <a href='/page/board/read.php?idx=<?php echo $board["idx"]; ?>'>
                        <span style="background:yellow;"><?php echo $title; }?></span>
                        <span class="re_ct">[<?php echo $rep_count;?>]<?php echo $img; ?></span>
                        </a>
                </td>
          <td width="120"><?php echo $notice['writer']?></td>
          <td width="100"><?php echo $notice['date']?></td>
          <td width="100"><?php echo $notice['cnt']; ?></td>

        </tr>
      </tbody>
      <?php } ?>  

            </table>




            <?php
                // paging : 해당 페이지의 글 시작 번호 = (현재 페이지 번호 - 1) * 페이지 당 보여질 목록 수
                $start = ($page - 1) * $list_num;

                // paging : 시작번호부터 페이지 당 보여질 목록수 만큼 데이터 구하는 쿼리 작성
                // limit 몇번부터, 몇 개
                $sql = "select * from notice order by idx desc limit $start, $list_num;";
                // echo $sql;
                /* exit; */

                // DB에 데이터 전송
                $result = mysqli_query($dbcon, $sql);

                // DB에서 데이터 가져오기
                // pager : 글번호(역순)
                // 전체데이터 - ((현재 페이지 번호 -1) * 페이지 당 목록 수)
                $i = $total - (($page - 1) * $list_num);
                while($array = mysqli_fetch_array($result)){
            ?>
            <tr class="notice_list_content">
                <td><?php echo $i; ?></td>
                <td class="notice_content_title">
                    <a href="view.php?n_idx=<?php echo $array["idx"]; ?>">
                    <?php echo $array["n_title"]; ?>
                    </a>
                </td>
                <td><?php echo $array["writer"]; ?></td>
                <?php $w_date = substr($array["w_date"], 0, 10); ?>
                <td><?php echo $w_date; ?></td>
                <td><?php echo $array["cnt"]; ?></td>
            </tr>
            <?php
                    $i--;
                }; 
            ?>
        </table>





    </div>    



</body>
</html>