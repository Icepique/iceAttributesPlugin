<?php

/**
 * iceModelAttributeFilter form base class.
 *
 * @method iceModelAttributeFilter getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelAttributeFilterForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'attribute_id' => new sfWidgetFormPropelChoice(array('model' => 'iceModelAttribute', 'add_empty' => false)),
      'pattern'      => new sfWidgetFormInputText(),
      'replacement'  => new sfWidgetFormInputText(),
      'limit'        => new sfWidgetFormInputText(),
      'position'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'attribute_id' => new sfValidatorPropelChoice(array('model' => 'iceModelAttribute', 'column' => 'id')),
      'pattern'      => new sfValidatorString(array('max_length' => 128)),
      'replacement'  => new sfValidatorString(array('max_length' => 128)),
      'limit'        => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
      'position'     => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ice_model_attribute_filter[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelAttributeFilter';
  }


}
