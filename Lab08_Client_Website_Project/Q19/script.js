// Show one slide at a time and keep the status text updated.
const slides = Array.from(document.querySelectorAll(".slide"));
const status = document.getElementById("status");
let current = 0;

function show(n) {
  if (slides.length === 0) return;
  current = (n + slides.length) % slides.length;
  slides.forEach((slide, index) => {
    const active = index === current;
    slide.classList.toggle("active", active);
    slide.hidden = !active;
  });
  if (status) status.textContent = `Slide ${current + 1} of ${slides.length}`;
}

document.getElementById("next")?.addEventListener("click", () => show(current + 1));
document.getElementById("prev")?.addEventListener("click", () => show(current - 1));
show(0);
