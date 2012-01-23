<?php


/**
 * Base static class for performing query and update operations on the 'attribute_measure_unit' table.
 *
 * 
 *
 * @package    propel.generator.plugins.iceAttributesPlugin.lib.model.om
 */
abstract class BaseiceModelAttributeMeasureUnitPeer
{

  /** the default database name for this class */
  const DATABASE_NAME = 'propel';

  /** the table name for this class */
  const TABLE_NAME = 'attribute_measure_unit';

  /** the related Propel class for this table */
  const OM_CLASS = 'iceModelAttributeMeasureUnit';

  /** A class that can be returned by this peer. */
  const CLASS_DEFAULT = 'plugins.iceAttributesPlugin.lib.model.iceModelAttributeMeasureUnit';

  /** the related TableMap class for this table */
  const TM_CLASS = 'iceModelAttributeMeasureUnitTableMap';

  /** The total number of columns. */
  const NUM_COLUMNS = 1;

  /** The number of lazy-loaded columns. */
  const NUM_LAZY_LOAD_COLUMNS = 0;

  /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
  const NUM_HYDRATE_COLUMNS = 1;

  /** the column name for the ID field */
  const ID = 'attribute_measure_unit.ID';

  /** The default string format for model objects of the related table **/
  const DEFAULT_STRING_FORMAT = 'YAML';

  /**
   * An identiy map to hold any loaded instances of iceModelAttributeMeasureUnit objects.
   * This must be public so that other peer classes can access this when hydrating from JOIN
   * queries.
   * @var        array iceModelAttributeMeasureUnit[]
   */
  public static $instances = array();


