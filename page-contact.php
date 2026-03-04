<?php
/**
 * Template Name: Contact Page
 *
 * @package LijMec
 */

get_header();
?>

<!--=====================================
   Contact Page Header Section
======================================-->

<section class="pt-28 md:pt-[250px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden">
  <!-- Gradient Background -->
  <div id="hero-gradient-wrapper"
    class="absolute w-[44%] lg:w-[40%] h-[44%] lg:h-[40%] top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 -z-10 blur-[60px] max-sm:scale-125 md:scale-[0.72]">
    <img src="<?php echo get_template_directory_uri(); ?>/images/images/hero-gradient-background-02.png"
      alt="hero-gradient-background" id="hero-gradient"
      class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2" />
  </div>

  <!-- Header Content -->
  <div class="container">
    <div class="text-center reveal-me">
      <div class="rv-badge reveal-me">
        <span class="rv-badge-text">Contact Us</span>
      </div>
      <h1 class="mt-3 lg:mt-8 mb-4 md:mb-7">Let's Work Together</h1>
      <p class="">Discover our innovative, cutting-edge no-code websites, crafted to effortlessly <br> captivate and
        engage your visitors.</p>
    </div>
  </div>
</section>

<!-- Form Section -->

<section class="pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
  <div class="container">
    <!-- Contact Form -->
    <form class="grid grid-cols-1 md:grid-cols-2 gap-[30px] max-w-[800px] mx-auto reveal-me" method="post"
      action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
      <input type="hidden" name="action" value="lijmec_contact_form">
      <?php wp_nonce_field('lijmec_contact_form', 'lijmec_contact_nonce'); ?>

      <!-- Full Name Field -->
      <div class="md:col-span-full">
        <label for="name" class="text-2xl leading-[1.2] tracking-[-0.48px] text-secondary">
          Full Name
        </label>
        <input type="text" name="name" id="name" placeholder="Enter your full name" required
          class="py-4 pl-5 bg-backgroundBody focus:outline-none focus:border-primary border w-full text-colorText text-xl leading-[1.4] tracking-[0.4px] mt-3" />
      </div>

      <!-- Place Field -->
      <div>
        <label for="place" class="text-2xl leading-[1.2] tracking-[-0.48px] text-secondary dark:text-backgroundBody">
          Place
        </label>
        <input type="text" name="place" id="place" placeholder="Enter your place"
          class="py-4 pl-5 bg-backgroundBody focus:outline-none focus:border-primary border w-full text-colorText text-xl leading-[1.4] tracking-[0.4px] mt-3" />
      </div>

      <!-- Email Field -->
      <div>
        <label for="email" class="text-2xl leading-[1.2] tracking-[-0.48px] text-secondary dark:text-backgroundBody">
          Email
        </label>
        <input type="email" name="email" id="email" placeholder="Enter your email" required
          class="py-4 pl-5 bg-backgroundBody focus:outline-none focus:border-primary border w-full text-colorText text-xl leading-[1.4] tracking-[0.4px] mt-3" />
      </div>

      <!-- Message -->
      <div class="md:col-span-full">
        <label for="message" class="text-2xl leading-[1.2] tracking-[-0.48px] text-secondary dark:text-backgroundBody">
          Message
        </label>
        <textarea name="message" id="message" placeholder="Enter your message" rows="5" required
          class="py-4 pl-5 bg-backgroundBody focus:outline-none focus:border-primary border w-full text-colorText text-xl leading-[1.4] tracking-[0.4px] mt-3"></textarea>
      </div>

      <!-- Submit Button -->
      <div class="col-span-full mx-auto sm:mt-14">
        <button type="submit" class="rv-button rv-button-sm !bg-red-500 !text-white"
          style="background-color: #ef4444 !important; color: white !important;">
          <div class="rv-button-top">
            <span>Send Message</span>
          </div>
          <div class="rv-button-bottom">
            <span>Send Message</span>
          </div>
        </button>
      </div>
    </form>
  </div>
</section>

<?php
get_footer();
