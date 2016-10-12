<?php
/**
 * Template Name: Pricing Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
<section class="pricing-hero">
		<div class="row">
			<div class="col-sm-5">
				<h1>Turn any organization into a Power Publisher!</h1>
			</div>
			<div class="col-sm-7">
				<p>From small businesses to enterprise, we’ve got you covered. We’ll help you find the plan that’s right for you.</p>
			</div>
			<div class="software-hero__background"></div>
		</div>
		<div class="row">
			<div class="col-sm-5">
				<ul class="nav" role="tablist" id="pricing-toggle">
					<li role="presentation" class="active"><a data-toggle="tab" aria-controls="software" role="tab" href="#software" class="btn btn--reversed">Software</a></li>
					<li class><a data-toggle="tab" aria-controls="studio" role="tab" href="#studio" class="btn btn--reversed">Studio</a></li>
				</ul>
			</div>
		</div>
</section>

<section class="pricing-main tab-content">
	<div role="tabpanel" class="tab-pane fade in active" id="software">
			<div class="row">
				<div class="col-sm-5">
					<div class="software-business__pricing pricing-unit">
						<h2 class="pricing-unit__h2 pricing-unit__h2--primary">Business</h2>
						<p class="pricing-unit__subheading pricing-unit__subheading--primary">Up to 10 users</p>
						<div class="pricing-unit__cost-container">
							<span class="pricing-unit__dollar">$</span>
							<span class="pricing-unit__price">199</span>
							<span class="pricing-unit__month">/month</span>
						</div>
						<div class="pricing-unit__cta">
							<a href="/" class="btn btn--primary pricing-unit__cta">Start my free trial</a>
						</div>
						<ul class="pricing-unit__features-list">
							<li>Connect Unlimited Social Channels</li>
							<li class="head-li">Draft & Schedule Content</li>
							<li class="sub-li">(Gifs, Images, Videos, Links, Files)</li>
							<li>Preview & Modify Posts per Channel</li>
							<li>Publish Unlimited Social Posts & Blogs</li>
							<li>Assign Admin, Editor & Reviewer Roles</li>
							<li>Feedback & Approval Functionality</li>
							<li>Wordpress Integration</li>
							<li>User Onboarding</li>
							<li>24/7 Online Support</li>
						</ul>
						<hr>
						<div class="pricing-unit__savings">
							<a href="/">See how you can save on your plan ></a>
						</div>
					</div>
				</div>
				<div class="col-sm-7 pricing-main__container">
					<div class="software-business__models">
						<div class="row">
							<div class="col-sm-6 software-business__enterprise">
								<h2>Enterprise</h2>
								<p class="subheading">For large organizations</p>
								<a class="btn btn--primary btn--primary--enterprise">Demo Today</a>
								<p>For large organizations, PowerPost offers strategic onboarding, call support and onsite training to set your team up for success. Enterprise customers gain access to shared post libraries to easily push pre-approved content across several company social accounts.</p>
							</div>
							<div class="col-sm-6 software-business__agency">
								<h2>Agencies</h2>
								<p class="subheading">For content studios</p>
								<a class="btn btn--primary btn--primary--agency">Demo Today</a>
								<p>Let us help you help your brands. Learn how a partnership with PowerPost can increase your agency’s content production efforts and streamline review processes internally and with clients. PowerPost also offers reseller incentives.</p>
							</div>
						</div>
						<hr>
					</div>
					<div class="software-business__cta">
						<h2>At PowerPost, we're big on test driving.</h2>
						<p>We’re so confident that you’ll love being in the driver’s seat of your content strategy that we’re handing over the keys for two weeks.</p>
						<div>
						<form id="business-cta-form" class="materialpc-form">
							<div class="row">
								<div class="form-group">
									<div class="group col-md-6 col-sm-6 col-lg-6">
										<input type="text" required="required"  name="name-input" id="name-input" placeholder=" ">
										<span class="highlight"></span>
										<span class="bar"></span>
										<label for="name-input">What's your Name?</label>
										<span class="validation"></span>
									</div>
									<div class="group submit-group col-sm-6 col-md-5 col-lg-4">
										<button type="submit" class="btn btn--primary btn--primary--light-blue" id="form-submit">Try For Free</button>
									</div>
								</div>
							</div>
						</form>
						</div>
					</div>
					</div>
				</div>
				<div class="pricing-main__software-faq">
					<div class="row">
						<div class="col-sm-5">
							<div class="pricing-main__faq-heading">
								<h2>Have questions?<br>Here are a few of our Favorites</h2>
								<p>Looking for something else? <a href="/">Lets talk</a></p>
							</div>
						</div>
						<div class="col-sm-7 pricing-main_faq-accordion">
							<div class="panel-group" id="accordion">
				        <div class="panel panel-default">
				            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
					            <div class="panel-heading">
					                <h4 class="panel-title">
					                    Is my content safe and secure? 
					                    <span data-icon="&#x35;" class="toggle-icon"></span>	
					                </h4>
				                			    
					            </div>
				            </a>
				            <div id="collapseOne" class="panel-collapse collapse">
				                <div class="panel-body">
				                    <p>We utilize a variety of security measures to protect your data, your content and your users. These include encrypted sessions, protection against known security attacks, virus scans, firewalls, data security, private cloud infrastructure and more. Don’t believe us? Please feel free to request a complete list of security measures we have in place from our team.</p>
				                </div>
				            </div>
				        </div>
				        <div class="panel panel-default">
				        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
				            <div class="panel-heading">
				                <h4 class="panel-title">
				                     I changed my mind. Can I cancel my plan?
				                     <span data-icon="&#x35;" class="toggle-icon"></span>
				                </h4>
				               
				            </div>
				          </a>
				            <div id="collapseTwo" class="panel-collapse collapse">
				                <div class="panel-body">
				                    <p>Though we’ll be sad to see you go, you can cancel your plan at any time under account settings. No hoop jumping required. </p>
				                </div>
				            </div>
				        </div>
				        <div class="panel panel-default">
				        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
				            <div class="panel-heading">
				                <h4 class="panel-title">
				                     Which credit cards are accepted?
				                     <span data-icon="&#x35;" class="toggle-icon"></span>
				                </h4>
				               
				            </div>
				          </a>
				            <div id="collapseThree" class="panel-collapse collapse">
				                <div class="panel-body">
				                    <p>Visa, Mastercard, Discover and American Express.</p>
				                </div>
				            </div>
				        </div>
				        <div class="panel panel-default">
				        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
				            <div class="panel-heading">
				                <h4 class="panel-title">
				                    Will I receive an invoice for my purchase?
				                     <span data-icon="&#x35;" class="toggle-icon"></span>
				                </h4>
				               
				            </div>
				          </a>
				            <div id="collapseFour" class="panel-collapse collapse">
				                <div class="panel-body">
				                    <p>Absolutely! We’ll email you monthly receipts.</p>
				                </div>
				            </div>
				        </div>
							</div>
						</div>
					</div>
				</div>
				<div class="pricing-main__levelup background-eq">
					<div class="hidden-xs pricing-main__levelup-background background-eq">
					</div>
					<div class="row pricing-main__levelup-content">
						<div class="col-sm-5 col-md-offset-7">
							<h2>Looking to take your content publishing to the next level?</h2>
							<p>Our writers, visual artists and social media experts devise breakthrough strategies to bring order, drive engagement, quality leads and bottom line results.</p>
							<a href="/" class="btn btn--reversed">Learn More</a>
						</div>
					</div>
					<div class="row">
							<div class="col-sm-6 row-eq">
								<div class="software-links__studio">
										<h2><a href="/studio">Explore Our Studio ></a></h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rhoncus nisi nisi. Phasellus hendrerit nisl eget.</p>
									</div>
							</div>
							<div class="col-sm-6 row-eq">
									<div class="software-links__insights">
										<h2><a href="/studio">Explore Our Insights ></a></h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rhoncus nisi nisi. Phasellus hendrerit nisl eget.</p>		
										</div>
							</div>
					</div>
				</div>
		</div>
	<div role="tabpanel" class="tab-pane fade" id="studio">
		<div class="row">
			<div class="col-sm-5">
				<div class="software-business__pricing pricing-unit">
						<h2 class="pricing-unit__h2 pricing-unit__h2--primary">Studio Services</h2>
				
						<p class="pricing-unit__text">
						In tandem with our tool, our studio team can help you take control of your content to launch your brand to the top. From SEO to PR, our proven pre-built packages help companies like yours become powerful digital publishers.
						</p>
						<div class="pricing-unit__cta">
							<a href="/" class="btn btn--primary pricing-unit__cta">Contact Us Today</a>
						</div>
						<hr>
						<div class="pricing-unit__savings">
							<a href="/">See how you can save on your plan ></a>
						</div>
					</div>
			</div>
			<div class="col-sm-7 pricing-main__studio-form">
				<h2>Get ready for your content marketing to take off!</h2>
				<p>We just need a little bit of info before we get started. Select the areas you are interested in below.</p>

				<form id="studio-pricing-form" class="materialpc-form">
				 <div class="form-group checkbox-container">
						 <span class="button-checkbox">
	        			 	<button type="button" class="btn btn-default" data-color="primary">Content Publishing</button>
	        				<input type="checkbox" class="hidden" value="Content Publishing">
	    				 </span>
						 <span class="button-checkbox">
	        			 	<button type="button" class="btn btn-default" data-color="primary">Social Media</button>
	        				<input type="checkbox" class="hidden" value="Social Media">
	    				 </span>
						 <span class="button-checkbox">
	        			 	<button type="button" class="btn btn-default" data-color="primary">SEO/SEM</button>
	        				<input type="checkbox" class="hidden" value="SEO/SEM">
	    				 </span>
						 <span class="button-checkbox">
	        			 	<button type="button" class="btn btn-default" data-color="primary">Influencer Marketing</button>
	        				<input type="checkbox" class="hidden" value="Influencer Marketing">
	    				 </span>
						 <span class="button-checkbox">
	        			 	<button type="button" class="btn btn-default" data-color="primary">Design</button>
	        				<input type="checkbox" class="hidden" value="Design">
	    				 </span>
						 <span class="button-checkbox">
	        			 	<button type="button" class="btn btn-default" data-color="primary">Video Production</button>
	        				<input type="checkbox" class="hidden" value="Video Production">
	    				 </span>
						 <span class="button-checkbox">
	        			 	<button type="button" class="btn btn-default" data-color="primary">Email Marketing</button>
	        				<input type="checkbox" class="hidden" value="Email Marketing">
	    				 </span>
						 <span class="button-checkbox">
	        			 	<button type="button" class="btn btn-default" data-color="primary">UX/UI</button>
	        				<input type="checkbox" class="hidden" value="UX/UI">
	    				 </span>
						 <span class="button-checkbox">
	        			 	<button type="button" class="btn btn-default" data-color="primary">Website Development</button>
	        				<input type="checkbox" class="hidden" value="Website Development">
	   				 	</span>
						 <span class="button-checkbox">
	        			 	<button type="button" class="btn btn-default" data-color="primary">Other</button>
	        				<input type="checkbox" class="hidden" value="Other">
	    				 </span>
	    			</div>
	    			<div class="row">
		    			<div class="form-group">
		    				<div class="group col-sm-6 col-xs-6">
			    				<input type="text" required="required" id="name-input" placeholder=" ">
								<span class="highlight"></span>
								<span class="bar"></span>
								<label for="name-input">Name</label>
								<span class="validation"></span>
		    				</div>
		    				<div class="group col-sm-6 col-xs-6">
			    				<input type="text" required="required" id="company-input" placeholder=" ">
								<span class="highlight"></span>
								<span class="bar"></span>
								<label for="company-input">Company Name</label>
								<span class="validation"></span>
		    				</div>
		    			</div>
		    		</div>
		    		<div class="row">
		    			<div class="form-group">
		    				<div class="group col-sm-6 col-xs-6">
			    				<input type="email" required="required" id="email-input" placeholder=" ">
								<span class="highlight"></span>
								<span class="bar"></span>
								<label for="name-input">Work Email</label>
								<span class="validation"></span>
		    				</div>
		    				<div class="group col-sm-6 col-xs-6">
			    				<input type="text" required="required" id="company-type-input" placeholder=" ">
								<span class="highlight"></span>
								<span class="bar"></span>
								<label for="company-type-input">Company Type</label>
								<span class="validation"></span>
		    				</div>
		    			</div>
		    		</div> 
		    		<div class="row">
		    			<div class="form-group">
								<div class="group col-sm-6 col-xs-6">
			    				<input id="phone-input" type="tel" pattern="^[0-9-+s()]*$" placeholder=" ">
								<span class="highlight"></span>
								<span class="bar"></span>
								<label for="name-input">Phone Number</label>
							    <span class="validation"></span>
		    				</div>
		    				<div class="group col-sm-6 col-xs-6">
			    				<input type="text" required="required" id="tole-input" placeholder=" ">
								<span class="highlight"></span>
								<span class="bar"></span>
								<label for="role-input">Role</label>
								<span class="validation"></span>
		    				</div>
		    			</div>
		    		</div>    				
	    			<div class="row submit-row">
	    				<button type="submit" class="btn btn-submit btn--primary btn--primary--light-blue" id="form-submit">Get Started</button>
	    			</div>
	    			<div id="studio-form-result"></div>
	    		</form>
			</div>
		</div>
		<div class="row pricing-main__studio-packages">
			<div class="col-sm-5">
				<div class="panel-group" id="studio-accordion">
					<div class="panel panel-default active-panel" id="influencer-collapse-card">
						<a data-toggle="collapse" data-parent="#studio-accordion" href="#influencer-collapse" onclick="toggleCard('influencer-collapse')">
							<div class="panel-heading">
								<h4 class="panel-title">Influencer Marketing</h4>
								<p class="panel-subheading">Investment starts at $3,000</p>
							</div>
						</a>
						<div id="influencer-collapse" class="panel-collapse collapse in">
							<div class="panel-body">Thanks to our award-winning team, PowerPost is established as the go-to agency both regionally and nationally for Influencer Marketing. As storytellers, we craft brand “news” that breaks through the newsroom clutter and resonates with media, bloggers and the end-customer (viewer, reader) alike.</div>
						</div>
					</div>
					<div class="panel panel-default" id="website-collapse-card">
						<a data-toggle="collapse" data-parent="#studio-accordion" href="#website-collapse" onclick="toggleCard('website-collapse')">
							<div class="panel-heading">
								<h4 class="panel-title">Website Development</h4>
								<p class="panel-subheading">Investment starts at $7,000</p>
							</div>
						</a>
						<div id="website-collapse" class="panel-collapse collapse">
							<div class="panel-body">As your outsourced social marketing solution, your dedicated team will ensure your social media efforts support your business goals. Our process is results-focused and our team will consistently work toward achieving unparalleled social media wins in the categories of customer acquisition and brand awareness.</div>
						</div>
					</div>
					<div class="panel panel-default" id="media-buy-collapse-card">
						<a data-toggle="collapse" data-parent="#studio-accordion" href="#media-buy-collapse" onclick="toggleCard('media-buy-collapse')">
							<div class="panel-heading">
								<h4 class="panel-title">Media Planning and Buying</h4>
								<p class="panel-subheading">Investment starts at $1,500</p>
							</div>
						</a>
						<div id="media-buy-collapse" class="panel-collapse collapse">
							<div class="panel-body">Whether you are looking for a higher rank and immediate visibility, repeat exposure to keep your brand top of mind and generate return visits, or growth and continued online community engagement, our team of media strategists will provide a roadmap to take your online presence to the next level and in turn drive your bottom line.</div>
						</div>
					</div>
					<div class="panel panel-default" id="social-media-collapse-card">
						<a data-toggle="collapse" data-parent="#studio-accordion" href="#social-media-collapse" onclick="toggleCard('social-media-collapse')">
							<div class="panel-heading">
								<h4 class="panel-title">Social Media</h4>
								<p class="panel-subheading">Investment starts at $2,550</p>
							</div>
						</a>
						<div id="social-media-collapse" class="panel-collapse collapse">
							<div class="panel-body">As your outsourced social marketing solution, your dedicated team will ensure your social media efforts support your business goals. Our process is results-focused and our team will consistently work toward achieving unparalleled social media wins in the categories of customer acquisition and brand awareness.</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-7">
				<div class="website-collapse__info accordion-info hidden">
					<h3>Strategic Planning</h3>
					<span>Usability Audit</span>
					<span>Competitive Analysis</span>
					<span>Establish Goals</span>
					<hr>
					<h3>Media Content</h3>
					<span>Sitemap</span>
					<span>Wireframing</span>
					<span>Messaging Hierarchy</span>
					<hr>
					<h3>Outreach</h3>
					<span>Professional Creative Concept</span>
					<span>Web Conscious & Mobile Optimized</span>
					<span>Goal Oriented</span>
					<hr>
					<h3>Media Relations</h3>
					<span>Professional Creative Concept</span>
					<span>Key Messaging</span>
					<span>Copywriting</span>
					<hr>
					<h3>Reporting</h3>
					<span>WordPress platform</span>
					<span>Best practice coding</span>
					<span>Testing</span>
					<span>Client Device Training</span>
					<hr>
					<h3>Basic SEO</h3>
					<span>Google Analytics</span>
					<span>Develop Key Points</span>
					<span>Detailed Recommendations</span>
				</div>
				<div class="influencer-collapse__info accordion-info visible">
					<h3>Strategic Planning</h3>
					<span>Goals, content strategy, brand voice & content theme</span>
					<hr>
					<h3>Media Content</h3>
					<span>Press release</span>
					<span>Face sheet</span>
					<span>Curated list</span>
					<hr>
					<h3>Outreach</h3>
					<span>Brand ambassador coordination</span>
					<span>Curated influencer list </span>
					<hr>
					<h3>Media Relations</h3>
					<span>Media training session</span>
					<span>24/7 media monitoring and response</span>
					<hr>
					<h3>Reporting</h3>
					<span>Monthly consulting calls with your team</span>
					<span>Monthly reports with analytics and goal progression</span>
					<hr>
					<h3>Influencer Marketing*</h3>
					<span>Blogger  ($3000/month)</span>
					<span>Celebrity Spokesperson Management  ($1200/month)</span>
				</div>
				<div class="media-buy-collapse__info accordion-info hidden">
					<h3>SEO</h3>
					<span>Gain visibility and drive organic traffic to your website</span>
					<span>$1600/month</span>
					<hr>
					<h3>Pay Per Click</h3>
					<span>Prospect new audience and drive paid traffic to your website Ensure visibility</span>
					<span>$1400/month</span>
					<hr>
					<h3>Retargeting</h3>
					<span>Prompt visitors to return to your website and keep your brand top of mind</span>
					<span>$895/creative set</span>
					<hr>
					<h3>Display</h3>
					<span>Prospect new audience and drive paid traffic to your website</span>
					<span>$895/creative set</span>
					<hr>
					<h3>Youtube</h3>
					<span>Prospect new audience and drive paid traffic to your website </span>
					<span>$1400/month + video production</span>
				</div>
				<div class="social-media-collapse__info accordion-info hidden">
					<h3>Strategic Planning</h3>
					<span>Social goals, content strategy and audience targeting</span>
					<hr>
					<h3>Content Creation</h3>
					<span>Custom branded images</span>
					<span>Additional 3rd party shares and relevant lifestyle content </span>
					<span>Content calendars</span>
					<hr>
					<h3>Community Management</h3>
					<span>Customer service requests answered</span>
					<hr>
					<h3>Media Buying Optimization</h3>
					<span>Segmented audience targeting</span>
					<span>Ad sets with custom images</span>
					<span>A/B testing and performance monitoring</span>
					<hr>
					<h3>Reporting</h3>
					<span>Monthly consulting calls with your team</span>
					<span>Monthly reports with analytics and goal progression</span>
					<span>Weekly social news round-up</span>
					<h3>PowerPost</h3>
					<span>FREE access to our proprietary tool</span>
				</div>
		</div>
	</div>
				<div class="pricing-main__levelup background-eq">
					<div class="hidden-xs pricing-main__levelup-background background-eq">
					</div>
					<div class="row pricing-main__levelup-content">
						<div class="col-sm-5 col-md-offset-7">
							<h2>Power Publishing Starts With Powerful Technology</h2>
							<p>Developed by content marketers for content marketers, we’re here to help you join the publishing revolution. Storytelling is only one piece of the puzzle. Modern marketers need powerful technology to put their messages directly in front of their audiences.</p>
							<a href="#" class="btn btn--reversed">Learn More</a>
						</div>
					</div>
					<div class="row">
							<div class="col-sm-6 row-eq">
								<div class="software-links__studio">
										<h2><a href="/studio">Explore Our Studio ></a></h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rhoncus nisi nisi. Phasellus hendrerit nisl eget.</p>
									</div>
							</div>
							<div class="col-sm-6 row-eq">
									<div class="software-links__insights">
										<h2><a href="/studio">Explore Our Insights ></a></h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rhoncus nisi nisi. Phasellus hendrerit nisl eget.</p>		
										</div>
							</div>
					</div>
				</div>	
</section>

<script>
	function toggleCard(id) {
		var newId = id + '__info';
		var newCardId = id + '-card';
		console.log(newCardId);
		jQuery('.accordion-info').each(function() {
			jQuery(this).addClass('hidden');
		})
		if(jQuery('#' + id).hasClass('in')) {

		} else {
			jQuery('.' + newId).removeClass('hidden');
		}

		jQuery('.panel.panel-default').each(function() {
			jQuery(this).removeClass('active-panel');
		})

		if(jQuery('#' + newCardId).hasClass('active-panel')) {
		} else {
			jQuery('#' + newCardId).addClass('active-panel');
		}
	}
</script>

<?php endwhile; ?>
