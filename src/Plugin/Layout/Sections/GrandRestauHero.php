<?php

namespace Drupal\mit_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * A mitor hero section layout from grandrestaurant
 *
 * @Layout(
 *   id = "grandrestaurant_hero_section",
 *   label = @Translation(" GrandRestaurant : Hero "),
 *   category = @Translation("grandrestaurant"),
 *   path = "layouts/sections",
 *   template = "grandrestaurant_hero_section",
 *   library = "mit_models/grandrestaurant_hero_section",
 *   default_region = "hero_subtitle",
 *   regions = {
 *     "hero_subtitle" = {
 *       "label" = @Translation("hero_subtitle"),
 *     },
 *     "hero_title" = {
 *       "label" = @Translation("hero_title"),
 *     },
 *     "hero_description" = {
 *       "label" = @Translation("hero_description"),
 *     },
 *     "hero_bg_image" = {
 *       "label" = @Translation("hero_bg_image"),
 *     },
 *   }
 * )
 */

class GrandRestauHero extends FormatageModelsSection {

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'grandrestaurant') . "/icones/sections/grandrestaurant_hero_section.png");
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
            'load_libray' => true,
            'region_tag_title' => 'h1',
            'derivate' => [
                'value' => 'select',
                'options' => [
                    'grandrestaurant-hero--top' => 'top-svg',
                ]
            ],
            'infos' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Texte information',
                    'loader' => 'static'
                ],
                'fields' => [
                    'hero_subtitle' => [
                        'text_html' => [
                            'label' => 'Sous titre',
                            'value' => 'Welcome to'
                        ]
                    ],
                    'hero_title' => [
                        'text_html' => [
                            'label' => 'Titre',
                            'value' => 'grand restaurant'
                        ]
                    ],
                    'hero_description' => [
                        'text_html' => [
                            'label' => 'Description',
                            'value' => 'MAKING THE DELICIOUS PREMIUM FOOD SINCE 1990
                            BOOK ONLINE OR CALL (1800)456-6743'
                        ]
                    ],
                    'hero_bg_image' => [
                        'img_bg' => [
                            'label' => 'Image Background',
                        ]
                    ]
                ]
            ]
        ] + parent::defaultConfiguration();
    }

}