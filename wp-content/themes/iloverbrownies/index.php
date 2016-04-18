<?php get_header(); ?>

<?php 
	$page = get_page_by_title( 'home' );
	$content = apply_filters('the_content', $page->post_content); 
	$url = wp_get_attachment_url( get_post_thumbnail_id($page->ID) ); 
?>
<section id="home" style="background-image:url(<?php echo $url; ?>);" data-stellar-background-ratio="0.5">
	<div class="filter"></div>
	<div class="text" data-stellar-background-ratio="3">
		<?php 
			echo $content;  
		?>
	</div>
</section>


<?php 
	$page = get_page_by_title( 'sobre' );
	$content = apply_filters('the_content', $page->post_content); 
	$url = wp_get_attachment_url( get_post_thumbnail_id($page->ID) ); 
?>
<section id="sobre">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2>Sobre</h2>
				<?php  
					echo $content;  
				?>
			</div>
		</div>
	</div>
	<div class="background" style="background-image: url(<?php echo $url; ?>);" data-stellar-background-ratio="0.5">
		<!-- <h3>Um texto legal aqui.</h3> -->
	</div>
</section>
<section id="produtos">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2>Produtos</h2>


			
				<?php include 'galeria.php'; ?>
			</div>
		</div>
	</div>
	<div style="margin-bottom:150px;"></div>
</section>

<section id="depoimentos">
	<div class="background" style="background-image: url(https://lojamasterchef.files.wordpress.com/2015/10/brownies-chocolate.png);" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				    <li data-target="#myCarousel" data-slide-to="1"></li>
				    <li data-target="#myCarousel" data-slide-to="2"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				    <div class="item active" style="height:300px;">
				      <h3>“ asdf asdfasdf asdfasdff asdfasdf asdf asdfasdf asdfasdff asdfasdf asdf asdfasdf asdfasdff asdfasdf ”</h3>
				    </div>

				    <div class="item" style="height:300px;">
				      <h3>“ asdf asdfasdf asdfasdff asdfasdf ”</h3>
				    </div>

				    <div class="item" style="height:300px;">
				    <h3>“ asdf asdfasdf asdfasdff asdfasdf ”</h3>
				    </div>

				  </div>
				</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div style="margin-bottom:150px;"></div>

<section id="maps">
	<div id="googleMap" style="width:100%px;height:300px;"></div>
</section>


<?php 
	$page = get_page_by_title( 'contato' );
	$content = apply_filters('the_content', $page->post_content); 
	$url = wp_get_attachment_url( get_post_thumbnail_id($page->ID) ); 
?>
<section id="contato">
	<div class="background" style="background-image: url(<?php echo $url; ?>);" data-stellar-background-ratio="0.2">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2>Contato</h2>
					<?php echo $content ?>
				</div>
			</div>
			<form role="form">
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Nome">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<input type="email" class="form-control" placeholder="E-mail">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Telefone">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Assunto">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<select class="form-control">
								<option selected disabled>Como nos conheceu?</option>
								<option>Google</option>
								<option>Facebook</option>
								<option>Amigos</option>
								<option>Outro</option>
							</select>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group">
							<textarea class="form-control" rows="10" placeholder="Digíte sua mensagem aqui."></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3 col-sm-push-9">
						<button type="submit" class="btn btn-danger btn-block text-uppercase">Enviar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

<?php get_footer(); ?>
