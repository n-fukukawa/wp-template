<?php get_header(); ?>

<main class="single">
  <div class="single-container">
    <?php 
      if(have_posts()): while(have_posts()): the_post(); 
    ?>
      <article class="article">
        <h2 class="article__title">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <div class="article__info">
          <time class="article__time" datetime="<?php the_time('Y-m-d'); ?>">
            <?php the_time('Y.m.d'); ?>
          </time>
        </div>
        <div class="article__categories">
          <?php 
            $categories = get_the_category();
            foreach($categories as $category) {
              echo '<span class="category-tag">' . $category->name . '</span>';
            };
          ?>
        </div>
        <div class="article__body">
          <?php the_content('続きを読む');?>
        </div>
      </article>
    <?php endwhile; endif; ?>
  
    <?php previous_post_link('%link', '前の投稿へ'); ?>
    <?php next_post_link('%link', '次の投稿へ'); ?>
  </div>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>