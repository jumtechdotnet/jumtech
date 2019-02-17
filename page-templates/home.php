<?php
/**
 * Template Name: Home
 *
 * Display as homepage
 *
 * @package jumtechWP
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'jumtechWP_container_type' );

?>

<div class="site-hero section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="promo-video embed-responsive embed-responsive-16by9">
            
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/BmMUfcqZdF0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="overlay"></div>
        </div>

        <div class="col-md-6">
          <div class="promo-text">
            
            <h1>Let's <br> 
              <span class="typer" id="main" data-words="build your
              idea together, go to the next level, focus on satisfaction" data-colors="#212529" data-delay="100" data-deleteDelay="1000"></span>
              <span class="cursor" data-owner="main"></span>
            </h1>

            <div id="sms">
              <p class="subsfont">
                Subscribe us for our weekly 
                <strong>newsletters.</strong>
              </p>
              <div class="site-news">
                <?php echo do_shortcode('[mc4wp_form id="1713"]'); ?>
              </div>

          </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-motto section">
    <div class="container">
      <div class="row">

        <div class="col-md-4">
          <div class="motto-item one">
            <div class="number">
              01
            </div>
            <div class="text">
              Let's Build <br>
              your idea <br>
              together
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="motto-item two">
            <div class="number">
              02
            </div>
            <div class="text">
              We focus <br>
              on your <br>
              satisfaction 
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="motto-item one">
            <div class="number">
              03
            </div>
            <div class="text">
              Let's go <br>
              to the <br>
              next level
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="area-of-work section double">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- scroll down -->
          <div class="scroll-down">
            <span>scroll down</span>
          </div>
          <div class="heading-block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/1.png" alt="icon" class="heading-icon">
            <h1 class="heading">Area of work</h1>
            <p class="heading-description">
              We do provide web services on different area.  We have an expert on every sector to provide you the best services. 
            </p>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="work-area one">
            <div class="icon"></div>
            <div class="name">
              Web development
            </div>
            <div class="description">
              Professional & Expert level - Mobile and Browser Friendly - Custom & Responsive web Design - Secure web solution - for any Business and Start-up - Latest and Proven web Technologies.
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="work-area two">
            <div class="icon"></div>
            <div class="name">
              Domain/Hosting
            </div>
            <div class="description">
              Reliable - Low price rate - Faster - Safer - Economic & Dedicated - 24/7 Tech Support - 99.9% uptime. That’s why lots of people taking services from us.
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="work-area three">
            <div class="icon"></div>
            <div class="name">
              Design
            </div>
            <div class="description">
              Creative Designers - Web page design - Logo design - PSD file design - Business card design - Brand design - Brochures & Leaflet design - Poster design - UI/UX design - Ultimate quality - Desirable price.
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="work-area four">
            <div class="icon"></div>
            <div class="name">
              Maintenance 
            </div>
            <div class="description">
              Website in troubles? Pro-Skill - Expert - right people at the right time - Gurantee - on time service - affordable budget.
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="work-area five">
            <div class="icon"></div>
            <div class="name">
              Digital Marketing
            </div>
            <div class="description">
              Stunning blog - Stunning templates - Easy blog editor - Custom domains - Social and Promotional tools - Video and Photo galleries - Advanced SEO features - Easy to create and manage - Low price.
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="work-area six">
            <div class="icon"></div>
            <div class="name">
              Security
            </div>
            <div class="description">
              Want your website safe and run well? Security experts - Managed Security Service - Adaptive security — from small businesses to enterprise, data center, and network service provider - Convenient cost.
 
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="workflow section">
    <div class="container">
      <div class="row">

        <div class="col-md-12">
          <div class="heading-block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/2.png" alt="icon" class="heading-icon">
            <h1 class="heading">How we work in projects</h1>
            <p class="heading-description">
              Well plan is half done! To help your idea or business grow we try to follow our best strategy. We focus on step by step procedure to provide you the best results. The way Jumtech do things better than others.
            </p>
          </div>
        </div>

        <div class="col-sm-6 col-md-3 center">
          <div class="work-stage">
            <div class="box">
              <div class="color-box">
                <h2>requirements <br> & <br> idea</h2>
              </div>
            </div>
            <div class="number">
              01
            </div>
            <div class="absolute-text">
              You have an awesome idea and to make it really happen there need some requirements.  We suggest you to give priority on your idea and requirements.
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-3 center">
          <div class="work-stage">
            <div class="box">
              <div class="color-box">
                <h2>wireframe</h2>
              </div>
            </div>
            <div class="number">
              02
            </div>
            <div class="absolute-text">
              Wireframe is a visual guide and skeletal framework of a website. It helps us in arranging your elements to accomplish your idea and requirements.
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-3 center">
          <div class="work-stage">
            <div class="box">
              <div class="color-box">
                <h2>prototype <br> design</h2>
              </div>
            </div>
            <div class="number">
              03
            </div>
            <div class="absolute-text">
              A prototype design is a mock-up or demo of what a website will look like when it goes live. You can seek your website before it goes on final development..
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-3 center">
          <div class="work-stage">
            <div class="box">
              <div class="color-box">
                <h2>coding</h2>
              </div>
            </div>
            <div class="number">
              04
            </div>
            <div class="absolute-text">
              Coding is the thing that makes your website design live. We write the best codes to make your site light and active.
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="team section">
    <div class="container">
      <div class="row">

        <div class="col-md-12">
          <div class="heading-block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/3.png" alt="icon" class="heading-icon">
            <h1 class="heading">Our Team</h1>
            <p class="heading-description">
              Supported by real people <br>
              <span>24/7</span> <br>
              Our support team are here to help with your idea. Check out FAQs, send us an email or call us directly.
            </p>
          </div>
        </div>

        <div class="col-md-12">
          <div class="team-box one">

            <div class="call-us">
              <div class="text">
                <p><span>Questions?</span></p>
                <p>Call us <br> +8801787503322</p>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>pricing">check our pricing</a>
                <i class="fas fa-arrow-right"></i>
              </div>
              <div class="icon">
                <i class="fas fa-phone"></i>
              </div>
            </div>
            <div class="team-box two">

              <!-- team members -->
              <div class="person one">
                <img src="<?php echo get_template_directory_uri(); ?>/images/team/p1.jpg" alt="">
                <div class="designation">
                  <div class="name">
                    Faizul Haque
                  </div>
                  <div class="role">
                    Back end Developer
                  </div>
                  <div class="area">
                    Programming & Security
                  </div>
                </div>
              </div>

              <div class="person two">
                <img src="<?php echo get_template_directory_uri(); ?>/images/team/p2.jpg" alt="">
                <div class="designation">
                  <div class="name">
                    Arnob Chakma
                  </div>
                  <div class="role">
                    Cheif Designer
                  </div>
                  <div class="area">
                      UI/UX Design
                  </div>
                </div>
              </div>

              <div class="person one">
                <img src="<?php echo get_template_directory_uri(); ?>/images/team/p3.jpg" alt="">
                <div class="designation">
                  <div class="name">
                    Reagan Dewan
                  </div>
                  <div class="role">
                    CEO
                  </div>
                  <div class="area">
                    Digital Marketing
                  </div>
                </div>
              </div>
              <div class="person one">
                <img src="<?php echo get_template_directory_uri(); ?>/images/team/p4.jpg" alt="">
                <div class="designation">
                  <div class="name">
                    Tamal Chakma
                  </div>
                  <div class="role">
                    Back end developer
                  </div>
                  <div class="area">
                    Proggramming
                  </div>
                </div>
              </div>

              <div class="person one">
                <img src="<?php echo get_template_directory_uri(); ?>/images/team/p5.jpg" alt="">
                <div class="designation">
                  <div class="name">
                    Manasvi P.
                  </div>
                  <div class="role">
                    Front-end Developer
                  </div>
                  <div class="area">
                    Design & Development
                  </div>
                </div>
              </div>

              <div class="person one">
                <img src="<?php echo get_template_directory_uri(); ?>/images/team/p6.jpg" alt="">
                <div class="designation">
                  <div class="name">
                    Pranab Chakraborty
                  </div>
                  <div class="role">
                    Designer
                  </div>
                  <div class="area">
                    Branding & Illustration
                  </div>
                </div>
              </div>

              <div class="person one">
                <img src="<?php echo get_template_directory_uri(); ?>/images/team/p7.jpg" alt="">
                <div class="designation">
                  <div class="name">
                    Sourabh Chakma
                  </div>
                  <div class="role">
                    Accountant
                  </div>
                  <div class="area">
                    Finace & Marketing
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="clients section">
    <div class="container">
      <div class="row">

        <div class="col-md-12">
          <div class="heading-block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/4.png" alt="icon" class="heading-icon">
            <h1 class="heading">Our valuable clients</h1>
            <p class="heading-description">
              Our support team are here to help with your idea. Check out FAQs send us an email or call us directly.
            </p>
          </div>
        </div>

        <div class="col-md-12">
          <div class="clients-list">
            <a href="" class="client-address" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/clients/1.png" alt="logo">
            </a>
            <a href="" class="client-address" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/clients/2.png" alt="logo">
            </a>
            <a href="" class="client-address" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/clients/3.png" alt="logo">
            </a>
            <a href="" class="client-address" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/clients/4.png" alt="logo">
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <?php get_footer(); ?>

</div><!-- #page -->