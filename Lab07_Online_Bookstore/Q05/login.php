<?php include 'header.php';
$msg = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $st = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $st->execute([$_POST['email']]);
    $u = $st->fetch();
    if ($u && password_verify($_POST['password'], $u['password'])) {
        session_regenerate_id(true);          // prevents session fixation
        $_SESSION['uid'] = $u['id']; $_SESSION['name'] = $u['name']; $_SESSION['role'] = $u['role'];
        header("Location: index.php"); exit;
    }
    $msg = "Invalid email or password.";
}
?>
<form method="post" id="loginForm" style="padding:24px"><h2>Login</h2><p style="color:red"><?= e($msg) ?></p>
  <input name="email" placeholder="Email"><br><input type="password" name="password" placeholder="Password"><br><button>Login</button></form>
<script src="validate.js"></script>
<?php include 'footer.php'; ?>
