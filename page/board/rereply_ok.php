<?php
    include $_SERVER['DOCUMENT_ROOT']."/db.php";

    $bno = $_GET['idx'];
    $userpw = $_POST['dat_pw'];
    $bwo = $_GET['re_idx'];
 
    if($_POST['dat_user'] && $userpw && $_POST['content']){
        
        $sql = mq("insert into reply(con_num,name,pw,content,depth) values('".$bno."','".$_POST['dat_user']."','".$userpw."','".$_POST['content']."','".$bwo."')");
        
        echo "<script>
        alert('댓글이 작성되었습니다.');
        location.href='/page/board/read.php?idx=$bno';</script>";
    }else{
        echo "<script>
        alert('댓글 작성에 실패했습니다.');
        history.back();</script>";
    }