<?php
/**
 * Template Name: Apply Now Page
 *
 * @package khakehashi
 */

get_header();
?>
<!-- ====== APPLY NOW FORM (minimal, on-theme) ====== -->
<main class="bg-white">
  <section id="apply" class="bg-[#EC4724] text-white py-16">
    <div class="max-w-5xl mx-auto px-6">
      <div class="text-center mb-8">
        <h2 class="text-3xl md:text-4xl font-extrabold">Apply Now</h2>
        <p class="mt-2 text-white/90">Fill basic details and your Japanese level. We’ll contact you.</p>
      </div>

      <div class="bg-white rounded-2xl shadow-lg p-8 md:p-10 text-gray-800">
        <form id="applyForm" action="#" method="POST" class="space-y-6">
          <!-- Name -->
          <div>
            <label for="fullName" class="block text-sm font-semibold mb-2">Full Name</label>
            <input id="fullName" name="fullName" type="text" placeholder="Your full name" required
              class="w-full px-4 py-3 rounded-lg border border-[#5F849A] focus:outline-none focus:ring-1 focus:ring-[#5F849A]" />
          </div>

          <!-- Address -->
          <div>
            <label for="address" class="block text-sm font-semibold mb-2">Address</label>
            <input id="address" name="address" type="text" placeholder="Street, City" required
              class="w-full px-4 py-3 rounded-lg border border-[#5F849A] focus:outline-none focus:ring-1 focus:ring-[#5F849A]" />
          </div>

          <!-- Phone + Level grid -->
          <div class="grid md:grid-cols-2 gap-4">
            <div>
              <label for="phone" class="block text-sm font-semibold mb-2">Phone Number</label>
              <input id="phone" name="phone" type="tel" placeholder="+977 98XX-XXXXXX" required
                class="w-full px-4 py-3 rounded-lg border border-[#5F849A] focus:outline-none focus:ring-1 focus:ring-[#5F849A]" />
            </div>

            <div>
              <label for="japLevel" class="block text-sm font-semibold mb-2">Japanese Level</label>
              <select id="japLevel" name="japLevel" required
                class="w-full px-4 py-3 rounded-lg border border-[#5F849A] bg-white/90 focus:outline-none focus:ring-1 focus:ring-[#5F849A]">
                <option value="" disabled selected>Select level</option>
                <option value="beginner">Beginner</option>
                <option value="intermediate">Intermediate</option>
                <option value="professional">Professional</option>
              </select>
            </div>
          </div>

          <!-- Hidden field to identify page (optional) -->
          <input type="hidden" name="source" value="applynow-page">

          <!-- Submit -->
          <div class="text-center">
              <button type="submit" class="bg-[#EA7A1C] text-white px-6 py-3 rounded-lg font-semibold hover:bg-[#d96910] transition-colors">
                Submit Application
              </button>
          </div>
        </form>
      </div>
    </div>
  </section>
</main>


 
<?php get_footer(); ?>