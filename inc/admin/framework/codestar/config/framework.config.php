<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS 
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings      = array(
  'menu_parent' => 'themes.php',
  'menu_title' => 'Theme Options',
  'menu_type'  => 'add_submenu_page',
  'menu_slug'  => 'porto-options',

  'ajax_save'  => true,
); 
 
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();
// ------------------------------
// Global sections           -
// ------------------------------
$options[]   = array(
  'name'     => 'global',
  'title'    => 'Global',
  'icon'     => 'fa fa-globe fa-lg',
  'sections' => array(

    // sub section 1
    array(
      'name'     => 'general',
      'title'    => 'General',
      'icon'     => 'fa fa-anchor',
      'fields'   => array(

        array(
          'type'    => 'content',
          'content' => 'This section is empty, add some options...',
        ),

      )
    ),

    // -----------------------------
    // begin: upload options       -
    // -----------------------------
    array(
      'name'      => 'logo_sections',
      'title'     => 'Logo',
      'icon'      => 'fa fa-gear',
      'fields'    => array(
        array(
          'type'    => 'notice',
          'class'   => 'info',
          'content' => '<span style="font-weight:bold;font-size: 17px;color: #000">LOGO</span>',
        ),
        array(
          'id'        => 'logo',
          'type'      => 'image',
          'title'     => 'Primary Logo',
          'add_title' => 'Add Logo',
        ),

        array(
          'id'        => 'retina_logo',
          'type'      => 'image',
          'title'     => 'Retina Logo',
          'desc'      => 'optional',
          'label'     => 'Retina Logo should be 2x larger than Custom Logo',
          'add_title' => 'Add Logo',
        ),
        array(
          'id'        => 'sticky_logo',
          'type'      => 'image',
          'title'     => 'Sticky Header | Logo',
          'desc'      => 'optional',
          'label'     => 'Use if you want different logo for Sticky Header',
          'add_title' => 'Add Logo',
        ),
        array(
          'id'    => 'text_logo',
          'type'  => 'text',
          'title' => 'Text Logo',
          'help'  => 'Use text instead of graphic logo.',
        ),

         array(
          'type'    => 'notice',
          'class'   => 'info',
          'content' => '<span style="font-weight:bold;font-size: 17px;color: #000">Logo Shape</span>',
        ),

         array(
          'id'      => 'logo_width',
          'type'    => 'text',
          'title'   => 'Logo Width',
          'default' => portoLogoShapeGeneateDefault(cs_get_option('header_style'),"width"),
          'attributes' => array(
            'style'    => 'width: 105px; height: 30px; border-color: #93C054;'
          ),
          'after'   => '<i> px</i>',
          'default_priority' => true, 
        ),
         array(
          'id'      => 'logo_height',
          'type'    => 'text',
          'title'   => 'Logo Height',
          'default' => portoLogoShapeGeneateDefault(cs_get_option('header_style'),"height"),
          'attributes' => array(
            'style'    => 'width: 105px; height: 30px; border-color: #93C054;'
          ),
          'after'   => '<i> px</i>',
          'default_priority' => true, 
        ),
         array(
          'type'    => 'notice',
          'class'   => 'info',
          'content' => '<span style="font-weight:bold;font-size: 17px;color: #000">Logo Shape When Sticky</span>',
        ),
         array(
          'id'      => 'logo_width_sticky',
          'type'    => 'text',
          'title'   => 'Sticky Logo Width',
          'default' => portoLogoShapeGeneateDefault(cs_get_option('header_style'),"data-sticky-width"),
          'attributes' => array(
            'style'    => 'width: 105px; height: 30px; border-color: #93C054;'
          ),
          'after'   => '<i> px</i>',
          'default_priority' => true, 
        ),
         array(
          'id'      => 'logo_height_sticky',
          'type'    => 'text',
          'title'   => 'Sticky Logo Height',
          'default' => portoLogoShapeGeneateDefault(cs_get_option('header_style'),"data-sticky-height"),
          'attributes' => array(
            'style'    => 'width: 105px; height: 30px; border-color: #93C054;'
          ),
          'after'   => '<i> px</i>',
          'default_priority' => true, 
        ),
         array(
          'id'      => 'logo_top_sticky',
          'type'    => 'text',
          'title'   => 'Sticky Logo Top',
          'default' => portoLogoShapeGeneateDefault(cs_get_option('header_style'),"data-sticky-top"),
          'attributes' => array(
            'style'    => 'width: 105px; height: 30px; border-color: #93C054;'
          ),
          'after'   => '<i> px</i>',
          'default_priority' => true, 
        ),
        array(
          'id'      => 'logo_options_home_page',
          'type'    => 'checkbox',
          'title'   => 'Options',
          'label'   => 'Link to Homepage',
          'default' => true,
        ),
      ),
    ), // end: upload options

        // -----------------------------
    // begin: upload options       -
    // -----------------------------
    array(
      'name'      => 'advanced',
      'title'     => 'Advanced',
      'icon'      => 'fa fa-tasks',
      'fields'    => array(

        
      ),
    ), // end: upload options

 
  ),
);
// ------------------------------
// Header sections           -
// ------------------------------
$options[]   = array(
  'name'     => 'header-sections',
  'title'    => 'Header Sections',
  'icon'     => 'fa fa-plus-circle',
  'sections' => array(

    // sub section 1
   array(
      'name'      => 'header-types',
      'title'     => 'Header Layout',
      'icon'      => 'fa fa-check',
      'fields'    => array(
        
        array(
          'type'    => 'subheading',
          'content' => 'Layout',
        ),
        
        array(
          'id'           => 'header_style',
          'type'         => 'image_select',
          'title'        => 'Style',
          'options'      => portoHeaderLayouts(),
          'radio'        => true,
          'default'      => 'Default',
          'image_label'  => true
        ),

      )
    ),
   array( 
      'name'      => 'Menu',
      'title'     => 'Menu',
      'icon'      => 'fa fa-check',
      'fields'    => array(
        
        array(
          'type'    => 'notice',
          'class'   => 'info',
          'content' => '<span style="font-weight:bold;font-size: 17px;color: #000">Menu Style</span>',
        ),
        
        array( 
          'id'           => 'menu_style',
          'type'         => 'select',
          'title'        => 'Style',
          'options'      => array(
                 'header-nav-stripe' => "Navigation Stripe",
                 'header-nav-top-line'=> 'Navigation Topline'
            ) ,
          'class'        => 'chosen',
          'default'      => cs_get_option('header_style') == "DarkDropdown" ? "header-nav-top-line" : 'header-nav-stripe',
          'default_priority'  => true
        ),

        array(
          'type'    => 'notice',
          'class'   => 'info',
          'content' => '<span style="font-weight:bold;font-size: 17px;color: #000">Transparent Style</span>',
        ),
         
        array( 
          'id'           => 'dropdown_style',
          'type'         => 'select',
          'title'        => 'Dropdown Style',
          'options'      => array(
                 'default'      => "Default",
                 'dark-dropdown'=> 'Dark Dropdown' 
            ) ,
          'class'        => 'chosen',
          'default'      => "default",
          'default_priority'  => true
        ),

      )
    ),
   // Topbar Sections
   array(
      'name'      => 'Topbar', 
      'title'     => 'Topbar',
      'icon'      => 'fa fa-check',
      'fields'    => array(        

        array(
          'type'    => 'notice',
          'class'   => 'info',
          'content' => '<span style="font-weight:bold;font-size: 17px;color: #000">Layout</span>',
        ),        
        array(
          'id'           => 'topbar_style',
          'type'         => 'select',
          'title'        => 'TopBar Layout',
          'options'      => array(
              'topbar_1' => 'Topbar-1 || (Right Info with a page link)',
              'topbar_2' => 'Topbar-2 || (Right Info with a Social link)',
              'topbar_3' => 'Topbar-3 || (Right Info with a Search)',
              'topbar_4' => 'Topbar-4 || (Left Info with a Right Social)',
              'topbar_5' => 'Topbar-5 || (Left Big Slogan with a Right Location Info)',
              'topbar_6' => 'Topbar-6 || (Left Info with a Right Search)',
            ),
          'default'      => portoTopbarGenerateDefault(cs_get_option('header_style')),
          'default_priority' => true,
          'class'        => 'chosen' 
        ),
         array(
          'type'    => 'notice',
          'class'   => 'info',
          'content' => '<span style="font-weight:bold;font-size: 17px;color: #000">OPTIONS</span>',
        ),        
        array(
          'id'    => 'topbar_key',
          'type'  => 'switcher',
          'title' => 'Disable TopBar',
          'label' => 'If you Disable Topbar then Topbar should desappear from your header',
          'default' => true,
        ),
        array(
          'id'    => 'topbar_slogan',
          'type'  => 'text',
          'title' => 'TopBar Slogan',
          'desc'  => 'Only Available On Topbar 4 ',
          'attributes' => array(
            'style'    => 'width: 175px; height: 35px; border-color: #93C054;'
          ),
          'dependency' => array( 'topbar_key', '==', true ),
        ),

        array(
          'id'    => 'topbar_phone',
          'type'  => 'text',
          'title' => 'TopBar Phone Number',
          'desc'  => 'Available on all other Topbar Without topbar 5',
          'attributes' => array(
            'style'    => 'width: 175px; height: 35px; border-color: #93C054;'
          ),
          'dependency'=> array( 'topbar_key', '==', true ),
        ),

        array(
          'id'    => 'topbar_email',
          'type'  => 'text',
          'title' => 'TopBar Email',
          'desc'  => 'Only Available On Topbar 4 and Topbar 6',
          'attributes' => array(
            'style'    => 'width: 175px; height: 35px; border-color: #93C054;'
          ),
          'dependency'=> array( 'topbar_key', '==', true ),
        ),

        array(
          'id'    => 'topbar_slogan_big',
          'type'  => 'text',
          'title' => 'TopBar Big Slogan',
          'desc'  => 'Only Available On Topbar 5',
          'attributes' => array(
            'style'    => 'width: 200px; height: 40px; border-color: #93C054;'
          ),
          'dependency' => array( 'topbar_key', '==', true ),
        ),

        array(
          'id'    => 'topbar_location',
          'type'  => 'text',
          'title' => 'TopBar Location',
          'desc'  => 'Only Available On Topbar 5',
          'attributes' => array(
            'style'    => 'width: 200px; height: 40px; border-color: #93C054;'
          ),
          'dependency'=> array( 'topbar_key', '==', true ),
        ),

        array(
          'id'             => 'topbar_page',
          'type'           => 'select',
          'title'          => 'Select A page',
          'desc'           => '<p>Select a important menu (like "Login" /  "SignUp" </p>',
          'options'        => 'pages',
          'default_option' => 'Select a page',
          'class'          => 'chosen',
          'dependency'=> array( 'topbar_key', '==', true ),
        ),

      )
    ),
    array(
      'name'      => 'Search',
      'title'     => 'Search',
      'icon'      => 'fa fa-check',
      'fields'    => array(
        
        array(
          'id'    => 'search_key',
          'type'  => 'switcher',
          'title' => 'Enable Search On Header',
          'help'  => 'If you want to disable Search then disable it',
          'label' => 'Disable if you want',
          'default' => true,
        ),

        array(
          'id'      => 'search_option',
          'type'    => 'radio',
          'title'   => 'Search Type',
          'options' => array(
            'regular'       => 'Regular Search',
            'categories'    => 'Categories Search',
            'custom_search' => 'Google Custom Search'
          ),
          'default' => 'regular',
          'dependency'   => array( 'search_key', '==', true ),
        ),

        array(
          'id'           => 'regular_search',
          'type'         => 'image_select',
          'options'      => array(
            'Regular'    => ADMIN_URI . '/layout/search/regular.jpg',
          ),
          'radio'        => true,
          'dependency'   => array( 'search_option_regular', '==', true ),
        ),

        array(
          'id'           => 'categories',
          'type'         => 'image_select',
          'options'      => array(
            'categories'    => ADMIN_URI . '/layout/search/categories.jpg',
          ),
          'radio'        => true,
          'dependency'   => array( 'search_option_categories', '==', true ),
        ),

        array(
          'id'           => 'regular_search',
          'type'         => 'image_select',
          'options'      => array(
            'custom_search'    => ADMIN_URI . '/layout/search/custom_search.png',
          ),
          'radio'        => true,
          'dependency'   => array( 'search_option_custom_search', '==', true ),
        ),

      )
    ),
   array(
      'name'      => 'subheader',
      'title'     => 'Sub Header And Top Bar',
      'icon'      => 'fa fa-check',
      'fields'    => array(
        

        array(
          'type'    => 'subheading',
          'content' => 'Top Bar Additional Menu',
        ),
        
        array(
          'id'    => 'toprow_menu_key',
          'type'  => 'switcher',
          'title' => 'Enable Top Bar Additional Menu',
          'help'  => 'If you want to disable Top Bar Additional Menu then disable it',
          'label' => 'Disable if you want',
          'default' => true,
        ),

        array(
          'id'             => 'toprow_menu_one',
          'type'           => 'select',
          'title'          => 'Select First Menus',
          'desc'          => '<p>You can select your most important menu (like "about us" /  "contact us" </p>',
          'options'        => 'pages',
          'default_option' => 'Select a page',
          'dependency'     => array( 'toprow_menu_key', '==', true ),
        ),

        array(
          'id'             => 'toprow_menu_two',
          'type'           => 'select',
          'title'          => 'Select Second Menus',
          'desc'          => '<p>You can select your most important menu (like "about us" /  "contact us" </p>',
          'options'        => 'pages',
          'default_option' => 'Select a page',
          'dependency'     => array( 'toprow_menu_key', '==', true ),
        ),

        array(
          'id'    => 'toprow_phone_number',
          'type'  => 'text',
          'title' => 'Top Bar Phone Number',
          'desc'  => 'put your phone number here',
          'dependency'     => array( 'toprow_menu_key', '==', true ),
        ),

      )
    ),

   array(
      'name'      => 'Extras',
      'title'     => 'Extras',
      'icon'      => 'fa fa-check',
      'fields'    => array(
        
        array(
          'type'    => 'subheading',
          'content' => 'LogIn / SignUp',
        ),
         
        array(
          'id'    => 'login_signup_key',
          'type'  => 'switcher',
          'title' => 'Enable Login / SignUp On Header',
          'help'  => 'If you want to disable Login / SignUp then disable it',
          'label' => 'Disable if you want',
          'default' => true,
        ),

        array(
          'type'    => 'notice',
          'class'   => 'info',
          'content' => '<span style="font-weight:bold;font-size: 17px;color: #000">WPML</span>',
        ),
        
        array(
          'id'    => 'wpml_key',
          'type'  => 'switcher',
          'title' => 'Language Switcher',
          'help'  => '',
          'label' => '',
          'default' => true,
        ),

         array(
          'type'    => 'notice',
          'class'   => 'info',
          'content' => '<span style="font-weight:bold;font-size: 17px;color: #000">SOCIAL MEDIA</span>',
        ),
        
        array(
          'id'    => 'social_key',
          'type'  => 'switcher',
          'title' => 'Enable Social Media On Header',
          'help'  => 'If you want to disable social media then disable it',
          'label' => 'Disable if you want',
          'default' => true,
        ),

        array(
          'id'      => 'social_new_tab',
          'type'    => 'switcher',
          'title'   => 'Open Social profile links in a new Window ',
          'default' => true,
          'label' => 'Disable if you want',
          'help'  => 'If it\'s enabled, Social profile open in a new tab or window ',
          'dependency'   => array( 'social_key', '==', true ),
        ),

      )
    ),

  ),
);
// ------------------------------
// Social sections           -
// ------------------------------
$options[]   = array(
  'name'     => 'breadcrumbs',
  'title'    => 'Page Header',
  'icon'     => 'fa fa-bars',
  'sections' => array(

    // sub section 1
    array(
      'name'     => 'page_header',
      'title'    => 'Page Header',
      'icon'     => 'fa fa-minus',
      'fields'   => array(
          array(
            'id'           => 'page_header_style',
            'type'         => 'image_select',
            'title'        => 'Style',
            'options'      => portoBreadcrumbsLayout(),
            'radio'        => true,
            'default'      => 'Default',
            'image_label'  => true
          ),
        
        

      ),
    ),

  ),
);

