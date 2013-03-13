		</div>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/khornschemeier.js"></script>
		<?php if(isset($js_includes) && !empty($js_includes)) { echo $js_includes; } ?>
		<script>
			$(document).ready(function() {
				kh.select.bindNavChange();
				<?php if(isset($js) && !empty($js)) { echo $js; } ?>
			});
		</script>
	</body>
</html>