# Lab: Lab Sheet 3: JavaScript — Q16

**Question:** Create a dynamic image gallery slider using JavaScript arrays to cycle through image sources upon clicking 'Next' and 'Previous' buttons.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).
- 2. Follow the on-page prompts/buttons. For console output, press **F12 → Console**.

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q16. Create a dynamic image gallery slider using JavaScript arrays to cycle through image sources upon clicking 'Next' and 'Previous' buttons.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 3 - Q16</title>
</head>
<body>
<img id="pic" width="300"><br>
<button id="prev">Previous</button> <button id="next">Next</button>
<script>
  const imgs = ["images/1.jpg", "images/2.jpg", "images/3.jpg"];
  let i = 0; const pic = document.getElementById("pic");
  const show = () => pic.src = imgs[i];
  document.getElementById("next").onclick = () => { i = (i + 1) % imgs.length; show(); };
  document.getElementById("prev").onclick = () => { i = (i - 1 + imgs.length) % imgs.length; show(); };
  show();
</script>
</body>
</html>
```
