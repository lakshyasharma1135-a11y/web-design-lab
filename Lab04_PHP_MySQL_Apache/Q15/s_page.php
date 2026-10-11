<?php
session_start();
echo isset($_SESSION['user']) ? "Welcome, " . htmlspecialchars($_SESSION['user']) . " <a href='s_logout.php'>Logout</a>" : "Please login first.";
