# Lab: Lab Sheet 2: HTML Forms and CSS — Q13

**Question:** Implement custom styled checkboxes and radio buttons using CSS pseudo- elements (::before and ::after) and sibling selectors (~).

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q13. Implement custom styled checkboxes and radio buttons using CSS pseudo- elements (::before and ::after) and sibling selectors (~).

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 2 - Q13</title>
</head>
<body>
<style>
  .opt input { display: none; }
  .opt label { position: relative; padding-left: 30px; cursor: pointer; display: inline-block; margin: 8px; }
  .opt label::before { content: ""; position: absolute; left: 0; top: 0; width: 18px; height: 18px; border: 2px solid #2a6edb; border-radius: 4px; }
  .opt input[type=radio] ~ label::before { border-radius: 50%; }
  .opt input:checked ~ label::before { background: #2a6edb; }
  .opt input:checked ~ label::after { content: "\2713"; position: absolute; left: 4px; top: -1px; color: #fff; }
</style>
<div class="opt"><input type="checkbox" id="c1"><label for="c1">Coding</label></div>
<div class="opt"><input type="radio" name="r" id="r1"><label for="r1">Option A</label></div>
<div class="opt"><input type="radio" name="r" id="r2"><label for="r2">Option B</label></div>
</body>
</html>
```
