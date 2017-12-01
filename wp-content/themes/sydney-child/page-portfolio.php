<?php

/* Template Name: Portfolio */

get_header();
query_posts('post_type=portfolio&posts_per_page=6');

?>
<div id="portfolio">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php
            $title= str_ireplace('"', '', trim(get_the_title()));
            $desc= str_ireplace('"', '', trim(get_the_content()));
        ?>
    <div class="col-xs-4"><?php the_post_thumbnail(); ?></div>
    <div class="col-md-5 col-xs-12 portfolio-preview">
      <h2><?=$title?></h2>
      <p><?php print get_the_excerpt(); ?></p>
      <a title="<?=$title?>: <?=$desc?>" rel="lightbox[work]" href="<?php print  portfolio_thumbnail_url($post->ID) ?>" class="btn">More Info</a>
    </div>
    <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
