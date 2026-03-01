<?php
/**
 * Front Page Template
 *
 * @package khakehashi
 */

get_header(); // Loads header.php
?>

<!-- Your HTML content goes here -->
    
<section class="relative w-full overflow-hidden">
  <div id="heroSlider" class="relative w-full h-[400px] sm:h-[500px] md:h-[600px] lg:h-[700px]">
    
    <!-- Slide 1 -->
    <div class="absolute inset-0 slide opacity-0">
      <img src="<?php echo get_field('hero_image_1'); ?>" 
           alt="Japan"
           class="w-full h-full object-cover scale-100 transform transition-transform duration-[5000ms] ease-in-out">
      <div class="absolute inset-0 bg-black/30"></div>
      <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-4">
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-white"><?php echo get_field('hero_title_1'); ?></h1>
        <p class="mt-4 text-base sm:text-lg md:text-xl text-white opacity-90"><?php echo get_field('sub_heading_1'); ?></p>
        <div class="mt-6 flex flex-col sm:flex-row gap-4">
          <a href="https://wa.me/9768582326" class="bg-white text-red-600 px-6 py-3 rounded font-bold hover:scale-105 transition">Chat with a Consultant</a>
          <a href="<?php echo get_permalink(18); ?>" class="bg-white text-red-600 px-6 py-3 rounded font-bold hover:scale-105 transition">Our Services</a>
        </div>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="absolute inset-0 slide opacity-0">
      <img src="<?php echo get_field('hero_image_2'); ?>" 
           alt="Japan City"
           class="w-full h-full object-cover scale-100 transform transition-transform duration-[5000ms] ease-in-out">
      <div class="absolute inset-0 bg-black/30"></div>
      <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-4">
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-white"><?php echo get_field('hero_title_2'); ?></h1>
        <p class="mt-4 text-base sm:text-lg md:text-xl text-white opacity-90"><?php echo get_field('sub_heading_2'); ?></p>
         <div class="mt-6 flex flex-col sm:flex-row gap-4">
          <a href="https://wa.me/9768582326" class="bg-white text-red-600 px-6 py-3 rounded font-bold hover:scale-105 transition">Chat with a Consultant</a>
          <a href="<?php echo get_permalink(18); ?>" class="bg-white text-red-600 px-6 py-3 rounded font-bold hover:scale-105 transition">Our Services</a>
        </div>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="absolute inset-0 slide opacity-0">
      <img src="<?php echo get_field('hero_image_3'); ?>" 
           alt="University"
           class="w-full h-full object-cover scale-100 transform transition-transform duration-[5000ms] ease-in-out">
      <div class="absolute inset-0 bg-black/30"></div>
      <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-4">
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-white"><?php echo get_field('hero_title_3'); ?></h1>
        <p class="mt-4 text-base sm:text-lg md:text-xl text-white opacity-90"><?php echo get_field('sub_heading_3'); ?></p>
         <div class="mt-6 flex flex-col sm:flex-row gap-4">
          <a href="https://wa.me/9768582326" class="bg-white text-red-600 px-6 py-3 rounded font-bold hover:scale-105 transition">Chat with a Consultant</a>
          <a href="<?php echo get_permalink(18); ?>" class="bg-white text-red-600 px-6 py-3 rounded font-bold hover:scale-105 transition">Our Services</a>
        </div>
      </div>
    </div>
    
  </div>
</section>

  <!-- about -->
