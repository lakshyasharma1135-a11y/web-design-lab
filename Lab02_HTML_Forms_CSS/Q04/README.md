# Lab: Lab Sheet 2: HTML Forms and CSS — Q04

**Question:** Create a modern webpage layout replicating frame-like behavior using CSS Flexbox (display: flex) instead of HTML frames.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q4. Create a modern webpage layout replicating frame-like behavior using CSS Flexbox (display: flex) instead of HTML frames.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 2 - Q4</title>
</head>
<body>
<style>
  body { margin: 0; font-family: Arial; }
  .page { display: flex; flex-direction: column; height: 100vh; }
  header { background: #2a6edb; color: #fff; padding: 15px; }
  .main { display: flex; flex: 1; }
  nav { width: 200px; background: #e8eefc; padding: 15px; }
  main { flex: 1; padding: 15px; }
</style>
<div class="page">
  <header><h2>My Site</h2></header>
  <div class="main">
    <nav><a href="#">Home</a><br><a href="#">About</a></nav>
    <main><h3>Content</h3><p>Main content area.</p></main>
  </div>
</div>
</body>
</html>
```
