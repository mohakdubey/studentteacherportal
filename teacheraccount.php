<style>
body
{
background-color:#CD853F;
}
</style>
<?php echo "Select an option to upload"; ?>
<form name="form1" id="form1" action="" method="post" enctype="multipart/form-data">
		<select name="list1" id="list1">
			<option>Course Plan</option>
			<option>Sessional papers(solved)/Marking scheme</option>
			<option>Assignments</option>
			<option>Others</option>
		</select>
		<br>
		<br>
		<br>
		<label for="file">Filename:</label>
		<input type="file" name="file" id="file"><br>
		<input type="submit" name="submit" value="Submit">
		<script for = "list1" event = "onchange"
35               type = "text/javascript">
  		a = Document.Forms( 0 ).list1.Value
  		alert(a);
  		</script>

</form>
