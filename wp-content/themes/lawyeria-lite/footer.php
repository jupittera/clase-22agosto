		<?php
		/**
		 *  The template for displaying Footer.
		 *
		 *  @package lawyeria-lite
		 */
		?>
		<footer id="footer">
			<div class="wrapper cf">
				<div class="footer-margin-left cf">
					<?php
						if ( is_active_sidebar( 'footer-sidebar' ) ) {
							dynamic_sidebar( 'footer-sidebar' );
						} else {
							echo '<div class="footer-box">'.__('Sitio desarrollado para Bootcamp de Desafío Latam').'</div>';
						}
					?>
				</div><!--/div .footer-margin-left .cf-->
			</div><!--/div .wrapper .cf-->
		</footer><!--/footer #footer-->
		<?php wp_footer(); ?>
	</body>
</html>
