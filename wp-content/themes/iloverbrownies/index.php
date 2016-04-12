<?php get_header(); ?>
<section id="home">
<div class="filter"></div>
<div id="banner" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="item active" style="background-image:url(https://lojamasterchef.files.wordpress.com/2015/10/brownies-chocolate.png);">
    </div>
  </div>
</div>
<div class="text">
	<h1>Título</h1>
	<h3>Subtítulo</h3>
</div>
</section>
<section>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1>asdf</h1>
			<h1>asdf</h1>
			<h1>asdf</h1>
			<h1>asdf</h1>
		</div>
	</div>
</div>
</section>
<script type="text/javascript">
$(document).ready(function(){
	$('#home, #home #banner .item, #home .filter').css({'height':$(window).height()});
});
</script>
<?php get_footer(); ?>
