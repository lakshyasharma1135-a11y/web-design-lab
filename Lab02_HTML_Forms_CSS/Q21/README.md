# Lab: Lab Sheet 2: HTML Forms and CSS — Q21

**Question:** Create an accessible form where every <input> is explicitly linked to its corresponding <label> using the for and id attributes.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q21. Create an accessible form where every <input> is explicitly linked to its corresponding <label> using the for and id attributes.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 2 - Q21</title>
</head>
<body>
<form>
  <label for="uname">Username:</label>
  <input type="text" id="uname" name="uname"><br><br>
  <label for="mail">Email:</label>
  <input type="email" id="mail" name="mail"><br><br>
  <label for="msg">Message:</label>
  <textarea id="msg" name="msg"></textarea>
</form>
</body>
</html>
```
