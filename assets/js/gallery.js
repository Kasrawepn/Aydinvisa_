/* Simple lightbox for the gallery page. */
(function () {
  "use strict";
  const box = document.getElementById("lightbox");
  if (!box) return;
  const img = box.querySelector(".lightbox__img");

  function open(src, alt) {
    img.src = src;
    img.alt = alt || "";
    box.hidden = false;
    document.body.style.overflow = "hidden";
  }
  function close() {
    box.hidden = true;
    img.src = "";
    document.body.style.overflow = "";
  }

  document.addEventListener("click", function (e) {
    const btn = e.target.closest(".gallery-item__btn");
    if (btn) return open(btn.dataset.full, btn.dataset.alt);
    if (!box.hidden && (e.target === box || e.target.closest(".lightbox__close"))) close();
  });
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape" && !box.hidden) close();
  });
})();
