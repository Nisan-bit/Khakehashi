<?php
/**
 * The header for our khakehashi theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package khakehashi
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/1x/no-bg-logo.png">
    <?php wp_head(); ?> 
</head>

<body <?php body_class('text-gray-800'); ?>>
<?php wp_body_open(); ?> 

<div id="page" class="site">
    
    <a class="skip-link screen-reader-text" href="#primary">
        <?php esc_html_e( 'Skip to content', 'khakehashi' ); ?>
    </a>

    <header id="masthead" class="site-header sticky top-0 z-50 bg-white/90 backdrop-blur border-b border-slate-200 shadow-sm">
        <div class="max-w-6xl mx-auto px-4 py-3 flex items-center justify-between">

            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="<?php echo esc_url( home_url('/') ); ?>" 
                   class="flex items-center gap-3 font-bold text-xl text-[#EC4724] hover:text-[#5F849A] transition-colors duration-300">

                    <?php if ( function_exists('the_custom_logo') && has_custom_logo() ) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/1x/no-bg-logo.png"
                             alt="<?php bloginfo('name'); ?>"
                             class="h-12 w-auto object-contain">
                        <span><?php bloginfo('name'); ?></span>
                    <?php endif; ?>
                </a>
            </div>

            

            <!-- Mobile Toggle -->
            <button id="menuBtn" 
                    class="md:hidden inline-flex items-center justify-center h-10 w-10 rounded-lg border">
                <span class="sr-only"><?php esc_html_e( 'Toggle Menu', 'khakehashi' ); ?></span>

                <svg id="menuIcon" xmlns="http://www.w3.org/2000/svg" 
                     class="h-6 w-6 text-slate-700 transition-transform duration-300"
                     fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" 
                          d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <!-- Desktop Menu -->
            <nav class="hidden md:flex gap-8 text-sm font-semibold">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'menu-1',
                    'container'      => false,
                    'menu_class'     => 'flex gap-8',
                    'depth'          => 1,
                    'fallback_cb'    => false,
                ) );
                ?>
            </nav>

        </div>

        <!-- Mobile Menu -->
        <div id="mobileNav" class="md:hidden max-h-0 overflow-hidden transition-all duration-500 ease-in-out bg-white border-t border-slate-200 shadow-sm">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'menu-1',
                'container'      => false,
                'menu_class'     => 'px-4 py-3 flex flex-col gap-2 text-sm font-semibold',
                'depth'          => 1,
                'fallback_cb'    => false,
            ) );
            ?>
        </div>

    
    </header>

    <main id="primary" class="site-main">
    <?php  ?>