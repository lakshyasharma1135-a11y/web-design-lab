# Lab: Lab Sheet 7: Online Bookstore (PHP and MySQL) — Q05

**Question:** Implement a user registration and login system in PHP with password hashing and secure session management.

## Run / view the answer
- 1. Install PHP. From this question folder, run `php -S 127.0.0.1:8000`.
- 2. Open `http://127.0.0.1:8000/login.php`. If the code uses MySQL or `require`/`include`, complete the lab-level setup and put required shared files/database tables in place first.

## Expected output
With PHP running and any required MySQL database/tables configured, the page should show the requested result (for example, a table, form, or success message). If it fails, check the database name, credentials, required shared files, and table setup.

## Answer

## Q5. Implement a user registration and login system in PHP with password hashing and secure session management.

**File: `register.php`**

```php
<?php include 'header.php';
$msg = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']); $email = trim($_POST['email']); $pw = $_POST['password'];
    if (strlen($name) < 2 || !filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($pw) < 6) {
        $msg = "Invalid input.";
    } else {
        try {
            $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)")
                ->execute([$name, $email, password_hash($pw, PASSWORD_DEFAULT)]);
            header("Location: login.php"); exit;
        } catch (PDOException $ex) { $msg = "Email already registered."; }
    }
}
?>
<form method="post" id="regForm" style="padding:24px"><h2>Register</h2><p style="color:red"><?= e($msg) ?></p>
  <input name="name" placeholder="Name"><br><input name="email" placeholder="Email"><br>
  <input type="password" name="password" placeholder="Password"><br><button>Register</button></form>
<script src="validate.js"></script>
<?php include 'footer.php'; ?>
```

**File: `login.php`**

```php
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
```

```sql
UPDATE users SET role = 'admin' WHERE email = 'you@example.com';
```

**File: `logout.php`**

```php
<?php
session_start();
session_destroy();
header('Location: index.php');
```
