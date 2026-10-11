# Lab: Lab Sheet 3: JavaScript — Q17

**Question:** Write a JavaScript function that counts the occurrences of vowels in a given paragraph string.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).
- 2. Follow the on-page prompts/buttons. For console output, press **F12 → Console**.

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q17. Write a JavaScript function that counts the occurrences of vowels in a given paragraph string.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 3 - Q17</title>
</head>
<body>
<script>
  function countVowels(text) {
    const m = text.match(/[aeiou]/gi);
    return m ? m.length : 0;
  }
  console.log(countVowels("JavaScript is a wonderful language"));
</script>
</body>
</html>
```
