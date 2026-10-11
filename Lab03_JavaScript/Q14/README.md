# Lab: Lab Sheet 3: JavaScript — Q14

**Question:** Implement exception handling in JavaScript using try...catch...finally blocks while parsing a JSON string.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).
- 2. Follow the on-page prompts/buttons. For console output, press **F12 → Console**.

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q14. Implement exception handling in JavaScript using try...catch...finally blocks while parsing a JSON string.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 3 - Q14</title>
</head>
<body>
<script>
  function parse(str) {
    try { const obj = JSON.parse(str); console.log("Parsed:", obj); }
    catch (e) { console.log("Invalid JSON:", e.message); }
    finally { console.log("Parsing attempt finished"); }
  }
  parse('{"name":"Amit","age":22}');   // valid
  parse('{name: Amit}');               // invalid
</script>
</body>
</html>
```
