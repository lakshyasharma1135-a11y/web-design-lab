# Lab: Lab Sheet 2: HTML Forms and CSS — Q14

**Question:** Design an HTML form with a range slider (type='range') and number input, displaying live unit labels.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).
- 2. Follow the on-page prompts/buttons. For console output, press **F12 → Console**.

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q14. Design an HTML form with a range slider (type='range') and number input, displaying live unit labels.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 2 - Q14</title>
</head>
<body>
<label>Volume: <input type="range" id="rng" min="0" max="100" value="30"> <span id="rv">30</span> %</label><br><br>
<label>Weight: <input type="number" id="num" value="50"> kg</label> <b id="nv">50 kg</b>
<script>
  rng.oninput = () => rv.textContent = rng.value;
  num.oninput = () => nv.textContent = num.value + " kg";
</script>
</body>
</html>
```
