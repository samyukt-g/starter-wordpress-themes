<?php get_header(); ?>
        <!-- POSTS LOOP -->
        <div class="main">
          <div class="container">
              <?php if(have_posts()) : ?>
                <?php while (have_posts()): the_post(); ?>
                  <article class="post">
                    <h3>
                      <?php the_title(); ?>
                    </h3>
                    <?php if(has_post_thumbnail()) : ?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>
                    <?php the_content(); ?>
                  </article>
                <?php endwhile; ?>
              <?php else : ?>
                <?php echo wpautop('Sorry, no posts were found...'); ?>
              <?php endif; ?>
          </div>
        </div>
<?php get_footer(); ?>
