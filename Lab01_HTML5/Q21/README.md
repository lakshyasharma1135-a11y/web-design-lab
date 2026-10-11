# Lab: Lab Sheet 1: HTML5 — Q21

**Question:** Design a comprehensive user registration form using the <form> tag containing text fields for First Name, Last Name, and Email, along with a submit button.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q21. Design a comprehensive user registration form using the <form> tag containing text fields for First Name, Last Name, and Email, along with a submit button.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 1 - Q21</title>
</head>
<body>
<form action="#" method="post">
  <label for="fn">First Name:</label>
  <input type="text" id="fn" name="firstname"><br><br>
  <label for="ln">Last Name:</label>
  <input type="text" id="ln" name="lastname"><br><br>
  <label for="em">Email:</label>
  <input type="email" id="em" name="email"><br><br>
  <input type="submit" value="Register">
</form>
</body>
</html>
```
