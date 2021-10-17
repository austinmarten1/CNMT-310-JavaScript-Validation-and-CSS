<?php

$required = ['uname', 'password', 'reenterpassword', 'email'];
foreach ($required as $requiredField) {
    if (!isset($_POST[$requiredField]) || empty($_POST[$requiredField])) {
        die(header("Location: index.php"));
    } 
}

require_once("Template.php");

$page = new Template("Confimation Page");
$page->addHeadElement("<link rel='stylesheet'href='style.css'>");
$page->finalizeTopSection();
$page->finalizeBottomSection();
print "<h1> Welcome </h2>";
print $page->getTopSection();

print $page->getBottomSection();
