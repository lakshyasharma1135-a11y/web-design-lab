# Lab: Lab Sheet 3: JavaScript — Q02

**Question:** Implement a JavaScript function that checks whether an input number is prime or composite, outputting the result dynamically into a web page div.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).
- 2. Follow the on-page prompts/buttons. For console output, press **F12 → Console**.

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q2. Implement a JavaScript function that checks whether an input number is prime or composite, outputting the result dynamically into a web page div.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 3 - Q2</title>
</head>
<body>
<input type="number" id="n"> <button onclick="check()">Check</button>
<div id="out"></div>
<script>
  function check() {
    let n = parseInt(document.getElementById("n").value), prime = n > 1;
    for (let i = 2; i * i <= n; i++) if (n % i === 0) { prime = false; break; }
    document.getElementById("out").innerText = n < 2 ? n + " is neither prime nor composite" : n + (prime ? " is Prime" : " is Composite");
  }
</script>
</body>
</html>
```
