<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL - Create user</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
		.header {
			background: #003366;
		}
		button[name=register_btn] {
			background: #003366;
		}
	</style>
</head>
<body>
	<div class="header">
		<h2>Admin - create our service</h2>
	</div>
	
	<form method="post" action="service_content.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Title</label>
			<input type="text" name="title" value="<?php echo $title; ?>">
		</div>
		
		<div class="input-group">
			<label>Image</label>
			<input type="text" name="image" value="<?php echo $image; ?>">
		</div>

		<div class="input-group">
			<label>Content_text</label>
			<textarea name="content_text" value="<?php echo $content_text; ?>">
				
			</textarea>
		</div>
		
		<div class="input-group">
			<button type="submit" class="btn" name="service_btn"> + Service Update</button>
		</div>
	</form>
</body>
</html>