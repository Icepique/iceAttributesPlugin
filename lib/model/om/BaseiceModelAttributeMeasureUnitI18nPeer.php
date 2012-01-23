<?php


/**
 * Base static class for performing query and update operations on the 'attribute_measure_unit_i18n' table.
 *
 * 
 *
 * @package    propel.generator.plugins.iceAttributesPlugin.lib.model.om
 */
abstract class BaseiceModelAttributeMeasureUnitI18nPeer
{

  /** the default database name for this class */
  const DATABASE_NAME = 'propel';

  /** the table name for this class */
  const TABLE_NAME = 'attribute_measure_unit_i18n';

  /** the related Propel class for this table */
  const OM_CLASS = 'iceModelAttributeMeasureUnitI18n';

  /** A class that can be returned by this peer. */
  const CLASS_DEFAULT = 'plugins.iceAttributesPlugin.lib.model.iceModelAttributeMeasureUnitI18n';

  /** the related TableMap class for this table */
  const TM_CLASS = 'iceModelAttributeMeasureUnitI18nTableMap';

  /** The total number of columns. */
  const NUM_COLUMNS = 6;

  /** The number of lazy-loaded columns. */
  const NUM_LAZY_LOAD_COLUMNS = 0;

  /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
  const NUM_HYDRATE_COLUMNS = 6;

  /** the column name for the ID field */
  const ID = 'attribute_measure_unit_i18n.ID';

  /** the column name for the UNIT field */
  const UNIT = 'attribute_measure_unit_i18n.UNIT';

  /** the column name for the NAME field */
  const NAME = 'attribute_measure_unit_i18n.NAME';

  /** the column name for the SLUG field */
  const SLUG = 'attribute_measure_unit_i18n.SLUG';

  /** the column name for the DESCRIPTION field */
  const DESCRIPTION = 'attribute_measure_unit_i18n.DESCRIPTION';

  /** the column name for the CULTURE field */
  const CULTURE = 'attribute_measure_unit_i18n.CULTURE';

  /** The default string format for model objects of the related table **/
  const DEFAULT_STRING_FORMAT = 'YAML';

  /**
   * An identiy map to hold any loaded instances of iceModelAttributeMeasureUnitI18n objects.
   * This must be public so that other peer classes can access this when hydrating from JOIN
   * queries.
   * @var        array iceModelAttributeMeasureUnitI18n[]
   */
  public static $instances = array();


  /**
   * holds an array of fieldnames
   *
   * first dimension keys are the type constants
   * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
   */
  protected static $fieldNames = array (
    BasePeer::TYPE_PHPNAME => array ('Id', 'Unit', 'Name', 'Slug', 'Description', 'Culture', ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'unit', 'name', 'slug', 'description', 'culture', ),
    BasePeer::TYPE_COLNAME => array (self::ID, self::UNIT, self::NAME, self::SLUG, self::DESCRIPTION, self::CULTURE, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID', 'UNIT', 'NAME', 'SLUG', 'DESCRIPTION', 'CULTURE', ),
    BasePeer::TYPE_FIELDNAME => array ('id', 'unit', 'name', 'slug', 'description', 'culture', ),
    BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
  );

  /**
   * holds an array of keys for quick access to the fieldnames array
   *
   * first dimension keys are the type constants
   * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
   */
  protected static $fieldKeys = array (
    BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Unit' => 1, 'Name' => 2, 'Slug' => 3, 'Description' => 4, 'Culture' => 5, ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'unit' => 1, 'name' => 2, 'slug' => 3, 'description' => 4, 'culture' => 5, ),
    BasePeer::TYPE_COLNAME => array (self::ID => 0, self::UNIT => 1, self::NAME => 2, self::SLUG => 3, self::DESCRIPTION => 4, self::CULTURE => 5, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'UNIT' => 1, 'NAME' => 2, 'SLUG' => 3, 'DESCRIPTION' => 4, 'CULTURE' => 5, ),
    BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'unit' => 1, 'name' => 2, 'slug' => 3, 'description' => 4, 'culture' => 5, ),
    BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
  );