  /**
   * holds an array of fieldnames
   *
   * first dimension keys are the type constants
   * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
   */
  protected static $fieldNames = array (
    BasePeer::TYPE_PHPNAME => array ('Id', ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id', ),
    BasePeer::TYPE_COLNAME => array (self::ID, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID', ),
    BasePeer::TYPE_FIELDNAME => array ('id', ),
    BasePeer::TYPE_NUM => array (0, )
  );

  /**
   * holds an array of keys for quick access to the fieldnames array
   *
   * first dimension keys are the type constants
   * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
   */
  protected static $fieldKeys = array (
    BasePeer::TYPE_PHPNAME => array ('Id' => 0, ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, ),
    BasePeer::TYPE_COLNAME => array (self::ID => 0, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, ),
    BasePeer::TYPE_FIELDNAME => array ('id' => 0, ),
    BasePeer::TYPE_NUM => array (0, )
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
   * @param      string $column The column name for current table. (i.e. iceModelAttributeMeasureUnitPeer::COLUMN_NAME).
   * @return     string
   */
  public static function alias($alias, $column)
  {
    return str_replace(iceModelAttributeMeasureUnitPeer::TABLE_NAME.'.', $alias.'.', $column);
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
      $criteria->addSelectColumn(iceModelAttributeMeasureUnitPeer::ID);
    }
    else
    {
      $criteria->addSelectColumn($alias . '.ID');
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
    $criteria->setPrimaryTableName(iceModelAttributeMeasureUnitPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      iceModelAttributeMeasureUnitPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
    $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

    if ($con === null)
    {
      $con = Propel::getConnection(iceModelAttributeMeasureUnitPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseiceModelAttributeMeasureUnitPeer', $criteria, $con);
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
   * @return     iceModelAttributeMeasureUnit
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
  {
    $critcopy = clone $criteria;
    $critcopy->setLimit(1);
    $objects = iceModelAttributeMeasureUnitPeer::doSelect($critcopy, $con);
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
    return iceModelAttributeMeasureUnitPeer::populateObjects(iceModelAttributeMeasureUnitPeer::doSelectStmt($criteria, $con));
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
      $con = Propel::getConnection(iceModelAttributeMeasureUnitPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    if (!$criteria->hasSelectClause())
    {
      $criteria = clone $criteria;
      iceModelAttributeMeasureUnitPeer::addSelectColumns($criteria);
    }

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseiceModelAttributeMeasureUnitPeer', $criteria, $con);
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
   * @param      iceModelAttributeMeasureUnit $value A iceModelAttributeMeasureUnit object.
   * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
   */
  public static function addInstanceToPool($obj, $key = null)
  {
    if (Propel::isInstancePoolingEnabled())
    {
      if ($key === null)
      {
        $key = (string) $obj->getId();
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
   * @param      mixed $value A iceModelAttributeMeasureUnit object or a primary key value.
   */
  public static function removeInstanceFromPool($value)
  {
    if (Propel::isInstancePoolingEnabled() && $value !== null)
    {
      if (is_object($value) && $value instanceof iceModelAttributeMeasureUnit)
      {
        $key = (string) $value->getId();
      }
      elseif (is_scalar($value))
      {
        // assume we've been passed a primary key
        $key = (string) $value;
      }
      else
      {
        $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or iceModelAttributeMeasureUnit object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
   * @return     iceModelAttributeMeasureUnit Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
   * Method to invalidate the instance pool of all tables related to attribute_measure_unit
   * by a foreign key with ON DELETE CASCADE
   */
  public static function clearRelatedInstancePool()
  {
    // Invalidate objects in iceModelAttributePeer instance pool,
    // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
    iceModelAttributePeer::clearInstancePool();
    // Invalidate objects in iceModelAttributeMeasureUnitI18nPeer instance pool,
    // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
    iceModelAttributeMeasureUnitI18nPeer::clearInstancePool();
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
    if ($row[$startcol] === null)
    {
      return null;
    }
    return (string) $row[$startcol];
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
    return (int) $row[$startcol];
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
    $cls = iceModelAttributeMeasureUnitPeer::getOMClass(false);
    // populate the object(s)
    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key = iceModelAttributeMeasureUnitPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj = iceModelAttributeMeasureUnitPeer::getInstanceFromPool($key)))
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
        iceModelAttributeMeasureUnitPeer::addInstanceToPool($obj, $key);
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
   * @return     array (iceModelAttributeMeasureUnit object, last column rank)
   */
  public static function populateObject($row, $startcol = 0)
  {
    $key = iceModelAttributeMeasureUnitPeer::getPrimaryKeyHashFromRow($row, $startcol);
    if (null !== ($obj = iceModelAttributeMeasureUnitPeer::getInstanceFromPool($key)))
    {
      // We no longer rehydrate the object, since this can cause data loss.
      // See http://www.propelorm.org/ticket/509
      // $obj->hydrate($row, $startcol, true); // rehydrate
      $col = $startcol + iceModelAttributeMeasureUnitPeer::NUM_HYDRATE_COLUMNS;
    }
    else
    {
      $cls = iceModelAttributeMeasureUnitPeer::OM_CLASS;
      $obj = new $cls();
      $col = $obj->hydrate($row, $startcol);
      iceModelAttributeMeasureUnitPeer::addInstanceToPool($obj, $key);
    }
    return array($obj, $col);
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
    $dbMap = Propel::getDatabaseMap(BaseiceModelAttributeMeasureUnitPeer::DATABASE_NAME);
    if (!$dbMap->hasTable(BaseiceModelAttributeMeasureUnitPeer::TABLE_NAME))
    {
      $dbMap->addTableObject(new iceModelAttributeMeasureUnitTableMap());
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
    return $withPrefix ? iceModelAttributeMeasureUnitPeer::CLASS_DEFAULT : iceModelAttributeMeasureUnitPeer::OM_CLASS;
  }

  /**
   * Performs an INSERT on the database, given a iceModelAttributeMeasureUnit or Criteria object.
   *
   * @param      mixed $values Criteria or iceModelAttributeMeasureUnit object containing data that is used to create the INSERT statement.
   * @param      PropelPDO $con the PropelPDO connection to use
   * @return     mixed The new primary key.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doInsert($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(iceModelAttributeMeasureUnitPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity
    }
    else
    {
      $criteria = $values->buildCriteria(); // build Criteria from iceModelAttributeMeasureUnit object
    }

    if ($criteria->containsKey(iceModelAttributeMeasureUnitPeer::ID) && $criteria->keyContainsValue(iceModelAttributeMeasureUnitPeer::ID) )
    {
      throw new PropelException('Cannot insert a value for auto-increment primary key ('.iceModelAttributeMeasureUnitPeer::ID.')');
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
   * Performs an UPDATE on the database, given a iceModelAttributeMeasureUnit or Criteria object.
   *
   * @param      mixed $values Criteria or iceModelAttributeMeasureUnit object containing data that is used to create the UPDATE statement.
   * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
   * @return     int The number of affected rows (if supported by underlying database driver).
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doUpdate($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(iceModelAttributeMeasureUnitPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $selectCriteria = new Criteria(self::DATABASE_NAME);

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity

      $comparison = $criteria->getComparison(iceModelAttributeMeasureUnitPeer::ID);
      $value = $criteria->remove(iceModelAttributeMeasureUnitPeer::ID);
      if ($value)
      {
        $selectCriteria->add(iceModelAttributeMeasureUnitPeer::ID, $value, $comparison);
      }
      else
      {
        $selectCriteria->setPrimaryTableName(iceModelAttributeMeasureUnitPeer::TABLE_NAME);
      }

    } else { // $values is iceModelAttributeMeasureUnit object
      $criteria = $values->buildCriteria(); // gets full criteria
      $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
    }

    // set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    return BasePeer::doUpdate($selectCriteria, $criteria, $con);
  }

  /**
   * Deletes all rows from the attribute_measure_unit table.
   *
   * @param      PropelPDO $con the connection to use
   * @return     int The number of affected rows (if supported by underlying database driver).
   */
  public static function doDeleteAll(PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(iceModelAttributeMeasureUnitPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }
    $affectedRows = 0; // initialize var to track total num of affected rows
    try
    {
      // use transaction because $criteria could contain info
      // for more than one table or we could emulating ON DELETE CASCADE, etc.
      $con->beginTransaction();
      $affectedRows += iceModelAttributeMeasureUnitPeer::doOnDeleteCascade(new Criteria(iceModelAttributeMeasureUnitPeer::DATABASE_NAME), $con);
      iceModelAttributeMeasureUnitPeer::doOnDeleteSetNull(new Criteria(iceModelAttributeMeasureUnitPeer::DATABASE_NAME), $con);
      $affectedRows += BasePeer::doDeleteAll(iceModelAttributeMeasureUnitPeer::TABLE_NAME, $con, iceModelAttributeMeasureUnitPeer::DATABASE_NAME);
      // Because this db requires some delete cascade/set null emulation, we have to
      // clear the cached instance *after* the emulation has happened (since
      // instances get re-added by the select statement contained therein).
      iceModelAttributeMeasureUnitPeer::clearInstancePool();
      iceModelAttributeMeasureUnitPeer::clearRelatedInstancePool();
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
   * Performs a DELETE on the database, given a iceModelAttributeMeasureUnit or Criteria object OR a primary key value.
   *
   * @param      mixed $values Criteria or iceModelAttributeMeasureUnit object or primary key or array of primary keys
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
      $con = Propel::getConnection(iceModelAttributeMeasureUnitPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      // rename for clarity
      $criteria = clone $values;
    } elseif ($values instanceof iceModelAttributeMeasureUnit) { // it's a model object
      // create criteria based on pk values
      $criteria = $values->buildPkeyCriteria();
    } else { // it's a primary key, or an array of pks
      $criteria = new Criteria(self::DATABASE_NAME);
      $criteria->add(iceModelAttributeMeasureUnitPeer::ID, (array) $values, Criteria::IN);
    }

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    $affectedRows = 0; // initialize var to track total num of affected rows

    try
    {
      // use transaction because $criteria could contain info
      // for more than one table or we could emulating ON DELETE CASCADE, etc.
      $con->beginTransaction();
      
      // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
      $c = clone $criteria;
      $affectedRows += iceModelAttributeMeasureUnitPeer::doOnDeleteCascade($c, $con);
      
      // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
      $c = clone $criteria;
      iceModelAttributeMeasureUnitPeer::doOnDeleteSetNull($c, $con);
      
      // Because this db requires some delete cascade/set null emulation, we have to
      // clear the cached instance *after* the emulation has happened (since
      // instances get re-added by the select statement contained therein).
      if ($values instanceof Criteria)
      {
        iceModelAttributeMeasureUnitPeer::clearInstancePool();
      } elseif ($values instanceof iceModelAttributeMeasureUnit) { // it's a model object
        iceModelAttributeMeasureUnitPeer::removeInstanceFromPool($values);
      } else { // it's a primary key, or an array of pks
        foreach ((array) $values as $singleval)
        {
          iceModelAttributeMeasureUnitPeer::removeInstanceFromPool($singleval);
        }
      }
      
      $affectedRows += BasePeer::doDelete($criteria, $con);
      iceModelAttributeMeasureUnitPeer::clearRelatedInstancePool();
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
   * This is a method for emulating ON DELETE CASCADE for DBs that don't support this
   * feature (like MySQL or SQLite).
   *
   * This method is not very speedy because it must perform a query first to get
   * the implicated records and then perform the deletes by calling those Peer classes.
   *
   * This method should be used within a transaction if possible.
   *
   * @param      Criteria $criteria
   * @param      PropelPDO $con
   * @return     int The number of affected rows (if supported by underlying database driver).
   */
  protected static function doOnDeleteCascade(Criteria $criteria, PropelPDO $con)
  {
    // initialize var to track total num of affected rows
    $affectedRows = 0;

    // first find the objects that are implicated by the $criteria
    $objects = iceModelAttributeMeasureUnitPeer::doSelect($criteria, $con);
    foreach ($objects as $obj)
    {


      // delete related iceModelAttributeMeasureUnitI18n objects
      $criteria = new Criteria(iceModelAttributeMeasureUnitI18nPeer::DATABASE_NAME);
      
      $criteria->add(iceModelAttributeMeasureUnitI18nPeer::ID, $obj->getId());
      $affectedRows += iceModelAttributeMeasureUnitI18nPeer::doDelete($criteria, $con);
    }
    return $affectedRows;
  }

  /**
   * This is a method for emulating ON DELETE SET NULL DBs that don't support this
   * feature (like MySQL or SQLite).
   *
   * This method is not very speedy because it must perform a query first to get
   * the implicated records and then perform the deletes by calling those Peer classes.
   *
   * This method should be used within a transaction if possible.
   *
   * @param      Criteria $criteria
   * @param      PropelPDO $con
   * @return     void
   */
  protected static function doOnDeleteSetNull(Criteria $criteria, PropelPDO $con)
  {

    // first find the objects that are implicated by the $criteria
    $objects = iceModelAttributeMeasureUnitPeer::doSelect($criteria, $con);
    foreach ($objects as $obj)
    {

      // set fkey col in related iceModelAttribute rows to NULL
      $selectCriteria = new Criteria(iceModelAttributeMeasureUnitPeer::DATABASE_NAME);
      $updateValues = new Criteria(iceModelAttributeMeasureUnitPeer::DATABASE_NAME);
      $selectCriteria->add(iceModelAttributePeer::MEASURE_UNIT_ID, $obj->getId());
      $updateValues->add(iceModelAttributePeer::MEASURE_UNIT_ID, null);

      BasePeer::doUpdate($selectCriteria, $updateValues, $con); // use BasePeer because generated Peer doUpdate() methods only update using pkey

    }
  }

  /**
   * Validates all modified columns of given iceModelAttributeMeasureUnit object.
   * If parameter $columns is either a single column name or an array of column names
   * than only those columns are validated.
   *
   * NOTICE: This does not apply to primary or foreign keys for now.
   *
   * @param      iceModelAttributeMeasureUnit $obj The object to validate.
   * @param      mixed $cols Column name or array of column names.
   *
   * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
   */
  public static function doValidate($obj, $cols = null)
  {
    $columns = array();

    if ($cols)
    {
      $dbMap = Propel::getDatabaseMap(iceModelAttributeMeasureUnitPeer::DATABASE_NAME);
      $tableMap = $dbMap->getTable(iceModelAttributeMeasureUnitPeer::TABLE_NAME);

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

    return BasePeer::doValidate(iceModelAttributeMeasureUnitPeer::DATABASE_NAME, iceModelAttributeMeasureUnitPeer::TABLE_NAME, $columns);
  }

  /**
   * Retrieve a single object by pkey.
   *
   * @param      int $pk the primary key.
   * @param      PropelPDO $con the connection to use
   * @return     iceModelAttributeMeasureUnit
   */
  public static function retrieveByPK($pk, PropelPDO $con = null)
  {

    if (null !== ($obj = iceModelAttributeMeasureUnitPeer::getInstanceFromPool((string) $pk)))
    {
      return $obj;
    }

    if ($con === null)
    {
      $con = Propel::getConnection(iceModelAttributeMeasureUnitPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria = new Criteria(iceModelAttributeMeasureUnitPeer::DATABASE_NAME);
    $criteria->add(iceModelAttributeMeasureUnitPeer::ID, $pk);

    $v = iceModelAttributeMeasureUnitPeer::doSelect($criteria, $con);

    return !empty($v) > 0 ? $v[0] : null;
  }

  /**
   * Retrieve multiple objects by pkey.
   *
   * @param      array $pks List of primary keys
   * @param      PropelPDO $con the connection to use
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function retrieveByPKs($pks, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(iceModelAttributeMeasureUnitPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $objs = null;
    if (empty($pks))
    {
      $objs = array();
    }
    else
    {
      $criteria = new Criteria(iceModelAttributeMeasureUnitPeer::DATABASE_NAME);
      $criteria->add(iceModelAttributeMeasureUnitPeer::ID, $pks, Criteria::IN);
      $objs = iceModelAttributeMeasureUnitPeer::doSelect($criteria, $con);
    }
    return $objs;
  }

  // symfony behavior
  
  /**
   * Returns an array of arrays that contain columns in each unique index.
   *
   * @return array
   */
  static public function getUniqueColumnNames()
  {
    return array();
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
      return sprintf('BaseiceModelAttributeMeasureUnitPeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
    }
  
    throw new LogicException(sprintf('Unrecognized function "%s"', $method));
  }

  // symfony_i18n behavior
  
  /**
   * Returns the i18n model class name.
   *
   * @return string The i18n model class name
   */
  static public function getI18nModel()
  {
    return 'iceModelAttributeMeasureUnitI18n';
  }
  
  /**
   * Selects a collection of {@link iceModelAttributeMeasureUnit} objects with a {@link iceModelAttributeMeasureUnitI18n} translation populated.
   *
   * @param Criteria  $criteria
   * @param string    $culture
   * @param PropelPDO $con
   * @param string    $join_behavior
   *
   * @return array
   */
  static public function doSelectWithI18n(Criteria $criteria, $culture = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $criteria = clone $criteria;
  
    if (null === $culture)
    {
      $culture = sfPropel::getDefaultCulture();
    }
  
    // Set the correct dbName if it has not been overridden
    if ($criteria->getDbName() == Propel::getDefaultDB()) {
      $criteria->setDbName(self::DATABASE_NAME);
    }
  
    iceModelAttributeMeasureUnitPeer::addSelectColumns($criteria);
    $startcol = (iceModelAttributeMeasureUnitPeer::NUM_COLUMNS - iceModelAttributeMeasureUnitPeer::NUM_LAZY_LOAD_COLUMNS);
    iceModelAttributeMeasureUnitI18nPeer::addSelectColumns($criteria);
    $criteria->addJoin(iceModelAttributeMeasureUnitPeer::ID, iceModelAttributeMeasureUnitI18nPeer::ID, $join_behavior);
    $criteria->add(iceModelAttributeMeasureUnitI18nPeer::CULTURE, $culture);
  
    foreach (sfMixer::getCallables('BaseiceModelAttributeMeasureUnit:doSelectJoin:doSelectJoin') as $sf_hook)
    {
      call_user_func($sf_hook, 'iceModelAttributeMeasureUnit', $criteria, $con);
    }
  
    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();
  
    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = iceModelAttributeMeasureUnitPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = iceModelAttributeMeasureUnitPeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://propel.phpdb.org/trac/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      } else {
        $cls = iceModelAttributeMeasureUnitPeer::getOMClass(false);
        $obj1 = new $cls();
        $obj1->hydrate($row);
        iceModelAttributeMeasureUnitPeer::addInstanceToPool($obj1, $key1);
      }
  
      $key2 = iceModelAttributeMeasureUnitI18nPeer::getPrimaryKeyHashFromRow($row, $startcol);
      if ($key2 !== null)
      {
        $obj2 = iceModelAttributeMeasureUnitI18nPeer::getInstanceFromPool($key2);
        if (!$obj2)
        {
          $cls = iceModelAttributeMeasureUnitI18nPeer::getOMClass(false);
          $obj2 = new $cls();
          $obj2->hydrate($row, $startcol);
          iceModelAttributeMeasureUnitI18nPeer::addInstanceToPool($obj2, $key2);
        }
  
        $obj1->seticeModelAttributeMeasureUnitI18nForCulture($obj2, $culture);
      }
  
      $results[] = $obj1;
    }
  
    $stmt->closeCursor();
  
    return $results;
  }

}

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseiceModelAttributeMeasureUnitPeer::buildTableMap();

