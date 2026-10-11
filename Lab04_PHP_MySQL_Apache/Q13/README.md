# Lab: Lab Sheet 4: Apache, PHP and MySQL — Q13

**Question:** Write a PHP script that handles file uploads ($_FILES), validates file size and extension, and stores images in an Apache server directory.

## Run / view the answer
- 1. Install PHP. From this question folder, run `php -S 127.0.0.1:8000`.
- 2. Open `http://127.0.0.1:8000/db.php`. If the code uses MySQL or `require`/`include`, complete the lab-level setup and put required shared files/database tables in place first.

## Expected output
With PHP running and any required MySQL database/tables configured, the page should show the requested result (for example, a table, form, or success message). If it fails, check the database name, credentials, required shared files, and table setup.

## Answer

## Q13. Write a PHP script that handles file uploads ($_FILES), validates file size and extension, and stores images in an Apache server directory.

**File: `upload.php`**

```php
<?php
$msg = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['img'])) {
    $f = $_FILES['img'];
    $ext = strtolower(pathinfo($f['name'], PATHINFO_EXTENSION));
    $allowed = ['jpg', 'jpeg', 'png', 'gif'];
    if ($f['error'] !== UPLOAD_ERR_OK)          $msg = "Upload error.";
    elseif (!in_array($ext, $allowed))          $msg = "Only JPG, PNG, GIF allowed.";
    elseif ($f['size'] > 2 * 1024 * 1024)       $msg = "File too large (max 2 MB).";
    else {
        @mkdir("uploads", 0755);
        $new = uniqid("img_") . "." . $ext;
        move_uploaded_file($f['tmp_name'], "uploads/" . $new);
        $msg = "Uploaded as $new";
    }
}
echo $msg;
?>
<form method="post" enctype="multipart/form-data">
  <input type="file" name="img"><button>Upload</button>
</form>
```
