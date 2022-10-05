<?php
/**
 * @file
 * Contains \Drupal\igemod\Controller\IgeController.
 */
namespace Drupal\igemod\Controller;
class IgeController {
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Hello, World!'),
    );
  }
}
