<?php
foreach (['mysqli', 'pdo_mysql', 'mbstring', 'curl'] as $e)
    echo $e . ": " . (extension_loaded($e) ? "ENABLED" : "missing") . "<br>";
