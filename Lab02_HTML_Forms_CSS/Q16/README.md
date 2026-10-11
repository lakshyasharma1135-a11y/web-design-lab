# Lab: Lab Sheet 2: HTML Forms and CSS — Q16

**Question:** Create a structured employee evaluation form using CSS float and clear properties for alignment.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q16. Create a structured employee evaluation form using CSS float and clear properties for alignment.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 2 - Q16</title>
</head>
<body>
<style>
  .form { width: 500px; margin: auto; }
  .f { float: left; width: 48%; margin: 1%; }
  .f input, .f select { width: 100%; padding: 8px; box-sizing: border-box; }
  .clear { clear: both; }
</style>
<form class="form">
  <div class="f"><label>Name</label><input></div>
  <div class="f"><label>Emp ID</label><input></div>
  <div class="f"><label>Department</label><input></div>
  <div class="f"><label>Rating</label><select><option>1</option><option>5</option></select></div>
  <div class="clear"></div>
  <button>Submit</button>
</form>
</body>
</html>
```
