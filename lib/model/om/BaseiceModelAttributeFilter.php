<?php


/**
 * Base class that represents a row from the 'attribute_filter' table.
 *
 * 
 *
 * @package    propel.generator.plugins.iceAttributesPlugin.lib.model.om
 */
abstract class BaseiceModelAttributeFilter extends BaseObject  implements Persistent
{

  /**
   * Peer class name
   */
  const PEER = 'iceModelAttributeFilterPeer';

  /**
   * The Peer class.
   * Instance provides a convenient way of calling static methods on a class
   * that calling code may not be able to identify.
   * @var        iceModelAttributeFilterPeer
   */
  protected static $peer;

  /**
   * The value for the id field.
   * @var        int
   */
  protected $id;

  /**
   * The value for the attribute_id field.
   * @var        int
   */
  protected $attribute_id;

  /**
   * The value for the pattern field.
   * @var        string
   */
  protected $pattern;

  /**
   * The value for the replacement field.
   * @var        string
   */
  protected $replacement;

  /**
   * The value for the limit field.
   * Note: this column has a database default value of: -1
   * @var        int
   */
  protected $limit;

  /**
   * The value for the position field.
   * Note: this column has a database default value of: 0
   * @var        int
   */
  protected $position;

  /**
   * @var        iceModelAttribute
   */
  protected $aiceModelAttribute;

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

  /**
   * Applies default values to this object.
   * This method should be called from the object's constructor (or
   * equivalent initialization method).
   * @see        __construct()
   */
  public function applyDefaultValues()
  {
    $this->limit = -1;
    $this->position = 0;
  }

  /**
   * Initializes internal state of BaseiceModelAttributeFilter object.
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
   * Get the [attribute_id] column value.
   * 
   * @return     int
   */
  public function getAttributeId()
  {
    return $this->attribute_id;
  }

  /**
   * Get the [pattern] column value.
   * 
   * @return     string
   */
  public function getPattern()
  {
    return $this->pattern;
  }

  /**
   * Get the [replacement] column value.
   * 
   * @return     string
   */
  public function getReplacement()
  {
    return $this->replacement;
  }

  /**
   * Get the [limit] column value.
   * 
   * @return     int
   */
  public function getLimit()
  {
    return $this->limit;
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
   * @return     iceModelAttributeFilter The current object (for fluent API support)
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
      $this->modifiedColumns[] = iceModelAttributeFilterPeer::ID;
    }

