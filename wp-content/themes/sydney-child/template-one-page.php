<?php
/*

Template Name: One Page

*/
get_header()
?>

<?php
$id = get_the_ID(); // The page id

$sections = get_posts(array('post_type' => 'page', 'post_parent' => $id)); // get all child pages

foreach ($sections as $key => $section):

?>

<section id="page-<?php $section->ID; ?>" <?php post_class('', $section->ID); ?>>
   <h1><?php echo get_the_title($section->ID); ?></h1>
</section>

<?php endforeach; ?>

<?php get_footer() ?>