<!-- Cities Section -->
<section id="cities" class="bg-gray-50 py-20">
  <div class="max-w-6xl mx-auto px-4">

    <!-- Heading -->
    <div class="text-center mb-16">
      <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4"><?php echo get_field('destination_title'); ?></h2>
      <p class="text-gray-600 text-lg max-w-2xl mx-auto">
        <?php echo get_field('destination_subheading'); ?>
      </p>
      <div class="w-24 h-1 bg-[#ea7a1c] mx-auto mt-6 rounded-full"></div>
    </div>

    <!-- Cards Grid -->
    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">

      <!-- Card 1 -->
      <div class="group bg-white rounded-2xl shadow-md overflow-hidden cursor-pointer hover:shadow-xl hover:-translate-y-1 transform transition-all duration-500">
        <img src="<?php echo get_field('city_image_1'); ?>" alt="Tokyo" class="w-full h-48 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-red-600 transition"><?php echo get_field('city_name_1'); ?></h3>
          <p class="text-gray-600 leading-relaxed text-sm">
            <?php echo get_field('destination_paragraph_1'); ?>
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="group bg-white rounded-2xl shadow-md overflow-hidden cursor-pointer hover:shadow-xl hover:-translate-y-1 transform transition-all duration-500">
        <img src="<?php echo get_field('city_image_2'); ?>" alt="Osaka" class="w-full h-48 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-red-600 transition"><?php echo get_field('city_name_2'); ?></h3>
          <p class="text-gray-600 leading-relaxed text-sm">
            <?php echo get_field('destination_paragraph_2'); ?>
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="group bg-white rounded-2xl shadow-md overflow-hidden cursor-pointer hover:shadow-xl hover:-translate-y-1 transform transition-all duration-500">
        <img src="<?php echo get_field('city_image_3'); ?>" alt="Kyoto" class="w-full h-48 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-red-600 transition"><?php echo get_field('city_name_3'); ?></h3>
          <p class="text-gray-600 leading-relaxed text-sm">
            <?php echo get_field('destination_paragraph_3'); ?>
          </p>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="group bg-white rounded-2xl shadow-md overflow-hidden cursor-pointer hover:shadow-xl hover:-translate-y-1 transform transition-all duration-500">
        <img src="<?php echo get_field('city_image_4'); ?>" alt="Oita" class="w-full h-48 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-red-600 transition"><?php echo get_field('city_name_4'); ?></h3>
          <p class="text-gray-600 leading-relaxed text-sm">
           <?php echo get_field('destination_paragraph_4'); ?>
          </p>
        </div>
      </div>

    </div>

  </div>
</section>


 <!-- About Section -->
<section id="about-preview" class="bg-gray-100"  >
  <section class="max-w-6xl mx-auto px-4 py-16">
    <div class="grid md:grid-cols-2 gap-12 items-center">

    <!-- Image Side -->
    <div>
      <img 
        src="<?php echo get_field('discover_image'); ?>" 
        alt="Students studying in Japan" 
        class="rounded-lg shadow-lg w-full object-cover"
      />
    </div>

    <!-- Content Side -->
    <div class="space-y-6">
      <h2 class="text-3xl font-bold "><?php echo get_field('discover_title'); ?></h2>
      <h3 class="text-xl font-semibold text-gray-800"><?php echo get_field('discover_subheading'); ?></h3>
      <p class="text-gray-700 leading-relaxed">
        <?php echo get_field('discover_paragraph'); ?>
        
      </p>
      <a href="<?php echo get_permalink(11); ?>" class="inline-block bg-[#5f849a] text-white px-6 py-3 rounded-lg font-semibold hover:bg-[#ea7a1c] transition-colors">
        Learn More 
      </a>
    </div>

  </div>
  </section>
</section>
<!-- End About Section -->

  <!-- Lucide Icons CDN -->
<script src="https://unpkg.com/lucide@latest"></script>

