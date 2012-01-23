<?php

/**
 * iceModelAttribute form base class.
 *
 * @method iceModelAttribute getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelAttributeForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'measure_unit_id' => new sfWidgetFormPropelChoice(array('model' => 'iceModelAttributeMeasureUnit', 'add_empty' => true)),
      'type'            => new sfWidgetFormInputText(),
      'is_special'      => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'measure_unit_id' => new sfValidatorPropelChoice(array('model' => 'iceModelAttributeMeasureUnit', 'column' => 'id', 'required' => false)),
      'type'            => new sfValidatorString(),
      'is_special'      => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ice_model_attribute[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelAttribute';
  }

  public function getI18nModelName()
  {
    return 'iceModelAttributeI18n';
  }

  public function getI18nFormClass()
  {
    return 'iceModelAttributeI18nForm';
  }

}
