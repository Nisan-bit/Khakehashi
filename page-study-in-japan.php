<?php
/**
 * Template Name: Study in Japan
 * Description: Custom template for the Study in Japan page.
 *
 * @package khakehashi
 */

get_header();
?>
 <!-- Lucide Icons CDN -->
<script src="https://unpkg.com/lucide@latest"></script>
<!-- Hero Section -->
<section class="relative bg-brandOrange text-white">
  <div class="relative max-w-6xl mx-auto px-4 py-32 text-center">
    <h1 class="text-4xl md:text-5xl font-extrabold"><?php echo get_field('study_heading'); ?></h1>
    <p class="mt-4 text-lg md:text-xl opacity-90">
      <?php echo get_field('study_subheading'); ?>
    </p>
    <div class="mt-8 flex justify-center gap-4">
                <a href="https://wa.me/9768582326" class="bg-[#5f849a] text-white px-8 py-4 rounded-lg font-bold hover:bg-[#4a6a7a] transition inline-flex items-center justify-center gap-2">
                    <i data-lucide="message-circle" class="w-5 h-5"></i>
                    WhatsApp Consultation
                </a>
                <a href="tel:9768582326" class="bg-[#ea7a1c] text-white px-8 py-4 rounded-lg font-bold hover:bg-[#d66d15] transition inline-flex items-center justify-center gap-2">
                    <i data-lucide="phone" class="w-5 h-5"></i>
                    Call Us Now
                </a>
    </div>
  </div>
