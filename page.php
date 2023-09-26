<?php get_header(); ?>

<main>
  <div class="page-container container">
    <div class="page-content-container">
      <?php
      while( have_posts() ) {
        the_post();
      ?>
      <div class="page-content">
        <?php the_content(); ?>
      </div>
      <?php
      }
      ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>