<?php

/**
 * iceModelAttributeMeasureUnit form base class.
 *
 * @method iceModelAttributeMeasureUnit getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelAttributeMeasureUnitForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id' => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ice_model_attribute_measure_unit[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelAttributeMeasureUnit';
  }

  public function getI18nModelName()
  {
    return 'iceModelAttributeMeasureUnitI18n';
  }

  public function getI18nFormClass()
  {
    return 'iceModelAttributeMeasureUnitI18nForm';
  }

}
