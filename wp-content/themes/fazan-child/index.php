<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

<section class="hero-wrap js-fullheight" style="background-image: url('<?php bloginfo('template_url'); ?>/images/fazanerija_bg.jpg');">
      <div class="overlay" id="banner-lovni-turizam"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }">
          	<p class="d-flex align-items-center" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
							<a href="https://www.youtube.com/watch?v=u35ttaoUN8Y" class="icon-video popup-vimeo d-flex justify-content-center align-items-center mr-3">
    						<span class="ion-ios-play play mr-2"></span>
    						<span class="watch">Pogledaj video</span>
    					</a>
						</p>
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Lovačko društvo "FAZAN"</h1>
            <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Jedina fazanerija u Hrvatskoj koja ima svoje matično jato</p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-services ftco-no-pt">
      <div class="container">
        <div class="row services-section">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon"><span class="flaticon-layers"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Fazanerija</h3>
                <p>Fazanerija kapaciteta 30.000 fazana. Posljednih nekoliko godina uzgajamo od 18.000 do 22.000 fazana. izmjena</p>
                <p><a href="<?php bloginfo('url'); ?>/fazanerija/" class="btn btn-primary">Pročitaj više</a></p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon"><span class="flaticon-compass-symbol"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Lovni turizam</h3>
                <p>Pružanje lovnih i usluga lovcima turistima. U paket aranžmane ulaze i ostale prateće usluge.</p>
                <p><a href="<?php bloginfo('url'); ?>/lovni-turizam/" class="btn btn-primary">Pročitaj više</a></p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon"><span class="flaticon-layers"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Smještaj i sala</h3>
                <p>Sobe za spavanje i sala za stotinjak gostiju. Za cjelovitu i zaokruženu ponudu prestižne lovno-turističke destinacije.</p>
                <p><a href="<?php bloginfo('url'); ?>/smjestaj-sala/" class="btn btn-primary">Pročitaj više</a></p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="o-nama" data-section="about">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 col-lg-4 d-flex">
    				<div class="img d-flex align-self-stretch align-items-center" style="background-image: url('<?php bloginfo('template_url'); ?>/images/o_nama.jpg');">
    					
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-8 pl-lg-5 py-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">Dobro došli</span>
		            <h2 class="mb-4">Proizvodnja fazana od 1997. godine</h2>
					<p>Lovačko društvo Fazan iz Darde, danas ima 58 članova. Posjeduje drugu po veličini fazaneriju u Hrvatskoj. Njezin je kapacitet 30.000, a posljednjih nekoliko godina uzgajaju od 18.000 do 22.000 fazana.</p>
		            <p>Jedina je fazanerija u Hrvatskoj koja ima svoje matično jato, što znači da proizvodi i jaja i fazanske piliće. Njima jednim dijelom napučuju vlastito lovište dok dio prodaju drugim lovačkim društvima. </p>
		            <p>Posljednih je godina snažno razvilo i druge svoje neprofitne i profitne djelatnosti, sagradilo je vlastitu klaonicu i hladnjaču za konfekcioniranje divljači kao i sobe sobe za spavanje te danas imaju cjelovitu i zaokruženu ponudu prestižne lovno-turističke destinacije.</p>
		          </div>
		        </div>
		    		<div class="row">
		          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate d-flex">
		            <div class="block-18 text-center p-4 mb-4 align-self-stretch d-flex">
		              <div class="text">
		                <strong class="number" data-number="24">0</strong>
		                <span>Godine iskustva</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate d-flex">
		            <div class="block-18 text-center py-4 px-3 mb-4 align-self-stretch d-flex">
		              <div class="text">
		                <strong class="number" data-number="20000">0</strong>
		                <span>Fazana godišnje</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate d-flex">
		            <div class="block-18 text-center py-4 px-3 mb-4 align-self-stretch d-flex">
		              <div class="text">
		                <strong class="number" data-number="58">0</strong>
		                <span>Članova</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate d-flex">
		            <div class="block-18 text-center py-4 px-3 mb-4 align-self-stretch d-flex">
		              <div class="text">
		                <strong class="number" data-number="1100">0</strong>
		                <span>Zadovoljnih gostiju</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-project bg-light" data-section="projects" id="obavijesti">
    	<div class="container-fluid px-md-5">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Obavijesti</span>
            <h2 class="mb-4">Najnovije obavijesti</h2>
			<p class="mb-0"><a href="<?php bloginfo('url'); ?>/arhiva-obavijesti" class="btn btn-primary" id="arhiva-obavijesti-btn">Sve obavijesti</a></p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12 testimonial">
            <div class="carousel-project owl-carousel">
			<?php
						$query = new WP_Query( array( 'post_type' => 'obavijesti', 'posts_per_page' => '20', ) );
						// Start the Loop.
						while ($query->have_posts() ) :
						$query->the_post();
							?>
            	<div class="item">
            		<div class="project">
					<div class="text px-4 text-left">
			    					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			    				</div>
		    					<div class="">
									<a href="<?php the_permalink(); ?>" class="obavijest">
									<?php the_excerpt();?>
									</a>
			    				</div>
		    				</div>
            	</div>
				<?php endwhile;?>
            </div>
          </div>
	</div>
	</div>
    </section>

    <section class="ftco-section" data-section="team" id="tim">
    	<div class="container-fluid p-0">
    		<div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Članovi</span>
            <h2 class="mb-4">Upravni odbor</h2>
            <p style="color: #000;">Lovačko društvo Fazan iz Darde, danas broji 58 članova.</p>
          </div>
        </div>
        <div class="row no-gutters">
					<?php
						$query = new WP_Query( array( 'post_type' => 'upravni_odbor' ) );
						// Start the Loop.
						while ($query->have_posts() ) :
						$query->the_post();
							?>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch"> <?php
									// check if the post or page has a Featured Image assigned to it.
									if ( has_post_thumbnail() ) {
										the_post_thumbnail();
									}
								?>
								</div>
							</div>
							<div class="text d-flex justify-content-center pt-3 text-center">
								<div>
									<span class="position mb-2 text-center"><?php the_field('titula_clana_tima');; ?></span>
									<h3 class="mb-4 text-center"><?php the_title(); ?></h3>
									<div class="faded">
										<ul class="ftco-social text-center">
			                <li class="ftco-animate"><a href="mailto:<?php the_field('email_clana_upravnog_odbora'); ?>"><i class="fas fa-envelope mail-odbor"></i></a></li>
			              </ul>
		              </div>
		            </div>
							</div>
						</div>
					</div>
					<?php endwhile; ?>
				</div>
    	</div>
    </section>

    <section class="ftco-section bg-light" data-section="blog" id="vijesti">
      <div class="container">
        <div class="row justify-content-center mb-2 pb-5">   
		  <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Blog</span>
            <h2 class="mb-4">Pročitajte naše vijesti i priče</h2>
            <p style="color:#000">Lovačke priče i novosti iz svijeta lova</p>
          </div>
        </div>
        <div class="row d-flex">
		<?php
						$query = new WP_Query( array( 
							'post_type' => 'vijest',
							'posts_per_page' => '6',
						) );
						// Start the Loop.
						while ($query->have_posts() ) :
						$query->the_post();
							?>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="<?php the_permalink(); ?>" class="block-20">
								<?php
									// check if the post or page has a Featured Image assigned to it.
									if ( has_post_thumbnail() ) {
										the_post_thumbnail();
									}
								?>
								</a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one mr-3">
              			<span class="day"><?php the_time('jS'); ?></span>
              		</div>
              		<div class="two">
              			<span class="yr"><?php the_time('Y'); ?></span>
              			<span class="mos"><?php the_time('F'); ?></span>
              		</div>
              	</div>
                <h3 class="heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php the_excerpt();?>
                <div class="d-flex align-items-center meta">
	                <p class="mb-0"><a href="<?php the_permalink(); ?>" class="btn btn-secondary">Pročitaj više<span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<span class="mr-2"> Autor: <?php the_author_posts_link(); ?> </span>
	                </p>
                </div>
              </div>
            </div>
          </div>
		  <?php endwhile; ?>
		  <div class="col-lg-12 text-center">
		  <p class="mb-0"><a href="<?php bloginfo('url'); ?>/arhiva-vijesti" class="btn btn-secondary">Sve vijesti<span class="ion-ios-arrow-round-forward"></span></a></p>
		  </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section ftco-no-pb" data-section="contact" id="kontakt">
      <div class="container">
      	<div class="row justify-content-center mb-2 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Kontakt</span>
            <h2 class="mb-4">Kontaktirajte nas</h2>
            <p></p>
          </div>
        </div>
        <div class="row no-gutters block-9">
		<div class="col-xl-6 col-md-5 col-lg-5 col-sm-12 d-flex">
			  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2790.4566783441023!2d18.694075015823323!3d45.62156143095001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475ce0d3ea60f953%3A0x8294038af9fc3b3a!2sLOVA%C4%8CKO%20DRU%C5%A0TVO%20FAZAN!5e0!3m2!1shr!2shr!4v1616959398818!5m2!1shr!2shr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
          <div class="col-xl-6 col-md-7 col-lg-7 col-sm-12 order-md-last d-flex p-5 contact-form  form-group">
			<?php echo do_shortcode('[contact-form-7 id="64" title="Contact form 1"]'); ?>
	          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex contact-info">
          <div class="col-md-6 col-lg-4 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-signs"></span>
          		</div>
          		<h3 class="mb-4">Adresa</h3>
	            <p><a href="https://goo.gl/maps/fLJvXtCHRaJwqgBm9" target="_blank">Ljudevita Gaja 1G, 31326 Darda</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<h3 class="mb-4">Broj telefona</h3>
	            <p><a href="tel:+38531740204">+385 31 740204</a></p>
	          </div>
          </div>
          <div class="col-md-12 col-lg-4 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<h3 class="mb-4">Email adresa</h3>
	            <p><a href="mailto:ldfazan@gmail.com">ldfazan@gmail.com</a></p>
	          </div>
          </div>
        </div>
      </div>
    </section>
		

<?php
get_footer();
