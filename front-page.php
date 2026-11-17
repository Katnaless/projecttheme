<?php get_header(); ?>

<main id="primary" class="site-main">

  <!-- Hero & How it works -->
   
<section class="community-section">
  <div class="community-card">
    <h2 class="community-title">
      <?php echo esc_html( get_field('title') ?: 'Join The Community' ); ?>
    </h2>

    <div class="community-stats">
      <div class="stat-box">
        <span class="stat-number"><?php echo esc_html( get_field('stat_1_number') ?: '600+' ); ?></span>
        <span class="stat-label"><?php echo esc_html( get_field('stat_1_label') ?: 'Books available for a swap' ); ?></span>
      </div>

      <div class="stat-box">
        <span class="stat-number"><?php echo esc_html( get_field('stat_2_number') ?: '300+' ); ?></span>
        <span class="stat-label"><?php echo esc_html( get_field('stat_2_label') ?: 'Members to swap with' ); ?></span>
      </div>
    </div>

    <div class="community-cta">
      <?php $cta_url = get_field('cta_link') ?: home_url('/register'); ?>
      <a href="<?php echo esc_url($cta_url); ?>" class="btn-primary">
        <?php echo esc_html( get_field('cta_text') ?: 'Register Now!' ); ?>
      </a>
    </div>
  </div>
</section>

  <!-- POPULAR THIS MONTH  -->
  <section class="popular-books-section">
    <div class="container">
      <h2 class="popular-title">Popular this month</h2>

      <?php if( have_rows('book_list', 'option') ): ?>
        <div class="books-grid">
          <?php 
          $count = 0; 
          while( have_rows('book_list', 'option') ): the_row(); 
            if( $count >= 5 ) break;

            $cover = get_sub_field('book_cover');
            $title = get_sub_field('book_title');
            $author = get_sub_field('book_author');
          ?>
            
            <div class="book-card">
              <?php if( $cover ): ?>
                <div class="book-cover-wrapper">
                  <img src="<?php echo esc_url($cover['url']); ?>" alt="<?php echo esc_attr($title); ?>">
                </div>
              <?php endif; ?>
              
              <h3 class="book-title"><?php echo esc_html($title); ?></h3>
              <p class="book-author"><?php echo esc_html($author); ?></p>
            </div>

          <?php 
            $count++; 
          endwhile; 
          ?>
        </div>
      <?php endif; ?>

      <div class="popular-cta">
  <a href="<?php echo home_url('/explore'); ?>" class="btn-primary">Browse More</a>
</div>
    </div>
  </section>

</main>

<?php get_footer(); ?>