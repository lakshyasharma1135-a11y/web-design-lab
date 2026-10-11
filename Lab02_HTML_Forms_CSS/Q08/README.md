# Lab: Lab Sheet 2: HTML Forms and CSS — Q08

**Question:** Create an HTML form featuring file upload (type='file') and a styled custom submit button with CSS transitions on :hover and :active states.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q8. Create an HTML form featuring file upload (type='file') and a styled custom submit button with CSS transitions on :hover and :active states.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 2 - Q8</title>
</head>
<body>
<style>
  .btn { padding: 10px 24px; background: #2a6edb; color: #fff; border: 0; border-radius: 5px;
         cursor: pointer; transition: background 0.3s, transform 0.2s; }
  .btn:hover { background: #1b4fa8; }
  .btn:active { transform: scale(0.95); }
</style>
<form>
  <input type="file" name="doc"><br><br>
  <button type="submit" class="btn">Upload</button>
</form>
</body>
</html>
```
