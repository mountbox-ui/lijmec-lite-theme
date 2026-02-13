<?php
/**
 * The front page template file
 *
 * @package LijMec
 */

get_header();
?>

<!-- -============================ LijMec Hero ================================ -->
<section class="relative pt-40 pb-10 overflow-hidden">
  <div id="hero-gradient-wrapper" class="absolute w-2/6 h-2/6 top-40 left-[12%] -z-10 blur-[35px] md:blur-[60px]">
    <img src="<?php echo get_template_directory_uri(); ?>/images/images/hero-gradient-background-02.png"
      alt="hero-gradient-background" id="hero-gradient"
      class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2" />
  </div>

  <div class="max-w-[1440px] pt-28 md:pt-[180px] pb-14 md:pb-16 mx-auto relative z-10 px-5 md:px-10 xl:px-0">
    <div class="reveal-me">
      <h1
        class="xl:text-[96px] font-semibold xl:leading-[1.1] xl:tracking-[-2.88px] text-left text-colorText dark:text-white">
        Precision Wire
        <div class="cta-slider-container max-sm:block sm:inline-block max-sm:mb-7 translate-y-5 h-[100px] overflow-hidden align-bottom align-text-bottom relative top-2" id="cta-img">
          <div class="cta-inline-slider">
            <div class="slide h-[100px] flex items-center justify-start sm:justify-center">
              <img src="<?php echo get_template_directory_uri(); ?>/images/images/hero-img/title-img-1.jpg" alt="Slide 1"
                class="h-[80px] w-auto rounded-full object-cover" />
            </div>
            <div class="slide h-[100px] flex items-center justify-start sm:justify-center">
              <img src="<?php echo get_template_directory_uri(); ?>/images/images/hero-img/title-img-2.jpg" alt="Slide 2"
                class="h-[80px] w-auto rounded-full object-cover" />
            </div>
            <div class="slide h-[100px] flex items-center justify-start sm:justify-center">
              <img src="<?php echo get_template_directory_uri(); ?>/images/images/hero-img/title-img-3.jpg" alt="Slide 3"
                class="h-[80px] w-auto rounded-full object-cover" />
            </div>
          </div>
        </div>
        Harness Engineering for Industries
      </h1>
    </div>

    <p class="mt-6 md:mt-10 max-w-[770px] reveal-me text-2xl md:text-3xl text-colorText/70 dark:text-white/70">
      Customized wiring and cable harness solutions designed for performance, reliability, and optimized turnaround.
    </p>
  </div>

  <!-- skew Marquee Start -->
  <div style="
      transform: translate3d(-200px, 0px, 0px) scale3d(1, 1, 1) rotateX(30deg)
        rotateY(17deg) rotateZ(342deg) skew(7deg, 359deg);
      transform-style: preserve-3d;
    " id="skew-Marquee" class="hidden md:block w-[150%] -ml-[25%] max-w-[1600px] mx-auto">
    <div class="pb-16 lg:pb-48 pt-24">
      <!-- Marquee Wrapper -->
      <div class="relative">
        <!-- Infinite Scroll Container -->
        <div class="z-50 flex gap-5 w-fit flex-nowrap whitespace-nowrap will-change-transform marquee-inner reveal-me">
          <figure
            class="marquee-part flex items-center justify-center size-[370px] z-50 flex-shrink-0 overflow-hidden rounded-xl shadow-lg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/images/industries/automobiles.png" alt="images"
              class="w-full h-full object-cover" />
          </figure>
          <figure
            class="marquee-part flex items-center justify-center z-50 size-[370px] flex-shrink-0 overflow-hidden rounded-xl shadow-lg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/images/industries/aerospace.png" alt="images"
              class="w-full h-full object-cover" />
          </figure>
          <figure
            class="marquee-part flex items-center justify-center z-50 size-[370px] flex-shrink-0 overflow-hidden rounded-xl shadow-lg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/images/industries/logistics.png" alt="images"
              class="w-full h-full object-cover" />
          </figure>
          <figure
            class="marquee-part flex items-center justify-center z-50 size-[370px] flex-shrink-0 overflow-hidden rounded-xl shadow-lg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/images/industries/defence.png" alt="images"
              class="w-full h-full object-cover" />
          </figure>
          <figure
            class="marquee-part flex items-center justify-center z-50 size-[370px] flex-shrink-0 overflow-hidden rounded-xl shadow-lg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/images/industries/medical.png" alt="images"
              class="w-full h-full object-cover" />
          </figure>
        </div>
      </div>
    </div>
  </div>

  <div id="about-us" class="max-w-[1440px] mx-auto px-7 text-start">
    <h3 class="reveal-text-2 reveal-me">
      LijMec Wire Harness delivers engineered wiring solutions across automotive, aviation, defence,
      logistics, and high-performance industries.
    </h3>
    <p
      class="mb-10 mt-10 font-normal text-lg md:text-3xl leading-[25.6px] md:leading-[35.6px] tracking-[0.32px] text-black/70 dark:text-backgroundBody/70">
      With state-of-the-art equipment and expert engineers, we design, prototype, validate, and manufacture
      bespoke wire harness systems that meet strict quality standards.
    </p>
  </div>
