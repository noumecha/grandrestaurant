<?php

namespace Drupal\mit_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * A custom teaser from grandrestaurant module
 *
 * @Layout(
 *   id = "grandrestaurant_price_card_teaser",
 *   label = @Translation(" Grand Restaurant : Price Card Teaser "),
 *   category = @Translation("grandrestaurant"),
 *   path = "layouts/teasers",
 *   template = "grandrestaurant_price_card_teaser",
 *   library = "mit_models/grandrestaurant_price_card_teaser",
 *   default_region = "price_card_image",
 *   regions = {
 *     "price_card_image" = {
 *       "label" = @Translation("price_card_image"),
 *      },
 *     "price_card_icone" = {
 *       "label" = @Translation("price_card_icone"),
 *     },
 *     "price_card_title" = {
 *       "label" = @Translation("price_card_title"),
 *     },
 *     "price_card_compo" = {
 *       "label" = @Translation("price_card_compo"),
 *     },
 *     "price_card_price" = {
 *       "label" = @Translation("price_card_price"),
 *     },
 *   }
 * )
 */
class GrandRestauPriceCardTeaser extends FormatageModelsTeasers {
  
    /**
    *
    * {@inheritdoc}
    * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
    */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'grandrestaurant') . "/icones/teasers/grandrestaurant_price_card_teaser.png");
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
                    'price_card_image' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => '<img src="https://themes-themegoods.b-cdn.net/grandrestaurantv6/wp-content/uploads/2015/05/pasta-with-tomato-sauce-and-cheese-ZA26W6C-400x400.jpg" alt="">'
                        ]
                    ],
                    'price_card_icone' => [
                        'text_html' => [
                            'label' => 'Icone',
                            'value' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1664 1664"><path d="M1152 704q0-185-131.5-316.5T704 256T387.5 387.5T256 704t131.5 316.5T704 1152t316.5-131.5T1152 704zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124q-143 0-273.5-55.5t-225-150t-150-225T0 704t55.5-273.5t150-225t225-150T704 0t273.5 55.5t225 150t150 225T1408 704q0 220-124 399l343 343q37 37 37 90z"/></svg>'
                        ]
                    ],
                    'price_card_title' => [
                        'text_html' => [
                            'label' => 'Title',
                            'value' => 'fried potatoes with garlic'
                        ]
                    ],
                    'price_card_compo' => [
                        'text_html' => [
                            'label' => 'Compo',
                            'value' => 'Potatoes / Olive Oil / Galic'
                        ]
                    ],
                    'price_card_price' => [
                        'text_html' => [
                            'label' => 'Price',
                            'value' => '$12.0'
                        ]
                    ]
                ]
            ]
        ] + parent::defaultConfiguration();
    }
  
}