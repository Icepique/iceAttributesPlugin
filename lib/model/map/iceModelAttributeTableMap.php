<?php



/**
 * This class defines the structure of the 'attribute' table.
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
class iceModelAttributeTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'plugins.iceAttributesPlugin.lib.model.map.iceModelAttributeTableMap';

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
    $this->setName('attribute');
    $this->setPhpName('iceModelAttribute');
    $this->setClassname('iceModelAttribute');
    $this->setPackage('plugins.iceAttributesPlugin.lib.model');
    $this->setUseIdGenerator(true);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addForeignKey('MEASURE_UNIT_ID', 'MeasureUnitId', 'INTEGER', 'attribute_measure_unit', 'ID', false, null, null);
    $this->addColumn('TYPE', 'Type', 'CHAR', true, null, 'string');
    $this->addColumn('IS_SPECIAL', 'IsSpecial', 'BOOLEAN', false, 1, false);
    // validators
  }

  /**
   * Build the RelationMap objects for this table relationships
   */
  public function buildRelations()
  {
    $this->addRelation('iceModelAttributeMeasureUnit', 'iceModelAttributeMeasureUnit', RelationMap::MANY_TO_ONE, array('measure_unit_id' => 'id', ), 'SET NULL', null);
    $this->addRelation('iceModelAttributeI18n', 'iceModelAttributeI18n', RelationMap::ONE_TO_MANY, array('id' => 'id', ), 'CASCADE', null, 'iceModelAttributeI18ns');
    $this->addRelation('iceModelAttributeFilter', 'iceModelAttributeFilter', RelationMap::ONE_TO_MANY, array('id' => 'attribute_id', ), 'CASCADE', null, 'iceModelAttributeFilters');
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
      'symfony_i18n' => array('i18n_table' => 'attribute_i18n', ),
      'alternative_coding_standards' => array('brackets_newline' => 'true', 'remove_closing_comments' => 'true', 'use_whitespace' => 'true', 'tab_size' => '2', 'strip_comments' => 'false', ),
    );
  }

}
