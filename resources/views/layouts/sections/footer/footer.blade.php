<!-- Footer-->
<footer class="content-footer footer bg-footer-theme">
  <div class="{{ (!empty($containerNav) ? $containerNav : 'container-fluid') }}">
    <div class="footer-container d-flex align-items-center justify-content-between py-3 flex-md-row flex-column">
      <div class="text-body mb-2 mb-md-0">
        © <script>
          document.write(new Date().getFullYear())
        </script>
      </div>
      <div  class="d-none d-lg-inline-block">
        <a href="{{"#"}}" class="footer-link me-3" target="_blank">Test</a>
        <a href="{{"#"}}" target="_blank" class="footer-link me-3">Test2</a>
        <a href="{{"#"}}" target="_blank" class="footer-link me-3">Test3</a>
        <a href="{{"#"}}" target="_blank" class="footer-link d-none d-sm-inline-block">Test4</a>
      </div>
    </div>
  </div>
</footer>
<!--/ Footer-->
