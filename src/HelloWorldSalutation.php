<?php

namespace Drupal\hello_world;

use Drupal\Core\StringTranslation\StringTranslationTrait;

/**
 * Prepares the salutation to the world.
 */
class HelloWorldSalutation {

use StringTranslationTrait; 
  /**
   * Returns the salutation message.
   *
   * @return string
   *   The salutation message.
   */
  public function getSalutation() {
    $time = new \DateTime();
    if ((int) $time->format('G') >= 00 && (int) $time->format('G') < 12) {
      return $this->t('Good morning, World!');
    }
    if ((int) $time->format('G') >= 12 && (int) $time->format('G') < 18) {
      return $this->t('Good afternoon, World!');
    }
    if ((int) $time->format('G') >= 18) {
    return $this->t('Good evening, World!');
    }
  }
}