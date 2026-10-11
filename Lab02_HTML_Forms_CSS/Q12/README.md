# Lab: Lab Sheet 2: HTML Forms and CSS — Q12

**Question:** Create a responsive payment gateway checkout form using CSS media queries to adjust input widths on mobile screens.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q12. Create a responsive payment gateway checkout form using CSS media queries to adjust input widths on mobile screens.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 2 - Q12</title>
</head>
<body>
<style>
  .pay { max-width: 450px; margin: 20px auto; }
  .pay input, .pay select { width: 100%; padding: 10px; margin: 6px 0; box-sizing: border-box; }
  .row { display: flex; gap: 10px; }
  .row input { width: 50%; }
  @media (max-width: 480px) {
    .row { flex-direction: column; }
    .row input { width: 100%; }
    .pay { margin: 10px; }
  }
</style>
<form class="pay">
  <input placeholder="Cardholder name">
  <input placeholder="Card number" maxlength="16">
  <div class="row"><input placeholder="MM/YY"><input placeholder="CVV" maxlength="3"></div>
  <button>Pay Now</button>
</form>
</body>
</html>
```
