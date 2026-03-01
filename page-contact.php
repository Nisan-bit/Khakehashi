<?php
/**
 * The template for displaying story pages
 *
 * @package khakehashi
 */

get_header();
?>
<main id="primary" class="site-main">

<section class="max-w-6xl mx-auto px-4 py-20">

  <!-- Heading -->
  <div class="text-center mb-12">
    <h1 class="text-4xl font-extrabold text-gray-800 leading-tight">Get In Touch</h1>
    <p class="mt-4 text-lg text-gray-600">We're here to help! Fill out the form or use the contact details below.</p>
  </div>

  <!-- 2 Column Layout -->
  <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-stretch">

    <!-- Contact Form -->
    <div class="bg-white p-8 md:p-12 rounded-3xl shadow-xl h-full flex flex-col">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Send Us a Message</h2>

    <?php echo do_shortcode( '[contact-form-7 id="bad4109" title="Contact Form"]' ); ?>

</div>


    <!-- Right Column (Same height as left) -->
    <div class="bg-white rounded-3xl shadow-xl p-8 md:p-12 flex flex-col space-y-10 h-full">

      <!-- Contact Info -->
      <div>
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Contact Information</h2>

        <ul class="space-y-5 text-gray-600 text-lg">
          <li class="flex items-start gap-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/location.png" class="w-7 h-7 mt-1" alt="">
            <span>Purple House, Bagbazar Road, Kathmandu, Nepal</span>
          </li>

          <li class="flex items-start gap-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/email.png" class="w-7 h-7 mt-1" alt="">
            <a href="mailto:info@khakehashi.com" class="hover:text-red-600 transition">info@khakehashi.com</a>
          </li>

          <li class="flex items-start gap-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/call.png" class="w-7 h-7 mt-1" alt="">
            <a href="tel:+9779808628698" class="hover:text-red-600 transition">+977 9808628698</a>
          </li>
        </ul>
      </div>

      <hr class="border-gray-200">

      <!-- Social Media -->
      <div class="text-center">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Follow Us</h2>
        <p class="text-gray-600 mb-6">Stay updated with our latest news and events</p>

        <div class="flex justify-center gap-8">
          <a class="hover:scale-110 transition">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/facebook.png" class="w-10 h-10">
          </a>

          <a href="https://www.instagram.com/khakehashi_nepal/?igsh=cnplZzkxNzRoeTFo" class="hover:scale-110 transition">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/instagram.png" class="w-10 h-10">
          </a>

          <a href="https://wa.me/9768582326" class="hover:scale-110 transition">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/whatsapp.png" class="w-10 h-10">
          </a>
        </div>
      </div>

      <hr class="border-gray-200">

      <!-- Map -->
      <div class="flex-1 flex flex-col">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Find Our Office</h2>

        <div class="rounded-xl overflow-hidden border border-gray-200 shadow-sm flex-1">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3270.204276687615!2d85.31968961058115!3d27.705778125462125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x631fb325ba2b79b%3A0xc8efe7f00dabc0b4!2sKhakehashi%20Japanese%20Education%20Consultancy!5e1!3m2!1sen!2snp!4v1769872575515!5m2!1sen!2snp"
            class="w-full h-72 lg:h-full border-0"
            loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

</main>
<?php get_footer(); ?>
