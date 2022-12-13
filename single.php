
<!-- header code start -->
<?php get_header(); ?>
<!-- header code end -->


<section class="single-post">
	<div class="container">
		<div class="row">

			<!-- post details -->
			<div class="col-lg-8">
<div class="cs-blog-detail">
    <div class="cs-main-post">
        <figure>
        	<?php 
        	if(has_post_thumbnail()):
        		the_post_thumbnail('medium_large', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']);

        	endif;


        	?>
        </figure>
    </div>
    <div class="cs-post-title">
        <div class="cs-author">
            <figure>
                <a href="http://jobcareer.chimpgroup.com/jobdoor/user/jobcareer-admin/"><img width="32" height="32" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" data-pagespeed-url-hash="1229941675" class="avatar avatar-32 photo" srcset="http://1.gravatar.com/avatar/7a20fad302fc2dd4b4649dc5bdb3c463?s=64&amp;d=mm&amp;r=g 2x" src="http://1.gravatar.com/avatar/7a20fad302fc2dd4b4649dc5bdb3c463?s=32&amp;d=mm&amp;r=g" alt=""></a>
            </figure>
            <div class="cs-text">
                <a href="http://jobcareer.chimpgroup.com/jobdoor/user/jobcareer-admin/"><?php echo get_the_author_meta(); ?></a>
            </div>
        </div>
        <div class="post-option">
           
       <span class="post-date"><a href="http://jobcareer.chimpgroup.com/jobdoor/2015/11/"><i class="cs-color icon-calendar6"></i><?php echo get_the_date(); ?></a></span>
            <span class="post-comment"><a href="http://jobcareer.chimpgroup.com/jobdoor/experience-writing-for-producing-a-newscast/#comments"><i class="cs-color icon-chat6"></i><?php echo comments_number(); ?></a></span>
        </div>
    </div>
    <div class="post_title">
    	<h2 class="card-title my-3"><?php echo the_title(); ?></h2>
    </div>
    <div class="cs-post-option-panel">
        <div class="rich-editor-text">
           <p><?php echo the_content(); ?></p>
        </div>
    </div>
    <div class="cs-tags">
        <div class="tags">
            <?php echo the_tags(); ?>
        </div>
      
    </div>
    <div class="p_comments">
    	<?php 
if ( comments_open() || get_comments_number() ) :
	comments_template();
endif;
    	?>
    </div>

   
</div>
			</div>
			<!-- sidebar -->
<div class="col-lg-4">
<?php get_sidebar(); ?>
      </div>

			
		</div>
		
	</div>
	
</section>





<!-- footer start -->
<?php get_footer(); ?>
<!-- footer end -->