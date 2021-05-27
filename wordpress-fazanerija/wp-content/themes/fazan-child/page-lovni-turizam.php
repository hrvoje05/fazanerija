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
<section class="hero-wrap hero-wrap-2" id="lovni-turizam-banner" style="background-image: url('<?php bloginfo('template_url'); ?>/images/lov_banner.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Lovni turizam</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php bloginfo('url'); ?>"> Naslovna</a></span><i class="fas fa-chevron-right" style="margin-right: 6px;"></i><span class="mr-2"><a href="<?php bloginfo('url'); ?>/lovni-turizam">  Lovni turizam</a></span></p>
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
		            <h2 class="mb-4">Lovni turizam</h2>
                    <p>Lovni turizam važna je sastavnica kontinentalnog turizma i potiče razvoj destinacija u unutrašnjosti zemlje produljujući tako turističku sezonu s ljetnih mjeseci na ostala godišnja doba. Ovaj oblik turizma u Hrvatsku privlači brojne inozemne turiste, posebice lovce s područja Italije, Austrije, Njemačke, Velike Britanije i Švicarske. </p>
                        <p>Dobra geoprometna povezanost Hrvatske i blizina emitivnih tržišta od velike su važnosti, 
                        a prelijepa priroda, odlična gastronomija i bogata kulturna baština samo su dio onoga u čemu mogu uživati lovci iz cijele Europe.</p>
					<p>S obzirom na to da svakom klijentu pristupamo individualno, svoje usluge nastojimo prilagoditi njegovim potrebama i željama te na taj način komercijalni lov učiniti nezaboravnim iskustvom prepunim uspomena za doživotno prepričavanje. 
                        Bilo da volite loviti sami, u društvu psa ili ptice grabljivice, u tišini ili uz hajku, naoružani puškom ili samo fotoaparatom, organizirat ćemo za vas uspješan i raznovrstan lov tijekom cijele kalendarske godine.</p>
		          </div>
		        </div>
		    		<div class="row">
				  <div class="col-lg-12 col-md-12">
				  <?php echo do_shortcode('[ngg src="galleries" ids="3" display="basic_thumbnail" thumbnail_crop="0"]')?>
				  </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>
<?php
get_footer();
