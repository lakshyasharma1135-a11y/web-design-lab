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
