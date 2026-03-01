<?php
/**
 * The template for displaying the About page
 *
 * @package khakehashi
 */

get_header(); // Loads header.php
?>

<!-- Hero -->
<section class="relative bg-brandOrange from-white to-gray-50 py-28 md:py-36">

  <div class="absolute inset-0 pointer-events-none">
    <div class="absolute top-10 left-10 w-28 h-28 bg-[#EC4724]/10 rounded-full blur-2xl"></div>
    <div class="absolute bottom-10 right-10 w-40 h-40 bg-[#5f849a]/10 rounded-full blur-2xl"></div>
  </div>

  <div class="relative max-w-4xl mx-auto text-center px-6">
    <h1 class="text-4xl md:text-5xl font-extrabold text-white tracking-tight">
    <?php echo get_field('about_title_blk'); ?> <span class="text-white"><?php echo get_field('about_title_org'); ?></span>
    </h1>

    <div class="mt-4 w-24 h-1 bg-[#EC4724] mx-auto rounded-full"></div>

    <p class="mt-8 text-lg md:text-xl text-white leading-relaxed max-w-3xl mx-auto">
      Guiding Nepali students to study, grow, and succeed in Japan with confidence.
      From personalized counseling and JLPT prep to visa assistance —
      we support every step of your journey.
    </p>
  </div>

</section>


<!-- Who We Are -->
<section class="relative bg-white overflow-hidden text-justify">

  <div class="absolute top-0 left-0 w-56 h-56 bg-red-50 rounded-full blur-2xl opacity-40 -translate-x-1/3 -translate-y-1/3"></div>
  <div class="absolute bottom-0 right-0 w-72 h-72 bg-orange-50 rounded-full blur-2xl opacity-40 translate-x-1/3 translate-y-1/3"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle,rgba(0,0,0,0.015)_1px,transparent_1px)] [background-size:22px_22px]"></div>

  <div class="relative max-w-7xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-16 items-center">

    <div class="space-y-8">

      <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight">
        <?php echo get_field('who_title'); ?>
      </h2>
      <div class="w-20 h-[3px] bg-[#EC4724] mt-3"></div>

      <p class="text-lg text-gray-700 leading-relaxed">
        <?php echo get_field('who_paragraph'); ?>
      </p>
    </div>

    <!-- Image -->
    <div class="relative">
      <div class="absolute -inset-5 rounded-2xl bg-gradient-to-tr from-orange-100 to-red-100 opacity-70 -z-10"></div>
      <img 
        src="<?php echo get_field('who_image'); ?>"
        class="rounded-2xl shadow-xl w-full object-cover"
        alt="Students in Japan"
      >
    </div>

  </div>
</section>


<!-- CEO Section -->
<section id="ceo-message" class="bg-gray-50 py-20">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-start">

    <div class="relative flex justify-center">
      <div class="absolute -inset-6 rounded-2xl bg-gradient-to-tr from-red-50 to-pink-100 -z-10"></div>
      <img src=" <?php echo get_field('ceo_image'); ?>" 
           class="rounded-2xl shadow-xl object-cover w-full max-w-sm h-[450px]"
           alt="CEO">
    </div>

    <div class="space-y-6 text-justify max-w-xl">
      <h2 class="text-3xl font-bold text-gray-900"> <?php echo get_field('ceo_title'); ?></h2>

      <p class="text-gray-700 leading-relaxed">
      <?php echo get_field('ceo_paragraph'); ?>
      </p>

      <div class="mt-4">
        <span class="block font-semibold text-gray-900"> <?php echo get_field('ceo_name'); ?></span>
        <span class="text-sm text-gray-600"> <?php echo get_field('ceo_position'); ?></span>
      </div>
    </div>

  </div>
</section>


<!-- Mission & Vision -->
<section id="mission-vision" class="bg-gray-50 py-24">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-start">

    <!-- Mission -->
    <div class="space-y-6 text-justify">
      <div class="flex items-center space-x-4">
        <img src="<?php echo get_field('mission_image'); ?>" class="w-14 h-14" alt="">
        <h2 class="text-3xl font-bold text-red-600"><?php echo get_field('mission_title'); ?></h2>
      </div>
      <p><?php echo get_field('mission_paragraph'); ?></p>
    </div>

    <!-- Vision -->
    <div class="space-y-6 text-justify">
      <div class="flex items-center space-x-4">
        <img src="<?php echo get_field('vision_image'); ?>" class="w-14 h-14" alt="">
        <h2 class="text-3xl font-bold text-red-600"><?php echo get_field('vision_title'); ?></h2>
      </div>
      <p><?php echo get_field('vision_paragraph'); ?></p>
    </div>

  </div>
</section>


<!-- Meet the Team -->
<section class="max-w-6xl mx-auto px-4 py-16">
  <h2 class="text-3xl md:text-4xl font-bold text-center"><?php echo get_field('team_heading'); ?></h2>
  <div class="mx-auto w-24 h-1 bg-[#EC4724] mt-2 mb-10"></div>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 text-center">
    <?php
    $team_query = new WP_Query(array(
        'post_type' => 'team',
        'posts_per_page' => -1
    ));
    if($team_query->have_posts()) :
        while($team_query->have_posts()) : $team_query->the_post(); ?>
            <div class="p-6 border rounded-xl bg-white shadow-lg">
                <img src="<?php echo get_field('team_image'); ?>" class="w-28 h-28 mx-auto rounded-full">
                <h3 class="mt-4 font-semibold text-lg"><?php echo get_field('team_name'); ?></h3>
                <p class="text-sm text-gray-600"><?php echo get_field('team_position'); ?></p>
            </div>
        <?php endwhile;
        wp_reset_postdata();
    endif;
    ?>
  </div>
</section>


<?php get_footer(); ?>
