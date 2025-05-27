<?php

  get_header();

  while(have_posts()) {
    the_post(); ?>
    
    <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
        <p>DONT FORGET TO REPLACE ME LATER</p>
      </div>
    </div>  
  </div>

  <div class="container container--narrow page-section">

    <?php 
      $theParent = wp_get_post_parent_id();
    ?>
    <?php if( $theParent != 0): ?>
      <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true">

      </i> Back to <?php echo get_the_title($theParent); ?></a> <span class="metabox__main"><?php the_title() ?></span></p>
    </div>
    <?php endif; ?>

    
    
    <?php
      if ($theParent != 0) {
        $findChildrenOf = $theParent;
      } else {
        $findChildrenOf = get_the_ID();  
      }   

      $childPages = get_pages([
        'child_of' => $findChildrenOf,
        'parent' => $findChildrenOf,
        'sort_column' => 'menu_order'
      ]);   

      if (!empty($childPages)) :
    ?>
      <div class="page-links">
        <h2 class="page-links__title">
          <a href="<?php echo get_permalink($theParent); ?>">
            <?php echo get_the_title($theParent); ?>
          </a>
        </h2>
        <ul class="min-list">
          <?php
            wp_list_pages([
              'title_li' => null,
              'child_of' => $findChildrenOf
            ]);
          ?>
        </ul>
      </div>
    <?php endif; ?>

    <div class="generic-content">
      <?php the_content(); ?>
    </div>

  </div>
    
  <?php }

  get_footer();

?>