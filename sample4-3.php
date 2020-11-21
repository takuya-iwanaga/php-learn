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
if(!isset($_SESSION["visited"])){
  print('初回の訪問です。セッションを開始します。');

  $_SESSION["visited"]=1;
  $_SESSION["date"]=date('c');
}else{
  $visited=$_SESSION["visited"];
  $visited++;

  print('訪問回数は'.$visited.'です。<br>');

  $_SESSION["visited"]=$visited;

  if(isset($_SESSION["date"])){
    print('前回の訪問日時は'.$_SESSION["date"].'です。<br>');
  }
  $_SESSION["date"]=date('c');
}
 ?>
 <p>
   <a href="./sample4-3-2.php">ログアウトする</a>
 </p>
</body>
</html>