// ------------------------------
// Sidebars sections           -
// ------------------------------
$options[]   = array(
  'name'     => 'sidebars',
  'title'    => 'Sidebars',
  'icon'     => 'fa fa-bars',
  'sections' => array(

    // sub section 1
    array(
      'name'     => 'general_sidebars',
      'title'    => 'General',
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        

      ),
    ),

  ),
);

// ------------------------------
// Pages sections           -
// ------------------------------
$options[]   = array(
  'name'     => 'pages',
  'title'    => 'Pages',
  'icon'     => 'fa fa-bars',
  'sections' => array(

    // sub section 1
    array(
      'name'     => 'general_pages',
      'title'    => 'General',
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        

      ),
    ),

  ),
);

// ------------------------------
// Blog And Portfolio sections           -
// ------------------------------
$options[]   = array(
  'name'     => 'blog_and_portfolio',
  'title'    => 'Blog And Portfolio',
  'icon'     => 'fa fa-bars',
  'sections' => array(

    // sub section 1
    array(
      'name'     => 'b_and_p_general',
      'title'    => 'General',
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        array(
          'type'    => 'content',
          'content' => 'This section is empty, add some options...',
        ),

        array(
          'id'    => 'all_pages_pagination_key',
          'type'  => 'switcher',
          'title' => 'All Pages Pagination',
          'label'  => 'If You want Al pages link on Pagination',
          'default'=> false
        ),

        array(
          'id'    => 'navigation_arrows_key',
          'type'  => 'switcher',
          'title' => 'Navigation Arrows',
          'label'  => 'Arrows On Pagination ',
          'default'=> true
        ),
        array(
          'id'                 => 'title_heading',
          'type'               => 'select',
          'title'              => 'Title Heading',
          'options'            => array(
            'h1'               => 'h1',
            'h2'               => 'h2',
            'h3'               => 'h3',
            'h4'               => 'h4',
            'h5'               => 'h5',
            'h6'               => 'h6',
          ),
          'class'              => 'chosen',
          'default'     => 'h2',
        ),

      )
    ),

     array(
      'name'     => 'blog',
      'title'    => 'Blog',
      'icon'     => 'fa fa-minus',
      'fields'   => array(

       array(
          'type'    => 'heading',
          'content' => 'Layout',
        ),
       array(
          'id'                 => 'posts_per_page',
          'type'               => 'select',
          'title'              => 'Posts Per Page',
          'options'            => postsPerPageGenerate(),
          'class'              => 'chosen',
          'default'            => 6,
        ),
       array( 
          'id'           => 'post_layout',
          'title'        => "Post Layout",
          'type'         => 'image_select',
          'description'  => 'Layout for Blog Page',
          'options'      => array(
            'large'    => ADMIN_URI . '/layout/post_layout/full_width.png',
            'medium'    => ADMIN_URI . '/layout/post_layout/medium.png',
            'timeline'    => ADMIN_URI . '/layout/post_layout/timeline.png',
          ),
          'radio'        => true,
          'default'      => 'medium'
          
        ),
       array( 
          'id'           => 'page_layout',
          'title'        => "Page Layout",
          'type'         => 'image_select',
          'description'  => 'Layout for Blog Page',
          'options'      => array(
            'full_width'    => ADMIN_URI . '/layout/page_layout/full_width.png',
            'right_sidebar'    => ADMIN_URI . '/layout/page_layout/right_sidebar.png',
            'left_sidebar'    => ADMIN_URI . '/layout/page_layout/left_sidebar.png',
            'both_sidebar'    => ADMIN_URI . '/layout/page_layout/both_sidebar.png',
          ),
          'radio'        => true,
          'default'     => 'right_sidebar'          
        ),
       array(
          'id'                 => 'left_sidebar',
          'type'               => 'select',
          'title'              => 'Left Sidebar',
          'options'            => get_registerd_sidebars(),
          'class'              => 'chosen',
          'default_option'     => 'Select your car',
        ),
       array(
          'id'                 => 'right_sidebar',
          'type'               => 'select',
          'title'              => 'Right Sidebar',
          'options'            => array(
            'bmw'              => 'BMW',
            'mercedes'         => 'Mercedes',
            'jaguar'           => 'Jaguar',
            'opel'             => 'Opel',
            'golf'             => 'Golf',
            'ferrari'          => 'Ferrari',
            'subaru'           => 'Subaru',
            'seat'             => 'Seat',
          ),
          'class'              => 'chosen',
          'default_option'     => 'Select your car',
        ),
       array(
          'id'    => 'sticky_sidebar_key',
          'type'  => 'switcher',
          'title' => 'Sticky Sidebar',
          'default' => false
        ),
       array(
          'type'    => 'heading',
          'content' => 'Options',
        ),
       array(
          'id'                 => 'excerpt_length',
          'type'               => 'select',
          'title'              => 'Excerpt Length',
          'label'              => 'Number of words',
          'options'            => excerptLengthGenerator(),
          'class'              => 'chosen',
          'default'            => '26',
        ),
       array(
          'id'     => 'load_more_key',
          'type'   => 'switcher',
          'title'  => 'Load More Button',
          'label'=> 'Show Ajax Load More button',
          'default'=> false
        ),
       array(
          'id'     => 'post_meta_key',
          'type'   => 'switcher',
          'title'  => 'Post Meta',
          'label'  => 'Show Author, Date & Categories',
          'default'=> true
        ),

       array(
          'type'    => 'heading',
          'content' => 'Single Post',
        ),
       array(
          'id'     => 'single_post_title_key',
          'type'   => 'switcher',
          'title'  => 'Title',
          'label'  => 'Show Post Title',
          'default'=> true
        ),
       array( 
          'id'           => 'single_page_layout',
          'title'        => "Single Page Layout",
          'type'         => 'image_select',
          'options'      => array(
            'full_width'    => ADMIN_URI . '/layout/page_layout/full_width.png',
            'right_sidebar'    => ADMIN_URI . '/layout/page_layout/right_sidebar.png',
            'left_sidebar'    => ADMIN_URI . '/layout/page_layout/left_sidebar.png',
            'both_sidebar'    => ADMIN_URI . '/layout/page_layout/both_sidebar.png',
          ),
          'radio'        => true,          
        ),
       array(
          'id'     => 'comments_key',
          'type'   => 'switcher',
          'title'  => 'Post Comments',
          'label'  => 'Show Comments',
          'default'=> true
        ),
      )
    ),

  ),
);
// ------------------------------
// Footer sections           -
// ------------------------------
$options[]   = array(
  'name'     => 'footer-sections',
  'title'    => 'Footer Sections',
  'icon'     => 'fa fa-plus-circle',
  'sections' => array(

    // sub section 1
   array(
      'name'      => 'footer-options',
      'title'     => 'Footer',
      'icon'      => 'fa fa-check',
      'fields'    => array(
        
        array(
          'type'    => 'subheading',
          'content' => 'Layout',
        ),
        
        array(
          'id'           => 'footer_style',
          'type'         => 'image_select',
          'title'        => 'Style',
          'options'      => portoFooterLayouts(),
          'radio'        => true,
          'default'      => 'FooterDefault',
          'image_label'  => true
        ),

      )
    ),
   array(
      'name'      => 'footerExtra-options',
      'title'     => 'Extras',
      'icon'      => 'fa fa-check',
      'fields'    => array(
        
        array(
          'id'        => 'footer_logo',
          'type'      => 'image',
          'title'     => 'Footer Logo',
          'desc'      => 'Footer Logo goes here.',
          'add_title' => 'Add Footer Logo',
        ),
      )
    )
  )
);

