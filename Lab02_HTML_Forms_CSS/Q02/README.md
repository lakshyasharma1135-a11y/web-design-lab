# Lab: Lab Sheet 2: HTML Forms and CSS — Q02

**Question:** Design a student registration form incorporating HTML5 validation attributes (required, minlength, maxlength, pattern, type='email').

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q2. Design a student registration form incorporating HTML5 validation attributes (required, minlength, maxlength, pattern, type='email').

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 2 - Q2</title>
</head>
<body>
<form>
  <input type="text" name="name" placeholder="Full name" required minlength="3" maxlength="30"><br><br>
  <input type="email" name="email" placeholder="Email" required><br><br>
  <input type="text" name="phone" placeholder="10 digit mobile" pattern="[0-9]{10}" title="Enter 10 digits" required><br><br>
  <input type="password" name="pw" placeholder="Password (min 6)" minlength="6" required><br><br>
  <button type="submit">Register</button>
</form>
</body>
</html>
```
