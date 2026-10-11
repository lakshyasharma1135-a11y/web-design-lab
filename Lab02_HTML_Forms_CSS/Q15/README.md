# Lab: Lab Sheet 2: HTML Forms and CSS — Q15

**Question:** Build a search input box that expands in width smoothly using CSS transition when focused.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q15. Build a search input box that expands in width smoothly using CSS transition when focused.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 2 - Q15</title>
</head>
<body>
<style>
  .search { width: 150px; padding: 8px 12px; border: 2px solid #aaa; border-radius: 20px;
            transition: width 0.4s ease; outline: none; }
  .search:focus { width: 320px; border-color: #2a6edb; }
</style>
<input type="text" class="search" placeholder="Search...">
</body>
</html>
```
