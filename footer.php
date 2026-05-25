<!--footer-->
<footer>
  <div class="container">
    <div class="text-center mt-3">
      <div class="social-icons mb-3">
        <a href="https://www.facebook.com/dhiartspace" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/dhiartspacehyderabad/" target="_blank"><i class="bi bi-instagram"></i></a>
        <!-- <a href="https://x.com/Dhi_Artspace"><i class="bi bi-twitter-x" target="_blank"></i></a> -->
        <a href="https://www.linkedin.com/company/dhi-artspace-gallery/" target="_blank"><i class="bi bi-linkedin"></i></a>
        <a href="mailto:contact@dhiart.com" target="_blank"><i class="bi bi-envelope"></i></a>
        <a href="https://maps.app.goo.gl/WSrFJeKoDi2u6AiB6" target="_blank"><i class="bi bi-geo-alt"></i></a>
        <a href="https://wa.me/918096663907" target="_blank" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
      </div>
      <p id="copy" class="fw-bold mb-0">&copy; 2026 Dhi Artspace</p>
    </div>
  </div>
</footer>
<script>
const galleryModal = document.getElementById('galleryModal');
if (galleryModal) {
  galleryModal.addEventListener('show.bs.modal', function (event) {
    const button = event.relatedTarget;
    if (!button) return;

    const slideIndex = button.getAttribute('data-bs-slide-to');
    const modalCarousel = document.querySelector('#modalCarousel');
    if (!modalCarousel) return;

    const carousel = bootstrap.Carousel.getOrCreateInstance(modalCarousel);
    carousel.to(slideIndex);
  });
}
</script>
</body>
</html>
