<?php

namespace Drupal\demo_module\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class TestController.
 *
 * @package Drupal\demo_module\Controller
 */
class TestController extends ControllerBase {

  /**
   * Test.
   *
   * @return string
   *   Return test page render array.
   */
  public function test() {
    return ['#theme' => 'patterns_test_page'];
  }

}
