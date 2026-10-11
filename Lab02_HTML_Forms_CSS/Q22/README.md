# Lab: Lab Sheet 2: HTML Forms and CSS — Q22

**Question:** Design a newsletter subscription widget with a floating label effect using CSS positioning.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q22. Design a newsletter subscription widget with a floating label effect using CSS positioning.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 2 - Q22</title>
</head>
<body>
<style>
  .fl { position: relative; width: 300px; margin: 30px; }
  .fl input { width: 100%; padding: 16px 10px 6px; border: 2px solid #ccc; border-radius: 6px; box-sizing: border-box; outline: none; }
  .fl label { position: absolute; left: 12px; top: 14px; color: #888; transition: all 0.2s; pointer-events: none; }
  .fl input:focus + label, .fl input:not(:placeholder-shown) + label { top: 2px; font-size: 11px; color: #2a6edb; }
  .fl input:focus { border-color: #2a6edb; }
</style>
<div class="fl">
  <input type="email" id="nl" placeholder=" ">
  <label for="nl">Your email</label>
</div>
<button>Subscribe</button>
</body>
</html>
```
