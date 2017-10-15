<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>
<div class="site-branding">
	<div class="wrap">
		<?php
        the_custom_logo();
        the_custom_header_banner();
		?>
        <div id="top">
            <div class="topTime">
                <?php echo date("l F d, Y", time())?>
            </div>
            <div class="topNewsletter">
                <a href="https://www.tcbconference.com/cyber-advisory-board">Get Our NEWSLETTER</a>
            </div>
	    </div><!-- #top -->
	</div><!-- .wrap -->
</div><!-- .site-branding -->
