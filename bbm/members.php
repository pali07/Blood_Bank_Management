<?php

$i=0;
require_once 'users/php/DBConnect.php';
$db = new DBConnect();
$users = $db->getUsers();

$title="Members Area";$setMemberActive="active";$bg_background="bg-warning";
include 'layout/_header.php';

include 'layout/_top_nav.php';
?>


