<?php


/**
 * Base class that represents a row from the 'attribute_measure_unit' table.
 *
 * 
 *
 * @package    propel.generator.plugins.iceAttributesPlugin.lib.model.om
 */
abstract class BaseiceModelAttributeMeasureUnit extends BaseObject  implements Persistent
{

  /**
   * Peer class name
   */
  const PEER = 'iceModelAttributeMeasureUnitPeer';

  /**
   * The Peer class.
   * Instance provides a convenient way of calling static methods on a class
   * that calling code may not be able to identify.
   * @var        iceModelAttributeMeasureUnitPeer
   */
  protected static $peer;

  /**
   * The value for the id field.
   * @var        int
   */
  protected $id;

  /**
   * @var        array iceModelAttribute[] Collection to store aggregation of iceModelAttribute objects.
   */
  protected $colliceModelAttributes;

  /**
   * @var        array iceModelAttributeMeasureUnitI18n[] Collection to store aggregation of iceModelAttributeMeasureUnitI18n objects.
   */
  protected $colliceModelAttributeMeasureUnitI18ns;

  /**
   * Flag to prevent endless save loop, if this object is referenced
   * by another object which falls in this transaction.
   * @var        boolean
   */
  protected $alreadyInSave = false;

  /**
   * Flag to prevent endless validation loop, if this object is referenced
   * by another object which falls in this transaction.
   * @var        boolean
   */
  protected $alreadyInValidation = false;

  // symfony_i18n behavior
  
  /**
   * @var string The value for the culture field
   */
  protected $culture = null;
  
  /**
   * @var array Current I18N objects
   */
  protected $current_i18n = array();

  /**
   * Get the [id] column value.
   * 
   * @return     int
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set the value of [id] column.
   * 
   * @param      int $v new value
   * @return     iceModelAttributeMeasureUnit The current object (for fluent API support)
   */
  public function setId($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->id !== $v)
    {
      $this->id = $v;
      $this->modifiedColumns[] = iceModelAttributeMeasureUnitPeer::ID;
    }

