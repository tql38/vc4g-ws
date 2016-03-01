<?php
get_header();
?>

<?php if ( have_posts() ) : ?>
    <?php
    // Start the loop.
    while ( have_posts() ) : the_post();

        the_content();
        // End the loop.
    endwhile;
else :
    get_template_part( 'template/content', 'none' );

endif;
?>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.akordeon').akordeon();
        });
    </script>
<?php get_footer(); ?>