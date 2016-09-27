<form method="get" name="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="search">
		<input class="search-input" name="s" type="text" value="<?php echo esc_attr(get_search_query()); ?>"
			placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder' ) ?>"
			title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
		<span class="button-wrapper">
			<input class="button-search" type="submit" value="<?php  echo esc_attr(__('Find', 'moto-juice')); ?>" />
		</span>
	</div>
</form>
