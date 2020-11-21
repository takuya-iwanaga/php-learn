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
print('セッション変数の一覧を表示します。<br>');
print_r($_SESSION);
print('<br>');

 print('セッションIDを表示します。<br>');
 print($_COOKIE["PHPSESSID"].'<br>');
 print('<p>ログアウトします</p>');

 $_SESSION=array();

 if(isset($_COOKIE["PHPSESSID"])){
   setcookie("PHPSESSID",'',time()-1800,'/');
 }

session_destory();

 ?>
 <p>
<a href="./sample4-3-3.php">ログアウトの確認</a>
</p>
</body>
</html>
