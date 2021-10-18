
<?php

require_once("Template.php");

$page = new Template("My Page");
$page->addHeadElement("<script type='text/javascript' src='hello.js'></script>");
$page->addHeadElement("<link rel='stylesheet' href='style.css'>");
$page->finalizeTopSection();
$page->finalizeBottomSection();

print $page->getTopSection();
print "<h1>User Registration</h1>\n";

print "<form name='fname' action='webform.php' method='post' onsubmit='return formValidation()'>";
print "  <label for=\"uname\">UserName:</label><br>\n";
print "  <input type=\"text\" id=\"uname\" name=\"uname\" value=\"\"><br>\n";
print "  <label for=\"password\">Password:</label><br>\n";
print "  <input type=\"text\" id=\"password\" name=\"password\" value=\"\"><br>\n";
print "  <label for=\"reenterpassword\">Re-enter Password:</label><br>\n";
print "  <input type=\"text\" id=\"reenterpassword\" name=\"reenterpassword\" value=\"\"><br>\n";
print "  <label for=\"email\">Email Address:</label><br>\n";
print "  <input type=\"text\" id=\"email\" name=\"email\" value=\"\"><br><br>\n";
print "  <input type=\"submit\" value=\"Submit\">\n";
print "</form>";

print $page->getBottomSection();

?>