  /**
   * Translates a fieldname to another type
   *
   * @param      string $name field name
   * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
   *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
   * @param      string $toType   One of the class type constants
   * @return     string translated name of the field.
   * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
   */
  static public function translateFieldName($name, $fromType, $toType)
  {
    $toNames = self::getFieldNames($toType);
    $key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
    if ($key === null)
    {
      throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
    }
    return $toNames[$key];
  }

  /**
   * Returns an array of field names.
   *
   * @param      string $type The type of fieldnames to return:
   *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
   *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
   * @return     array A list of field names
   */

  static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
  {
    if (!array_key_exists($type, self::$fieldNames))
    {
      throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
    }
    return self::$fieldNames[$type];
  }

  /**
   * Convenience method which changes table.column to alias.column.
   *
   * Using this method you can maintain SQL abstraction while using column aliases.
   * <code>
   *    $c->addAlias("alias1", TablePeer::TABLE_NAME);
   *    $c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
   * </code>
   * @param      string $alias The alias for the current table.
   * @param      string $column The column name for current table. (i.e. iceModelAttributeMeasureUnitI18nPeer::COLUMN_NAME).
   * @return     string
   */
  public static function alias($alias, $column)
  {
    return str_replace(iceModelAttributeMeasureUnitI18nPeer::TABLE_NAME.'.', $alias.'.', $column);
  }

  /**
   * Add all the columns needed to create a new object.
   *
   * Note: any columns that were marked with lazyLoad="true" in the
   * XML schema will not be added to the select list and only loaded
   * on demand.
   *
   * @param      Criteria $criteria object containing the columns to add.
   * @param      string   $alias    optional table alias
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function addSelectColumns(Criteria $criteria, $alias = null)
  {
    if (null === $alias)
    {
      $criteria->addSelectColumn(iceModelAttributeMeasureUnitI18nPeer::ID);
      $criteria->addSelectColumn(iceModelAttributeMeasureUnitI18nPeer::UNIT);
      $criteria->addSelectColumn(iceModelAttributeMeasureUnitI18nPeer::NAME);
      $criteria->addSelectColumn(iceModelAttributeMeasureUnitI18nPeer::SLUG);
      $criteria->addSelectColumn(iceModelAttributeMeasureUnitI18nPeer::DESCRIPTION);
      $criteria->addSelectColumn(iceModelAttributeMeasureUnitI18nPeer::CULTURE);
    }
    else
    {
      $criteria->addSelectColumn($alias . '.ID');
      $criteria->addSelectColumn($alias . '.UNIT');
      $criteria->addSelectColumn($alias . '.NAME');
      $criteria->addSelectColumn($alias . '.SLUG');
      $criteria->addSelectColumn($alias . '.DESCRIPTION');
      $criteria->addSelectColumn($alias . '.CULTURE');
    }
  }

  /**
   * Returns the number of rows matching criteria.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
   * @param      PropelPDO $con
   * @return     int Number of matching rows.
   */
  public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
  {
    // we may modify criteria, so copy it first
    $criteria = clone $criteria;

    // We need to set the primary table name, since in the case that there are no WHERE columns
    // it will be impossible for the BasePeer::createSelectSql() method to determine which
    // tables go into the FROM clause.
    $criteria->setPrimaryTableName(iceModelAttributeMeasureUnitI18nPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      iceModelAttributeMeasureUnitI18nPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
    $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

    if ($con === null)
    {
      $con = Propel::getConnection(iceModelAttributeMeasureUnitI18nPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseiceModelAttributeMeasureUnitI18nPeer', $criteria, $con);
    }

    // BasePeer returns a PDOStatement
    $stmt = BasePeer::doCount($criteria, $con);

    if ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $count = (int) $row[0];
    }
    else
    {
      $count = 0; // no rows returned; we infer that means 0 matches.
    }
    $stmt->closeCursor();
    return $count;
  }
  /**
   * Selects one object from the DB.
   *
   * @param      Criteria $criteria object used to create the SELECT statement.
   * @param      PropelPDO $con
   * @return     iceModelAttributeMeasureUnitI18n
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
  {
    $critcopy = clone $criteria;
    $critcopy->setLimit(1);
    $objects = iceModelAttributeMeasureUnitI18nPeer::doSelect($critcopy, $con);
    if ($objects)
    {
      return $objects[0];
    }
    return null;
  }
  /**
   * Selects several row from the DB.
   *
   * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
   * @param      PropelPDO $con
   * @return     array Array of selected Objects
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelect(Criteria $criteria, PropelPDO $con = null)
  {
    return iceModelAttributeMeasureUnitI18nPeer::populateObjects(iceModelAttributeMeasureUnitI18nPeer::doSelectStmt($criteria, $con));
  }
  /**
   * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
   *
   * Use this method directly if you want to work with an executed statement durirectly (for example
   * to perform your own object hydration).
   *
   * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
   * @param      PropelPDO $con The connection to use
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   * @return     PDOStatement The executed PDOStatement object.
   * @see        BasePeer::doSelect()
   */
  public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(iceModelAttributeMeasureUnitI18nPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    if (!$criteria->hasSelectClause())
    {
      $criteria = clone $criteria;
      iceModelAttributeMeasureUnitI18nPeer::addSelectColumns($criteria);
    }

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseiceModelAttributeMeasureUnitI18nPeer', $criteria, $con);
    }


    // BasePeer returns a PDOStatement
    return BasePeer::doSelect($criteria, $con);
  }
  /**
   * Adds an object to the instance pool.
   *
   * Propel keeps cached copies of objects in an instance pool when they are retrieved
   * from the database.  In some cases -- especially when you override doSelect*()
   * methods in your stub classes -- you may need to explicitly add objects
   * to the cache in order to ensure that the same objects are always returned by doSelect*()
   * and retrieveByPK*() calls.
   *
   * @param      iceModelAttributeMeasureUnitI18n $value A iceModelAttributeMeasureUnitI18n object.
   * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
   */
  public static function addInstanceToPool($obj, $key = null)
  {
    if (Propel::isInstancePoolingEnabled())
    {
      if ($key === null)
      {
        $key = serialize(array((string) $obj->getId(), (string) $obj->getCulture()));
      }
      self::$instances[$key] = $obj;
    }
  }

