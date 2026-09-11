
document.addEventListener("DOMContentLoaded", () => {
  const year = document.getElementById("year");
  if (year) year.textContent = new Date().getFullYear();

  const backToTop = document.getElementById("backToTop");
  if (backToTop) {
    window.addEventListener("scroll", () => {
      backToTop.classList.toggle("show", window.scrollY > 500);
    });
    backToTop.addEventListener("click", () => window.scrollTo({ top: 0, behavior: "smooth" }));
  }
});

function copyPageLink() {
  navigator.clipboard.writeText(window.location.href).then(() => {
    Swal.fire({
      icon: 'success',
      title: 'Copied!',
      text: 'Link copied successfully.',
      timer: 1500,
      showConfirmButton: false
    });
  });

}
