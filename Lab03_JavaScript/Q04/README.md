# Lab: Lab Sheet 3: JavaScript — Q04

**Question:** Create a JavaScript loop (for, while, do-while) program to generate and print the Fibonacci series up to n terms on the webpage.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).
- 2. Follow the on-page prompts/buttons. For console output, press **F12 → Console**.

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q4. Create a JavaScript loop (for, while, do-while) program to generate and print the Fibonacci series up to n terms on the webpage.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 3 - Q4</title>
</head>
<body>
<script>
  let n = 10, out = "";
  // for
  let a = 0, b = 1; out += "for: ";
  for (let i = 0; i < n; i++) { out += a + " "; [a, b] = [b, a + b]; }
  // while
  a = 0; b = 1; let i = 0; out += "<br>while: ";
  while (i < n) { out += a + " "; [a, b] = [b, a + b]; i++; }
  // do-while
  a = 0; b = 1; i = 0; out += "<br>do-while: ";
  do { out += a + " "; [a, b] = [b, a + b]; i++; } while (i < n);
  document.write(out);
</script>
</body>
</html>
```
