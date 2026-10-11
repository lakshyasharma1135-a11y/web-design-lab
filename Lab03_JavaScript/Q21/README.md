# Lab: Lab Sheet 3: JavaScript — Q21

**Question:** Write a JavaScript program demonstrating callback functions and asynchronous behavior using setTimeout.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).
- 2. Follow the on-page prompts/buttons. For console output, press **F12 → Console**.

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q21. Write a JavaScript program demonstrating callback functions and asynchronous behavior using setTimeout.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 3 - Q21</title>
</head>
<body>
<script>
  function greet(name, callback) {
    console.log("Hello " + name);
    callback();
  }
  greet("Amit", () => console.log("Callback executed"));

  console.log("Start");
  setTimeout(() => console.log("Runs after 2 seconds"), 2000);
  console.log("End");
  // Output order: Start, End, (after 2 sec) Runs after 2 seconds
</script>
</body>
</html>
```
