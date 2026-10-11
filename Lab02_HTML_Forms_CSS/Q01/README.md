# Lab: Lab Sheet 2: HTML Forms and CSS — Q01

**Question:** Create an HTML form with text input, password, radio buttons, checkboxes, dropdown select, and a textarea, styled entirely with external CSS.

## Run / view the answer
- 1. Open `form1.html` in Chrome/Edge/Firefox (double-click it).

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q1. Create an HTML form with text input, password, radio buttons, checkboxes, dropdown select, and a textarea, styled entirely with external CSS.

**File: `form1.html`**

```html
<!DOCTYPE html><html><head><meta charset="UTF-8"><title>Form</title>
<link rel="stylesheet" href="style.css"></head>
<body>
<form class="box">
  <label>Name</label><input type="text" name="name">
  <label>Password</label><input type="password" name="pass">
  <label>Gender</label>
  <div><input type="radio" name="g" value="m"> Male <input type="radio" name="g" value="f"> Female</div>
  <label>Interests</label>
  <div><input type="checkbox"> Coding <input type="checkbox"> Music</div>
  <label>Course</label>
  <select><option>MCA</option><option>BCA</option></select>
  <label>Message</label><textarea rows="4"></textarea>
  <button type="submit">Submit</button>
</form>
</body></html>
```

**File: `style.css`**

```css
body { font-family: Arial, sans-serif; background: #f2f4f8; }
.box { width: 340px; margin: 30px auto; padding: 20px; background: #fff; border-radius: 8px; }
label { display: block; margin-top: 12px; font-weight: bold; }
input[type=text], input[type=password], select, textarea { width: 100%; padding: 8px; box-sizing: border-box; }
button { margin-top: 15px; padding: 10px 20px; background: #2a6edb; color: #fff; border: 0; border-radius: 4px; }
```
