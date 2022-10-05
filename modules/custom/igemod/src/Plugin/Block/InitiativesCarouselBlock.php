<?php

namespace Drupal\igemod\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "ige_initiatives_carousel_block",
 *   admin_label = @Translation("IGE: Initiatives Caousel Block"),
 *   category = @Translation("IGE"),
 * )
 */
class InitiativesCarouselBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $language = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $nids = \Drupal::entityQuery('node')
      ->condition('type', 'initiative')
      ->condition('langcode', $language)
      ->condition('field_use_slideshow', '1')
      ->sort('created', 'ASC')
      ->execute();

    $nodes = \Drupal\node\Entity\Node::loadMultiple($nids);

    $initiatives = [];
    foreach ($nodes as $node) {
      $translation = $node->getTranslation($language);

      if ($node->hasTranslation($language)) {
        $initiatives[] = $translation;
      }
      else {
        $initiatives[] = $node;
      }
    }

    return [
      '#theme' => 'ige_initiatives_carousel_block',
      '#entries' => $initiatives,
    ];
  }

}
