# Lab: Lab Sheet 2: HTML Forms and CSS — Q10

**Question:** Design a CSS-styled data entry table embedded inside a form container with alternating row colors and hover effects.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q10. Design a CSS-styled data entry table embedded inside a form container with alternating row colors and hover effects.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 2 - Q10</title>
</head>
<body>
<style>
  .wrap { width: 500px; margin: 20px auto; padding: 15px; border: 1px solid #ccc; border-radius: 8px; }
  table { width: 100%; border-collapse: collapse; }
  th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
  th { background: #2a6edb; color: #fff; }
  tr:nth-child(even) { background: #f2f6ff; }
  tr:hover td { background: #ffe9a8; }
</style>
<form class="wrap">
  <table>
    <tr><th>Item</th><th>Qty</th></tr>
    <tr><td>Pen</td><td><input type="number" value="1"></td></tr>
    <tr><td>Book</td><td><input type="number" value="2"></td></tr>
    <tr><td>Bag</td><td><input type="number" value="1"></td></tr>
  </table>
</form>
</body>
</html>
```
