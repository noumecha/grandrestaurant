<?php

namespace Drupal\grandrestaurant\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * A mitor hero section layout from grandrestaurant
 *
 * @Layout(
 *   id = "grandrestaurant_grid_gallery",
 *   label = @Translation(" GrandRestaurant : grid gallery "),
 *   category = @Translation("grandrestaurant"),
 *   path = "layouts/sections",
 *   template = "grandrestaurant_grid_gallery",
 *   library = "grandrestaurant/grandrestaurant_grid_gallery",
 *   default_region = "gallery_item",
 *   regions = {
 *     "gallery_item" = {
 *       "label" = @Translation("gallery_item"),
 *     },
 *   }
 * )
 */

class GrandRestauGridGallery extends FormatageModelsSection {

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'grandrestaurant') . "/icones/sections/grandrestaurant_grid_gallery.png");
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
                    'grandrestaurant-grid-gallery' => 'simple',
                    'grandrestaurant-grid-gallery--type-one' => 'type-one',
                    'grandrestaurant-grid-gallery--type-two' => 'type-two',
                    'grandrestaurant-grid-gallery--type-three' => 'type-three',
                ]
            ],
            'infos' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Texte information',
                    'loader' => 'static'
                ],
                'fields' => [
                    'gallery_item' => [
                        'text_html' => [
                            'label' => 'Titre',
                            'value' => 'UNTIL I DISCOVERED COOKING I WAS NEVER REALLY INTERESTED IN ANYTHING'
                        ]
                    ],
                ]
            ]
        ] + parent::defaultConfiguration();
    }

}