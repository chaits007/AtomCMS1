<!-- JQuery -->
<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script-->
<script src="js/jquery-1.12.3.min.js"></script>

<!-- JQuery UI -->
<!--script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script-->
<script src="js/jquery-ui.min.js"></script>
		
<!-- Latest compiled and minified JavaScript -->
<!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script-->
<script src="js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script>
	$(document).ready(function(){
		$('#debug-console').hide();
		
		$('#btn-debug').click(function(){
			$('#debug-console').toggle();
		});
	});
</script>