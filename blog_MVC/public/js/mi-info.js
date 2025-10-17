// --- Script del Lightbox ---
const lightbox = document.getElementById("lightbox");
const lightboxImg = document.getElementById("lightboxImg");
const closeBtn = document.getElementById("lightboxClose");

document.querySelectorAll(".zoomable").forEach((img) => {
    img.addEventListener("click", () => {
        lightbox.classList.add("open");
        lightboxImg.src = img.src;
        lightboxImg.alt = img.alt;
    });
});

closeBtn.addEventListener("click", () => {
    lightbox.classList.remove("open");
});

lightbox.addEventListener("click", (e) => {
    if (e.target === lightbox) lightbox.classList.remove("open");
});
