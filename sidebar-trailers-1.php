<?php responsive_widgets_before(); // above widgets container hook ?>
	<div id="trailer_widget" class="grid">
		<?php responsive_widgets(); // above widgets hook ?>

		<?php if( is_active_sidebar( 'sidebar-trailers-1' ) ) : ?>

			<?php dynamic_sidebar( 'sidebar-trailers-1' ); ?>

		<?php endif; ?>

		<?php responsive_widgets_end(); // after widgets hook ?>
	</div><!-- end of #trailer-widget -->
<?php responsive_widgets_after(); // after widgets container hook ?>