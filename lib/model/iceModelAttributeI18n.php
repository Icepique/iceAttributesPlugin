<?php

require 'plugins/iceAttributesPlugin/lib/model/om/BaseiceModelAttributeI18n.php';


/**
 * Skeleton subclass for representing a row from the 'attribute_i18n' table.
 *
 * @package    propel.generator.plugins.iceAttributesPlugin.lib.model
 */
class iceModelAttributeI18n extends BaseiceModelAttributeI18n
{

}

sfPropelBehavior::add(
  'iceModelAttributeI18n',
  array(
    'PropelActAsTransliterableBehavior' => array(
      'columns' => array(
        'from' => iceModelAttributeI18nPeer::NAME,
        'to'   => iceModelAttributeI18nPeer::NAME_TRANSLIT
      ),
    )
  )
);

sfPropelBehavior::add(
  'iceModelAttributeI18n',
  array(
    'PropelActAsSluggableBehavior' => array(
      'columns' => array(
        'from' => iceModelAttributeI18nPeer::NAME,
        'to'   => iceModelAttributeI18nPeer::SLUG
      ),
      'separator' => '-',
      'permanent' => false
    )
  )
);

if (class_exists('AttributeI18nPeer'))
{
  sfPropelBehavior::add(
    'AttributeI18n',
    array(
      'PropelActAsTransliterableBehavior' => array(
        'columns' => array(
          'from' => AttributeI18nPeer::NAME,
          'to'   => AttributeI18nPeer::NAME_TRANSLIT
        ),
      )
    )
  );

  sfPropelBehavior::add(
    'AttributeI18n',
    array(
      'PropelActAsSluggableBehavior' => array(
        'columns' => array(
          'from' => AttributeI18nPeer::NAME,
          'to'   => AttributeI18nPeer::SLUG
        ),
        'separator' => '-',
        'permanent' => false
      )
    )
  );
}