<footer>
  <div class="container">
    <div class="footer-content">
      
      <div class="footer-top">
        <nav class="footer-nav">
          <ul class="footer-menu-list">
            <li><a href="<?php echo home_url('/explore'); ?>">Explore</a></li>
            <li><a href="<?php echo home_url('/upload'); ?>">Upload</a></li>
            <li><a href="<?php echo home_url('/about-us'); ?>">About us</a></li>
            <li><a href="<?php echo home_url('/register'); ?>">Register</a></li>
            <li><a href="<?php echo home_url('/login'); ?>">Login</a></li>
          </ul>
        </nav>
      </div>

      <div class="footer-middle">
        <a href="<?php echo home_url(); ?>" class="footer-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/taleswapcolor.svg" alt="TaleSwap">
        </a>
      </div>

      <hr class="footer-divider">

      <div class="footer-bottom">
        <div class="footer-socials">
          <a href="#" aria-label="whatsapp"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp.svg" alt="whatsapp"></a>
          <a href="#" aria-label="youtube"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/youtube.svg" alt="youtube"></a>
          <a href="#" aria-label="instagram"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg" alt="instagram"></a>
          <a href="#" aria-label="facebook"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" alt="facebook"></a>
        </div>
        <div class="footer-email">
          <a href="mailto:taleswap@gmail.com">taleswap@gmail.com</a>
        </div>
      </div>

    </div>
  </div>
</footer>