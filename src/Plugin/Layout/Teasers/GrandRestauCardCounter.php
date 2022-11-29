<?php

namespace Drupal\grandrestaurant\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * A custom teaser from grandrestaurant module
 *
 * @Layout(
 *   id = "grandrestaurant_card_counter",
 *   label = @Translation(" Grand Restaurant : Card Counter "),
 *   category = @Translation("grandrestaurant"),
 *   path = "layouts/teasers",
 *   template = "grandrestaurant_card_counter",
 *   library = "grandrestaurant/grandrestaurant_card_counter",
 *   default_region = "card_counter_text",
 *   regions = {
 *     "card_counter_number" = {
 *       "label" = @Translation("card_counter_number"),
 *      },
 *     "card_counter_text" = {
 *       "label" = @Translation("card_counter_text"),
 *     },
 *   }
 * )
 */
class GrandRestauCardCounter extends FormatageModelsTeasers {
  
    /**
    *
    * {@inheritdoc}
    * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
    */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'grandrestaurant') . "/icones/teasers/grandrestaurant_card_counter.png");
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
            'infos' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Formulaire de contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'card_counter_number' => [
                        'text_html' => [
                            'label' => 'Counter Number',
                            'value' => '25'
                        ]
                    ],
                    'card_counter_text' => [
                        'text_html' => [
                            'label' => 'Counter Text',
                            'value' => 'YEARS OF EXPERIENCE'
                        ]
                    ]
                ]
            ]
        ] + parent::defaultConfiguration();
    }
  
}