# Lab: Lab Sheet 1: HTML5 — Q09

**Question:** Build a multi-level nested list representing a university's course structure.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q9. Build a multi-level nested list representing a university's course structure.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 1 - Q9</title>
</head>
<body>
<ul>
  <li>MCA
    <ul>
      <li>Semester 1
        <ul><li>Programming in C</li><li>Data Structures</li></ul>
      </li>
      <li>Semester 2
        <ul><li>Web Technology</li><li>DBMS</li></ul>
      </li>
    </ul>
  </li>
  <li>BCA
    <ul><li>Semester 1</li><li>Semester 2</li></ul>
  </li>
</ul>
</body>
</html>
```
