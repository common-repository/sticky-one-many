<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================

// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Sticky Options',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'stickyone_many',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Sticky One-Many Options',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'Stick Many',
  'title'       => 'Stick Many',
  'icon'        => 'fa fa-star',

      'fields'    => array(


        array(
          'id'              => 'stickymany_group',
          'type'            => 'group',
          'title'           => 'Sticky Elements',
          'button_title'    => 'Add New Sticky Element',
          'accordion_title' => 'Add New Sticky Element',
          'fields'          => array(

            array(
              'id'          => 'Stickymany_element',
              'type'        => 'text',
              'title'       => 'Stick',
              'desc'        =>  'Classes Should be Start with . and IDs Should be # '
            ),

            array(
              'id'          => 'StickyMany_topSpacing',
              'type'        => 'text',
              'title'       => 'Top Spacing',
              'desc'        => ' Spacing Measured By px,but do not give here px',
            ),

             array(
              'id'          => 'StickyMany_zindex',
              'type'        => 'text',
              'title'       => 'Z Index',
              'desc'        => ' Spacing Measured By number',
              'default'     => '9999'
            ),

              array(
              'id'          => 'StickyMany_Stopper',
              'type'        => 'text',
              'title'       => 'Where Sticky Will Be Stopped',
              'desc'        => 'Classes Should be Start with . and IDs Should be #'
            ),

          )
        ),

        

  ), // end: fields
);



CSFramework::instance( $settings, $options );