</section>

    <!-- Introduction Section -->
    <section class="bg-white py-20">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">Why Study in Japan?</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Japan offers world-renowned education, cutting-edge technology, rich culture, and excellent career opportunities for Nepalese students
                </p>
                <div class="w-24 h-1 bg-[#ea7a1c] mx-auto mt-6 rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-[#5f849a] text-white rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="award" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">World-Class Education</h3>
                    <p class="text-gray-600">Top-ranked universities with advanced research facilities and innovative teaching methods</p>
                </div>

                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-[#ea7a1c] text-white rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="briefcase" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Career Opportunities</h3>
                    <p class="text-gray-600">Part-time work during studies and excellent job prospects after graduation</p>
                </div>

                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-[#5f849a] text-white rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="piggy-bank" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Scholarships Available</h3>
                    <p class="text-gray-600">MEXT and other scholarships covering tuition and living expenses for deserving students</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Language Schools Section -->
    <section id="language-schools" class="bg-gray-100 py-20">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">Japanese Language Schools</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    Start your journey by mastering Japanese language - the gateway to higher education and career success in Japan
                </p>
                <div class="w-24 h-1 bg-[#ea7a1c] mx-auto mt-6 rounded-full"></div>
            </div>

            <!-- Language School Overview -->
            <div class="bg-white rounded-2xl shadow-lg p-8 mb-12">
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">What are Language Schools?</h3>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            Japanese language schools provide intensive language training to help international students achieve 
                            proficiency in Japanese. They prepare students for JLPT exams and university entrance.
                        </p>
                        <div class="space-y-2">
                            <p class="text-gray-700"><strong>Duration:</strong> 6 months to 2 years</p>
                            <p class="text-gray-700"><strong>Student Visa:</strong> Yes (can work part-time 28 hrs/week)</p>
                            <p class="text-gray-700"><strong>Entry Level:</strong> Beginner to Advanced</p>
                            <p class="text-gray-700"><strong>Class Size:</strong> 15-20 students average</p>
                        </div>
                    </div>
                    <div>
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=800" 
                             alt="Language School" 
                             class="rounded-lg shadow-md w-full h-64 object-cover">
                    </div>
                </div>
            </div>

            <!-- Language Course Types -->
            <div class="mb-12">
    <h3 class="text-3xl font-bold text-gray-900 mb-8 text-center">Course Types & Programs</h3>
    
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php
        $args = array(
            'post_type'      => 'course',
            'posts_per_page' => -1,
            'orderby'        => 'date',
            'order'          => 'ASC'
        );
        $course_query = new WP_Query($args);

        if ($course_query->have_posts()) :
            while ($course_query->have_posts()) : $course_query->the_post();
                // Fetch ACF Fields
                $icon     = get_field('icon_name') ?: 'book-open'; // Fallback icon
                $subtitle = get_field('course_subtitle');
                $color    = get_field('accent_color') ?: '#5f849a'; // Fallback color
        ?>
                <div class="bg-white rounded-xl shadow-md p-6 border-l-4" style="border-color: <?php echo esc_attr($color); ?>;">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 text-white rounded-full flex items-center justify-center flex-shrink-0" style="background-color: <?php echo esc_attr($color); ?>;">
                            <i data-lucide="<?php echo esc_attr($icon); ?>" class="w-5 h-5"></i>
                        </div>
                        <h4 class="font-bold text-gray-900"><?php the_title(); ?></h4>
                    </div>
                    <div class="text-sm text-gray-600 mb-2">
                        <?php the_content(); ?>
                    </div>
                    <?php if ($subtitle) : ?>
                        <p class="text-xs text-gray-500"><?php echo esc_html($subtitle); ?></p>
                    <?php endif; ?>
                </div>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
</div>

            <!-- Language School Benefits & Requirements -->
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Benefits -->
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Benefits of Language School</h3>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Student Visa (Ryugaku)</h4>
                                <p class="text-sm text-gray-600">Legal residency with part-time work permission (28 hours/week)</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Pathway to University</h4>
                                <p class="text-sm text-gray-600">Direct route to undergraduate and graduate programs</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Cultural Integration</h4>
                                <p class="text-sm text-gray-600">Learn language in authentic Japanese environment</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Earn While Learning</h4>
                                <p class="text-sm text-gray-600">Part-time jobs help cover living expenses (¥100,000+/month)</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Support Services</h4>
                                <p class="text-sm text-gray-600">Housing assistance, career counseling, and student support</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Network Building</h4>
                                <p class="text-sm text-gray-600">Connect with international students and Japanese locals</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Application Process -->
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Application Process</h3>
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-[#ea7a1c] text-white rounded-full flex items-center justify-center font-bold">
                                1
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Choose School & Course</h4>
                                <p class="text-sm text-gray-600">Select language school based on location and program type</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-[#ea7a1c] text-white rounded-full flex items-center justify-center font-bold">
                                2
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Prepare Documents</h4>
                                <p class="text-sm text-gray-600">Academic certificates, passport, photos, financial proof, study plan</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-[#ea7a1c] text-white rounded-full flex items-center justify-center font-bold">
                                3
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Submit Application</h4>
                                <p class="text-sm text-gray-600">Apply through school or authorized agent 6 months in advance</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-[#ea7a1c] text-white rounded-full flex items-center justify-center font-bold">
                                4
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">COE Issuance</h4>
                                <p class="text-sm text-gray-600">School applies for Certificate of Eligibility from Immigration</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-[#ea7a1c] text-white rounded-full flex items-center justify-center font-bold">
                                5
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Visa Application</h4>
                                <p class="text-sm text-gray-600">Apply for student visa at Japanese Embassy in Nepal</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-[#ea7a1c] text-white rounded-full flex items-center justify-center font-bold">
                                6
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Travel to Japan</h4>
                                <p class="text-sm text-gray-600">Receive visa, book flight, and begin your studies in Japan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Costs -->
            <div class="mt-8 bg-white rounded-2xl shadow-lg p-8">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Estimated Costs</h3>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="text-center p-4 bg-gray-50 rounded-lg">
                        <p class="text-sm text-gray-600 mb-2">Tuition Fee (Annual)</p>
                        <p class="text-2xl font-bold text-[#5f849a]">¥700,000 - ¥900,000</p>
                        <p class="text-xs text-gray-500 mt-1">$5,000 - $6,500 approx</p>
                    </div>
                    <div class="text-center p-4 bg-gray-50 rounded-lg">
                        <p class="text-sm text-gray-600 mb-2">Living Expenses (Monthly)</p>
                        <p class="text-2xl font-bold text-[#ea7a1c]">¥80,000 - ¥120,000</p>
                        <p class="text-xs text-gray-500 mt-1">Rent, food, transport, utilities</p>
                    </div>
                    <div class="text-center p-4 bg-gray-50 rounded-lg">
                        <p class="text-sm text-gray-600 mb-2">Part-time Earnings</p>
                        <p class="text-2xl font-bold text-[#5f849a]">¥100,000+/month</p>
                        <p class="text-xs text-gray-500 mt-1">Working 28 hours/week</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Universities Section -->
    <section id="universities" class="bg-white py-20">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">Japanese Universities & Colleges</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    Pursue undergraduate, graduate, or doctoral programs at Japan's prestigious universities
                </p>
                <div class="w-24 h-1 bg-[#ea7a1c] mx-auto mt-6 rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-8 mb-12">
                <div>
                    <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?w=800" 
                         alt="University" 
                         class="rounded-2xl shadow-xl w-full h-80 object-cover">
                </div>
                <div class="flex flex-col justify-center">
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Higher Education in Japan</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Japan has over 780 universities offering diverse programs in engineering, science, business, 
                        arts, and humanities. Many courses are available in English for international students.
                    </p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-[#5f849a] text-white rounded-full flex items-center justify-center">
                                <i data-lucide="building-2" class="w-5 h-5"></i>
                            </div>
                            <p class="text-gray-700"><strong>National Universities:</strong> Prestigious, research-focused institutions</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-[#ea7a1c] text-white rounded-full flex items-center justify-center">
                                <i data-lucide="building" class="w-5 h-5"></i>
                            </div>
                            <p class="text-gray-700"><strong>Private Universities:</strong> Diverse programs with modern facilities</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-[#5f849a] text-white rounded-full flex items-center justify-center">
                                <i data-lucide="school" class="w-5 h-5"></i>
                            </div>
                            <p class="text-gray-700"><strong>Public Universities:</strong> Regional universities with quality education</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Study Levels -->
            <div class="mb-12">
                <h3 class="text-3xl font-bold text-gray-900 mb-8 text-center">Study Levels & Programs</h3>
                
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Level 1 -->
                    <div class="bg-white rounded-xl shadow-md p-6 border-t-4 border-[#5f849a]">
                        <div class="w-12 h-12 bg-[#5f849a] text-white rounded-full flex items-center justify-center mx-auto mb-4">
                            <i data-lucide="book" class="w-6 h-6"></i>
                        </div>
                        <h4 class="font-bold text-gray-900 text-center mb-2">Undergraduate</h4>
                        <p class="text-sm text-gray-600 text-center mb-3">4-year Bachelor's degree programs</p>
                        <ul class="text-xs text-gray-600 space-y-1">
                            <li>• Engineering & Technology</li>
                            <li>• Business & Economics</li>
                            <li>• Science & Mathematics</li>
                            <li>• Arts & Humanities</li>
                        </ul>
                    </div>

                    <!-- Level 2 -->
                    <div class="bg-white rounded-xl shadow-md p-6 border-t-4 border-[#ea7a1c]">
                        <div class="w-12 h-12 bg-[#ea7a1c] text-white rounded-full flex items-center justify-center mx-auto mb-4">
                            <i data-lucide="graduation-cap" class="w-6 h-6"></i>
                        </div>
                        <h4 class="font-bold text-gray-900 text-center mb-2">Graduate (Master's)</h4>
                        <p class="text-sm text-gray-600 text-center mb-3">2-year Master's degree programs</p>
                        <ul class="text-xs text-gray-600 space-y-1">
                            <li>• Advanced Engineering</li>
                            <li>• MBA Programs</li>
                            <li>• Research-based studies</li>
                            <li>• Specialized fields</li>
                        </ul>
                    </div>

                    <!-- Level 3 -->
                    <div class="bg-white rounded-xl shadow-md p-6 border-t-4 border-[#5f849a]">
                        <div class="w-12 h-12 bg-[#5f849a] text-white rounded-full flex items-center justify-center mx-auto mb-4">
                            <i data-lucide="flask-conical" class="w-6 h-6"></i>
                        </div>
                        <h4 class="font-bold text-gray-900 text-center mb-2">Doctoral (PhD)</h4>
                        <p class="text-sm text-gray-600 text-center mb-3">3-5 year research programs</p>
                        <ul class="text-xs text-gray-600 space-y-1">
                            <li>• Original research</li>
                            <li>• Academic career path</li>
                            <li>• Scholarship opportunities</li>
                            <li>• Publications & thesis</li>
                        </ul>
                    </div>

                    <!-- Level 4 -->
                    <div class="bg-white rounded-xl shadow-md p-6 border-t-4 border-[#ea7a1c]">
                        <div class="w-12 h-12 bg-[#ea7a1c] text-white rounded-full flex items-center justify-center mx-auto mb-4">
                            <i data-lucide="users" class="w-6 h-6"></i>
                        </div>
                        <h4 class="font-bold text-gray-900 text-center mb-2">Research Student</h4>
                        <p class="text-sm text-gray-600 text-center mb-3">6-12 month preparatory program</p>
                        <ul class="text-xs text-gray-600 space-y-1">
                            <li>• Pre-Master's/PhD prep</li>
                            <li>• Language improvement</li>
                            <li>• Research proposal</li>
                            <li>• Lab experience</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Popular Fields -->
            <div class="mb-12">
                <h3 class="text-3xl font-bold text-gray-900 mb-8 text-center">Popular Fields of Study for Nepalese Students</h3>
                
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-gray-50 rounded-xl p-6 border-2 border-gray-200 hover:border-[#5f849a] transition">
                        <div class="w-12 h-12 bg-[#5f849a] text-white rounded-full flex items-center justify-center mb-4">
                            <i data-lucide="cpu" class="w-6 h-6"></i>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-2">Computer Science & IT</h4>
                        <p class="text-sm text-gray-600">AI, software engineering, cybersecurity, data science</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-6 border-2 border-gray-200 hover:border-[#ea7a1c] transition">
                        <div class="w-12 h-12 bg-[#ea7a1c] text-white rounded-full flex items-center justify-center mb-4">
                            <i data-lucide="cog" class="w-6 h-6"></i>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-2">Engineering</h4>
                        <p class="text-sm text-gray-600">Mechanical, electrical, civil, automotive engineering</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-6 border-2 border-gray-200 hover:border-[#5f849a] transition">
                        <div class="w-12 h-12 bg-[#5f849a] text-white rounded-full flex items-center justify-center mb-4">
                            <i data-lucide="trending-up" class="w-6 h-6"></i>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-2">Business Administration</h4>
                        <p class="text-sm text-gray-600">MBA, international business, finance, marketing</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-6 border-2 border-gray-200 hover:border-[#ea7a1c] transition">
                        <div class="w-12 h-12 bg-[#ea7a1c] text-white rounded-full flex items-center justify-center mb-4">
                            <i data-lucide="flask-conical" class="w-6 h-6"></i>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-2">Natural Sciences</h4>
                        <p class="text-sm text-gray-600">Chemistry, physics, biology, environmental science</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-6 border-2 border-gray-200 hover:border-[#5f849a] transition">
                        <div class="w-12 h-12 bg-[#5f849a] text-white rounded-full flex items-center justify-center mb-4">
                            <i data-lucide="globe" class="w-6 h-6"></i>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-2">International Relations</h4>
                        <p class="text-sm text-gray-600">Global studies, diplomacy, development studies</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-6 border-2 border-gray-200 hover:border-[#ea7a1c] transition">
                        <div class="w-12 h-12 bg-[#ea7a1c] text-white rounded-full flex items-center justify-center mb-4">
                            <i data-lucide="palette" class="w-6 h-6"></i>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-2">Arts & Design</h4>
                        <p class="text-sm text-gray-600">Graphic design, animation, architecture, fine arts</p>
                    </div>
                </div>
            </div>

            <!-- University Admission Requirements -->
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-gradient-to-br from-[#5f849a] to-[#4a6a7a] rounded-2xl p-8 text-white">
                    <h3 class="text-2xl font-bold mb-6">Admission Requirements</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3">
                            <i data-lucide="check-circle" class="w-6 h-6 text-[#ea7a1c] flex-shrink-0"></i>
                            <span><strong>Academic:</strong> 12 years education (Undergraduate) or Bachelor's (Graduate)</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i data-lucide="check-circle" class="w-6 h-6 text-[#ea7a1c] flex-shrink-0"></i>
                            <span><strong>Language:</strong> JLPT N2/N1 or TOEFL/IELTS for English programs</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i data-lucide="check-circle" class="w-6 h-6 text-[#ea7a1c] flex-shrink-0"></i>
                            <span><strong>EJU Exam:</strong> Required for undergraduate admission (Japanese + subjects)</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i data-lucide="check-circle" class="w-6 h-6 text-[#ea7a1c] flex-shrink-0"></i>
                            <span><strong>University Exam:</strong> Individual entrance examination by each university</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i data-lucide="check-circle" class="w-6 h-6 text-[#ea7a1c] flex-shrink-0"></i>
                            <span><strong>Documents:</strong> Statement of purpose, recommendation letters, transcripts</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i data-lucide="check-circle" class="w-6 h-6 text-[#ea7a1c] flex-shrink-0"></i>
                            <span><strong>Financial Proof:</strong> Bank statement showing ability to cover expenses</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-8 border-2 border-gray-100">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">University Costs</h3>
                    <div class="space-y-4">
                        <div>
                            <p class="font-semibold text-gray-900 mb-2">National Universities (Annual)</p>
                            <p class="text-2xl font-bold text-[#5f849a]">¥535,800</p>
                            <p class="text-sm text-gray-600">Fixed tuition for all programs</p>
                        </div>
                        <div class="border-t pt-4">
                            <p class="font-semibold text-gray-900 mb-2">Private Universities (Annual)</p>
                            <p class="text-2xl font-bold text-[#ea7a1c]">¥800,000 - ¥1,500,000</p>
                            <p class="text-sm text-gray-600">Varies by field and institution</p>
                        </div>
                        <div class="border-t pt-4">
                            <p class="font-semibold text-gray-900 mb-2">Entrance Examination Fee</p>
                            <p class="text-xl font-bold text-gray-700">¥17,000 - ¥35,000</p>
                            <p class="text-sm text-gray-600">One-time payment</p>
                        </div>
                        <div class="border-t pt-4">
                            <p class="font-semibold text-gray-900 mb-2">Admission Fee</p>
                            <p class="text-xl font-bold text-gray-700">¥282,000 (National)</p>
                            <p class="text-sm text-gray-600">Paid once upon enrollment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vocational Schools Section -->
    <section id="vocational-schools" class="bg-gray-100 py-20">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">Vocational & Technical Schools (Senmon Gakko)</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    Practical, career-focused education leading directly to employment in specialized fields
                </p>
                <div class="w-24 h-1 bg-[#ea7a1c] mx-auto mt-6 rounded-full"></div>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-8 mb-12">
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">About Vocational Schools</h3>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            Senmon Gakko are specialized training colleges offering hands-on education in technical and 
                            professional fields. Programs typically last 2 years and lead to professional qualifications.
                        </p>
                        <div class="space-y-2">
                            <p class="text-gray-700"><strong>Duration:</strong> 2-4 years</p>
                            <p class="text-gray-700"><strong>Qualification:</strong> Diploma or Advanced Diploma</p>
                            <p class="text-gray-700"><strong>Focus:</strong> Practical skills and job placement</p>
                            <p class="text-gray-700"><strong>Employment Rate:</strong> 90%+ after graduation</p>
                        </div>
                    </div>
                    <div>
                        <img src="https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?w=800" 
                             alt="Vocational Training" 
                             class="rounded-lg shadow-md w-full h-64 object-cover">
                    </div>
                </div>
            </div>

            <!-- Popular Vocational Fields -->
            <div class="mb-12">
                <h3 class="text-3xl font-bold text-gray-900 mb-8 text-center">Popular Vocational Programs</h3>
                
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-[#5f849a]">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0">
                                <i data-lucide="monitor" class="w-5 h-5"></i>
                            </div>
                            <h4 class="font-bold text-gray-900">IT & Programming</h4>
                        </div>
                        <p class="text-sm text-gray-600">Web development, game design, network engineering</p>
                    </div>

                    <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-[#ea7a1c]">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-[#ea7a1c] text-white rounded-full flex items-center justify-center flex-shrink-0">
                                <i data-lucide="palette" class="w-5 h-5"></i>
                            </div>
                            <h4 class="font-bold text-gray-900">Design & Animation</h4>
                        </div>
                        <p class="text-sm text-gray-600">Graphic design, manga, anime, 3D modeling</p>
                    </div>

                    <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-[#5f849a]">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0">
                                <i data-lucide="utensils" class="w-5 h-5"></i>
                            </div>
                            <h4 class="font-bold text-gray-900">Culinary Arts</h4>
                        </div>
                        <p class="text-sm text-gray-600">Japanese cuisine, pastry, hotel management</p>
                    </div>

                    <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-[#ea7a1c]">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-[#ea7a1c] text-white rounded-full flex items-center justify-center flex-shrink-0">
                                <i data-lucide="heart-pulse" class="w-5 h-5"></i>
                            </div>
                            <h4 class="font-bold text-gray-900">Healthcare</h4>
                        </div>
                        <p class="text-sm text-gray-600">Nursing, dental hygiene, medical technology</p>
                    </div>

                    <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-[#5f849a]">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0">
                                <i data-lucide="car" class="w-5 h-5"></i>
                            </div>
                            <h4 class="font-bold text-gray-900">Automotive</h4>
                        </div>
                        <p class="text-sm text-gray-600">Auto mechanics, vehicle engineering</p>
                    </div>

                    <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-[#ea7a1c]">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-[#ea7a1c] text-white rounded-full flex items-center justify-center flex-shrink-0">
                                <i data-lucide="scissors" class="w-5 h-5"></i>
                            </div>
                            <h4 class="font-bold text-gray-900">Beauty & Fashion</h4>
                        </div>
                        <p class="text-sm text-gray-600">Cosmetology, fashion design, styling</p>
                    </div>

                    <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-[#5f849a]">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0">
                                <i data-lucide="hotel" class="w-5 h-5"></i>
                            </div>
                            <h4 class="font-bold text-gray-900">Tourism & Hospitality</h4>
                        </div>
                        <p class="text-sm text-gray-600">Hotel management, travel services</p>
                    </div>

                    <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-[#ea7a1c]">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-[#ea7a1c] text-white rounded-full flex items-center justify-center flex-shrink-0">
                                <i data-lucide="briefcase" class="w-5 h-5"></i>
                            </div>
                            <h4 class="font-bold text-gray-900">Business</h4>
                        </div>
                        <p class="text-sm text-gray-600">Accounting, secretarial, business management</p>
                    </div>

                    <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-[#5f849a]">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0">
                                <i data-lucide="building-2" class="w-5 h-5"></i>
                            </div>
                            <h4 class="font-bold text-gray-900">Architecture</h4>
                        </div>
                        <p class="text-sm text-gray-600">Building design, CAD, interior design</p>
                    </div>
                </div>
            </div>

            <!-- Benefits & Costs -->
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Benefits of Vocational Schools</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0 text-xs">
                                ✓
                            </div>
                            <span class="text-gray-700">Shorter duration (2 years vs 4 years university)</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0 text-xs">
                                ✓
                            </div>
                            <span class="text-gray-700">Lower tuition fees compared to universities</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0 text-xs">
                                ✓
                            </div>
                            <span class="text-gray-700">Hands-on practical training and internships</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0 text-xs">
                                ✓
                            </div>
                            <span class="text-gray-700">High job placement rate (90%+ employment)</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0 text-xs">
                                ✓
                            </div>
                            <span class="text-gray-700">Student visa with part-time work permission</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0 text-xs">
                                ✓
                            </div>
                            <span class="text-gray-700">Professional qualifications and certifications</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0 text-xs">
                                ✓
                            </div>
                            <span class="text-gray-700">Pathway to work visa after graduation</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-8 border-2 border-gray-100">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Costs & Requirements</h3>
                    <div class="space-y-4 mb-6">
                        <div>
                            <p class="font-semibold text-gray-900 mb-2">Annual Tuition</p>
                            <p class="text-2xl font-bold text-[#5f849a]">¥800,000 - ¥1,200,000</p>
                            <p class="text-sm text-gray-600">Varies by program and school</p>
                        </div>
                        <div class="border-t pt-4">
                            <p class="font-semibold text-gray-900 mb-2">Admission Requirements</p>
                            <ul class="text-sm text-gray-600 space-y-2">
                                <li>• 12 years of education completed</li>
                                <li>• JLPT N2 level (some N3 accepted)</li>
                                <li>• Interview or entrance exam</li>
                                <li>• Passion for the chosen field</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Scholarships Section -->
    <section id="scholarships" class="bg-white py-20">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">Scholarships for Nepalese Students</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    Multiple scholarship opportunities to help fund your education in Japan
                </p>
                <div class="w-24 h-1 bg-[#ea7a1c] mx-auto mt-6 rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-8 mb-12">
                <!-- MEXT Scholarship -->
                <div class="bg-gradient-to-br from-[#5f849a] to-[#4a6a7a] rounded-2xl p-8 text-white">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center">
                            <i data-lucide="award" class="w-8 h-8 text-white"></i>
                        </div>
                        <h3 class="text-2xl font-bold">MEXT Scholarship</h3>
                    </div>
                    <p class="mb-6 opacity-90">
                        Japanese Government (Monbukagakusho) Scholarship - the most prestigious and comprehensive 
                        scholarship for international students.
                    </p>
                    <div class="space-y-3 mb-6">
                        <div class="flex items-start gap-3">
                            <i data-lucide="check-circle" class="w-5 h-5 text-[#ea7a1c] flex-shrink-0"></i>
                            <span><strong>Coverage:</strong> Full tuition + living allowance (¥117,000-145,000/month)</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <i data-lucide="check-circle" class="w-5 h-5 text-[#ea7a1c] flex-shrink-0"></i>
                            <span><strong>Airfare:</strong> Round trip to Japan covered</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <i data-lucide="check-circle" class="w-5 h-5 text-[#ea7a1c] flex-shrink-0"></i>
                            <span><strong>Duration:</strong> Full program length</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <i data-lucide="check-circle" class="w-5 h-5 text-[#ea7a1c] flex-shrink-0"></i>
                            <span><strong>Categories:</strong> Undergraduate, Graduate, Research students</span>
                        </div>
                    </div>
                    <div class="bg-white/10 rounded-lg p-4">
                        <p class="text-sm font-semibold mb-2">Application Period:</p>
                        <p class="text-sm">Embassy recommendation: April-May annually</p>
                        <p class="text-sm">University recommendation: Check individual university deadlines</p>
                    </div>
                </div>

                <!-- Other Scholarships -->
                <div class="space-y-6">
                    <!-- JASSO Scholarship -->
                    <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-[#ea7a1c]">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-12 h-12 bg-[#ea7a1c]/10 rounded-full flex items-center justify-center">
                                <i data-lucide="book-open" class="w-6 h-6 text-[#ea7a1c]"></i>
                            </div>
                            <h4 class="text-xl font-bold text-gray-900">JASSO Scholarship</h4>
                        </div>
                        <p class="text-sm text-gray-600 mb-3">
                            Japan Student Services Organization provides monthly stipends for privately financed students.
                        </p>
                        <div class="bg-gray-50 rounded p-3 text-sm">
                            <p><strong>Amount:</strong> ¥48,000/month</p>
                            <p><strong>Duration:</strong> 1 year (renewable)</p>
                            <p><strong>Apply through:</strong> Your university in Japan</p>
                        </div>
                    </div>

                    <!-- University Scholarships -->
                    <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-[#5f849a]">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-12 h-12 bg-[#5f849a]/10 rounded-full flex items-center justify-center">
                                <i data-lucide="school" class="w-6 h-6 text-[#5f849a]"></i>
                            </div>
                            <h4 class="text-xl font-bold text-gray-900">University Scholarships</h4>
                        </div>
                        <p class="text-sm text-gray-600 mb-3">
                            Many universities offer their own merit-based and need-based scholarships.
                        </p>
                        <div class="bg-gray-50 rounded p-3 text-sm">
                            <p><strong>Types:</strong> Tuition reduction (30-100%), stipends</p>
                            <p><strong>Criteria:</strong> Academic excellence, financial need</p>
                            <p><strong>Apply:</strong> During university application process</p>
                        </div>
                    </div>

                    <!-- Private Foundations -->
                    <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-[#ea7a1c]">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-12 h-12 bg-[#ea7a1c]/10 rounded-full flex items-center justify-center">
                                <i data-lucide="building" class="w-6 h-6 text-[#ea7a1c]"></i>
                            </div>
                            <h4 class="text-xl font-bold text-gray-900">Private Foundations</h4>
                        </div>
                        <p class="text-sm text-gray-600 mb-3">
                            Various Japanese foundations offer scholarships to international students.
                        </p>
                        <div class="bg-gray-50 rounded p-3 text-sm">
                            <p><strong>Examples:</strong> Rotary, Lions Club, company scholarships</p>
                            <p><strong>Amount:</strong> Varies (¥50,000-150,000/month)</p>
                            <p><strong>Research:</strong> Available after arriving in Japan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison Table -->
    <section class="bg-gray-100 py-20">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">Study Options Comparison</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    Compare different study pathways to find the best fit for your goals
                </p>
                <div class="w-24 h-1 bg-[#ea7a1c] mx-auto mt-6 rounded-full"></div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full bg-white rounded-2xl shadow-lg overflow-hidden">
                    <thead class="bg-[#5f849a] text-white">
                        <tr>
                            <th class="px-6 py-4 text-left font-bold">Study Type</th>
                            <th class="px-6 py-4 text-left font-bold">Duration</th>
                            <th class="px-6 py-4 text-left font-bold">Language</th>
                            <th class="px-6 py-4 text-left font-bold">Annual Cost</th>
                            <th class="px-6 py-4 text-left font-bold">Part-time Work</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-semibold text-gray-900">Language School</td>
                            <td class="px-6 py-4 text-gray-600">6 months - 2 years</td>
                            <td class="px-6 py-4 text-gray-600">Any level</td>
                            <td class="px-6 py-4 text-gray-600">¥700,000-900,000</td>
                            <td class="px-6 py-4 text-gray-600">28 hrs/week</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-semibold text-gray-900">Vocational School</td>
                            <td class="px-6 py-4 text-gray-600">2-4 years</td>
                            <td class="px-6 py-4 text-gray-600">N2 required</td>
                            <td class="px-6 py-4 text-gray-600">¥800,000-1,200,000</td>
                            <td class="px-6 py-4 text-gray-600">28 hrs/week</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-semibold text-gray-900">Undergraduate</td>
                            <td class="px-6 py-4 text-gray-600">4 years</td>
                            <td class="px-6 py-4 text-gray-600">N2/N1 or TOEFL</td>
                            <td class="px-6 py-4 text-gray-600">¥535,800-1,500,000</td>
                            <td class="px-6 py-4 text-gray-600">28 hrs/week</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-semibold text-gray-900">Graduate (Master's)</td>
                            <td class="px-6 py-4 text-gray-600">2 years</td>
                            <td class="px-6 py-4 text-gray-600">N1 or TOEFL</td>
                            <td class="px-6 py-4 text-gray-600">¥535,800-1,500,000</td>
                            <td class="px-6 py-4 text-gray-600">28 hrs/week</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-semibold text-gray-900">Doctoral (PhD)</td>
                            <td class="px-6 py-4 text-gray-600">3-5 years</td>
                            <td class="px-6 py-4 text-gray-600">N1 or TOEFL</td>
                            <td class="px-6 py-4 text-gray-600">¥535,800-1,000,000</td>
                            <td class="px-6 py-4 text-gray-600">Research assistant</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="bg-gradient-to-br from-[#5f849a] to-[#4a6a7a] py-20">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-4">Why Choose Our Services?</h2>
                <p class="text-white text-lg max-w-2xl mx-auto opacity-90">
                    We provide complete support for Nepalese students aspiring to study in Japan
                </p>
                <div class="w-24 h-1 bg-[#ea7a1c] mx-auto mt-6 rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 text-center text-white">
                    <div class="w-14 h-14 bg-[#ea7a1c] rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="file-check" class="w-7 h-7"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Complete Guidance</h3>
                    <p class="text-sm opacity-90">From school selection to visa processing</p>
                </div>

                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 text-center text-white">
                    <div class="w-14 h-14 bg-[#ea7a1c] rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="book-open" class="w-7 h-7"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Japanese Classes</h3>
                    <p class="text-sm opacity-90">JLPT preparation and exam guidance</p>
                </div>

                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 text-center text-white">
                    <div class="w-14 h-14 bg-[#ea7a1c] rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="award" class="w-7 h-7"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Scholarship Support</h3>
                    <p class="text-sm opacity-90">MEXT and university scholarship applications</p>
                </div>

                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 text-center text-white">
                    <div class="w-14 h-14 bg-[#ea7a1c] rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="headphones" class="w-7 h-7"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Ongoing Support</h3>
                    <p class="text-sm opacity-90">Assistance even after reaching Japan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-white py-20">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-6">Ready to Start Your Study Journey in Japan?</h2>
            <p class="text-gray-600 text-lg mb-8">
                Contact our expert education consultants today for personalized guidance
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="https://wa.me/9768582326" class="bg-[#5f849a] text-white px-8 py-4 rounded-lg font-bold hover:bg-[#4a6a7a] transition inline-flex items-center justify-center gap-2">
                    <i data-lucide="message-circle" class="w-5 h-5"></i>
                    WhatsApp Consultation
                </a>
                <a href="tel:9768582326" class="bg-[#ea7a1c] text-white px-8 py-4 rounded-lg font-bold hover:bg-[#d66d15] transition inline-flex items-center justify-center gap-2">
                    <i data-lucide="phone" class="w-5 h-5"></i>
                    Call Us Now
                </a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
