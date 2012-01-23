<?php

/**
 * iceModelAttributeCategoryI18n form base class.
 *
 * @method iceModelAttributeCategoryI18n getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelAttributeCategoryI18nForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'name'          => new sfWidgetFormInputText(),
      'name_translit' => new sfWidgetFormTextarea(),
      'slug'          => new sfWidgetFormInputText(),
      'culture'       => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorPropelChoice(array('model' => 'iceModelAttributeCategory', 'column' => 'id', 'required' => false)),
      'name'          => new sfValidatorString(array('max_length' => 128)),
      'name_translit' => new sfValidatorString(),
      'slug'          => new sfValidatorString(array('max_length' => 132)),
      'culture'       => new sfValidatorChoice(array('choices' => array($this->getObject()->getCulture()), 'empty_value' => $this->getObject()->getCulture(), 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'iceModelAttributeCategoryI18n', 'column' => array('slug', 'culture')))
    );

    $this->widgetSchema->setNameFormat('ice_model_attribute_category_i18n[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelAttributeCategoryI18n';
  }


}
