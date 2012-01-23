<?php


/**
 * Base class that represents a query for the 'attribute_value' table.
 *
 * 
 *
 * @method     iceModelAttributeValueQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     iceModelAttributeValueQuery orderByString($order = Criteria::ASC) Order by the string column
 * @method     iceModelAttributeValueQuery orderByNumeric($order = Criteria::ASC) Order by the numeric column
 * @method     iceModelAttributeValueQuery orderByBoolean($order = Criteria::ASC) Order by the boolean column
 * @method     iceModelAttributeValueQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method     iceModelAttributeValueQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     iceModelAttributeValueQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     iceModelAttributeValueQuery groupById() Group by the id column
 * @method     iceModelAttributeValueQuery groupByString() Group by the string column
 * @method     iceModelAttributeValueQuery groupByNumeric() Group by the numeric column
 * @method     iceModelAttributeValueQuery groupByBoolean() Group by the boolean column
 * @method     iceModelAttributeValueQuery groupByDate() Group by the date column
 * @method     iceModelAttributeValueQuery groupByCreatedAt() Group by the created_at column
 * @method     iceModelAttributeValueQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     iceModelAttributeValueQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     iceModelAttributeValueQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     iceModelAttributeValueQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     iceModelAttributeValue findOne(PropelPDO $con = null) Return the first iceModelAttributeValue matching the query
 * @method     iceModelAttributeValue findOneOrCreate(PropelPDO $con = null) Return the first iceModelAttributeValue matching the query, or a new iceModelAttributeValue object populated from the query conditions when no match is found
 *
 * @method     iceModelAttributeValue findOneById(int $id) Return the first iceModelAttributeValue filtered by the id column
 * @method     iceModelAttributeValue findOneByString(string $string) Return the first iceModelAttributeValue filtered by the string column
 * @method     iceModelAttributeValue findOneByNumeric(double $numeric) Return the first iceModelAttributeValue filtered by the numeric column
 * @method     iceModelAttributeValue findOneByBoolean(boolean $boolean) Return the first iceModelAttributeValue filtered by the boolean column
 * @method     iceModelAttributeValue findOneByDate(string $date) Return the first iceModelAttributeValue filtered by the date column
 * @method     iceModelAttributeValue findOneByCreatedAt(string $created_at) Return the first iceModelAttributeValue filtered by the created_at column
 * @method     iceModelAttributeValue findOneByUpdatedAt(string $updated_at) Return the first iceModelAttributeValue filtered by the updated_at column
 *
 * @method     array findById(int $id) Return iceModelAttributeValue objects filtered by the id column
 * @method     array findByString(string $string) Return iceModelAttributeValue objects filtered by the string column
 * @method     array findByNumeric(double $numeric) Return iceModelAttributeValue objects filtered by the numeric column
 * @method     array findByBoolean(boolean $boolean) Return iceModelAttributeValue objects filtered by the boolean column
 * @method     array findByDate(string $date) Return iceModelAttributeValue objects filtered by the date column
 * @method     array findByCreatedAt(string $created_at) Return iceModelAttributeValue objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return iceModelAttributeValue objects filtered by the updated_at column
 *
 * @package    propel.generator.plugins.iceAttributesPlugin.lib.model.om
 */
abstract class BaseiceModelAttributeValueQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseiceModelAttributeValueQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'iceModelAttributeValue', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new iceModelAttributeValueQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    iceModelAttributeValueQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof iceModelAttributeValueQuery) {
            return $criteria;
        }
        $query = new iceModelAttributeValueQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }
        return $query;
    }

    /**
     * Find object by primary key
     * Use instance pooling to avoid a database query if the object exists
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    iceModelAttributeValue|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = iceModelAttributeValuePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
            // the object is alredy in the instance pool
            return $obj;
        } else {
            // the object has not been requested yet, or the formatter is not an object formatter
            $criteria = $this->isKeepQuery() ? clone $this : $this;
            $stmt = $criteria
                ->filterByPrimaryKey($key)
                ->getSelectStatement($con);
            return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
        }
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        return $this
            ->filterByPrimaryKeys($keys)
            ->find($con);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return    iceModelAttributeValueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(iceModelAttributeValuePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    iceModelAttributeValueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(iceModelAttributeValuePeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelAttributeValueQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(iceModelAttributeValuePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the string column
     *
     * Example usage:
     * <code>
     * $query->filterByString('fooValue');   // WHERE string = 'fooValue'
     * $query->filterByString('%fooValue%'); // WHERE string LIKE '%fooValue%'
     * </code>
     *
     * @param     string $string The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelAttributeValueQuery The current query, for fluid interface
     */
    public function filterByString($string = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($string)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $string)) {
                $string = str_replace('*', '%', $string);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelAttributeValuePeer::STRING, $string, $comparison);
    }

    /**
     * Filter the query on the numeric column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeric(1234); // WHERE numeric = 1234
     * $query->filterByNumeric(array(12, 34)); // WHERE numeric IN (12, 34)
     * $query->filterByNumeric(array('min' => 12)); // WHERE numeric > 12
     * </code>
     *
     * @param     mixed $numeric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelAttributeValueQuery The current query, for fluid interface
     */
    public function filterByNumeric($numeric = null, $comparison = null)
    {
        if (is_array($numeric)) {
            $useMinMax = false;
            if (isset($numeric['min'])) {
                $this->addUsingAlias(iceModelAttributeValuePeer::NUMERIC, $numeric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numeric['max'])) {
                $this->addUsingAlias(iceModelAttributeValuePeer::NUMERIC, $numeric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelAttributeValuePeer::NUMERIC, $numeric, $comparison);
    }

    /**
     * Filter the query on the boolean column
     *
     * Example usage:
     * <code>
     * $query->filterByBoolean(true); // WHERE boolean = true
     * $query->filterByBoolean('yes'); // WHERE boolean = true
     * </code>
     *
     * @param     boolean|string $boolean The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelAttributeValueQuery The current query, for fluid interface
     */
    public function filterByBoolean($boolean = null, $comparison = null)
    {
        if (is_string($boolean)) {
            $boolean = in_array(strtolower($boolean), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(iceModelAttributeValuePeer::BOOLEAN, $boolean, $comparison);
    }

    /**
     * Filter the query on the date column
     *
     * Example usage:
     * <code>
     * $query->filterByDate('2011-03-14'); // WHERE date = '2011-03-14'
     * $query->filterByDate('now'); // WHERE date = '2011-03-14'
     * $query->filterByDate(array('max' => 'yesterday')); // WHERE date > '2011-03-13'
     * </code>
     *
     * @param     mixed $date The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelAttributeValueQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(iceModelAttributeValuePeer::DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(iceModelAttributeValuePeer::DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelAttributeValuePeer::DATE, $date, $comparison);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $createdAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelAttributeValueQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(iceModelAttributeValuePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(iceModelAttributeValuePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelAttributeValuePeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query on the updated_at column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt(array('max' => 'yesterday')); // WHERE updated_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $updatedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelAttributeValueQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(iceModelAttributeValuePeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(iceModelAttributeValuePeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelAttributeValuePeer::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     iceModelAttributeValue $iceModelAttributeValue Object to remove from the list of results
     *
     * @return    iceModelAttributeValueQuery The current query, for fluid interface
     */
    public function prune($iceModelAttributeValue = null)
    {
        if ($iceModelAttributeValue) {
            $this->addUsingAlias(iceModelAttributeValuePeer::ID, $iceModelAttributeValue->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

  // timestampable behavior
  
  /**
   * Filter by the latest updated
   *
   * @param      int $nbDays Maximum age of the latest update in days
   *
   * @return     iceModelAttributeValueQuery The current query, for fluid interface
   */
  public function recentlyUpdated($nbDays = 7)
  {
    return $this->addUsingAlias(iceModelAttributeValuePeer::UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
  }
  
  /**
   * Filter by the latest created
   *
   * @param      int $nbDays Maximum age of in days
   *
   * @return     iceModelAttributeValueQuery The current query, for fluid interface
   */
  public function recentlyCreated($nbDays = 7)
  {
    return $this->addUsingAlias(iceModelAttributeValuePeer::CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
  }
  
  /**
   * Order by update date desc
   *
   * @return     iceModelAttributeValueQuery The current query, for fluid interface
   */
  public function lastUpdatedFirst()
  {
    return $this->addDescendingOrderByColumn(iceModelAttributeValuePeer::UPDATED_AT);
  }
  
  /**
   * Order by update date asc
   *
   * @return     iceModelAttributeValueQuery The current query, for fluid interface
   */
  public function firstUpdatedFirst()
  {
    return $this->addAscendingOrderByColumn(iceModelAttributeValuePeer::UPDATED_AT);
  }
  
  /**
   * Order by create date desc
   *
   * @return     iceModelAttributeValueQuery The current query, for fluid interface
   */
  public function lastCreatedFirst()
  {
    return $this->addDescendingOrderByColumn(iceModelAttributeValuePeer::CREATED_AT);
  }
  
  /**
   * Order by create date asc
   *
   * @return     iceModelAttributeValueQuery The current query, for fluid interface
   */
  public function firstCreatedFirst()
  {
    return $this->addAscendingOrderByColumn(iceModelAttributeValuePeer::CREATED_AT);
  }

}