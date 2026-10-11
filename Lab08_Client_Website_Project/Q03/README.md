# Lab: Lab Sheet 8: Client Website Project — Q03

**Question:** Develop a fully responsive CSS layout using CSS Grid and Flexbox adhering to mobile-first design principles.

## Run / view the answer
- This is a stylesheet; link it from the related HTML file using `<link rel="stylesheet" href="style.css">`.

## Expected output
The stylesheet changes the appearance only when linked to the related HTML page; open that page in a browser to see the visual result.

## Answer

## Q3. Develop a fully responsive CSS layout using CSS Grid and Flexbox adhering to mobile-first design principles.

**File: `css/style.css`**

```css
/* Mobile-first: base styles for small screens */
*{box-sizing:border-box}
body{margin:0;font-family:"Segoe UI",Arial,sans-serif;line-height:1.6;color:#3b2f2f;background:#fffaf3}
header{display:flex;flex-direction:column;align-items:center;gap:8px;padding:12px;background:#6b3e26}
nav ul{display:flex;flex-wrap:wrap;gap:14px;list-style:none;margin:0;padding:0}
section{padding:24px 16px}
#menu{display:grid;grid-template-columns:1fr;gap:16px}
img{max-width:100%;height:auto}

/* Tablet */
@media (min-width:600px){ #menu{grid-template-columns:repeat(2,1fr)} }
/* Desktop */
@media (min-width:992px){
  header{flex-direction:row;justify-content:space-between;padding:12px 40px}
  #menu{grid-template-columns:repeat(3,1fr)}
  section{padding:48px 40px}
}
```