<!-- Study in Japan -->
<section id="japan" class="relative bg-gradient-to-b from-gray-50 to-white py-20">
  <div class="max-w-6xl mx-auto px-4">
    
    <!-- Heading -->
    <div class="text-center mb-16">
      <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4"> <?php echo get_field('study_title'); ?></h2>
      <p class="text-gray-600 text-lg max-w-2xl mx-auto">
        <?php echo get_field('study_subheading'); ?>
      <div class="w-24 h-1 bg-[#ea7a1c] mx-auto mt-6 rounded-full"></div>
    </div>

    <!-- Cards Grid -->
    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
      
      <!-- Card -->
      <div class="group bg-white p-8 rounded-2xl border border-gray-100 shadow-md hover:shadow-xl hover:border-red-100 transition-all duration-500">
        <div class="flex items-center justify-center w-14 h-14 rounded-full bg-[#5f849a] text-white mb-6 group-hover:bg-[#ea7a1c] group-hover:text-white transition">
          <i data-lucide="graduation-cap" class="w-7 h-7"></i>
        </div>
        <h3 class="text-xl font-bold text-[#5f849a] mb-3 group-hover:text-[#ea7a1c] transition">
          <?php echo get_field('title_1'); ?>
        </h3>
        <p class="text-gray-600 leading-relaxed">
          <?php echo get_field('paragraph_1'); ?>
        </p>
      </div>

      <!-- Card -->
      <div class="group bg-white p-8 rounded-2xl border border-gray-100 shadow-md hover:shadow-xl hover:border-red-100 transition-all duration-500">
        <div class="flex items-center justify-center w-14 h-14 rounded-full bg-[#5f849a] text-white mb-6 group-hover:bg-[#ea7a1c] group-hover:text-white transition">
          <i data-lucide="shield-check" class="w-7 h-7"></i>
        </div>
        <h3 class="text-xl font-bold text-[#5f849a] mb-3 group-hover:text-[#ea7a1c] transition">
         <?php echo get_field('title_2'); ?>
        </h3>
        <p class="text-gray-600 leading-relaxed">
          <?php echo get_field('paragraph_2'); ?>
        </p>
      </div>

      <!-- Card -->
      <div class="group bg-white p-8 rounded-2xl border border-gray-100 shadow-md hover:shadow-xl hover:border-red-100 transition-all duration-500">
        <div class="flex items-center justify-center w-14 h-14 rounded-full bg-[#5f849a] text-white mb-6 group-hover:bg-[#ea7a1c] group-hover:text-white transition">
          <i data-lucide="briefcase" class="w-7 h-7"></i>
        </div>
        <h3 class="text-xl font-bold text-[#5f849a] mb-3 group-hover:text-[#ea7a1c] transition">
          <?php echo get_field('title_3'); ?>
        </h3>
        <p class="text-gray-600 leading-relaxed">
           <?php echo get_field('paragraph_3'); ?>
        </p>
      </div>

      <!-- Card -->
      <div class="group bg-white p-8 rounded-2xl border border-gray-100 shadow-md hover:shadow-xl hover:border-red-100 transition-all duration-500">
        <div class="flex items-center justify-center w-14 h-14 rounded-full bg-[#5f849a] text-white mb-6 group-hover:bg-[#ea7a1c] group-hover:text-white transition">
          <i data-lucide="train" class="w-7 h-7"></i>
        </div>
        <h3 class="text-xl font-bold text-[#5f849a] mb-3 group-hover:text-[#ea7a1c] transition">
          <?php echo get_field('title_4'); ?>
        </h3>
        <p class="text-gray-600 leading-relaxed">
           <?php echo get_field('paragraph_4'); ?>
        </p>
      </div>

      <!-- Card -->
      <div class="group bg-white p-8 rounded-2xl border border-gray-100 shadow-md hover:shadow-xl hover:border-red-100 transition-all duration-500">
        <div class="flex items-center justify-center w-14 h-14 rounded-full bg-[#5f849a] text-white mb-6 group-hover:bg-[#ea7a1c] group-hover:text-white transition">
          <i data-lucide="globe" class="w-7 h-7"></i>
        </div>
        <h3 class="text-xl font-bold text-[#5f849a] mb-3 group-hover:text-[#ea7a1c] transition">
          <?php echo get_field('title_5'); ?>
        </h3>
        <p class="text-gray-600 leading-relaxed">
         <?php echo get_field('paragraph_5'); ?>
        </p>
      </div>

      <!-- Card -->
      <div class="group bg-white p-8 rounded-2xl border border-gray-100 shadow-md hover:shadow-xl hover:border-red-100 transition-all duration-500">
        <div class="flex items-center justify-center w-14 h-14 rounded-full bg-[#5f849a] text-white mb-6 group-hover:bg-[#ea7a1c] group-hover:text-white transition">
          <i data-lucide="target" class="w-7 h-7"></i>
        </div>
        <h3 class="text-xl font-bold text-[#5f849a] mb-3 group-hover:text-[#ea7a1c] transition">
          <?php echo get_field('title_6'); ?>
        </h3>
        <p class="text-gray-600 leading-relaxed">
           <?php echo get_field('paragraph_6'); ?>
        </p>
      </div>
    </div>
  </div>
