		<div class="sidebar">
			<h1 class="sidebar__header"><?php bloginfo( 'name' ) ?></h1>
				<?php if ( has_nav_menu( 'primary' ) ) : ?>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'nav', 'container_class' => 'sidebar', 'menu_class' => 'sidebar__nav', 'menu_id' => '' ) ); ?>
				<?php endif; ?>
		</div>
