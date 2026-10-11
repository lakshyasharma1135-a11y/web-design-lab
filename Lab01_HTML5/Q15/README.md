# Lab: Lab Sheet 1: HTML5 — Q15

**Question:** Write code demonstrating how to source images both from a local directory folder and from an external URL source.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q15. Write code demonstrating how to source images both from a local directory folder and from an external URL source.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 1 - Q15</title>
</head>
<body>
<!-- Local folder: images/ -->
<img src="images/photo.jpg" alt="Local image" width="250">

<!-- External URL -->
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/47/PNG_transparency_demonstration_1.png/280px-PNG_transparency_demonstration_1.png"
     alt="External image" width="250">
</body>
</html>
```
