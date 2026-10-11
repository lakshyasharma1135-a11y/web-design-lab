# Lab: Lab Sheet 3: JavaScript — Q03

**Question:** Write a script using JavaScript conditional statements (if-else, switch) to determine student grade letter based on numerical marks.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).
- 2. Follow the on-page prompts/buttons. For console output, press **F12 → Console**.

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q3. Write a script using JavaScript conditional statements (if-else, switch) to determine student grade letter based on numerical marks.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 3 - Q3</title>
</head>
<body>
<script>
  let marks = parseInt(prompt("Enter marks (0-100):"));
  // if-else
  let g;
  if (marks >= 90) g = "A+"; else if (marks >= 80) g = "A"; else if (marks >= 70) g = "B";
  else if (marks >= 60) g = "C"; else if (marks >= 40) g = "D"; else g = "F";
  // switch
  let remark;
  switch (g) { case "A+": case "A": remark = "Excellent"; break; case "B": case "C": remark = "Good"; break;
               case "D": remark = "Pass"; break; default: remark = "Fail"; }
  document.write(`Grade: ${g} (${remark})`);
</script>
</body>
</html>
```
