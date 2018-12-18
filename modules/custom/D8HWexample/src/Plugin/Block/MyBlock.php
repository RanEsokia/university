<?php

namespace Drupal\hello_world\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'MyBlock' Block.
 *
 * @Block(
 *   id = "MyBlock",
 *   admin_label = @Translation("MyBlock"),
 *   category = @Translation("MyBlock"),
 * )
 */
class MyBlock extends BlockBase{
  /**
   * {@inheritdoc}
   */
  public function build() { 
    $nbOfStudents = db_query("SELECT count(nid) FROM {node} WHERE type='student'")->fetchField(); 
    
    $nbStudentFaculty1 = db_query("SELECT count(entity_id) FROM node__field_faculty WHERE field_faculty_target_id=1; ")->fetchField(); 
    
    $nbStudentFaculty2 = db_query("SELECT count(entity_id) FROM node__field_faculty WHERE field_faculty_target_id=2; ")->fetchField(); 
    
    $nbStudentFaculty3 = db_query("SELECT count(entity_id) FROM node__field_faculty WHERE field_faculty_target_id=3; ")->fetchField(); 
    
    return array(
      '#markup' => $this->t('
      There are: '. $nbOfStudents. ' students in the system </br>
      There are: '. $nbStudentFaculty1. ' students in the Faculty of Engineering </br>
      There are: '. $nbStudentFaculty2. ' students in the Faculty of Management </br>
      There are: '. $nbStudentFaculty3. ' students in the Faculty of Law </br>
      '),
    );
    
  }// end method build


    
}//end class MyBlockForm