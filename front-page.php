<?php
/**
 * The front page template file
 *
 * @package LijMec
 */

get_header();
?>

<!-- -============================ LijMec Hero ================================ -->
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
          <a href="#contact" class="rv-button rv-button-sm block md:inline-block !bg-red-500 !text-white"
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


<!-- ================================
About-v13 Section 
================================ -->

<section class="pt-28 md:pt-[250px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
  <div class="container">
    <!-- Section Header -->
    <div class="text-center">
      <div class="rv-badge reveal-me mb-3">
        <span class="rv-badge-text">About Us</span>
      </div>
      <h2 class="mb-10 lg:mb-20 text-center text-appear">
        About <i class="font-instrument">LijMec</i>
      </h2>
    </div>
    <!-- Case Studies Container -->
    <div class="mb-[60px] space-y-[30px]">
      <!-- Case Study 1 -->
      <div class="flex flex-col lg:flex-row items-center relative reveal-me underline-hover-effect group">
        <!-- Case Study Image -->
        <figure class="max-w-[870px] -z-30 overflow-hidden">
          <a href="#" class="block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/images/about-us/About-Us-Img.jpg"
              class="w-full h-full group-hover:scale-125 group-hover:rotate-3 transition-all duration-500"
              alt="About Us" />
          </a>
        </figure>

        <!-- Overlapping Content Card -->
        <div
          class="p-[30px] z-30 max-md:-mt-5 lg:absolute lg:right-0 bg-backgroundBody dark:bg-dark border border-black/10 dark:border-white/10 lg:max-w-[570px] w-full">
          <p class="mb-3.5 text-black dark:text-white font-normal text-sm leading-6 tracking-[3px] uppercase">
            Company
          </p>
          <p
            class="mb-10 font-normal text-base leading-[25.6px] tracking-[0.32px] text-black/70 dark:text-backgroundBody/70">
            LijMec Wire Harness delivers engineered wiring solutions across automotive, aviation, defence,
            logistics, and high-performance industries.
          </p>
          <p
            class="mb-10 font-normal text-base leading-[25.6px] tracking-[0.32px] text-black/70 dark:text-backgroundBody/70">
            With state-of-the-art equipment and expert engineers, we design, prototype, validate, and manufacture
            bespoke wire harness systems that meet strict quality standards.
          </p>
        </div>
      </div>
    </div>
</section>

<!-- =====================
what we offer-v3 section 
======================= -->

