<?php get_header() ?>
<?php while (have_posts()) : the_post() ?>
    <h1><?php the_title() ?></h1>

    <?php the_content() ?>
    <a href="<?php echo get_permalink(get_option('page_for_posts')) ?>">Voir les dernière actualités</a>

<?php endwhile; ?>


<?php get_footer() ?>