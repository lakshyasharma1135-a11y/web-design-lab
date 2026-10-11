# Lab: Lab Sheet 3: JavaScript — Q07

**Question:** Write a JavaScript program implementing a custom object representing a student with properties and methods, demonstrating this keyword usage.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).
- 2. Follow the on-page prompts/buttons. For console output, press **F12 → Console**.

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q7. Write a JavaScript program implementing a custom object representing a student with properties and methods, demonstrating this keyword usage.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 3 - Q7</title>
</head>
<body>
<script>
  const student = {
    name: "Amit", roll: 101, marks: [80, 75, 90],
    average() { return this.marks.reduce((s, m) => s + m, 0) / this.marks.length; },
    show() { return `${this.name} (${this.roll}) average: ${this.average().toFixed(2)}`; }
  };
  console.log(student.show());
</script>
</body>
</html>
```
