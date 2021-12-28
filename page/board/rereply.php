<?php
	include $_SERVER['DOCUMENT_ROOT']."/db.php"; /* db load */
?>
<!doctype html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
<link rel="stylesheet" type="text/css" href="/css/style.css?aftder" />
</head>
<body>
<div class= "dap_ins">
    <form action="rereply_ok.php?idx=<?php echo $_GET['idx']; ?>&re_idx=<?php echo $_GET['re_idx'];?>" method="post">
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