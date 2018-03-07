<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label for="s" class="assistive-text"><?php _e( ''); ?></label>
		<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Buscar', 'twentyeleven' ); ?>" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'twentyeleven' ); ?>" />
		<!--<button class="buttonSearch" type="submit" id="searchsubmit"><i class="fa fa-search" aria-hidden="true"></i></button>-->
</form>
