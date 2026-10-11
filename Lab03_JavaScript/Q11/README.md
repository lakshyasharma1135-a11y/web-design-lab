# Lab: Lab Sheet 3: JavaScript — Q11

**Question:** Write a JavaScript event handler for mouseover and mouseout events to change the background color of an HTML element dynamically.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).
- 2. Follow the on-page prompts/buttons. For console output, press **F12 → Console**.

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q11. Write a JavaScript event handler for mouseover and mouseout events to change the background color of an HTML element dynamically.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 3 - Q11</title>
</head>
<body>
<div id="box" style="width:200px;height:100px;background:lightblue;">Hover me</div>
<script>
  const box = document.getElementById("box");
  box.addEventListener("mouseover", () => box.style.background = "orange");
  box.addEventListener("mouseout", () => box.style.background = "lightblue");
</script>
</body>
</html>
```
