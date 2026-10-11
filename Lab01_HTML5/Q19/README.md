# Lab: Lab Sheet 1: HTML5 — Q19

**Question:** Build a complex data table that uses the rowspan attribute to merge cells vertically across multiple rows.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q19. Build a complex data table that uses the rowspan attribute to merge cells vertically across multiple rows.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 1 - Q19</title>
</head>
<body>
<table border="1" cellpadding="6">
  <tr><th>Department</th><th>Course</th><th>Seats</th></tr>
  <tr><td rowspan="2">Computer Applications</td><td>MCA</td><td>60</td></tr>
  <tr><td>BCA</td><td>120</td></tr>
  <tr><td rowspan="2">Engineering</td><td>CSE</td><td>180</td></tr>
  <tr><td>ECE</td><td>120</td></tr>
</table>
</body>
</html>
```
