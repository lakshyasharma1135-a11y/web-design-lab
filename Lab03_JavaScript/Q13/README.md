# Lab: Lab Sheet 3: JavaScript — Q13

**Question:** Write a JavaScript program implementing closure to maintain a private counter variable with increment and decrement methods.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).
- 2. Follow the on-page prompts/buttons. For console output, press **F12 → Console**.

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q13. Write a JavaScript program implementing closure to maintain a private counter variable with increment and decrement methods.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 3 - Q13</title>
</head>
<body>
<script>
  function createCounter() {
    let count = 0;                      // private variable
    return {
      increment: () => ++count,
      decrement: () => --count,
      value: () => count
    };
  }
  const c = createCounter();
  c.increment(); c.increment(); c.decrement();
  console.log(c.value());               // 1
  console.log(c.count);                 // undefined (not accessible from outside)
</script>
</body>
</html>
```
