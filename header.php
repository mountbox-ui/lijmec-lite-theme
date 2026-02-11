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

  <header id="header" class="w-full max-w-[1440px] mx-auto absolute top-0 left-1/2 -translate-x-1/2 z-[9999]">
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
    <nav class="z-[1000] absolute w-full top-0 left-0 px-5 sm:px-8 pt-1 sm:pt-5 nav-top" aria-label="Main navigation">
      <div class="flex justify-between">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <?php lijmec_custom_logo(); ?>
        </a>
      </div>
    </nav>
  </header>

  <!-- Cursor Pointer -->
  <div class="pointer"></div>

  <main class="relative z-10 bg-backgroundBody dark:bg-dark">
