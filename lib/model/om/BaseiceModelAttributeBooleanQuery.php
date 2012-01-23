<?php


/**
 * Base class that represents a query for the 'attribute_boolean' table.
 *
 * 
 *
 * @method     iceModelAttributeBooleanQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     iceModelAttributeBooleanQuery orderByValue($order = Criteria::ASC) Order by the value column
 * @method     iceModelAttributeBooleanQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method     iceModelAttributeBooleanQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     iceModelAttributeBooleanQuery groupById() Group by the id column
 * @method     iceModelAttributeBooleanQuery groupByValue() Group by the value column
 * @method     iceModelAttributeBooleanQuery groupByUpdatedAt() Group by the updated_at column
 * @method     iceModelAttributeBooleanQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     iceModelAttributeBooleanQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     iceModelAttributeBooleanQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     iceModelAttributeBooleanQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     iceModelAttributeBoolean findOne(PropelPDO $con = null) Return the first iceModelAttributeBoolean matching the query
 * @method     iceModelAttributeBoolean findOneOrCreate(PropelPDO $con = null) Return the first iceModelAttributeBoolean matching the query, or a new iceModelAttributeBoolean object populated from the query conditions when no match is found
 *
 * @method     iceModelAttributeBoolean findOneById(int $id) Return the first iceModelAttributeBoolean filtered by the id column
 * @method     iceModelAttributeBoolean findOneByValue(boolean $value) Return the first iceModelAttributeBoolean filtered by the value column
 * @method     iceModelAttributeBoolean findOneByUpdatedAt(string $updated_at) Return the first iceModelAttributeBoolean filtered by the updated_at column
 * @method     iceModelAttributeBoolean findOneByCreatedAt(string $created_at) Return the first iceModelAttributeBoolean filtered by the created_at column
 *
 * @method     array findById(int $id) Return iceModelAttributeBoolean objects filtered by the id column
 * @method     array findByValue(boolean $value) Return iceModelAttributeBoolean objects filtered by the value column
 * @method     array findByUpdatedAt(string $updated_at) Return iceModelAttributeBoolean objects filtered by the updated_at column
 * @method     array findByCreatedAt(string $created_at) Return iceModelAttributeBoolean objects filtered by the created_at column
 *
 * @package    propel.generator.plugins.iceAttributesPlugin.lib.model.om
 */
abstract class BaseiceModelAttributeBooleanQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseiceModelAttributeBooleanQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'iceModelAttributeBoolean', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new iceModelAttributeBooleanQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    iceModelAttributeBooleanQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof iceModelAttributeBooleanQuery) {
            return $criteria;
        }
        $query = new iceModelAttributeBooleanQuery();
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
     * @return    iceModelAttributeBoolean|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = iceModelAttributeBooleanPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    iceModelAttributeBooleanQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(iceModelAttributeBooleanPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    iceModelAttributeBooleanQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(iceModelAttributeBooleanPeer::ID, $keys, Criteria::IN);
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
     * @return    iceModelAttributeBooleanQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(iceModelAttributeBooleanPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the value column
     *
     * Example usage:
     * <code>
     * $query->filterByValue(true); // WHERE value = true
     * $query->filterByValue('yes'); // WHERE value = true
     * </code>
     *
     * @param     boolean|string $value The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelAttributeBooleanQuery The current query, for fluid interface
     */
    public function filterByValue($value = null, $comparison = null)
    {
        if (is_string($value)) {
            $value = in_array(strtolower($value), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(iceModelAttributeBooleanPeer::VALUE, $value, $comparison);
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
     * @return    iceModelAttributeBooleanQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(iceModelAttributeBooleanPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(iceModelAttributeBooleanPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelAttributeBooleanPeer::UPDATED_AT, $updatedAt, $comparison);
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
     * @return    iceModelAttributeBooleanQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(iceModelAttributeBooleanPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(iceModelAttributeBooleanPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelAttributeBooleanPeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     iceModelAttributeBoolean $iceModelAttributeBoolean Object to remove from the list of results
     *
     * @return    iceModelAttributeBooleanQuery The current query, for fluid interface
     */
    public function prune($iceModelAttributeBoolean = null)
    {
        if ($iceModelAttributeBoolean) {
            $this->addUsingAlias(iceModelAttributeBooleanPeer::ID, $iceModelAttributeBoolean->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}