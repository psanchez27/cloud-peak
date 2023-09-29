<?php get_header(); ?>

<main>
  <div class="page-container container post-page">
    <?php
      while( have_posts() ) : the_post();
    ?>

    <!-- Post content -->
    <article id="post-<?php the_id(); ?>" class="<?php post_class(); ?>">
  
      <!-- Post title -->
      <div class="title-container">
        <h1><?php the_title(); ?></h1>
      </div>

      <div class="main-post-content-wrapper">
        <div class="main-post-content">
          <!-- Post Thumbnail -->
        <div class="post-thumbnail">
          <?php the_post_thumbnail( 'large' ); ?>
        </div>

        <!-- Meta info -->
        <div class="meta-info">
          <p>By: <?php the_author_posts_link(); ?> - <?php echo get_the_date(); ?> - <?php the_category( ', ' ); ?></p>
        </div>

        <!-- Content -->
        <?php the_content(); ?>

        <!-- Comment Section -->
        <?php
          if( comments_open() || get_comments_number() ) :
            comments_template();
          endif;
        ?>
        </div>

      <!-- Sidebar -->
      <?php get_sidebar( 'blog-sidebar' ); ?>

      </div>
    </article>

    

    <!-- End the while loop -->
    <?php endwhile; ?>

  </div>

</main>

<?php get_footer(); ?>