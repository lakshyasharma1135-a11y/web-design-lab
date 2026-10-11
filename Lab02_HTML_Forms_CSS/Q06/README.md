# Lab: Lab Sheet 2: HTML Forms and CSS — Q06

**Question:** Write a CSS stylesheet utilizing CSS Grid to arrange form elements into a clean two-column grid layout.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q6. Write a CSS stylesheet utilizing CSS Grid to arrange form elements into a clean two-column grid layout.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 2 - Q6</title>
</head>
<body>
<style>
  .grid { display: grid; grid-template-columns: 1fr 1fr; gap: 12px 20px; width: 500px; margin: 20px auto; }
  .grid input, .grid select { width: 100%; padding: 8px; box-sizing: border-box; }
  .full { grid-column: 1 / -1; }
</style>
<form class="grid">
  <input placeholder="First name"> <input placeholder="Last name">
  <input placeholder="Email"> <input placeholder="Phone">
  <select class="full"><option>Select course</option><option>MCA</option></select>
  <button class="full">Submit</button>
</form>
</body>
</html>
```
