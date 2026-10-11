# Lab: Lab Sheet 1: HTML5 — Q18

**Question:** Create a timetable grid where at least one cell spans across multiple columns using the colspan attribute.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q18. Create a timetable grid where at least one cell spans across multiple columns using the colspan attribute.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 1 - Q18</title>
</head>
<body>
<table border="1" cellpadding="6">
  <tr><th>Day</th><th>9-10</th><th>10-11</th><th>11-12</th></tr>
  <tr><td>Mon</td><td>Web Tech</td><td colspan="2">Web Tech Lab</td></tr>
  <tr><td>Tue</td><td>DBMS</td><td>Maths</td><td>DBMS</td></tr>
</table>
</body>
</html>
```