</section>

<!-- =====================
Counter section 
======================= -->

<section class="pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] max-w-[1440px] mx-auto">
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

<!-- =====================
what we offer-v3 section 
======================= -->

<section id="what-we-offer"
  class="pt-28 md:pt-[250px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] flex flex-col gap-y-10 gap-x-5 lg:flex-row justify-between max-w-[1440px] mx-auto">
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
      <p class="text-appear px-5 md:px-0">
        Comprehensive wire harness solutions from concept to completion
      </p>
    </div>

    <!-- content Area -->

    <article>
      <div class="flex flex-col md:flex-row max-lg:flex-wrap mb-[30px] gap-[30px] reveal-me px-5 md:px-0">
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

<!-- ================================
Service Section 
================================ -->

<!-- <section class="pb-14 pt-14 md:pb-16 md:pt-16 lg:pb-[88px] lg:pt-[88px] xl:pb-[100px] xl:pt-[100px]">
    <div class="container"> -->
<!-- Section Header -->
<!-- <div class="text-center mb-8 md:mb-14">
            <div class="rv-badge reveal-me">
                <span class="rv-badge-text">what we offer</span>
            </div>
            <h2 class="my-3 text-appear">What We
                <i class="font-instrument"> Offer </i>
            </h2>
            <p class="text-appear">Comprehensive wire harness solutions from concept to completion</p>
        </div>
    </div> -->
<!-- Main Section  -->

<!-- <div
        class="flex justify-center flex-wrap max-lg:gap-5 px-5 xl:px-5 [&>*]:border-y dark:[&>*]:border-y-dark [&>*:not(:last-child)]:border-l dark:[&>*:not(:last-child)]:border-l-dark [&>*:last-child]:border-x dark:[&>*:last-child]:border-x-dark max-xl:[&>*:first-child]:border-r dark:max-xl:[&>*:first-child]:border-dark max-xl:[&>*:nth-child(2)]:border-r dark:max-xl:[&>*:nth-child(2)]:border-dark max-2xl:[&>*:nth-child(3)]:border-r dark:max-2xl:[&>*:nth-child(3)]:border-dark"> -->
<!-- Service Card1 -->
<!-- <div
            class="relative group reveal-me overflow-hidden w-full md:w-[calc(50%-10px)] lg:w-[calc(33.333%-14px)] xl:w-[390px] min-h-[410px]">
            <div> -->
<!-- Front Side -->
<!-- <div
                    class="absolute w-full h-full px-[30px] py-10 flex-1 transition-all duration-700 translate-y-0 group-hover:-translate-y-full opacity-100 group-hover:opacity-0">
                    <span>
                      <img src="<?php echo get_template_directory_uri(); ?>/images/images/what-we-offer/custom-wire.svg" alt="">
                    </span>
                    <h5 class="mb-4 mt-9 text-4xl leading-[1.2] -tracking-[1.08px]">
                        Custom Wire Harness Design
                    </h5>
                    <p>Tailored engineering services built around your product specs.</p>
                </div> -->

