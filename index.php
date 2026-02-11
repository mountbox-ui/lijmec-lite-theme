<?php
/**
 * The main template file
 *
 * @package LijMec
 */

get_header();
?>

<!-- -============================ LijMec ================================ -->
<section class="relative pt-[137px] md:pt-[160px] lg:pt-[240px] overflow-hidden">
  <!-- Gradient Background Wrapper -->
  <div id="hero-gradient-wrapper"
    class="absolute top-0 md:-top-[10%] left-0 lg:-left-[17%] 2xl:left-0 -z-10 blur-[65px]">
    <img src="<?php echo get_template_directory_uri(); ?>/images/images/hero-gradient-background.png" alt="hero-gradient-background" id="hero-gradient"
      class="scale-50 left-0 -top-[10%]" />
  </div>
  <div class="px-4 md:px-[30px] flex flex-col gap-y-10 gap-x-5 lg:flex-row justify-between">
    <!-- Content -->
    <div class="md:flex-1">
      <h1
        class="reveal-me text-5xl sm:text-[55px] md:text-[67px] lg:text-[80px] font-normal leading-tight 2xl:leading-[1.17] tracking-[-2px] 2xl:tracking-[-2.88px]">
        Precision Wire <br class="hidden lg:block" />
        Harness Engineering <br class="hidden lg:block" />
        for<i class="font-instrument"> Critical Industries</i>
      </h1>
      <p class="reveal-me mt-3">
        Customized wiring and cable harness solutions designed for
        <br class="hidden lg:block" />
        performance, reliability, and optimized turnaround.
      </p>

      <!-- Hero Buttons -->
      <ul class="mt-7 md:mt-9 lg:mt-14 cursor-pointer reveal-me-2">
        <li>
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="rv-button rv-button-sm block md:inline-block !bg-red-500 !text-white"
            style="background-color: #ef4444 !important; color: white !important;">
            <div class="rv-button-top text-center">
              <span>Explore Capabilities</span>
            </div>
            <div class="rv-button-bottom text-center">
              <span class="text-nowrap">Explore Capabilities</span>
            </div>
          </a>
        </li>
      </ul>
    </div>

    <div class="md:flex-1 flex flex-col sm:flex-row gap-5">
      <figure class="mt-[78px] relative">
        <img src="<?php echo get_template_directory_uri(); ?>/images/images/hero-img/hero-img-1.jpg" alt="hero-img" class="max-sm:w-full" />
      </figure>
      <figure>
        <img src="<?php echo get_template_directory_uri(); ?>/images/images/hero-img/hero-img-2.jpg" alt="hero-img" class="max-sm:w-full" />
      </figure>
    </div>
  </div>
</section>

<?php if (have_posts()) : ?>
  <!-- Blog Posts Section -->
  <section class="pt-28 md:pt-[250px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
    <div class="container">
      <div class="text-center mb-8 md:mb-14">
        <div class="rv-badge reveal-me">
          <span class="rv-badge-text">Latest News</span>
        </div>
        <h2 class="my-3 text-appear">
          Our Latest <i class="font-instrument">Updates</i>
        </h2>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[30px]">
        <?php while (have_posts()) : the_post(); ?>
          <article class="border dark:border-dark p-6 reveal-me">
            <?php if (has_post_thumbnail()) : ?>
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('large', array('class' => 'w-full h-auto mb-5')); ?>
              </a>
            <?php endif; ?>
            
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
      <div class="mt-10 text-center">
        <?php
        the_posts_pagination(array(
          'mid_size' => 2,
          'prev_text' => __('← Previous', 'lijmec'),
          'next_text' => __('Next →', 'lijmec'),
        ));
        ?>
      </div>
    </div>
  </section>
<?php else : ?>
  <section class="pt-28 md:pt-[250px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
    <div class="container text-center">
      <h2><?php _e('No posts found', 'lijmec'); ?></h2>
      <p><?php _e('Sorry, no posts matched your criteria.', 'lijmec'); ?></p>
    </div>
  </section>
<?php endif; ?>

<?php
get_footer();
