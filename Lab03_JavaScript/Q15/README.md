# Lab: Lab Sheet 3: JavaScript — Q15

**Question:** Write a script utilizing arrow functions, template literals, and destructuring assignment syntax (ES6 features).

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).
- 2. Follow the on-page prompts/buttons. For console output, press **F12 → Console**.

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q15. Write a script utilizing arrow functions, template literals, and destructuring assignment syntax (ES6 features).

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 3 - Q15</title>
</head>
<body>
<script>
  const add = (a, b) => a + b;
  const person = { name: "Neha", age: 21, city: "Roorkee" };
  const { name, age } = person;                 // object destructuring
  const [x, y, ...rest] = [1, 2, 3, 4, 5];      // array destructuring
  console.log(`${name} is ${age}. Sum = ${add(x, y)}. Rest = ${rest}`);
</script>
</body>
</html>
```