<!-- Hover Back Side -->
<!-- <div
                    class="absolute w-full h-full flex-1 px-[30px] py-12 z-10 bg-secondary dark:bg-backgroundBody transition-all duration-700 translate-y-full group-hover:translate-y-0 group-hover:inset-0">
                    <span>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/images/what-we-offer/custom-wire-black.svg" alt="">
                    </span>
                    <h5 class="mb-3 mt-9 text-backgroundBody dark:text-secondary text-4xl leading-[1.2] -tracking-[1.08px]">Custom Wire Harness Design</h5>
                    <p class="mb-10 text-backgroundBody dark:text-secondary">Tailored engineering services built around your product specs.</p>
                </div>
            </div>
        </div> -->
<!-- Service Card2 -->
<!-- <div
            class="relative group reveal-me overflow-hidden w-full md:w-[calc(50%-10px)] lg:w-[calc(33.333%-14px)] xl:w-[390px] min-h-[410px]">
            <div> -->
<!-- Front Side -->
<!-- <div class="absolute w-full h-full px-[30px] py-10 flex-1 transition-all duration-700 translate-y-0 group-hover:-translate-y-full opacity-100 group-hover:opacity-0">
                    <span>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/images/what-we-offer/wire-prototyping.svg" alt="">
                    </span>
                    <h5 class="mb-4 mt-9 text-4xl leading-[1.2] -tracking-[1.08px]">Prototyping & Validation</h5>
                    <p>Rapid development and rigorous testing for precision and reliability.</p>
                </div> -->

<!-- Hover Back Side -->
<!-- <div
                    class="absolute w-full h-full flex-1 px-[30px] py-12 z-10 bg-secondary dark:bg-backgroundBody transition-all duration-700 translate-y-full group-hover:translate-y-0 group-hover:inset-0">
                    <span>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/images/what-we-offer/wire-prototyping-black.svg" alt="">
                    </span>
                    <h5
                        class="mb-3 mt-9 text-backgroundBody dark:text-secondary text-4xl leading-[1.2] -tracking-[1.08px]">
                        Prototyping & Validation
                    </h5>
                    <p class="mb-10 text-backgroundBody dark:text-secondary">
                        Rapid development and rigorous testing for precision and reliability.
                    </p>
                </div>
            </div>
        </div>
    </div> -->

<!-- second Card Container -->
<!-- <div
        class="flex max-lg:mt-5 justify-center flex-wrap max-lg:gap-5 px-5 xl:px-5 max-lg:[&>*]:border-y max-lg:dark:[&>*]:border-y-dark lg:[&>*]:border-b lg:dark:[&>*]:border-b-dark [&>*:not(:last-child)]:border-l dark:[&>*:not(:last-child)]:border-l-dark [&>*:last-child]:border-x dark:[&>*:last-child]:border-x-dark max-xl:[&>*:first-child]:border-r dark:max-xl:[&>*:first-child]:border-dark max-xl:[&>*:nth-child(2)]:border-r dark:max-xl:[&>*:nth-child(2)]:border-dark max-2xl:[&>*:nth-child(3)]:border-r dark:max-2xl:[&>*:nth-child(3)]:border-dark"> -->
<!-- Service Card -->
<!-- <div
            class="relative group reveal-me overflow-hidden w-full md:w-[calc(50%-10px)] lg:w-[calc(33.333%-14px)] xl:w-[390px] min-h-[410px]">
            <div> -->
<!-- Front Side -->
<!-- <div
                    class="absolute w-full h-full px-[30px] py-10 flex-1 transition-all duration-700 translate-y-0 group-hover:-translate-y-full opacity-100 group-hover:opacity-0">
                    <span>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/images/what-we-offer/wire-manufacturing.svg" alt="">
                    </span>
                    <h5 class="mb-4 mt-9 text-4xl leading-[1.2] -tracking-[1.08px]">Manufacturing Excellence</h5>
                    <p>From low volume to high volume runs — high standards every step.</p>
                </div> -->