// ------------------------------
// Color Section       -
// ------------------------------
$options[]   = array(
  'name'     => 'color-sections',
  'title'    => 'Color',
  'icon'     => 'fa fa-plus-circle',
  'sections' => array(

    // sub section 1
   array(
      'name'      => 'color-general',
      'title'     => 'General',
      'icon'      => 'fa fa-check',
      'fields'    => array(
        
        array(
          'type'    => 'subheading',
          'content' => 'Skin',
        ), 
        
        array(
          'id'           => 'skin',
          'type'         => 'image_select',
          'title'        => 'Skin',
          'options'      => portoSkinLayoutGenerate(),
          'radio'        => true,
          'default'      => 'default', 
        ), 

         array(
          'type'    => 'notice', 
          'class'   => 'info',
          'content' => '<span style="font-weight:bold;font-size: 17px;color: #000">Primay Color</span>',
        ),
        array(
          'id'      => 'color_primary_default', 
          'type'    => 'color_picker',
          'title'   => 'Theme Primary Color',
          'default' => '#0088cc',
          'default_priority' => true,  
          'dependency' => array("skin_default","==",true),
        ),
        array(
          'id'      => 'color_primary_skin2',
          'type'    => 'color_picker',
          'title'   => 'Theme Primary Color',
          'default' => '#89b837',  
          'default_priority' => true, 
          'dependency' => array("skin_skin2","==",true),
        ),
      )  
    ),
     // sub section 1
   array(
      'name'      => 'color-header',
      'title'     => 'Header',
      'icon'      => 'fa fa-check',
      'fields'    => array( 
         array(
          'type'    => 'notice', 
          'class'   => 'info',
          'content' => '<span style="font-weight:bold;font-size: 17px;color: #000">Topbar</span>',
        ),
        array(
          'id'      => 'color_topbar_bg', 
          'type'    => 'color_picker', 
          'title'   => 'Topbar Background Color',
          'default' => "dfd",
          'default_priority' => true,
        ),
      ) 
    ),

  )
); 
// ------------------------------
// Social sections           -
// ------------------------------
$options[]   = array(
  'name'     => 'social',
  'title'    => 'Social',
  'icon'     => 'fa fa-bars',
  'sections' => array(

    // sub section 1
    array(
      'name'     => 'general_social',
      'title'    => 'General',
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        array(
          'id'    => 'skype',
          'type'  => 'text',
          'title' => 'Skype',
          'after' => '<p>You can use callto: or skype: prefix</p> ',
          'desc'  => 'Type your Skype login here',
        ),

        array(
          'id'    => 'facebook',
          'type'  => 'text',
          'title' => 'Facebook',
          'after' => '<p>For Example : http://www.facebook.com/nesarjony</p> ',
          'desc'  => 'Type your Facebook link here',
        ),      

        array(
          'id'    => 'twitter',
          'type'  => 'text',
          'title' => 'Twitter',
          'desc'  => 'Type your Twitter link here',
        ),

         array(
          'id'    => 'linkedin',
          'type'  => 'text',
          'title' => 'Linkedin',
          'desc'  => 'Type your Linkedin link here',
        ),

        
        array(
          'id'    => 'googleplus',
          'type'  => 'text',
          'title' => 'Google +',
          'desc'  => 'Type your Google + link here',
        ),

        array(
          'id'    => 'vimeo',
          'type'  => 'text',
          'title' => 'Vimeo',
          'desc'  => 'Type your Vimeo link here',
        ),

        array(
          'id'    => 'youtube',
          'type'  => 'text',
          'title' => 'YouTube',
          'desc'  => 'Type your YouTube link here',
        ),

        array(
          'id'    => 'instagram',
          'type'  => 'text',
          'title' => 'Instagram',
          'desc'  => 'Type your Instagram link here',
        ),

        array(
          'id'    => 'behance',
          'type'  => 'text',
          'title' => 'Behance',
          'desc'  => 'Type your Behance link here',
        ),

        array(
          'id'    => 'github',
          'type'  => 'text',
          'title' => 'Github',
          'desc'  => 'Type your Github link here',
        ),

        array(
          'id'    => 'yahoo',
          'type'  => 'text',
          'title' => 'Yahoo',
          'desc'  => 'Type your Behance link here',
        ),

        array(
          'id'    => 'wordpress',
          'type'  => 'text',
          'title' => 'Wordpress',
          'desc'  => 'Type your Wordpress link here',
        ),       

        array(
          'id'    => 'tumblr',
          'type'  => 'text',
          'title' => 'Tumblr',
          'desc'  => 'Type your Tumblr link here',
        ),

        array(
          'id'    => 'flickr',
          'type'  => 'text',
          'title' => 'Flickr',
          'desc'  => 'Type your flickr link here',
        ),

        array(
          'id'    => 'vkontakte',
          'type'  => 'text',
          'title' => 'VKontakte',
          'desc'  => 'Type your VKontakte link here',
        ),

        array(
          'id'    => 'viadeo',
          'type'  => 'text',
          'title' => 'Viadeo',
          'desc'  => 'Type your Viadeo link here',
        ),

        array(
          'id'    => 'xing',
          'type'  => 'text',
          'title' => 'Xing',
          'desc'  => 'Type your Xing link here',
        ),

      ),
    ),

  ),
);

