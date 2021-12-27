<?php
	session_start();
	header('Content-Type: text/html; charset=utf-8');
//db 연결하는거
	$db = new mysqli("localhost","ddd","Yjs0325!","test");
	$db->set_charset("utf8");

	function mq($sql)
	{
		global $db;
		return $db->query($sql);
	}
?>