<!-- JQueary -->
<script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
<!-- fontawesome-pro-6.5.1-web -->
<script src="{{ asset('assets/vendor/fontawesome-pro-6.5.1-web/js/all.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<!-- Slider splide JS -->
<script src="{{ asset('assets/vendor/splide/dist/js/splide.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<div id="fb-root"></div>

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v19.0"
    nonce="8oZhtPoQ"></script>
<!-- Local JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>



<script>
document.addEventListener('DOMContentLoaded', () => {
  const toggleBtn = document.getElementById('mobile-nav-toggle');
  const navbar = document.querySelector('.navbar');

  if (!toggleBtn || !navbar) return;

  // Handles toggle open/close
  toggleBtn.addEventListener('click', (e) => {
    e.preventDefault();
    e.stopPropagation();

    navbar.classList.toggle('navbar-mobile');
    document.body.classList.toggle('mobile-nav-active');

    const icon = toggleBtn.querySelector('i');
    if (icon) {
      icon.classList.toggle('bi-list');
      icon.classList.toggle('bi-x');
    }
  });

  // Close when clicking outside drawer
  document.addEventListener('click', (e) => {
    if (
      navbar.classList.contains('navbar-mobile') &&
      !navbar.contains(e.target) &&
      !toggleBtn.contains(e.target)
    ) {
      navbar.classList.remove('navbar-mobile');
      document.body.classList.remove('mobile-nav-active');

      const icon = toggleBtn.querySelector('i');
      if (icon) {
        icon.classList.add('bi-list');
        icon.classList.remove('bi-x');
      }
    }
  });
});
</script>