<!-- Hover Back Side -->
<!-- <div
                    class="absolute w-full h-full flex-1 px-[30px] py-12 z-10 bg-secondary dark:bg-backgroundBody transition-all duration-700 translate-y-full group-hover:translate-y-0 group-hover:inset-0">
                    <span>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/images/what-we-offer/wire-manufacturing-black.svg" alt="">
                    </span>
                    <h5 class="mb-3 mt-9 text-backgroundBody dark:text-secondary text-4xl leading-[1.2] -tracking-[1.08px]">Manufacturing Excellence</h5>
                    <p class="mb-10 text-backgroundBody dark:text-secondary">From low volume to high volume runs — high standards every step.</p>
                </div>
            </div>
        </div> -->
<!-- Service Card -->
<!-- <div
            class="relative group reveal-me overflow-hidden w-full md:w-[calc(50%-10px)] lg:w-[calc(33.333%-14px)] xl:w-[390px] min-h-[410px]">
            <div> -->
<!-- Front Side -->
<!-- <div
                    class="absolute w-full h-full px-[30px] py-10 flex-1 transition-all duration-700 translate-y-0 group-hover:-translate-y-full opacity-100 group-hover:opacity-0">
                    <span>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/images/what-we-offer/wire-quality.svg" alt="">
                    </span>
                    <h5 class="mb-4 mt-9 text-4xl leading-[1.2] -tracking-[1.08px]">Quality Assurance</h5>
                    <p>Industry-aligned quality cycles and inspection protocols.</p>
                </div> -->

<!-- Hover Back Side -->
<!-- <div
                    class="absolute w-full h-full flex-1 px-[30px] py-12 z-10 bg-secondary dark:bg-backgroundBody transition-all duration-700 translate-y-full group-hover:translate-y-0 group-hover:inset-0">
                    <span>
                        <span>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/images/what-we-offer/wire-quality-black.svg" alt="">
                        </span>
                    </span>
                    <h5
                        class="mb-3 mt-9 text-backgroundBody dark:text-secondary text-4xl leading-[1.2] -tracking-[1.08px]">Quality Assurance</h5>
                    <p class="mb-10 text-backgroundBody dark:text-secondary">
                        Industry-aligned quality cycles and inspection protocols.</p>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- =====================
why choose us section 
======================= -->

<section id="why-choose-us"
  class="pt-28 md:pt-[250px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden">
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
        <img src="<?php echo get_template_directory_uri(); ?>/images/images/why-choose-us/Why-Choose-Us-Img.jpg"
          alt="Marketing professional" class="w-full h-full" />
      </figure>
    </div>
  </div>
</section>

<!-- =====================
Industries we cater to section 
======================= -->

