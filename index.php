<?php
get_header();
?>
<main>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_content();
        endwhile;
    else :
        echo '<p>' . __('No content found', 'maz-theme') . '</p>';
    endif;
    ?>
</main>
<?php
get_footer();
?>