// ------------------------------
// accordion sections           -
// ------------------------------
$options[]   = array(
  'name'     => 'accordion_section',
  'title'    => 'Accordion Sections',
  'icon'     => 'fa fa-bars',
  'sections' => array(

    // sub section 1
    array(
      'name'     => 'sub_section_1',
      'title'    => 'Sub Sections 1',
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        array(
          'type'    => 'content',
          'content' => 'This section is empty, add some options...',
        ),

      )
    ),

  ),
);
// ------------------------------
// Codestar Framework -
// ------------------------------
$options[]   = array(
  'name'     => '',
  'title'    => 'Codestar',
  'icon'     => 'fa fa-plus-circle',
  'sections' => array(

    // -----------------------------
    // begin: text options         -
    // -----------------------------
    array(
      'name'      => 'text_options',
      'title'     => 'Text',
      'icon'      => 'fa fa-check',

      // begin: fields
      'fields'    => array(

        // begin: a field
        array(
          'id'    => 'unique_text_1',
          'type'  => 'text',
          'title' => 'Text Field',
        ),
        // end: a field

        array(
          'id'    => 'unique_text_2',
          'type'  => 'text',
          'title' => 'Text Field with Description',
          'desc'  => 'Lets write some description for this text field.',
        ),

        array(
          'id'    => 'unique_text_3',
          'type'  => 'text',
          'title' => 'Text Field with Help',
          'help'  => 'I am a Tooltip helper. This field important for something.',
        ),

        array(
          'id'      => 'unique_text_4',
          'type'    => 'text',
          'title'   => 'Text Field with Default',
          'default' => 'some default value bla bla bla',
        ),

        array(
          'id'            => 'unique_text_5',
          'type'          => 'text',
          'title'         => 'Text Field with Placeholder',
          'attributes'    => array(
            'placeholder' => 'do stuff...'
          )
        ),

        array(
          'id'    => 'unique_text_6',
          'type'  => 'text',
          'title' => 'Text Field with After-text',
          'after' => ' <i class="cs-text-muted">( this option is optional )</i>',
        ),

        array(
          'id'     => 'unique_text_7',
          'type'   => 'text',
          'title'  => 'Text Field with Before-text',
          'before' => '<i class="cs-text-muted">( important )</i> ',
        ),

        array(
          'id'    => 'unique_text_8',
          'type'  => 'text',
          'title' => 'Text Field with After-block-text',
          'after' => '<p class="cs-text-info">Information: There is some description for option.</p> ',
        ),

        array(
          'id'         => 'unique_text_9',
          'type'       => 'text',
          'title'      => 'Text Field with Ready-Only',
          'attributes' => array(
            'readonly' => 'only-key'
          ),
          'default'    => 'info@domain.com'
        ),

        array(
          'id'          => 'unique_text_10',
          'type'        => 'text',
          'title'       => 'Text Field with Maxlength (5)',
          'attributes'  => array(
            'maxlength' => '5'
          ),
          'default'     => 'Hello',
        ),

        array(
          'id'         => 'unique_text_11',
          'type'       => 'text',
          'title'      => 'Text Field with Custom Style',
          'attributes' => array(
            'style'    => 'width: 175px; height: 40px; border-color: #93C054;'
          ),
          'after'      => '<p class="cs-text-muted">There is custom css <strong>style="width: 175px; height: 40px; border-color: #93C054;"</strong></p>',
        ),

        array(
          'id'         => 'unique_text_12',
          'type'       => 'text',
          'title'      => 'Text Field with Custom Style',
          'attributes' => array(
            'style'    => 'width: 100%;'
          ),
          'after'      => '<p class="cs-text-muted">There is custom css <strong>style="width: 100%;"</strong></p>'
        ),

        array(
          'id'     => 'unique_text_13',
          'type'   => 'text',
          'before' => '<h4>Text Field without left title</h4>',
          'after'  => '<p class="cs-text-muted">This Text Field do not using left title, just using before text here. also you can remove it.</h4>',
        ),

      ), // end: fields

    ), // end: text options

    // -----------------------------
    // begin: textarea options     -
    // -----------------------------
    array(
      'name'      => 'textarea_options',
      'title'     => 'Textarea',
      'icon'      => 'fa fa-check',
      'fields'    => array(

        array(
          'id'    => 'unique_textarea_1',
          'type'  => 'textarea',
          'title' => 'Simple Textarea',
        ),

        array(
          'id'        => 'unique_textarea_1_1',
          'type'      => 'textarea',
          'title'     => 'Textarea with Shortcoder',
          'shortcode' => true,
        ),

        array(
          'id'    => 'unique_textarea_2',
          'type'  => 'textarea',
          'title' => 'Textarea Field with Description',
          'desc'  => 'Lets write some description for this textarea field.',
        ),

        array(
          'id'    => 'unique_textarea_3',
          'type'  => 'textarea',
          'title' => 'Textarea Field with Help',
          'help'  => 'I am a Tooltip helper. This field important for something.',
        ),

        array(
          'id'      => 'unique_textarea_4',
          'type'    => 'textarea',
          'title'   => 'Textarea Field with Default',
          'default' => 'some default value bla bla bla',
        ),

        array(
          'id'            => 'unique_textarea_5',
          'type'          => 'textarea',
          'title'         => 'Textarea Field with Placeholder',
          'attributes'    => array(
            'placeholder' => 'do stuff...'
          )
        ),

        array(
          'id'    => 'unique_textarea_6',
          'type'  => 'textarea',
          'title' => 'Textarea Field with After-text',
          'after' => '<p class="cs-text-muted">Information: There is some description for option.</p> ',
        ),

        array(
          'id'     => 'unique_textarea_7',
          'type'   => 'textarea',
          'title'  => 'Textarea Field with Before-text',
          'before' => '<p class="cs-text-muted">Information: There is some description for option.</p> ',
        ),

        array(
          'id'         => 'unique_textarea_8',
          'type'       => 'textarea',
          'title'      => 'Textarea Field with Before-text',
          'attributes' => array(
            'rows'     => 10,
          ),
          'after'      => '<p class="cs-text-muted">custom textarea attribute rows=10</p> ',
        ),

        array(
          'id'     => 'unique_textarea_13',
          'type'   => 'textarea',
          'before' => '<h4>Textarea Field without left title</h4>',
          'after'  => '<p class="cs-text-muted">This Textarea Field do not using left title, just using before text here. also you can remove it.</h4>',
        ),

      ),

    ), // end: textarea options

    // -----------------------------
    // begin: checkbox options     -
    // -----------------------------
    array(
      'name'      => 'checkbox_options',
      'title'     => 'Checkbox',
      'icon'      => 'fa fa-check',
      'fields'    => array(

        array(
          'id'    => 'unique_checkbox_1',
          'type'  => 'checkbox',
          'title' => 'Checkbox',
          'label' => 'Yes, Please.',
        ),

        array(
          'id'      => 'unique_checkbox_2',
          'type'    => 'checkbox',
          'title'   => 'Checkbox with Default Value',
          'label'   => 'Would you like something ?',
          'default' => true,
        ),

        array(
          'id'    => 'unique_checkbox_3',
          'type'  => 'checkbox',
          'title' => 'Checkbox Field with Help',
          'label' => 'I am an checkbox',
          'help'  => 'I am a Tooltip helper. This field important for something.',
        ),

        array(
          'id'       => 'unique_checkbox_4',
          'type'     => 'checkbox',
          'title'    => 'Checkbox Field with Options',
          'options'  => array(
            'blue'   => 'Blue',
            'green'  => 'Green',
            'yellow' => 'Yellow',
          ),
        ),

        array(
          'id'         => 'unique_checkbox_5',
          'type'       => 'checkbox',
          'title'      => 'Checkbox Field with Options and Default',
          'options'    => array(
            'bmw'      => 'BMW',
            'mercedes' => 'Mercedes',
            'jaguar'   => 'Jaguar',
          ),
          'default'    => 'bmw'
        ),

        array(
          'id'         => 'unique_checkbox_6',
          'type'       => 'checkbox',
          'title'      => 'Checkbox Field with Options Horizontal',
          'class'      => 'horizontal',
          'options'    => array(
            'blue'     => 'Blue',
            'green'    => 'Green',
            'yellow'   => 'Yellow',
            'red'      => 'Red',
            'black'    => 'Black',
          ),
          'default'    => array( 'green', 'yellow', 'red' )
        ),

        array(
          'id'         => 'unique_checkbox_7',
          'type'       => 'checkbox',
          'title'      => 'Checkbox Field with Pages',
          'options'    => 'pages',
        ),

        array(
          'id'         => 'unique_checkbox_8',
          'type'       => 'checkbox',
          'title'      => 'Checkbox Field with Posts',
          'options'    => 'posts',
        ),

        array(
          'id'         => 'unique_checkbox_9',
          'type'       => 'checkbox',
          'title'      => 'Checkbox Field with Categories',
          'options'    => 'categories',
        ),

        array(
          'id'         => 'unique_checkbox_10',
          'type'       => 'checkbox',
          'title'      => 'Checkbox Field with Tags',
          'options'    => 'tags',
        ),

        array(
          'id'            => 'unique_checkbox_11',
          'type'          => 'checkbox',
          'title'         => 'Checkbox Field with Pages',
          'options'       => 'pages',
          'query_args'    => array(
            'sort_order'  => 'desc',
            'sort_column' => 'post_title',
          ),
          'after'         => '<p class="cs-text-muted"><strong>query_args:</strong> sort_order=desc, sort_column=post_title</p>',
        ),

        array(
          'id'          => 'unique_checkbox_12',
          'type'        => 'checkbox',
          'title'       => 'Checkbox Field with CPT Posts',
          'options'     => 'posts',
          'query_args'  => array(
            'post_type' => 'your_post_type_name',
          ),
          'after'       => '<div class="cs-text-muted"><strong>query_args:</strong> post_type=your_post_type_name</div>',
        ),

        array(
          'id'          => 'unique_checkbox_13',
          'type'        => 'checkbox',
          'title'       => 'Checkbox Field with CPT Categories',
          'options'     => 'categories',
          'query_args'  => array(
            'type'      => 'your_post_type_name',
            'taxonomy'  => 'your_taxonomy_name',
          ),
          'after'       => '<div class="cs-text-muted"><strong>query_args:</strong> post_type=your_post_type_name, taxonomy=your_taxonomy_name</div>',
        ),

        array(
          'id'           => 'unique_checkbox_14',
          'type'         => 'checkbox',
          'title'        => 'Checkbox Field with CPT Tags',
          'options'      => 'tags',
          'query_args'   => array(
            'taxonomies' => 'your_taxonomy_name',
            'order'      => 'asc',
            'orderby'    => 'name',
          ),
          'after'        => '<div class="cs-text-muted"><strong>query_args:</strong> taxonomies=your_taxonomy_name, order=asc, orderby=name</div>',
        ),

      ),
    ), // end: checkbox options


    // -----------------------------
    // begin. radio options        -
    // -----------------------------
    array(
      'name'      => 'radio_options',
      'title'     => 'Radio',
      'icon'      => 'fa fa-check',
      'fields'    => array(

        array(
          'id'      => 'unique_radio_1',
          'type'    => 'radio',
          'title'   => 'Radio Field',
          'options' => array(
            'yes'   => 'Yes, Please.',
            'no'    => 'No, Thank you.',
          ),
        ),

        array(
          'id'        => 'unique_radio_2',
          'type'      => 'radio',
          'title'     => 'Radio with Default Value',
          'options'   => array(
            'yes'     => 'Yes, Please.',
            'no'      => 'No, Thank you.',
            'nothing' => 'I am not sure, yet!',
          ),
          'default'   => 'nothing',
          'help'      => 'Reference site about Lorem Ipsum, a random Lipsum generator.',
        ),

        array(
          'id'      => 'unique_radio_3',
          'type'    => 'radio',
          'title'   => 'Radio Field',
          'class'   => 'horizontal',
          'options' => array(
            'yes'   => 'Yes, Please.',
            'no'    => 'No, Thank you.',
          ),
          'after'   => '<div class="cs-text-muted">Reference site about Lorem Ipsum, a random Lipsum generator.</div>',
        ),

        array(
          'id'         => 'unique_radio_4',
          'type'       => 'radio',
          'title'      => 'Radio Field with Pages',
          'options'    => 'pages',
        ),

        array(
          'id'         => 'unique_radio_5',
          'type'       => 'radio',
          'title'      => 'Radio Field with Posts',
          'options'    => 'posts',
        ),

        array(
          'id'         => 'unique_radio_6',
          'type'       => 'radio',
          'title'      => 'Radio Field with Categories',
          'options'    => 'categories',
        ),

        array(
          'id'         => 'unique_radio_7',
          'type'       => 'radio',
          'title'      => 'Radio Field with Tags',
          'options'    => 'tags',
        ),

        array(
          'id'            => 'unique_radio_8',
          'type'          => 'radio',
          'title'         => 'Radio Field with Pages',
          'options'       => 'pages',
          'query_args'    => array(
            'sort_order'  => 'desc',
            'sort_column' => 'post_title',
          ),
          'after'         => '<p class="cs-text-muted"><strong>query_args:</strong> sort_order=desc, sort_column=post_title</p>',
        ),

        array(
          'id'          => 'unique_radio_9',
          'type'        => 'radio',
          'title'       => 'Radio Field with CPT Posts',
          'options'     => 'posts',
          'query_args'  => array(
            'post_type' => 'your_post_type_name',
          ),
          'after'       => '<div class="cs-text-muted"><strong>query_args:</strong> post_type=your_post_type_name</div>',
        ),

        array(
          'id'          => 'unique_radio_10',
          'type'        => 'radio',
          'title'       => 'Radio Field with CPT Categories',
          'options'     => 'categories',
          'query_args'  => array(
            'type'      => 'your_post_type_name',
            'taxonomy'  => 'your_taxonomy_name',
          ),
          'after'       => '<div class="cs-text-muted"><strong>query_args:</strong> post_type=your_post_type_name, taxonomy=your_taxonomy_name</div>',
        ),

        array(
          'id'         => 'unique_radio_11',
          'type'       => 'radio',
          'title'      => 'Radio Field',
          'options'    => array(
            'yes'      => 'Yes, Please.',
            'no'       => 'No, Thank you.',
            'nothing'  => 'Nothing.',
          ),
        ),

      ),
    ), // end: radio options


    // -----------------------------
    // begin: select options       -
    // -----------------------------
    array(
      'name'      => 'select_options',
      'title'     => 'Select',
      'icon'      => 'fa fa-check',
      'fields'    => array(

        array(
          'id'      => 'unique_select_1',
          'type'    => 'select',
          'title'   => 'Select',
          'options' => array(
            'yes'   => 'Yes, Please.',
            'no'    => 'No, Thank you.'
          )
        ),

        array(
          'id'             => 'unique_select_2',
          'type'           => 'select',
          'title'          => 'Select with First Empty Value',
          'options'        => array(
            'yes'          => 'Yes, Please.',
            'no'           => 'No, Thank you.'
          ),
          'default_option' => 'Select an option',
          'help'           => 'I am a Tooltip helper. This field important for something.',
        ),

        array(
          'id'             => 'unique_select_3',
          'type'           => 'select',
          'title'          => 'Select with Help',
          'options'        => array(
            'green'        => 'Green',
            'red'          => 'Red',
            'blue'         => 'Blue',
            'yellow'       => 'Yellow',
            'black'        => 'Black',
          ),
          'default_option' => 'Select a color',
          'info'           => 'Choose your favorite skin.',
        ),

        array(
          'id'             => 'unique_select_4',
          'type'           => 'select',
          'title'          => 'Select with Default Value',
          'options'        => array(
            'primary'      => 'Primary Option',
            'secondary'    => 'Secondry Option',
            'tertiary'     => 'Tertiary Option',
          ),
          'default'        => 'tertiary',
          'default_option' => 'Select an option',
        ),

        array(
          'id'         => 'unique_select_6',
          'type'       => 'select',
          'title'      => 'Select Field with Multi-select',
          'options'    => array(
            'bmw'      => 'BMW',
            'mercedes' => 'Mercedes',
            'jaguar'   => 'Jaguar',
            'opel'     => 'Opel',
            'golf'     => 'Golf',
            'ferrari'  => 'Ferrari',
            'subaru'   => 'Subaru',
            'seat'     => 'Seat',
          ),
          'attributes' => array(
            'multiple' => 'only-key',
            'style'    => 'width: 150px; height: 125px;'
          )
        ),

        array(
          'id'         => 'unique_select_7',
          'type'       => 'select',
          'title'      => 'Select Field with Multi-default',
          'options'    => array(
            'bmw'      => 'BMW',
            'mercedes' => 'Mercedes',
            'jaguar'   => 'Jaguar',
            'opel'     => 'Opel',
            'golf'     => 'Golf',
            'ferrari'  => 'Ferrari',
            'subaru'   => 'Subaru',
            'seat'     => 'Seat',
          ),
          'attributes' => array(
            'multiple' => 'only-key',
            'style'    => 'width: 150px; height: 125px;'
          ),
          'default'    => array( 'bmw', 'mercedes', 'opel' ),
          'info'       => 'Choose your favorite cars.',
        ),

        array(
          'id'             => 'unique_select_8',
          'type'           => 'select',
          'title'          => 'Select with Pages',
          'options'        => 'pages',
          'default_option' => 'Select a page'
        ),

        array(
          'id'             => 'unique_select_9',
          'type'           => 'select',
          'title'          => 'Select with Posts',
          'options'        => 'posts',
          'default_option' => 'Select a post'
        ),

        array(
          'id'             => 'unique_select_10',
          'type'           => 'select',
          'title'          => 'Select with Categories',
          'options'        => 'categories',
          'default_option' => 'Select a tag'
        ),

        array(
          'id'         => 'unique_select_11',
          'type'       => 'select',
          'title'      => 'Select with Pages with Multi-Select',
          'options'    => 'pages',
          'attributes' => array(
            'multiple' => 'only-key',
            'style'    => 'width: 150px; height: 125px;'
          )
        ),

        array(
          'id'                 => 'unique_select_12',
          'type'               => 'select',
          'title'              => 'Select with Chosen',
          'options'            => array(
            'bmw'              => 'BMW',
            'mercedes'         => 'Mercedes',
            'jaguar'           => 'Jaguar',
            'opel'             => 'Opel',
            'golf'             => 'Golf',
            'ferrari'          => 'Ferrari',
            'subaru'           => 'Subaru',
            'seat'             => 'Seat',
          ),
          'class'              => 'chosen',
          'default_option'     => 'Select your car',
        ),

        array(
          'id'                 => 'unique_select_13',
          'type'               => 'select',
          'title'              => 'Select with Chosen Multi-Select',
          'options'            => array(
            'bmw'              => 'BMW',
            'mercedes'         => 'Mercedes',
            'jaguar'           => 'Jaguar',
            'opel'             => 'Opel',
            'golf'             => 'Golf',
            'ferrari'          => 'Ferrari',
            'subaru'           => 'Subaru',
            'seat'             => 'Seat',
          ),
          'class'              => 'chosen',
          'attributes'         => array(
            'data-placeholder' => 'Select your favrorite cars',
            'multiple'         => 'only-key',
            'style'            => 'width: 200px;'
          ),
        ),

        array(
          'id'             => 'unique_select_14',
          'type'           => 'select',
          'title'          => 'Select with Chosen with Pages',
          'options'        => 'pages',
          'class'          => 'chosen',
          'default_option' => 'Select a page'
        ),

        array(
          'id'                 => 'unique_select_15',
          'type'               => 'select',
          'title'              => 'Select with Chosen with Posts Multi-Select',
          'options'            => 'posts',
          'class'              => 'chosen',
          'attributes'         => array(
            'data-placeholder' => 'Select your favrorite posts',
            'multiple'         => 'only-key',
            'style'            => 'width: 200px;'
          ),
          'info'               => 'and much more select options for you!',
        ),

      ),
    ), // end: select options


    // -----------------------------
    // begin: switcher options     -
    // -----------------------------
    array(
      'name'      => 'switcher_options',
      'title'     => 'Switcher',
      'icon'      => 'fa fa-toggle-on',
      'fields'    => array(

        array(
          'id'    => 'unique_switcher_1',
          'type'  => 'switcher',
          'title' => 'Simple Switcher',
        ),

        array(
          'id'    => 'unique_switcher_2',
          'type'  => 'switcher',
          'title' => 'Switcher Field with Label',
          'label' => 'Yes, Please do it.',
        ),

        array(
          'id'    => 'unique_switcher_3',
          'type'  => 'switcher',
          'title' => 'Switcher Field with Help',
          'help'  => 'I am a Tooltip helper. This field important for something.',
        ),

        array(
          'id'      => 'unique_switcher_4',
          'type'    => 'switcher',
          'title'   => 'Switcher Field with Default',
          'default' => true,
        ),

      ),
    ), // end: switcher options


    // -----------------------------
    // begin: number options       -
    // -----------------------------
    array(
      'name'        => 'number_options',
      'title'       => 'Number',
      'icon'        => 'fa fa-check',
      'fields'      => array(

        array(
          'id'      => 'unique_number_1',
          'type'    => 'number',
          'title'   => 'Simple Number',
        ),

        array(
          'id'      => 'unique_number_2',
          'type'    => 'number',
          'title'   => 'Number Field with Description',
          'desc'    => 'Lets write some description for this number field.',
        ),

        array(
          'id'      => 'unique_number_3',
          'type'    => 'number',
          'title'   => 'Number Field with Help',
          'help'    => 'I am a Tooltip helper. This field important for something.',
        ),

        array(
          'id'      => 'unique_number_4',
          'type'    => 'number',
          'title'   => 'Number Field with Default',
          'default' => '10',
        ),

        array(
          'id'            => 'unique_number_5',
          'type'          => 'number',
          'title'         => 'Number Field with Placeholder',
          'attributes'    => array(
            'placeholder' => '25'
          )
        ),

        array(
          'id'      => 'unique_number_6',
          'type'    => 'number',
          'title'   => 'Number Field with After-text',
          'after'   => ' <i class="cs-text-muted">(px)</i>',
        ),

      ),
    ), // end: number options

    // -----------------------------
    // begin: icon options       -
    // -----------------------------
    array(
      'name'        => 'icon_options',
      'title'       => 'Icons',
      'icon'        => 'fa fa-check',
      'fields'      => array(

        array(
          'id'      => 'unique_icon_1',
          'type'    => 'icon',
          'title'   => 'Simple Icon',
        ),

        array(
          'id'      => 'unique_icon_2',
          'type'    => 'icon',
          'title'   => 'Icon Field with Description',
          'desc'    => 'Lets write some description for this icon field.',
        ),

        array(
          'id'      => 'unique_icon_3',
          'type'    => 'icon',
          'title'   => 'Icon Field with Help',
          'help'    => 'I am a Tooltip helper. This field important for something.',
        ),

        array(
          'id'      => 'unique_icon_4',
          'type'    => 'icon',
          'title'   => 'Icon Field with Default',
          'default' => 'fa fa-check',
        ),

        array(
          'id'      => 'unique_icon_5',
          'type'    => 'icon',
          'title'   => 'Icon Field with After-text',
          'after'   => '<p class="cs-text-muted">Lets write some description for this icon field.</i>',
        ),

      ),
    ), // end: icon options


    // -----------------------------
    // begin: group options        -
    // -----------------------------
    array(
      'name'      => 'group_options',
      'title'     => 'Group',
      'icon'      => 'fa fa-check',
      'fields'    => array(

        array(
          'id'              => 'unique_group_1',
          'type'            => 'group',
          'title'           => 'Group Field',
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Field',
          'fields'          => array(

            array(
              'id'          => 'unique_group_1_text',
              'type'        => 'text',
              'title'       => 'Text Field',
            ),

            array(
              'id'          => 'unique_group_1_switcher',
              'type'        => 'switcher',
              'title'       => 'Switcher Field',
            ),

            array(
              'id'          => 'unique_group_1_textarea',
              'type'        => 'textarea',
              'title'       => 'Upload Field',
            ),

          )
        ),

        array(
          'id'              => 'unique_group_2',
          'type'            => 'group',
          'title'           => 'Group Field with Default',
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Field',
          'fields'          => array(

            array(
              'id'          => 'unique_group_2_text',
              'type'        => 'text',
              'title'       => 'Text Field',
            ),

            array(
              'id'          => 'unique_group_2_switcher',
              'type'        => 'switcher',
              'title'       => 'Switcher Field',
            ),

            array(
              'id'          => 'unique_group_2_textarea',
              'type'        => 'textarea',
              'title'       => 'Upload Field',
            ),

          ),
          'default'                     => array(
            array(
              'unique_group_2_text'     => 'Some text',
              'unique_group_2_switcher' => true,
              'unique_group_2_textarea' => 'Some content',
            ),
            array(
              'unique_group_2_text'     => 'Some text 2',
              'unique_group_2_switcher' => true,
              'unique_group_2_textarea' => 'Some content 2',
            ),
          )
        ),

        array(
          'id'              => 'unique_group_3',
          'type'            => 'group',
          'title'           => 'Group Field',
          'info'            => 'You can use any option field on group',
          'button_title'    => 'Add New Something',
          'accordion_title' => 'Adding New Thing',
          'fields'          => array(

            array(
              'id'          => 'unique_group_3_text',
              'type'        => 'upload',
              'title'       => 'Text Field',
            ),

          )
        ),

        array(
          'id'              => 'unique_group_4',
          'type'            => 'group',
          'title'           => 'Group Field',
          'desc'            => 'Accordion title using the ID of the field, for eg. "Text Field 2" using as accordion title here.',
          'button_title'    => 'Add New',
          'accordion_title' => 'unique_group_4_text_2',
          'fields'          => array(

            array(
              'id'          => 'unique_group_4_text_1',
              'type'        => 'text',
              'title'       => 'Text Field 1',
            ),

            array(
              'id'          => 'unique_group_4_text_2',
              'type'        => 'text',
              'title'       => 'Text Field 2',
            ),

            array(
              'id'          => 'unique_group_4_text_3',
              'type'        => 'text',
              'title'       => 'Text Field 3',
            ),

          )
        ),

      ),
    ), // end: group options


    // -----------------------------
    // begin: upload options       -
    // -----------------------------
    array(
      'name'      => 'upload_options',
      'title'     => 'Upload',
      'icon'      => 'fa fa-check',
      'fields'    => array(

        array(
          'id'      => 'unique_upload_1',
          'type'    => 'upload',
          'title'   => 'Simple Upload',
        ),

        array(
          'id'      => 'unique_upload_2',
          'type'    => 'upload',
          'title'   => 'Upload Field with Description',
          'desc'    => 'Lets write some description for this upload field.',
        ),

        array(
          'id'      => 'unique_upload_3',
          'type'    => 'upload',
          'title'   => 'Upload Field with Help',
          'help'    => 'I am a Tooltip helper. This field important for something.',
        ),

        array(
          'id'      => 'unique_upload_4',
          'type'    => 'upload',
          'title'   => 'Upload Field with Default',
          'default' => 'screenshot-1.png',
        ),

        array(
          'id'      => 'unique_upload_5',
          'type'    => 'upload',
          'title'   => 'Upload Field with After-text',
          'after'   => '<p class="cs-text-muted">You can use default value <strong>get_template_directory_uri()</strong>."/images/screenshot-1.png"</p>',
        ),

        array(
          'id'            => 'unique_upload_6',
          'type'          => 'upload',
          'title'         => 'Upload Field with Placeholder',
          'attributes'    => array(
            'placeholder' => 'http://'
          ),
        ),

        array(
          'id'             => 'unique_upload_7',
          'type'           => 'upload',
          'title'          => 'Upload Field with Custom Title',
          'settings'       => array(
            'button_title' => 'Upload Logo',
            'frame_title'  => 'Choose a image',
            'insert_title' => 'Use this image',
          ),
        ),

        array(
          'id'             => 'unique_upload_8',
          'type'           => 'upload',
          'title'          => 'Upload Field with Video',
          'settings'       => array(
            'upload_type'  => 'video',
            'button_title' => 'Upload Video',
            'frame_title'  => 'Choose a Video',
            'insert_title' => 'Use This Video',
          ),
        ),

      ),
    ), // end: upload options


    // -----------------------------
    // begin: background options   -
    // -----------------------------
    array(
      'name'      => 'background_options',
      'title'     => 'Background',
      'icon'      => 'fa fa-check',
      'fields'    => array(

        array(
          'id'    => 'unique_background_1',
          'type'  => 'background',
          'title' => 'Background',
        ),

        array(
          'id'    => 'unique_background_2',
          'type'  => 'background',
          'title' => 'Background Field with Description',
          'desc'  => 'Lets write some description for this background field.',
          'help'  => 'I am a Tooltip helper. This field important for something.',
        ),

        array(
          'id'           => 'unique_background_3',
          'type'         => 'background',
          'title'        => 'Background Field with Default',
          'default'      => array(
            'image'      => 'something.png',
            'repeat'     => 'repeat-x',
            'position'   => 'center center',
            'attachment' => 'fixed',
            'color'      => '#ffbc00',
          ),
        ),

        array(
          'id'      => 'unique_background_4',
          'type'    => 'background',
          'title'   => 'Background Field with Description',
          'after'   => '<p class="cs-text-muted">Information: There is some description for option.</p> ',
          'default' => array(
            'color' => '#222',
          ),
        ),

      ),
    ), // end: background options


    // -----------------------------
    // begin: color picker options -
    // -----------------------------
    array(
      'name'      => 'color_picker_options',
      'title'     => 'Color Picker',
      'icon'      => 'fa fa-check',
      'fields'    => array(

        array(
          'id'      => 'unique_color_picker_1',
          'type'    => 'color_picker',
          'title'   => 'Color Picker',
          'default' => '#dd3333',
        ),

        array(
          'id'      => 'unique_color_picker_2',
          'type'    => 'color_picker',
          'title'   => 'Color Picker RGBA disabled',
          'rgba'    => false,
        ),

        array(
          'id'      => 'unique_color_picker_3',
          'type'    => 'color_picker',
          'title'   => 'Color Picker Field with Description',
          'desc'    => 'Lets write some description for this color picker field.',
        ),

        array(
          'id'      => 'unique_color_picker_4',
          'type'    => 'color_picker',
          'title'   => 'Color Picker Field with Help',
          'help'    => 'I am a Tooltip helper. This field important for something.',
        ),

        array(
          'id'      => 'unique_color_picker_5',
          'type'    => 'color_picker',
          'title'   => 'Color Picker Field with Default',
          'default' => 'rgba(0, 0, 255, 0.25)',
        ),

        array(
          'id'      => 'unique_color_picker_6',
          'type'    => 'color_picker',
          'title'   => 'Color Picker Field with Default',
          'after'   => '<p class="cs-text-muted">Information: There is some description for option.</p> ',
          'default' => 'rgba(0, 255, 0, 0.75)',
        ),

      ),
    ), // end: color picker options


    // -----------------------------
    // begin: image select options -
    // -----------------------------
    array(
      'name'      => 'image_select_options',
      'title'     => 'Image Select',
      'icon'      => 'fa fa-check',
      'fields'    => array(

        array(
          'id'           => 'unique_image_select_1',
          'type'         => 'image_select',
          'title'        => 'Image Select (Checkbox)',
          'options'      => array(
            'value-1'    => 'http://codestarframework.com/assets/images/placeholder/150x125-2ecc71.gif',
            'value-2'    => 'http://codestarframework.com/assets/images/placeholder/150x125-e74c3c.gif',
            'value-3'    => 'http://codestarframework.com/assets/images/placeholder/150x125-ffbc00.gif',
            'value-4'    => 'http://codestarframework.com/assets/images/placeholder/150x125-3498db.gif',
          ),
        ),

        array(
          'id'           => 'unique_image_select_2',
          'type'         => 'image_select',
          'title'        => 'Image Select (Checkbox) with Default',
          'options'      => array(
            'value-1'    => 'http://codestarframework.com/assets/images/placeholder/150x125-ffbc00.gif',
            'value-2'    => 'http://codestarframework.com/assets/images/placeholder/150x125-3498db.gif',
            'value-3'    => 'http://codestarframework.com/assets/images/placeholder/150x125-e74c3c.gif',
            'value-4'    => 'http://codestarframework.com/assets/images/placeholder/150x125-2ecc71.gif',
            'value-5'    => 'http://codestarframework.com/assets/images/placeholder/150x125-555555.gif',
          ),
          'default'      => 'value-2'
        ),

        array(
          'id'           => 'unique_image_select_3',
          'type'         => 'image_select',
          'title'        => 'Image Select (Radio) with Default',
          'options'      => array(
            'value-1'    => 'http://codestarframework.com/assets/images/placeholder/150x125-2ecc71.gif',
            'value-2'    => 'http://codestarframework.com/assets/images/placeholder/150x125-e74c3c.gif',
            'value-3'    => 'http://codestarframework.com/assets/images/placeholder/150x125-ffbc00.gif',
            'value-4'    => 'http://codestarframework.com/assets/images/placeholder/150x125-3498db.gif',
          ),
          'radio'        => true,
          'default'      => 'value-3'
        ),

        array(
          'id'           => 'unique_image_select_4',
          'type'         => 'image_select',
          'title'        => 'Image Select (Radio) with Default',
          'options'      => array(
            'value-1'    => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
            'value-2'    => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
            'value-3'    => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
            'value-4'    => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
            'value-5'    => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
            'value-6'    => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
            'value-7'    => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
            'value-8'    => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
          ),
          'radio'        => true,
          'default'      => 'value-2'
        ),

        array(
          'id'           => 'unique_image_select_5',
          'type'         => 'image_select',
          'title'        => 'Image Select with Multi Select',
          'options'      => array(
            'value-1'    => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
            'value-2'    => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
            'value-3'    => 'http://codestarframework.com/assets/images/placeholder/80x80-e74c3c.gif',
            'value-4'    => 'http://codestarframework.com/assets/images/placeholder/80x80-ffbc00.gif',
            'value-5'    => 'http://codestarframework.com/assets/images/placeholder/80x80-3498db.gif',
            'value-6'    => 'http://codestarframework.com/assets/images/placeholder/80x80-2ecc71.gif',
            'value-7'    => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
            'value-8'    => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
          ),
          'multi_select' => true,
          'default'      => array( 'value-3', 'value-4', 'value-5', 'value-6' )
        ),

      ),
    ), // end: image select options


    // -----------------------------
    // begin: typography options   -
    // -----------------------------
    array(
      'name'          => 'typography_options',
      'title'         => 'Typography',
      'icon'          => 'fa fa-check',
      'fields'        => array(

        array(
          'id'        => 'unique_typography_1',
          'type'      => 'typography',
          'title'     => 'Typography with Default',
          'default'   => array(
            'family'  => 'Open Sans',
            'font'    => 'google', // this is helper for output ( google, websafe, custom )
            'variant' => '800',
          ),
        ),

        array(
          'id'        => 'unique_typography_2',
          'type'      => 'typography',
          'title'     => 'Typography without Chosen',
          'default'   => array(
            'family'  => 'Ubuntu',
            'font'    => 'google',
          ),
          'chosen'    => false,
        ),

        array(
          'id'        => 'unique_typography_3',
          'type'      => 'typography',
          'title'     => 'Typography without Chosen/Variant',
          'default'   => array(
            'family'  => 'Arial',
            'font'    => 'websafe',
          ),
          'variant'   => false,
          'chosen'    => false,
        ),

      ),
    ), // end: typography options


    // -----------------------------
    // begin: new fields options   -
    // -----------------------------
    array(
      'name'         => 'wysiwyg_options',
      'title'        => 'Wysiwyg',
      'icon'         => 'fa fa-check',
      'fields'       => array(

        array(
          'id'       => 'wysiwyg_1',
          'type'     => 'wysiwyg',
          'title'    => 'Wysiwyg',
        ),

        array(
          'id'       => 'wysiwyg_2',
          'type'     => 'wysiwyg',
          'title'    => 'Wysiwyg with Custom Settings',
          'settings' => array(
            'textarea_rows' => 5,
            'tinymce'       => false,
            'media_buttons' => false,
          )
        ),


      ),
    ), // end: new fields options


    // -----------------------------
    // begin: image options        -
    // -----------------------------
    array(
      'name'          => 'image_options',
      'title'         => 'Image',
      'icon'          => 'fa fa-check',
      'fields'        => array(

        array(
          'id'        => 'image_1',
          'type'      => 'image',
          'title'     => 'Image',
        ),

        array(
          'id'        => 'image_2',
          'type'      => 'image',
          'title'     => 'Image with After Text',
          'desc'      => 'Lets write some description for this image field.',
          'help'      => 'This option field is useful. You will love it!',
        ),

        array(
          'id'        => 'image_3',
          'type'      => 'image',
          'title'     => 'Image with Custom Title',
          'add_title' => 'Add Logo',
        ),

      ),
    ), // end: image options


    // -----------------------------
    // begin: gallery options      -
    // -----------------------------
    array(
      'name'            => 'gallery_options',
      'title'           => 'Gallery',
      'icon'            => 'fa fa-check',
      'fields'          => array(

        array(
          'id'          => 'gallery_1',
          'type'        => 'gallery',
          'title'       => 'Gallery',
        ),

        array(
          'id'          => 'gallery_2',
          'type'        => 'gallery',
          'title'       => 'Gallery with Custom Title',
          'add_title'   => 'Add Images',
          'edit_title'  => 'Edit Images',
          'clear_title' => 'Remove Images',
        ),

        array(
          'id'          => 'gallery_3',
          'type'        => 'gallery',
          'title'       => 'Gallery with Custom Title',
          'desc'        => 'Lets write some description for this image field.',
          'help'        => 'This option field is useful. You will love it!',
          'add_title'   => 'Add Image(s)',
          'edit_title'  => 'Edit Image(s)',
          'clear_title' => 'Clear Image(s)',
        ),

      ),
    ), // end: gallery options


    // -----------------------------
    // begin: sorter options       -
    // -----------------------------
    array(
      'name'     => 'sorter_options',
      'title'    => 'Sorter',
      'icon'     => 'fa fa-check',
      'fields'   => array(

        array(
          'id'             => 'sorter_1',
          'type'           => 'sorter',
          'title'          => 'Sorter',
          'default'        => array(
            'enabled'      => array(
              'bmw'        => 'BMW',
              'mercedes'   => 'Mercedes',
              'volkswagen' => 'Volkswagen',
            ),
            'disabled'     => array(
              'ferrari'    => 'Ferrari',
              'mustang'    => 'Mustang',
            ),
          ),
        ),

        array(
          'id'             => 'sorter_2',
          'type'           => 'sorter',
          'title'          => 'Sorter',
          'default'        => array(
            'enabled'      => array(
              'blue'       => 'Blue',
              'green'      => 'Green',
              'red'        => 'Red',
              'yellow'     => 'Yellow',
              'orange'     => 'Orange',
              'ocean'      => 'Ocean',
            ),
            'disabled'     => array(
              'black'      => 'Black',
              'white'      => 'White',
            ),
          ),
          'enabled_title'  => 'Active Colors',
          'disabled_title' => 'Deactive Colors',
        ),
      ),

    ), // end: sorter options


    // -----------------------------
    // begin: sorter options       -
    // -----------------------------
    array(
      'name'     => 'fieldset_options',
      'title'    => 'Fieldset',
      'icon'     => 'fa fa-check',
      'fields'   => array(

        array(
          'id'        => 'fieldset_1',
          'type'      => 'fieldset',
          'title'     => 'Fieldset Field',
          'fields'    => array(

            array(
              'id'    => 'fieldset_1_text',
              'type'  => 'text',
              'title' => 'Text Field',
            ),

            array(
              'id'    => 'fieldset_1_upload',
              'type'  => 'upload',
              'title' => 'Upload Field',
            ),

            array(
              'id'    => 'fieldset_1_textarea',
              'type'  => 'textarea',
              'title' => 'Textarea Field',
            ),

          ),
        ),

        array(
          'id'        => 'fieldset_2',
          'type'      => 'fieldset',
          'title'     => 'Fieldset Field with Default',
          'fields'    => array(

            array(
              'type'    => 'subheading',
              'content' => 'Title of Fieldset',
            ),

            array(
              'id'      => 'fieldset_2_text',
              'type'    => 'text',
              'title'   => 'Text Field',
            ),

            array(
              'id'      => 'fieldset_2_checkbox',
              'type'    => 'checkbox',
              'title'   => 'Checkbox Field',
              'label'   => 'Are you sure?',
            ),

            array(
              'id'      => 'fieldset_2_textarea',
              'type'    => 'textarea',
              'title'   => 'Upload Field',
            ),

          ),
          'default'   => array(
            'fieldset_2_text'     => 'Hello',
            'fieldset_2_checkbox' => true,
            'fieldset_2_textarea' => 'Do stuff',
          )
        ),

      ),
    ), // end: sorter options


    // -----------------------------
    // begin: others options       -
    // -----------------------------
    array(
      'name'        => 'others_options',
      'title'       => 'Others',
      'icon'        => 'fa fa-check',
      'fields'      => array(

        array(
          'type'    => 'heading',
          'content' => 'Heading',
        ),

        array(
          'id'      => 'unique_others_text_1',
          'type'    => 'text',
          'title'   => 'Others Text Field 1',
        ),

        array(
          'id'      => 'unique_others_text_2',
          'type'    => 'text',
          'title'   => 'Others Text Field 2',
        ),

        array(
          'type'    => 'subheading',
          'content' => 'Sub Heading',
        ),

        array(
          'id'      => 'unique_others_text_3',
          'type'    => 'text',
          'title'   => 'Others Text Field 3',
        ),

        array(
          'type'    => 'notice',
          'class'   => 'success',
          'content' => 'Notice Success: Lorem Ipsum, a random Lipsum generator.',
        ),

        array(
          'id'      => 'unique_others_text_4',
          'type'    => 'text',
          'title'   => 'Others Text Field 4',
        ),

        array(
          'type'    => 'notice',
          'class'   => 'info',
          'content' => 'Notice Info: Lorem Ipsum, a random Lipsum generator.',
        ),

        array(
          'id'      => 'unique_others_text_5',
          'type'    => 'text',
          'title'   => 'Others Text Field 5',
        ),

        array(
          'type'    => 'notice',
          'class'   => 'warning',
          'content' => 'Notice Warning: Lorem Ipsum, a random Lipsum generator.',
        ),

        array(
          'id'      => 'unique_others_text_6',
          'type'    => 'text',
          'title'   => 'Others Text Field 6',
        ),

        array(
          'type'    => 'notice',
          'class'   => 'danger',
          'content' => 'Notice Danger: Lorem Ipsum, a random Lipsum generator.',
        ),

        array(
          'id'      => 'unique_others_text_7',
          'type'    => 'text',
          'title'   => 'Others Text Field 7',
        ),

        array(
          'id'      => 'unique_others_text_8',
          'type'    => 'text',
          'title'   => 'Others Text Field 8',
        ),

        array(
          'type'    => 'content',
          'content' => 'Content Field: It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
        ),

        array(
          'id'      => 'unique_others_text_9',
          'type'    => 'text',
          'title'   => 'Others Text Field 9',
          'after'   => '<p class="cs-text-warning">This field using debug=true</p>',
          'debug'   => true,
        ),


      ),
    ), // end: other options

  )
);

