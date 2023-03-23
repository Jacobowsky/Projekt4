<?php
include_once "tools.php";


$page = getPage();

include_once "header.php";
include_once 'stronki/' . $page . '.php';
include_once "footer.php";
?>