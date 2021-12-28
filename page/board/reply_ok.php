<?php
    include $_SERVER['DOCUMENT_ROOT']."/db.php";

    $bno = $_GET['idx'];
    $userpw = $_POST['dat_pw'];
    
    if($bno && $_POST['dat_user'] && $userpw && $_POST['content']){
        $sql = mq("insert into reply(con_num,name,pw,content) values('".$bno."','".$_POST['dat_user']."','".$userpw."','".$_POST['content']."')");
       
        $sql2 = mq("select re_idx from reply order by re_idx desc limit 1;");
        $reply2 = $sql2->fetch_array();
        echo $reply2['re_idx'];

        $sql3 = mq("update reply set depth='".$reply2['re_idx']."' where re_idx='".$reply2['re_idx']."'");

    
        echo "<script>
        alert('댓글이 작성되었습니다.');
        location.href='/page/board/read.php?idx=$bno';</script>";
    }else{
        echo "<script>
        alert('댓글 작성에 실패했습니다.');
        history.back();</script>";
    }