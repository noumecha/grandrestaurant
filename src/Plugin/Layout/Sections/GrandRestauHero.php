<?php

namespace Drupal\grandrestaurant\Plugin\Layout\Sections;

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
 *   library = "grandrestaurant/grandrestaurant_hero_section",
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
 *     "hero_actions_link" = {
 *       "label" = @Translation("hero_actions_link"),
 *     },
 *     "hero_actions_text" = {
 *       "label" = @Translation("hero_actions_text"),
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
                    'grandrestaurant-hero--middle-svg-bottom' => 'mmiddle-svg-bottom',
                    'grandrestaurant-hero--middle-svg-top' => 'middle-svg-top',
                    'grandrestaurant-hero--top-no-desc' => 'no-desc',
                    'grandrestaurant-hero--middle-no-svg' => 'no-svg',
                    'grandrestaurant-hero--middle-actions-top' => 'middle-actions-top',
                    'grandrestaurant-hero--middle-actions-bottom' => 'middle-actions-bottom',
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
                    'hero_actions_link' => [
                        'url' => [
                            'label' => 'action link',
                            'value' => [
                                'class' => 'actions_link',
                                'text' => 'Make an Online Reservation',
                                'href' => '#',
                            ]
                        ]
                    ],
                    'hero_actions_text' => [
                        'url' => [
                            'label' => 'action text',
                            'value' => [
                                'class' => 'actions_text',
                                'text' => 'or call us +237 696 879 475',
                                'href' => '#',
                            ]
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