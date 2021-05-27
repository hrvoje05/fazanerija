<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php bloginfo('template_url'); ?>/images/fazanerija_banner.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Fazanerija</h1>
			<p class="breadcrumbs"><span class="mr-2"><a href="<?php bloginfo('url'); ?>"> Naslovna</a></span><i class="fas fa-chevron-right" style="margin-right: 6px;"></i><span class="mr-2"><a href="<?php bloginfo('url'); ?>/fazanerija">  Fazanerija</a></span></p>
          </div>
        </div>
      </div>
    </section>

<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="section-counter" data-section="about">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 col-lg-12 pl-lg-5 py-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">LD "FAZAN"</span>
		            <h2 class="mb-4">Proizvodnja fazana od 1997. godine</h2>
					<p>Druga po veličini fazanerija u Hrvatskoj. Njezin je kapacitet 30.000, a posljednjih nekoliko godina uzgaja se od 18.000 do 22.000 fazana godišnje.</p>
		            <p>Jedina je fazanerija u Hrvatskoj koja ima svoje matično jato, što znači da proizvodi i jaja i fazanske piliće. Njima jednim dijelom napučuju vlastito lovište dok dio prodaju drugim lovačkim društvima. </p>
		          </div>
		        </div>
		    		<div class="row">
		          <div class="col-md-6 col-lg-4 justify-content-center counter-wrap ftco-animate d-flex">
		            <div class="block-18 text-center p-4 mb-4 align-self-stretch d-flex">
		              <div class="text">
		                <strong class="number" data-number="24">0</strong>
		                <span>Godine iskustva</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-4 justify-content-center counter-wrap ftco-animate d-flex">
		            <div class="block-18 text-center py-4 px-3 mb-4 align-self-stretch d-flex">
		              <div class="text">
		                <strong class="number" data-number="20000">0</strong>
		                <span>Fazana godišnje</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-4 justify-content-center counter-wrap ftco-animate d-flex">
		            <div class="block-18 text-center py-4 px-3 mb-4 align-self-stretch d-flex">
		              <div class="text">
		                <strong class="number" data-number="30000">0</strong>
		                <span>Fazanskih jaja</span>
		              </div>
		            </div>
		          </div>
				  <div class="col-lg-12 col-md-6">
				  <?php echo do_shortcode('[ngg src="galleries" ids="1" display="basic_thumbnail" thumbnail_crop="0"]')?>
				  </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>
<?php
get_footer();
