<?php



/**
 * This class defines the structure of the 'attribute_measure_unit_i18n' table.
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
class iceModelAttributeMeasureUnitI18nTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'plugins.iceAttributesPlugin.lib.model.map.iceModelAttributeMeasureUnitI18nTableMap';

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
    $this->setName('attribute_measure_unit_i18n');
    $this->setPhpName('iceModelAttributeMeasureUnitI18n');
    $this->setClassname('iceModelAttributeMeasureUnitI18n');
    $this->setPackage('plugins.iceAttributesPlugin.lib.model');
    $this->setUseIdGenerator(false);
    // columns
    $this->addForeignPrimaryKey('ID', 'Id', 'INTEGER' , 'attribute_measure_unit', 'ID', true, null, null);
    $this->addColumn('UNIT', 'Unit', 'CHAR', true, 25, null);
    $this->addColumn('NAME', 'Name', 'VARCHAR', true, 128, null);
    $this->getColumn('NAME', false)->setPrimaryString(true);
    $this->addColumn('SLUG', 'Slug', 'VARCHAR', true, 132, null);
    $this->addColumn('DESCRIPTION', 'Description', 'VARCHAR', false, 255, null);
    $this->addPrimaryKey('CULTURE', 'Culture', 'VARCHAR', true, 7, null);
    // validators
  }

  /**
   * Build the RelationMap objects for this table relationships
   */
  public function buildRelations()
  {
    $this->addRelation('iceModelAttributeMeasureUnit', 'iceModelAttributeMeasureUnit', RelationMap::MANY_TO_ONE, array('id' => 'id', ), 'CASCADE', null);
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
      'symfony_i18n_translation' => array('culture_column' => 'culture', ),
      'alternative_coding_standards' => array('brackets_newline' => 'true', 'remove_closing_comments' => 'true', 'use_whitespace' => 'true', 'tab_size' => '2', 'strip_comments' => 'false', ),
    );
  }

}