</section>

<!-- timeline -->
<section id="process" class="bg-gray-100">
  <div class="max-w-3xl mx-auto px-4 py-16">
    <!-- Heading -->
    <div class="text-center mb-16">
      <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4"><?php echo get_field('step_title'); ?></h2>
      <p class="text-gray-600 text-lg max-w-2xl mx-auto">
        <?php echo get_field('step_subheading'); ?>
      </p>
      <div class="w-24 h-1 bg-[#ea7a1c] mx-auto mt-6 rounded-full"></div>
    </div>

    <ol class="relative before:content-[''] before:absolute before:top-0 before:bottom-0 before:w-1 before:bg-gray-300 before:left-1/2 before:-translate-x-1/2">
      
      <!-- Step 1 -->
      <li class="mb-10 flex flex-col md:flex-row md:justify-between md:items-center relative">
        <div class="md:w-1/2 md:pr-8 flex md:justify-end">
          <div class="bg-white p-6 rounded-lg shadow border border-gray-200 w-full">
            <h3 class="font-semibold text-lg text-gray-800"><?php echo get_field('step_title_1'); ?></h3>
            <p class="mt-2 text-gray-600">
             <?php echo get_field('step_paragraph_1'); ?>
            </p>
          </div>
        </div>
        <span class="absolute top-0 left-1/2 -translate-x-1/2 w-10 h-10 bg-[#5f849a] text-white rounded-full flex items-center justify-center font-bold z-10">1</span>
        <div class="md:w-1/2 md:pl-8 hidden md:flex"></div>
      </li>

      <!-- Step 2 -->
      <li class="mb-10 flex flex-col md:flex-row md:justify-between md:items-center relative">
        <div class="md:w-1/2 md:pr-8 hidden md:flex"></div>
        <span class="absolute top-0 left-1/2 -translate-x-1/2 w-10 h-10 bg-[#5f849a] text-white rounded-full flex items-center justify-center font-bold z-10">2</span>
        <div class="md:w-1/2 md:pl-8 flex md:justify-start">
          <div class="bg-white p-6 rounded-lg shadow border border-gray-200 w-full">
            <h3 class="font-semibold text-lg text-gray-800"><?php echo get_field('step_title_2'); ?></h3>
            <p class="mt-2 text-gray-600">
             <?php echo get_field('step_paragraph_2'); ?>
            </p>
          </div>
        </div>
      </li>

      <!-- Step 3 -->
      <li class="mb-10 flex flex-col md:flex-row md:justify-between md:items-center relative">
        <div class="md:w-1/2 md:pr-8 flex md:justify-end">
          <div class="bg-white p-6 rounded-lg shadow border border-gray-200 w-full">
            <h3 class="font-semibold text-lg text-gray-800"><?php echo get_field('step_title_3'); ?></h3>
            <p class="mt-2 text-gray-600">
              <?php echo get_field('step_paragraph_3'); ?>
            </p>
          </div>
        </div>
        <span class="absolute top-0 left-1/2 -translate-x-1/2 w-10 h-10 bg-[#5f849a] text-white rounded-full flex items-center justify-center font-bold z-10">3</span>
        <div class="md:w-1/2 md:pl-8 hidden md:flex"></div>
      </li>

      <!-- Step 4 -->
      <li class="mb-10 flex flex-col md:flex-row md:justify-between md:items-center relative">
        <div class="md:w-1/2 md:pr-8 hidden md:flex"></div>
        <span class="absolute top-0 left-1/2 -translate-x-1/2 w-10 h-10 bg-[#5f849a] text-white rounded-full flex items-center justify-center font-bold z-10">4</span>
        <div class="md:w-1/2 md:pl-8 flex md:justify-start">
          <div class="bg-white p-6 rounded-lg shadow border border-gray-200 w-full">
            <h3 class="font-semibold text-lg text-gray-800"><?php echo get_field('step_title_4'); ?></h3>
            <p class="mt-2 text-gray-600">
              <?php echo get_field('step_paragraph_4'); ?>
            </p>
          </div>
        </div>
      </li>

      <!-- Step 5 -->
      <li class="mb-10 flex flex-col md:flex-row md:justify-between md:items-center relative">
        <div class="md:w-1/2 md:pr-8 flex md:justify-end">
          <div class="bg-white p-6 rounded-lg shadow border border-gray-200 w-full">
            <h3 class="font-semibold text-lg text-gray-800"><?php echo get_field('step_title_5'); ?></h3>
            <p class="mt-2 text-gray-600">
              <?php echo get_field('step_paragraph_5'); ?>
            </p>
          </div>
        </div>
        <span class="absolute top-0 left-1/2 -translate-x-1/2 w-10 h-10 bg-[#5f849a] text-white rounded-full flex items-center justify-center font-bold z-10">5</span>
        <div class="md:w-1/2 md:pl-8 hidden md:flex"></div>
      </li>

      <!-- Step 6 -->
      <li class="mb-10 flex flex-col md:flex-row md:justify-between md:items-center relative">
        <div class="md:w-1/2 md:pr-8 hidden md:flex"></div>
        <span class="absolute top-0 left-1/2 -translate-x-1/2 w-10 h-10 bg-[#5f849a] text-white rounded-full flex items-center justify-center font-bold z-10">6</span>
        <div class="md:w-1/2 md:pl-8 flex md:justify-start">
          <div class="bg-white p-6 rounded-lg shadow border border-gray-200 w-full">
            <h3 class="font-semibold text-lg text-gray-800"><?php echo get_field('step_title_6'); ?></h3>
            <p class="mt-2 text-gray-600">
              <?php echo get_field('step_paragraph_6'); ?>
            </p>
          </div>
        </div>
      </li>

    </ol>
  </div>
