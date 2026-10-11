# Lab: Lab Sheet 3: JavaScript — Q10

**Question:** Implement real-time form validation in JavaScript checking if password and confirm password fields match before submission.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).
- 2. Follow the on-page prompts/buttons. For console output, press **F12 → Console**.

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q10. Implement real-time form validation in JavaScript checking if password and confirm password fields match before submission.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 3 - Q10</title>
</head>
<body>
<form id="f">
  <input type="password" id="p1" placeholder="Password"><br>
  <input type="password" id="p2" placeholder="Confirm password">
  <span id="msg"></span><br>
  <button>Submit</button>
</form>
<script>
  const p1 = document.getElementById("p1"), p2 = document.getElementById("p2"), msg = document.getElementById("msg");
  p2.addEventListener("input", () => {
    msg.textContent = p1.value === p2.value ? "Match" : "Do not match";
    msg.style.color = p1.value === p2.value ? "green" : "red";
  });
  document.getElementById("f").addEventListener("submit", e => {
    if (p1.value !== p2.value) { e.preventDefault(); alert("Passwords do not match!"); }
  });
</script>
</body>
</html>
```
