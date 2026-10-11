<?php
session_start();
$_SESSION['user'] = 'amit';
echo "Logged in. <a href='s_page.php'>Go to page</a>";
