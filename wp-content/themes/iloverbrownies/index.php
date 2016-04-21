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




		<ul id="filters" class="clearfix">
			<?php
				$cats = '';
				$li = '';
				$i = 0;

				foreach (get_categories() as $cat) {
					if($cat->name != 'Produtos'){
						$cats .= $cat->name.' ';
						$li .= '<li><span class="filter" data-filter="'.$cat->name.'">'.$cat->name.'</span></li>';

						$args = array( 'category' => $cat->cat_ID );
						$myposts = get_posts( $args );
						foreach ( $myposts as $post ) {


							$portfolio[$i] = '<div class="'.$post->post_title.' portfolio '.$cat->name.'" data-cat="'.$cat->name.'">	
												<div class="portfolio-wrapper">				
													<img src="'.wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'medium')[0].'" alt="'.$post->post_title.'" />
													<div class="label">
														<div class="label-text">
															<a class="text-title">'.$post->post_title.'</a>
															<div class="text-category">'.$post->post_content.'</div>
														</div>
														<div class="label-bg"></div>
													</div>
												</div>
											</div>';
							$i++;
						}
						wp_reset_postdata();

					}
				}
			?>
			<li><span class="filter active" data-filter="<?php echo $cats; ?>">Todos</span></li>
			<?php echo $li; ?>
		</ul>

		<div id="portfoliolist"><?php
		asort($portfolio);
		foreach ($portfolio as $key => $value) {
			echo $value;
		}
		?></div>

			</div>
		</div>
	</div>
	<div style="margin-bottom:150px;"></div>
</section>

<!-- <section id="depoimentos">
	<div class="background" style="background-image: url(https://lojamasterchef.files.wordpress.com/2015/10/brownies-chocolate.png);" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				    <li data-target="#myCarousel" data-slide-to="1"></li>
				    <li data-target="#myCarousel" data-slide-to="2"></li>
				  </ol>

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
</section> -->

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
		</div>
	</div>
</section>

<?php get_footer(); ?>
