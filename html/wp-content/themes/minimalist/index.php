<?php get_header(); ?>

<main class="index">
  <div class="index-container">
    <div class="post-list">
      <?php 
        if(have_posts()): while(have_posts()): the_post(); 
      ?>
        <a href="<?php the_permalink(); ?>" class="post">
            <h3 class="post__title"><?php the_title() ; ?></h3>
            <time class="post__time" datetime="<?php the_time('Y-m-d'); ?>">
              <?php the_time('Y.m.d'); ?>
            </time>
            <div class="post__categories">
              <?php 
                $categories = get_the_category();
                foreach($categories as $category) {
                  echo '<span class="category-tag">' . $category->name . '</span>';
                };
              ?>
            </div>
        </a>
        
      <?php endwhile; endif; ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>