<?php
session_start();
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>PHPテスト</title>
</head>
<body>
<?php
if(!isset($_COOKIE["PHPSESSID"])){
  print('初回訪問です。セッションを始めます。');
}else{
  print('セッションは開始しています。<br>');
  print('セッションIDは '.$_COOKIE["PHPSESSID"].' です。');
}
 ?>
</body>
</html>
