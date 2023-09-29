<?php get_header(); ?>

<main>
  <div class="page-container container archive-page">

    <!-- Archive content -->
    <?php
      // Archive title
      the_archive_title( '<h1 class="archive-title">', '</h1>' );
    ?>

    <div class="post-list">

    <?php
      // Start loop
      if( have_posts() ) :
        while( have_posts() ) : the_post();
    ?>

    <article class="post-list-item">

      <!-- Post title -->
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

      <!-- Post thumbnail -->
      <div class="post-thumbnail">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
      </div>

      <!-- Meta info -->
      <div class="meta-info">
          <p>Posted by: <?php the_author_posts_link(); ?> on <?php echo get_the_date(); ?></p>
          <!-- <p>Categories: <?php the_category( ', ' ); ?></p> -->
        </div>

      <!-- Content -->
      <?php the_excerpt(); ?> <a href="<?php the_permalink(); ?>" class="post-list-readmore">Read More »</a>

    </article>

    <!-- End the while loop -->
    <?php endwhile; ?>

    <!-- Page pagination -->
    <div class="cloud-peak-pagination">
      <div class="left"><?php previous_posts_link( '<< Newer posts' ); ?></div>
      <div class="right"><?php next_posts_link( 'Older Posts >>' ) ?></div>
    </div>

    <!-- If nothing to show -->
    <?php else: ?>
    <p>Nothing to show at the moment, please return soon!</p>

    <!-- End if block for the main loop -->
    <?php endif; ?>

    </div>
  </div>
</main>

<?php get_footer(); ?>