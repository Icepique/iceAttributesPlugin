<?php

/**
 * iceModelAttribute filter form base class.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage filter
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelAttributeFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'measure_unit_id' => new sfWidgetFormPropelChoice(array('model' => 'iceModelAttributeMeasureUnit', 'add_empty' => true)),
      'type'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_special'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'measure_unit_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'iceModelAttributeMeasureUnit', 'column' => 'id')),
      'type'            => new sfValidatorPass(array('required' => false)),
      'is_special'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('ice_model_attribute_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelAttribute';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'measure_unit_id' => 'ForeignKey',
      'type'            => 'Text',
      'is_special'      => 'Boolean',
    );
  }
}
