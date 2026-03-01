<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package khakehashi
 */

?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<div class="fixed bottom-6 right-6 flex flex-col items-center gap-3 z-[9999]">
<!-- social media icons -->
  <div class="flex flex-col gap-3">
    <div class="relative group flex items-center justify-end">
      <span class="absolute right-14 bg-green-900 text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap pointer-events-none shadow-lg uppercase tracking-wider font-bold">Message WhatsApp Business</span>
      <a href="https://wa.me/9768582326" target="_blank" class="w-12 h-12 bg-green-500 text-white rounded-full shadow-lg flex items-center justify-center hover:scale-110 transition duration-300">
        <i class="fa-brands fa-whatsapp text-2xl"></i>
      </a>
    </div>
<div class="relative group flex items-center justify-end">
      <span class="absolute right-14 bg-green-900 text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap pointer-events-none shadow-lg uppercase tracking-wider font-bold">Message WhatsApp</span>
      <a href="https://wa.me/9779808628698" target="_blank" class="w-12 h-12 bg-green-900 text-white rounded-full shadow-lg flex items-center justify-center hover:scale-110 transition duration-300">
        <i class="fa-brands fa-whatsapp text-2xl"></i>
      </a>
    </div>
    <div class="relative group flex items-center justify-end">
      <span class="absolute right-14 bg-pink-800 text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap pointer-events-none shadow-lg uppercase tracking-wider font-bold">Follow Instagram</span>
      <a href="https://www.instagram.com/khakehashi_nepal/" target="_blank" class="w-12 h-12 bg-pink-700 text-white rounded-full shadow-lg flex items-center justify-center hover:scale-110 transition duration-300">
        <i class="fa-brands fa-instagram text-2xl"></i>
      </a>
    </div>

    <div class="relative group flex items-center justify-end">
      <span class="absolute right-14 bg-gray-900 text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap pointer-events-none shadow-lg uppercase tracking-wider font-bold">Watch TikTok</span>
      <a href="https://www.tiktok.com/@khakehashi.japane?_r=1&_t=ZS-9360noQhHtg" target="_blank" class="w-12 h-12 bg-black text-white rounded-full shadow-lg flex items-center justify-center hover:scale-110 transition duration-300">
        <i class="fa-brands fa-tiktok text-xl"></i>
      </a>
    </div>

    <div class="relative group flex items-center justify-end">
      <span class="absolute right-14 bg-blue-900 text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap pointer-events-none shadow-lg uppercase tracking-wider font-bold">Join Facebook</span>
      <a href="https://www.facebook.com/profile.php?id=61583592046271" target="_blank" class="w-12 h-12 bg-blue-800 text-white rounded-full shadow-lg flex items-center justify-center hover:scale-110 transition duration-300">
        <i class="fa-brands fa-facebook-f text-xl"></i>
      </a>
    </div>

  </div>

  <button id="backToTop" 
          onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
          class="hidden w-12 h-12 bg-brandblue text-white rounded-full shadow-lg items-center justify-center hover:bg-[#d96910] transition-all duration-300 hover:-translate-y-1">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
    </svg>
  </button>

</div>

<footer class="bg-gray-900 text-gray-300 py-10">
  <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-10">

    <div>
      <div class="flex items-center space-x-2 mb-3">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/1x/no-bg-logo.png" 
             alt="Khakehashi Logo" class="w-12 h-12 object-contain">
        <span class="text-lg font-semibold text-white">
          Khakehashi Japanese Education Consultancy
        </span>
      </div>
      <p class="text-sm text-gray-400 leading-relaxed">
         A Perfect Bridge to Connect with Japan and its culture.
      </p>

      <div class="flex space-x-4 mt-4">
        <a href="https://www.facebook.com/khakehashi" class="hover:text-orange-400 transition">
          <i class="fa-brands fa-facebook-f text-base"></i>
        </a>
        <a href="https://www.instagram.com/khakehashi_nepal/" class="hover:text-orange-400 transition">
          <i class="fa-brands fa-instagram text-base"></i>
        </a>
        <a href="#" class="hover:text-orange-400 transition">
          <i class="fa-brands fa-youtube text-base"></i>
        </a>
      </div>
    </div>

    <div>
      <h3 class="text-white font-semibold mb-3 text-sm uppercase tracking-wide">Quick Links</h3>
      <ul class="space-y-2 text-sm">
        <li><a href="<?php echo home_url('/'); ?>" class="hover:text-orange-400 transition">Home</a></li>
        <li><a href="<?php echo home_url('/why-japan'); ?>" class="hover:text-orange-400 transition">Why Japan?</a></li>
        <li><a href="<?php echo home_url('/services'); ?>" class="hover:text-orange-400 transition">Services</a></li>
        <li><a href="<?php echo home_url('/contact'); ?>" class="hover:text-orange-400 transition">Contact</a></li>
      </ul>
    </div>

    <div>
      <h3 class="text-white font-semibold mb-3 text-sm uppercase tracking-wide">Contact</h3>
      <ul class="space-y-2 text-sm text-gray-400">
        <li class="flex items-center space-x-3">
          <i class="fa-solid fa-location-dot text-orange-400"></i>
          <span>Bagbazar Purple House 2nd Floor</span>
        </li>
        <li class="flex items-center space-x-3">
          <i class="fa-solid fa-phone text-orange-400"></i>
          <span>+9779768582326</span>
        </li>
        <li class="flex items-center space-x-3">
          <i class="fa-solid fa-envelope text-orange-400"></i>
          <span>info@khakehashi.com</span>
        </li>
      </ul>
    </div>

  </div>

  <div class="border-t border-gray-700 mt-10 pt-4 text-center text-xs text-gray-500">
    © 2026 Khakehashi Japanese Education Consultancy. All rights reserved.
  </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const backToTopBtn = document.getElementById('backToTop');
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            backToTopBtn.classList.remove('hidden');
            backToTopBtn.classList.add('flex');
        } else {
            backToTopBtn.classList.add('hidden');
            backToTopBtn.classList.remove('flex');
        }
    });
});
</script>



<?php wp_footer(); ?>

</body>
</html>