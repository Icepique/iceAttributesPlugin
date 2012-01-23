<?php

/**
 * iceModelAttributeValue form base class.
 *
 * @method iceModelAttributeValue getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelAttributeValueForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'string'     => new sfWidgetFormInputText(),
      'numeric'    => new sfWidgetFormInputText(),
      'boolean'    => new sfWidgetFormInputCheckbox(),
      'date'       => new sfWidgetFormDate(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'string'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'numeric'    => new sfValidatorNumber(array('required' => false)),
      'boolean'    => new sfValidatorBoolean(array('required' => false)),
      'date'       => new sfValidatorDate(array('required' => false)),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ice_model_attribute_value[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelAttributeValue';
  }


}
