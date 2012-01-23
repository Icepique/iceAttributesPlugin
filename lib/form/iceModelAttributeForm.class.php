<?php

/**
 * iceModelAttribute form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
class iceModelAttributeForm extends BaseiceModelAttributeForm
{
  public function configure()
  {
    $this->widgetSchema['type'] = new sfWidgetFormChoice(
      array('choices' => array(
        'string' => 'String', 'numeric' => 'Numeric', 'boolean' => 'Boolean', 'date' => 'Date'
      ))
    );
    $this->validatorSchema['type'] = new sfValidatorChoice(
      array('choices' => array('string', 'numeric', 'boolean', 'date'))
    );

    $this->embedI18n(array('bg_BG', 'en_US'));
  }
}
