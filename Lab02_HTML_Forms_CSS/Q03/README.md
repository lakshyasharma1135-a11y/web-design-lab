# Lab: Lab Sheet 2: HTML Forms and CSS — Q03

**Question:** Implement a multi-column layout using HTML <frameset> and <frame> tags (Note: legacy support practice), containing a navigation frame, header frame, and content frame.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q3. Implement a multi-column layout using HTML <frameset> and <frame> tags (Note: legacy support practice), containing a navigation frame, header frame, and content frame.

**File: `index.html`**

```html
<html>
<frameset rows="20%,80%">
  <frame src="header.html" name="header">
  <frameset cols="25%,75%">
    <frame src="nav.html" name="nav">
    <frame src="content.html" name="content">
  </frameset>
</frameset>
</html>
```

**File: `header.html`**

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 2 - Q3</title>
</head>
<body>
<h1>My Site</h1>
</body>
</html>
```

**File: `nav.html`**

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 2 - Q3</title>
</head>
<body>
<a href="content.html" target="content">Home</a><br>
<a href="about.html" target="content">About</a>
</body>
</html>
```

**File: `content.html`**

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 2 - Q3</title>
</head>
<body>
<h2>Welcome</h2>
<p>Main content area.</p>
</body>
</html>
```

**File: `about.html`**

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 2 - Q3</title>
</head>
<body>
<h2>About</h2>
<p>About page.</p>
</body>
</html>
```
