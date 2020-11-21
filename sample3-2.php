<?php
if(isset($_COOKIE["visited"])){
  $count=$_COOKIE["visited"]+1;
}else{
  $count=1;
}

$flag=setcookie("visited",$count,time()+20);

#実行コマンド  php -S localhost:8000 -r sample3-2.php
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
  print('<p>ノックした回数は'.$count.'です。</p>')
 ?>
</body>
</html>
