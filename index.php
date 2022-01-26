<?php
    get_header();

    $args = [
        'header-menu' => ( 'header menu' ),
        'link_before' => ( ''),
        'link_after' => ( '' ),
        'menu' => ('navbar'),
        '.menu-item' => ('navbarMenu'), '.menu-item-has-children' => ('page-item-29, page-item-33, page-item-24')
    ];
    
?>

<?php


if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>

    <h2><?php the_title() ?></h2>
    <?php the_content() ?>
    <a href="<?php the_permalink()?>">Lees Meer</a>
    <hr>

    <?php endwhile;

else :
    echo '<p> there are no posts!</p>';

endif;

    get_footer();

?>
<?php echo do_shortcode('[sp_wpcarousel id="189"]'); ?>