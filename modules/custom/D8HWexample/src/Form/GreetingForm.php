<?php
/**
 * @file
 * Contains \Drupal\hello_world\Form\WorkForm.
 */
namespace Drupal\hello_world\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class GreetingForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return '`greetingForm`';
  }
  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    
    $form['name'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Who'),
      '#description' => $this->t('Who do you want to say hello to?'),
    );
    
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Greet'),
      '#button_type' => 'primary',
    );
    
    return $form;
  }
  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    
    
    drupal_set_message($this->t('Congratulations, you sent greetings to @name!', array('@name' => $form_state->getValue('name'))));
            
  }
}