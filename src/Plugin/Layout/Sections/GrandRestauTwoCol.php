<?php

namespace Drupal\grandrestaurant\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * A mitor hero section layout from grandrestaurant
 *
 * @Layout(
 *   id = "grandrestaurant_twoCol_section",
 *   label = @Translation(" GrandRestaurant : TwoCol "),
 *   category = @Translation("grandrestaurant"),
 *   path = "layouts/sections",
 *   template = "grandrestaurant_twoCol_section",
 *   library = "grandrestaurant/grandrestaurant_twoCol_section",
 *   default_region = "col_one",
 *   regions = {
 *     "col_one" = {
 *       "label" = @Translation("col_one"),
 *     },
 *     "col_two" = {
 *       "label" = @Translation("col_two"),
 *     },
 *   }
 * )
 */

class GrandRestauTwoCol extends FormatageModelsSection {

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'grandrestaurant') . "/icones/sections/grandrestaurant_twoCol_section.png");
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
                    'grandrestaurant-footer--no-svg' => 'no-svg',
                ]
            ],
            'infos' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Texte information',
                    'loader' => 'static'
                ],
                'fields' => [
                    'col_one' => [
                        'text_html' => [
                            'label' => 'Column 1',
                            'value' => ''
                        ]
                    ],
                    'col_one' => [
                        'text_html' => [
                            'label' => 'Column 2',
                            'value' => ''
                        ]
                    ],
                ]
            ]
        ] + parent::defaultConfiguration();
    }

}