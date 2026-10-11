# Lab: Lab Sheet 2: HTML Forms and CSS — Q07

**Question:** Build an interactive feedback form where input fields change border color and background tint on :focus pseudo-class.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q7. Build an interactive feedback form where input fields change border color and background tint on :focus pseudo-class.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 2 - Q7</title>
</head>
<body>
<style>
  input, textarea { padding: 8px; border: 2px solid #ccc; outline: none; width: 300px; margin: 6px 0; }
  input:focus, textarea:focus { border-color: #2a6edb; background: #eaf1ff; }
</style>
<form>
  <input type="text" placeholder="Name"><br>
  <input type="email" placeholder="Email"><br>
  <textarea rows="4" placeholder="Feedback"></textarea>
</form>
</body>
</html>
```
