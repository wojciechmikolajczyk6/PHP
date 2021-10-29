<!doctype html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php print($page_description); if (!isset($page_description)) {  ?> Opis domyślny ... <?php } ?>">
	<title><?php print($page_title); if (empty($page_title)) {  ?> Tytuł domyślny ... <?php } ?></title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php print(_APP_URL); ?>/style.css">	
</head>
<body>

<div class="header">
	<h1><?php print($page_title); if (!isset($page_title)) {  ?> Tytuł domyślny ... <?php } ?></h1>
	<h2><?php print($page_header); if (!isset($page_header)) {  ?> Tytuł domyślny ... <?php } ?></h1>
	<p>
		<?php print($page_description); if (!isset($page_description)) {  ?> Opis domyślny ... <?php } ?>
	</p>
</div>

<div class="content">