<section
  class="pt-28 md:pt-[250px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] flex flex-col gap-y-10 gap-x-5 lg:flex-row justify-between">
  <div>
    <!-- Section Header -->
    <div class="text-center mb-8 md:mb-14">
      <div class="rv-badge reveal-me">
        <span class="rv-badge-text">what we offer</span>
      </div>
      <h2 class="my-3 text-appear">
        What We
        <i class="font-instrument"> Offer </i>
      </h2>
      <p class="text-appear">
        Comprehensive wire harness solutions from concept to completion
      </p>
    </div>

    <!-- content Area -->

    <article>
      <div class="flex flex-col md:flex-row max-lg:flex-wrap mb-[30px] gap-[30px] reveal-me">
        <!--  -->
        <div class="border dark:border-dark flex-1 px-[30px] py-20">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
              <rect width="60" height="60" class="dark:fill-secondary fill-backgroundBody" />
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M30.6422 28.5873L26.8523 21.4072L23.0599 28.5873C22.7916 29.1124 22.4037 29.5671 21.9274 29.9148C21.4483 30.2643 20.8946 30.498 20.31 30.5973L12.5001 32.1224L17.9525 38.6224C18.3203 39.0237 18.5974 39.4995 18.765 40.0174C18.9312 40.5343 18.9833 41.081 18.9175 41.62L17.88 50.0001L25.0724 46.535C25.6282 46.2696 26.2364 46.132 26.8523 46.1325C27.4307 46.132 28.0007 46.2701 28.5148 46.535L35.8696 49.7851L34.8297 41.5C34.7639 40.961 34.8159 40.4143 34.9822 39.8974C35.1497 39.3795 35.4268 38.9037 35.7946 38.5024L41.202 32.1124L33.3922 30.5873C32.8075 30.488 32.2539 30.2543 31.7747 29.9048C31.2997 29.5599 30.9119 29.1088 30.6422 28.5873Z"
                class="stroke-secondary dark:stroke-backgroundBody" stroke-width="1.2" stroke-linecap="round"
                stroke-linejoin="round" />
              <path
                d="M46.4725 11.8704C46.7073 11.6365 46.708 11.2566 46.4741 11.0218C46.2402 10.7871 45.8603 10.7864 45.6256 11.0203L46.4725 11.8704ZM36.9283 19.6854C36.6935 19.9192 36.6928 20.2991 36.9267 20.5339C37.1606 20.7686 37.5405 20.7693 37.7752 20.5355L36.9283 19.6854ZM47.9234 19.09C48.1582 18.8562 48.159 18.4763 47.9252 18.2415C47.6914 18.0067 47.3115 18.0059 47.0767 18.2397L47.9234 19.09ZM41.2768 24.0147C41.042 24.2486 41.0412 24.6284 41.275 24.8633C41.5088 25.0981 41.8887 25.0989 42.1235 24.8651L41.2768 24.0147ZM39.2259 10.4252C39.4607 10.1914 39.4615 9.81146 39.2277 9.57665C38.9939 9.34183 38.614 9.34102 38.3791 9.57483L39.2259 10.4252ZM32.5768 15.3524C32.342 15.5862 32.3411 15.9661 32.5749 16.2009C32.8088 16.4357 33.1887 16.4366 33.4235 16.2027L32.5768 15.3524ZM45.6256 11.0203L36.9283 19.6854L37.7752 20.5355L46.4725 11.8704L45.6256 11.0203ZM47.0767 18.2397L41.2768 24.0147L42.1235 24.8651L47.9234 19.09L47.0767 18.2397ZM38.3791 9.57483L32.5768 15.3524L33.4235 16.2027L39.2259 10.4252L38.3791 9.57483Z"
                class="fill-secondary dark:fill-backgroundBody" />
            </svg>
          </span>
          <h5 class="mb-2.5 mt-5">Custom Wire Harness Design</h5>
          <p>Tailored engineering services built around your product specs.</p>
        </div>
        <!--  -->
        <div class="border dark:border-dark flex-1 px-[30px] py-20">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="61" height="60" viewBox="0 0 61 60" fill="none">
              <rect width="60" height="60" transform="translate(0.333252)"
                class="dark:fill-secondary fill-backgroundBody" />
              <path
                d="M31.0833 12.5C31.0833 12.0858 30.7475 11.75 30.3333 11.75C29.919 11.75 29.5833 12.0858 29.5833 12.5H31.0833ZM29.5833 47.5C29.5833 47.9142 29.919 48.25 30.3333 48.25C30.7475 48.25 31.0833 47.9142 31.0833 47.5H29.5833ZM37.7532 16.875C37.7532 16.4608 37.4174 16.125 37.0032 16.125C36.589 16.125 36.2532 16.4608 36.2532 16.875H37.7532ZM36.2532 43.125C36.2532 43.5392 36.589 43.875 37.0032 43.875C37.4174 43.875 37.7532 43.5392 37.7532 43.125H36.2532ZM44.4133 21.25C44.4133 20.8358 44.0775 20.5 43.6633 20.5C43.2491 20.5 42.9133 20.8358 42.9133 21.25H44.4133ZM42.9133 38.75C42.9133 39.1642 43.2491 39.5 43.6633 39.5C44.0775 39.5 44.4133 39.1642 44.4133 38.75H42.9133ZM51.0833 25.625C51.0833 25.2108 50.7475 24.875 50.3333 24.875C49.919 24.875 49.5833 25.2108 49.5833 25.625H51.0833ZM49.5833 34.375C49.5833 34.7892 49.919 35.125 50.3333 35.125C50.7475 35.125 51.0833 34.7892 51.0833 34.375H49.5833ZM22.9133 43.125C22.9133 43.5392 23.2491 43.875 23.6633 43.875C24.0775 43.875 24.4133 43.5392 24.4133 43.125H22.9133ZM24.4133 16.875C24.4133 16.4608 24.0775 16.125 23.6633 16.125C23.2491 16.125 22.9133 16.4608 22.9133 16.875H24.4133ZM16.2532 38.75C16.2532 39.1642 16.589 39.5 17.0032 39.5C17.4174 39.5 17.7532 39.1642 17.7532 38.75H16.2532ZM17.7532 21.25C17.7532 20.8358 17.4174 20.5 17.0032 20.5C16.589 20.5 16.2532 20.8358 16.2532 21.25H17.7532ZM9.58325 34.375C9.58325 34.7892 9.91904 35.125 10.3333 35.125C10.7475 35.125 11.0833 34.7892 11.0833 34.375H9.58325ZM11.0833 25.625C11.0833 25.2108 10.7475 24.875 10.3333 24.875C9.91904 24.875 9.58325 25.2108 9.58325 25.625H11.0833ZM29.5833 12.5V47.5H31.0833V12.5H29.5833ZM36.2532 16.875V43.125H37.7532V16.875H36.2532ZM42.9133 21.25V38.75H44.4133V21.25H42.9133ZM49.5833 25.625V34.375H51.0833V25.625H49.5833ZM24.4133 43.125V16.875H22.9133V43.125H24.4133ZM17.7532 38.75V21.25H16.2532V38.75H17.7532ZM11.0833 34.375V25.625H9.58325V34.375H11.0833Z"
                class="fill-secondary dark:fill-backgroundBody" />
            </svg>
          </span>
          <h5 class="mb-2.5 mt-5">Prototyping & Validation</h5>
          <p>
            Rapid development and rigorous testing for precision and reliability.
          </p>
        </div>
        <!--  -->
        <div class="border dark:border-dark flex-1 px-[30px] py-20">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="61" height="60" viewBox="0 0 61 60" fill="none">
              <rect width="60" height="60" transform="translate(0.666504)"
                class="dark:fill-secondary fill-backgroundBody" />
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M24.2636 10L14.9521 27.7771H24.2636L17.2807 50L46.3807 27.7771H33.5779L40.5607 10H24.2636Z"
                class="stroke-secondary dark:stroke-backgroundBody" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </span>
          <h5 class="mb-2.5 mt-5">Manufacturing Excellence</h5>
          <p>From low volume to high volume runs — high standards every step.</p>
        </div>
        <!--  -->
        <div class="border dark:border-dark flex-1 px-[30px] py-20">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
              <rect width="60" height="60" class="dark:fill-secondary fill-backgroundBody" />
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M30.6422 28.5873L26.8523 21.4072L23.0599 28.5873C22.7916 29.1124 22.4037 29.5671 21.9274 29.9148C21.4483 30.2643 20.8946 30.498 20.31 30.5973L12.5001 32.1224L17.9525 38.6224C18.3203 39.0237 18.5974 39.4995 18.765 40.0174C18.9312 40.5343 18.9833 41.081 18.9175 41.62L17.88 50.0001L25.0724 46.535C25.6282 46.2696 26.2364 46.132 26.8523 46.1325C27.4307 46.132 28.0007 46.2701 28.5148 46.535L35.8696 49.7851L34.8297 41.5C34.7639 40.961 34.8159 40.4143 34.9822 39.8974C35.1497 39.3795 35.4268 38.9037 35.7946 38.5024L41.202 32.1124L33.3922 30.5873C32.8075 30.488 32.2539 30.2543 31.7747 29.9048C31.2997 29.5599 30.9119 29.1088 30.6422 28.5873Z"
                class="stroke-secondary dark:stroke-backgroundBody" stroke-width="1.2" stroke-linecap="round"
                stroke-linejoin="round" />
              <path
                d="M46.4725 11.8704C46.7073 11.6365 46.708 11.2566 46.4741 11.0218C46.2402 10.7871 45.8603 10.7864 45.6256 11.0203L46.4725 11.8704ZM36.9283 19.6854C36.6935 19.9192 36.6928 20.2991 36.9267 20.5339C37.1606 20.7686 37.5405 20.7693 37.7752 20.5355L36.9283 19.6854ZM47.9234 19.09C48.1582 18.8562 48.159 18.4763 47.9252 18.2415C47.6914 18.0067 47.3115 18.0059 47.0767 18.2397L47.9234 19.09ZM41.2768 24.0147C41.042 24.2486 41.0412 24.6284 41.275 24.8633C41.5088 25.0981 41.8887 25.0989 42.1235 24.8651L41.2768 24.0147ZM39.2259 10.4252C39.4607 10.1914 39.4615 9.81146 39.2277 9.57665C38.9939 9.34183 38.614 9.34102 38.3791 9.57483L39.2259 10.4252ZM32.5768 15.3524C32.342 15.5862 32.3411 15.9661 32.5749 16.2009C32.8088 16.4357 33.1887 16.4366 33.4235 16.2027L32.5768 15.3524ZM45.6256 11.0203L36.9283 19.6854L37.7752 20.5355L46.4725 11.8704L45.6256 11.0203ZM47.0767 18.2397L41.2768 24.0147L42.1235 24.8651L47.9234 19.09L47.0767 18.2397ZM38.3791 9.57483L32.5768 15.3524L33.4235 16.2027L39.2259 10.4252L38.3791 9.57483Z"
                class="fill-secondary dark:fill-backgroundBody" />
            </svg>
          </span>
          <h5 class="mb-2.5 mt-5">Quality Assurance</h5>
          <p>Industry-aligned quality cycles and inspection protocols.</p>
        </div>
      </div>
    </article>
  </div>
