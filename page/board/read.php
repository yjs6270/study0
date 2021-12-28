<?php
	include $_SERVER['DOCUMENT_ROOT']."/db.php"; /* db load */
?>
<!doctype html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
<link rel="stylesheet" type="text/css" href="/css/style.css?aftwr" />
</head>
<body>
	<div id="board_write">
        <h1><a href="/">게시판</a></h1>
	<?php
		$bno = $_GET['idx']; /* bno함수에 idx값을 받아와 넣음*/
		$hit = mysqli_fetch_array(mq("select * from board where idx ='".$bno."'"));
		$hit = $hit['hit'] + 1;
		$fet = mq("update board set hit = '".$hit."' where idx = '".$bno."'");
		$sql = mq("select * from board where idx='".$bno."'"); /* 받아온 idx값을 선택 */
		$board = $sql->fetch_array();
	?>
<!-- 글 불러오기 -->
<div id="board_read">
	<h2><?php echo $board['title']; ?></h2>
		<div id="user_info">
			<?php echo $board['name']; ?> <?php echo $board['date']; ?> 조회:<?php echo $board['hit']; ?>
				<div id="bo_line"></div>
			</div>
			<div id="bo_content">
				<?php echo nl2br("$board[content]"); ?>
			</div>
	<!-- 수정, 삭제 -->
	<div id="bo_ser">
		<ul>
			<li><a href="modify.php?idx=<?php echo $board['idx']; ?>">[수정]</a></li>
			<li><a href="delete.php?idx=<?php echo $board['idx']; ?>">[삭제]</a></li>
		</ul>
	</div>
</div>
<!--- 댓글 불러오기 -->
<div class="reply_view">
	<div class="wi_line"></div>
	<div style="margin-top:10px;">
	<h3>댓글</h3>
		<?php
			$sql3 = mq("select * from reply where con_num='".$bno."' order by depth,re_idx");
			while($reply = $sql3->fetch_array()){ 
		?>
		<div class="dap_lo">
			<div><b><?php echo $reply['name'];?></b></div>
			<div class="dap_to comt_edit"><?php echo $reply['content']; ?></div>
			<div class="rep_me dap_to"><?php echo $reply['date']; ?></div>
			<div class="rep_me rep_menu">
				<a class="dat_dat_bt" href="/page/board/rereply.php?idx=<?php echo $bno; ?>&re_idx=<?php echo $reply['re_idx']?>">댓글</a>
				<a class="dat_delete_bt" href="#">삭제</a>
			</div>
		</div>
	<?php } ?>
<!-- 댓글 입력 폼 -->
<div class= "dap_ins">
	<form action="reply_ok.php?idx=<?php echo $bno; ?>" method="post">
		<div class="wi_line"></div>
		<div style="margin-top:10px;">
			<input type="text" name="dat_user" id="dat_user" class="dat_user" size="15" placeholder="아이디"/>
			<input type="password" name="dat_pw" id="dat_pw" class="dat_pw" size="15" placeholder="비밀번호"/>
		<div style="margin-top:10px;">
			<textarea name="content" class="reply_content" id="re_content" placeholder="내용"></textarea>
			<button id="rep_bt" class="re_bt">등록</button>
		</div>
	</form>
</div>
</body>
</html>