// ------------------------------
// a seperator                  -
// ------------------------------
$options[] = array(
  'name'   => 'seperator_1',
  'title'  => 'A Seperator',
  'icon'   => 'fa fa-bookmark'
);

// ------------------------------
// backup                       -
// ------------------------------
$options[]   = array(
  'name'     => 'backup_section',
  'title'    => 'Backup',
  'icon'     => 'fa fa-shield',
  'fields'   => array(

    array(
      'type'    => 'notice',
      'class'   => 'warning',
      'content' => 'You can save your current options. Download a Backup and Import.',
    ),

    array(
      'type'    => 'backup',
    ),

  )
);

// ------------------------------
// validate                     -
// ------------------------------
$options[]   = array(
  'name'     => 'validate_section',
  'title'    => 'Validate',
  'icon'     => 'fa fa-check-circle',
  'fields'   => array(

    array(
      'id'       => 'validate_text_1',
      'type'     => 'text',
      'title'    => 'Email Text',
      'desc'     => 'This text field only accepted email address.',
      'default'  => 'info@domain.com',
      'validate' => 'email',
    ),

    array(
      'id'       => 'numeric_text_1',
      'type'     => 'text',
      'title'    => 'Numeric Text',
      'desc'     => 'This text field only accepted numbers',
      'default'  => '123456',
      'validate' => 'numeric',
    ),

    array(
      'id'       => 'required_text_1',
      'type'     => 'text',
      'title'    => 'Requried Text',
      'after'    => ' <small class="cs-text-warning">( * required )</small>',
      'default'  => 'lorem ipsum',
      'validate' => 'required',
    ),

    array(
      'type'    => 'notice',
      'class'   => 'info',
      'content' => 'Also you can add your own validate from <strong>themename/cs-framework/functions/validate.php</strong>',
    ),

  )
);

