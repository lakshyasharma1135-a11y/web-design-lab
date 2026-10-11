// Unsafe: allows SQL injection
$pdo->query("SELECT * FROM books WHERE id = " . $_GET['id']);
// Safe
$st = $pdo->prepare("SELECT * FROM books WHERE id = ?"); $st->execute([(int)$_GET['id']]);
