# Lab: Lab Sheet 1: HTML5 — Q20

**Question:** Construct a financial report table that correctly structures its content using <thead>, <tbody>, and <tfoot> semantic tags.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q20. Construct a financial report table that correctly structures its content using <thead>, <tbody>, and <tfoot> semantic tags.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 1 - Q20</title>
</head>
<body>
<table border="1" cellpadding="6">
  <thead><tr><th>Month</th><th>Income</th><th>Expense</th></tr></thead>
  <tbody>
    <tr><td>Jan</td><td>50000</td><td>30000</td></tr>
    <tr><td>Feb</td><td>55000</td><td>32000</td></tr>
  </tbody>
  <tfoot><tr><th>Total</th><td>105000</td><td>62000</td></tr></tfoot>
</table>
</body>
</html>
```
