/* Main js class for site functionality */

var kh = (function() {
	/* object variables and global bindings*/
	$('.knowledge li').prepend('<i class="icon-ok-sign"></i>');
	
	/* object methods */
	return {
		select: {
			bind_nav_change: function() {
				$('nav select').change(function() {
					location = this.options[this.selectedIndex].value;
				});
			}
		}
	}
})();