// ------------------------------
// sanitize                     -
// ------------------------------
$options[]   = array(
  'name'     => 'sanitize_section',
  'title'    => 'Sanitize',
  'icon'     => 'fa fa-repeat',
  'fields'   => array(

    array(
      'id'       => 'sanitie_text_1',
      'type'     => 'text',
      'title'    => 'Sanitized Text',
      'after'    => '<p class="cs-text-muted">This text field sanitized already, without any settings. we are using wordpress core.<br /> for eg. try too add <strong>&lt;p></strong> html tag</p>',
    ),

    array(
      'id'       => 'sanitie_text_2',
      'type'     => 'text',
      'title'    => 'Disable Sanitized Text',
      'after'    => '<p class="cs-text-muted">Disabled sanitize for this field (sanitize=false). try too add <strong>&lt;p></strong> html tag so, you can write anything</p>',
      'sanitize' => false,
    ),

    array(
      'id'       => 'sanitie_textarea_1',
      'type'     => 'textarea',
      'title'    => 'Sanitized Textarea',
      'after'    => '<p class="cs-text-muted">This textarea field sanitized already, without any settings. we are using wordpress core.<br /> just allowing this tags wp core $allowedposttags</p>',
    ),

    array(
      'id'       => 'sanitie_textarea_2',
      'type'     => 'textarea',
      'title'    => 'Disabled Sanitized Textarea',
      'after'    => '<p class="cs-text-muted">Disabled sanitize for this field (sanitize=false). you can write anything</p>',
      'sanitize' => false,
    ),

    array(
      'type'    => 'notice',
      'class'   => 'info',
      'content' => 'Custom Sanitize, Also you can add your own validate from <strong>themename/cs-framework/functions/sanitize.php</strong>',
    ),

    array(
      'id'       => 'sanitie_text_1',
      'type'     => 'text',
      'title'    => 'Custom Sanitize Text',
      'after'    => '<p class="cs-text-muted">This text field sanitized as slug title (sanitize="title")</p>',
      'sanitize' => 'title',
    ),

  )
);

