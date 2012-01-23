<?php

require 'plugins/iceAttributesPlugin/lib/model/om/BaseiceModelAttributeCategoryI18nPeer.php';


/**
 * Skeleton subclass for performing query and update operations on the 'attribute_category_i18n' table.
 *
 * @package    propel.generator.plugins.iceAttributesPlugin.lib.model
 */
class iceModelAttributeCategoryI18nPeer extends BaseiceModelAttributeCategoryI18nPeer
{
  
}

sfPropelBehavior::add(
  'iceModelAttributeCategoryI18n',
  array(
    'PropelActAsTransliterableBehavior' => array(
      'columns' => array(
        'from' => iceModelAttributeCategoryI18nPeer::NAME,
        'to'   => iceModelAttributeCategoryI18nPeer::NAME_TRANSLIT
      ),
    )
  )
);
