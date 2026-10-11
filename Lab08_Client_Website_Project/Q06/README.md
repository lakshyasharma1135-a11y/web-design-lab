# Lab: Lab Sheet 8: Client Website Project — Q06

**Question:** Create an interactive hero carousel showcasing client products and services using JavaScript and CSS transitions.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).
- 2. Follow the on-page prompts/buttons. For console output, press **F12 → Console**.

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q6. Create an interactive hero carousel showcasing client products and services using JavaScript and CSS transitions.

```html
<section id="hero" aria-label="Featured products">
  <div class="slides">
    <div class="slide active"><img src="images/hero1.jpg" alt="Fresh croissants"><p>Flaky croissants, baked at dawn</p></div>
    <div class="slide"><img src="images/hero2.jpg" alt="Decorated birthday cake"><p>Custom cakes for every occasion</p></div>
    <div class="slide"><img src="images/hero3.jpg" alt="Assorted cookies"><p>Cookies made with real butter</p></div>
  </div>
  <button id="prev" aria-label="Previous slide">&lsaquo;</button>
  <button id="next" aria-label="Next slide">&rsaquo;</button>
</section>
```

```css
#hero{position:relative;overflow:hidden;padding:0}
.slide{position:absolute;inset:0;opacity:0;transition:opacity .8s ease}
.slide.active{position:relative;opacity:1}
.slide img{width:100%;height:60vh;object-fit:cover}
.slide p{position:absolute;bottom:20px;left:20px;color:#fff;background:rgba(0,0,0,.5);padding:8px 14px}
#hero button{position:absolute;top:50%;transform:translateY(-50%);background:rgba(0,0,0,.5);color:#fff;border:0;font-size:2rem;padding:6px 14px}
#prev{left:10px} #next{right:10px}
```

**File: `js/main.js`**

```javascript
const slides = document.querySelectorAll(".slide");
let cur = 0;
function show(n) {
  slides[cur].classList.remove("active");
  cur = (n + slides.length) % slides.length;
  slides[cur].classList.add("active");
}
document.getElementById("next").onclick = () => show(cur + 1);
document.getElementById("prev").onclick = () => show(cur - 1);
setInterval(() => show(cur + 1), 5000);          // auto slide
```
