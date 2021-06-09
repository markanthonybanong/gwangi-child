<?php
/**
 * Template Name: Membership Checkout
 */
get_header();
?>
<div class="active-aupair-parent-container">
    <div class="active-aupair-container">
        <?php echo do_shortcode( '[pmpro_checkout]' ); ?>
    </div>
</div>
<?php get_footer();?>