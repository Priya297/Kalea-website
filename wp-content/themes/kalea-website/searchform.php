<form method="get" id="searchform" action="<?php echo home_url('/'); ?>">
	<div>
		<input type="text" id="s" name="s" onblur="if(this.value=='')this.value='<?php _e('Search','conserve'); ?>';" onfocus="if(this.value=='<?php _e('Search','conserve'); ?>')this.value='';" value="<?php _e('Search','conserve'); ?>" />
 		<button class="search-icon"></button>
	</div>
</form>