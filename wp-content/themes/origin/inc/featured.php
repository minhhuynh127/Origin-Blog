<div id="page-info">
    <div id="featured">
        <div id="accordion">
            <dl class="easy-accordion">
                <?php
                is_numeric(get_option('origin-num-slides')) ? $num_slides = get_option('origin-num-slides') : $num_slides = 6 ;
                global $post;
                $args = array('numberposts' => $num_slides, 'category' => 3);
                $custom_post = get_posts($args);
                foreach ($custom_post as $post) : setup_postdata($post);
                ?>
                    <dt><?php the_title() ?></dt>
                    <dd>
                        <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                        <p>
                            <?php the_post_thumbnail(); ?>
                            <?php the_excerpt() ?>
                            <!-- <a href="" class="more">Read more</a> -->
                        </p>
                    </dd>
                <?php
                endforeach;
                wp_reset_postdata();

                ?>
            </dl>
        </div>
        <!-- end accordion -->
    </div>
    <!-- end featured -->
    <div id="facebook">
        <!-- <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v20.0&appId=640617901208585" nonce="GjwYLPjQ"></script>
        <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="225px" data-height="120px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
            <blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore">
                <a href="https://www.facebook.com/facebook">Facebook</a>
            </blockquote>
        </div> -->
        <?php get_option('origin-facebook') ?>
    </div>
</div>
<!-- end page-info -->