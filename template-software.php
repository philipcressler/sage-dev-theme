<?php
/**
 * Template Name: Software Template
 */
?>

<?php while (have_posts()) : the_post(); ?>

<section class="software-hero">
	<div class="container-full">
		<div class="row software-hero__image">
			<div class="software-hero__heading">
				<h1>Power Publishing Starts With Powerful Technology</h1>
			</div>
			<div class="software-hero__background">
			</div>
		</div>
	</div>
</section>
<section class="software-wordpress">
	<div class="container-full">
		<div class="row">
			<div class="col-md-6 software-wordpress__container">
				<div class="software-wordpress__heading">
					<h2>The Only Tool With Wordpress Fully Integrated No Plugin Required.</h2>
				</div>
				<div class="software-wordpress__text">
					<p>Modern marketers know they need to distribute longform content faster and smarter, boosting SEO
and driving traffic to their website.</p>

					<p>PowerPost is the only SaaS tool on the market that lets you publish directly to WordPress and social channels simultaneously. With the click of a button, our innovative technology instantly generates a link to your blog and includes it in your social posts.</p>
				</div>
			</div>
			<div class="col-md-6 software-wordpress__image">
				<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/software-wordpress-mobile.png">
			</div>
		</div>
	</div>
</section>
<section class="software-editor">
	<div class="container-full">
		<div class="row">
			<div class="col-md-6 hidden-xs hidden-sm software-editor__container">
				<div class="software-editor__heading">
					<h2>Because No Channel Is Alike, We Built the Editor You Actually Need</h2>
				</div>
				<div class="software-editor__text">
					<p>Other content tools let you to create and schedule
					a single message that’s sent to all your social media channels, but we’re not like other tools. </p>

					<p>PowerPost makes your messaging more effective, allowing users to contextually customize content per channel. Satisfying the needs of next-gen marketers, PowerPost’s multi-channel editor lets you easily turn one social caption into several tailored messages.</p>
				</div>
			</div>
			<div class=" hidden-md hidden-lg">
				<div class="software-editor__heading">
					<h2>Because No Channel Is Alike, We Built the Editor You Actually Need</h2>
				</div>
				<div class="software-editor__text">
					<p>Other content tools let you to create and schedule
					a single message that’s sent to all your social media channels, but we’re not like other tools. </p>
					<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/software-editor-mobile.png">
					<p>PowerPost makes your messaging more effective, allowing users to contextually customize content per channel. Satisfying the needs of next-gen marketers, PowerPost’s multi-channel editor lets you easily turn one social caption into several tailored messages.</p>					
				</div>			
			</div>
			<div class="col-md-6 software-editor__image hidden-xs hidden-sm">
				<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/software-editor.png">
			</div>
		</div>
	</div>
</section>
<section class="software-calendar">
	<div class="container-full">
		<div class="row">
			<div class="col-md-6 software-calendar__container">
				<div class="software-calendar__heading">
					<h2>We Know Timing Is Everything</h2>
				</div>
				<img class="hidden-sm hidden-md hidden-lg img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/software-calendar.png">
				<div class="software-container__text">
					<p>Great content is worthless if no one sees it. Our tool helps you put content in front of the right audiences at the right moments. Instantly publish time sensitive content or schedule posts for later to captivate and engage different audiences throughout the day.  
					</p>
				</div>
			</div>
			<div class="hidden-xs col-md-6 software-calendar__image">
				<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/software-calendar.png">
			</div>
		</div>
	</div>
</section>
<?php endwhile; ?>
