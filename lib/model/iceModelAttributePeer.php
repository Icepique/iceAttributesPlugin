<?php

require 'plugins/iceAttributesPlugin/lib/model/om/BaseiceModelAttributePeer.php';


/**
 * Skeleton subclass for performing query and update operations on the 'attribute' table.
 *
 * @package    propel.generator.plugins.iceAttributesPlugin.lib.model
 */
class iceModelAttributePeer extends BaseiceModelAttributePeer
{
  const TYPE_TEXT    = 'text';
  const TYPE_STRING  = 'string';
  const TYPE_NUMERIC = 'numeric';
  const TYPE_DATE    = 'date';
  const TYPE_BOOLEAN = 'boolean';

  static public $types = array(
    'string'  => 'STRING (up to 255 characters)',
    'text'    => 'TEXT',
    'numeric' => 'NUMERIC (decimal and whole numbers)',
    'date'    => 'DATE',
    'boolean' => 'BOOLEAN (yes/no)'
  );

  /**
   * Retrieve an Attribute object by given name and culture
   *
   * @param  string  $name
   * @param  string  $culture
   *
   * @return  Attribute | null
   */
  public static function retrieveByName($name, $culture = 'en')
  {
    $c = new Criteria();
    $c->addJoin(self::ID, constant(self::getI18nModel().'Peer::ID'));
    $c->add(constant(self::getI18nModel().'Peer::NAME'), iceStatic::cleanSpaces($name));
    $c->add(constant(self::getI18nModel().'Peer::CULTURE'), $culture);

    return self::doSelectOne($c);
  }

  /**
   * Retrieve or create an Attribute object out of a given name and culture
   *
   * @param  string  $name
   * @param  string  $culture
   *
   * @return  Attribute
   */
  public static function retrieveOrCreateByName($name, $culture = 'en')
  {
    $name = trim($name);
    if ($culture == 'en')
    {
      $name = ucwords($name);
    }

    if (!$attribute = self::retrieveByName($name, $culture))
    {
      $om_class = self::OM_CLASS;

      $attribute = new $om_class();
      $attribute->setName($name, $culture);
      $attribute->setType('string');
      $attribute->setMeasureUnitId(1);
      $attribute->save();
    }

    return $attribute;
  }

  /**
   * Get all the possible/valid types an attribute can have
   *
   * @return array
   */
  public static function getValidTypes()
  {
    return array(
      'string'  => new AttributeString(),
      'text'    => new AttributeText(),
      'numeric' => new AttributeNumeric(),
      'date'    => new AttributeDate(),
      'boolean' => new AttributeBoolean()
    );
  }
}
