<?php


/**
 * This class defines the structure of the 'attribute_text' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.plugins.iceAttributesPlugin.lib.model.map
 */
class iceModelAttributeTextTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'plugins.iceAttributesPlugin.lib.model.map.iceModelAttributeTextTableMap';

  /**
   * Initialize the table attributes, columns and validators
   * Relations are not initialized by this method since they are lazy loaded
   *
   * @return     void
   * @throws     PropelException
   */
  public function initialize()
  {
    // attributes
    $this->setName('attribute_text');
    $this->setPhpName('iceModelAttributeText');
    $this->setClassname('iceModelAttributeText');
    $this->setPackage('plugins.iceAttributesPlugin.lib.model');
    $this->setUseIdGenerator(true);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    $this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
    $this->addForeignKey('ADVERT_ID', 'AdvertId', 'INTEGER', 'advert', 'ID', true, null, null);
    $this->addForeignKey('VEHICLE_ATTRIBUTE_ID', 'VehicleAttributeId', 'INTEGER', 'vehicle_attribute', 'ID', true, null, null);
    // validators
  }

  /**
   * Build the RelationMap objects for this table relationships
   */
  public function buildRelations()
  {
    $this->addRelation('Advert', 'Advert', RelationMap::MANY_TO_ONE, array('advert_id' => 'id', ), 'CASCADE', null);
    $this->addRelation('VehicleAttribute', 'VehicleAttribute', RelationMap::MANY_TO_ONE, array('vehicle_attribute_id' => 'id', ), 'CASCADE', null);
    $this->addRelation('iceModelAttributeTextI18n', 'iceModelAttributeTextI18n', RelationMap::ONE_TO_MANY, array('id' => 'id', ), 'CASCADE', null);
  }

  /**
   * 
   * Gets the list of behaviors registered for this table
   * 
   * @return array Associative array (name => parameters) of behaviors
   */
  public function getBehaviors()
  {
    return array(
      'symfony' => array('form' => 'true', 'filter' => 'true', ),
      'symfony_behaviors' => array(),
      'symfony_timestampable' => array('update_column' => 'updated_at', 'create_column' => 'created_at', ),
      'symfony_i18n' => array('i18n_table' => 'attribute_text_i18n', ),
      'query_cache' => array('backend' => 'apc', 'lifetime' => '3600', ),
      'alternative_coding_standards' => array('brackets_newline' => 'true', 'remove_closing_comments' => 'true', 'use_whitespace' => 'true', 'tab_size' => '2', 'strip_comments' => 'false', ),
    );
  }

}
