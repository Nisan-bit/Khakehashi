<?php
/**
 * Template Name: Services Page
 */
get_header();
?>

<!-- Hero Section -->
<section class="relative bg-brandOrange text-white">
  
  <div class="relative max-w-6xl mx-auto px-4 py-32 text-center">
    <h1 class="text-4xl md:text-5xl font-extrabold">Our Services</h1>
    <p class="mt-4 text-lg md:text-xl opacity-90">End-to-end support for Nepali students studying in Japan.</p>
  </div>
</section>

<?php
$args = array(
    'post_type'      => 'services',
    'posts_per_page' => -1,
    'orderby'        => 'menu_order', // optional: order by menu if you want custom order
    'order'          => 'ASC',
);

$query = new WP_Query($args);
$index = 0;

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();

        // Alternate row layout
        $reverse = $index % 2 === 1 ? 'md:flex-row-reverse' : 'md:flex-row';

        // Get ACF fields
        $image    = get_field('services_image'); // must match your ACF field name exactly
        $heading  = get_field('service_heading'); 
        $paragraph = get_field('service_paragraph');
?>
<section class="max-w-6xl mx-auto px-4 py-20">
    <div class="flex flex-col <?php echo esc_attr($reverse); ?> items-center gap-12">

        <div class="w-full md:w-1/2">
            <?php if ($image): ?>
                <img src="<?php echo esc_url($image); ?>" class="rounded-3xl shadow-2xl w-full h-auto" alt="<?php echo esc_attr($heading ?: get_the_title()); ?>">
            <?php endif; ?>
        </div>

        <div class="w-full md:w-1/2">
            <h2 class="text-4xl font-extrabold leading-tight"><?php echo esc_html($heading ?: get_the_title()); ?></h2>
            <p class="mt-4 text-gray-600 text-lg"><?php echo esc_html($paragraph); ?></p>
            
        </div>

    </div>
</section>
<?php 
        $index++;
    endwhile;
    wp_reset_postdata();
endif;
?>



<?php get_footer(); ?>
