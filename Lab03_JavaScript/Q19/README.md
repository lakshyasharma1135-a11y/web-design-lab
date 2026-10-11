# Lab: Lab Sheet 3: JavaScript — Q19

**Question:** Write a script that captures keyboard events (keydown, keyup) and displays the pressed key code and character on the screen.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).
- 2. Follow the on-page prompts/buttons. For console output, press **F12 → Console**.

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q19. Write a script that captures keyboard events (keydown, keyup) and displays the pressed key code and character on the screen.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 3 - Q19</title>
</head>
<body>
<p>Press any key:</p>
<div id="info"></div>
<script>
  document.addEventListener("keydown", e => {
    document.getElementById("info").innerHTML = `keydown -> key: <b>${e.key}</b>, code: ${e.code}, keyCode: ${e.keyCode}`;
  });
  document.addEventListener("keyup", e => {
    document.getElementById("info").innerHTML += `<br>keyup -> key: <b>${e.key}</b>`;
  });
</script>
</body>
</html>
```
