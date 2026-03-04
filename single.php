<?php
/**
 * The template for displaying all single posts
 *
 * @package LijMec
 */

get_header();
?>

<?php while (have_posts()):
  the_post(); ?>

  <section class="pt-[137px] md:pt-[160px] lg:pt-[240px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
    <div class="container">
      <article class="max-w-4xl mx-auto">
        <!-- Post Header -->
        <header class="mb-10">
          <h1 class="mb-5"><?php the_title(); ?></h1>

          <div class="flex flex-wrap gap-4 text-sm opacity-70 mb-8">
            <span><?php echo get_the_date(); ?></span>
            <span>•</span>
            <span><?php _e('By', 'lijmec'); ?>   <?php the_author(); ?></span>
            <?php if (has_category()): ?>
              <span>•</span>
              <span><?php the_category(', '); ?></span>
            <?php endif; ?>
          </div>

          <?php if (has_post_thumbnail()): ?>
            <figure class="mb-10">
              <?php the_post_thumbnail('large', array('class' => 'w-full h-auto')); ?>
            </figure>
          <?php endif; ?>
        </header>

        <!-- Post Content -->
        <div class="prose prose-lg max-w-none">
          <?php the_content(); ?>
        </div>

        <!-- Post Footer -->
        <footer class="mt-10 pt-10 border-t">
          <?php if (has_tag()): ?>
            <div class="mb-5">
              <strong><?php _e('Tags:', 'lijmec'); ?></strong>
              <?php the_tags('<span class="ml-2">', ', ', '</span>'); ?>
            </div>
          <?php endif; ?>

          <!-- Post Navigation -->
          <div class="flex justify-between mt-10">
            <div>
              <?php
              $prev_post = get_previous_post();
              if ($prev_post):
                ?>
                <a href="<?php echo get_permalink($prev_post); ?>" class="text-primary hover:underline">
                  ← <?php echo get_the_title($prev_post); ?>
                </a>
              <?php endif; ?>
            </div>
            <div>
              <?php
              $next_post = get_next_post();
              if ($next_post):
                ?>
                <a href="<?php echo get_permalink($next_post); ?>" class="text-primary hover:underline">
                  <?php echo get_the_title($next_post); ?> →
                </a>
              <?php endif; ?>
            </div>
          </div>
        </footer>

        <!-- Comments -->
        <?php
        if (comments_open() || get_comments_number()):
          comments_template();
        endif;
        ?>
      </article>
    </div>
  </section>

<?php endwhile; ?>

<?php
get_footer();
