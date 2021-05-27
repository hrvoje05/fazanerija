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
<section class="hero-wrap hero-wrap-2" id="smjestaj-sala-banner" style="background-image: url('<?php bloginfo('template_url'); ?>/images/smjestaj_sala_banner.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Smještaj i sala</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php bloginfo('url'); ?>"> Naslovna</a></span><i class="fas fa-chevron-right" style="margin-right: 6px;"></i><span class="mr-2"><a href="<?php bloginfo('url'); ?>/smjestaj-sala">  Smještaj i sala</a></span></p>
          </div>
        </div>
      </div>
    </section>

<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="section-counter" data-section="about">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-12 col-lg-12 pl-lg-5 py-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">LD "FAZAN"</span>
		            <h2 class="mb-4">Smještaj i sala</h2>
					<p>Apartmani Lovačkog društva "Fazan" sagrađeni su 2010.g. kako bi imali cjelovitu i zaokruženu ponudu prestižne lovno-turističke destinacije. </p>
                    <p>Sastoje se od tri sobe s dva ležaja i jednim velikim dnevnim boravkom.</p>
		            <p>Svaka soba ima zasebnu kupaonicu s tuš kabinom. Dostupna za korištenje je i ljetna kuhinja.</p>
                    <p>U sklopu našeg objekta, posjedujemo i klimatiziranu salu opremljenom ozvučenjem i kuhinjskom opremom, kapaciteta 120 ljudi. </p>
		          </div>
		        </div>
		    		<div class="row">
				  <div class="col-lg-12 col-md-12">
				  <?php echo do_shortcode('[ngg src="galleries" ids="2" display="basic_thumbnail" thumbnail_crop="0"]')?>
				  </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>
<?php
get_footer();