  /**
   * Removes an object from the instance pool.
   *
   * Propel keeps cached copies of objects in an instance pool when they are retrieved
   * from the database.  In some cases -- especially when you override doDelete
   * methods in your stub classes -- you may need to explicitly remove objects
   * from the cache in order to prevent returning objects that no longer exist.
   *
   * @param      mixed $value A iceModelAttributeMeasureUnitI18n object or a primary key value.
   */
  public static function removeInstanceFromPool($value)
  {
    if (Propel::isInstancePoolingEnabled() && $value !== null)
    {
      if (is_object($value) && $value instanceof iceModelAttributeMeasureUnitI18n)
      {
        $key = serialize(array((string) $value->getId(), (string) $value->getCulture()));
      }
      elseif (is_array($value) && count($value) === 2)
      {
        // assume we've been passed a primary key
        $key = serialize(array((string) $value[0], (string) $value[1]));
      }
      else
      {
        $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or iceModelAttributeMeasureUnitI18n object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
        throw $e;
      }

      unset(self::$instances[$key]);
    }
  }

  /**
   * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
   *
   * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
   * a multi-column primary key, a serialize()d version of the primary key will be returned.
   *
   * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
   * @return     iceModelAttributeMeasureUnitI18n Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
   * @see        getPrimaryKeyHash()
   */
  public static function getInstanceFromPool($key)
  {
    if (Propel::isInstancePoolingEnabled())
    {
      if (isset(self::$instances[$key]))
      {
        return self::$instances[$key];
      }
    }
    return null; // just to be explicit
  }
  
  /**
   * Clear the instance pool.
   *
   * @return     void
   */
  public static function clearInstancePool()
  {
    self::$instances = array();
  }
  
  /**
   * Method to invalidate the instance pool of all tables related to attribute_measure_unit_i18n
   * by a foreign key with ON DELETE CASCADE
   */
  public static function clearRelatedInstancePool()
  {
  }

