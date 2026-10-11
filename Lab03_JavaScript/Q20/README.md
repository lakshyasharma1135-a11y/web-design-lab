# Lab: Lab Sheet 3: JavaScript — Q20

**Question:** Create a dynamic table generator in JavaScript that takes row and column counts from user inputs and renders a populated HTML table.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).
- 2. Follow the on-page prompts/buttons. For console output, press **F12 → Console**.

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q20. Create a dynamic table generator in JavaScript that takes row and column counts from user inputs and renders a populated HTML table.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 3 - Q20</title>
</head>
<body>
Rows: <input type="number" id="r" value="3"> Cols: <input type="number" id="c" value="3">
<button onclick="gen()">Generate</button>
<div id="tbl"></div>
<script>
  function gen() {
    const r = +document.getElementById("r").value, c = +document.getElementById("c").value;
    let h = "<table border='1' cellpadding='6'>";
    for (let i = 1; i <= r; i++) {
      h += "<tr>";
      for (let j = 1; j <= c; j++) h += `<td>R${i}C${j}</td>`;
      h += "</tr>";
    }
    document.getElementById("tbl").innerHTML = h + "</table>";
  }
</script>
</body>
</html>
```
