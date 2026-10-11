# Lab: Lab Sheet 8: Client Website Project — Q04

**Question:** Incorporate modern web design principles including consistent color palettes, typography scales, and white space management.

## Run / view the answer
- This is a stylesheet; link it from the related HTML file using `<link rel="stylesheet" href="style.css">`.

## Expected output
The stylesheet changes the appearance only when linked to the related HTML page; open that page in a browser to see the visual result.

## Answer

## Q4. Incorporate modern web design principles including consistent color palettes, typography scales, and white space management.

```css
:root{
  /* Colour palette (60-30-10): cream, brown, orange */
  --bg:#fffaf3; --brand:#6b3e26; --accent:#e07a1f; --text:#3b2f2f;
  /* Typography scale (ratio ~1.25) */
  --fs-sm:.875rem; --fs-base:1rem; --fs-md:1.25rem; --fs-lg:1.563rem; --fs-xl:1.953rem; --fs-xxl:2.441rem;
  /* Spacing scale */
  --sp-1:.5rem; --sp-2:1rem; --sp-3:1.5rem; --sp-4:3rem;
}
h1{font-size:var(--fs-xxl)} h2{font-size:var(--fs-xl)} h3{font-size:var(--fs-lg)} p{font-size:var(--fs-base)}
h1,h2,h3{font-family:Georgia,serif;color:var(--brand);line-height:1.2}
section{padding:var(--sp-4) var(--sp-2)}
.btn{background:var(--accent);color:#fff;padding:var(--sp-1) var(--sp-3);border-radius:6px;text-decoration:none}
```
