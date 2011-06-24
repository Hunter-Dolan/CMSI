<div style="width:100%; height:20%;">
<form method="GET">
<textarea name="url" style="width:100%; height:50px;"><?php echo $_GET['url']; ?></textarea>
<input type="submit" value="Submit" />
</div>
</form>

<iframe src="<?php echo $_GET['url']; ?>" style="width:100%; height:70%;"></iframe>