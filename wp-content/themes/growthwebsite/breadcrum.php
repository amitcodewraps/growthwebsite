  <!-- blog section start here -->
  <div class="about-us-section-area about-bg margin-bottom-120" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/about-bg.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about-inner blog-single">
                        <h1 class="title"><?php the_title(); ?></h1>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                            <?php if( function_exists( 'bcn_display' ) ) bcn_display(); ?>>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
  </div>
  <!-- blog section End here -->