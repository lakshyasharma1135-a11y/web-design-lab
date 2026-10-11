# Lab: Lab Sheet 3: JavaScript — Q06

**Question:** Implement an array manipulation script in JavaScript that adds, removes, sorts, and filters elements using built-in array methods (push, pop, map, filter).

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).
- 2. Follow the on-page prompts/buttons. For console output, press **F12 → Console**.

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q6. Implement an array manipulation script in JavaScript that adds, removes, sorts, and filters elements using built-in array methods (push, pop, map, filter).

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 3 - Q6</title>
</head>
<body>
<script>
  let arr = [5, 3, 8, 1];
  arr.push(10);                       // add end
  arr.pop();                          // remove end
  arr.unshift(0);                     // add start
  arr.shift();                        // remove start
  arr.sort((x, y) => x - y);          // sort ascending
  let doubled = arr.map(x => x * 2);
  let evens = arr.filter(x => x % 2 === 0);
  console.log(arr, doubled, evens);
</script>
</body>
</html>
```
