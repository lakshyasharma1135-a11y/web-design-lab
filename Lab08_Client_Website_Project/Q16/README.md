# Lab: Lab Sheet 8: Client Website Project — Q16

**Question:** Implement SEO meta tags (title, description, Open Graph tags) across all pages of the client website.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).

## Expected output
A small page appears. SEO/Open Graph metadata is in the document head; replace placeholder domain, image URL, and author before publishing.

## Answer

## Q16. Implement SEO meta tags (title, description, Open Graph tags) across all pages of the client website.

```html
<head>
  <title>Crumb &amp; Co. | Artisan Bakery in Roorkee</title>
  <meta name="description" content="Fresh sourdough, custom cakes and cookies baked daily in Roorkee. Book a table online.">
  <meta name="keywords" content="bakery, cakes, bread, Roorkee">
  <meta name="author" content="Your Name">
  <link rel="canonical" href="https://example.com/">

  <!-- Open Graph (social share preview) -->
  <meta property="og:title" content="Crumb &amp; Co. | Artisan Bakery">
  <meta property="og:description" content="Fresh bread and custom cakes baked daily.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://example.com/">
  <meta property="og:image" content="https://example.com/images/hero1.jpg">
  <meta name="twitter:card" content="summary_large_image">
</head>
```
