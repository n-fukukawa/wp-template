<?php get_header(); ?>

<main class="page">
  <div class="page-container">
    <?php 
      if(have_posts()): 
        while(have_posts()): the_post(); 
    ?>
      <h2>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h2>
  
        <p><?php the_category(', '); ?></p>
        <p><?php the_content(); ?></p>
    <?php endwhile; endif; ?>
  </div>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>