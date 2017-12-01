<?php
    /*
        Template Name: Single Page Template
    */
    get_header();

    query_posts('post_type=portfolio&posts_per_page=6');
    ?>

    <div id="primary" class="site-content">
        <div id="content" role="main">
          <?php
    // query for the about page
    $your_query = new WP_Query( 'pagename=why-sb' );
    // "loop" through query (even though it's just one page)

    while ( $your_query->have_posts() ) : $your_query->the_post();

    the_content();

    endwhile;
    // reset post data (important!)
    wp_reset_postdata();
?>
<div class="container-fluid portfolio-header" id="clients">
  <div class="row">
    <div class="panel-grid-cell">
    <h3 class="widget-title" style="color: rgb(68, 63, 63);">Clients</h3>
    </div>
    <p class="portfolio-pretext text-center">We work with the following brands and clients</p>
  </div>
</div>
<div class="container-fluid" id="portfolio">
  <div class="row">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php
            $title= str_ireplace('"', '', trim(get_the_title()));
            $desc= str_ireplace('"', '', trim(get_the_content()));
            $postid= get_the_ID();
            $site= get_post_custom_values('projLink');
        ?>
    <div data-name="<?=$postid?>" class="col-md-4 col-sm-4 col-xs-12 portfolio-pane"><?php the_post_thumbnail(); ?></div>
    <div data-id="<?=$postid?>" class="col-md-5 col-sm-4 col-xs-12 portfolio-preview slideLeft">
      <div class="fadeIn">
        <h2><?=$title?></h2>
        <p><?php print get_the_excerpt(); ?></p>
        <a target="_blank" title="<?=$title?>: <?=$desc?>" rel="lightbox[work]" href="<?=$site[0]?>" class="roll-button button-slider">View Website</a>
      </div>
    </div>
    <?php endwhile; endif; ?>
  </div>
</div>
<?php
// query for the about page
$your_query = new WP_Query( 'pagename=contact' );
// "loop" through query (even though it's just one page)

while ( $your_query->have_posts() ) : $your_query->the_post();

the_content();

endwhile;
// reset post data (important!)
wp_reset_postdata();
?>
        </div><!-- #content -->
    </div><!-- #primary -->

<?php get_footer(); ?>
