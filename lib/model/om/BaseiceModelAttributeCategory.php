<?php


/**
 * Base class that represents a row from the 'attribute_category' table.
 *
 * 
 *
 * @package    propel.generator.plugins.iceAttributesPlugin.lib.model.om
 */
abstract class BaseiceModelAttributeCategory extends BaseObject  implements Persistent
{

  /**
   * Peer class name
   */
  const PEER = 'iceModelAttributeCategoryPeer';

  /**
   * The Peer class.
   * Instance provides a convenient way of calling static methods on a class
   * that calling code may not be able to identify.
   * @var        iceModelAttributeCategoryPeer
   */
  protected static $peer;

  /**
   * The value for the id field.
   * @var        int
   */
  protected $id;

  /**
   * The value for the position field.
   * Note: this column has a database default value of: 0
   * @var        int
   */
  protected $position;

  /**
   * @var        array iceModelAttributeCategoryI18n[] Collection to store aggregation of iceModelAttributeCategoryI18n objects.
   */
  protected $colliceModelAttributeCategoryI18ns;

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
   * Applies default values to this object.
   * This method should be called from the object's constructor (or
   * equivalent initialization method).
   * @see        __construct()
   */
  public function applyDefaultValues()
  {
    $this->position = 0;
  }

  /**
   * Initializes internal state of BaseiceModelAttributeCategory object.
   * @see        applyDefaults()
   */
  public function __construct()
  {
    parent::__construct();
    $this->applyDefaultValues();
  }

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
   * Get the [position] column value.
   * 
   * @return     int
   */
  public function getPosition()
  {
    return $this->position;
  }

  /**
   * Set the value of [id] column.
   * 
   * @param      int $v new value
   * @return     iceModelAttributeCategory The current object (for fluent API support)
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
      $this->modifiedColumns[] = iceModelAttributeCategoryPeer::ID;
    }

    return $this;
  }

  /**
   * Set the value of [position] column.
   * 
   * @param      int $v new value
   * @return     iceModelAttributeCategory The current object (for fluent API support)
   */
  public function setPosition($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->position !== $v)
    {
      $this->position = $v;
      $this->modifiedColumns[] = iceModelAttributeCategoryPeer::POSITION;
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
      if ($this->position !== 0)
      {
        return false;
      }

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
      $this->position = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
      $this->resetModified();

      $this->setNew(false);

      if ($rehydrate)
      {
        $this->ensureConsistency();
      }

      return $startcol + 2; // 2 = iceModelAttributeCategoryPeer::NUM_HYDRATE_COLUMNS.

    }
    catch (Exception $e)
    {
      throw new PropelException("Error populating iceModelAttributeCategory object", $e);
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
      $con = Propel::getConnection(iceModelAttributeCategoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    // We don't need to alter the object instance pool; we're just modifying this instance
    // already in the pool.

    $stmt = iceModelAttributeCategoryPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
    $row = $stmt->fetch(PDO::FETCH_NUM);
    $stmt->closeCursor();
    if (!$row)
    {
      throw new PropelException('Cannot find matching row in the database to reload object values.');
    }
    $this->hydrate($row, 0, true); // rehydrate

    if ($deep) {  // also de-associate any related objects?

      $this->colliceModelAttributeCategoryI18ns = null;

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
      $con = Propel::getConnection(iceModelAttributeCategoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $deleteQuery = iceModelAttributeCategoryQuery::create()
        ->filterByPrimaryKey($this->getPrimaryKey());
      $ret = $this->preDelete($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseiceModelAttributeCategory:delete:pre') as $callable)
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
        foreach (sfMixer::getCallables('BaseiceModelAttributeCategory:delete:post') as $callable)
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
      $con = Propel::getConnection(iceModelAttributeCategoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    $isInsert = $this->isNew();
    try
    {
      $ret = $this->preSave($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseiceModelAttributeCategory:save:pre') as $callable)
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
        foreach (sfMixer::getCallables('BaseiceModelAttributeCategory:save:post') as $callable)
        {
          call_user_func($callable, $this, $con, $affectedRows);
        }

        iceModelAttributeCategoryPeer::addInstanceToPool($this);
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
        $this->modifiedColumns[] = iceModelAttributeCategoryPeer::ID;
      }

      // If this object has been modified, then save it to the database.
      if ($this->isModified())
      {
        if ($this->isNew())
        {
          $criteria = $this->buildCriteria();
          if ($criteria->keyContainsValue(iceModelAttributeCategoryPeer::ID) )
          {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.iceModelAttributeCategoryPeer::ID.')');
          }

          $pk = BasePeer::doInsert($criteria, $con);
          $affectedRows = 1;
          $this->setId($pk);  //[IMV] update autoincrement primary key
          $this->setNew(false);
        }
        else
        {
          $affectedRows = iceModelAttributeCategoryPeer::doUpdate($this, $con);
        }

        $this->resetModified(); // [HL] After being saved an object is no longer 'modified'
      }

      if ($this->colliceModelAttributeCategoryI18ns !== null)
      {
        foreach ($this->colliceModelAttributeCategoryI18ns as $referrerFK)
        {
          $referrerFK->seticeModelAttributeCategory($this);
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


      if (($retval = iceModelAttributeCategoryPeer::doValidate($this, $columns)) !== true)
      {
        $failureMap = array_merge($failureMap, $retval);
      }


        if ($this->colliceModelAttributeCategoryI18ns !== null)
        {
          foreach ($this->colliceModelAttributeCategoryI18ns as $referrerFK)
          {
          $referrerFK->seticeModelAttributeCategory($this);
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
    $pos = iceModelAttributeCategoryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
      case 1:
        return $this->getPosition();
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
    if (isset($alreadyDumpedObjects['iceModelAttributeCategory'][$this->getPrimaryKey()]))
    {
      return '*RECURSION*';
    }
    $alreadyDumpedObjects['iceModelAttributeCategory'][$this->getPrimaryKey()] = true;
    $keys = iceModelAttributeCategoryPeer::getFieldNames($keyType);
    $result = array(
      $keys[0] => $this->getId(),
      $keys[1] => $this->getPosition(),
    );
    if ($includeForeignObjects)
    {
      if (null !== $this->colliceModelAttributeCategoryI18ns)
      {
        $result['iceModelAttributeCategoryI18ns'] = $this->colliceModelAttributeCategoryI18ns->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
    $pos = iceModelAttributeCategoryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
      case 1:
        $this->setPosition($value);
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
    $keys = iceModelAttributeCategoryPeer::getFieldNames($keyType);

    if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
    if (array_key_exists($keys[1], $arr)) $this->setPosition($arr[$keys[1]]);
  }

  /**
   * Build a Criteria object containing the values of all modified columns in this object.
   *
   * @return     Criteria The Criteria object containing all modified values.
   */
  public function buildCriteria()
  {
    $criteria = new Criteria(iceModelAttributeCategoryPeer::DATABASE_NAME);

    if ($this->isColumnModified(iceModelAttributeCategoryPeer::ID)) $criteria->add(iceModelAttributeCategoryPeer::ID, $this->id);
    if ($this->isColumnModified(iceModelAttributeCategoryPeer::POSITION)) $criteria->add(iceModelAttributeCategoryPeer::POSITION, $this->position);

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
    $criteria = new Criteria(iceModelAttributeCategoryPeer::DATABASE_NAME);
    $criteria->add(iceModelAttributeCategoryPeer::ID, $this->id);

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
   * @param      object $copyObj An object of iceModelAttributeCategory (or compatible) type.
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
   * @throws     PropelException
   */
  public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
  {
    $copyObj->setPosition($this->getPosition());

    if ($deepCopy)
    {
      // important: temporarily setNew(false) because this affects the behavior of
      // the getter/setter methods for fkey referrer objects.
      $copyObj->setNew(false);

      foreach ($this->geticeModelAttributeCategoryI18ns() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addiceModelAttributeCategoryI18n($relObj->copy($deepCopy));
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
   * @return     iceModelAttributeCategory Clone of current object.
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
   * @return     iceModelAttributeCategoryPeer
   */
  public function getPeer()
  {
    if (self::$peer === null)
    {
      self::$peer = new iceModelAttributeCategoryPeer();
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
    if ('iceModelAttributeCategoryI18n' == $relationName)
    {
      return $this->initiceModelAttributeCategoryI18ns();
    }
  }

  /**
   * Clears out the colliceModelAttributeCategoryI18ns collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addiceModelAttributeCategoryI18ns()
   */
  public function cleariceModelAttributeCategoryI18ns()
  {
    $this->colliceModelAttributeCategoryI18ns = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the colliceModelAttributeCategoryI18ns collection.
   *
   * By default this just sets the colliceModelAttributeCategoryI18ns collection to an empty array (like clearcolliceModelAttributeCategoryI18ns());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initiceModelAttributeCategoryI18ns($overrideExisting = true)
  {
    if (null !== $this->colliceModelAttributeCategoryI18ns && !$overrideExisting)
    {
      return;
    }
    $this->colliceModelAttributeCategoryI18ns = new PropelObjectCollection();
    $this->colliceModelAttributeCategoryI18ns->setModel('iceModelAttributeCategoryI18n');
  }

  /**
   * Gets an array of iceModelAttributeCategoryI18n objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this iceModelAttributeCategory is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array iceModelAttributeCategoryI18n[] List of iceModelAttributeCategoryI18n objects
   * @throws     PropelException
   */
  public function geticeModelAttributeCategoryI18ns($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->colliceModelAttributeCategoryI18ns || null !== $criteria)
    {
      if ($this->isNew() && null === $this->colliceModelAttributeCategoryI18ns)
      {
        // return empty collection
        $this->initiceModelAttributeCategoryI18ns();
      }
      else
      {
        $colliceModelAttributeCategoryI18ns = iceModelAttributeCategoryI18nQuery::create(null, $criteria)
          ->filterByiceModelAttributeCategory($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $colliceModelAttributeCategoryI18ns;
        }
        $this->colliceModelAttributeCategoryI18ns = $colliceModelAttributeCategoryI18ns;
      }
    }
    return $this->colliceModelAttributeCategoryI18ns;
  }

  /**
   * Returns the number of related iceModelAttributeCategoryI18n objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related iceModelAttributeCategoryI18n objects.
   * @throws     PropelException
   */
  public function counticeModelAttributeCategoryI18ns(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->colliceModelAttributeCategoryI18ns || null !== $criteria)
    {
      if ($this->isNew() && null === $this->colliceModelAttributeCategoryI18ns)
      {
        return 0;
      }
      else
      {
        $query = iceModelAttributeCategoryI18nQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterByiceModelAttributeCategory($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->colliceModelAttributeCategoryI18ns);
    }
  }

  /**
   * Method called to associate a iceModelAttributeCategoryI18n object to this object
   * through the iceModelAttributeCategoryI18n foreign key attribute.
   *
   * @param      iceModelAttributeCategoryI18n $l iceModelAttributeCategoryI18n
   * @return     iceModelAttributeCategory The current object (for fluent API support)
   */
  public function addiceModelAttributeCategoryI18n(iceModelAttributeCategoryI18n $l)
  {
    if ($this->colliceModelAttributeCategoryI18ns === null)
    {
      $this->initiceModelAttributeCategoryI18ns();
    }
    if (!$this->colliceModelAttributeCategoryI18ns->contains($l)) { // only add it if the **same** object is not already associated
      $this->colliceModelAttributeCategoryI18ns[]= $l;
      $l->seticeModelAttributeCategory($this);
    }

    return $this;
  }

  /**
   * Clears the current object and sets all attributes to their default values
   */
  public function clear()
  {
    $this->id = null;
    $this->position = null;
    $this->alreadyInSave = false;
    $this->alreadyInValidation = false;
    $this->clearAllReferences();
    $this->applyDefaultValues();
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
      if ($this->colliceModelAttributeCategoryI18ns)
      {
        foreach ($this->colliceModelAttributeCategoryI18ns as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
    }

    if ($this->colliceModelAttributeCategoryI18ns instanceof PropelCollection)
    {
      $this->colliceModelAttributeCategoryI18ns->clearIterator();
    }
    $this->colliceModelAttributeCategoryI18ns = null;
  }

  /**
   * Uses the primaryString column from the related i18n model
   * @see iceModelAttributeCategoryI18n
   */
  public function __toString()
  {
    return (string) $this->getCurrenticeModelAttributeCategoryI18n();
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
   * @return iceModelAttributeCategory
   */
  public function setCulture($culture)
  {
    $this->culture = $culture;
    return $this;
  }
  
  /**
   * Returns the "name" value from the current {@link iceModelAttributeCategoryI18n}.
   */
  public function getName($culture = null)
  {
    return $this->getCurrenticeModelAttributeCategoryI18n($culture)->getName();
  }
  
  /**
   * Sets the "name" value of the current {@link iceModelAttributeCategoryI18n}.
   *
   * @return iceModelAttributeCategory
   */
  public function setName($value, $culture = null)
  {
    $this->getCurrenticeModelAttributeCategoryI18n($culture)->setName($value);
    return $this;
  }
  
  /**
   * Returns the "name_translit" value from the current {@link iceModelAttributeCategoryI18n}.
   */
  public function getNameTranslit($culture = null)
  {
    return $this->getCurrenticeModelAttributeCategoryI18n($culture)->getNameTranslit();
  }
  
  /**
   * Sets the "name_translit" value of the current {@link iceModelAttributeCategoryI18n}.
   *
   * @return iceModelAttributeCategory
   */
  public function setNameTranslit($value, $culture = null)
  {
    $this->getCurrenticeModelAttributeCategoryI18n($culture)->setNameTranslit($value);
    return $this;
  }
  
  /**
   * Returns the "slug" value from the current {@link iceModelAttributeCategoryI18n}.
   */
  public function getSlug($culture = null)
  {
    return $this->getCurrenticeModelAttributeCategoryI18n($culture)->getSlug();
  }
  
  /**
   * Sets the "slug" value of the current {@link iceModelAttributeCategoryI18n}.
   *
   * @return iceModelAttributeCategory
   */
  public function setSlug($value, $culture = null)
  {
    $this->getCurrenticeModelAttributeCategoryI18n($culture)->setSlug($value);
    return $this;
  }
  
  /**
   * Returns the current translation.
   *
   * @return iceModelAttributeCategoryI18n
   */
  public function getCurrenticeModelAttributeCategoryI18n($culture = null)
  {
    if (null === $culture)
    {
      $culture = null === $this->culture ? sfPropel::getDefaultCulture() : $this->culture;
    }
  
    if (!isset($this->current_i18n[$culture]))
    {
      $object = $this->isNew() ? null : iceModelAttributeCategoryI18nPeer::retrieveByPK($this->getPrimaryKey(), $culture);
      if ($object)
      {
        $this->seticeModelAttributeCategoryI18nForCulture($object, $culture);
      }
      else
      {
        $this->seticeModelAttributeCategoryI18nForCulture(new iceModelAttributeCategoryI18n(), $culture);
        $this->current_i18n[$culture]->setCulture($culture);
      }
    }
  
    return $this->current_i18n[$culture];
  }
  
  /**
   * Sets the translation object for a culture.
   */
  public function seticeModelAttributeCategoryI18nForCulture(iceModelAttributeCategoryI18n $object, $culture)
  {
    $this->current_i18n[$culture] = $object;
    $this->addiceModelAttributeCategoryI18n($object);
  }

  /**
   * Catches calls to virtual methods
   */
  public function __call($name, $params)
  {
    
    // symfony_behaviors behavior
    if ($callable = sfMixer::getCallable('BaseiceModelAttributeCategory:' . $name))
    {
      array_unshift($params, $this);
      return call_user_func_array($callable, $params);
    }

    return parent::__call($name, $params);
  }

}
