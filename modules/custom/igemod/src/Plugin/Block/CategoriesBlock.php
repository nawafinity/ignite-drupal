<?php

namespace Drupal\igemod\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Entity\Query\Sql\Query;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "ige_categories_block",
 *   admin_label = @Translation("IGE: Categories Block"),
 *   category = @Translation("IGE"),
 * )
 */
class CategoriesBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $language = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $nids =  \Drupal::entityQuery('taxonomy_term')
      ->condition('vid', 'initiatives')
      ->condition('langcode', $language)
      ->execute();

    $nodes = \Drupal\taxonomy\Entity\Term::loadMultiple($nids);
    $categories = [];
    foreach ($nodes as $node) {
      $translation = $node->getTranslation($language);

      if ($node->hasTranslation($language)) {
        $categories[] = $translation;
      }
      else {
        $categories[] = $node;
      }

    }

    return [
      '#theme' => 'ige_categories_block',
      '#entries' => $categories,
    ];
  }

}
