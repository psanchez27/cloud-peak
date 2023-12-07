<?php get_header(); ?>

<main>
  <div class="page-container blog-page">

    <h1><?php wp_title( '' ); ?></h1>

  <div class="post-list">

  <?php
      if( have_posts() ) :
        while( have_posts() ) : the_post();
    ?>

    <!-- Individual article -->
    <article class="post-list-item">

      <!-- Article title -->
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

      <!-- Article thumbnail -->
      <div class="post-thumbnail">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
      </div>

      <!-- Article meta info -->
      <div class="meta-info">
        <p>Posted by: <?php the_author_posts_link(); ?> on <?php echo get_the_date(); ?></p>
        <!-- <p>Categories: <?php the_category( ', ' ); ?></p> -->
      </div>

      <!-- Content -->
      <?php the_excerpt(); ?> <a href="<?php the_permalink(); ?>" class="post-list-readmore">Read More »</a>

    </article>

    <!-- End the while loop for posts query -->
    <?php endwhile; ?>

    </div>

    <!-- Pagination -->
    <div class="cloud-peak-pagination">
      <div class="left"><?php previous_posts_link( '<< Newer posts' ); ?></div>
      <div class="right"><?php next_posts_link( 'Older posts >>' ) ?></div>
    </div>

    <!-- Else block for if statement that started the loop -->
    <?php else: ?>
    <p>No posts at the moment, please return soon.</p>

    <!-- End if the block that started the main loop -->
    <?php endif; ?>


    

  </div>
</main>

<?php get_footer(); ?>