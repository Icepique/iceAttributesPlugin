<?php

/**
 * iceModelAttributeI18n form base class.
 *
 * @method iceModelAttributeI18n getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelAttributeI18nForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'name'          => new sfWidgetFormInputText(),
      'name_abbr'     => new sfWidgetFormInputText(),
      'name_translit' => new sfWidgetFormInputText(),
      'slug'          => new sfWidgetFormInputText(),
      'description'   => new sfWidgetFormTextarea(),
      'culture'       => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorPropelChoice(array('model' => 'iceModelAttribute', 'column' => 'id', 'required' => false)),
      'name'          => new sfValidatorString(array('max_length' => 128)),
      'name_abbr'     => new sfValidatorString(array('max_length' => 128)),
      'name_translit' => new sfValidatorString(array('max_length' => 255)),
      'slug'          => new sfValidatorString(array('max_length' => 132)),
      'description'   => new sfValidatorString(array('required' => false)),
      'culture'       => new sfValidatorChoice(array('choices' => array($this->getObject()->getCulture()), 'empty_value' => $this->getObject()->getCulture(), 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'iceModelAttributeI18n', 'column' => array('slug', 'culture')))
    );

    $this->widgetSchema->setNameFormat('ice_model_attribute_i18n[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelAttributeI18n';
  }


}
