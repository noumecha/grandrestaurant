<?php

namespace Drupal\grandrestaurant\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * A custom teaser from grandrestaurant module
 *
 * @Layout(
 *   id = "grandrestaurant_card_teaser",
 *   label = @Translation(" Grand Restaurant : Card Teaser "),
 *   category = @Translation("grandrestaurant"),
 *   path = "layouts/teasers",
 *   template = "grandrestaurant_card_teaser",
 *   library = "grandrestaurant/grandrestaurant_card_teaser",
 *   default_region = "card_teaser_image",
 *   regions = {
 *     "card_teaser_image" = {
 *       "label" = @Translation("card_teaser_image"),
 *      },
 *     "card_teaser_title" = {
 *       "label" = @Translation("card_teaser_title"),
 *     },
 *     "card_teaser_title_two" = {
 *       "label" = @Translation("card_teaser_title_two"),
 *     },
 *     "card_teaser_icone" = {
 *       "label" = @Translation("card_teaser_icone"),
 *     },
 *     "card_teaser_desc" = {
 *       "label" = @Translation("card_teaser_desc"),
 *     },
 *     "card_teaser_link" = {
 *       "label" = @Translation("card_teaser_link"),
 *     },
 *   }
 * )
 */
class GrandRestauCardTeaser extends FormatageModelsTeasers {
  
    /**
    *
    * {@inheritdoc}
    * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
    */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'grandrestaurant') . "/icones/teasers/grandrestaurant_card_teaser.png");
    }
  
    /**
    *
    * {@inheritdoc}
    * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::build()
    */
    public function build(array $regions) {
        // TODO Auto-generated method stub
        $build = parent::build($regions);
        FormatageModelsThemes::formatSettingValues($build);
        return $build;
    }
    /**
    * 
    * {@inheritdoc}
    * 
    */
    function defaultConfiguration() {
        return [
            'load_library' => true,
            'derivate' => [
                'value' => 'select',
                'options' => [
                    'grandrestaurant-card-teaser--four' => 'four-image',
                    'grandrestaurant-card-teaser--reverse' => 'reverse',
                    'grandrestaurant-card-teaser--reverse grandrestaurant-card-teaser--four'=> 'four-image-revese',
                ]
            ],
            'infos' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Formulaire de contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'card_teaser_image' => [
                        'text_html' => [
                            'label' => 'Images',
                            'value' => '<div class="grandrestaurant-card-teaser__imgs_single">
                                            <img src="https://themes-themegoods.b-cdn.net/grandrestaurantv6/wp-content/uploads/2020/12/top-view-at-mediterranean-diet-dish-greek-salad-on-KAYHB2U-768x509.jpg" alt="">
                                        </div>
                                        <div class="grandrestaurant-card-teaser__imgs_single">
                                            <img src="https://themes-themegoods.b-cdn.net/grandrestaurantv6/wp-content/uploads/2020/12/chiles-en-nogada-dish-on-mexican-independence-day-PVRJURW-768x512.jpg" alt="">
                                        </div>
                                        <div class="grandrestaurant-card-teaser__imgs_single">
                                            <img src="https://themes-themegoods.b-cdn.net/grandrestaurantv6/wp-content/uploads/2015/04/wesual-click-SrX3-GldyL0-unsplash-768x511.jpg" alt="">
                                        </div>
                                        <div class="grandrestaurant-card-teaser__imgs_single">
                                            <img src="https://themes-themegoods.b-cdn.net/grandrestaurantv6/wp-content/uploads/2020/12/food-RRMP3P6-768x512.jpg" alt="">
                                        </div>'
                        ]
                    ],
                    'card_teaser_title' => [
                        'text_html' => [
                            'label' => 'Title One',
                            'value' => 'checkout '
                        ]
                    ],
                    'card_teaser_title_two' => [
                        'text_html' => [
                            'label' => 'Title Two',
                            'value' => 'our Menu'
                        ]
                    ],
                    'card_teaser_icone' => [
                        'text_html' => [
                            'label' => 'SVG Icone',
                            'value' => ' <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="currentColor" d="M175.094 25.593c-37.263 98.702-18.844 171.333 29.812 231.78c-55.864-32.94-102.02-39.746-176.562-29.5c36.104 103.52 114.96 147.68 199.53 147.72c-11.347 26.98-13.91 56.395-4.374 88.938c36.643-23.08 58.91-47.936 68.906-78.468c35.98 50.032 94.496 84.814 134.625 96.844l14.595 4.687l-2.344-15.187c-2.565-14.66-.2-24.85 5.845-35.063c6.046-10.21 15.88-20.01 28.03-30.937l21.032-18.688l-28.03 2.344c-36.735 3.018-73.025-3.842-108.813-33.906c24.9-.342 49.864-6.29 84.843-16.157c-18.744-22.37-40.422-35.795-64.468-42.594c51.884-67.147 81.588-166.79 52.936-233.063c-82.263 37.32-123.16 89.803-138.75 152.406C280.17 141.16 244.118 77.825 175.094 25.592zm15.125 69.53c23.525 72.024 54.17 141.623 99.28 207.814C351.886 256.397 374.437 198.35 394.187 132c23.69 55.974-11.423 128.012-66.656 182.406c23.724 3.552 53.686 11.745 73.407 18.875c-24.69 5.254-57.005 7.874-83.687 7.5a693.498 693.498 0 0 0 9.937 12.344l.563-.468c38.655 40.348 80.204 53.028 120.875 53.75c-6.873 6.918-14.447 13.48-19.25 21.593c-5.292 8.936-8.076 19.652-8.78 30.968c-33.344-12.87-77.914-40.503-107.75-78.344l-.19.125c-9.727-12.486-18.972-24.776-27.718-36.938c-5.692 29.708-28.95 66.377-48.406 88.625c9.978-28.618 19.846-65.56 23.376-98.72c-69.03 10.948-128.245-7.166-162.562-64.28c55.824 29.773 106.504 51.892 161.906 36.594c-42.415-66.643-67.75-132.218-69.03-210.906z"/></svg> '
                        ]
                    ],
                    'card_teaser_desc' => [
                        'text_html' => [
                            'label' => 'Desc',
                            'value' => '732/21 Second Street, Manchester King Street, Kingston United Kingdom
                                        <div class="contact">
                                            T: +65.4566743
                                        </div>'
                        ]
                    ],
                    'card_teaser_link' => [
                        'url' => [
                            'label' => 'Link',
                            'value' => [
                                'text' => 'get location',
                                'class' => 'linker h4',
                                'href' => '#',
                            ]
                        ]
                    ]
                ]
            ]
        ] + parent::defaultConfiguration();
    }
  
}