<?php
/**
 * Template Name: Student Stories
 * The template for Student Stories page
 *
 * @package khakehashi
 */

get_header();
?>

<main id="primary" class="site-main">

  <!-- Hero -->
  <section class="py-20 bg-gray-100 text-center">
    <div class="max-w-4xl mx-auto px-4">
      <h1 class="text-4xl font-extrabold text-gray-800">Student Success Stories</h1>
      <p class="mt-4 text-lg text-gray-600">
        Hear directly from students who trusted us with their journey to Japan. Their stories are a testament to our commitment and guidance.
      </p>
    </div>
  </section>

  <!-- Testimonial / Stories Section -->
  <section class="py-20">
    <div class="max-w-6xl mx-auto px-4">

      <!-- Inline small CSS to keep template self-contained (optional: move to style.css) -->
      <style>
        .testimonial-grid { display:block; }
        .testimonial-column { display:block; gap:1.5rem; }

        .quote-mark {
          position:absolute;
          top:1rem;
          left:1rem;
          color: rgba(167,167,167,0.18);
          font-size:3.25rem;
          font-family: serif;
          line-height:1;
        }

        .testimonial-text { margin-top: 0.5rem; color: #374151; }

        @media (min-width: 1024px) {
          .testimonial-grid {
            display: flex;
            gap: 2rem;
            align-items: flex-start;
          }
          .testimonial-column {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 2rem;
          }
          /* stagger first card of column 2 */
          .testimonial-column:nth-child(2) > article:first-child {
            transform: translateY(2.2rem);
          }
        }

        @media (max-width: 1023px) {
          .quote-mark { font-size: 2.6rem; top: 0.75rem; left: 0.75rem; }
        }
      </style>

      <div class="testimonial-grid">
        <!-- Column 1 -->
        <div class="testimonial-column">

          <article class="bg-white p-8 lg:p-10 rounded-3xl shadow-lg relative">
            <span class="quote-mark">“</span>
            <p class="testimonial-text italic leading-relaxed">
              "Sakura Study provided a level of support I couldn't have imagined. From initial counseling to visa preparation, they were with me every step. I'm now studying at my dream university in Osaka, and it's all thanks to their meticulous guidance."
            </p>
            <div class="flex items-center mt-6">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/student-1.jpg" alt="Sushil" class="w-12 h-12 rounded-full object-cover mr-4 shadow-sm">
              <div>
                <span class="block text-md font-semibold text-gray-900">Sushil Shrestha</span>
                <span class="block text-sm text-gray-500">Osaka University of Technology</span>
              </div>
            </div>
          </article>

          <article class="bg-white p-8 lg:p-10 rounded-3xl shadow-lg relative">
            <span class="quote-mark">“</span>
            <p class="testimonial-text italic leading-relaxed">
              "Their personalized approach to shortlisting universities was exactly what I needed. They helped me find a program in Kyoto that perfectly aligned with my academic interests and career goals."
            </p>
            <div class="flex items-center mt-6">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/student-2.jpg" alt="Ram" class="w-12 h-12 rounded-full object-cover mr-4 shadow-sm">
              <div>
                <span class="block text-md font-semibold text-gray-900">Ram Karki</span>
                <span class="block text-sm text-gray-500">Kyoto University</span>
              </div>
            </div>
          </article>

          <article class="bg-white p-8 lg:p-10 rounded-3xl shadow-lg relative">
            <span class="quote-mark">“</span>
            <p class="testimonial-text italic leading-relaxed">
              "The language preparation sessions were incredibly helpful. I was able to pass the JLPT N3 exam, which made my university application even stronger."
            </p>
            <div class="flex items-center mt-6">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/who.jpg" alt="Pujan" class="w-12 h-12 rounded-full object-cover mr-4 shadow-sm">
              <div>
                <span class="block text-md font-semibold text-gray-900">Pujan Siwakoti</span>
                <span class="block text-sm text-gray-500">Ritsumeikan Asia Pacific University</span>
              </div>
            </div>
          </article>

        </div>

        <!-- Column 2 -->
        <div class="testimonial-column">

          <article class="bg-white p-8 lg:p-10 rounded-3xl shadow-lg relative">
            <span class="quote-mark">“</span>
            <p class="testimonial-text italic leading-relaxed">
              "The visa process felt so overwhelming, but their team's file review and mock interviews gave me so much confidence. I knew exactly what to expect."
            </p>
            <div class="flex items-center mt-6">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/student-3.jpg" alt="Anisha" class="w-12 h-12 rounded-full object-cover mr-4 shadow-sm">
              <div>
                <span class="block text-md font-semibold text-gray-900">Anisha Lama</span>
                <span class="block text-sm text-gray-500">Tokyo Metropolitan University</span>
              </div>
            </div>
          </article>

          <article class="bg-white p-8 lg:p-10 rounded-3xl shadow-lg relative">
            <span class="quote-mark">“</span>
            <p class="testimonial-text italic leading-relaxed">
              "I was amazed by the detailed pre-departure support. They gave me tips on everything from finding accommodation to setting up a bank account. I felt completely prepared and confident when I landed."
            </p>
            <div class="flex items-center mt-6">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/lisa.jpg" alt="Priya" class="w-12 h-12 rounded-full object-cover mr-4 shadow-sm">
              <div>
                <span class="block text-md font-semibold text-gray-900">Priya Yadav</span>
                <span class="block text-sm text-gray-500">Waseda University</span>
              </div>
            </div>
          </article>

        </div>
      </div>

    </div>
  </section>

  <!-- CTA -->
  <section class="bg-red-600 text-white py-20 text-center">
    <div class="max-w-4xl mx-auto px-4">
      <h2 class="text-3xl md:text-4xl font-extrabold leading-tight">Ready to Write Your Own Story?</h2>
      <p class="mt-4 text-lg md:text-xl opacity-90">
        We're here to help you begin your adventure. Contact us to start your journey today.
      </p>
      <a href="<?php echo get_permalink(30); ?>" class="mt-8 inline-block bg-white text-red-600 px-8 py-4 rounded-full font-bold shadow-lg hover:bg-gray-100 transition transform hover:scale-105">
        Get Free Counseling
      </a>
    </div>
  </section>

</main>

<?php get_footer(); ?>
