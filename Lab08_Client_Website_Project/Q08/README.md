# Lab: Lab Sheet 8: Client Website Project — Q08

**Question:** Implement Google Maps embedding and responsive styling on the client's contact page.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).

## Expected output
An embedded Google Maps view centred on Roorkee should appear when internet access is available. Replace the query with the client's exact location for the final project.

## Answer

## Q8. Implement Google Maps embedding and responsive styling on the client's contact page.

```html
<div class="map">
  <iframe src="PASTE_GOOGLE_MAPS_EMBED_URL_HERE"
          title="Crumb & Co. location on Google Maps" loading="lazy" allowfullscreen
          referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
```

```css
.map{position:relative;width:100%;padding-bottom:56.25%;height:0;overflow:hidden}   /* 16:9 */
.map iframe{position:absolute;inset:0;width:100%;height:100%;border:0}
```