    return $this;
  }

  /**
   * Set the value of [attribute_id] column.
   * 
   * @param      int $v new value
   * @return     iceModelAttributeFilter The current object (for fluent API support)
   */
  public function setAttributeId($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->attribute_id !== $v)
    {
      $this->attribute_id = $v;
      $this->modifiedColumns[] = iceModelAttributeFilterPeer::ATTRIBUTE_ID;
    }

    if ($this->aiceModelAttribute !== null && $this->aiceModelAttribute->getId() !== $v)
    {
      $this->aiceModelAttribute = null;
    }

    return $this;
  }

  /**
   * Set the value of [pattern] column.
   * 
   * @param      string $v new value
   * @return     iceModelAttributeFilter The current object (for fluent API support)
   */
  public function setPattern($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->pattern !== $v)
    {
      $this->pattern = $v;
      $this->modifiedColumns[] = iceModelAttributeFilterPeer::PATTERN;
    }

    return $this;
  }

  /**
   * Set the value of [replacement] column.
   * 
   * @param      string $v new value
   * @return     iceModelAttributeFilter The current object (for fluent API support)
   */
  public function setReplacement($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->replacement !== $v)
    {
      $this->replacement = $v;
      $this->modifiedColumns[] = iceModelAttributeFilterPeer::REPLACEMENT;
    }

    return $this;
  }

  /**
   * Set the value of [limit] column.
   * 
   * @param      int $v new value
   * @return     iceModelAttributeFilter The current object (for fluent API support)
   */
  public function setLimit($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->limit !== $v)
    {
      $this->limit = $v;
      $this->modifiedColumns[] = iceModelAttributeFilterPeer::LIMIT;
    }

    return $this;
  }

  /**
   * Set the value of [position] column.
   * 
   * @param      int $v new value
   * @return     iceModelAttributeFilter The current object (for fluent API support)
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
      $this->modifiedColumns[] = iceModelAttributeFilterPeer::POSITION;
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
      if ($this->limit !== -1)
      {
        return false;
      }

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
      $this->attribute_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
      $this->pattern = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
      $this->replacement = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
      $this->limit = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
      $this->position = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
      $this->resetModified();

      $this->setNew(false);

      if ($rehydrate)
      {
        $this->ensureConsistency();
      }

      return $startcol + 6; // 6 = iceModelAttributeFilterPeer::NUM_HYDRATE_COLUMNS.

    }
    catch (Exception $e)
    {
      throw new PropelException("Error populating iceModelAttributeFilter object", $e);
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

    if ($this->aiceModelAttribute !== null && $this->attribute_id !== $this->aiceModelAttribute->getId())
    {
      $this->aiceModelAttribute = null;
    }
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
      $con = Propel::getConnection(iceModelAttributeFilterPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    // We don't need to alter the object instance pool; we're just modifying this instance
    // already in the pool.

    $stmt = iceModelAttributeFilterPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
    $row = $stmt->fetch(PDO::FETCH_NUM);
    $stmt->closeCursor();
    if (!$row)
    {
      throw new PropelException('Cannot find matching row in the database to reload object values.');
    }
    $this->hydrate($row, 0, true); // rehydrate

    if ($deep) {  // also de-associate any related objects?

      $this->aiceModelAttribute = null;
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
      $con = Propel::getConnection(iceModelAttributeFilterPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $deleteQuery = iceModelAttributeFilterQuery::create()
        ->filterByPrimaryKey($this->getPrimaryKey());
      $ret = $this->preDelete($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseiceModelAttributeFilter:delete:pre') as $callable)
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
        foreach (sfMixer::getCallables('BaseiceModelAttributeFilter:delete:post') as $callable)
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
      $con = Propel::getConnection(iceModelAttributeFilterPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    $isInsert = $this->isNew();
    try
    {
      $ret = $this->preSave($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseiceModelAttributeFilter:save:pre') as $callable)
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
        foreach (sfMixer::getCallables('BaseiceModelAttributeFilter:save:post') as $callable)
        {
          call_user_func($callable, $this, $con, $affectedRows);
        }

        iceModelAttributeFilterPeer::addInstanceToPool($this);
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

      // We call the save method on the following object(s) if they
      // were passed to this object by their coresponding set
      // method.  This object relates to these object(s) by a
      // foreign key reference.

      if ($this->aiceModelAttribute !== null)
      {
        if ($this->aiceModelAttribute->isModified() || $this->aiceModelAttribute->isNew())
        {
          $affectedRows += $this->aiceModelAttribute->save($con);
        }
        $this->seticeModelAttribute($this->aiceModelAttribute);
      }

      if ($this->isNew() )
      {
        $this->modifiedColumns[] = iceModelAttributeFilterPeer::ID;
      }

      // If this object has been modified, then save it to the database.
      if ($this->isModified())
      {
        if ($this->isNew())
        {
          $criteria = $this->buildCriteria();
          if ($criteria->keyContainsValue(iceModelAttributeFilterPeer::ID) )
          {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.iceModelAttributeFilterPeer::ID.')');
          }

          $pk = BasePeer::doInsert($criteria, $con);
          $affectedRows += 1;
          $this->setId($pk);  //[IMV] update autoincrement primary key
          $this->setNew(false);
        }
        else
        {
          $affectedRows += iceModelAttributeFilterPeer::doUpdate($this, $con);
        }

        $this->resetModified(); // [HL] After being saved an object is no longer 'modified'
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


      // We call the validate method on the following object(s) if they
      // were passed to this object by their coresponding set
      // method.  This object relates to these object(s) by a
      // foreign key reference.

      if ($this->aiceModelAttribute !== null)
      {
        if (!$this->aiceModelAttribute->validate($columns))
        {
          $failureMap = array_merge($failureMap, $this->aiceModelAttribute->getValidationFailures());
        }
      }


      if (($retval = iceModelAttributeFilterPeer::doValidate($this, $columns)) !== true)
      {
        $failureMap = array_merge($failureMap, $retval);
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
    $pos = iceModelAttributeFilterPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        return $this->getAttributeId();
        break;
      case 2:
        return $this->getPattern();
        break;
      case 3:
        return $this->getReplacement();
        break;
      case 4:
        return $this->getLimit();
        break;
      case 5:
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
    if (isset($alreadyDumpedObjects['iceModelAttributeFilter'][$this->getPrimaryKey()]))
    {
      return '*RECURSION*';
    }
    $alreadyDumpedObjects['iceModelAttributeFilter'][$this->getPrimaryKey()] = true;
    $keys = iceModelAttributeFilterPeer::getFieldNames($keyType);
    $result = array(
      $keys[0] => $this->getId(),
      $keys[1] => $this->getAttributeId(),
      $keys[2] => $this->getPattern(),
      $keys[3] => $this->getReplacement(),
      $keys[4] => $this->getLimit(),
      $keys[5] => $this->getPosition(),
    );
    if ($includeForeignObjects)
    {
      if (null !== $this->aiceModelAttribute)
      {
        $result['iceModelAttribute'] = $this->aiceModelAttribute->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
    $pos = iceModelAttributeFilterPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        $this->setAttributeId($value);
        break;
      case 2:
        $this->setPattern($value);
        break;
      case 3:
        $this->setReplacement($value);
        break;
      case 4:
        $this->setLimit($value);
        break;
      case 5:
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
    $keys = iceModelAttributeFilterPeer::getFieldNames($keyType);

    if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
    if (array_key_exists($keys[1], $arr)) $this->setAttributeId($arr[$keys[1]]);
    if (array_key_exists($keys[2], $arr)) $this->setPattern($arr[$keys[2]]);
    if (array_key_exists($keys[3], $arr)) $this->setReplacement($arr[$keys[3]]);
    if (array_key_exists($keys[4], $arr)) $this->setLimit($arr[$keys[4]]);
    if (array_key_exists($keys[5], $arr)) $this->setPosition($arr[$keys[5]]);
  }

  /**
   * Build a Criteria object containing the values of all modified columns in this object.
   *
   * @return     Criteria The Criteria object containing all modified values.
   */
  public function buildCriteria()
  {
    $criteria = new Criteria(iceModelAttributeFilterPeer::DATABASE_NAME);

    if ($this->isColumnModified(iceModelAttributeFilterPeer::ID)) $criteria->add(iceModelAttributeFilterPeer::ID, $this->id);
    if ($this->isColumnModified(iceModelAttributeFilterPeer::ATTRIBUTE_ID)) $criteria->add(iceModelAttributeFilterPeer::ATTRIBUTE_ID, $this->attribute_id);
    if ($this->isColumnModified(iceModelAttributeFilterPeer::PATTERN)) $criteria->add(iceModelAttributeFilterPeer::PATTERN, $this->pattern);
    if ($this->isColumnModified(iceModelAttributeFilterPeer::REPLACEMENT)) $criteria->add(iceModelAttributeFilterPeer::REPLACEMENT, $this->replacement);
    if ($this->isColumnModified(iceModelAttributeFilterPeer::LIMIT)) $criteria->add(iceModelAttributeFilterPeer::LIMIT, $this->limit);
    if ($this->isColumnModified(iceModelAttributeFilterPeer::POSITION)) $criteria->add(iceModelAttributeFilterPeer::POSITION, $this->position);

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
    $criteria = new Criteria(iceModelAttributeFilterPeer::DATABASE_NAME);
    $criteria->add(iceModelAttributeFilterPeer::ID, $this->id);

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
   * @param      object $copyObj An object of iceModelAttributeFilter (or compatible) type.
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
   * @throws     PropelException
   */
  public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
  {
    $copyObj->setAttributeId($this->getAttributeId());
    $copyObj->setPattern($this->getPattern());
    $copyObj->setReplacement($this->getReplacement());
    $copyObj->setLimit($this->getLimit());
    $copyObj->setPosition($this->getPosition());
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
   * @return     iceModelAttributeFilter Clone of current object.
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
   * @return     iceModelAttributeFilterPeer
   */
  public function getPeer()
  {
    if (self::$peer === null)
    {
      self::$peer = new iceModelAttributeFilterPeer();
    }
    return self::$peer;
  }

  /**
   * Declares an association between this object and a iceModelAttribute object.
   *
   * @param      iceModelAttribute $v
   * @return     iceModelAttributeFilter The current object (for fluent API support)
   * @throws     PropelException
   */
  public function seticeModelAttribute(iceModelAttribute $v = null)
  {
    if ($v === null)
    {
      $this->setAttributeId(NULL);
    }
    else
    {
      $this->setAttributeId($v->getId());
    }

    $this->aiceModelAttribute = $v;

    // Add binding for other direction of this n:n relationship.
    // If this object has already been added to the iceModelAttribute object, it will not be re-added.
    if ($v !== null)
    {
      $v->addiceModelAttributeFilter($this);
    }

    return $this;
  }


  /**
   * Get the associated iceModelAttribute object
   *
   * @param      PropelPDO Optional Connection object.
   * @return     iceModelAttribute The associated iceModelAttribute object.
   * @throws     PropelException
   */
  public function geticeModelAttribute(PropelPDO $con = null)
  {
    if ($this->aiceModelAttribute === null && ($this->attribute_id !== null))
    {
      $this->aiceModelAttribute = iceModelAttributeQuery::create()->findPk($this->attribute_id, $con);
      /* The following can be used additionally to
        guarantee the related object contains a reference
        to this object.  This level of coupling may, however, be
        undesirable since it could result in an only partially populated collection
        in the referenced object.
        $this->aiceModelAttribute->addiceModelAttributeFilters($this);
       */
    }
    return $this->aiceModelAttribute;
  }

  /**
   * Clears the current object and sets all attributes to their default values
   */
  public function clear()
  {
    $this->id = null;
    $this->attribute_id = null;
    $this->pattern = null;
    $this->replacement = null;
    $this->limit = null;
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
    }

    $this->aiceModelAttribute = null;
  }

  /**
   * Return the string representation of this object
   *
   * @return string
   */
  public function __toString()
  {
    return (string) $this->exportTo(iceModelAttributeFilterPeer::DEFAULT_STRING_FORMAT);
  }

  /**
   * Catches calls to virtual methods
   */
  public function __call($name, $params)
  {
    
    // symfony_behaviors behavior
    if ($callable = sfMixer::getCallable('BaseiceModelAttributeFilter:' . $name))
    {
      array_unshift($params, $this);
      return call_user_func_array($callable, $params);
    }

    return parent::__call($name, $params);
  }

}
