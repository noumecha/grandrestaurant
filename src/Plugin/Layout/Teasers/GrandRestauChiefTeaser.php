<?php

namespace Drupal\mit_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * A custom teaser from grandrestaurant module
 *
 * @Layout(
 *   id = "grandrestaurant_chief_teaser",
 *   label = @Translation(" Grand Restaurant : Chief Teaser "),
 *   category = @Translation("mit_models"),
 *   path = "layouts/teasers",
 *   template = "grandrestaurant_chief_teaser",
 *   library = "mit_models/grandrestaurant_chief_teaser",
 *   default_region = "chief_title",
 *   regions = {
 *     "chief_title" = {
 *       "label" = @Translation("chief_title"),
 *      },
 *     "chief_image" = {
 *       "label" = @Translation("chief_image"),
 *     },
 *     "chief_post" = {
 *       "label" = @Translation("chief_post"),
 *     },
 *     "chief_name" = {
 *       "label" = @Translation("chief_name"),
 *     },
 *     "chief_desc" = {
 *       "label" = @Translation("chief_desc"),
 *     },
 *     "chief_signature" = {
 *       "label" = @Translation("chief_signature"),
 *     },
 *   }
 * )
 */
class MitModelsAchievmentsTeaser extends FormatageModelsTeasers {
  
    /**
    *
    * {@inheritdoc}
    * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
    */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'grandrestaurant') . "/icones/teasers/grandrestaurant_chief_teaser.png");
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
                    'grandrestaurant-chief-card--no-img' => 'no-image',
                    'grandrestaurant-chief-card--hover' => 'hover',
                ]
            ],
            'infos' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Formulaire de contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'chief_title' => [
                        'text_html' => [
                            'label' => 'Title',
                            'value' => 'UNTIL I DISCOVERED COOKING I WAS NEVER REALLY INTERESTED IN ANYTHING '
                        ]
                    ],
                    'chief_image' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => ' <img src="https://themes-themegoods.b-cdn.net/grandrestaurantv6/wp-content/uploads/2020/12/chef-working-in-the-kitchen-in-the-restaurant-33EJWVB-1-610x610.jpg" alt=""> '
                        ]
                    ],
                    'chief_post' => [
                        'text_html' => [
                            'label' => 'POST',
                            'value' => 'Master Chief'
                        ]
                    ],
                    'chief_name' => [
                        'text_html' => [
                            'label' => 'Name',
                            'value' => ' John Philip '
                        ]
                    ],
                    'chief_desc' => [
                        'text_html' => [
                            'label' => 'Desc',
                            'value' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aliquam et elit eu nunc rhoncus viver
                                        Sed do.Lorem ipsum dolor sit amet, consectetur Nulla fringilla purus Lorem ipsum dosectetur adipisicing elit at leo dignissim congue. Mauris elementum accumsan leo vel tempor. Aliquam et elit eu nunc rhoncus viverra quis at felis et netus et malesuada fames ac turpis egestas. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula porta felis euismod sempe
                                        Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula porta felis euismod semper.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium recusandae incidunt ab voluptatem eveniet modi doloribus possimus asperiores consequuntur, hic ex nemo non id nihil dolorem explicabo rem. Laudantium, nemo?'
                        ]
                    ],
                    'chief_signature' => [
                        'text_html' => [
                            'label' => 'Chief Signature',
                            'value' => 'John Philip'
                        ]
                    ]
                ]
            ]
        ] + parent::defaultConfiguration();
    }
  
}