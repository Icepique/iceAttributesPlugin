<?php

/**
 * iceModelAttributeMeasureUnitI18n form base class.
 *
 * @method iceModelAttributeMeasureUnitI18n getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelAttributeMeasureUnitI18nForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'unit'        => new sfWidgetFormInputText(),
      'name'        => new sfWidgetFormInputText(),
      'slug'        => new sfWidgetFormInputText(),
      'description' => new sfWidgetFormInputText(),
      'culture'     => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorPropelChoice(array('model' => 'iceModelAttributeMeasureUnit', 'column' => 'id', 'required' => false)),
      'unit'        => new sfValidatorString(array('max_length' => 25)),
      'name'        => new sfValidatorString(array('max_length' => 128)),
      'slug'        => new sfValidatorString(array('max_length' => 132)),
      'description' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'culture'     => new sfValidatorChoice(array('choices' => array($this->getObject()->getCulture()), 'empty_value' => $this->getObject()->getCulture(), 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'iceModelAttributeMeasureUnitI18n', 'column' => array('slug', 'culture')))
    );

    $this->widgetSchema->setNameFormat('ice_model_attribute_measure_unit_i18n[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelAttributeMeasureUnitI18n';
  }


}
