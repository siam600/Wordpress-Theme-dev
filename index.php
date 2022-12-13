
<!-- header code start -->
<?php get_header(); ?>
<!-- header code end -->

<section class="all-posts-banner">

		<div class="banner-img">
			<img src="<?php echo bloginfo('template_directory').'/assets/img/banner.jpg'?>" class="img-fluid">
			
		</div>
		

	

</section>

<section class="all-posts">
	<div class="container">
		<div class="row">



<?php 

if(have_posts()):
	while(have_posts()):
		the_post();
		// echo the_title();
		?>

			<div class="col-lg-4 mb-3">
				<div class="card">
        <div class="card-img">

        	<?php 
        	if(has_post_thumbnail()):
        		the_post_thumbnail();

        	endif;


        	?>
            <!-- <img src="http://placeimg.com/640/480/tech" alt=""> -->
        </div>
        <div class="card-content">
            <span class="card-tag"><?php echo the_category(); ?></span>
            <h2 class="card-title"><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
            <p class="card-desc"><?php echo the_excerpt(); ?></p>
            <div class="card-metadata">
                <!-- <div class="card-profile-img">
                    <img src="https://rvs-blog-card.vercel.app/vetri_suriya_1.jpg" alt="">
                </div>
                <div class="card-profile-content">
                    <h3>Vetri Suriya</h3>
                    <span>4h ago</span>
                </div> -->
            </div>
        </div>
    </div>
				
		</div>

		<?php

	endwhile;
endif;


?>
			
		</div>
		
	</div>
	
</section>





<!-- footer start -->
<?php get_footer(); ?>
<!-- footer end -->