</section>

<!-- =====================
why choose us section 
======================= -->

<section class="pt-28 md:pt-[250px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden">
  <div class="container">
    <!-- Section Header -->
    <div class="text-center mb-8 md:mb-14">
      <div class="rv-badge reveal-me">
        <span class="rv-badge-text">why choose us</span>
      </div>
      <h2 class="my-3 text-appear">
        Why Choose
        <i class="font-instrument"> LijMec </i>
      </h2>
    </div>

    <!-- content Area -->

    <div class="flex flex-col-reverse md:flex-row gap-y-14 gap-x-[100px]">
      <div class="md:w-1/2 [&>*]:border-b [&>*:not(first-child)]:mb-5">
        <div class="reveal-me">
          <h5 class="lg:-tracking-[-1.08px]">Industry Quality</h5>
          <p class="py-3 leading-[1.6] text-base">
            We adhere to the highest industry benchmarks, ensuring every harness<br>
            exceeds expectations through rigorous testing and validation processes.
          </p>
        </div>
        <div class="reveal-me">
          <h5 class="lg:-tracking-[-1.08px]">Experienced Engineers</h5>
          <p class="py-3 leading-[1.6] text-base">
            Our seasoned engineers deliver tailored solutions, employing advanced <br>
            tech to surpass expectations. We champion excellence in every endeavor.
          </p>
        </div>
        <div class="reveal-me">
          <h5 class="lg:-tracking-[-1.08px]">Editing & Finalization</h5>
          <p class="py-3 leading-[1.6] text-base">
            Our expert team delivers tailored wiring solutions, precisely engineered <br>
            to your specifications for optimal performance and guaranteed integration.
          </p>
        </div>
        <div class="reveal-me">
          <h5 class="lg:-tracking-[-1.08px]">Advanced Machinery</h5>
          <p class="py-3 leading-[1.6] text-base">
            Our cutting-edge machinery ensures every harness meets stringent <br>
            industry standards, guaranteeing reliable and top-tier performance.
          </p>
        </div>
      </div>
      <figure class="md:w-1/2 reveal-me">
        <img src="<?php echo get_template_directory_uri(); ?>/images/images/why-choose-us/Why-Choose-Us-Img.jpg" alt="Marketing professional"
          class="w-full h-full" />
      </figure>
    </div>
  </div>
