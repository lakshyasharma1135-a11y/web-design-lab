# Lab: Lab Sheet 1: HTML5 — Q22

**Question:** Add gender selection using radio buttons and hobby selections using checkboxes to a user profile form.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q22. Add gender selection using radio buttons and hobby selections using checkboxes to a user profile form.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 1 - Q22</title>
</head>
<body>
<form>
  <p>Gender:
    <label><input type="radio" name="gender" value="male"> Male</label>
    <label><input type="radio" name="gender" value="female"> Female</label>
    <label><input type="radio" name="gender" value="other"> Other</label>
  </p>
  <p>Hobbies:
    <label><input type="checkbox" name="hobby" value="reading"> Reading</label>
    <label><input type="checkbox" name="hobby" value="music"> Music</label>
    <label><input type="checkbox" name="hobby" value="sports"> Sports</label>
  </p>
</form>
</body>
</html>
```
