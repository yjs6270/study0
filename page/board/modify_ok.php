<?php
include $_SERVER['DOCUMENT_ROOT']."/db.php";

$bno = $_POST['idx'];
$sql = mq("update board set name='".$_POST['name']."',pw='".$_POST['pw']."',title='".$_POST['title']."',content='".$_POST['content']."' where idx='".$bno."'"); ?>
?>

echo "<script>
    alert('수정되었습니다.');
    location.href='/';</script>";