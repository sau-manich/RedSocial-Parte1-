<?php require 'common/config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Red Social</title>
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/views.js"></script>
</head>
<body>
	<?php 
		include 'common/header.php';

		if ($page == "profile") {
			include 'common/banner_profile.php';
		}
	?>
	<div class="container <?php if($page == 'profile') echo 'profile'; ?>">

		<?php
			if ($page == "profile" or $page == "home") {
				include 'common/status.php';
			}else{
				include 'common/error404.php';
			}
		?>


		<aside>

		<?php
			if ($page == "profile" or $page == "home") {
				include 'common/aside_content.php';
			}
		?>

		</aside>

		<div style="clear:both;"></div>
	</div>
	<div class="background_modal" id="openmodal">
		<div class="modal_container">
			<a href="#close" class="close_button"><img src="img/close.png" alt=""></a>
			<div class="modal_content">
				<section>
				<div class="avatar">
					<div class="background_image">
						<img src="img/avatar64.jpg" alt="">
					</div>
					<div class="action">
						<h2><a href="profile.php">Benito Camelo Parado Al Fondo</a></h2>
						<h3> <a href="#">Hace dos horas</a></h3>
					</div>
					<div style="clear:both;"></div>
				</div>
				<div class="status">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur exercitationem sit dolores recusandae, reprehenderit atque eos quod excepturi sunt mollitia maxime corrupti, fuga modi vel non architecto quos perspiciatis aperiam? iciatis aperiam
					</p>
				</div>
				<div class="like_tools">
					<a href="#" class="like_button">Me gusta</a>
					<a href="#" class="dislike_button">No me gusta</a>
					<a href="#openmodal" class="comments_button">25 Comentarios</a>
				</div>
				<div class="comments_container">
				<?php for ($i=0; $i < 15; $i++) { ?>
					<div class="comment">
						<div class="image">
							<img src="img/avatar64.jpg" width="35" alt="Imagen">
						</div>
						<div class="text">
							<a href="#" class="name">Soila del Hoyo Prieto</a>
								Lorem ipsum dolor sit amet, consectetur adipisicing.
						</div>
						<div style="clear:both;"></div>
					</div>
				<?php } ?>
				<!-- ========== caja comentario ===========  -->
					<div class="comment">
						<div class="image">
							<img src="img/avatar64.jpg" width="35" alt="Imagen">
						</div>
						<div class="text">
							<form method="post" action="#">
								<input type="text" name="comment" placeholder="Haz un comentario">
							</form>
						</div>
						<div style="clear:both;"></div>
					</div>
				</div>
			</section>
			</div>
		</div>
	</div>
	
</body>
</html>