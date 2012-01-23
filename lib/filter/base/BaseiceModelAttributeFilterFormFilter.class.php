<?php

/**
 * iceModelAttributeFilter filter form base class.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage filter
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelAttributeFilterFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'attribute_id' => new sfWidgetFormPropelChoice(array('model' => 'iceModelAttribute', 'add_empty' => true)),
      'pattern'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'replacement'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'limit'        => new sfWidgetFormFilterInput(),
      'position'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'attribute_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'iceModelAttribute', 'column' => 'id')),
      'pattern'      => new sfValidatorPass(array('required' => false)),
      'replacement'  => new sfValidatorPass(array('required' => false)),
      'limit'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'position'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('ice_model_attribute_filter_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelAttributeFilter';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'attribute_id' => 'ForeignKey',
      'pattern'      => 'Text',
      'replacement'  => 'Text',
      'limit'        => 'Number',
      'position'     => 'Number',
    );
  }
}
