<?php
/**
 * Single Employee Template
 *
 * @package khakehashi
 */

get_header(); 
?>

<section class="py-12 md:py-20 bg-gray-100">
  <div class="max-w-6xl mx-auto px-4">

    <!-- ID Card -->
    <div class="max-w-4xl mx-auto bg-white rounded-3xl shadow-2xl border border-gray-200 overflow-hidden">

      <!-- Top Accent Bar -->
      <div class="h-2 bg-gradient-to-r from-[#EC4724] to-[#5F849A]"></div>

      <div class="grid md:grid-cols-[1fr_2fr]">

        <!-- PHOTO COLUMN -->
        <div class="relative h-80 md:h-auto">
    <img src="<?php echo get_field('city_image_3'); ?>" class="w-full h-48 object-cover">
            <img src="<?php echo get_field('employee_image'); ?>" class="absolute inset-0 w-full h-full object-cover"/>
          
          
        </div>

        <!-- DETAILS COLUMN -->
        <div class="p-6 md:p-10 space-y-6">

          <!-- Name & Role -->
          <div>
            <h2 class="text-2xl sm:text-3xl md:text-3xl font-extrabold text-gray-900 leading-tight">
              <?php the_title(); ?>
            </h2>
            <p class="text-sm sm:text-lg font-semibold text-[#EC4724] mt-1">
              <?php the_field('position'); ?>
            </p>
          </div>

          <!-- Info Grid -->
          <div class="grid sm:grid-cols-2 gap-4 md:gap-6 text-xs sm:text-sm">

            <div>
              <p class="text-gray-500 uppercase tracking-wide">Employee ID</p>
              <p class="font-semibold text-gray-900"><?php the_field('employee_id'); ?></p>
            </div>

            <div>
              <p class="text-gray-500 uppercase tracking-wide">Department</p>
              <p class="font-semibold text-gray-900"><?php the_field('department'); ?></p>
            </div>

            <div>
              <p class="text-gray-500 uppercase tracking-wide">Employment Status</p>
              <p class="font-semibold text-gray-900"><?php the_field('employment_status'); ?></p>
            </div>

            <div>
              <p class="text-gray-500 uppercase tracking-wide">Issued Date</p>
              <p class="font-semibold text-gray-900"><?php the_field('issued_date'); ?></p>
            </div>

            <div>
              <p class="text-gray-500 uppercase tracking-wide">Valid Until</p>
              <p class="font-semibold text-gray-900"><?php the_field('valid_until'); ?></p>
            </div>

            <div>
              <p class="text-gray-500 uppercase tracking-wide">Office Location</p>
              <p class="font-semibold text-gray-900"><?php the_field('office_location'); ?></p>
            </div>

            <div>
              <p class="text-gray-500 uppercase tracking-wide">Official Contact</p>
              <p class="font-semibold text-gray-900"><?php the_field('contact_number'); ?></p>
            </div>

            <div>
              <p class="text-gray-500 uppercase tracking-wide">Organization</p>
              <p class="font-semibold text-gray-900">Khakehashi Japanese Education Consultancy</p>
            </div>

          </div>

          <!-- Disclaimer -->
          <div class="border-t border-gray-200 pt-4">
            <p class="text-xs sm:text-sm text-gray-500 leading-relaxed">
              This card must be carried at all times during duty and presented upon request. Property of Khakehashi Japanese Education Consultancy.
            </p>
          </div>

        </div>

      </div>
    </div>

  </div>
</section>

<?php get_footer(); ?>
