		</div>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script>
			$(document).ready(function() {
				$('nav select').change(function() {
					location = this.options[this.selectedIndex].value;
				 });
				
				$('.knowledge li').prepend('<i class="icon-ok-sign"></i>');
			});
		</script>
	</body>
</html>