<style type="text/css">
		.navbaar ul {
			display: flex;
			margin: 20px;
		}
		.navbaar ul li a{
			margin: 20px;
			text-decoration: none;
			color: black;
		}
	</style>
	<div class="navbaar">
<ul>
			<li><a href="<?php echo $base_url; ?>post/postInsert.php"> Post</a></li>
			<li><a href="<?php echo $base_url; ?>profile.php">profile</a></li>
			<li><a href="<?php echo $base_url; ?>post/myPost.php">my post</a></li>
			<li><a href="<?php echo $base_url; ?>submitUpdate.php?logout=ok">logout</a></li>

		</ul>
	</div>