// ----------------------------------------
// dependencies                           -
// ----------------------------------------
$options[]           = array(
  'name'             => 'dependencies',
  'title'            => 'Dependencies',
  'icon'             => 'fa fa-code-fork',
  'fields'           => array(

    // ------------------------------------
    // Basic Dependencies
    // ------------------------------------
    array(
      'type'         => 'subheading',
      'content'      => 'Basic Dependencies',
    ),

    // ------------------------------------
    array(
      'id'           => 'dep_1',
      'type'         => 'text',
      'title'        => 'If text <u>not be empty</u>',
    ),

    array(
      'id'           => 'dummy_1',
      'type'         => 'notice',
      'class'        => 'info',
      'content'      => 'Done, this text option have something.',
      'dependency'   => array( 'dep_1', '!=', '' ),
    ),
    // ------------------------------------

    // ------------------------------------
    array(
      'id'           => 'dep_2',
      'type'         => 'switcher',
      'title'        => 'If switcher mode <u>ON</u>',
    ),

    array(
      'id'           => 'dummy_2',
      'type'         => 'notice',
      'class'        => 'success',
      'content'      => 'Woow! Switcher is ON',
      'dependency'   => array( 'dep_2', '==', 'true' ),
    ),
    // ------------------------------------

    // ------------------------------------
    array(
      'id'           => 'dep_3',
      'type'         => 'select',
      'title'        => 'Select color <u>black or white</u>',
      'options'      => array(
        'blue'       => 'Blue',
        'yellow'     => 'Yellow',
        'green'      => 'Green',
        'black'      => 'Black',
        'white'      => 'White',
      ),
    ),

    array(
      'id'           => 'dummy_3',
      'type'         => 'notice',
      'class'        => 'danger',
      'content'      => 'Well done!',
      'dependency'   => array( 'dep_3', 'any', 'black,white' ),
    ),
    // ------------------------------------

    // ------------------------------------
    array(
      'id'           => 'dep_4',
      'type'         => 'radio',
      'title'        => 'If set <u>No, Thanks</u>',
      'options'      => array(
        'yes'        => 'Yes, Please',
        'no'         => 'No, Thanks',
        'not-sure'   => 'I am not sure!',
      ),
      'default'      => 'yes'
    ),

    array(
      'id'           => 'dummy_4',
      'type'         => 'notice',
      'class'        => 'info',
      'content'      => 'Uh why?!!!',
      'dependency'   => array( 'dep_4_no', '==', 'true' ),
      //'dependency' => array( '{ID}_{VALUE}', '==', 'true' ),
    ),
    // ------------------------------------

    // ------------------------------------
    array(
      'id'           => 'dep_5',
      'type'         => 'checkbox',
      'title'        => 'If checked <u>danger</u>',
      'options'      => array(
        'success'    => 'Success',
        'danger'     => 'Danger',
        'info'       => 'Info',
        'warning'    => 'Warning',
      ),
    ),

    array(
      'id'           => 'dummy_5',
      'type'         => 'notice',
      'class'        => 'danger',
      'content'      => 'Danger!',
      'dependency'   => array( 'dep_5_danger', '==', 'true' ),
      //'dependency' => array( '{ID}_{VALUE}', '==', 'true' ),
    ),
    // ------------------------------------

    // ------------------------------------
    array(
      'id'           => 'dep_6',
      'type'         => 'image_select',
      'title'        => 'If check <u>Blue box</u>',
      'options'      => array(
        'green'      => 'http://codestarframework.com/assets/images/placeholder/100x80-2ecc71.gif',
        'red'        => 'http://codestarframework.com/assets/images/placeholder/100x80-e74c3c.gif',
        'yellow'     => 'http://codestarframework.com/assets/images/placeholder/100x80-ffbc00.gif',
        'blue'       => 'http://codestarframework.com/assets/images/placeholder/100x80-3498db.gif',
        'gray'       => 'http://codestarframework.com/assets/images/placeholder/100x80-555555.gif',
      ),
      'info'         => 'Image select field input="checkbox" model. in checkbox model unselected available.',
    ),

    array(
      'id'           => 'dummy_6',
      'type'         => 'notice',
      'class'        => 'info',
      'content'      => 'Blue box selected!',
      'dependency'   => array( 'dep_6_blue', '==', 'true' ),
      //'dependency' => array( '{ID}_{VALUE}', '==', 'true' ),
    ),
    // ------------------------------------

    // ------------------------------------
    array(
      'id'           => 'dep_7',
      'type'         => 'image_select',
      'title'        => 'If check <u>Green box</u>',
      'options'      => array(
        'green'      => 'http://codestarframework.com/assets/images/placeholder/100x80-2ecc71.gif',
        'red'        => 'http://codestarframework.com/assets/images/placeholder/100x80-e74c3c.gif',
        'yellow'     => 'http://codestarframework.com/assets/images/placeholder/100x80-ffbc00.gif',
        'blue'       => 'http://codestarframework.com/assets/images/placeholder/100x80-3498db.gif',
        'gray'       => 'http://codestarframework.com/assets/images/placeholder/100x80-555555.gif',
      ),
      'info'         => 'Image select field input="radio" model. in radio model unselected unavailable.',
      'radio'        => true,
      'default'      => 'gray',
    ),

    array(
      'id'           => 'dummy_7',
      'type'         => 'notice',
      'class'        => 'success',
      'content'      => 'Green box selected!',
      'dependency'   => array( 'dep_7_green', '==', 'true' ),
      //'dependency' => array( '{ID}_{VALUE}', '==', 'true' ),
    ),
    // ------------------------------------

    // ------------------------------------
    array(
      'id'           => 'dep_7_alt',
      'type'         => 'image_select',
      'title'        => 'If check <u>Green box or Blue box</u>',
      'options'      => array(
        'green'      => 'http://codestarframework.com/assets/images/placeholder/100x80-2ecc71.gif',
        'red'        => 'http://codestarframework.com/assets/images/placeholder/100x80-e74c3c.gif',
        'yellow'     => 'http://codestarframework.com/assets/images/placeholder/100x80-ffbc00.gif',
        'blue'       => 'http://codestarframework.com/assets/images/placeholder/100x80-3498db.gif',
        'gray'       => 'http://codestarframework.com/assets/images/placeholder/100x80-555555.gif',
      ),
      'info'         => 'Multipel Image select field input="radio" model. in radio model unselected unavailable.',
      'radio'        => true,
      'default'      => 'gray',
      'attributes'   => array(
        'data-depend-id' => 'dep_7_alt',
      ),
    ),

    array(
      'id'           => 'dummy_7_alt',
      'type'         => 'notice',
      'class'        => 'success',
      'content'      => 'Green or Blue box selected!',
      'dependency'   => array( 'dep_7_alt', 'any', 'green,blue' ),
      //'dependency' => array( 'data-depend-id', 'any', 'value,value' ),
    ),
    // ------------------------------------

    // ------------------------------------
    array(
      'id'           => 'dep_8',
      'type'         => 'image',
      'title'        => 'Add a image',
    ),

    array(
      'id'           => 'dummy_8',
      'type'         => 'notice',
      'class'        => 'success',
      'content'      => 'Added a image!',
      'dependency'   => array( 'dep_8', '!=', '' ),
    ),
    // ------------------------------------

    // ------------------------------------
    array(
      'id'           => 'dep_9',
      'type'         => 'icon',
      'title'        => 'Add a icon',
    ),

    array(
      'id'           => 'dummy_9',
      'type'         => 'notice',
      'class'        => 'success',
      'content'      => 'Added a icon!',
      'dependency'   => array( 'dep_9', '!=', '' ),
    ),
    // ------------------------------------

    // ------------------------------------
    // Advanced Dependencies
    // ------------------------------------
    array(
      'type'         => 'subheading',
      'content'      => 'Advanced Dependencies',
    ),

    // ------------------------------------
    array(
      'id'           => 'dep_10',
      'type'         => 'text',
      'title'        => 'If text string <u>hello</u>',
    ),

    array(
      'id'           => 'dep_11',
      'type'         => 'text',
      'title'        => 'and this text string <u>world</u>',
    ),

    array(
      'id'           => 'dep_12',
      'type'         => 'checkbox',
      'title'        => 'and checkbox mode <u>checked</u>',
      'label'        => 'Check me!'
    ),

    array(
      'id'           => 'dummy_10',
      'type'         => 'notice',
      'class'        => 'info',
      'content'      => 'Done, Multiple Dependencies worked.',
      'dependency'   => array( 'dep_10|dep_11|dep_12', '==|==|==', 'hello|world|true' ),
    ),
    // ------------------------------------

    // ------------------------------------
    // Another Dependencies
    // ------------------------------------
    array(
      'type'         => 'subheading',
      'content'      => 'Another Dependencies',
    ),

    // ------------------------------------
    array(
      'id'           => 'dep_13',
      'type'         => 'select',
      'title'        => 'If color <u>black or white</u>',
      'options'      => array(
        'blue'       => 'Blue',
        'black'      => 'Black',
        'white'      => 'White',
      ),
    ),

    array(
      'id'           => 'dep_14',
      'type'         => 'select',
      'title'        => 'If size <u>middle</u>',
      'options'      => array(
        'small'      => 'Small',
        'middle'     => 'Middle',
        'large'      => 'Large',
        'xlage'      => 'XLarge',
      ),
    ),

    array(
      'id'           => 'dep_15',
      'type'         => 'select',
      'title'        => 'If text is <u>world</u>',
      'options'      => array(
        'hello'      => 'Hello',
        'world'      => 'World',
      ),
      'dependency'   => array( 'dep_13|dep_14', 'any|==', 'black,white|middle' ),
    ),

    array(
      'id'           => 'dummy_11',
      'type'         => 'notice',
      'class'        => 'info',
      'content'      => 'Well done, Correctly!',
      'dependency'   => array( 'dep_15', '==', 'world' ),
    ),
    // ------------------------------------

  ),
);

