    <!--=====================================
   FooterV2 Section
======================================-->

    <footer class="overflow-hidden max-w-[1440px] mx-auto">
      <div class="-mt-10 sm:-mt-[70px] mb-4 bg-backgroundBody dark:bg-dark">
        <div class="px-4 md:px-[30px]">
          <!-- Footer Content Grid -->
          <div
            class="flex items-start flex-col sm:flex-row flex-wrap gap-y-10 sm:gap-y-16 sm:justify-between relative z-10 pt-10 md:pt-20">
            <!-- Reach Us Section -->
            <div class="sm:pr-8 max-lg:basis-full">
              <img src="<?php echo get_template_directory_uri(); ?>/images/images/header-logo.svg" alt="<?php bloginfo('name'); ?>">
              <h5 class="text-2xl font-satoshi leading-[1.1] mb-2 font-medium mt-5">
                <?php _e('Address', 'lijmec'); ?>
              </h5>
              <p>
                <?php echo nl2br(get_theme_mod('lijmec_address', "Building No: XIV | 484-A Kodunga, Vellikulangara,\nP.O, Chalakudy, Thrissur, Kerala, India - 680699")); ?>
              </p>

              <div class="flex mt-7 md:mt-10 gap-6">
                <?php if (get_theme_mod('lijmec_facebook')) : ?>
                <span>
                  <a href="<?php echo esc_url(get_theme_mod('lijmec_facebook')); ?>" target="_blank" rel="noopener">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 20 20" fill="none"
                      class="stroke-[#565656] hover:stroke-primary duration-200">
                      <path
                        d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
                        stroke-linecap="round" stroke-linejoin="round" />
                      <path
                        d="M13.125 6.875H11.875C11.3777 6.875 10.9008 7.07254 10.5492 7.42418C10.1975 7.77581 10 8.25272 10 8.75V17.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M7.5 11.25H12.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </a>
                </span>
                <?php endif; ?>
                
                <?php if (get_theme_mod('lijmec_youtube')) : ?>
                <span>
                  <a href="<?php echo esc_url(get_theme_mod('lijmec_youtube')); ?>" target="_blank" rel="noopener">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-[#565656] hover:stroke-primary duration-200"
                      width="23" height="23" viewBox="0 0 20 20" fill="none">
                      <path d="M12.5 10L8.75 7.5V12.5L12.5 10Z" stroke-linecap="round" stroke-linejoin="round" />
                      <path
                        d="M1.875 9.99998C1.875 12.3246 2.11517 13.6886 2.29774 14.3896C2.34654 14.581 2.44026 14.7581 2.57114 14.9061C2.70201 15.0541 2.86627 15.1688 3.0503 15.2407C5.66569 16.2457 10 16.2181 10 16.2181C10 16.2181 14.3343 16.2457 16.9497 15.2407C17.1337 15.1688 17.298 15.0541 17.4288 14.9061C17.5597 14.7581 17.6534 14.581 17.7022 14.3896C17.8848 13.6886 18.125 12.3246 18.125 9.99998C18.125 7.67533 17.8848 6.3114 17.7023 5.6104C17.6535 5.41894 17.5597 5.24188 17.4289 5.09386C17.298 4.94585 17.1337 4.83115 16.9497 4.75927C14.3343 3.75422 10 3.78181 10 3.78181C10 3.78181 5.66574 3.75422 3.05033 4.75926C2.86629 4.83114 2.70203 4.94584 2.57116 5.09385C2.44029 5.24186 2.34656 5.41893 2.29776 5.61038C2.11518 6.31138 1.875 7.67533 1.875 9.99998Z"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </a>
                </span>
                <?php endif; ?>
                
                <?php if (get_theme_mod('lijmec_instagram')) : ?>
                <span>
                  <a href="<?php echo esc_url(get_theme_mod('lijmec_instagram')); ?>" target="_blank" rel="noopener">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-[#565656] hover:stroke-primary duration-200"
                      width="23" height="23" viewBox="0 0 20 20" fill="none">
                      <path
                        d="M10 13.125C11.7259 13.125 13.125 11.7259 13.125 10C13.125 8.27411 11.7259 6.875 10 6.875C8.27411 6.875 6.875 8.27411 6.875 10C6.875 11.7259 8.27411 13.125 10 13.125Z"
                        stroke-miterlimit="10" />
                      <path
                        d="M13.4375 2.8125H6.5625C4.49143 2.8125 2.8125 4.49143 2.8125 6.5625V13.4375C2.8125 15.5086 4.49143 17.1875 6.5625 17.1875H13.4375C15.5086 17.1875 17.1875 15.5086 17.1875 13.4375V6.5625C17.1875 4.49143 15.5086 2.8125 13.4375 2.8125Z"
                        stroke-linecap="round" stroke-linejoin="round" />
                      <path
                        d="M14.0625 6.875C14.5803 6.875 15 6.45527 15 5.9375C15 5.41973 14.5803 5 14.0625 5C13.5447 5 13.125 5.41973 13.125 5.9375C13.125 6.45527 13.5447 6.875 14.0625 6.875Z"
                        fill="#565656" />
                    </svg>
                  </a>
                </span>
                <?php endif; ?>
                
                <?php if (get_theme_mod('lijmec_linkedin')) : ?>
                <span>
                  <a href="<?php echo esc_url(get_theme_mod('lijmec_linkedin')); ?>" target="_blank" rel="noopener">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-[#565656] hover:stroke-primary duration-200"
                      width="23" height="23" viewBox="0 0 20 20" fill="none">
                      <path
                        d="M16.25 3.125H3.75C3.40482 3.125 3.125 3.40482 3.125 3.75V16.25C3.125 16.5952 3.40482 16.875 3.75 16.875H16.25C16.5952 16.875 16.875 16.5952 16.875 16.25V3.75C16.875 3.40482 16.5952 3.125 16.25 3.125Z"
                        stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M9.375 8.75V13.75" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M6.875 8.75V13.75" stroke-linecap="round" stroke-linejoin="round" />
                      <path
                        d="M9.375 10.9375C9.375 10.3573 9.60547 9.80094 10.0157 9.3907C10.4259 8.98047 10.9823 8.75 11.5625 8.75C12.1427 8.75 12.6991 8.98047 13.1093 9.3907C13.5195 9.80094 13.75 10.3573 13.75 10.9375V13.75"
                        stroke-linecap="round" stroke-linejoin="round" />
                      <path
                        d="M6.875 7.1875C7.39277 7.1875 7.8125 6.76777 7.8125 6.25C7.8125 5.73223 7.39277 5.3125 6.875 5.3125C6.35723 5.3125 5.9375 5.73223 5.9375 6.25C5.9375 6.76777 6.35723 7.1875 6.875 7.1875Z"
                        fill="#565656" />
                    </svg>
                  </a>
                </span>
                <?php endif; ?>
              </div>
            </div>

            <!-- Contact Section -->
            <div>
              <h5 class="text-2xl leading-[1.1] mb-4"><?php _e('Contact', 'lijmec'); ?></h5>
              <ul>
                <li class="md:mb-3 flex items-center gap-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"
                    class="flex-shrink-0">
                    <path
                      d="M2.5 5.625L8.66094 9.89844C9.0125 10.1328 9.18828 10.25 9.38047 10.2969C9.55078 10.3375 9.72813 10.3375 9.89844 10.2969C10.0906 10.25 10.2664 10.1328 10.618 9.89844L16.7789 5.625M5.625 15.625H13.75C14.4544 15.625 14.8066 15.625 15.0758 15.4992C15.3125 15.3883 15.5047 15.1961 15.6156 14.9594C15.7414 14.6902 15.7414 14.338 15.7414 13.6336V6.36641C15.7414 5.66198 15.7414 5.30977 15.6156 5.04063C15.5047 4.80391 15.3125 4.61172 15.0758 4.50078C14.8066 4.375 14.4544 4.375 13.75 4.375H5.625C4.92057 4.375 4.56836 4.375 4.29922 4.50078C4.0625 4.61172 3.87031 4.80391 3.75937 5.04063C3.63359 5.30977 3.63359 5.66198 3.63359 6.36641V13.6336C3.63359 14.338 3.63359 14.6902 3.75937 14.9594C3.87031 15.1961 4.0625 15.3883 4.29922 15.4992C4.56836 15.625 4.92057 15.625 5.625 15.625Z"
                      stroke="#565656" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                      class="stroke-secondary dark:stroke-backgroundBody" />
                  </svg>
                  <a href="mailto:<?php echo esc_attr(get_theme_mod('lijmec_email', 'info@lijmec.com')); ?>"
                    class="block transition-colors duration-300 font-normal md:text-lg leading-9 tracking-[0.36px] hover:text-primary"><?php echo esc_html(get_theme_mod('lijmec_email', 'info@lijmec.com')); ?></a>
                </li>
                <li class="md:mb-3 flex items-center gap-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"
                    class="flex-shrink-0">
                    <path
                      d="M2.5 5.625L8.66094 9.89844C9.0125 10.1328 9.18828 10.25 9.38047 10.2969C9.55078 10.3375 9.72813 10.3375 9.89844 10.2969C10.0906 10.25 10.2664 10.1328 10.618 9.89844L16.7789 5.625M5.625 15.625H13.75C14.4544 15.625 14.8066 15.625 15.0758 15.4992C15.3125 15.3883 15.5047 15.1961 15.6156 14.9594C15.7414 14.6902 15.7414 14.338 15.7414 13.6336V6.36641C15.7414 5.66198 15.7414 5.30977 15.6156 5.04063C15.5047 4.80391 15.3125 4.61172 15.0758 4.50078C14.8066 4.375 14.4544 4.375 13.75 4.375H5.625C4.92057 4.375 4.56836 4.375 4.29922 4.50078C4.0625 4.61172 3.87031 4.80391 3.75937 5.04063C3.63359 5.30977 3.63359 5.66198 3.63359 6.36641V13.6336C3.63359 14.338 3.63359 14.6902 3.75937 14.9594C3.87031 15.1961 4.0625 15.3883 4.29922 15.4992C4.56836 15.625 4.92057 15.625 5.625 15.625Z"
                      stroke="#565656" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                      class="stroke-secondary dark:stroke-backgroundBody" />
                  </svg>
                  <a href="mailto:<?php echo esc_attr(get_theme_mod('lijmec_email_secondary', 'lijmec@gmail.com')); ?>"
                    class="block transition-colors duration-300 font-normal md:text-lg leading-9 tracking-[0.36px] hover:text-primary"><?php echo esc_html(get_theme_mod('lijmec_email_secondary', 'lijmec@gmail.com')); ?></a>
                </li>
                <li class="md:mb-3 flex items-center gap-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"
                    class="flex-shrink-0">
                    <path
                      d="M17.5 14.1V16.6C17.5008 16.8321 17.4531 17.0618 17.3601 17.2744C17.2671 17.487 17.1308 17.678 16.9598 17.8349C16.7889 17.9918 16.5869 18.1112 16.3668 18.1855C16.1467 18.2599 15.9134 18.2875 15.6812 18.2667C13.1363 17.9881 10.6937 17.1118 8.54375 15.7042C6.54209 14.4151 4.83157 12.7046 3.5425 10.7029C2.12917 8.54412 1.25252 6.09092 0.979167 3.53625C0.958333 3.30479 0.985729 3.07229 1.05969 2.85281C1.13365 2.63333 1.25242 2.43187 1.40848 2.26118C1.56454 2.09049 1.75465 1.95414 1.96633 1.86077C2.17801 1.7674 2.40674 1.71898 2.6375 1.71875H5.1375C5.51212 1.71512 5.87452 1.84836 6.16089 2.09324C6.44726 2.33812 6.63851 2.67989 6.7 3.05125C6.81594 3.79362 7.01476 4.52168 7.29375 5.22125C7.40125 5.50484 7.42574 5.81334 7.36437 6.11065C7.303 6.40797 7.15816 6.68134 6.94625 6.89625L5.89375 7.94875C7.07542 10.0257 8.79179 11.7421 10.8687 12.9238L11.9212 11.8713C12.1361 11.6593 12.4095 11.5145 12.7068 11.4531C13.0041 11.3918 13.3126 11.4163 13.5962 11.5238C14.2958 11.8027 15.0239 12.0016 15.7662 12.1175C16.1419 12.1794 16.4873 12.3747 16.7323 12.6668C16.9773 12.9589 17.1065 13.3278 17.1 13.7063L17.5 14.1Z"
                      stroke="#565656" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                      class="stroke-secondary dark:stroke-backgroundBody" />
                  </svg>
                  <a href="tel:<?php echo esc_attr(str_replace(' ', '', get_theme_mod('lijmec_phone', '+919995822922'))); ?>"
                    class="block transition-colors duration-300 font-normal md:text-lg leading-9 tracking-[0.36px] hover:text-primary"><?php echo esc_html(get_theme_mod('lijmec_phone', '+91 99958 22922')); ?></a>
                </li>
              </ul>
            </div>
          </div>

          <div
            class="border-t dark:border-dark mt-10 pt-5 flex flex-col sm:flex-row gap-3 sm:gap-0 justify-between text-left">
            <p>
              <?php printf(__('&copy; %s %s. All rights Reserved', 'lijmec'), date('Y'), get_bloginfo('name')); ?>
            </p>
            <p>
              <?php _e('Powered by', 'lijmec'); ?> <a href="https://mountbox.in" target="_blank" rel="noopener">MountBox</a>
            </p>
          </div>
        </div>
      </div>
    </footer>

  </main>

  <?php wp_footer(); ?>
</body>

</html>
