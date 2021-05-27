<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
            <h1 class="mb-3 bread">Arhiva autora</h1>
			<p class="breadcrumbs"><span class="mr-2"><a href="<?php bloginfo('url'); ?>"> Naslovna</a></span><i class="fas fa-chevron-right" style="margin-right: 6px;"></i><span class="mr-2"><a href="<?php bloginfo('url');?>/author/<?php the_author()?>">  <?php the_author(); ?></a></span></p>
          </div>
        </div>
      </div>
    </section>

	<section class="ftco-section bg-light" data-section="blog" id="arhiva-vijesti">
      <div class="container">
        <div class="row justify-content-center pb-5">   
		  <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Arhiva autora: <?php the_author(); ?></h2>
          </div>
        </div>
        <div class="row d-flex">
		<?php if ( get_query_var('paged') ) {
      $paged = get_query_var('paged');
    } else if ( get_query_var('page') ) {
      $paged = get_query_var('page');
    } else {
      $paged = 1;
    }
                $args=array(
                        'paged' => $paged,
                        'post_type' =>  array('obavijesti', 'vijest'),
                        'posts_per_page' => '6',
                        'order' => 'DESC',
                        'orderby' => 'date',
                );
                 $wp_query = new WP_query($args);
                 if ( $wp_query -> have_posts() ) :
                 $j = 1;
                 while ($wp_query -> have_posts()): $wp_query -> the_post();
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
              	</div>
                <h3 class="heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php the_excerpt();?>
                <div class="d-flex align-items-center meta">
	                <p class="mb-0"><a href="<?php the_permalink(); ?>" class="btn btn-secondary">Pročitaj više<span class="ion-ios-arrow-round-forward"></span></a></p>
					<div class="one ml-2 mr-1 text-right">
              			<span class="day2"><?php the_time('jS'); ?></span>
              		</div>
              		<div class="two">
              			<span class="yr"><?php the_time('Y'); ?></span>
              			<span class="mos"><?php the_time('F'); ?></span>
              		</div>
                </div>
              </div>
            </div>
          </div>
		  <?php endwhile; ?>
		  <div class="col-md-12 text-left paginacija-arhiva"><?php prestigo_SPaginate();endif;?></div>
        </div>
      </div>
    </section>
<?php
get_footer();
