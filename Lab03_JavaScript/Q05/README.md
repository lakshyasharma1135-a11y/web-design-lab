# Lab: Lab Sheet 3: JavaScript — Q05

**Question:** Write a JavaScript function that takes a string as input, reverses it, and checks if it is a palindrome.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).
- 2. Follow the on-page prompts/buttons. For console output, press **F12 → Console**.

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q5. Write a JavaScript function that takes a string as input, reverses it, and checks if it is a palindrome.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 3 - Q5</title>
</head>
<body>
<script>
  function check(s) {
    let rev = s.split("").reverse().join("");
    let clean = s.toLowerCase().replace(/[^a-z0-9]/g, "");
    let isPal = clean === clean.split("").reverse().join("");
    return `Reversed: ${rev} | ${isPal ? "Palindrome" : "Not a palindrome"}`;
  }
  document.write(check(prompt("Enter a string:")));
</script>
</body>
</html>
```
