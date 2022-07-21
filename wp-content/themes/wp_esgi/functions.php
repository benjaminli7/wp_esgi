<?php

function esgi_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'esgi_theme_support');

function esgi_register_nav_menus()
{
    register_nav_menus([
        'primary' => __('Primary Menu', 'ESGI'),
        'footer'  => __('Footer Menu', 'ESGI'),
    ]);
}
add_action('after_setup_theme', 'esgi_register_nav_menus', 0);

function esgi_enqueue_assets()
{
    wp_enqueue_style('main', get_stylesheet_uri());
    wp_enqueue_script('mainJS', get_template_directory_uri() . '/assets/js/main.js');
    $variables = [
        'ajaxURL' => admin_url('admin-ajax.php')
    ];
    wp_localize_script('mainJS', 'esgi', $variables);
}
add_action('wp_enqueue_scripts', 'esgi_enqueue_assets');

function getIcon($name)
{

    $twitter = '<svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M18 1.6875C17.325 2.025 16.65 2.1375 15.8625 2.25C16.65 1.8 17.2125 1.125 17.4375 0.225C16.7625 0.675 15.975 0.9 15.075 1.125C14.4 0.45 13.3875 0 12.375 0C10.4625 0 8.775 1.6875 8.775 3.7125C8.775 4.05 8.775 4.275 8.8875 4.5C5.85 4.3875 3.0375 2.925 1.2375 0.675C0.9 1.2375 0.7875 1.8 0.7875 2.5875C0.7875 3.825 1.4625 4.95 2.475 5.625C1.9125 5.625 1.35 5.4 0.7875 5.175C0.7875 6.975 2.025 8.4375 3.7125 8.775C3.375 8.8875 3.0375 8.8875 2.7 8.8875C2.475 8.8875 2.25 8.8875 2.025 8.775C2.475 10.2375 3.825 11.3625 5.5125 11.3625C4.275 12.375 2.7 12.9375 0.9 12.9375C0.5625 12.9375 0.3375 12.9375 0 12.9375C1.6875 13.95 3.6 14.625 5.625 14.625C12.375 14.625 16.0875 9 16.0875 4.1625C16.0875 4.05 16.0875 3.825 16.0875 3.7125C16.875 3.15 17.55 2.475 18 1.6875Z" fill="#1A1A1A"/>
</svg>';

    $facebook = '<svg width="12" height="18" viewBox="0 0 12 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M3.4008 18L3.375 10.125H0V6.75H3.375V4.5C3.375 1.4634 5.25545 0 7.9643 0C9.26187 0 10.3771 0.0966038 10.7021 0.139781V3.3132L8.82333 3.31406C7.35011 3.31406 7.06485 4.01411 7.06485 5.04139V6.75H11.25L10.125 10.125H7.06484V18H3.4008Z" fill="#1A1A1A"/>
</svg>';

    $google = '<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.12143 7.71429V10.8H14.3929C14.1357 12.0857 12.85 14.6571 9.25 14.6571C6.16429 14.6571 3.72143 12.0857 3.72143 9C3.72143 5.91429 6.29286 3.34286 9.25 3.34286C11.05 3.34286 12.2071 4.11429 12.85 4.75714L15.2929 2.44286C13.75 0.9 11.6929 0 9.25 0C4.23571 0 0.25 3.98571 0.25 9C0.25 14.0143 4.23571 18 9.25 18C14.3929 18 17.8643 14.4 17.8643 9.25714C17.8643 8.61429 17.8643 8.22857 17.7357 7.71429H9.12143Z" fill="#1A1A1A"/>
</svg>';

    $linkedin = '<svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17.9698 0H1.64687C1.19966 0 0.864258 0.335404 0.864258 0.782609V17.2174C0.864258 17.5528 1.19966 17.8882 1.64687 17.8882H18.0816C18.5289 17.8882 18.8643 17.5528 18.8643 17.1056V0.782609C18.7525 0.335404 18.4171 0 17.9698 0ZM3.54749 15.205V6.70807H6.23072V15.205H3.54749ZM4.8891 5.59006C3.99469 5.59006 3.32389 4.80745 3.32389 4.02484C3.32389 3.13043 3.99469 2.45963 4.8891 2.45963C5.78351 2.45963 6.45432 3.13043 6.45432 4.02484C6.34252 4.80745 5.67171 5.59006 4.8891 5.59006ZM16.0692 15.205H13.386V11.0683C13.386 10.0621 13.386 8.8323 12.0444 8.8323C10.7028 8.8323 10.4792 9.95031 10.4792 11.0683V15.3168H7.79593V6.70807H10.3674V7.82609C10.7028 7.15528 11.5972 6.48447 12.827 6.48447C15.5102 6.48447 15.9574 8.27329 15.9574 10.5093V15.205H16.0692Z" fill="#1A1A1A"/>
</svg>';


    return $$name;
}