// ------------------------------
// a seperator                  -
// ------------------------------
$options[] = array(
  'name'   => 'seperator_2',
  'title'  => 'Section Examples',
  'icon'   => 'fa fa-cog'
);

// ------------------------------
// normal section               -
// ------------------------------
$options[]   = array(
  'name'     => 'normal_section',
  'title'    => 'Normal Section',
  'icon'     => 'fa fa-minus',
  'fields'   => array(

    array(
      'type'    => 'content',
      'content' => 'This section is empty, add some options...',
    ),

  )
);

// ------------------------------
// accordion sections           -
// ------------------------------
$options[]   = array(
  'name'     => 'accordion_section',
  'title'    => 'Accordion Sections',
  'icon'     => 'fa fa-bars',
  'sections' => array(

    // sub section 1
    array(
      'name'     => 'sub_section_1',
      'title'    => 'Sub Sections 1',
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        array(
          'type'    => 'content',
          'content' => 'This section is empty, add some options...',
        ),

      )
    ),

    // sub section 2
    array(
      'name'     => 'sub_section_2',
      'title'    => 'Sub Sections 2',
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        array(
          'type'    => 'content',
          'content' => 'This section is empty, add some options...',
        ),

      )
    ),

    // sub section 3
    array(
      'name'     => 'sub_section_3',
      'title'    => 'Sub Sections 3',
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        array(
          'type'    => 'content',
          'content' => 'This section is empty, add some options...',
        ),

      )
    ),

  ),
);

// ------------------------------
// a seperator                  -
// ------------------------------
$options[] = array(
  'name'   => 'seperator_3',
  'title'  => 'Others',
  'icon'   => 'fa fa-gift'
);

// ------------------------------
// donate                       -
// ------------------------------
$options[]   = array(
  'name'     => 'donate_section',
  'title'    => 'Donate',
  'icon'     => 'fa fa-heart',
  'fields'   => array(

    array(
      'type'    => 'heading',
      'content' => 'You Guys!'
    ),

    array(
      'type'    => 'content',
      'content' => 'If you want to see more functions and features for this framework, you can buy me a coffee. I need a lot of it when I am creating new stuff for you. Thank you in advance.',
    ),

    array(
      'type'    => 'content',
      'content' => '<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=56MAQNCNELP8J" target="_blank"><img src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" alt="Donate" /></a>',
    ),

  )
);
 
// ------------------------------
// license                      -
// ------------------------------
$options[]   = array(
  'name'     => 'license_section',
  'title'    => 'License',
  'icon'     => 'fa fa-info-circle',
  'fields'   => array(

    array(
      'type'    => 'heading',
      'content' => '100% GPL License, Yes it is free!'
    ),
    array(
      'type'    => 'content',
      'content' => 'Codestar Framework is <strong>free</strong> to use both personal and commercial. If you used commercial, <strong>please credit</strong>. Read more about <a href="http://www.gnu.org/licenses/gpl-2.0.txt" target="_blank">GNU License</a>',
    ),

  )
);

CSFramework::instance( $settings, $options );
