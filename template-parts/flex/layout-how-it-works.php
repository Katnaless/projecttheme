<?php
$title           = get_sub_field('title');
$intro           = get_sub_field('intro');
$steps           = get_sub_field('steps') ?: [];
$community_title = get_sub_field('community_title');
$stat_1_number   = get_sub_field('stat_1_number');
$stat_1_label    = get_sub_field('stat_1_label');
$stat_2_number   = get_sub_field('stat_2_number');
$stat_2_label    = get_sub_field('stat_2_label');
$cta             = get_sub_field('cta');
?>
<div class="how-it-works-content">
  <?php if ($title): ?>
    <h2 class="how-it-works-title"><?php echo esc_html($title); ?></h2>
  <?php endif; ?>

  <?php if ($intro): ?>
    <p class="how-it-works-intro"><?php echo esc_html($intro); ?></p>
  <?php endif; ?>

  <div class="how-it-works-grid">
    <?php if ($steps): ?>
      <ol class="how-it-works-steps">
        <?php foreach ($steps as $index => $step): ?>
          <li class="how-it-works-step">
            <span class="how-it-works-step-number"><?php echo esc_html($index + 1); ?></span>
            <div class="how-it-works-step-card">
              <?php if (!empty($step['title'])): ?>
                <h3><?php echo esc_html($step['title']); ?></h3>
              <?php endif; ?>
              <?php if (!empty($step['text'])): ?>
                <p><?php echo esc_html($step['text']); ?></p>
              <?php endif; ?>
            </div>
          </li>
        <?php endforeach; ?>
      </ol>
    <?php endif; ?>

    <div class="community-card how-it-works-community">
      <?php if ($community_title): ?>
        <h2 class="community-title"><?php echo esc_html($community_title); ?></h2>
      <?php endif; ?>

      <div class="community-stats">
        <div class="stat-box">
          <?php if ($stat_1_number): ?><span class="stat-number"><?php echo esc_html($stat_1_number); ?></span><?php endif; ?>
          <?php if ($stat_1_label): ?><span class="stat-label"><?php echo esc_html($stat_1_label); ?></span><?php endif; ?>
        </div>
        <div class="stat-box">
          <?php if ($stat_2_number): ?><span class="stat-number"><?php echo esc_html($stat_2_number); ?></span><?php endif; ?>
          <?php if ($stat_2_label): ?><span class="stat-label"><?php echo esc_html($stat_2_label); ?></span><?php endif; ?>
        </div>
      </div>

      <?php if (is_array($cta) && !empty($cta['url']) && !empty($cta['title'])): ?>
        <div class="community-cta">
          <a class="btn-primary" href="<?php echo esc_url($cta['url']); ?>" target="<?php echo esc_attr(!empty($cta['target']) ? $cta['target'] : '_self'); ?>">
            <?php echo esc_html($cta['title']); ?>
          </a>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
