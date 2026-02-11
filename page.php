<?php
/**
 * The template for displaying all pages
 *
 * @package LijMec
 */

get_header();
?>

<?php while (have_posts()) : the_post(); ?>

<section class="pt-[137px] md:pt-[160px] lg:pt-[240px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
  <div class="container">
    <article class="max-w-4xl mx-auto">
      <!-- Page Header -->
      <header class="mb-10 text-center">
        <h1 class="mb-5"><?php the_title(); ?></h1>
        
        <?php if (has_post_thumbnail()) : ?>
          <figure class="mb-10">
            <?php the_post_thumbnail('large', array('class' => 'w-full h-auto')); ?>
          </figure>
        <?php endif; ?>
      </header>

      <!-- Page Content -->
      <div class="prose prose-lg dark:prose-invert max-w-none">
        <?php the_content(); ?>
      </div>

      <?php
      // If comments are open or we have at least one comment, load up the comment template.
      if (comments_open() || get_comments_number()) :
        comments_template();
      endif;
      ?>
    </article>
  </div>
</section>

<?php endwhile; ?>

<?php
get_footer();
