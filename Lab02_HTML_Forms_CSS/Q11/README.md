# Lab: Lab Sheet 2: HTML Forms and CSS — Q11

**Question:** Write an HTML document utilizing inline, internal, and external CSS stylesheets to style a contact form simultaneously, observing specificity rules.

## Run / view the answer
- 1. Open `contact.html` in Chrome/Edge/Firefox (double-click it).

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q11. Write an HTML document utilizing inline, internal, and external CSS stylesheets to style a contact form simultaneously, observing specificity rules.

**File: `contact.html`**

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 2 - Q11</title>
</head>
<body>
<link rel="stylesheet" href="ext.css">
<style>
  /* internal */
  input { border: 2px solid green; }
  #email { border: 2px solid blue; }
</style>
<form>
  <input type="text" placeholder="Name"><br>
  <input type="email" id="email" placeholder="Email"><br>
  <input type="text" placeholder="Phone" style="border: 2px solid red;">
</form>
</body>
</html>
```

**File: `ext.css`**

```css
input { border: 2px solid gray; padding: 8px; margin: 5px; }
```
