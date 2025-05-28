<?php get_header(); ?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg'); ?>);"></div>
  <div class="page-banner__content container container--narrow">
    
    <h1 class="page-banner__title">
      <?php 
        if (is_category()) {
          single_cat_title();
        } elseif (is_author()) {
          echo 'Posts by '; the_author();
        } elseif (is_tag()) {
          single_tag_title();
        } elseif (is_day()) {
          echo 'Daily Archives: ' . get_the_date();
        } elseif (is_month()) {
          echo 'Monthly Archives: ' . get_the_date('F Y');
        } elseif (is_year()) {
          echo 'Yearly Archives: ' . get_the_date('Y');
        } else {
          the_archive_title();
        }
      ?>
    </h1>

    <div class="page-banner__intro">
      <p>
        <?php 
          if (is_category()) {
            echo category_description();
          } elseif (is_author()) {
            the_author_meta('description');
          } elseif (is_tag()) {
            echo tag_description();
          } elseif (is_day()) {
            echo 'You are viewing all posts from ' . get_the_date() . '.';
          } elseif (is_month()) {
            echo 'You are viewing all posts from ' . get_the_date('F Y') . '.';
          } elseif (is_year()) {
            echo 'You are viewing all posts from the year ' . get_the_date('Y') . '.';
          } else {
            echo 'Browse our latest posts and updates.';
          }
        ?>
      </p>
    </div>
  </div>  
</div>

<div class="container container--narrow page-section">
  <?php 
  while (have_posts()): the_post(); ?>
    <div class="have_post">
      <h2 class="headline headline--medium headline--post-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h2>
      
      <div class="metabox">
        <p>
          Posted by: <?php the_author_posts_link(); ?> 
          on <?php the_time('Y-F-d'); ?> 
          in <?php echo get_the_category_list(', '); ?>
        </p>
      </div>
      
      <div class="generic-content">
        <?php the_excerpt(); ?>
        <p>
          <a class="btn btn--blue" href="<?php the_permalink(); ?>">Continue reading &raquo;</a>
        </p>
      </div> 
    </div>
  <?php 
  endwhile; 

  echo paginate_links(); 
  ?>
</div>

<?php get_footer(); ?>
