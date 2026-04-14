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

<!-- Thank You Modal -->
<?php if (isset($_GET['contact']) && $_GET['contact'] === 'success'): ?>
  <div id="thank-you-modal"
    class="fixed inset-0 z-50 flex items-center justify-center overflow-auto transition-opacity duration-300"
    style="background-color: rgba(0, 0, 0, 0.6); backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px);">
    <div
      class="relative bg-white w-[90%] max-w-md p-8 sm:p-10 rounded-2xl shadow-2xl text-center transform transition-all duration-300 scale-100 opacity-100">
      <!-- Close Button -->
      <button onclick="document.getElementById('thank-you-modal').style.display='none'"
        class="absolute top-4 right-4 text-gray-400 hover:text-gray-800 focus:outline-none transition-colors">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>

      <!-- Success Icon -->
      <!-- <div class="mx-auto flex items-center justify-center h-20 w-20 rounded-full bg-green-100 mb-6 shadow-sm">
      <svg class="h-10 w-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
      </svg>
    </div> -->

      <h3 class="text-3xl font-bold text-gray-900 mb-3 tracking-tight">Thank You!</h3>
      <p class="text-lg text-gray-600 mb-8 leading-relaxed">Your message has been successfully sent. We will get back to
        you shortly.</p>

      <button onclick="document.getElementById('thank-you-modal').style.display='none'"
        class="rv-button rv-button-sm w-full flex justify-center !bg-red-500 !text-white"
        style="background-color: #ef4444 !important; color: white !important;">
        <div class="rv-button-top">
          <span>Close</span>
        </div>
        <div class="rv-button-bottom">
          <span>Close</span>
        </div>
      </button>
    </div>
  </div>

  <script>
    // Clean up the URL by removing the ?contact=success parameter without reloading
    if (window.history.replaceState) {
      const url = new URL(window.location);
      url.searchParams.delete('contact');
      window.history.replaceState({ path: url.href }, '', url.href);
    }
  </script>
<?php endif; ?>

<?php
get_footer();
