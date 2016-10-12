<?php
/**
 * Template Name: Studio Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
<section class="studio-hero">
	<div class="row row-eq">
		<div class="studio-hero__background row-eq">
			
		</div>
		<div class="col-sm-5 col-sm-offset-1 hidden-xs">
			<div class="studio-hero__container">
				<div class="studio-hero__heading">
					<h1>Take Your Content Publishing to the Next Level</h1>
				</div>
				<div class="studio-hero__text">
					<p>We live in a world where content is king and ‘publish or perish’ is the law. Our writers, visual artists and social media experts are here to help devise breakthrough strategies to bring order, drive engagement, quality leads and bottom line results.</p>
				</div>
				<div class="studio-hero__cta">
					<a href="#contact-studio-form" class="btn btn--reversed">Team Up With Us</a>
				</div>
			</div>
		</div>
		<div class="visible-xs-block studio-hero__xs">
			<div class="studio-hero__heading">
					<h1>Take Your Content Publishing to the Next Level</h1>
			</div>
			<div class="studio-hero__absolute-container">
				<div class="studio-hero__cta-xs">
						<a href="#contact-studio-form" class="btn btn--primary">Team Up With Us</a>
				</div>
				<div class="studio-hero__text-xs">
					<p>We live in a world where content is king and ‘publish or perish’ is the law. Our writers, visual artists and social media experts are here to help devise breakthrough strategies to bring order, drive engagement, quality leads and bottom line results.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="studio-two">
	<div class="row">
		<div class="col-sm-6 studio-two__image">
			<img class="hero-image" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/studio-two-image-mobile.png">
		</div>
		<div class="col-sm-6 studio-two__container">
			<div class="studio-two__heading">
				<h2>Whoever coined the term 'never say never' didn't work for us.</h2>
				<p class="subheading">We're very clear about the things we won't, don't and will never do.</p>
				<hr>
			</div>
				<div class="dont">
		      <div class="">
		      		<h3>We never go on a mission without a roadmap for success. We Think Strategically.</h3>
							<p>Attracting, engaging and acquiring your target audience doesn’t just happen. We are intentional in tailoring a strategy to meet your business needs.</p>
					</div>
		      	<div class="">
		      		<h3>We Never Stop Learning. We Practice What We Preach.</h3>
							<p>We are industry and thought leaders. We stay ahead of the curve by keeping a pulse on the latest trends.</p>
						</div>
		      	<div class="">
		      		<h3>We Never Cut Corners. We are agile.</h3>
							<p>Test. Learn. Implement. Repeat. We are constantly assessing  and refining our strategy so we can pivot towards success.</p>
						</div>
		      	<div class="">
		      		<h3>We Never Work In Silos. We collaborate.</h3>
							<p>We are a carefully selected, well-rounded team with a variety of backgrounds and skill-sets. Each member brings a unique understanding, assessment and interpretation of the challenge. We work together with your goals in mind to produce quantitative results.</p>
						</div>
					</div>
		    </div>
		 </div>
</section>
<?php endwhile; ?>
