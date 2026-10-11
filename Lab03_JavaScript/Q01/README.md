# Lab: Lab Sheet 3: JavaScript — Q01

**Question:** Write a JavaScript program to accept two numbers via prompt dialogs, perform arithmetic operations, and display the result using console.log and alert.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).
- 2. Follow the on-page prompts/buttons. For console output, press **F12 → Console**.

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q1. Write a JavaScript program to accept two numbers via prompt dialogs, perform arithmetic operations, and display the result using console.log and alert.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 3 - Q1</title>
</head>
<body>
<script>
  let a = parseFloat(prompt("Enter first number:"));
  let b = parseFloat(prompt("Enter second number:"));
  let res = `Sum=${a + b}, Diff=${a - b}, Product=${a * b}, Quotient=${(a / b).toFixed(2)}`;
  console.log(res);
  alert(res);
</script>
</body>
</html>
```
