<?php
/* Theme Options page: */

$main_tab = array(
  "name" => "main_options",
  "title" => __("Theme Options"),
  'sections' => array(
                      'header' => array(
                                        'name' => 'header',
                                        'title' => __( 'Header Options' ),
                                        'description' => __( 'Set Options for Header used throughout site.')
                                        ),
                      'home_page_slider' => array(
                                                  'name' => 'home_page_slider',
                                                  'title' => __( 'Home Page Slider Options' ),
                                                  'description' => __( 'Set Options for Slider.')
                                                  ),
                      'home_page_callouts' => array(
                                                    'name' => 'home_page_callouts',
                                                    'title' => __( 'Home Page Callout Options' ),
                                                    'description' => __( 'Set Options for homepage callouts.')
                                                    ),
                      'home_page_standards' => array(
                                                     'name' => 'home_page_standards',
                                                     'title' => __( 'Home Page Additional Services' ),
                                                     'description' => __( 'Set services to be displayed on "Why Choose AASI".')
                                                     ),
                      'business_information' => array(
                                                      'name' => 'business_information',
                                                      'title' => __( 'Business Information' ),
                                                      'description' => __( 'Set general business information about company.')
                                                      )
                      ),
);
register_theme_option_tab($main_tab);

$mainoptions = array(
  "site_logo" => array(
                      "tab" => "main_options",
                      "name" => "site_logo",
                      "title" => "Site Logo",
                      "description" => __( "Upload logo to be used in header" ),
                      "section" => "header",
                      "id" => "site_logo",
                      "type" => "image"
                    ),
  "home_page_slider_image1" => array(
                                    "tab" => "main_options",
                                    "name" => "home_page_slider_image1",
                                    "title" => "Slider Image 1",
                                    "description" => __( "Upload logo to be used in header", "example" ),
                                    "section" => "home_page_slider",
                                    "id" => "slider_image_1",
                                    "type" => "image"
                                  ),
  "home_page_slider_image2" => array(
                                    "tab" => "main_options",
                                    "name" => "home_page_slider_image2",
                                    "title" => "Slider Image 2",
                                    "description" => __( "Upload logo to be used in header", "example" ),
                                    "section" => "home_page_slider",
                                    "id" => "slider_image_2",
                                    "type" => "image"
                                  ),
  "home_page_slider_image3" => array(
                                    "tab" => "main_options",
                                    "name" => "home_page_slider_image3",
                                    "title" => "Slider Image 3",
                                    "description" => __( "Upload logo to be used in header", "example" ),
                                    "section" => "home_page_slider",
                                    "id" => "slider_image_3",
                                    "type" => "image"
                                  ),
  "facebook" => array(
                     "tab" => "main_options",
                     "name" => "facebook",
                     "title" => "Facebook Profile",
                     "description" => __( "Enter the company Facebook URL" ),
                     "section" => "business_information",
                     "id" => "facebook",
                     "type" => "text"
                     ),
  "twitter" => array(
                    "tab" => "main_options",
                    "name" => "twitter",
                    "title" => "Twitter Page",
                    "description" => __( "Enter the company Twitter" ),
                    "section" => "business_information",
                    "id" => "twitter",
                    "type" => "text"
                    ),
  "linkedin" => array(
                   "tab" => "main_options",
                   "name" => "linkedin",
                   "title" => "LinkedIn Profile",
                   "description" => __( "Enter the company LinkedIn URL" ),
                   "section" => "business_information",
                   "id" => "linkedin",
                   "type" => "text"
                   ),
  "googleplus" => array(
                   "tab" => "main_options",
                   "name" => "googleplus",
                   "title" => "Google+ Profile",
                   "description" => __( "Enter the company Google+ URL" ),
                   "section" => "business_information",
                   "id" => "googleplus",
                   "type" => "text"
                   ),
  "office_location" => array(
                            "tab" => "main_options",
                            "name" => "office_location",
                            "title" => "Office Location",
                            "description" => __( "Enter office location which will be used for displaying on Google Map for site." ),
                            "section" => "business_information",
                            "id" => "office_location",
                            "type" => "text"
                          )
);
register_theme_options($mainoptions);