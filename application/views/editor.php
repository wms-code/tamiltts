<h1>Welcome</h1>

<div class="well">
	<p>Add your awesome content here!</p>
	<form method="post">
	<div><textarea name="tamil"cols="30" rows="4"></textarea></div>
	<div><input type="submit" /></div>
	</form>
	<?php echo $tamil; ?>
	<br />
	<pre>

	<?php print_r($txtbyline); ?>
	<br />
	
	<?php print_r($txtbyword); ?>
	</pre>


	<p><?php echo anchor('admin', 'Admin dashboard') ?></p>
</div>