<?php

require_once 'configureCyclos.php';

$userService = new Cyclos\UserService();
$query = new stdclass();
$query->keywords = 'wakashela*';
$query->pageSize = 5;
$page = $userService->search($query);

echo("Found a total of $page->totalCount users\n");

if (!empty($page->pageItems)) {
	foreach ($page->pageItems as $user) {
		echo("* $user->name ($user->username)\n");	
	}
}