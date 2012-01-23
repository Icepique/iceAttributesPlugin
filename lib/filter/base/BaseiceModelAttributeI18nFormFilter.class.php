<?php

/**
 * iceModelAttributeI18n filter form base class.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage filter
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelAttributeI18nFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'name_abbr'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'name_translit' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'slug'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'description'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'          => new sfValidatorPass(array('required' => false)),
      'name_abbr'     => new sfValidatorPass(array('required' => false)),
      'name_translit' => new sfValidatorPass(array('required' => false)),
      'slug'          => new sfValidatorPass(array('required' => false)),
      'description'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ice_model_attribute_i18n_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelAttributeI18n';
  }

  public function getFields()
  {
    return array(
      'id'            => 'ForeignKey',
      'name'          => 'Text',
      'name_abbr'     => 'Text',
      'name_translit' => 'Text',
      'slug'          => 'Text',
      'description'   => 'Text',
      'culture'       => 'Text',
    );
  }
}
