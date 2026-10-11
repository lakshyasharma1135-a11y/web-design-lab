# Lab: Lab Sheet 2: HTML Forms and CSS — Q05

**Question:** Design a user login interface inside a centered card container using CSS box- shadow, border-radius, and absolute positioning.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q5. Design a user login interface inside a centered card container using CSS box- shadow, border-radius, and absolute positioning.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 2 - Q5</title>
</head>
<body>
<style>
  body { background: #eef1f6; font-family: Arial; }
  .card { position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
          width: 300px; padding: 25px; background: #fff; border-radius: 12px;
          box-shadow: 0 8px 24px rgba(0,0,0,0.2); }
  .card input { width: 100%; padding: 9px; margin: 8px 0; box-sizing: border-box; }
  .card button { width: 100%; padding: 10px; background: #2a6edb; color: #fff; border: 0; border-radius: 6px; }
</style>
<div class="card">
  <h2>Login</h2>
  <input type="text" placeholder="Username">
  <input type="password" placeholder="Password">
  <button>Sign In</button>
</div>
</body>
</html>
```
