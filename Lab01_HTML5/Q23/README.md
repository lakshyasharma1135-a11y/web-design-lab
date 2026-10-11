# Lab: Lab Sheet 1: HTML5 — Q23

**Question:** Create a selection dropdown menu using <select> and <option> tags allowing users to choose their city of residence.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q23. Create a selection dropdown menu using <select> and <option> tags allowing users to choose their city of residence.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 1 - Q23</title>
</head>
<body>
<label for="city">City:</label>
<select id="city" name="city">
  <option value="">-- Select --</option>
  <option value="roorkee">Roorkee</option>
  <option value="dehradun">Dehradun</option>
  <option value="haridwar">Haridwar</option>
  <option value="delhi">Delhi</option>
</select>
</body>
</html>
```
