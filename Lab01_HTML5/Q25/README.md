# Lab: Lab Sheet 1: HTML5 — Q25

**Question:** Design a structured survey form that groups related fields using <fieldset> and <legend> tags.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q25. Design a structured survey form that groups related fields using <fieldset> and <legend> tags.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 1 - Q25</title>
</head>
<body>
<form>
  <fieldset>
    <legend>Personal Information</legend>
    <label>Name: <input type="text" name="name"></label><br>
    <label>Age: <input type="number" name="age"></label>
  </fieldset>
  <fieldset>
    <legend>Course Feedback</legend>
    <p>Rating:
      <label><input type="radio" name="rate" value="1"> 1</label>
      <label><input type="radio" name="rate" value="3"> 3</label>
      <label><input type="radio" name="rate" value="5"> 5</label>
    </p>
    <textarea name="suggestion" rows="3" cols="30"></textarea>
  </fieldset>
  <input type="submit" value="Submit Survey">
</form>
</body>
</html>
```
