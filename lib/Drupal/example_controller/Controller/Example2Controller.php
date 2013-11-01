<?php

namespace Drupal\example_controller\Controller;

class Example2Controller {

  public function exampleRender($example_name, $id) {
    return "This example give '$example_name' as argument with the id ($id)";
  }

}