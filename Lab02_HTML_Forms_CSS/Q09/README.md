# Lab: Lab Sheet 2: HTML Forms and CSS — Q09

**Question:** Implement a survey form utilizing grouped form controls using <fieldset> and <legend> tags, styled with custom padding and margins.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q9. Implement a survey form utilizing grouped form controls using <fieldset> and <legend> tags, styled with custom padding and margins.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 2 - Q9</title>
</head>
<body>
<style>
  fieldset { padding: 15px 20px; margin: 15px 0; border: 2px solid #2a6edb; border-radius: 6px; }
  legend { padding: 0 10px; font-weight: bold; color: #2a6edb; }
</style>
<form>
  <fieldset><legend>About You</legend>
    <input type="text" placeholder="Name"> <input type="number" placeholder="Age">
  </fieldset>
  <fieldset><legend>Feedback</legend>
    <label><input type="radio" name="r"> Good</label>
    <label><input type="radio" name="r"> Average</label>
  </fieldset>
</form>
</body>
</html>
```
