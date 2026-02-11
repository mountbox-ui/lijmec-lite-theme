<?php
/**
 * The template for displaying search results
 *
 * @package LijMec
 */

get_header();
?>

<section class="pt-[137px] md:pt-[160px] lg:pt-[240px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
  <div class="container">
    <!-- Search Header -->
    <div class="text-center mb-10">
      <div class="rv-badge reveal-me mb-3">
        <span class="rv-badge-text"><?php _e('Search Results', 'lijmec'); ?></span>
      </div>
      <h1 class="mb-5">
        <?php printf(__('Search Results for: %s', 'lijmec'), '<span class="text-primary">' . get_search_query() . '</span>'); ?>
      </h1>
    </div>

    <?php if (have_posts()) : ?>
      <!-- Search Results -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[30px] mb-10">
        <?php while (have_posts()) : the_post(); ?>
          <article class="border dark:border-dark p-6 reveal-me">
            <?php if (has_post_thumbnail()) : ?>
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium', array('class' => 'w-full h-auto mb-5')); ?>
              </a>
            <?php endif; ?>
            
            <div class="text-xs mb-2 opacity-70 uppercase">
              <?php echo get_post_type_object(get_post_type())->labels->singular_name; ?>
            </div>
            
            <h3 class="mb-3">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
            
            <div class="text-sm mb-3 opacity-70">
              <?php echo get_the_date(); ?>
            </div>
            
            <p class="mb-5"><?php echo get_the_excerpt(); ?></p>
            
            <a href="<?php the_permalink(); ?>" class="text-primary hover:underline">
              <?php _e('Read More', 'lijmec'); ?> →
            </a>
          </article>
        <?php endwhile; ?>
      </div>

      <!-- Pagination -->
      <div class="text-center">
        <?php
        the_posts_pagination(array(
          'mid_size' => 2,
          'prev_text' => __('← Previous', 'lijmec'),
          'next_text' => __('Next →', 'lijmec'),
        ));
        ?>
      </div>

    <?php else : ?>
      <!-- No Results -->
      <div class="text-center max-w-2xl mx-auto">
        <p class="text-xl mb-10">
          <?php _e('Sorry, no results were found for your search. Please try again with different keywords.', 'lijmec'); ?>
        </p>

        <!-- Search Form -->
        <form role="search" method="get" class="flex gap-3 max-w-md mx-auto mb-10" action="<?php echo esc_url(home_url('/')); ?>">
          <input 
            type="search" 
            name="s" 
            value="<?php echo get_search_query(); ?>"
            placeholder="<?php _e('Search...', 'lijmec'); ?>"
            class="flex-1 py-4 pl-5 bg-backgroundBody dark:bg-dark focus:outline-none focus:border-primary border dark:border-dark text-colorText dark:text-backgroundBody/70"
          />
          <button 
            type="submit" 
            class="rv-button rv-button-sm !bg-red-500 !text-white"
            style="background-color: #ef4444 !important; color: white !important;">
            <div class="rv-button-top">
              <span><?php _e('Search', 'lijmec'); ?></span>
            </div>
            <div class="rv-button-bottom">
              <span><?php _e('Search', 'lijmec'); ?></span>
            </div>
          </button>
        </form>

        <a href="<?php echo esc_url(home_url('/')); ?>" class="text-primary hover:underline">
          <?php _e('← Back to Home', 'lijmec'); ?>
        </a>
      </div>
    <?php endif; ?>
  </div>
</section>

<?php
get_footer();