// AJOUT DE PARAMETRES DE THEMES

function esgi_customize_register($wp_customize)
{
    $wp_customize->add_section('image-paragraph', [
        'title' => __('Section Image & Paragraphe'),
        'description' => __('Section Image & Paragraphe.'),
        'priority' => 1,
        'capability' => 'edit_theme_options',
    ]);

    // display image paragraph
    $wp_customize->add_setting('display-image-paragraph', [
        'default' => 'No',
        'sanitize_callback' => 'sanitize_custom_option',
    ]);

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'display-image-paragraph',
            [
                'label'      => __('Afficher la section Image & Paragraphe', 'ESGI'),
                'section'    => 'image-paragraph',
                'settings'   => 'display-image-paragraph',
                'type' => 'select',
                'choices' => [
                    'Yes' => 'Oui',
                    'No' => 'Non',
                ],
            ]
        )
    );

    // Text block image paragraph
    $wp_customize->add_setting('title-1-image-paragraph', array(
        'sanitize_callback' => 'sanitize_text'
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'title-1-image-paragraph',
            array(
                'label'    => __('Titre 1'),
                'section'  => 'image-paragraph',
                'settings' => 'title-1-image-paragraph',
                'type'     => 'text'
            )
        )
    );

    $wp_customize->add_setting('paragraph-1-image-paragraph', array(
        'sanitize_callback' => 'sanitize_text'
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'paragraph-1-image-paragraph',
            array(
                'label'    => __('Paragraphe 1'),
                'section'  => 'image-paragraph',
                'settings' => 'paragraph-1-image-paragraph',
                'type'     => 'text'
            )
        )
    );

    $wp_customize->add_setting('title-2-image-paragraph', array(
        'sanitize_callback' => 'sanitize_text'
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'title-2-image-paragraph',
            array(
                'label'    => __('Titre 2'),
                'section'  => 'image-paragraph',
                'settings' => 'title-2-image-paragraph',
                'type'     => 'text'
            )
        )
    );

    $wp_customize->add_setting('paragraph-2-image-paragraph', array(
        'sanitize_callback' => 'sanitize_text'
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'paragraph-2-image-paragraph',
            array(
                'label'    => __('Paragraphe 2'),
                'section'  => 'image-paragraph',
                'settings' => 'paragraph-2-image-paragraph',
                'type'     => 'text'
            )
        )
    );

    $wp_customize->add_setting('title-3-image-paragraph', array(
        'sanitize_callback' => 'sanitize_text'
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'title-3-image-paragraph',
            array(
                'label'    => __('Titre 3'),
                'section'  => 'image-paragraph',
                'settings' => 'title-3-image-paragraph',
                'type'     => 'text'
            )
        )
    );

    $wp_customize->add_setting('paragraph-3-image-paragraph', array(
        'sanitize_callback' => 'sanitize_text'
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'paragraph-3-image-paragraph',
            array(
                'label'    => __('Paragraphe 3'),
                'section'  => 'image-paragraph',
                'settings' => 'paragraph-3-image-paragraph',
                'type'     => 'text'
            )
        )
    );
    // Image block image paragraph

    $wp_customize->add_setting('image-block-image-paragraph', array(
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'image-block-image-paragraph', array(
        'label' => 'Upload Image',
        'section' => 'image-paragraph',
        'settings' => 'image-block-image-paragraph',
        'button_labels' => array( // All These labels are optional
            'select' => 'Select Image',
            'remove' => 'Remove Image',
            'change' => 'Change Image',
        )
    )));

    // Section Our Services



    $wp_customize->add_section('our-services', [
        'title' => __('Section Our Services'),
        'description' => __('Section Our Services.'),
        'priority' => 1,
        'capability' => 'edit_theme_options',
    ]);

    // display image paragraph
    $wp_customize->add_setting('display-our-services', [
        'default' => 'No',
        'sanitize_callback' => 'sanitize_custom_option',
    ]);

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'display-our-services',
            [
                'label'      => __('Afficher la section Our Services', 'ESGI'),
                'section'    => 'our-services',
                'settings'   => 'display-our-services',
                'type' => 'select',
                'choices' => [
                    'Yes' => 'Oui',
                    'No' => 'Non',
                ],
            ]
        )
    );

    $wp_customize->add_setting('services-title', array(
        'sanitize_callback' => 'sanitize_text'
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'services-title',
            array(
                'label'    => __('Titre'),
                'section'  => 'our-services',
                'settings' => 'services-title',
                'type'     => 'text'
            )
        )
    );

    $wp_customize->add_setting('services-image-1', array(
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'services-image-1', array(
        'label' => 'Image 1',
        'section' => 'our-services',
        'settings' => 'services-image-1',
        'button_labels' => array(
            'select' => 'Select Image',
            'remove' => 'Remove Image',
            'change' => 'Change Image',
        )
    )));

    $wp_customize->add_setting('services-image-2', array(
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'services-image-2', array(
        'label' => 'Image 2',
        'section' => 'our-services',
        'settings' => 'services-image-2',
        'button_labels' => array(
            'select' => 'Select Image',
            'remove' => 'Remove Image',
            'change' => 'Change Image',
        )
    )));


    $wp_customize->add_setting('services-text', array(
        'sanitize_callback' => 'sanitize_text'
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'services-text',
            array(
                'label'    => __('Texte'),
                'section'  => 'our-services',
                'settings' => 'services-text',
                'type'     => 'text'
            )
        )
    );


    $wp_customize->add_setting('services-image-3', array(
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'services-image-3', array(
        'label' => 'Image 3',
        'section' => 'our-services',
        'settings' => 'services-image-3',
        'button_labels' => array(
            'select' => 'Select Image',
            'remove' => 'Remove Image',
            'change' => 'Change Image',
        )
    )));

    // Section Our Partners
    $wp_customize->add_section('our-partners', [
        'title' => __('Section Our Partners'),
        'description' => __('Section Our Partners'),
        'priority' => 1,
        'capability' => 'edit_theme_options',
    ]);

    // display image paragraph
    $wp_customize->add_setting('display-our-partners', [
        'default' => 'No',
        'sanitize_callback' => 'sanitize_custom_option',
    ]);

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'display-our-partners',
            [
                'label'      => __('Afficher la section Our Partners', 'ESGI'),
                'section'    => 'our-partners',
                'settings'   => 'display-our-partners',
                'type' => 'select',
                'choices' => [
                    'Yes' => 'Oui',
                    'No' => 'Non',
                ],
            ]
        )
    );

    $wp_customize->add_setting('partners-title', array(
        'sanitize_callback' => 'sanitize_text'
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'partners-title',
            array(
                'label'    => __('Titre'),
                'section'  => 'our-partners',
                'settings' => 'partners-title',
                'type'     => 'text'
            )
        )
    );

    $wp_customize->add_setting('partners-logo-1', array(
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'partners-logo-1', array(
        'label' => 'Logo 1',
        'section' => 'our-partners',
        'settings' => 'partners-logo-1',
        'button_labels' => array(
            'select' => 'Select Logo',
            'remove' => 'Remove Logo',
            'change' => 'Change Logo',
        )
    )));

    $wp_customize->add_setting('partners-logo-2', array(
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'partners-logo-2', array(
        'label' => 'Logo 2',
        'section' => 'our-partners',
        'settings' => 'partners-logo-2',
        'button_labels' => array(
            'select' => 'Select Logo',
            'remove' => 'Remove Logo',
            'change' => 'Change Logo',
        )
    )));

    $wp_customize->add_setting('partners-logo-3', array(
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'partners-logo-3', array(
        'label' => 'Logo 3',
        'section' => 'our-partners',
        'settings' => 'partners-logo-3',
        'button_labels' => array(
            'select' => 'Select Logo',
            'remove' => 'Remove Logo',
            'change' => 'Change Logo',
        )
    )));

    $wp_customize->add_setting('partners-logo-4', array(
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'partners-logo-4', array(
        'label' => 'Logo 4',
        'section' => 'our-partners',
        'settings' => 'partners-logo-4',
        'button_labels' => array(
            'select' => 'Select Logo',
            'remove' => 'Remove Logo',
            'change' => 'Change Logo',
        )
    )));

    $wp_customize->add_setting('partners-logo-5', array(
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'partners-logo-5', array(
        'label' => 'Logo 5',
        'section' => 'our-partners',
        'settings' => 'partners-logo-5',
        'button_labels' => array(
            'select' => 'Select Logo',
            'remove' => 'Remove Logo',
            'change' => 'Change Logo',
        )
    )));

    $wp_customize->add_setting('partners-logo-6', array(
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'partners-logo-6', array(
        'label' => 'Logo 6',
        'section' => 'our-partners',
        'settings' => 'partners-logo-6',
        'button_labels' => array(
            'select' => 'Select Logo',
            'remove' => 'Remove Logo',
            'change' => 'Change Logo',
        )
    )));

    // Section Our Team
    $wp_customize->add_section('our-team', [
        'title' => __('Section Our Team'),
        'description' => __('Section Our Team'),
        'priority' => 1,
        'capability' => 'edit_theme_options',
    ]);

    // display our team
    $wp_customize->add_setting('display-our-team', [
        'default' => 'No',
        'sanitize_callback' => 'sanitize_custom_option',
    ]);

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'display-our-team',
            [
                'label'      => __('Afficher la section Our Team', 'ESGI'),
                'section'    => 'our-team',
                'settings'   => 'display-our-team',
                'type' => 'select',
                'choices' => [
                    'Yes' => 'Oui',
                    'No' => 'Non',
                ],
            ]
        )
    );



    $wp_customize->add_setting('our-team-title', array(
        'sanitize_callback' => 'sanitize_text'
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'our-team-title',
            array(
                'label'    => __('Titre'),
                'section'  => 'our-team',
                'settings' => 'our-team-title',
                'type'     => 'text'
            )
        )
    );

    $wp_customize->add_setting('our-team-image-1', array(
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'our-team-image-1', array(
        'label' => 'Photo 1',
        'section' => 'our-team',
        'settings' => 'our-team-image-1',
        'button_labels' => array(
            'select' => 'Select Photo',
            'remove' => 'Remove Photo',
            'change' => 'Change Photo',
        )
    )));


    $wp_customize->add_setting('our-team-job-1', array(
        'sanitize_callback' => 'sanitize_text'
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'our-team-job-1',
            array(
                'label'    => __('Profession 1'),
                'section'  => 'our-team',
                'settings' => 'our-team-job-1',
                'type'     => 'text'
            )
        )
    );

    $wp_customize->add_setting('our-team-phone-1', array(
        'sanitize_callback' => 'sanitize_text'
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'our-team-phone-1',
            array(
                'label'    => __('Téléphone 1'),
                'section'  => 'our-team',
                'settings' => 'our-team-phone-1',
                'type'     => 'text'
            )
        )
    );


    $wp_customize->add_setting('our-team-mail-1', array(
        'sanitize_callback' => 'sanitize_text'
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'our-team-mail-1',
            array(
                'label'    => __('Email 1'),
                'section'  => 'our-team',
                'settings' => 'our-team-mail-1',
                'type'     => 'text'
            )
        )
    );






    $wp_customize->add_setting('our-team-image-2', array(
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'our-team-image-2', array(
        'label' => 'Photo 2',
        'section' => 'our-team',
        'settings' => 'our-team-image-2',
        'button_labels' => array(
            'select' => 'Select Photo',
            'remove' => 'Remove Photo',
            'change' => 'Change Photo',
        )
    )));


    $wp_customize->add_setting('our-team-job-2', array(
        'sanitize_callback' => 'sanitize_text'
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'our-team-job-2',
            array(
                'label'    => __('Profession 2'),
                'section'  => 'our-team',
                'settings' => 'our-team-job-2',
                'type'     => 'text'
            )
        )
    );

    $wp_customize->add_setting('our-team-phone-2', array(
        'sanitize_callback' => 'sanitize_text'
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'our-team-phone-2',
            array(
                'label'    => __('Téléphone 2'),
                'section'  => 'our-team',
                'settings' => 'our-team-phone-2',
                'type'     => 'text'
            )
        )
    );


    $wp_customize->add_setting('our-team-mail-2', array(
        'sanitize_callback' => 'sanitize_text'
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'our-team-mail-2',
            array(
                'label'    => __('Email 2'),
                'section'  => 'our-team',
                'settings' => 'our-team-mail-2',
                'type'     => 'text'
            )
        )
    );




    $wp_customize->add_setting('our-team-image-3', array(
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'our-team-image-3', array(
        'label' => 'Photo 3',
        'section' => 'our-team',
        'settings' => 'our-team-image-3',
        'button_labels' => array(
            'select' => 'Select Photo',
            'remove' => 'Remove Photo',
            'change' => 'Change Photo',
        )
    )));


    $wp_customize->add_setting('our-team-job-3', array(
        'sanitize_callback' => 'sanitize_text'
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'our-team-job-3',
            array(
                'label'    => __('Profession 3'),
                'section'  => 'our-team',
                'settings' => 'our-team-job-3',
                'type'     => 'text'
            )
        )
    );

    $wp_customize->add_setting('our-team-phone-3', array(
        'sanitize_callback' => 'sanitize_text'
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'our-team-phone-3',
            array(
                'label'    => __('Téléphone 3'),
                'section'  => 'our-team',
                'settings' => 'our-team-phone-3',
                'type'     => 'text'
            )
        )
    );


    $wp_customize->add_setting('our-team-mail-3', array(
        'sanitize_callback' => 'sanitize_text'
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'our-team-mail-3',
            array(
                'label'    => __('Email 3'),
                'section'  => 'our-team',
                'settings' => 'our-team-mail-3',
                'type'     => 'text'
            )
        )
    );





    $wp_customize->add_setting('our-team-image-4', array(
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'our-team-image-4', array(
        'label' => 'Photo 4',
        'section' => 'our-team',
        'settings' => 'our-team-image-4',
        'button_labels' => array(
            'select' => 'Select Photo',
            'remove' => 'Remove Photo',
            'change' => 'Change Photo',
        )
    )));


    $wp_customize->add_setting('our-team-job-4', array(
        'sanitize_callback' => 'sanitize_text'
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'our-team-job-4',
            array(
                'label'    => __('Profession 4'),
                'section'  => 'our-team',
                'settings' => 'our-team-job-4',
                'type'     => 'text'
            )
        )
    );

    $wp_customize->add_setting('our-team-phone-4', array(
        'sanitize_callback' => 'sanitize_text'
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'our-team-phone-4',
            array(
                'label'    => __('Téléphone 4'),
                'section'  => 'our-team',
                'settings' => 'our-team-phone-4',
                'type'     => 'text'
            )
        )
    );


    $wp_customize->add_setting('our-team-mail-4', array(
        'sanitize_callback' => 'sanitize_text'
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'our-team-mail-4',
            array(
                'label'    => __('Email 4'),
                'section'  => 'our-team',
                'settings' => 'our-team-mail-4',
                'type'     => 'text'
            )
        )
    );

    $wp_customize->add_section('image-full-width', [
        'title' => __('Image full width'),
        'description' => __('Image full width.'),
        'priority' => 1,
        'capability' => 'edit_theme_options',
    ]);

    $wp_customize->add_setting('display-image-full-width', [
        'default' => 'No',
        'sanitize_callback' => 'sanitize_custom_option',
    ]);

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'display-image-full-width',
            [
                'label'      => __('Afficher la section Image full width', 'ESGI'),
                'section'    => 'image-full-width',
                'settings'   => 'display-image-full-width',
                'type' => 'select',
                'choices' => [
                    'Yes' => 'Oui',
                    'No' => 'Non',
                ],
            ]
        )
    );

    
    $wp_customize->add_setting('image-full', array(
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'image-full', array(
        'label' => 'Image',
        'section' => 'image-full-width',
        'settings' => 'image-full',
        'button_labels' => array(
            'select' => 'Select Image',
            'remove' => 'Remove Image',
            'change' => 'Change Image',
        )
    )));


}

add_action('customize_register', 'esgi_customize_register');

// WIDGETS

function esgi_widgets_init(){
    if ( function_exists('register_sidebar') )
      register_sidebar([
        'id' => 'zone-1',
        'name' => 'Zone des widgets de la sidebar',
        'before_widget' => '<div class = "widget-zone">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
      ]
    );
}
add_action('widgets_init', 'esgi_widgets_init');



function sanitize_custom_option($val)
{
    return ($val === "No") ? "No" : "Yes";
}

function sanitize_text($text)
{
    return sanitize_text_field($text);
}
