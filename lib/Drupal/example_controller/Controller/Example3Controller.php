<?php

namespace Drupal\example_controller\Controller;

use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class Example3Controller implements ContainerInjectionInterface {

  protected $database;

  /**
   * Construct method.
   */
  public function __construct($database) {
    $this->database = $database;
  }

  /**
   * Implements the static interface create method.
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('database'));
  }

  /**
   * Example render callback.
   */
  public function exampleRender() {
    return "ContainerInjectionInterface example.";
  }

}