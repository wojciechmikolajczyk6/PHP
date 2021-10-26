<?php require_once dirname(__FILE__) .'/config.php';
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>nastepna_strona</title>
<link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" 
      integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">
</head>
<body>
    <a class='pure-button pure-button-primary' href='<?php print(_APP_ROOT);?>/calc.php'>Poprzednia strona</a>
    <a class='pure-button pure-button-primary' href='<?php print(_APP_ROOT);?>/login/logout.php'>Wyloguj sie</a>
    <h1>To jest nastepna strona.</h1>   
</body>
</html>
  