# Lab: Lab Sheet 8: Client Website Project — Q05

**Question:** Implement web accessibility standards (WCAG) including ARIA landmarks, alt text for all images, and sufficient color contrast ratios.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q5. Implement web accessibility standards (WCAG) including ARIA landmarks, alt text for all images, and sufficient color contrast ratios.

```html
<header role="banner"> ... </header>
<nav aria-label="Main navigation"> ... </nav>
<main id="main"> ... </main>
<footer role="contentinfo"> ... </footer>

<img src="images/sourdough.jpg" alt="Golden sourdough loaf on a wooden board">
<img src="images/divider.png" alt="" role="presentation">      <!-- decorative image only -->

<button aria-label="Next slide">&rsaquo;</button>
<label for="phone">Phone</label><input id="phone" type="tel">
```

```css
a:focus, button:focus, input:focus { outline: 3px solid #e07a1f; outline-offset: 2px; }  /* keyboard focus */
.skip { position: absolute; left: -999px; } .skip:focus { left: 8px; top: 8px; background:#fff; padding:6px; }
```