    return $this;
  }

  /**
   * Indicates whether the columns in this object are only set to default values.
   *
   * This method can be used in conjunction with isModified() to indicate whether an object is both
   * modified _and_ has some values set which are non-default.
   *
   * @return     boolean Whether the columns in this object are only been set with default values.
   */
  public function hasOnlyDefaultValues()
  {
    // otherwise, everything was equal, so return TRUE
    return true;
  }

  /**
   * Hydrates (populates) the object variables with values from the database resultset.
   *
   * An offset (0-based "start column") is specified so that objects can be hydrated
   * with a subset of the columns in the resultset rows.  This is needed, for example,
   * for results of JOIN queries where the resultset row includes columns from two or
   * more tables.
   *
   * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
   * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
   * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
   * @return     int next starting column
   * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
   */
  public function hydrate($row, $startcol = 0, $rehydrate = false)
  {
    try
    {

      $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
      $this->resetModified();

      $this->setNew(false);

      if ($rehydrate)
      {
        $this->ensureConsistency();
      }

      return $startcol + 1; // 1 = iceModelAttributeMeasureUnitPeer::NUM_HYDRATE_COLUMNS.

    }
    catch (Exception $e)
    {
      throw new PropelException("Error populating iceModelAttributeMeasureUnit object", $e);
    }
  }

  /**
   * Checks and repairs the internal consistency of the object.
   *
   * This method is executed after an already-instantiated object is re-hydrated
   * from the database.  It exists to check any foreign keys to make sure that
   * the objects related to the current object are correct based on foreign key.
   *
   * You can override this method in the stub class, but you should always invoke
   * the base method from the overridden method (i.e. parent::ensureConsistency()),
   * in case your model changes.
   *
   * @throws     PropelException
   */
  public function ensureConsistency()
  {

  }

  /**
   * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
   *
   * This will only work if the object has been saved and has a valid primary key set.
   *
   * @param      boolean $deep (optional) Whether to also de-associated any related objects.
   * @param      PropelPDO $con (optional) The PropelPDO connection to use.
   * @return     void
   * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
   */
  public function reload($deep = false, PropelPDO $con = null)
  {
    if ($this->isDeleted())
    {
      throw new PropelException("Cannot reload a deleted object.");
    }

    if ($this->isNew())
    {
      throw new PropelException("Cannot reload an unsaved object.");
    }

    if ($con === null)
    {
      $con = Propel::getConnection(iceModelAttributeMeasureUnitPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    // We don't need to alter the object instance pool; we're just modifying this instance
    // already in the pool.

    $stmt = iceModelAttributeMeasureUnitPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
    $row = $stmt->fetch(PDO::FETCH_NUM);
    $stmt->closeCursor();
    if (!$row)
    {
      throw new PropelException('Cannot find matching row in the database to reload object values.');
    }
    $this->hydrate($row, 0, true); // rehydrate

    if ($deep) {  // also de-associate any related objects?

      $this->colliceModelAttributes = null;

      $this->colliceModelAttributeMeasureUnitI18ns = null;

    }
  }

  /**
   * Removes this object from datastore and sets delete attribute.
   *
   * @param      PropelPDO $con
   * @return     void
   * @throws     PropelException
   * @see        BaseObject::setDeleted()
   * @see        BaseObject::isDeleted()
   */
  public function delete(PropelPDO $con = null)
  {
    if ($this->isDeleted())
    {
      throw new PropelException("This object has already been deleted.");
    }

    if ($con === null)
    {
      $con = Propel::getConnection(iceModelAttributeMeasureUnitPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $deleteQuery = iceModelAttributeMeasureUnitQuery::create()
        ->filterByPrimaryKey($this->getPrimaryKey());
      $ret = $this->preDelete($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseiceModelAttributeMeasureUnit:delete:pre') as $callable)
      {
        if (call_user_func($callable, $this, $con))
        {
          $con->commit();
          return;
        }
      }

      if ($ret)
      {
        $deleteQuery->delete($con);
        $this->postDelete($con);
        // symfony_behaviors behavior
        foreach (sfMixer::getCallables('BaseiceModelAttributeMeasureUnit:delete:post') as $callable)
        {
          call_user_func($callable, $this, $con);
        }

        $con->commit();
        $this->setDeleted(true);
      }
      else
      {
        $con->commit();
      }
    }
    catch (PropelException $e)
    {
      $con->rollBack();
      throw $e;
    }
  }

  /**
   * Persists this object to the database.
   *
   * If the object is new, it inserts it; otherwise an update is performed.
   * All modified related objects will also be persisted in the doSave()
   * method.  This method wraps all precipitate database operations in a
   * single transaction.
   *
   * @param      PropelPDO $con
   * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
   * @throws     PropelException
   * @see        doSave()
   */
  public function save(PropelPDO $con = null)
  {
    if ($this->isDeleted())
    {
      throw new PropelException("You cannot save an object that has been deleted.");
    }

    if ($con === null)
    {
      $con = Propel::getConnection(iceModelAttributeMeasureUnitPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    $isInsert = $this->isNew();
    try
    {
      $ret = $this->preSave($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseiceModelAttributeMeasureUnit:save:pre') as $callable)
      {
        if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
        {
          $con->commit();
          return $affectedRows;
        }
      }

      if ($isInsert)
      {
        $ret = $ret && $this->preInsert($con);
      }
      else
      {
        $ret = $ret && $this->preUpdate($con);
      }
      if ($ret)
      {
        $affectedRows = $this->doSave($con);
        if ($isInsert)
        {
          $this->postInsert($con);
        }
        else
        {
          $this->postUpdate($con);
        }
        $this->postSave($con);
        // symfony_behaviors behavior
        foreach (sfMixer::getCallables('BaseiceModelAttributeMeasureUnit:save:post') as $callable)
        {
          call_user_func($callable, $this, $con, $affectedRows);
        }

        iceModelAttributeMeasureUnitPeer::addInstanceToPool($this);
      }
      else
      {
        $affectedRows = 0;
      }
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
   * Performs the work of inserting or updating the row in the database.
   *
   * If the object is new, it inserts it; otherwise an update is performed.
   * All related objects are also updated in this method.
   *
   * @param      PropelPDO $con
   * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
   * @throws     PropelException
   * @see        save()
   */
  protected function doSave(PropelPDO $con)
  {
    $affectedRows = 0; // initialize var to track total num of affected rows
    if (!$this->alreadyInSave)
    {
      $this->alreadyInSave = true;

      if ($this->isNew() )
      {
        $this->modifiedColumns[] = iceModelAttributeMeasureUnitPeer::ID;
      }

      // If this object has been modified, then save it to the database.
      if ($this->isModified())
      {
        if ($this->isNew())
        {
          $criteria = $this->buildCriteria();
          if ($criteria->keyContainsValue(iceModelAttributeMeasureUnitPeer::ID) )
          {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.iceModelAttributeMeasureUnitPeer::ID.')');
          }

          $pk = BasePeer::doInsert($criteria, $con);
          $affectedRows = 1;
          $this->setId($pk);  //[IMV] update autoincrement primary key
          $this->setNew(false);
        }
        else
        {
          $affectedRows = iceModelAttributeMeasureUnitPeer::doUpdate($this, $con);
        }

        $this->resetModified(); // [HL] After being saved an object is no longer 'modified'
      }

      if ($this->colliceModelAttributes !== null)
      {
        foreach ($this->colliceModelAttributes as $referrerFK)
        {
          if (!$referrerFK->isDeleted())
          {
            $affectedRows += $referrerFK->save($con);
          }
        }
      }

      if ($this->colliceModelAttributeMeasureUnitI18ns !== null)
      {
        foreach ($this->colliceModelAttributeMeasureUnitI18ns as $referrerFK)
        {
          $referrerFK->seticeModelAttributeMeasureUnit($this);
          if (!$referrerFK->isDeleted())
          {
            $affectedRows += $referrerFK->save($con);
          }
        }
      }

      $this->alreadyInSave = false;

    }
    return $affectedRows;
  }

  /**
   * Array of ValidationFailed objects.
   * @var        array ValidationFailed[]
   */
  protected $validationFailures = array();

  /**
   * Gets any ValidationFailed objects that resulted from last call to validate().
   *
   *
   * @return     array ValidationFailed[]
   * @see        validate()
   */
  public function getValidationFailures()
  {
    return $this->validationFailures;
  }

  /**
   * Validates the objects modified field values and all objects related to this table.
   *
   * If $columns is either a column name or an array of column names
   * only those columns are validated.
   *
   * @param      mixed $columns Column name or an array of column names.
   * @return     boolean Whether all columns pass validation.
   * @see        doValidate()
   * @see        getValidationFailures()
   */
  public function validate($columns = null)
  {
    $res = $this->doValidate($columns);
    if ($res === true)
    {
      $this->validationFailures = array();
      return true;
    }
    else
    {
      $this->validationFailures = $res;
      return false;
    }
  }

  /**
   * This function performs the validation work for complex object models.
   *
   * In addition to checking the current object, all related objects will
   * also be validated.  If all pass then <code>true</code> is returned; otherwise
   * an aggreagated array of ValidationFailed objects will be returned.
   *
   * @param      array $columns Array of column names to validate.
   * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
   */
  protected function doValidate($columns = null)
  {
    if (!$this->alreadyInValidation)
    {
      $this->alreadyInValidation = true;
      $retval = null;

      $failureMap = array();


      if (($retval = iceModelAttributeMeasureUnitPeer::doValidate($this, $columns)) !== true)
      {
        $failureMap = array_merge($failureMap, $retval);
      }


        if ($this->colliceModelAttributes !== null)
        {
          foreach ($this->colliceModelAttributes as $referrerFK)
          {
            if (!$referrerFK->validate($columns))
            {
              $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
            }
          }
        }

        if ($this->colliceModelAttributeMeasureUnitI18ns !== null)
        {
          foreach ($this->colliceModelAttributeMeasureUnitI18ns as $referrerFK)
          {
          $referrerFK->seticeModelAttributeMeasureUnit($this);
            if (!$referrerFK->validate($columns))
            {
              $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
            }
          }
        }


      $this->alreadyInValidation = false;
    }

    return (!empty($failureMap) ? $failureMap : true);
  }

  /**
   * Retrieves a field from the object by name passed in as a string.
   *
   * @param      string $name name
   * @param      string $type The type of fieldname the $name is of:
   *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
   *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
   * @return     mixed Value of field.
   */
  public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
  {
    $pos = iceModelAttributeMeasureUnitPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
    $field = $this->getByPosition($pos);
    return $field;
  }

  /**
   * Retrieves a field from the object by Position as specified in the xml schema.
   * Zero-based.
   *
   * @param      int $pos position in xml schema
   * @return     mixed Value of field at $pos
   */
  public function getByPosition($pos)
  {
    switch($pos)
    {
      case 0:
        return $this->getId();
        break;
      default:
        return null;
        break;
    }
  }

  /**
   * Exports the object as an array.
   *
   * You can specify the key type of the array by passing one of the class
   * type constants.
   *
   * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
   *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
   *                    Defaults to BasePeer::TYPE_PHPNAME.
   * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
   * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
   * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
   *
   * @return    array an associative array containing the field names (as keys) and field values
   */
  public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
  {
    if (isset($alreadyDumpedObjects['iceModelAttributeMeasureUnit'][$this->getPrimaryKey()]))
    {
      return '*RECURSION*';
    }
    $alreadyDumpedObjects['iceModelAttributeMeasureUnit'][$this->getPrimaryKey()] = true;
    $keys = iceModelAttributeMeasureUnitPeer::getFieldNames($keyType);
    $result = array(
      $keys[0] => $this->getId(),
    );
    if ($includeForeignObjects)
    {
      if (null !== $this->colliceModelAttributes)
      {
        $result['iceModelAttributes'] = $this->colliceModelAttributes->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
      }
      if (null !== $this->colliceModelAttributeMeasureUnitI18ns)
      {
        $result['iceModelAttributeMeasureUnitI18ns'] = $this->colliceModelAttributeMeasureUnitI18ns->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
      }
    }
    return $result;
  }

  /**
   * Sets a field from the object by name passed in as a string.
   *
   * @param      string $name peer name
   * @param      mixed $value field value
   * @param      string $type The type of fieldname the $name is of:
   *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
   *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
   * @return     void
   */
  public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
  {
    $pos = iceModelAttributeMeasureUnitPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
    return $this->setByPosition($pos, $value);
  }

  /**
   * Sets a field from the object by Position as specified in the xml schema.
   * Zero-based.
   *
   * @param      int $pos position in xml schema
   * @param      mixed $value field value
   * @return     void
   */
  public function setByPosition($pos, $value)
  {
    switch($pos)
    {
      case 0:
        $this->setId($value);
        break;
    }
  }

  /**
   * Populates the object using an array.
   *
   * This is particularly useful when populating an object from one of the
   * request arrays (e.g. $_POST).  This method goes through the column
   * names, checking to see whether a matching key exists in populated
   * array. If so the setByName() method is called for that column.
   *
   * You can specify the key type of the array by additionally passing one
   * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
   * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
   * The default key type is the column's phpname (e.g. 'AuthorId')
   *
   * @param      array  $arr     An array to populate the object from.
   * @param      string $keyType The type of keys the array uses.
   * @return     void
   */
  public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
  {
    $keys = iceModelAttributeMeasureUnitPeer::getFieldNames($keyType);

    if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
  }

  /**
   * Build a Criteria object containing the values of all modified columns in this object.
   *
   * @return     Criteria The Criteria object containing all modified values.
   */
  public function buildCriteria()
  {
    $criteria = new Criteria(iceModelAttributeMeasureUnitPeer::DATABASE_NAME);

    if ($this->isColumnModified(iceModelAttributeMeasureUnitPeer::ID)) $criteria->add(iceModelAttributeMeasureUnitPeer::ID, $this->id);

    return $criteria;
  }

  /**
   * Builds a Criteria object containing the primary key for this object.
   *
   * Unlike buildCriteria() this method includes the primary key values regardless
   * of whether or not they have been modified.
   *
   * @return     Criteria The Criteria object containing value(s) for primary key(s).
   */
  public function buildPkeyCriteria()
  {
    $criteria = new Criteria(iceModelAttributeMeasureUnitPeer::DATABASE_NAME);
    $criteria->add(iceModelAttributeMeasureUnitPeer::ID, $this->id);

    return $criteria;
  }

  /**
   * Returns the primary key for this object (row).
   * @return     int
   */
  public function getPrimaryKey()
  {
    return $this->getId();
  }

  /**
   * Generic method to set the primary key (id column).
   *
   * @param      int $key Primary key.
   * @return     void
   */
  public function setPrimaryKey($key)
  {
    $this->setId($key);
  }

  /**
   * Returns true if the primary key for this object is null.
   * @return     boolean
   */
  public function isPrimaryKeyNull()
  {
    return null === $this->getId();
  }

  /**
   * Sets contents of passed object to values from current object.
   *
   * If desired, this method can also make copies of all associated (fkey referrers)
   * objects.
   *
   * @param      object $copyObj An object of iceModelAttributeMeasureUnit (or compatible) type.
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
   * @throws     PropelException
   */
  public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
  {

    if ($deepCopy)
    {
      // important: temporarily setNew(false) because this affects the behavior of
      // the getter/setter methods for fkey referrer objects.
      $copyObj->setNew(false);

      foreach ($this->geticeModelAttributes() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addiceModelAttribute($relObj->copy($deepCopy));
        }
      }

      foreach ($this->geticeModelAttributeMeasureUnitI18ns() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addiceModelAttributeMeasureUnitI18n($relObj->copy($deepCopy));
        }
      }

    }

    if ($makeNew)
    {
      $copyObj->setNew(true);
      $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
    }
  }

  /**
   * Makes a copy of this object that will be inserted as a new row in table when saved.
   * It creates a new object filling in the simple attributes, but skipping any primary
   * keys that are defined for the table.
   *
   * If desired, this method can also make copies of all associated (fkey referrers)
   * objects.
   *
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @return     iceModelAttributeMeasureUnit Clone of current object.
   * @throws     PropelException
   */
  public function copy($deepCopy = false)
  {
    // we use get_class(), because this might be a subclass
    $clazz = get_class($this);
    $copyObj = new $clazz();
    $this->copyInto($copyObj, $deepCopy);
    return $copyObj;
  }

  /**
   * Returns a peer instance associated with this om.
   *
   * Since Peer classes are not to have any instance attributes, this method returns the
   * same instance for all member of this class. The method could therefore
   * be static, but this would prevent one from overriding the behavior.
   *
   * @return     iceModelAttributeMeasureUnitPeer
   */
  public function getPeer()
  {
    if (self::$peer === null)
    {
      self::$peer = new iceModelAttributeMeasureUnitPeer();
    }
    return self::$peer;
  }


  /**
   * Initializes a collection based on the name of a relation.
   * Avoids crafting an 'init[$relationName]s' method name
   * that wouldn't work when StandardEnglishPluralizer is used.
   *
   * @param      string $relationName The name of the relation to initialize
   * @return     void
   */
  public function initRelation($relationName)
  {
    if ('iceModelAttribute' == $relationName)
    {
      return $this->initiceModelAttributes();
    }
    if ('iceModelAttributeMeasureUnitI18n' == $relationName)
    {
      return $this->initiceModelAttributeMeasureUnitI18ns();
    }
  }

  /**
   * Clears out the colliceModelAttributes collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addiceModelAttributes()
   */
  public function cleariceModelAttributes()
  {
    $this->colliceModelAttributes = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the colliceModelAttributes collection.
   *
   * By default this just sets the colliceModelAttributes collection to an empty array (like clearcolliceModelAttributes());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initiceModelAttributes($overrideExisting = true)
  {
    if (null !== $this->colliceModelAttributes && !$overrideExisting)
    {
      return;
    }
    $this->colliceModelAttributes = new PropelObjectCollection();
    $this->colliceModelAttributes->setModel('iceModelAttribute');
  }

  /**
   * Gets an array of iceModelAttribute objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this iceModelAttributeMeasureUnit is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array iceModelAttribute[] List of iceModelAttribute objects
   * @throws     PropelException
   */
  public function geticeModelAttributes($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->colliceModelAttributes || null !== $criteria)
    {
      if ($this->isNew() && null === $this->colliceModelAttributes)
      {
        // return empty collection
        $this->initiceModelAttributes();
      }
      else
      {
        $colliceModelAttributes = iceModelAttributeQuery::create(null, $criteria)
          ->filterByiceModelAttributeMeasureUnit($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $colliceModelAttributes;
        }
        $this->colliceModelAttributes = $colliceModelAttributes;
      }
    }
    return $this->colliceModelAttributes;
  }

  /**
   * Returns the number of related iceModelAttribute objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related iceModelAttribute objects.
   * @throws     PropelException
   */
  public function counticeModelAttributes(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->colliceModelAttributes || null !== $criteria)
    {
      if ($this->isNew() && null === $this->colliceModelAttributes)
      {
        return 0;
      }
      else
      {
        $query = iceModelAttributeQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterByiceModelAttributeMeasureUnit($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->colliceModelAttributes);
    }
  }

  /**
   * Method called to associate a iceModelAttribute object to this object
   * through the iceModelAttribute foreign key attribute.
   *
   * @param      iceModelAttribute $l iceModelAttribute
   * @return     iceModelAttributeMeasureUnit The current object (for fluent API support)
   */
  public function addiceModelAttribute(iceModelAttribute $l)
  {
    if ($this->colliceModelAttributes === null)
    {
      $this->initiceModelAttributes();
    }
    if (!$this->colliceModelAttributes->contains($l)) { // only add it if the **same** object is not already associated
      $this->colliceModelAttributes[]= $l;
      $l->seticeModelAttributeMeasureUnit($this);
    }

    return $this;
  }

  /**
   * Clears out the colliceModelAttributeMeasureUnitI18ns collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addiceModelAttributeMeasureUnitI18ns()
   */
  public function cleariceModelAttributeMeasureUnitI18ns()
  {
    $this->colliceModelAttributeMeasureUnitI18ns = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the colliceModelAttributeMeasureUnitI18ns collection.
   *
   * By default this just sets the colliceModelAttributeMeasureUnitI18ns collection to an empty array (like clearcolliceModelAttributeMeasureUnitI18ns());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initiceModelAttributeMeasureUnitI18ns($overrideExisting = true)
  {
    if (null !== $this->colliceModelAttributeMeasureUnitI18ns && !$overrideExisting)
    {
      return;
    }
    $this->colliceModelAttributeMeasureUnitI18ns = new PropelObjectCollection();
    $this->colliceModelAttributeMeasureUnitI18ns->setModel('iceModelAttributeMeasureUnitI18n');
  }

  /**
   * Gets an array of iceModelAttributeMeasureUnitI18n objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this iceModelAttributeMeasureUnit is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array iceModelAttributeMeasureUnitI18n[] List of iceModelAttributeMeasureUnitI18n objects
   * @throws     PropelException
   */
  public function geticeModelAttributeMeasureUnitI18ns($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->colliceModelAttributeMeasureUnitI18ns || null !== $criteria)
    {
      if ($this->isNew() && null === $this->colliceModelAttributeMeasureUnitI18ns)
      {
        // return empty collection
        $this->initiceModelAttributeMeasureUnitI18ns();
      }
      else
      {
        $colliceModelAttributeMeasureUnitI18ns = iceModelAttributeMeasureUnitI18nQuery::create(null, $criteria)
          ->filterByiceModelAttributeMeasureUnit($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $colliceModelAttributeMeasureUnitI18ns;
        }
        $this->colliceModelAttributeMeasureUnitI18ns = $colliceModelAttributeMeasureUnitI18ns;
      }
    }
    return $this->colliceModelAttributeMeasureUnitI18ns;
  }

  /**
   * Returns the number of related iceModelAttributeMeasureUnitI18n objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related iceModelAttributeMeasureUnitI18n objects.
   * @throws     PropelException
   */
  public function counticeModelAttributeMeasureUnitI18ns(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->colliceModelAttributeMeasureUnitI18ns || null !== $criteria)
    {
      if ($this->isNew() && null === $this->colliceModelAttributeMeasureUnitI18ns)
      {
        return 0;
      }
      else
      {
        $query = iceModelAttributeMeasureUnitI18nQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterByiceModelAttributeMeasureUnit($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->colliceModelAttributeMeasureUnitI18ns);
    }
  }

  /**
   * Method called to associate a iceModelAttributeMeasureUnitI18n object to this object
   * through the iceModelAttributeMeasureUnitI18n foreign key attribute.
   *
   * @param      iceModelAttributeMeasureUnitI18n $l iceModelAttributeMeasureUnitI18n
   * @return     iceModelAttributeMeasureUnit The current object (for fluent API support)
   */
  public function addiceModelAttributeMeasureUnitI18n(iceModelAttributeMeasureUnitI18n $l)
  {
    if ($this->colliceModelAttributeMeasureUnitI18ns === null)
    {
      $this->initiceModelAttributeMeasureUnitI18ns();
    }
    if (!$this->colliceModelAttributeMeasureUnitI18ns->contains($l)) { // only add it if the **same** object is not already associated
      $this->colliceModelAttributeMeasureUnitI18ns[]= $l;
      $l->seticeModelAttributeMeasureUnit($this);
    }

    return $this;
  }

  /**
   * Clears the current object and sets all attributes to their default values
   */
  public function clear()
  {
    $this->id = null;
    $this->alreadyInSave = false;
    $this->alreadyInValidation = false;
    $this->clearAllReferences();
    $this->resetModified();
    $this->setNew(true);
    $this->setDeleted(false);
  }

  /**
   * Resets all references to other model objects or collections of model objects.
   *
   * This method is a user-space workaround for PHP's inability to garbage collect
   * objects with circular references (even in PHP 5.3). This is currently necessary
   * when using Propel in certain daemon or large-volumne/high-memory operations.
   *
   * @param      boolean $deep Whether to also clear the references on all referrer objects.
   */
  public function clearAllReferences($deep = false)
  {
    if ($deep)
    {
      if ($this->colliceModelAttributes)
      {
        foreach ($this->colliceModelAttributes as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
      if ($this->colliceModelAttributeMeasureUnitI18ns)
      {
        foreach ($this->colliceModelAttributeMeasureUnitI18ns as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
    }

    if ($this->colliceModelAttributes instanceof PropelCollection)
    {
      $this->colliceModelAttributes->clearIterator();
    }
    $this->colliceModelAttributes = null;
    if ($this->colliceModelAttributeMeasureUnitI18ns instanceof PropelCollection)
    {
      $this->colliceModelAttributeMeasureUnitI18ns->clearIterator();
    }
    $this->colliceModelAttributeMeasureUnitI18ns = null;
  }

  /**
   * Uses the primaryString column from the related i18n model
   * @see iceModelAttributeMeasureUnitI18n
   */
  public function __toString()
  {
    return (string) $this->getCurrenticeModelAttributeMeasureUnitI18n();
  }


  // symfony_i18n behavior
  
  /**
   * Returns the culture.
   *
   * @return string The culture
   */
  public function getCulture()
  {
    return $this->culture;
  }
  
  /**
   * Sets the culture.
   *
   * @param string  The culture to set
   *
   * @return iceModelAttributeMeasureUnit
   */
  public function setCulture($culture)
  {
    $this->culture = $culture;
    return $this;
  }
  
  /**
   * Returns the "unit" value from the current {@link iceModelAttributeMeasureUnitI18n}.
   */
  public function getUnit($culture = null)
  {
    return $this->getCurrenticeModelAttributeMeasureUnitI18n($culture)->getUnit();
  }
  
  /**
   * Sets the "unit" value of the current {@link iceModelAttributeMeasureUnitI18n}.
   *
   * @return iceModelAttributeMeasureUnit
   */
  public function setUnit($value, $culture = null)
  {
    $this->getCurrenticeModelAttributeMeasureUnitI18n($culture)->setUnit($value);
    return $this;
  }
  
  /**
   * Returns the "name" value from the current {@link iceModelAttributeMeasureUnitI18n}.
   */
  public function getName($culture = null)
  {
    return $this->getCurrenticeModelAttributeMeasureUnitI18n($culture)->getName();
  }
  
  /**
   * Sets the "name" value of the current {@link iceModelAttributeMeasureUnitI18n}.
   *
   * @return iceModelAttributeMeasureUnit
   */
  public function setName($value, $culture = null)
  {
    $this->getCurrenticeModelAttributeMeasureUnitI18n($culture)->setName($value);
    return $this;
  }
  
  /**
   * Returns the "slug" value from the current {@link iceModelAttributeMeasureUnitI18n}.
   */
  public function getSlug($culture = null)
  {
    return $this->getCurrenticeModelAttributeMeasureUnitI18n($culture)->getSlug();
  }
  
  /**
   * Sets the "slug" value of the current {@link iceModelAttributeMeasureUnitI18n}.
   *
   * @return iceModelAttributeMeasureUnit
   */
  public function setSlug($value, $culture = null)
  {
    $this->getCurrenticeModelAttributeMeasureUnitI18n($culture)->setSlug($value);
    return $this;
  }
  
  /**
   * Returns the "description" value from the current {@link iceModelAttributeMeasureUnitI18n}.
   */
  public function getDescription($culture = null)
  {
    return $this->getCurrenticeModelAttributeMeasureUnitI18n($culture)->getDescription();
  }
  
  /**
   * Sets the "description" value of the current {@link iceModelAttributeMeasureUnitI18n}.
   *
   * @return iceModelAttributeMeasureUnit
   */
  public function setDescription($value, $culture = null)
  {
    $this->getCurrenticeModelAttributeMeasureUnitI18n($culture)->setDescription($value);
    return $this;
  }
  
  /**
   * Returns the current translation.
   *
   * @return iceModelAttributeMeasureUnitI18n
   */
  public function getCurrenticeModelAttributeMeasureUnitI18n($culture = null)
  {
    if (null === $culture)
    {
      $culture = null === $this->culture ? sfPropel::getDefaultCulture() : $this->culture;
    }
  
    if (!isset($this->current_i18n[$culture]))
    {
      $object = $this->isNew() ? null : iceModelAttributeMeasureUnitI18nPeer::retrieveByPK($this->getPrimaryKey(), $culture);
      if ($object)
      {
        $this->seticeModelAttributeMeasureUnitI18nForCulture($object, $culture);
      }
      else
      {
        $this->seticeModelAttributeMeasureUnitI18nForCulture(new iceModelAttributeMeasureUnitI18n(), $culture);
        $this->current_i18n[$culture]->setCulture($culture);
      }
    }
  
    return $this->current_i18n[$culture];
  }
  
  /**
   * Sets the translation object for a culture.
   */
  public function seticeModelAttributeMeasureUnitI18nForCulture(iceModelAttributeMeasureUnitI18n $object, $culture)
  {
    $this->current_i18n[$culture] = $object;
    $this->addiceModelAttributeMeasureUnitI18n($object);
  }

  /**
   * Catches calls to virtual methods
   */
  public function __call($name, $params)
  {
    
    // symfony_behaviors behavior
    if ($callable = sfMixer::getCallable('BaseiceModelAttributeMeasureUnit:' . $name))
    {
      array_unshift($params, $this);
      return call_user_func_array($callable, $params);
    }

    return parent::__call($name, $params);
  }

}