  /**
   * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
   *
   * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
   * a multi-column primary key, a serialize()d version of the primary key will be returned.
   *
   * @param      array $row PropelPDO resultset row.
   * @param      int $startcol The 0-based offset for reading from the resultset row.
   * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
   */
  public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
  {
    // If the PK cannot be derived from the row, return NULL.
    if ($row[$startcol] === null && $row[$startcol + 5] === null)
    {
      return null;
    }
    return serialize(array((string) $row[$startcol], (string) $row[$startcol + 5]));
  }

  /**
   * Retrieves the primary key from the DB resultset row
   * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
   * a multi-column primary key, an array of the primary key columns will be returned.
   *
   * @param      array $row PropelPDO resultset row.
   * @param      int $startcol The 0-based offset for reading from the resultset row.
   * @return     mixed The primary key of the row
   */
  public static function getPrimaryKeyFromRow($row, $startcol = 0)
  {
    return array((int) $row[$startcol], (string) $row[$startcol + 5]);
  }
  
  /**
   * The returned array will contain objects of the default type or
   * objects that inherit from the default.
   *
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function populateObjects(PDOStatement $stmt)
  {
    $results = array();
  
    // set the class once to avoid overhead in the loop
    $cls = iceModelAttributeMeasureUnitI18nPeer::getOMClass(false);
    // populate the object(s)
    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key = iceModelAttributeMeasureUnitI18nPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj = iceModelAttributeMeasureUnitI18nPeer::getInstanceFromPool($key)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj->hydrate($row, 0, true); // rehydrate
        $results[] = $obj;
      }
      else
      {
        $obj = new $cls();
        $obj->hydrate($row);
        $results[] = $obj;
        iceModelAttributeMeasureUnitI18nPeer::addInstanceToPool($obj, $key);
      }
    }
    $stmt->closeCursor();
    return $results;
  }
  /**
   * Populates an object of the default type or an object that inherit from the default.
   *
   * @param      array $row PropelPDO resultset row.
   * @param      int $startcol The 0-based offset for reading from the resultset row.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   * @return     array (iceModelAttributeMeasureUnitI18n object, last column rank)
   */
  public static function populateObject($row, $startcol = 0)
  {
    $key = iceModelAttributeMeasureUnitI18nPeer::getPrimaryKeyHashFromRow($row, $startcol);
    if (null !== ($obj = iceModelAttributeMeasureUnitI18nPeer::getInstanceFromPool($key)))
    {
      // We no longer rehydrate the object, since this can cause data loss.
      // See http://www.propelorm.org/ticket/509
      // $obj->hydrate($row, $startcol, true); // rehydrate
      $col = $startcol + iceModelAttributeMeasureUnitI18nPeer::NUM_HYDRATE_COLUMNS;
    }
    else
    {
      $cls = iceModelAttributeMeasureUnitI18nPeer::OM_CLASS;
      $obj = new $cls();
      $col = $obj->hydrate($row, $startcol);
      iceModelAttributeMeasureUnitI18nPeer::addInstanceToPool($obj, $key);
    }
    return array($obj, $col);
  }


