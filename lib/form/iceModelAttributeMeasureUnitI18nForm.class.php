<?php

/**
 * iceModelAttributeMeasureUnitI18n form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
class iceModelAttributeMeasureUnitI18nForm extends BaseiceModelAttributeMeasureUnitI18nForm
{
  public function configure()
  {
    unset($this->widgetSchema['slug'], $this->validatorSchema['slug']);
  }
}