</section>

<!-- =====================
Industries we cater to section 
======================= -->

<section class="pt-28 md:pt-[250px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] overflow-hidden">
  <!-- section header -->
  <div class="text-center mb-8 md:mb-16">
    <h2 class="text-appear mb-3">
      Industries We
      <i class="font-instrument"> Cater to</i>
    </h2>
    <p class="text-appear lg:max-w-[770px] mx-auto">
      Trusted by leading organizations across mission-critical sectors.
    </p>
  </div>
  <!-- Main Section  -->

  <div class="grid grid-cols-1 md:grid-cols-2 2xl:grid-cols-3 gap-[30px] px-4 md:px-[30px]">
    <!-- Card-1 -->
    <div class="px-6 lg:px-[30px] py-9 lg:py-[50px] border dark:border-dark group reveal-me">
      <a href="#">
        <div class="w-10 h-12">
          <img src="<?php echo get_template_directory_uri(); ?>/images/images/industries/car.svg" alt="">
        </div>
        <h5 class="mt-4 lg:mt-6 mb-2 lg:mb-3">Automobile & EV Sector</h5>
      </a>
    </div>
    <!-- Card-2 -->
    <div class="px-6 lg:px-[30px] py-9 lg:py-[50px] border dark:border-dark group reveal-me">
      <a href="#">
        <div class="w-10 h-12">
          <img src="<?php echo get_template_directory_uri(); ?>/images/images/industries/airplane.svg" alt="">
        </div>
        <h5 class="mt-4 lg:mt-6 mb-2 lg:mb-3">Aviation & Aerospace</h5>
      </a>
    </div>
    <!-- Card-3 -->
    <div class="px-6 lg:px-[30px] py-9 lg:py-[50px] border dark:border-dark group reveal-me">
      <a href="#">
        <div class="w-10 h-12">
          <img src="<?php echo get_template_directory_uri(); ?>/images/images/industries/security.svg" alt="">
        </div>
        <h5 class="mt-4 lg:mt-6 mb-2 lg:mb-3">Defence & Strategic Systems</h5>
      </a>
    </div>
    <!-- Card-4 -->
    <div class="px-6 lg:px-[30px] py-9 lg:py-[50px] border dark:border-dark group reveal-me">
      <a href="#">
        <div class="w-10 h-12">
          <img src="<?php echo get_template_directory_uri(); ?>/images/images/industries/logistics.svg" alt="">
        </div>
        <h5 class="mt-4 lg:mt-6 mb-2 lg:mb-3">Logistics & Infrastructure</h5>
      </a>
    </div>

    <!-- Card-5 -->
    <div class="px-6 lg:px-[30px] py-9 lg:py-[50px] border dark:border-dark group reveal-me">
      <a href="#">
        <div class="w-10 h-12">
          <img src="<?php echo get_template_directory_uri(); ?>/images/images/industries/medical.svg" alt="">
        </div>
        <h5 class="mt-4 lg:mt-6 mb-2 lg:mb-3">Medical Devices & Equipment</h5>
      </a>
    </div>
    <!-- Card-6 -->
    <div class="px-6 lg:px-[30px] py-9 lg:py-[50px] border dark:border-dark group reveal-me">
      <a href="#">
        <div class="w-10 h-12">
          <img src="<?php echo get_template_directory_uri(); ?>/images/images/industries/electric.svg" alt="">
        </div>
        <h5 class="mt-4 lg:mt-6 mb-2 lg:mb-3">High-Power Electrical & Industrial Systems</h5>
      </a>
    </div>
  </div>
