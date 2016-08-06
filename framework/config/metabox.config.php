<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();

// -----------------------------------------
// Product Metabox Options                 -
// -----------------------------------------
$options[]    = array(
  'id'        => 'meta-product',
  'title'     => 'Meta Product',
  'post_type' => 'product',
  'context'   => 'side',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'section_4',
      'fields' => array(

        array(
          'id'             => 'select-size',
          'type'           => 'select',
          'title'          => 'Select Size',
          'options'        => array(
            'S'           => 'S',
            'M'           => 'M',
            'L'           => 'L',
            'XL'          => 'XL',
            'XXL'         => 'XXL'
          ),
          'default_option' => 'Select Size',
        ),

      ),
    ),

  ),
);

// -----------------------------------------
// Product-Retargeting Metabox Options                 -
// -----------------------------------------
$options[]    = array(
  'id'        => 'meta-product-retargeting',
  'title'     => 'Meta Product Retargeting Pixel',
  'post_type' => 'product',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'section_4',
      'fields' => array(

        array(
          'id'             => 'product-retargeting',
          'type'           => 'textarea',
          'title'          => 'Your Retargeting Pixel Code',
        ),

      ),
    ),

  ),
);

CSFramework_Metabox::instance( $options );
