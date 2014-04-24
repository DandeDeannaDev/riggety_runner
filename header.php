<?php include('variables.php'); ?>

<div id="header">
<img border="0" src=" 5k_funrun_logo_200x200.jpg" alt="Fun Run" width="150" height="200" align= "RIGHT">


	<h2><?php echo $heading ?>
	
</h2>

	<script language="javascript" type="text/javascript" >
function jumpto(x){

if (document.form1.jumpmenu.value != "null") {
	if (document.form1.jumpmenu.value != "view.php") {
		
		}
	document.location.href = x
	}
}
</script>
<form name="form1">
<select name="jumpmenu"
onChange="jumpto(document.form1.jumpmenu.options[document.form1.jumpmenu.options.selectedIndex].value)">
<option>Race Options</option>
<option value="view.php"">View Runners</option>
<option value="insert.php">Add Runner</option>
<option value="delete.php">Delete Runner</option>
<option value="update.php">Edit Runner</option>
<option value="http://www.great-workout.com">Great Workout</option>
</select>
</form>
</div> <!-- end #header -->