</section>



<!-- FAQ Section -->
<section id="faq" class="bg-white py-20">
  <div class="max-w-4xl mx-auto px-4">

    <!-- Heading -->
    <div class="text-center mb-16">
      <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">
        <?php echo get_field('faq_title') ?: 'Frequently Asked Questions'; ?>
      </h2>
      <div class="w-24 h-1 bg-[#ea7a1c] mx-auto mt-6 rounded-full"></div>
    </div>

    <!-- FAQ Items -->
    <div class="space-y-6">

      <?php
      $faq_query = new WP_Query([
        'post_type' => 'faq',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC'
      ]);

      if ($faq_query->have_posts()):
        while ($faq_query->have_posts()): $faq_query->the_post();
      ?>

      <div class="border border-gray-200 rounded-lg p-6">
        <button class="w-full text-left flex justify-between items-center faq-toggle">
          <h3 class="text-lg font-semibold text-gray-800">
            <?php the_title(); ?>
          </h3>
          <span class="text-[#ea7a1c] font-bold text-xl">+</span>
        </button>

        <div class="faq-content hidden mt-4 text-gray-600 leading-relaxed">
          <?php echo get_field('faq_answer'); ?>
        </div>
      </div>

      <?php
        endwhile;
        wp_reset_postdata();
      else:
      ?>
        <p class="text-center text-gray-500">No FAQs added yet.</p>
      <?php endif; ?>

    </div>

  </div>
</section>






<?php get_footer(); // Loads footer.php ?>