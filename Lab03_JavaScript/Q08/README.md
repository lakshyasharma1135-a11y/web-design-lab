# Lab: Lab Sheet 3: JavaScript — Q08

**Question:** Create an interactive calculator web page using JavaScript event listeners (addEventListener) for click events on buttons.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).
- 2. Follow the on-page prompts/buttons. For console output, press **F12 → Console**.

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q8. Create an interactive calculator web page using JavaScript event listeners (addEventListener) for click events on buttons.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 3 - Q8</title>
</head>
<body>
<input id="d" readonly><br>
<div id="keys"></div>
<script>
  const keys = ["7","8","9","/","4","5","6","*","1","2","3","-","0",".","=","+","C"];
  const box = document.getElementById("keys"), d = document.getElementById("d");
  keys.forEach(k => {
    const b = document.createElement("button"); b.textContent = k; box.appendChild(b);
    b.addEventListener("click", () => {
      if (k === "C") d.value = "";
      else if (k === "=") { try { d.value = Function('"use strict";return (' + d.value + ')')(); } catch { d.value = "Error"; } }
      else d.value += k;
    });
  });
</script>
</body>
</html>
```
