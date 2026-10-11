# Lab: Lab Sheet 2: HTML Forms and CSS — Q20

**Question:** Build a multi-step user onboarding form layout using CSS display properties (display: none / block) to simulate step progression.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).
- 2. Follow the on-page prompts/buttons. For console output, press **F12 → Console**.

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q20. Build a multi-step user onboarding form layout using CSS display properties (display: none / block) to simulate step progression.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 2 - Q20</title>
</head>
<body>
<style>
  .step { display: none; } .step.active { display: block; }
  .step input { padding: 8px; margin: 6px 0; }
</style>
<form>
  <div class="step active"><h3>Step 1: Account</h3><input placeholder="Username"><br><input type="password" placeholder="Password"></div>
  <div class="step"><h3>Step 2: Profile</h3><input placeholder="Full name"><br><input placeholder="City"></div>
  <div class="step"><h3>Step 3: Done</h3><p>Click Finish to complete.</p></div>
  <button type="button" onclick="go(-1)">Back</button>
  <button type="button" onclick="go(1)">Next</button>
</form>
<script>
  let i = 0; const s = document.querySelectorAll('.step');
  function go(d) { s[i].classList.remove('active'); i = Math.max(0, Math.min(s.length - 1, i + d)); s[i].classList.add('active'); }
</script>
</body>
</html>
```
