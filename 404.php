<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package LijMec
 */

get_header();
?>

<section class="pt-[137px] md:pt-[160px] lg:pt-[240px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden">
  <!-- Gradient Background -->
  <div id="hero-gradient-wrapper"
    class="absolute w-[44%] lg:w-[40%] h-[44%] lg:h-[40%] top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 -z-10 blur-[60px] max-sm:scale-125 md:scale-[0.72]">
    <img src="<?php echo get_template_directory_uri(); ?>/images/images/hero-gradient-background.png" alt="hero-gradient-background" id="hero-gradient"
      class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2" />
  </div>

  <div class="container">
    <div class="text-center max-w-2xl mx-auto">
      <div class="rv-badge reveal-me mb-5">
        <span class="rv-badge-text">404 Error</span>
      </div>
      
      <h1 class="mb-5 reveal-me">
        <?php _e('Page Not Found', 'lijmec'); ?>
      </h1>
      
      <p class="text-xl mb-10 reveal-me">
        <?php _e('Sorry, the page you are looking for could not be found. It might have been moved or deleted.', 'lijmec'); ?>
      </p>

      <!-- Search Form -->
      <div class="mb-10 reveal-me">
        <form role="search" method="get" class="flex gap-3 max-w-md mx-auto" action="<?php echo esc_url(home_url('/')); ?>">
          <input 
            type="search" 
            name="s" 
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
      </div>

      <!-- Back to Home Button -->
      <div class="reveal-me">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="rv-button rv-button-sm !bg-red-500 !text-white inline-block"
          style="background-color: #ef4444 !important; color: white !important;">
          <div class="rv-button-top">
            <span><?php _e('Back to Home', 'lijmec'); ?></span>
          </div>
          <div class="rv-button-bottom">
            <span><?php _e('Back to Home', 'lijmec'); ?></span>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
