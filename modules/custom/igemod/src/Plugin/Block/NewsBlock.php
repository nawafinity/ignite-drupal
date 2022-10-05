<?php

namespace Drupal\igemod\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "ige_news_block",
 *   admin_label = @Translation("IGE: News Block"),
 *   category = @Translation("IGE"),
 * )
 */
class NewsBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $language = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $nids = \Drupal::entityQuery('node')
      ->condition('type', 'news')
      ->condition('langcode', $language)
      ->range(0, 3)
      ->sort('created', 'DESC')
      ->execute();

    $nodes = \Drupal\node\Entity\Node::loadMultiple($nids);

    $news = [];
    foreach ($nodes as $node) {
      $translation = $node->getTranslation($language);

      if ($node->hasTranslation($language)) {
        $news[] = $translation;
      }
      else {
        $news[] = $node;
      }

    }
    return [
      '#theme' => 'ige_news_block',
      '#entries' => $news,
    ];
  }

}
