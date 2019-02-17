<?php
/**
 * Template Name: FAQs
 *
 * Display as FAQ page
 *
 * @package jumtechWP
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'jumtechWP_container_type' );
?>


	<div class="about-story-info">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="about-info">
              <h1>FAQ's</h1>
              <hr>
              <p>Just Ask & Get your Answer</p>
          </div>
          
        </div>
      </div>
    </div>
  </div>

	<div class="wrapper" id="page-wrapper">

		<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

			<div class="row justify-content-center">

				<div class="col-md-9">
					
					<div class="site-main">

						<div class="accordion" id="accordionFAQ">

							<div class="card">
								<div class="card-header" id="headingOne">
									<h5 class="mb-0">
										<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											Q: What do your websites cost?
										</button>
									</h5>
								</div>

								<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionFAQ">
									<div class="card-body">
										Our prices depend on many factors. To get a better idea of the cost of what you need, give us a quick phone call at +8801645073296. We’ll ask a few questions about your project, what features and interactivity you’ll need, who will handle content development, whether or not you’d like to sell online. After this short discussion, we should be able to give you a ballpark number. If you’re still interested, we’ll be happy to develop a comprehensive proposal that outlines the scope, process and costs.


									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header" id="headingTwo">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											Q: How long does it take to build a site?
										</button>
									</h5>
								</div>
								<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionFAQ">
									<div class="card-body">
										Once we have all the content (text and images), it should take 2-4 weeks for us to design and build a typical, small scale website of 8-10 pages. The most time consuming phase of any web project is collecting and writing the content.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header" id="headingThree">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											Q: Are your prices flat rate or time and materials?
										</button>
									</h5>
								</div>
								<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionFAQ">
									<div class="card-body">
										We offer both options. If you stick to the timetable and scope defined in our flat rate proposal, we can guarantee that the price we quote will be the price we charge. However, if you want more flexibility with regard to collecting materials, making changes to the design or even making changes to functionality, we are happy to work on a time and materials basis.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header" id="headingFour">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
											Q: How does the development process work?
										</button>
									</h5>
								</div>
								<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionFAQ">
									<div class="card-body">
										
										There are nine steps in our development process

										<ul>
											<li>
												Discovery – If the project is a rebuild, we review your current content and make further recommendations for improvements. If it’s a new site, we start by discussing the subjects and functionality you envisage for your site and develop an outline for you.
											</li>
											<li>
												Content – You compile all the content for the website, including all text and images.
											</li>
											<li>
												Preliminary Design – We create a home page concept including colors, fonts, image style and layout.
											</li>
											<li>
												Organization – When we have received all content in its final version, we review it to determine the best way to organize the information. The structure of the site is based on this organizational scheme and must be approved by you.
											</li>
											<li>
												Design Revision – After reviewing the initial design, you have the opportunity to request changes.
											</li>
											<li>
												Implementation – Once we’ve received your approval on the design, we move on to implementation. This is where the approved design becomes concrete and where we add site-specific features.
											</li>
											<li>
												Page Content – When we have all the content that will be included on the site and an approved design, we will enter all the data.
											</li>
											<li>
												Testing – We run through a final set of tests to be sure that everything is functional. You have an opportunity at this time to test the site as well.
											</li>
											<li>
												Launch – Once we have your final approval, we launch the site. The marks the end of the projec
											</li>

										</ul>

									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header" id="headingFive">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
											Q: Does jumtech.org offer web hosting services?
										</button>
									</h5>
								</div>
								<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionFAQ">
									<div class="card-body">
										Yes, we do. Please go and check us here jumhost.com
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header" id="headingSix">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
											Q: Are your sites mobile-friendly?
										</button>
									</h5>
								</div>
								<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionFAQ">
									<div class="card-body">
										Yes. Every site we have built since 2016 has been mobile-friendly. The method we use to achieve this is known as responsive design, which ensures that the site works well on a wide variety of screen sizes, from smartphones and tablets through to small and large desktop monitors.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header" id="headingSeven">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
											Q: Will I be able to make changes to the site after it is completed?
										</button>
									</h5>
								</div>
								<div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionFAQ">
									<div class="card-body">
										A.	Yes.We always remain available to make changes for you, if you don’t have time or you need more complex changes.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header" id="headingEight">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
											Q: Can you help me write content for my website?
										</button>
									</h5>
								</div>
								<div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionFAQ">
									<div class="card-body">
										A: Yes. We include copy writing and editing in all of our proposals. We also build your sitemap and help structure the foundation of your website in the planning stages.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header" id="headingNine">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
											Q: What services do you offer?
										</button>
									</h5>
								</div>
								<div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionFAQ">
									<div class="card-body">
										Currently Web Development, Dmain/ Hosting, Security, Design, Service, Blogging.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header" id="headingTen">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
											Q: Do you custom design websites or use pre-made templates?
										</button>
									</h5>
								</div>
								<div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionFAQ">
									<div class="card-body">
										Well, we offer you both of them.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header" id="headingEleven">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
											Q: Can you provide examples of websites that your company designed?
										</button>
									</h5>
								</div>
								<div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionFAQ">
									<div class="card-body">
										Yes we do provide some of our work before final development take place . Beside that in our "Client" section you can see some of our work designed by our company.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header" id="headingTwelve">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
											Q: Will you review my current website and analyze its performance before making your design decisions?
										</button>
									</h5>
								</div>
								<div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordionFAQ">
									<div class="card-body">
										If you have an existing website, not all pages may need a redesign, especially if they are hitting high performance marks. Find out if the web design firm plans to analyze your current site’s metrics to evaluate its strengths and weaknesses before implemented any design changes.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header" id="headingThirteen">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
											Q: What is your policy regarding building websites for my competitors?
										</button>
									</h5>
								</div>
								<div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#accordionFAQ">
									<div class="card-body">
										This can be a good or bad thing. For example, if a company has designed websites in the past similar to yours , they may have a better understanding of what works and what doesn't. That said, you don't want a clear conflict of interest. This is a good question to ask and to use in your evaluation process, but I wouldn't rule someone out entirely if they built a website last year in the same industry but don't have an ongoing relationship with that client.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header" id="headingFourteen">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
											Q: What happens if I don’t like the initial design?
										</button>
									</h5>
								</div>
								<div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen" data-parent="#accordionFAQ">
									<div class="card-body">
										Generally, initial project agreements call for either unlimited changes or a certain number of revisions. Others have multiple sign-offs on proposed colors, design layout, images and type fonts so you have an idea what the end design will look like. It’s important to review the process and the policy for changes with the design firm.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header" id="headingFifteen">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
											Q:  What is the billing procedure for work outside the project’s initial quote or agreed upon deliverables?
										</button>
									</h5>
								</div>
								<div id="collapseFifteen" class="collapse" aria-labelledby="headingFifteen" data-parent="#accordionFAQ">
									<div class="card-body">
										As your project progresses, you might want additional services outside the original scope of the project. Find out how billing works if you decide to add other features or elements after work on your website has begun.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header" id="headingSixteen">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
											Q: Will my website be compatible with smartphones, tablets and other mobile devices?
										</button>
									</h5>
								</div>
								<div id="collapseSixteen" class="collapse" aria-labelledby="headingSixteen" data-parent="#accordionFAQ">
									<div class="card-body">
										Yesss! your website will be compatible with all kind of devices as we worked with responsive design.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header" id="headingSeventeen">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
											Q: Do you build search engine optimization into websites?
										</button>
									</h5>
								</div>
								<div id="collapseSeventeen" class="collapse" aria-labelledby="headingSeventeen" data-parent="#accordionFAQ">
									<div class="card-body">
										Nowadays, almost all websites should be coded with SEO in mind. There are all kinds of technical issues that a new website can introduce. If you're having a new site designed, it's a good idea to have a third party SEO firm conduct an SEO audit prior to launch to make sure there aren't any major issues.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingEighteen">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen">
											Q: Do you offer e-commerce services?
										</button>
									</h5>
								</div>
								<div id="collapseEighteen" class="collapse" aria-labelledby="headingEighteen" data-parent="#accordionFAQ">
									<div class="card-body">
										In addition to web design and development, a comprehensive website design company offers e-commerce services for businesses conducting online sales. Ask for specifics when inquiring about e-commerce solutions because they vary among web design firms. Some commonly offered e-commerce services are shopping carts; the ability to add discounts; support for multi-currencies; a customer database that interacts with your online store; cross and up sell features; inventory control; customization; reporting; and SEO integration.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingNineteen">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">
											Q: Will you integrate social media into my web design?
										</button>
									</h5>
								</div>
								<div id="collapseNineteen" class="collapse" aria-labelledby="headingNineteen" data-parent="#accordionFAQ">
									<div class="card-body">
										Yes, absolutely.
									</div>
								</div>
							</div>

						</div>
						<!-- .accordion -->

					</div>
					<!-- .site-main -->

				</div>

			</div>
		</div>
	</div>
	<!-- .wrapper -->


<?php get_footer(); ?>

</div><!-- #page -->