<?php

/**
 * iceModelAttributeI18n form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
class iceModelAttributeI18nForm extends BaseiceModelAttributeI18nForm
{
  public function configure()
  {
    unset($this->widgetSchema['name_translit'], $this->validatorSchema['name_translit']);
    unset($this->widgetSchema['slug'], $this->validatorSchema['slug']);
  }
}
