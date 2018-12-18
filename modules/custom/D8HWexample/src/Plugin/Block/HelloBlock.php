<?php

namespace Drupal\hello_world\Plugin\Block;

use Drupal\Core\Block\BlockBase;


/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "hello_block",
 *   admin_label = @Translation("Hello block"),
 *   category = @Translation("Hello World"),
 * )
 */
class HelloBlock extends BlockBase{
  /**
   * {@inheritdoc}
   */
  public function build() {
   
    return array(
      '#markup' => $this->t('Hello, World! this is my first BLOCK added programmatically in a custom module'),
    );
   
  }// end build
    
}