</section>


<!-- =====================
Counter section 
======================= -->

<section class="pt-28 md:pt-[250px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
  <div>
    <div class="flex flex-wrap items-center justify-center gap-[30px] reveal-me">
      <div
        class="border dark:border-dark p-5 md:p-[30px] space-y-3 flex justify-center flex-col items-center min-w-[280px] lg:min-w-[320px] min-h-[180px] lg:min-h-[212px]"
        id="counter">
        <h2 class="lg:text-7xl">
          <span class="counter" data-value="10"></span>+
        </h2>
        <p>Years Experience</p>
      </div>
      <div
        class="border dark:border-dark p-5 md:p-[30px] space-y-3 flex justify-center flex-col items-center min-w-[280px] lg:min-w-[320px] min-h-[180px] lg:min-h-[212px]"
        id="counter">
        <h2 class="lg:text-7xl">
          <span class="counter" data-value="5000"></span>+
        </h2>
        <p>Harnesses Delivered</p>
      </div>
      <div
        class="border dark:border-dark p-5 md:p-[30px] space-y-3 flex justify-center flex-col items-center min-w-[280px] lg:min-w-[320px] min-h-[180px] lg:min-h-[212px]"
        id="counter">
        <h2 class="lg:text-7xl">
          <span class="counter" data-value="100"></span>+
        </h2>
        <p>Clients Worldwide</p>
      </div>
      <div
        class="border dark:border-dark p-5 md:p-[30px] space-y-3 flex justify-center flex-col items-center min-w-[280px] lg:min-w-[320px] min-h-[180px] lg:min-h-[212px]"
        id="counter">
        <h2 class="lg:text-7xl">
          <span class="counter" data-value="100"></span>%
        </h2>
        <p>Quality Compliance</p>
      </div>
    </div>
  </div>
