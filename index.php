<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>


	<div class="menu">
		<div class="container clearfix">

			<div id="logo" class="grid_3">
				<!-- <img src="http://localhost/shineyourbrightest/wp-content/themes/starkers-master/images/logo.png"> -->
				<!-- <img src="http://localhost/shineyourbrightest/wp-content/themes/starkers-master/images/IMG_9718.jpg"> -->

			</div>

			<div id="nav" class="grid_9 omega">
				<ul class="navigation">
					<li data-slide="1">about me</li>
					<li data-slide="2">services</li>
					<li data-slide="3">blog</li>
					<li data-slide="4">contact me test 2</li>
				</ul>
			</div>

		</div>
	</div>


	<div class="slide" id="slide1" data-slide="1" data-stellar-background-ratio="0.5">
		<div class="container clearfix">

			<div id="content" class="grid_12">
				<!-- <h1 id="shineTitle">shine</h1> -->
				<div id="shineTitle">shine</div>

<!-- 				<h2>Get ready to make magic!</h2>
				<p>Remember that this is a BETA version. This is my first framework so if you see any issue please <a href="mailto:jalxob@gmail.com">let me know it</a>. </p>
				<p>Don't forget to follow me!</p>
				<p><a href="https://twitter.com/Jalxob" target="_blank"><img src="/images/twitter.png"></a> <a href="http://dribbble.com/jalxob" target="_blank"><img src="http://localhost/shineyourbrightest/wp-content/themes/starkers-master/images/dribble.png"></a></p>
			 -->
			</div>
			<div id="decorative" class="grid_12 omega">
				<!-- <img src="http://localhost/shineyourbrightest/wp-content/themes/starkers-master/images/decorative.png"> -->
			

			</div>

		</div>
	</div>



	<div class="slide" id="slide2" data-slide="2" data-stellar-background-ratio="0.5">
		<div class="container clearfix">

			<div id="content" class="grid_12">
				<h1>Parallax Scrolling</h1>
				<h2>What you've seen its called parallax scrolling</h2>



<!-- ADD POSTS -->
				<?php if ( have_posts() ): ?>
<h2>Latest Posts</h2>	
<ol>
<?php while ( have_posts() ) : the_post(); ?>
	<li>
		<article>
			<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
			<?php the_content(); ?>
		</article>
	</li>
<?php endwhile; ?>
</ol>
<?php else: ?>
<h2>No posts to display</h2>
<?php endif; ?>
<!-- END ADD -->




			</div>

		</div>
	</div>



	<div class="slide" id="slide3" data-slide="3" data-stellar-background-ratio="0.5">
		<div class="container clearfix">

			<div id="content" class="grid_12">
				<h1>Grid</h1>
				<h2>See how the grid changes when you resize your screen</h2>
			</div>

			<div id="test" class="grid_1">1</div> <div id="test" class="grid_11 omega">11</div>
			<div id="test" class="grid_2">2</div> <div id="test" class="grid_10 omega">10</div>
			<div id="test" class="grid_3">3</div> <div id="test" class="grid_9 omega">9</div>
			<div id="test" class="grid_4">4</div> <div id="test" class="grid_8 omega">8</div>
			<div id="test" class="grid_5">5</div> <div id="test" class="grid_7 omega">7</div>
			<div id="test" class="grid_6">6</div> <div id="test" class="grid_6 omega">6</div>
			<div id="test" class="grid_7">7</div> <div id="test" class="grid_5 omega">5</div>
			<div id="test" class="grid_8">8</div> <div id="test" class="grid_4 omega">4</div>
			<div id="test" class="grid_9">9</div> <div id="test" class="grid_3 omega">3</div>
			<div id="test" class="grid_10">10</div> <div id="test" class="grid_2 omega">2</div>
			<div id="test" class="grid_11">11</div> <div id="test" class="grid_1 omega">1</div>
			<div id="test" class="grid_12">12</div>

		</div>
	</div>



	<div class="slide" id="slide4" data-slide="4" data-stellar-background-ratio="0.1">
		<div class="container clearfix">

			<div id="content" class="grid_12">
				<h1>Credits</h1>
				<h2><a href="http://jalxob.com/cool-kitten" target="_blank">Cool Kitten</a> was made by <a href="http://www.jalxob.com" target="_blank">Jalxob</a>.</h2>
				<p>Don't forget to follow me!</p>
				<p><a href="https://twitter.com/Jalxob" target="_blank"><img src="/images/twitter.png"></a> <a href="http://dribbble.com/jalxob" target="_blank"><img src="/images/dribbble.png"></a></p>
			</div>

		</div>
	</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>


<script>
  jQuery("#shineTitle").fitText(0.2, { minFontSize: '40px', maxFontSize: '400px' });

</script>
