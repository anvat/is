<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);

$page = $_REQUEST['page'] ?? 'main';
function show($page)
{
	$available_pages = [
		'list', 'item', 'main'
		];
	if (in_array($page, $available_pages)) {
		$data = include 'data/' . $page . '.php';
	} else {
		include 'pages/404.php';
	}
}
show($page);
