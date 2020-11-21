<?php
setcookie("buy[1]","Televison");
setcookie("buy[2]","Video");
setcookie("buy[3]","Audio");
setcookie("sole[1]","あああ");
setcookie("sole[2]","いいい");
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
if(isset($_COOKIE["buy"])){
  $val=$_COOKIE["buy"];
  $val2=$_COOKIE["sole"];
  print('<p>');
  print('購入したものは下記の通りです。<br>');
  print($val[1].'<br>');
  print($val[2].'<br>');
  print($val2[1].'<br>');
  print($val2[2].'<br>');
  print($val[3]);

  print('</p>');
}else{
  print('<p>値をセットしました</p>');
}
 ?>
</body>
</html>
