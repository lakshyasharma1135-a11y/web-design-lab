# Lab: Lab Sheet 2: HTML Forms and CSS — Q17

**Question:** Write an HTML form incorporating hidden input fields (type='hidden') to pass session data securely.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q17. Write an HTML form incorporating hidden input fields (type='hidden') to pass session data securely.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 2 - Q17</title>
</head>
<body>
<form action="process.php" method="post">
  <input type="hidden" name="session_id" value="abc123xyz">
  <input type="hidden" name="user_id" value="45">
  <input type="text" name="comment" placeholder="Comment">
  <button>Send</button>
</form>
</body>
</html>
```
