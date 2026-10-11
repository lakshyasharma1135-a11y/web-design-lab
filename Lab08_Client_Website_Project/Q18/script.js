// Static stars
document.querySelectorAll(".stars").forEach(s => {
  const r = +s.dataset.r; s.textContent = "\u2605".repeat(r) + "\u2606".repeat(5 - r);
});
// Interactive rating
const box = document.getElementById("rate");
for (let i = 1; i <= 5; i++) {
  const b = document.createElement("button");
  b.className = "star"; b.textContent = "\u2605"; b.setAttribute("aria-label", i + " star");
  b.onmouseover = () => paint(i);
  b.onmouseout  = () => paint(+box.dataset.val || 0);
  b.onclick = () => { box.dataset.val = i; paint(i); document.getElementById("rmsg").textContent = `You rated us ${i}/5. Thank you!`; };
  box.appendChild(b);
}
function paint(n) { [...box.children].forEach((b, i) => b.classList.toggle("on", i < n)); }
