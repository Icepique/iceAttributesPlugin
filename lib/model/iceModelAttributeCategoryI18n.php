<?php

require 'plugins/iceAttributesPlugin/lib/model/om/BaseiceModelAttributeCategoryI18n.php';


/**
 * Skeleton subclass for representing a row from the 'attribute_category_i18n' table.
 *
 * @package    propel.generator.plugins.iceAttributesPlugin.lib.model
 */
class iceModelAttributeCategoryI18n extends BaseiceModelAttributeCategoryI18n
{

}

sfPropelBehavior::add(
  'iceModelAttributeCategoryI18n',
  array(
    'PropelActAsSluggableBehavior' => array(
      'columns' => array(
        'from' => iceModelAttributeCategoryI18nPeer::NAME,
        'to'   => iceModelAttributeCategoryI18nPeer::SLUG
      ),
      'separator' => '-',
      'permanent' => false
    )
  )
);

if (class_exists('AttributeCategoryI18nPeer'))
{
  sfPropelBehavior::add(
    'AttributeCategoryI18n',
    array(
      'PropelActAsTransliterableBehavior' => array(
        'columns' => array(
          'from' => AttributeCategoryI18nPeer::NAME,
          'to'   => AttributeCategoryI18nPeer::NAME_TRANSLIT
        ),
      )
    )
  );

  sfPropelBehavior::add(
    'AttributeCategoryI18n',
    array(
      'PropelActAsSluggableBehavior' => array(
        'columns' => array(
          'from' => AttributeCategoryI18nPeer::NAME,
          'to'   => AttributeCategoryI18nPeer::SLUG
        ),
        'separator' => '-',
        'permanent' => false
      )
    )
  );
}
