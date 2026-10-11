<?php
require 'db.php';
try {
    $pdo->beginTransaction();
    $pdo->prepare("UPDATE accounts SET balance = balance - ? WHERE id = ?")->execute([200, 1]);
    $pdo->prepare("UPDATE accounts SET balance = balance + ? WHERE id = ?")->execute([200, 2]);
    $pdo->commit();
    echo "Transfer successful";
} catch (Exception $e) {
    $pdo->rollBack();
    echo "Failed, rolled back: " . $e->getMessage();
}
