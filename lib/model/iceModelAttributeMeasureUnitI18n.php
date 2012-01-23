<?php

require 'plugins/iceAttributesPlugin/lib/model/om/BaseiceModelAttributeMeasureUnitI18n.php';


/**
 * Skeleton subclass for representing a row from the 'attribute_measure_unit_i18n' table.
 *
 * @package    propel.generator.plugins.iceAttributesPlugin.lib.model
 */
class iceModelAttributeMeasureUnitI18n extends BaseiceModelAttributeMeasureUnitI18n
{

}

sfPropelBehavior::add(
  'iceModelAttributeMeasureUnitI18n',
  array(
    'PropelActAsSluggableBehavior' => array(
      'columns' => array(
        'from' => iceModelAttributeMeasureUnitI18nPeer::NAME,
        'to'   => iceModelAttributeMeasureUnitI18nPeer::SLUG
      ),
      'separator' => '-',
      'permanent' => false
    )
  )
);

if (class_exists('AttributeMeasureUnitI18nPeer'))
{
  sfPropelBehavior::add(
    'AttributeMeasureUnitI18n',
    array(
      'PropelActAsSluggableBehavior' => array(
        'columns' => array(
          'from' => AttributeMeasureUnitI18nPeer::NAME,
          'to'   => AttributeMeasureUnitI18nPeer::SLUG
        ),
        'separator' => '-',
        'permanent' => false
      )
    )
  );
}