# Lab: Lab Sheet 8: Client Website Project — Q09

**Question:** Add social media integration feeds and sharing buttons within the website footer.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).

## Expected output
Styled social and sharing links appear. Replace example.com and social destinations with the actual project URLs before publishing.

## Answer

## Q9. Add social media integration feeds and sharing buttons within the website footer.

```html
<div class="social" aria-label="Follow us">
  <a href="https://www.instagram.com/yourpage" target="_blank" rel="noopener">Instagram</a>
  <a href="https://www.facebook.com/yourpage" target="_blank" rel="noopener">Facebook</a>
  <a href="https://twitter.com/yourpage" target="_blank" rel="noopener">X</a>
</div>
<p>Share this page:
  <a href="https://www.facebook.com/sharer/sharer.php?u=https://example.com" target="_blank" rel="noopener">Facebook</a> |
  <a href="https://twitter.com/intent/tweet?url=https://example.com&text=Crumb%20%26%20Co." target="_blank" rel="noopener">X</a> |
  <a href="https://wa.me/?text=Check%20out%20Crumb%20%26%20Co.%20https://example.com" target="_blank" rel="noopener">WhatsApp</a>
</p>
```
