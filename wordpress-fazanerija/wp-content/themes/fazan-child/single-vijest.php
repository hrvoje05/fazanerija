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

<section class="hero-wrap hero-wrap-2 banner-fazan" style="background-image: url('<?php bloginfo('template_url'); ?>/images/fazan_banner.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Vijest</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php bloginfo('url'); ?>"> Naslovna</a></span><i class="fas fa-chevron-right" style="margin-right: 6px;"></i><span class="mr-2"><a href="<?php bloginfo('url'); ?>/arhiva-vijesti"> Vijesti</a></span><i class="fas fa-chevron-right" style="margin-right: 6px;"></i><span class="mr-2"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></span></p>          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section">
      <div class="container">
      <p class="meta-obavijesti text-center"><?php the_time('F jS, Y'); ?></p> 
      <p class="text-center">
	                	<span class="mr-2"> Autor: <?php the_author_posts_link(); ?> </span>
	                </p>
      <h2 class="mb-3 text-center font-weight-bold"><?php the_title() ?></h2>
        <div class="row">
        <div class="<?php echo (has_post_thumbnail() ? 'col-lg-6' : 'd-none');?>">
          <?php
									// check if the post or page has a Featured Image assigned to it.
									if ( has_post_thumbnail() ) {
										the_post_thumbnail();
									}
								?>
          </div>
          <div class="<?php echo (has_post_thumbnail() ? 'col-lg-6' : 'col-lg-12'); ?> order-lg-last ftco-animate">
            <p><?php the_content(); ?></p>
            <p class="datoteka-obavijesti text-center font-weight-bold">
                            <?php
                            $file = get_field('prilozene_datoteke_vijesti');
                            if( $file ):
                                $url = wp_get_attachment_url( $file ); ?>
                                <a href="<?php echo esc_html($url); ?>" class="btn-dokumenti"><i class="fas fa-file-download"></i> Preuzmi dokumente</a>
                            <?php endif; ?>
                            </p>
                    
          </div> 
          </div>

        </div>
      </div>
    </section> <!-- .section -->

<?php
get_footer();
