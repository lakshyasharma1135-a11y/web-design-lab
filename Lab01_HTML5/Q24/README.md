# Lab: Lab Sheet 1: HTML5 — Q24

**Question:** Build a feedback form that includes a multi-line text input area (<textarea>) for comments and a file upload input type (<input type="file">).

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q24. Build a feedback form that includes a multi-line text input area (<textarea>) for comments and a file upload input type (<input type="file">).

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 1 - Q24</title>
</head>
<body>
<form action="#" method="post" enctype="multipart/form-data">
  <label for="cm">Comments:</label><br>
  <textarea id="cm" name="comments" rows="5" cols="40"></textarea><br><br>
  <label for="fl">Attach file:</label>
  <input type="file" id="fl" name="attachment"><br><br>
  <input type="submit" value="Send Feedback">
</form>
</body>
</html>
```
