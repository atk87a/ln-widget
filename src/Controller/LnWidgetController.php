<?php

namespace Drupal\ln_widget\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for ln widget routes.
 */
class LnWidgetController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
