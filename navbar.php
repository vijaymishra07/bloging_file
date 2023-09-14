<style type="text/css">
		*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: sans-serif;
}
section{
	position: relative;
	width: 100%;
	min-height: 20vh;
	display: flex;
	flex-direction: column;
	justify-content: column;
}
header{
	position: relative;
	top: 0;
	width: 100%;
	padding: 30px 30px;
	display: flex;
	align-items: center;
	justify-content: space-between;
	background: #333;
	height: 20px;
}
header .logo{
	color: white;
	font-size: 30px;
	font-weight: 800;
	letter-spacing: 1px;
}
header .nevigation a{
	color: #fff;	
	text-decoration: none;
	font-weight: 500;
	letter-spacing: 1px;
	padding: 2px 15px;
	border-radius: 2px;
}
header .nevigation a:not(:last-child){
	margin-right: 30px;
}
header .nevigation a:hover{
	background: #fff;
	color: #333;
}
.content{
	padding-top: 10px;
	padding: 8px 8px;
	text-transform: uppercase;
}
label .close-btn{
	display: none;
}
label .menu-btn{
	display: none;
	text-align: right;
}
label :hover{
	color: #fff;
}
#check{
	z-index: 3;
	display: none;
}
.text{
	text-align: center;
	padding-top: 300px;
	        
}
/*Responsive style*/

@media (max-width: 735px){
	header .nevigation{
		display: none;
		transition: 0.4s;
	}
	header .nevigation a{
		color: #333;
	}
	header .nevigation a:hover{
		background-color: #333;
		color: #fff;
	}
	label{
		display: block;
		font-size: 25px;
		cursor: pointer;
		transition-property: color;
		text-transform: uppercase;               
		
	}
	label .close-btn{
		display: none;
		color: #fff;
	}
	label .menu-btn{
		display: block;
		color: #fff;
	}
	#check:checked ~ header .nevigation{
		z-index: 2;
		position: fixed;
		background: white;
		top: 0px;
		bottom: 0;
		left: 0%;
		right: 40%;
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-self: center;
		transition: width 4s;

	}
	#check:checked ~ header .nevigation a{
		font-weight: 700;
		margin-right: 0;
		margin-bottom: 50px;
		letter-spacing: 2px;
		transition: 0.4s;
		
	}
	#check:checked ~ header label .menu-btn{
		display: none;
	}
	#check:checked ~ header label .close-btn{
		z-index: 2;
		display: block;
	}
	
}

	</style>
	<body bgcolor="#EFEFEF">
	<section>
		<input type="checkbox" id="check">
		<header>
			<h2 class="logo">logo</h2>
			<div class="nevigation">
			<a href="<?php echo $base_url; ?>post/postInsert.php"> Post</a>
			<a href="<?php echo $base_url; ?>profile.php">profile</a>
			<a href="<?php echo $base_url; ?>post/myPost.php">my post</a>
			<a href="<?php echo $base_url; ?>submitUpdate.php?logout=ok">logout</a>
			</div>
			<label for="check">
				<i class="fas fa-bars menu-btn"></i>
				<i class="fas fa-times close-btn"></i>
			</label>
		</header>
   
	</section>
	

</body><style type="text/css">
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