</section>

<!--=====================================
   Contact Page Header Section
======================================-->

<section id="contact" class="pt-28 md:pt-[250px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden">
  <!-- Gradient Background -->
  <div id="hero-gradient-wrapper"
    class="absolute w-[44%] lg:w-[40%] h-[44%] lg:h-[40%] top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 -z-10 blur-[60px] max-sm:scale-125 md:scale-[0.72]">
    <img src="<?php echo get_template_directory_uri(); ?>/images/images/hero-gradient-background.png" alt="hero-gradient-background" id="hero-gradient"
      class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2" />
  </div>

  <!-- Header Content -->
  <div class="container">
    <div class="text-center reveal-me">
      <div class="rv-badge">
        <span class="rv-badge-text">Contact</span>
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
    <form class="grid grid-cols-1 md:grid-cols-2 gap-[30px] max-w-[800px] mx-auto reveal-me" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
      <input type="hidden" name="action" value="lijmec_contact_form">
      <?php wp_nonce_field('lijmec_contact_form', 'lijmec_contact_nonce'); ?>
      
      <!-- Full Name Field -->
      <div class="md:col-span-full">
        <label for="name" class="text-2xl leading-[1.2] tracking-[-0.48px] text-secondary dark:text-backgroundBody">
          Full Name
        </label>
        <input type="text" name="name" id="name" placeholder="Enter your full name" required
          class="py-4 pl-5 bg-backgroundBody dark:bg-dark focus:outline-none focus:border-primary border dark:border-dark w-full text-colorText dark:text-backgroundBody/70 text-xl leading-[1.4] tracking-[0.4px] mt-3" />
      </div>

      <!-- Place Field -->
      <div>
        <label for="place"
          class="text-2xl leading-[1.2] tracking-[-0.48px] text-secondary dark:text-backgroundBody">
          Place
        </label>
        <input type="text" name="place" id="place" placeholder="Enter your place"
          class="py-4 pl-5 bg-backgroundBody dark:bg-dark focus:outline-none focus:border-primary border dark:border-dark w-full text-colorText dark:text-backgroundBody/70 text-xl leading-[1.4] tracking-[0.4px] mt-3" />
      </div>

      <!-- Email Field -->
      <div>
        <label for="email"
          class="text-2xl leading-[1.2] tracking-[-0.48px] text-secondary dark:text-backgroundBody">
          Email
        </label>
        <input type="email" name="email" id="email" placeholder="Enter your email" required
          class="py-4 pl-5 bg-backgroundBody dark:bg-dark focus:outline-none focus:border-primary border dark:border-dark w-full text-colorText dark:text-backgroundBody/70 text-xl leading-[1.4] tracking-[0.4px] mt-3" />
      </div>

      <!-- Message -->
      <div class="md:col-span-full">
        <label for="message"
          class="text-2xl leading-[1.2] tracking-[-0.48px] text-secondary dark:text-backgroundBody">
          Message
        </label>
        <textarea name="message" id="message" placeholder="Enter your message" rows="5"
          class="py-4 pl-5 bg-backgroundBody dark:bg-dark focus:outline-none focus:border-primary border dark:border-dark w-full text-colorText dark:text-backgroundBody/70 text-xl leading-[1.4] tracking-[0.4px] mt-3"></textarea>
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
