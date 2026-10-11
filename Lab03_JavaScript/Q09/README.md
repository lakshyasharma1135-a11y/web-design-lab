# Lab: Lab Sheet 3: JavaScript — Q09

**Question:** Write a script that dynamically creates and appends new DOM elements (createElement, appendChild) based on user text input.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).
- 2. Follow the on-page prompts/buttons. For console output, press **F12 → Console**.

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q9. Write a script that dynamically creates and appends new DOM elements (createElement, appendChild) based on user text input.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 3 - Q9</title>
</head>
<body>
<input id="t" placeholder="Type text"> <button id="add">Add</button>
<div id="list"></div>
<script>
  document.getElementById("add").addEventListener("click", () => {
    const p = document.createElement("p");
    p.textContent = document.getElementById("t").value;
    document.getElementById("list").appendChild(p);
  });
</script>
</body>
</html>
```
