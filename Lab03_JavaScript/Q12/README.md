# Lab: Lab Sheet 3: JavaScript — Q12

**Question:** Create a digital clock web page using JavaScript setInterval and Date object to display live time updating every second.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).
- 2. Follow the on-page prompts/buttons. For console output, press **F12 → Console**.

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q12. Create a digital clock web page using JavaScript setInterval and Date object to display live time updating every second.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 3 - Q12</title>
</head>
<body>
<h1 id="clock"></h1>
<script>
  function tick() { document.getElementById("clock").textContent = new Date().toLocaleTimeString(); }
  tick(); setInterval(tick, 1000);
</script>
</body>
</html>
```
