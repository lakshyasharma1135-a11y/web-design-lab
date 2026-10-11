# Lab: Lab Sheet 8: Client Website Project — Q10

**Question:** Optimize website assets (compressing images, minifying CSS/JS) for high performance and fast loading speeds.

## Run / view the answer
- This file contains shell/server commands. Read it first and run commands one at a time only in a suitable Linux/Ubuntu lab VM. Do not blindly run commands requiring `sudo`.

## Expected output
The result depends on the Linux/Apache environment. Run commands individually in a lab VM and verify each service or configuration change; do not run privileged commands blindly.

## Answer

## Q10. Optimize website assets (compressing images, minifying CSS/JS) for high performance and fast loading speeds.

```bash
# Images: reduce file size (Ubuntu)
sudo apt install -y imagemagick optipng jpegoptim webp
mogrify -resize 1600x -quality 80 images/*.jpg
jpegoptim --max=80 images/*.jpg
cwebp -q 80 images/hero1.jpg -o images/hero1.webp      # WebP format

# Minify CSS/JS (Node.js)
npx csso-cli css/style.css -o css/style.min.css
npx terser js/main.js -c -m -o js/main.min.js
```