<section class="pt-28 md:pt-[250px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] overflow-hidden max-w-[1440px] mx-auto">
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

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[30px] px-4 md:px-[30px]">
    <!-- Card-1: Automobile & EV Sector -->
    <article class="blog-card border dark:border-dark p-2.5 group relative cursor-pointer reveal-me">
      <a href="#" class="w-full">
        <figure class="overflow-hidden h-[238px] relative">
          <img src="<?php echo get_template_directory_uri(); ?>/images/images/industries/automobiles.png"
            alt="Automobile & EV Sector"
            class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3 object-cover"
            width="370" height="238" />
          <div class=" absolute bottom-4 left-3 z-10 bg-black backdrop-blur-sm px-4 py-2 rounded-full">
            <span class=" text-white uppercase">Mobility</span>
          </div>
        </figure>
        <div class="px-2.5">

          <div class="blog-title mt-3.5 mb-[30px]">
            <h3 class="text-[25px] md:text-3xl lg:text-[32px] lg:leading-[1.2] lg:tracking-[-0.72px]">
              Automobile & EV Sector
            </h3>
            <p class="py-3 leading-[1.6] text-base">
              Our cutting-edge machinery ensures every harness meets stringent
              industry standards, guaranteeing reliable and top-tier performance.
            </p>
          </div>
        </div>
      </a>
    </article>

    <!-- Card-2: Aviation & Aerospace -->
    <article class="blog-card border dark:border-dark p-2.5 group relative cursor-pointer reveal-me">
      <a href="#" class="w-full">
        <figure class="overflow-hidden h-[238px] relative">
          <img src="<?php echo get_template_directory_uri(); ?>/images/images/industries/aerospace.png"
            alt="Aviation & Aerospace"
            class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3 object-cover"
            width="370" height="238" />
          <div class=" absolute bottom-4 left-3 z-10 bg-black backdrop-blur-sm px-4 py-2 rounded-full">
            <span class=" text-white uppercase">Aerospace</span>
          </div>
        </figure>
        <div class="px-2.5">

          <div class="blog-title mt-3.5 mb-[30px]">
            <h3 class="text-[25px] md:text-3xl lg:text-[32px] lg:leading-[1.2] lg:tracking-[-0.72px]">
              Aviation & Aerospace
            </h3>
            <p class="py-3 leading-[1.6] text-base">
              Our cutting-edge machinery ensures every harness meets stringent
              industry standards, guaranteeing reliable and top-tier performance.
            </p>
          </div>
        </div>
      </a>
    </article>

    <!-- Card-3: Defence & Strategic Systems -->
    <article class="blog-card border dark:border-dark p-2.5 group relative cursor-pointer reveal-me">
      <a href="#" class="w-full">
        <figure class="overflow-hidden h-[238px] relative">
          <img src="<?php echo get_template_directory_uri(); ?>/images/images/industries/defence.png"
            alt="Defence & Strategic Systems"
            class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3 object-cover"
            width="370" height="238" />
          <div class=" absolute bottom-4 left-3 z-10 bg-black backdrop-blur-sm px-4 py-2 rounded-full">
            <span class=" text-white uppercase">Defence</span>
          </div>
        </figure>
        <div class="px-2.5">

          <div class="blog-title mt-3.5 mb-[30px]">
            <h3 class="text-[25px] md:text-3xl lg:text-[32px] lg:leading-[1.2] lg:tracking-[-0.72px]">
              Defence & Strategic Systems
            </h3>
            <p class="py-3 leading-[1.6] text-base">
              Our cutting-edge machinery ensures every harness meets stringent
              industry standards, guaranteeing reliable and top-tier performance.
            </p>
          </div>
        </div>
      </a>
    </article>

    <!-- Card-4: Logistics & Infrastructure -->
    <article class="blog-card border dark:border-dark p-2.5 group relative cursor-pointer reveal-me">
      <a href="#" class="w-full">
        <figure class="overflow-hidden h-[238px] relative">
          <img src="<?php echo get_template_directory_uri(); ?>/images/images/industries/logistics.png"
            alt="Logistics & Infrastructure"
            class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3 object-cover"
            width="370" height="238" />
          <div class=" absolute bottom-4 left-3 z-10 bg-black backdrop-blur-sm px-4 py-2 rounded-full">
            <span class=" text-white uppercase">Logistics</span>
          </div>
        </figure>
        <div class="px-2.5">

          <div class="blog-title mt-3.5 mb-[30px]">
            <h3 class="text-[25px] md:text-3xl lg:text-[32px] lg:leading-[1.2] lg:tracking-[-0.72px]">
              Logistics & Infrastructure
            </h3>
            <p class="py-3 leading-[1.6] text-base">
              Our cutting-edge machinery ensures every harness meets stringent
              industry standards, guaranteeing reliable and top-tier performance.
            </p>
          </div>
        </div>
      </a>
    </article>

    <!-- Card-5: Medical Devices & Equipment -->
    <article class="blog-card border dark:border-dark p-2.5 group relative cursor-pointer reveal-me">
      <a href="#" class="w-full">
        <figure class="overflow-hidden h-[238px] relative">
          <img src="<?php echo get_template_directory_uri(); ?>/images/images/industries/medical.png"
            alt="Medical Devices & Equipment"
            class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3 object-cover"
            width="370" height="238" />
          <div class=" absolute bottom-4 left-3 z-10 bg-black backdrop-blur-sm px-4 py-2 rounded-full">
            <span class=" text-white uppercase">Medical</span>
          </div>
        </figure>
        <div class="px-2.5">

          <div class="blog-title mt-3.5 mb-[30px]">
            <h3 class="text-[25px] md:text-3xl lg:text-[32px] lg:leading-[1.2] lg:tracking-[-0.72px]">
              Medical Devices & Equipment
            </h3>
            <p class="py-3 leading-[1.6] text-base">
              Our cutting-edge machinery ensures every harness meets stringent
              industry standards, guaranteeing reliable and top-tier performance.
            </p>
          </div>
        </div>
      </a>
    </article>

    <!-- Card-6: High-Power Electrical -->
    <article class="blog-card border dark:border-dark p-2.5 group relative cursor-pointer reveal-me">
      <a href="#" class="w-full">
        <figure class="overflow-hidden h-[238px] relative">
          <img src="<?php echo get_template_directory_uri(); ?>/images/images/industries/electrical.png"
            alt="High-Power Electrical"
            class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3 object-cover"
            width="370" height="238" />
          <div class=" absolute bottom-4 left-3 z-10 bg-black backdrop-blur-sm px-4 py-2 rounded-full">
            <span class=" text-white uppercase">Industrial</span>
          </div>
        </figure>
        <div class="px-2.5">

          <div class="blog-title mt-3.5 mb-[30px]">
            <h3 class="text-[25px] md:text-3xl lg:text-[32px] lg:leading-[1.2] lg:tracking-[-0.72px]">
              High-Power Electrical Systems
            </h3>
            <p class="py-3 leading-[1.6] text-base">
              Our cutting-edge machinery ensures every harness meets stringent
              industry standards, guaranteeing reliable and top-tier performance.
            </p>
          </div>
        </div>
      </a>
    </article>
  </div>
