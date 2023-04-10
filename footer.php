<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
                <?php wp_nav_menu( [
                    'theme_location' => 'bot',
                    'container' => '',
                    'items_wrap' => '%3$s',
                ] )?>
					<span class="accent-color">&copy; </span> <?php bloginfo( "name" ); ?>, 2021
				</div>
			</div>
		</div>
	</div>
	<?php wp_footer();?>
</body>

</html>