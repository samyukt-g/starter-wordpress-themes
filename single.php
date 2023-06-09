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
                    <div class="meta">
                      By <?php the_author(); ?> on <?php the_time('F j, Y'); ?>
                    </div>
                    <?php if(has_post_thumbnail()) : ?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>
                    <?php the_content(); ?>
                    <div class="comments-section">
                        <div class="container">
                            <?php comments_template(); ?>
                        </div>
                    </div>
                  </article>
                <?php endwhile; ?>
              <?php else : ?>
                <?php echo wpautop('Sorry, no posts were found...'); ?>
              <?php endif; ?>
          </div>
        </div>

<?php get_footer(); ?>
