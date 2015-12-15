<?php
// Set Panel ID
$panel_id = 'regina_lite_speak_panel';

// Set Prefix
$prefix = 'regina_lite';

/***********************************************/
/****************** OUR TEAM *******************/
/***********************************************/
$wp_customize->add_panel( $panel_id,
    array(
        'priority'          => 54,
        'capability'        => 'edit_theme_options',
        'theme_supports'    => '',
        'title'             => esc_html__( 'Speak Panel', 'regina-lite' ),
        'description'       => esc_html__( 'Speak Panel description.', 'regina-lite' ),
    )
);

/***********************************************/
/************ GENERAL SECTION *******************/
/***********************************************/
$wp_customize->add_section( $prefix.'_speak_general' ,
    array(
        'title'       => esc_html__( 'General', 'regina-lite' ),
        //'description' => esc_html__( 'General Section description.', 'regina-lite' ),
        'panel'       => $panel_id
    )
);

/* Show this section? */
$wp_customize->add_setting( $prefix.'_speak_general_show',
    array(
        'sanitize_callback' => $prefix.'_sanitize_checkbox',
        'default'           => 1
    )
);
$wp_customize->add_control(
    $prefix.'_speak_general_show',
    array(
        'type'          => 'checkbox',
        'label'         => esc_html__('Show this section?', 'regina-lite'),
        //'description'   => esc_html__('Speak Show description.', 'regina-lite'),
        'section'       => $prefix.'_speak_general',
    )
);

/* Title */
$wp_customize->add_setting($prefix.'_speak_general_title',
    array(
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => __( 'Speak with our doctors', 'regina-lite' )
    )
);
$wp_customize->add_control(
    $prefix.'_speak_general_title',
    array(
        'label'         => esc_html__('Title:', 'regina-lite'),
        //'description'   => esc_html__('Title description.','regina-lite'),
        'section'       => $prefix.'_speak_general'
    )
);

/* Description */
$wp_customize->add_setting($prefix.'_speak_general_description',
    array(
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => __( 'We offer various services lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.', 'regina-lite' )
    )
);
$wp_customize->add_control(
    $prefix.'_speak_general_description',
    array(
        'label'         => esc_html__('Description:', 'regina-lite'),
        //'description'   => esc_html__('Description description.','regina-lite'),
        'section'       => $prefix.'_speak_general',
        'type'			=> 'textarea'
    )
);

/* Button URL */
$wp_customize->add_setting( $prefix.'_speak_general_buttonurl',
    array(
        'sanitize_callback' => 'esc_url',
        'default'           => esc_url('#')
    )
);
$wp_customize->add_control( $prefix.'_speak_general_buttonurl',
    array(
        'label'         => esc_html__( 'Button URL:', 'regina-lite' ),
        //'description'   => esc_html__('Button URL description.', 'regina-lite'),
        'section'       => $prefix.'_speak_general',
        'settings'      => $prefix.'_speak_general_buttonurl',
    )
);