</section>

<!--=====================================
   FAQ Section
======================================-->

<section
  class="pt-16 md:pt-20 lg:pt-[98px] xl:pt-[120px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative @@faqSpacing">
  <div
    class="absolute scale-y-[3.5] sm:scale-y-[2.2] md:scale-y-[1.6] xl:scale-y-[1.4] scale-x-[1.7] left-1/2 top-1/2 max-md:-translate-y-[45%] md:-translate-y-1/2 -translate-x-1/2 -z-30">
    <img src="<?php echo get_template_directory_uri(); ?>/images/images/hero-gradient-background-02.png"
      alt="gradient-bg" />
  </div>
  <div class="container">
    <!-- FAQ Section Title -->

    <h2 class="mb-10 md:mb-20 text-center text-appear-2 @@fontSize">
      Frequently asked <i class="font-instrument">Questions</i>
    </h2>

    <!-- FAQ Items Container -->
    <div class="max-w-[900px] w-full mx-auto [&>*:not(:last-child)]:mb-6 reveal-me">
      <!-- FAQ Item 1 -->
      <div
        class="accordion-item overflow-hidden bg-backgroundBody dark:bg-dark border border-backgroundBody dark:border-[#151515] duration-300">
        <div class="accordion-header relative cursor-pointer py-5 md:py-[35px] max-md:px-5 md:px-10">
          <h3
            class="text-xl md:text-[25px] font-normal sm:font-medium md:leading-[25.2px] md:tracking-normal max-md:inline-block max-lg:pr-10">
            What does it cost to work with you?
          </h3>
          <div class="accordion-header-icon dark:border-dark"></div>
        </div>
        <p class="accordion-body max-md:text-sm max-md:px-5 md:px-10 duration-300 h-0">
          We mostly work on a fixed-bid basis for our projects, focusing on a
          select few clients at a time. To provide an accurate estimate, we need
          a clear understanding of your requirements, project scope,
          deliverables, and timelines.
        </p>
      </div>

      <!-- FAQ Item 2 -->
      <div
        class="accordion-item overflow-hidden bg-backgroundBody dark:bg-dark border border-backgroundBody dark:border-[#151515] duration-300">
        <div class="accordion-header relative cursor-pointer py-5 md:py-[35px] max-md:px-5 md:px-10">
          <h3
            class="text-xl md:text-[25px] font-normal sm:font-medium md:tracking-normal max-md:inline-block max-lg:pr-10">
            How big is your team?
          </h3>
          <div class="accordion-header-icon dark:border-dark"></div>
        </div>
        <p class="accordion-body max-md:text-sm max-md:px-5 md:px-10 duration-300 h-0">
          We mostly work on a fixed-bid basis for our projects, focusing on a
          select few clients at a time. To provide an accurate estimate, we need
          a clear understanding of your requirements, project scope,
          deliverables, and timelines.
        </p>
      </div>

      <!-- FAQ Item 3 -->
      <div
        class="accordion-item overflow-hidden bg-backgroundBody dark:bg-dark border border-backgroundBody dark:border-[#151515] duration-300">
        <div class="accordion-header relative cursor-pointer py-5 md:py-[35px] max-md:px-5 md:px-10">
          <h3
            class="text-xl md:text-[25px] font-normal sm:font-medium md:tracking-normal max-md:inline-block max-lg:pr-8">
            Do you provide white labeled services?
          </h3>
          <div class="accordion-header-icon dark:border-dark"></div>
        </div>
        <p class="accordion-body max-md:text-sm max-md:px-5 md:px-10 duration-300 h-0">
          Yes, we are equipped to handle projects of any size, from small
          startups to large enterprises, tailoring our approach to meet your
          specific needs.
        </p>
      </div>

      <!-- FAQ Item 4 -->
      <div
        class="accordion-item overflow-hidden bg-backgroundBody dark:bg-dark border border-backgroundBody dark:border-[#151515] duration-300">
        <div class="accordion-header relative cursor-pointer py-5 md:py-[35px] max-md:px-5 md:px-10">
          <h3
            class="text-xl md:text-[25px] font-normal sm:font-medium md:tracking-normal max-md:inline-block max-lg:pr-8">
            Do you work with other agencies?
          </h3>
          <div class="accordion-header-icon dark:border-dark"></div>
        </div>
        <p class="accordion-body max-md:text-sm max-md:px-5 md:px-10 duration-300 h-0">
          We value collaboration and will keep you updated at every stage. Your
          input is crucial to ensure we align with your vision and goals.
        </p>
      </div>

      <!-- FAQ Item 5 -->
      <div
        class="accordion-item overflow-hidden bg-backgroundBody dark:bg-dark border border-backgroundBody dark:border-[#151515] duration-300">
        <div class="accordion-header relative cursor-pointer py-5 md:py-[35px] max-md:px-5 md:px-10">
          <h3
            class="text-xl md:text-[25px] font-normal sm:font-medium md:tracking-normal max-md:inline-block max-lg:pr-8">
            Do you work with Webflow templates?
          </h3>
          <div class="accordion-header-icon dark:border-dark"></div>
        </div>
        <p class="accordion-body max-md:text-sm max-md:px-5 md:px-10 duration-300 h-0">
          Absolutely! We offer ongoing support and maintenance to ensure your
          project runs smoothly after launch.
        </p>
      </div>
    </div>
  </div>
