# Lab: Lab Sheet 2: HTML Forms and CSS — Q18

**Question:** Design a responsive contact us page featuring an embedded form on one side and company location details on the other using CSS Flexbox.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q18. Design a responsive contact us page featuring an embedded form on one side and company location details on the other using CSS Flexbox.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 2 - Q18</title>
</head>
<body>
<style>
  .contact { display: flex; gap: 20px; max-width: 800px; margin: 20px auto; }
  .contact > div { flex: 1; padding: 20px; border: 1px solid #ddd; border-radius: 8px; }
  .contact input, .contact textarea { width: 100%; padding: 8px; margin: 6px 0; box-sizing: border-box; }
  @media (max-width: 600px) { .contact { flex-direction: column; } }
</style>
<div class="contact">
  <div>
    <h3>Send a message</h3>
    <input placeholder="Name"><input placeholder="Email"><textarea rows="4" placeholder="Message"></textarea>
    <button>Send</button>
  </div>
  <div>
    <h3>Our Location</h3>
    <p>COER University<br>Roorkee, Uttarakhand<br>Phone: +91 00000 00000</p>
  </div>
</div>
</body>
</html>
```
