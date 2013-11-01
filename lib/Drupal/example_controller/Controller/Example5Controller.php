<?php

namespace Drupal\example_controller\Controller;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class Example5Controller implements ContainerAwareInterface {

  protected $container;

  /**
   * Example render callback.
   */
  public function exampleRender() {
    $request_uri = $this->container->get('request')->getUri();
    return "Container example 5. " . $request_uri;
  }

  /**
   * @inherit
   */
  public function setContainer(ContainerInterface $container = null) {
    $this->container = $container;
  }

}