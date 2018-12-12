<?php

namespace Drupal\bouvet_utils\Controller;

use Drupal\Core\Controller\ControllerBase;

class BouvetUtilsController extends ControllerBase {

  public function page_not_found() {
    $build = [
      '#markup' => $this->t('Siden du leter etter finnes ikke'),
    ];
    return $build;
  }

  public function access_is_denied() {
    $build = [
      '#markup' => $this->t('Du har ikke tilgang til å se innholdet på denne siden'),
    ];
    return $build;
  }
}