  /**
   * Returns the number of rows matching criteria, joining the related iceModelAttributeMeasureUnit table
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     int Number of matching rows.
   */
  public static function doCountJoiniceModelAttributeMeasureUnit(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    // we're going to modify criteria, so copy it first
    $criteria = clone $criteria;

    // We need to set the primary table name, since in the case that there are no WHERE columns
    // it will be impossible for the BasePeer::createSelectSql() method to determine which
    // tables go into the FROM clause.
    $criteria->setPrimaryTableName(iceModelAttributeMeasureUnitI18nPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      iceModelAttributeMeasureUnitI18nPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(iceModelAttributeMeasureUnitI18nPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria->addJoin(iceModelAttributeMeasureUnitI18nPeer::ID, iceModelAttributeMeasureUnitPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseiceModelAttributeMeasureUnitI18nPeer', $criteria, $con);
    }

    $stmt = BasePeer::doCount($criteria, $con);

    if ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $count = (int) $row[0];
    }
    else
    {
      $count = 0; // no rows returned; we infer that means 0 matches.
    }
    $stmt->closeCursor();
    return $count;
  }


  /**
   * Selects a collection of iceModelAttributeMeasureUnitI18n objects pre-filled with their iceModelAttributeMeasureUnit objects.
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of iceModelAttributeMeasureUnitI18n objects.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectJoiniceModelAttributeMeasureUnit(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $criteria = clone $criteria;

    // Set the correct dbName if it has not been overridden
    if ($criteria->getDbName() == Propel::getDefaultDB())
    {
      $criteria->setDbName(self::DATABASE_NAME);
    }

    iceModelAttributeMeasureUnitI18nPeer::addSelectColumns($criteria);
    $startcol = iceModelAttributeMeasureUnitI18nPeer::NUM_HYDRATE_COLUMNS;
    iceModelAttributeMeasureUnitPeer::addSelectColumns($criteria);

    $criteria->addJoin(iceModelAttributeMeasureUnitI18nPeer::ID, iceModelAttributeMeasureUnitPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseiceModelAttributeMeasureUnitI18nPeer', $criteria, $con);
    }

    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = iceModelAttributeMeasureUnitI18nPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = iceModelAttributeMeasureUnitI18nPeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {

        $cls = iceModelAttributeMeasureUnitI18nPeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        iceModelAttributeMeasureUnitI18nPeer::addInstanceToPool($obj1, $key1);
      }

      $key2 = iceModelAttributeMeasureUnitPeer::getPrimaryKeyHashFromRow($row, $startcol);
      if ($key2 !== null)
      {
        $obj2 = iceModelAttributeMeasureUnitPeer::getInstanceFromPool($key2);
        if (!$obj2)
        {

          $cls = iceModelAttributeMeasureUnitPeer::getOMClass(false);

          $obj2 = new $cls();
          $obj2->hydrate($row, $startcol);
          iceModelAttributeMeasureUnitPeer::addInstanceToPool($obj2, $key2);
        }

        // Add the $obj1 (iceModelAttributeMeasureUnitI18n) to $obj2 (iceModelAttributeMeasureUnit)
        $obj2->addiceModelAttributeMeasureUnitI18n($obj1);

      }

      $results[] = $obj1;
    }
    $stmt->closeCursor();
    return $results;
  }


  /**
   * Returns the number of rows matching criteria, joining all related tables
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     int Number of matching rows.
   */
  public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    // we're going to modify criteria, so copy it first
    $criteria = clone $criteria;

    // We need to set the primary table name, since in the case that there are no WHERE columns
    // it will be impossible for the BasePeer::createSelectSql() method to determine which
    // tables go into the FROM clause.
    $criteria->setPrimaryTableName(iceModelAttributeMeasureUnitI18nPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      iceModelAttributeMeasureUnitI18nPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(iceModelAttributeMeasureUnitI18nPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria->addJoin(iceModelAttributeMeasureUnitI18nPeer::ID, iceModelAttributeMeasureUnitPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseiceModelAttributeMeasureUnitI18nPeer', $criteria, $con);
    }

    $stmt = BasePeer::doCount($criteria, $con);

    if ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $count = (int) $row[0];
    }
    else
    {
      $count = 0; // no rows returned; we infer that means 0 matches.
    }
    $stmt->closeCursor();
    return $count;
  }

  /**
   * Selects a collection of iceModelAttributeMeasureUnitI18n objects pre-filled with all related objects.
   *
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of iceModelAttributeMeasureUnitI18n objects.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $criteria = clone $criteria;

    // Set the correct dbName if it has not been overridden
    if ($criteria->getDbName() == Propel::getDefaultDB())
    {
      $criteria->setDbName(self::DATABASE_NAME);
    }

    iceModelAttributeMeasureUnitI18nPeer::addSelectColumns($criteria);
    $startcol2 = iceModelAttributeMeasureUnitI18nPeer::NUM_HYDRATE_COLUMNS;

    iceModelAttributeMeasureUnitPeer::addSelectColumns($criteria);
    $startcol3 = $startcol2 + iceModelAttributeMeasureUnitPeer::NUM_HYDRATE_COLUMNS;

    $criteria->addJoin(iceModelAttributeMeasureUnitI18nPeer::ID, iceModelAttributeMeasureUnitPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseiceModelAttributeMeasureUnitI18nPeer', $criteria, $con);
    }

    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = iceModelAttributeMeasureUnitI18nPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = iceModelAttributeMeasureUnitI18nPeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {
        $cls = iceModelAttributeMeasureUnitI18nPeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        iceModelAttributeMeasureUnitI18nPeer::addInstanceToPool($obj1, $key1);
      }

      // Add objects for joined iceModelAttributeMeasureUnit rows

      $key2 = iceModelAttributeMeasureUnitPeer::getPrimaryKeyHashFromRow($row, $startcol2);
      if ($key2 !== null)
      {
        $obj2 = iceModelAttributeMeasureUnitPeer::getInstanceFromPool($key2);
        if (!$obj2)
        {

          $cls = iceModelAttributeMeasureUnitPeer::getOMClass(false);

          $obj2 = new $cls();
          $obj2->hydrate($row, $startcol2);
          iceModelAttributeMeasureUnitPeer::addInstanceToPool($obj2, $key2);
        }

        // Add the $obj1 (iceModelAttributeMeasureUnitI18n) to the collection in $obj2 (iceModelAttributeMeasureUnit)
        $obj2->addiceModelAttributeMeasureUnitI18n($obj1);
      }

      $results[] = $obj1;
    }
    $stmt->closeCursor();
    return $results;
  }

  /**
   * Returns the TableMap related to this peer.
   * This method is not needed for general use but a specific application could have a need.
   * @return     TableMap
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function getTableMap()
  {
    return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
  }

  /**
   * Add a TableMap instance to the database for this peer class.
   */
  public static function buildTableMap()
  {
    $dbMap = Propel::getDatabaseMap(BaseiceModelAttributeMeasureUnitI18nPeer::DATABASE_NAME);
    if (!$dbMap->hasTable(BaseiceModelAttributeMeasureUnitI18nPeer::TABLE_NAME))
    {
      $dbMap->addTableObject(new iceModelAttributeMeasureUnitI18nTableMap());
    }
  }

  /**
   * The class that the Peer will make instances of.
   *
   * If $withPrefix is true, the returned path
   * uses a dot-path notation which is tranalted into a path
   * relative to a location on the PHP include_path.
   * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
   *
   * @param      boolean $withPrefix Whether or not to return the path with the class name
   * @return     string path.to.ClassName
   */
  public static function getOMClass($withPrefix = true)
  {
    return $withPrefix ? iceModelAttributeMeasureUnitI18nPeer::CLASS_DEFAULT : iceModelAttributeMeasureUnitI18nPeer::OM_CLASS;
  }

  /**
   * Performs an INSERT on the database, given a iceModelAttributeMeasureUnitI18n or Criteria object.
   *
   * @param      mixed $values Criteria or iceModelAttributeMeasureUnitI18n object containing data that is used to create the INSERT statement.
   * @param      PropelPDO $con the PropelPDO connection to use
   * @return     mixed The new primary key.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doInsert($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(iceModelAttributeMeasureUnitI18nPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity
    }
    else
    {
      $criteria = $values->buildCriteria(); // build Criteria from iceModelAttributeMeasureUnitI18n object
    }


    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    try
    {
      // use transaction because $criteria could contain info
      // for more than one table (I guess, conceivably)
      $con->beginTransaction();
      $pk = BasePeer::doInsert($criteria, $con);
      $con->commit();
    }
    catch(PropelException $e)
    {
      $con->rollBack();
      throw $e;
    }

    return $pk;
  }

  /**
   * Performs an UPDATE on the database, given a iceModelAttributeMeasureUnitI18n or Criteria object.
   *
   * @param      mixed $values Criteria or iceModelAttributeMeasureUnitI18n object containing data that is used to create the UPDATE statement.
   * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
   * @return     int The number of affected rows (if supported by underlying database driver).
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doUpdate($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(iceModelAttributeMeasureUnitI18nPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $selectCriteria = new Criteria(self::DATABASE_NAME);

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity

      $comparison = $criteria->getComparison(iceModelAttributeMeasureUnitI18nPeer::ID);
      $value = $criteria->remove(iceModelAttributeMeasureUnitI18nPeer::ID);
      if ($value)
      {
        $selectCriteria->add(iceModelAttributeMeasureUnitI18nPeer::ID, $value, $comparison);
      }
      else
      {
        $selectCriteria->setPrimaryTableName(iceModelAttributeMeasureUnitI18nPeer::TABLE_NAME);
      }

      $comparison = $criteria->getComparison(iceModelAttributeMeasureUnitI18nPeer::CULTURE);
      $value = $criteria->remove(iceModelAttributeMeasureUnitI18nPeer::CULTURE);
      if ($value)
      {
        $selectCriteria->add(iceModelAttributeMeasureUnitI18nPeer::CULTURE, $value, $comparison);
      }
      else
      {
        $selectCriteria->setPrimaryTableName(iceModelAttributeMeasureUnitI18nPeer::TABLE_NAME);
      }

    } else { // $values is iceModelAttributeMeasureUnitI18n object
      $criteria = $values->buildCriteria(); // gets full criteria
      $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
    }

    // set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    return BasePeer::doUpdate($selectCriteria, $criteria, $con);
  }

  /**
   * Deletes all rows from the attribute_measure_unit_i18n table.
   *
   * @param      PropelPDO $con the connection to use
   * @return     int The number of affected rows (if supported by underlying database driver).
   */
  public static function doDeleteAll(PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(iceModelAttributeMeasureUnitI18nPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }
    $affectedRows = 0; // initialize var to track total num of affected rows
    try
    {
      // use transaction because $criteria could contain info
      // for more than one table or we could emulating ON DELETE CASCADE, etc.
      $con->beginTransaction();
      $affectedRows += BasePeer::doDeleteAll(iceModelAttributeMeasureUnitI18nPeer::TABLE_NAME, $con, iceModelAttributeMeasureUnitI18nPeer::DATABASE_NAME);
      // Because this db requires some delete cascade/set null emulation, we have to
      // clear the cached instance *after* the emulation has happened (since
      // instances get re-added by the select statement contained therein).
      iceModelAttributeMeasureUnitI18nPeer::clearInstancePool();
      iceModelAttributeMeasureUnitI18nPeer::clearRelatedInstancePool();
      $con->commit();
      return $affectedRows;
    }
    catch (PropelException $e)
    {
      $con->rollBack();
      throw $e;
    }
  }

  /**
   * Performs a DELETE on the database, given a iceModelAttributeMeasureUnitI18n or Criteria object OR a primary key value.
   *
   * @param      mixed $values Criteria or iceModelAttributeMeasureUnitI18n object or primary key or array of primary keys
   *              which is used to create the DELETE statement
   * @param      PropelPDO $con the connection to use
   * @return     int   The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
   *        if supported by native driver or if emulated using Propel.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
   public static function doDelete($values, PropelPDO $con = null)
   {
    if ($con === null)
    {
      $con = Propel::getConnection(iceModelAttributeMeasureUnitI18nPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      // invalidate the cache for all objects of this type, since we have no
      // way of knowing (without running a query) what objects should be invalidated
      // from the cache based on this Criteria.
      iceModelAttributeMeasureUnitI18nPeer::clearInstancePool();
      // rename for clarity
      $criteria = clone $values;
    } elseif ($values instanceof iceModelAttributeMeasureUnitI18n) { // it's a model object
      // invalidate the cache for this single object
      iceModelAttributeMeasureUnitI18nPeer::removeInstanceFromPool($values);
      // create criteria based on pk values
      $criteria = $values->buildPkeyCriteria();
    } else { // it's a primary key, or an array of pks
      $criteria = new Criteria(self::DATABASE_NAME);
      // primary key is composite; we therefore, expect
      // the primary key passed to be an array of pkey values
      if (count($values) == count($values, COUNT_RECURSIVE))
      {
        // array is not multi-dimensional
        $values = array($values);
      }
      foreach ($values as $value)
      {
        $criterion = $criteria->getNewCriterion(iceModelAttributeMeasureUnitI18nPeer::ID, $value[0]);
        $criterion->addAnd($criteria->getNewCriterion(iceModelAttributeMeasureUnitI18nPeer::CULTURE, $value[1]));
        $criteria->addOr($criterion);
        // we can invalidate the cache for this single PK
        iceModelAttributeMeasureUnitI18nPeer::removeInstanceFromPool($value);
      }
    }

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    $affectedRows = 0; // initialize var to track total num of affected rows

    try
    {
      // use transaction because $criteria could contain info
      // for more than one table or we could emulating ON DELETE CASCADE, etc.
      $con->beginTransaction();
      
      $affectedRows += BasePeer::doDelete($criteria, $con);
      iceModelAttributeMeasureUnitI18nPeer::clearRelatedInstancePool();
      $con->commit();
      return $affectedRows;
    }
    catch (PropelException $e)
    {
      $con->rollBack();
      throw $e;
    }
  }

  /**
   * Validates all modified columns of given iceModelAttributeMeasureUnitI18n object.
   * If parameter $columns is either a single column name or an array of column names
   * than only those columns are validated.
   *
   * NOTICE: This does not apply to primary or foreign keys for now.
   *
   * @param      iceModelAttributeMeasureUnitI18n $obj The object to validate.
   * @param      mixed $cols Column name or array of column names.
   *
   * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
   */
  public static function doValidate($obj, $cols = null)
  {
    $columns = array();

    if ($cols)
    {
      $dbMap = Propel::getDatabaseMap(iceModelAttributeMeasureUnitI18nPeer::DATABASE_NAME);
      $tableMap = $dbMap->getTable(iceModelAttributeMeasureUnitI18nPeer::TABLE_NAME);

      if (! is_array($cols))
      {
        $cols = array($cols);
      }

      foreach ($cols as $colName)
      {
        if ($tableMap->containsColumn($colName))
        {
          $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
          $columns[$colName] = $obj->$get();
        }
      }
    }
    else
    {

    }

    return BasePeer::doValidate(iceModelAttributeMeasureUnitI18nPeer::DATABASE_NAME, iceModelAttributeMeasureUnitI18nPeer::TABLE_NAME, $columns);
  }

  /**
   * Retrieve object using using composite pkey values.
   * @param      int $id
   * @param      string $culture
   * @param      PropelPDO $con
   * @return     iceModelAttributeMeasureUnitI18n
   */
  public static function retrieveByPK($id, $culture, PropelPDO $con = null)
  {
    $_instancePoolKey = serialize(array((string) $id, (string) $culture));
     if (null !== ($obj = iceModelAttributeMeasureUnitI18nPeer::getInstanceFromPool($_instancePoolKey))) {
       return $obj;
    }

    if ($con === null)
    {
      $con = Propel::getConnection(iceModelAttributeMeasureUnitI18nPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
    $criteria = new Criteria(iceModelAttributeMeasureUnitI18nPeer::DATABASE_NAME);
    $criteria->add(iceModelAttributeMeasureUnitI18nPeer::ID, $id);
    $criteria->add(iceModelAttributeMeasureUnitI18nPeer::CULTURE, $culture);
    $v = iceModelAttributeMeasureUnitI18nPeer::doSelect($criteria, $con);

    return !empty($v) ? $v[0] : null;
  }
  // symfony behavior
  
  /**
   * Returns an array of arrays that contain columns in each unique index.
   *
   * @return array
   */
  static public function getUniqueColumnNames()
  {
    return array(array('slug', 'culture'));
  }

  // symfony_behaviors behavior
  
  /**
   * Returns the name of the hook to call from inside the supplied method.
   *
   * @param string $method The calling method
   *
   * @return string A hook name for {@link sfMixer}
   *
   * @throws LogicException If the method name is not recognized
   */
  static private function getMixerPreSelectHook($method)
  {
    if (preg_match('/^do(Select|Count)(Join(All(Except)?)?|Stmt)?/', $method, $match))
    {
      return sprintf('BaseiceModelAttributeMeasureUnitI18nPeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
    }
  
    throw new LogicException(sprintf('Unrecognized function "%s"', $method));
  }

}

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseiceModelAttributeMeasureUnitI18nPeer::buildTableMap();

