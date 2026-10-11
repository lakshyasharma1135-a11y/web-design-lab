# Lab: Lab Sheet 2: HTML Forms and CSS — Q19

**Question:** Implement CSS typography rules (font-family, line-height, letter-spacing, text- transform) across all labels and placeholders in a registration form.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q19. Implement CSS typography rules (font-family, line-height, letter-spacing, text- transform) across all labels and placeholders in a registration form.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 2 - Q19</title>
</head>
<body>
<style>
  form { width: 350px; margin: 20px auto; }
  label { font-family: Georgia, serif; line-height: 1.8; letter-spacing: 1px; text-transform: uppercase; font-size: 13px; }
  input::placeholder { font-family: Verdana, sans-serif; letter-spacing: 0.5px; text-transform: capitalize; font-style: italic; }
  input { width: 100%; padding: 8px; margin-bottom: 10px; box-sizing: border-box; }
</style>
<form>
  <label>Full name</label><input placeholder="enter your name">
  <label>Email address</label><input placeholder="enter your email">
</form>
</body>
</html>
```
