<?php
/*Template Name: Home Page*/
get_header(); 
?>

  <!-- blog section start here -->
  <div class="about-us-section-area about-bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/about-bg.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-10">
                    <div class="about-inner news">
                        <h1 class="title">News</h1>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="news.html">News</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
  </div>
  <!-- blog section End here -->

  <!-- blog items Section Start Here -->
  <div class="issues-around-us-section">
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title">
                    <h4 class="title">Read Our Daily blog</h4>
                    <p class="description wow animate__ animate__fadeInUp animated">
                        Every pleasures is to welcomed pain avoided owing to the duty the obligations of business it will
                        frequently.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
            
            <?php 
               $post_array = array('post_type'=>'post','posts_per_page'=>10);
               $post_query = new wp_query($post_array);
               while($post_query->have_posts()): $post_query->the_post();
               $post_image = wp_get_attachment_url(get_post_thumbnail_id($post_query->id));
            ?>        
                    <div class="col-lg-6 col-md-6">
                        <div class="news-single-items wow animate__animated animate__fadeInUp">
                          <div class="news-bg" style="background-image: url(<?php echo $post_image; ?>);">
                            <span class="even">Event</span>
                            <div class="content">
                              <h4 class="title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                              <div class="author-meta">
                              <p class="author-name">By:<?php wp_get_current_user(); ?></p>
                                <p><?php echo get_the_date( 'dS M Y', $post->ID );?></p>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
            <?php endwhile; wp_reset_query(); ?> 
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget-area">
                    <div class="widget widget_search wow animate__animated animate__fadeInRight">
                        <h2 class="widget-title style-01">Search</h2>
                        <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
                    </div>
                    <div class="widget widget_recent_posts wow animate__animated animate__fadeInRight animate__delay-1s">
                        <h4 class="widget-title style-02">Recent Post</h4>
                        <ul class="recent_post_item">
                    
                    <?php 
                       $post_array = array('post_type'=>'post');
                       $post_query = new wp_query($post_array);
                       while($post_query->have_posts()): $post_query->the_post();
                       $post_image = wp_get_attachment_url(get_post_thumbnail_id($post_query->id));
                    ?>
                      <li class="single-recent-post-item">
                                <div class="thumb">
                                <img src="<?php echo $post_image; ?>" alt="recent post">
                                </div>
                                <div class="content">
                                <span class="time"><?php echo get_the_date( 'dS M Y', $post->ID );?></span>
                                    <h4 class="title"><a href="#"><?php the_title(); ?></a></h4>
                                </div>
                            </li>
                    <?php endwhile; wp_reset_query(); ?> 
                        </ul>
                    </div>
                    <div class="widget widget_archive wow animate__animated animate__fadeInRight animate__delay-2s">
                        <h3 class="widget-title style-02">category</h3>
                        <ul class="blog-cat">
                             <?php
                                $args = array(
                                    'orderby'                  => 'name',
                                    'order'                    => 'ASC',
                                    'taxonomy'                 => 'category');
                                $categories = get_categories($args);
                                foreach ( $categories as $category ) :
                                $category_link = get_category_link( $category->term_id );
                             ?>
                            <li>
                                <a href='<?php echo $category_link; ?>' title='<?php echo $category->name; ?>'> <?php echo $category->name ?> <span>(<?php echo $category->count ?>)</span> </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                  <!--   <div id="tag_cloud-2" class="widget widget_tag_cloud wow animate__animated animate__fadeInRight animate__delay-3s">
                        <h2 class="widget-title style-02">Tags</h2>
                        <div class="tagcloud">
                            <a href="#">Branding</a>
                            <a href="#">Art guide</a>
                            <a href="#">Marketing</a>
                            <a href="#">Gallery</a>
                            <a href="#">Corporate</a>
                            <a href="#">Business</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

        
     <!--    <div class="row">
            <div class="col-lg-7">
                <div class="blog-pagination">
                    <div class="blog-pagination margin-top-30">
                        <ul>
                            <li><span>PREV</span></li>
                            <li><a class="page-numbers" href="#">01</a></li>
                            <li><a class="page-numbers current" href="#">02</a></li>
                            <li><a class="page-numbers" href="#">03</a></li>
                            <li><a class="page-numbers" href="#">04</a></li>
                            <li><span class="next">NEXT</span></li>
                        </ul>
                    </div>                            
                </div>
            </div>
        </div> -->
      </div>
  </div>
  <!-- blog Items Section Start Here -->

 <?php get_footer(); ?>