</section>



<!--=====================================
   CTA Section
======================================-->
<section id="contact" class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] relative">
  <div class="container">
    <!-- CTA Heading -->
    <h2 class="text-center xl:text-[96px] font-normal xl:leading-[1.1] xl:tracking-[-2.88px]">
      Ready to
      <div
        class="cta-slider-container max-sm:block sm:inline-block max-sm:mb-5 translate-y-2 sm:translate-y-[20px] max-sm:mt-2.5">
        <div class="cta-inline-slider">
          <div class="slide">
            <img src="<?php echo get_template_directory_uri(); ?>/images/images/industries/automobiles.png"
              alt="Slide 1" />
          </div>
          <div class="slide">
            <img src="<?php echo get_template_directory_uri(); ?>/images/images/industries/aerospace.png"
              alt="Slide 2" />
          </div>
          <div class="slide">
            <img src="<?php echo get_template_directory_uri(); ?>/images/images/industries/logistics.png"
              alt="Slide 3" />
          </div>
        </div>
      </div>
      grow
      <span class="font-instrument sm:mt-10 italic block max-md:inline-block">your business?</span>
    </h2>

    <!-- CTA Buttons -->
    <div class="col-span-full mx-auto sm:mt-14 flex justify-center mb-10">
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
</section>

<?php
get_footer();
