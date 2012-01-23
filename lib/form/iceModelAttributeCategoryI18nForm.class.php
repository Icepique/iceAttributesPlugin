<?php

/**
 * iceModelAttributeCategoryI18n form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
class iceModelAttributeCategoryI18nForm extends BaseiceModelAttributeCategoryI18nForm
{
  public function configure()
  {
    unset($this->widgetSchema['name_translit'], $this->validatorSchema['name_translit']);
    unset($this->widgetSchema['slug'], $this->validatorSchema['slug']);
  }
}
