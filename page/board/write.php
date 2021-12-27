<!doctype html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
<link rel="stylesheet" type="text/css" href="/css/style.css?after" />
</head>
<body>
    <div id="board_write">
        <h1><a href="/">게시판</a></h1>
            <div id="write_area">
                <form action="write_ok.php" method="post">
                    <div id="in_title">
                        <textarea name="title" rows="1" cols="55" placeholder="제목" maxlength="100" required></textarea>
                    </div>
                    <div class="wi_line"></div>
                    <div id="in_name">
                        <textarea name="name" rows="1" cols="55" placeholder="글쓴이" maxlength="100" required></textarea>
                    </div>
                    <div class="wi_line"></div>
                    <div id="in_content">
                        <textarea name="content" placeholder="내용" required></textarea>
                    </div>
                    <div id="in_pw">
                        <input type="password" name="pw" placeholder="비밀번호" required />  
                    </div>
                    <div class="bt_se">
                        <button type="submit">글쓰기</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>