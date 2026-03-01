<?php
/**
 * Template Name: Study in Japan
 * Description: Custom template for the Study in Japan page.
 *
 * @package khakehashi
 */

get_header();
?>

<!-- Hero Section -->
<section class="relative bg-brandOrange text-white">
  <div class="relative max-w-6xl mx-auto px-4 py-32 text-center">
    <h1 class="text-4xl md:text-5xl font-extrabold"><?php echo get_field('study_heading'); ?></h1>
    <p class="mt-4 text-lg md:text-xl opacity-90">
      <?php echo get_field('study_subheading'); ?>
    </p>
    <div class="mt-8 flex justify-center gap-4">
      <a href="<?php echo get_permalink(30); ?>"
         class="bg-white text-red-600 px-6 py-3 rounded font-semibold hover:scale-105 transition">
        Apply Now
      </a>
    </div>
  </div>
</section>


<!-- About Studying in Japan -->
<section id="about" class="max-w-6xl mx-auto px-4 py-20 grid md:grid-cols-2 gap-12 items-center">
  <div>
    <h2 class="text-3xl font-bold text-red-600"><?php echo get_field('study_about_title'); ?></h2>

    <p class="mt-4 text-gray-700 leading-relaxed">
      <?php echo get_field('study_paragraph'); ?>
    </p>
  </div>

  <img src="<?php echo get_field('study_image'); ?>"
       alt="Students in Japan"
       class="rounded-lg shadow-md w-full h-auto object-cover">
</section>


<!-- Why Study in Japan -->
<section class="bg-gray-50 py-20">
  <div class="max-w-6xl mx-auto px-4">

    <!-- SECTION TITLE FROM WORDPRESS PAGE TITLE -->
    <h2 class="text-3xl font-bold text-center mb-12 text-red-600">
      <?php the_title(); ?>
    </h2>

    <div class="grid md:grid-cols-3 gap-8">

      <?php
      // Query CPT "why_japan"
      $why = new WP_Query(array(
        'post_type' => 'why_japan',
        'posts_per_page' => -1
      ));

      if ($why->have_posts()) :
        while ($why->have_posts()) :
          $why->the_post();

          // ACF fields
          $title = get_field('japan_title');
          $paragraph = get_field('japan_paragraph');
      ?>

      <!-- Card -->
      <div class="p-6 border rounded-lg bg-white shadow-sm hover:scale-105 transition">
        <h3 class="font-semibold text-lg">
          <?php echo esc_html($title); ?>
        </h3>

        <p class="mt-2 text-gray-600 text-sm">
          <?php echo esc_html($paragraph); ?>
        </p>
      </div>

      <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>

    </div>
  </div>
</section>





<!-- Top Programs -->
<section class="bg-gray-50 py-20">
  <div class="max-w-6xl mx-auto px-4">

    <!-- SECTION TITLE FROM WORDPRESS PAGE TITLE -->
    <h2 class="text-3xl font-bold text-center mb-12 text-red-600">
      <?php the_title(); ?>
    </h2>

    <div class="grid md:grid-cols-3 gap-8">

      <?php
      // Query CPT "top_programs"
      $programs = new WP_Query(array(
        'post_type' => 'top_programs',
        'posts_per_page' => -1
      ));

      if ($programs->have_posts()) :
        while ($programs->have_posts()) :
          $programs->the_post();

          // ACF fields
          $title = get_field('top_title');
          $paragraph = get_field('top_paragraph');
      ?>

      <!-- Card -->
      <div class="p-6 border rounded-lg bg-white shadow-sm hover:scale-105 transition">
        <h3 class="font-semibold text-lg">
          <?php echo esc_html($title); ?>
        </h3>

        <p class="mt-2 text-gray-600 text-sm">
          <?php echo esc_html($paragraph); ?>
        </p>
      </div>

      <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>

    </div>
  </div>
</section>




<!-- Call to Action -->
<section class="bg-red-600 text-white py-20">
  <div class="max-w-3xl mx-auto text-center px-6">

    <h2 class="text-4xl md:text-5xl font-extrabold tracking-tight">
      Ready to Begin Your Journey?
    </h2>

    <p class="mt-4 text-lg md:text-xl opacity-95 leading-relaxed">
      Take the first step toward studying in Japan with Sakura Study.
    </p>

    <a href="<?php echo site_url('/contact'); ?>"
       class="mt-8 inline-block bg-white text-red-600 font-semibold px-8 py-4 rounded-lg shadow-md hover:shadow-lg hover:scale-105 transition-all duration-300">
      Contact Us
    </a>

  </div>
</section>

<?php get_footer(); ?>
