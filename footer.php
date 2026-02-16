    <!--=====================================
   FooterV2 Section
======================================-->

    <footer class="overflow-hidden max-w-[1440px] mx-auto mt-10">
      <div class="-mt-10 sm:-mt-150 mb-4 bg-backgroundBody dark:bg-dark">
        <div class="px-4 md:px-[30px]">
          <div class>
            <h5 class="w-full footer-text-v2 text-center font-satoshi font-medium text-[100px] sm:text-[200px] md:text-[258px] lg:text-[300px] xl:text-[350px] 2xl:text-[386px] uppercase leading-[100%] text-nowrap">LijMec</h5>
          </div>

          <div
            class="border-t dark:border-dark mt-5 pt-5 flex flex-col sm:flex-row gap-3 sm:gap-0 justify-between text-center md:text-left">
            <p class="footer-text-lijmec">
              <?php printf(__('&copy; %s %s. All rights Reserved', 'lijmec'), date('Y'), get_bloginfo('name')); ?>
            </p>
            <p class="footer-text-lijmec">
              <?php _e('Powered by', 'lijmec'); ?> <a href="https://mountbox.in" target="_blank" rel="noopener" class="footer-text-lijmec">MountBox</a>
            </p>
          </div>
        </div>
      </div>
    </footer>

  </main>

  <?php wp_footer(); ?>
</body>

</html>
