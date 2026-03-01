<?php
/**
 * The template for displaying the Work in Japan page.
 *
 * @package khakehashi
 */

get_header(); // Loads header.php
?>
  <!-- Lucide Icons CDN -->
<script src="https://unpkg.com/lucide@latest"></script>
    <!-- Introduction Section -->

<!-- Hero Section -->
<section class="relative bg-brandOrange text-white">
  <div class="relative max-w-6xl mx-auto px-4 py-32 text-center">
    <h1 class="text-4xl md:text-5xl font-extrabold">Why Work in Japan? </h1>
    <p class="mt-4 text-lg md:text-xl opacity-90">
      Japan offers excellent opportunities for Nepalese workers with competitive salaries, safe working environment, and career growth.
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


    <!-- SSW Visa Section -->
     
    <section id="ssw-visa" class="bg-gray-100 py-20">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">Specified Skilled Worker (SSW) Visa</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    The SSW visa program allows Nepalese workers to work in Japan across 12 designated sectors with a pathway to long-term residency
                </p>
                <div class="w-24 h-1 bg-[#ea7a1c] mx-auto mt-6 rounded-full"></div>
            </div>

            <!-- SSW Overview -->
            <div class="bg-white rounded-2xl shadow-lg p-8 mb-12">
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">What is SSW Visa?</h3>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            The Specified Skilled Worker (Tokutei Gino) visa was introduced in 2019 to address Japan's labor shortage. 
                            It allows foreign workers with specific skills to work in designated industries.
                        </p>
                        <div class="space-y-2">
                            <p class="text-gray-700"><strong>Duration:</strong> Up to 5 years (SSW-1), Indefinite (SSW-2)</p>
                            <p class="text-gray-700"><strong>Family:</strong> SSW-1 (No), SSW-2 (Yes)</p>
                            <p class="text-gray-700"><strong>Language:</strong> Japanese N4 level required</p>
                        </div>
                    </div>
                    <div>
                        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=800" 
                             alt="SSW Work" 
                             class="rounded-lg shadow-md w-full h-64 object-cover">
                    </div>
                </div>
            </div>

            <!-- 12 Sectors for SSW -->
            <div class="mb-12">
                <h3 class="text-3xl font-bold text-gray-900 mb-8 text-center">12 Open Sectors for Nepalese Workers</h3>
                
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Sector 1 -->
                    <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-[#5f849a]">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0">
                                <i data-lucide="building-2" class="w-5 h-5"></i>
                            </div>
                            <h4 class="font-bold text-gray-900">Construction</h4>
                        </div>
                        <p class="text-sm text-gray-600">Building construction, civil engineering, and infrastructure development</p>
                    </div>

                    <!-- Sector 2 -->
                    <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-[#ea7a1c]">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-[#ea7a1c] text-white rounded-full flex items-center justify-center flex-shrink-0">
                                <i data-lucide="wrench" class="w-5 h-5"></i>
                            </div>
                            <h4 class="font-bold text-gray-900">Shipbuilding</h4>
                        </div>
                        <p class="text-sm text-gray-600">Ship maintenance, welding, painting, and industrial machinery</p>
                    </div>

                    <!-- Sector 3 -->
                    <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-[#5f849a]">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0">
                                <i data-lucide="car" class="w-5 h-5"></i>
                            </div>
                            <h4 class="font-bold text-gray-900">Automobile Repair</h4>
                        </div>
                        <p class="text-sm text-gray-600">Vehicle maintenance, auto body repair, and inspection services</p>
                    </div>

                    <!-- Sector 4 -->
                    <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-[#ea7a1c]">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-[#ea7a1c] text-white rounded-full flex items-center justify-center flex-shrink-0">
                                <i data-lucide="plane" class="w-5 h-5"></i>
                            </div>
                            <h4 class="font-bold text-gray-900">Aviation</h4>
                        </div>
                        <p class="text-sm text-gray-600">Airport ground handling, ramp services, and cargo operations</p>
                    </div>

                    <!-- Sector 5 -->
                    <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-[#5f849a]">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0">
                                <i data-lucide="hotel" class="w-5 h-5"></i>
                            </div>
                            <h4 class="font-bold text-gray-900">Accommodation</h4>
                        </div>
                        <p class="text-sm text-gray-600">Hotel operations, front desk, housekeeping, and guest services</p>
                    </div>

                    <!-- Sector 6 -->
                    <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-[#ea7a1c]">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-[#ea7a1c] text-white rounded-full flex items-center justify-center flex-shrink-0">
                                <i data-lucide="utensils" class="w-5 h-5"></i>
                            </div>
                            <h4 class="font-bold text-gray-900">Food & Beverage</h4>
                        </div>
                        <p class="text-sm text-gray-600">Restaurant service, food preparation, and hospitality management</p>
                    </div>

                    <!-- Sector 7 -->
                    <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-[#5f849a]">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0">
                                <i data-lucide="heart-pulse" class="w-5 h-5"></i>
                            </div>
                            <h4 class="font-bold text-gray-900">Nursing Care</h4>
                        </div>
                        <p class="text-sm text-gray-600">Elderly care, nursing homes, and healthcare assistance</p>
                    </div>

                    <!-- Sector 8 -->
                    <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-[#ea7a1c]">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-[#ea7a1c] text-white rounded-full flex items-center justify-center flex-shrink-0">
                                <i data-lucide="factory" class="w-5 h-5"></i>
                            </div>
                            <h4 class="font-bold text-gray-900">Manufacturing</h4>
                        </div>
                        <p class="text-sm text-gray-600">Food processing, industrial machinery, electronics assembly</p>
                    </div>

                    <!-- Sector 9 -->
                    <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-[#5f849a]">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0">
                                <i data-lucide="forklift" class="w-5 h-5"></i>
                            </div>
                            <h4 class="font-bold text-gray-900">Industrial Machinery</h4>
                        </div>
                        <p class="text-sm text-gray-600">Machine operation, metal processing, and casting</p>
                    </div>

                    <!-- Sector 10 -->
                    <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-[#ea7a1c]">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-[#ea7a1c] text-white rounded-full flex items-center justify-center flex-shrink-0">
                                <i data-lucide="cpu" class="w-5 h-5"></i>
                            </div>
                            <h4 class="font-bold text-gray-900">Electric & Electronics</h4>
                        </div>
                        <p class="text-sm text-gray-600">Electronics manufacturing, semiconductor production</p>
                    </div>

                    <!-- Sector 11 -->
                    <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-[#5f849a]">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0">
                                <i data-lucide="recycle" class="w-5 h-5"></i>
                            </div>
                            <h4 class="font-bold text-gray-900">Building Cleaning</h4>
                        </div>
                        <p class="text-sm text-gray-600">Facility management, building maintenance, sanitation</p>
                    </div>

                    <!-- Sector 12 -->
                    <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-[#ea7a1c]">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-[#ea7a1c] text-white rounded-full flex items-center justify-center flex-shrink-0">
                                <i data-lucide="tree-deciduous" class="w-5 h-5"></i>
                            </div>
                            <h4 class="font-bold text-gray-900">Agriculture</h4>
                        </div>
                        <p class="text-sm text-gray-600">Crop cultivation, livestock farming, agricultural production</p>
                    </div>
                </div>
            </div>

            <!-- SSW Requirements & Process -->
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Requirements -->
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">SSW Visa Requirements</h3>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Age Requirement</h4>
                                <p class="text-sm text-gray-600">Must be 18 years or older</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Japanese Language</h4>
                                <p class="text-sm text-gray-600">JLPT N4 level or JFT certification</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Skills Test</h4>
                                <p class="text-sm text-gray-600">Pass sector-specific skills evaluation exam</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Job Offer</h4>
                                <p class="text-sm text-gray-600">Confirmed employment from Japanese company</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Health Certificate</h4>
                                <p class="text-sm text-gray-600">Medical examination and good health status</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Clean Record</h4>
                                <p class="text-sm text-gray-600">No criminal history or immigration violations</p>
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
                                <h4 class="font-semibold text-gray-900 mb-1">Language & Skills Test</h4>
                                <p class="text-sm text-gray-600">Complete JLPT N4 and sector-specific skills exam in Nepal</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-[#ea7a1c] text-white rounded-full flex items-center justify-center font-bold">
                                2
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Job Matching</h4>
                                <p class="text-sm text-gray-600">Find suitable employer through recruitment agencies</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-[#ea7a1c] text-white rounded-full flex items-center justify-center font-bold">
                                3
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Document Preparation</h4>
                                <p class="text-sm text-gray-600">Gather all required certificates, passport, and health documents</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-[#ea7a1c] text-white rounded-full flex items-center justify-center font-bold">
                                4
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">COE Application</h4>
                                <p class="text-sm text-gray-600">Employer applies for Certificate of Eligibility in Japan</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-[#ea7a1c] text-white rounded-full flex items-center justify-center font-bold">
                                5
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Visa Application</h4>
                                <p class="text-sm text-gray-600">Apply for SSW visa at Japanese Embassy in Nepal</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-[#ea7a1c] text-white rounded-full flex items-center justify-center font-bold">
                                6
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Departure to Japan</h4>
                                <p class="text-sm text-gray-600">Receive visa and travel to Japan to start work</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technical Intern Training (TITP) Section -->
    <section id="titp-visa" class="bg-white py-20">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">Technical Intern Training Program (TITP)</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    Learn specialized skills while working in Japan through the structured training program
                </p>
                <div class="w-24 h-1 bg-[#ea7a1c] mx-auto mt-6 rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-8 mb-12">
                <div>
                    <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=800" 
                         alt="Training" 
                         class="rounded-2xl shadow-xl w-full h-80 object-cover">
                </div>
                <div class="flex flex-col justify-center">
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">About TITP</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        The Technical Intern Training Program allows Nepalese workers to acquire technical skills and knowledge 
                        through on-the-job training at Japanese companies. The program has three stages.
                    </p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-[#5f849a] text-white rounded-full flex items-center justify-center text-sm font-bold">
                                i
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900">TITP 1: <span class="font-normal text-gray-600">1 year (Basic Training)</span></p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-[#ea7a1c] text-white rounded-full flex items-center justify-center text-sm font-bold">
                                ii
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900">TITP 2: <span class="font-normal text-gray-600">2 years (Advanced Training)</span></p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-[#5f849a] text-white rounded-full flex items-center justify-center text-sm font-bold">
                                iii
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900">TITP 3: <span class="font-normal text-gray-600">2 years (Expert Level)</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TITP Sectors -->
            <div class="mb-12">
                <h3 class="text-3xl font-bold text-gray-900 mb-8 text-center">Popular TITP Sectors for Nepalese</h3>
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-gray-50 rounded-xl p-6 text-center border-2 border-gray-200 hover:border-[#5f849a] transition">
                        <div class="w-12 h-12 bg-[#5f849a] text-white rounded-full flex items-center justify-center mx-auto mb-4">
                            <i data-lucide="hammer" class="w-6 h-6"></i>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-2">Construction</h4>
                        <p class="text-sm text-gray-600">Building, plastering, reinforcement</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-6 text-center border-2 border-gray-200 hover:border-[#ea7a1c] transition">
                        <div class="w-12 h-12 bg-[#ea7a1c] text-white rounded-full flex items-center justify-center mx-auto mb-4">
                            <i data-lucide="scissors" class="w-6 h-6"></i>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-2">Textile & Garment</h4>
                        <p class="text-sm text-gray-600">Sewing, weaving, dyeing</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-6 text-center border-2 border-gray-200 hover:border-[#5f849a] transition">
                        <div class="w-12 h-12 bg-[#5f849a] text-white rounded-full flex items-center justify-center mx-auto mb-4">
                            <i data-lucide="package" class="w-6 h-6"></i>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-2">Food Processing</h4>
                        <p class="text-sm text-gray-600">Packaging, canning, processing</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-6 text-center border-2 border-gray-200 hover:border-[#ea7a1c] transition">
                        <div class="w-12 h-12 bg-[#ea7a1c] text-white rounded-full flex items-center justify-center mx-auto mb-4">
                            <i data-lucide="cog" class="w-6 h-6"></i>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-2">Machine & Metal</h4>
                        <p class="text-sm text-gray-600">Machining, welding, metal forming</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-6 text-center border-2 border-gray-200 hover:border-[#5f849a] transition">
                        <div class="w-12 h-12 bg-[#5f849a] text-white rounded-full flex items-center justify-center mx-auto mb-4">
                            <i data-lucide="fish" class="w-6 h-6"></i>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-2">Fishery</h4>
                        <p class="text-sm text-gray-600">Fishing, aquaculture, processing</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-6 text-center border-2 border-gray-200 hover:border-[#ea7a1c] transition">
                        <div class="w-12 h-12 bg-[#ea7a1c] text-white rounded-full flex items-center justify-center mx-auto mb-4">
                            <i data-lucide="wheat" class="w-6 h-6"></i>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-2">Agriculture</h4>
                        <p class="text-sm text-gray-600">Crop cultivation, greenhouse work</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-6 text-center border-2 border-gray-200 hover:border-[#5f849a] transition">
                        <div class="w-12 h-12 bg-[#5f849a] text-white rounded-full flex items-center justify-center mx-auto mb-4">
                            <i data-lucide="paint-bucket" class="w-6 h-6"></i>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-2">Painting & Coating</h4>
                        <p class="text-sm text-gray-600">Industrial painting, coating work</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-6 text-center border-2 border-gray-200 hover:border-[#ea7a1c] transition">
                        <div class="w-12 h-12 bg-[#ea7a1c] text-white rounded-full flex items-center justify-center mx-auto mb-4">
                            <i data-lucide="box" class="w-6 h-6"></i>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-2">Logistics</h4>
                        <p class="text-sm text-gray-600">Warehousing, cargo handling</p>
                    </div>
                </div>
            </div>

            <!-- TITP Benefits & Requirements -->
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-gradient-to-br from-[#5f849a] to-[#4a6a7a] rounded-2xl p-8 text-white">
                    <h3 class="text-2xl font-bold mb-6">TITP Benefits</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3">
                            <i data-lucide="check-circle" class="w-6 h-6 text-[#ea7a1c] flex-shrink-0"></i>
                            <span>Learn specialized Japanese technology and skills</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i data-lucide="check-circle" class="w-6 h-6 text-[#ea7a1c] flex-shrink-0"></i>
                            <span>Earn competitive salary while training (¥150,000+)</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i data-lucide="check-circle" class="w-6 h-6 text-[#ea7a1c] flex-shrink-0"></i>
                            <span>Accommodation and living support provided</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i data-lucide="check-circle" class="w-6 h-6 text-[#ea7a1c] flex-shrink-0"></i>
                            <span>Health insurance and social security coverage</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i data-lucide="check-circle" class="w-6 h-6 text-[#ea7a1c] flex-shrink-0"></i>
                            <span>Pathway to SSW visa after completion</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i data-lucide="check-circle" class="w-6 h-6 text-[#ea7a1c] flex-shrink-0"></i>
                            <span>Internationally recognized certification</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-8 border-2 border-gray-100">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">TITP Requirements</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0 text-xs font-bold">
                                ✓
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900">Age: 18-35 years old</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0 text-xs font-bold">
                                ✓
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900">Education: Minimum SLC/SEE pass</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0 text-xs font-bold">
                                ✓
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900">Japanese: N5 level minimum</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0 text-xs font-bold">
                                ✓
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900">Good physical and mental health</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0 text-xs font-bold">
                                ✓
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900">No criminal record</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-[#5f849a] text-white rounded-full flex items-center justify-center flex-shrink-0 text-xs font-bold">
                                ✓
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900">Willingness to return to Nepal after training</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Other Visa Categories -->
    <section id="other-visas" class="bg-gray-100 py-20">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">Other Work Visa Options</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    Additional visa categories available for qualified Nepalese professionals
                </p>
                <div class="w-24 h-1 bg-[#ea7a1c] mx-auto mt-6 rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Engineer/Specialist Visa -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="h-2 bg-[#5f849a]"></div>
                    <div class="p-8">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-14 h-14 bg-[#5f849a]/10 rounded-full flex items-center justify-center">
                                <i data-lucide="briefcase" class="w-7 h-7 text-[#5f849a]"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Engineer/Specialist in Humanities</h3>
                        </div>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            For professionals with university degrees working in IT, engineering, marketing, design, 
                            international business, or other specialized fields.
                        </p>
                        <div class="space-y-2 mb-4">
                            <p class="text-sm text-gray-700"><strong>Duration:</strong> 1-5 years (renewable)</p>
                            <p class="text-sm text-gray-700"><strong>Family:</strong> Yes (dependent visa available)</p>
                            <p class="text-sm text-gray-700"><strong>Education:</strong> Bachelor's degree required</p>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="text-sm font-semibold text-gray-900 mb-2">Common Jobs:</p>
                            <p class="text-sm text-gray-600">Software developer, IT consultant, translator, international sales, designer, marketing specialist</p>
                        </div>
                    </div>
                </div>

                <!-- Skilled Labor Visa -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="h-2 bg-[#ea7a1c]"></div>
                    <div class="p-8">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-14 h-14 bg-[#ea7a1c]/10 rounded-full flex items-center justify-center">
                                <i data-lucide="wrench" class="w-7 h-7 text-[#ea7a1c]"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Skilled Labor Visa</h3>
                        </div>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            For workers with exceptional skills in specific trades that are recognized by the Japanese government. 
                            Requires certification or extensive experience.
                        </p>
                        <div class="space-y-2 mb-4">
                            <p class="text-sm text-gray-700"><strong>Duration:</strong> 1-5 years (renewable)</p>
                            <p class="text-sm text-gray-700"><strong>Family:</strong> Yes (dependent visa available)</p>
                            <p class="text-sm text-gray-700"><strong>Experience:</strong> 10+ years or certification</p>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="text-sm font-semibold text-gray-900 mb-2">Common Jobs:</p>
                            <p class="text-sm text-gray-600">Master chef (foreign cuisine), craftsman, sports instructor, sommelier, pilot</p>
                        </div>
                    </div>
                </div>

                <!-- Highly Skilled Professional -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="h-2 bg-[#5f849a]"></div>
                    <div class="p-8">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-14 h-14 bg-[#5f849a]/10 rounded-full flex items-center justify-center">
                                <i data-lucide="star" class="w-7 h-7 text-[#5f849a]"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Highly Skilled Professional (HSP)</h3>
                        </div>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            Points-based system for exceptionally qualified professionals. Offers the most benefits 
                            including path to permanent residency in as little as 1 year.
                        </p>
                        <div class="space-y-2 mb-4">
                            <p class="text-sm text-gray-700"><strong>Duration:</strong> 5 years (indefinite renewal)</p>
                            <p class="text-sm text-gray-700"><strong>Family:</strong> Yes + parents & household staff</p>
                            <p class="text-sm text-gray-700"><strong>Points:</strong> Minimum 70 points required</p>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="text-sm font-semibold text-gray-900 mb-2">Point Categories:</p>
                            <p class="text-sm text-gray-600">Academic background, professional career, annual salary, age, Japanese language ability, research achievements</p>
                        </div>
                    </div>
                </div>

                <!-- Business Manager Visa -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="h-2 bg-[#ea7a1c]"></div>
                    <div class="p-8">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-14 h-14 bg-[#ea7a1c]/10 rounded-full flex items-center justify-center">
                                <i data-lucide="building" class="w-7 h-7 text-[#ea7a1c]"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Business Manager Visa</h3>
                        </div>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            For entrepreneurs and business executives who want to establish or manage a business in Japan. 
                            Requires significant capital investment.
                        </p>
                        <div class="space-y-2 mb-4">
                            <p class="text-sm text-gray-700"><strong>Duration:</strong> 1-5 years (renewable)</p>
                            <p class="text-sm text-gray-700"><strong>Family:</strong> Yes (dependent visa available)</p>
                            <p class="text-sm text-gray-700"><strong>Investment:</strong> Minimum ¥5 million capital</p>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="text-sm font-semibold text-gray-900 mb-2">Requirements:</p>
                            <p class="text-sm text-gray-600">Business plan, registered office space, sufficient capital, 2+ full-time employees or equivalent operations</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison Table -->
    <section class="bg-white py-20">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">Visa Comparison</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    Compare different work visa options to find the best fit for you
                </p>
                <div class="w-24 h-1 bg-[#ea7a1c] mx-auto mt-6 rounded-full"></div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full bg-white rounded-2xl shadow-lg overflow-hidden">
                    <thead class="bg-[#5f849a] text-white">
                        <tr>
                            <th class="px-6 py-4 text-left font-bold">Visa Type</th>
                            <th class="px-6 py-4 text-left font-bold">Duration</th>
                            <th class="px-6 py-4 text-left font-bold">Family</th>
                            <th class="px-6 py-4 text-left font-bold">Requirements</th>
                            <th class="px-6 py-4 text-left font-bold">Salary Range</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-semibold text-gray-900">SSW (Tokutei Gino)</td>
                            <td class="px-6 py-4 text-gray-600">Up to 5 years</td>
                            <td class="px-6 py-4 text-gray-600">No (SSW-1)</td>
                            <td class="px-6 py-4 text-gray-600">JLPT N4 + Skills test</td>
                            <td class="px-6 py-4 text-gray-600">¥150,000-250,000</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-semibold text-gray-900">TITP (Technical Intern)</td>
                            <td class="px-6 py-4 text-gray-600">1-5 years</td>
                            <td class="px-6 py-4 text-gray-600">No</td>
                            <td class="px-6 py-4 text-gray-600">JLPT N5 minimum</td>
                            <td class="px-6 py-4 text-gray-600">¥150,000-180,000</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-semibold text-gray-900">Engineer/Specialist</td>
                            <td class="px-6 py-4 text-gray-600">1-5 years</td>
                            <td class="px-6 py-4 text-gray-600">Yes</td>
                            <td class="px-6 py-4 text-gray-600">University degree</td>
                            <td class="px-6 py-4 text-gray-600">¥200,000-400,000+</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-semibold text-gray-900">Skilled Labor</td>
                            <td class="px-6 py-4 text-gray-600">1-5 years</td>
                            <td class="px-6 py-4 text-gray-600">Yes</td>
                            <td class="px-6 py-4 text-gray-600">10+ years experience</td>
                            <td class="px-6 py-4 text-gray-600">¥200,000-350,000</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-semibold text-gray-900">HSP (Highly Skilled)</td>
                            <td class="px-6 py-4 text-gray-600">5 years</td>
                            <td class="px-6 py-4 text-gray-600">Yes + extended</td>
                            <td class="px-6 py-4 text-gray-600">70+ points</td>
                            <td class="px-6 py-4 text-gray-600">¥300,000-600,000+</td>
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
                    We provide complete support for Nepalese workers aspiring to work in Japan
                </p>
                <div class="w-24 h-1 bg-[#ea7a1c] mx-auto mt-6 rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 text-center text-white">
                    <div class="w-14 h-14 bg-[#ea7a1c] rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="file-check" class="w-7 h-7"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Complete Documentation</h3>
                    <p class="text-sm opacity-90">Full assistance with visa applications and paperwork</p>
                </div>

                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 text-center text-white">
                    <div class="w-14 h-14 bg-[#ea7a1c] rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="book-open" class="w-7 h-7"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Language Training</h3>
                    <p class="text-sm opacity-90">Japanese language classes and exam preparation</p>
                </div>

                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 text-center text-white">
                    <div class="w-14 h-14 bg-[#ea7a1c] rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="users" class="w-7 h-7"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Job Placement</h3>
                    <p class="text-sm opacity-90">Connection with verified Japanese employers</p>
                </div>

                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 text-center text-white">
                    <div class="w-14 h-14 bg-[#ea7a1c] rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="headphones" class="w-7 h-7"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Post-Arrival Support</h3>
                    <p class="text-sm opacity-90">Ongoing assistance after reaching Japan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-white py-20">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-6">Ready to Start Your Journey to Japan?</h2>
            <p class="text-gray-600 text-lg mb-8">
                Contact our expert consultants today for personalized guidance on work visa options
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


</main>

<?php get_footer(); ?>