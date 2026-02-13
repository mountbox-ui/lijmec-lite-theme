<!DOCTYPE html>
<html <?php language_attributes(); ?> class="dark bg-dark">

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5" />
  
  <!--Favicon-->
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/images/favicon-lijmec.svg" sizes="96x96" />
  <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/images/images/favicon-lijmec.svg" />
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/images/favicon-lijmec.svg" />
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/images/favicon-lijmec.svg" />
  
  <style>
    /* Force dark mode regardless of browser preference */
    :root {
      color-scheme: dark only;
    }
    html {
      color-scheme: dark only;
    }
  </style>
  
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <header id="header" class="w-full max-w-[1440px] mx-auto absolute top-0 left-0 right-0 z-[9999]">
    <div class="absolute lg:h-[155px] h-24 top-0 z-[21] pointer-events-none gradient-shadow w-full">
      <div class="absolute inset-0 pointer-events-none"
        style="backdrop-filter: blur(0px); -webkit-backdrop-filter: blur(0px)"></div>
      <div class="absolute inset-0 pointer-events-none rounded-[inherit]" style="
        mask-image: linear-gradient(
          0deg,
          rgba(255, 255, 255, 0) 0%,
          rgba(255, 255, 255, 1) 16.666666666666664%,
          rgba(255, 255, 255, 1) 33.33333333333333%,
          rgba(255, 255, 255, 0) 50%
        );
        -webkit-mask-image: linear-gradient(
          0deg,
          rgba(255, 255, 255, 0) 0%,
          rgba(255, 255, 255, 1) 16.666666666666664%,
          rgba(255, 255, 255, 1) 33.33333333333333%,
          rgba(255, 255, 255, 0) 50%
        );
        backdrop-filter: blur(-7px);
        -webkit-backdrop-filter: blur(-7px);
      "></div>
      <div class="absolute inset-0 pointer-events-none rounded-[inherit]" style="
        mask-image: linear-gradient(
          0deg,
          rgba(255, 255, 255, 0) 16.666666666666664%,
          rgba(255, 255, 255, 1) 33.33333333333333%,
          rgba(255, 255, 255, 1) 50%,
          rgba(255, 255, 255, 0) 66.66666666666666%
        );
        -webkit-mask-image: linear-gradient(
          0deg,
          rgba(255, 255, 255, 0) 16.666666666666664%,
          rgba(255, 255, 255, 1) 33.33333333333333%,
          rgba(255, 255, 255, 1) 50%,
          rgba(255, 255, 255, 0) 66.66666666666666%
        );
        backdrop-filter: blur(2px);
        -webkit-backdrop-filter: blur(2px);
      "></div>
      <div class="absolute inset-0 pointer-events-none rounded-[inherit]" style="
        mask-image: linear-gradient(
          0deg,
          rgba(255, 255, 255, 0) 33.33333333333333%,
          rgba(255, 255, 255, 1) 50%,
          rgba(255, 255, 255, 1) 66.66666666666666%,
          rgba(255, 255, 255, 0) 83.33333333333333%
        );
        -webkit-mask-image: linear-gradient(
          0deg,
          rgba(255, 255, 255, 0) 33.33333333333333%,
          rgba(255, 255, 255, 1) 50%,
          rgba(255, 255, 255, 1) 66.66666666666666%,
          rgba(255, 255, 255, 0) 83.33333333333333%
        );
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
      "></div>
      <div class="absolute inset-0 pointer-events-none rounded-[inherit]" style="
        mask-image: linear-gradient(
          0deg,
          rgba(255, 255, 255, 0) 50%,
          rgba(255, 255, 255, 1) 66.66666666666666%,
          rgba(255, 255, 255, 1) 83.33333333333333%,
          rgba(255, 255, 255, 0) 100%
        );
        -webkit-mask-image: linear-gradient(
          0deg,
          rgba(255, 255, 255, 0) 50%,
          rgba(255, 255, 255, 1) 66.66666666666666%,
          rgba(255, 255, 255, 1) 83.33333333333333%,
          rgba(255, 255, 255, 0) 100%
        );
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
      "></div>
      <div class="absolute inset-0 pointer-events-none rounded-[inherit]" style="
        mask-image: linear-gradient(
          0deg,
          rgba(255, 255, 255, 0) 66.66666666666666%,
          rgba(255, 255, 255, 1) 83.33333333333333%,
          rgba(255, 255, 255, 1) 100%,
          rgba(255, 255, 255, 0) 116.66666666666666%
        );
        -webkit-mask-image: linear-gradient(
          0deg,
          rgba(255, 255, 255, 0) 66.66666666666666%,
          rgba(255, 255, 255, 1) 83.33333333333333%,
          rgba(255, 255, 255, 1) 100%,
          rgba(255, 255, 255, 0) 116.66666666666666%
        );
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
      "></div>
    </div>
    <nav class="z-[1000] absolute w-full top-0 left-0 pt-1 sm:pt-5 nav-top" aria-label="Main navigation">
      <div class="flex justify-between py-2 md:py-5 px-5 md:px-10 xl:px-0 max-w-[1440px] mx-auto items-start md:items-center">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="relative z-[1002] w-40 lg:w-auto pl-2 lg:pl-0">
          <?php lijmec_custom_logo(); ?>
        </a>

        <!-- Desktop Menu -->
        <div class="flex items-center gap-x-10 hidden lg:flex">
          <ul class="flex items-center gap-x-10 text-white font-medium uppercase">
            <li><a href="#about-us" class="lenis-scroll-to hover:text-gray-300 transition-colors">About</a></li>
            <li><a href="#why-choose-us" class="lenis-scroll-to hover:text-gray-300 transition-colors">Why Choose Us</a></li>
            <li><a href="#what-we-offer" class="lenis-scroll-to hover:text-gray-300 transition-colors">What We Offer</a></li>
          </ul>
          <div class="flex items-center gap-x-10 text-white font-medium">
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="rv-button rv-button-sm !bg-red-500 !text-white"
                style="background-color: #ef4444 !important; color: white !important;">
              <div class="rv-button-top">
                <span>Contact Us</span>
              </div>
              <div class="rv-button-bottom">
                <span>Contact Us</span>
              </div>
            </a>
          </div>
        </div>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-btn" class="lg:hidden text-white z-[1002] focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>

      <!-- Mobile Menu Overlay -->
      <div id="mobile-menu" class="fixed inset-0 bg-black z-[1001] hidden flex-col items-center justify-center space-y-8 transition-all duration-300 gap-y-8">
          <ul class="flex flex-col items-center gap-y-8 text-white text-2xl font-medium uppercase">
            <li><a href="#about-us" class="mobile-link hover:text-gray-300 transition-colors">About</a></li>
            <li><a href="#why-choose-us" class="mobile-link hover:text-gray-300 transition-colors">Why Choose Us</a></li>
            <li><a href="#what-we-offer" class="mobile-link hover:text-gray-300 transition-colors">What We Offer</a></li>
          </ul>
          <div class="flex items-center text-white font-medium">
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="rv-button rv-button-sm !bg-red-500 !text-white"
                style="background-color: #ef4444 !important; color: white !important;">
              <div class="rv-button-top">
                <span>Contact Us</span>
              </div>
              <div class="rv-button-bottom">
                <span>Contact Us</span>
              </div>
            </a>
          </div>
      </div>
    </nav>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileLinks = document.querySelectorAll('.mobile-link');
        let isMenuOpen = false;

        menuBtn.addEventListener('click', function() {
            isMenuOpen = !isMenuOpen;
            if (isMenuOpen) {
                mobileMenu.classList.remove('hidden');
                mobileMenu.classList.add('flex');
                document.body.style.overflow = 'hidden'; // Prevent scrolling
                // Change icon to close
                menuBtn.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>';
            } else {
                mobileMenu.classList.add('hidden');
                mobileMenu.classList.remove('flex');
                document.body.style.overflow = ''; // Restore scrolling
                 // Change icon to hamburger
                menuBtn.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>';
            }
        });

        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                isMenuOpen = false;
                mobileMenu.classList.add('hidden');
                mobileMenu.classList.remove('flex');
                document.body.style.overflow = '';
                menuBtn.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>';
            });
        });
      });
    </script>
  </header>

  <!-- Cursor Pointer -->
  <div class="pointer"></div>

  <main class="relative z-10 bg-backgroundBody dark:bg-dark">
