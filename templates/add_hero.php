<?php /*?><div class="hero">
    <div class="container">
    <div class="feature-bg container"></div> 
        <div class="hero-container">
            <?php the_post_thumbnail(9999,9999, false);?>
        </div>
		<div class="feature-wrapper container"></div> 
    </div> 
</div><?php */?>
<?php if ( is_active_sidebar( 'jumbo' )) : ?>    
	<?php dynamic_sidebar('jumbo'); ?>
<?php endif; ?>