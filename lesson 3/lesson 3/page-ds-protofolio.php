<?php get_header();?>

<h1> About ds protofolio test test </h1>

<?php if (have_post()): while (have_posts()) : the_post(); ?>
<?php the_content(); ?>

<?php endwhile; endif;?>

<?php get_footer();?>