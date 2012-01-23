<?php


/**
 * Base class that represents a query for the 'attribute_filter' table.
 *
 * 
 *
 * @method     iceModelAttributeFilterQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     iceModelAttributeFilterQuery orderByAttributeId($order = Criteria::ASC) Order by the attribute_id column
 * @method     iceModelAttributeFilterQuery orderByPattern($order = Criteria::ASC) Order by the pattern column
 * @method     iceModelAttributeFilterQuery orderByReplacement($order = Criteria::ASC) Order by the replacement column
 * @method     iceModelAttributeFilterQuery orderByLimit($order = Criteria::ASC) Order by the limit column
 * @method     iceModelAttributeFilterQuery orderByPosition($order = Criteria::ASC) Order by the position column
 *
 * @method     iceModelAttributeFilterQuery groupById() Group by the id column
 * @method     iceModelAttributeFilterQuery groupByAttributeId() Group by the attribute_id column
 * @method     iceModelAttributeFilterQuery groupByPattern() Group by the pattern column
 * @method     iceModelAttributeFilterQuery groupByReplacement() Group by the replacement column
 * @method     iceModelAttributeFilterQuery groupByLimit() Group by the limit column
 * @method     iceModelAttributeFilterQuery groupByPosition() Group by the position column
 *
 * @method     iceModelAttributeFilterQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     iceModelAttributeFilterQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     iceModelAttributeFilterQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     iceModelAttributeFilterQuery leftJoiniceModelAttribute($relationAlias = null) Adds a LEFT JOIN clause to the query using the iceModelAttribute relation
 * @method     iceModelAttributeFilterQuery rightJoiniceModelAttribute($relationAlias = null) Adds a RIGHT JOIN clause to the query using the iceModelAttribute relation
 * @method     iceModelAttributeFilterQuery innerJoiniceModelAttribute($relationAlias = null) Adds a INNER JOIN clause to the query using the iceModelAttribute relation
 *
 * @method     iceModelAttributeFilter findOne(PropelPDO $con = null) Return the first iceModelAttributeFilter matching the query
 * @method     iceModelAttributeFilter findOneOrCreate(PropelPDO $con = null) Return the first iceModelAttributeFilter matching the query, or a new iceModelAttributeFilter object populated from the query conditions when no match is found
 *
 * @method     iceModelAttributeFilter findOneById(int $id) Return the first iceModelAttributeFilter filtered by the id column
 * @method     iceModelAttributeFilter findOneByAttributeId(int $attribute_id) Return the first iceModelAttributeFilter filtered by the attribute_id column
 * @method     iceModelAttributeFilter findOneByPattern(string $pattern) Return the first iceModelAttributeFilter filtered by the pattern column
 * @method     iceModelAttributeFilter findOneByReplacement(string $replacement) Return the first iceModelAttributeFilter filtered by the replacement column
 * @method     iceModelAttributeFilter findOneByLimit(int $limit) Return the first iceModelAttributeFilter filtered by the limit column
 * @method     iceModelAttributeFilter findOneByPosition(int $position) Return the first iceModelAttributeFilter filtered by the position column
 *
 * @method     array findById(int $id) Return iceModelAttributeFilter objects filtered by the id column
 * @method     array findByAttributeId(int $attribute_id) Return iceModelAttributeFilter objects filtered by the attribute_id column
 * @method     array findByPattern(string $pattern) Return iceModelAttributeFilter objects filtered by the pattern column
 * @method     array findByReplacement(string $replacement) Return iceModelAttributeFilter objects filtered by the replacement column
 * @method     array findByLimit(int $limit) Return iceModelAttributeFilter objects filtered by the limit column
 * @method     array findByPosition(int $position) Return iceModelAttributeFilter objects filtered by the position column
 *
 * @package    propel.generator.plugins.iceAttributesPlugin.lib.model.om
 */
abstract class BaseiceModelAttributeFilterQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseiceModelAttributeFilterQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'iceModelAttributeFilter', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new iceModelAttributeFilterQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    iceModelAttributeFilterQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof iceModelAttributeFilterQuery) {
            return $criteria;
        }
        $query = new iceModelAttributeFilterQuery();
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
     * @return    iceModelAttributeFilter|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = iceModelAttributeFilterPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    iceModelAttributeFilterQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(iceModelAttributeFilterPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    iceModelAttributeFilterQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(iceModelAttributeFilterPeer::ID, $keys, Criteria::IN);
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
     * @return    iceModelAttributeFilterQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(iceModelAttributeFilterPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the attribute_id column
     *
     * Example usage:
     * <code>
     * $query->filterByAttributeId(1234); // WHERE attribute_id = 1234
     * $query->filterByAttributeId(array(12, 34)); // WHERE attribute_id IN (12, 34)
     * $query->filterByAttributeId(array('min' => 12)); // WHERE attribute_id > 12
     * </code>
     *
     * @see       filterByiceModelAttribute()
     *
     * @param     mixed $attributeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelAttributeFilterQuery The current query, for fluid interface
     */
    public function filterByAttributeId($attributeId = null, $comparison = null)
    {
        if (is_array($attributeId)) {
            $useMinMax = false;
            if (isset($attributeId['min'])) {
                $this->addUsingAlias(iceModelAttributeFilterPeer::ATTRIBUTE_ID, $attributeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($attributeId['max'])) {
                $this->addUsingAlias(iceModelAttributeFilterPeer::ATTRIBUTE_ID, $attributeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelAttributeFilterPeer::ATTRIBUTE_ID, $attributeId, $comparison);
    }

    /**
     * Filter the query on the pattern column
     *
     * Example usage:
     * <code>
     * $query->filterByPattern('fooValue');   // WHERE pattern = 'fooValue'
     * $query->filterByPattern('%fooValue%'); // WHERE pattern LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pattern The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelAttributeFilterQuery The current query, for fluid interface
     */
    public function filterByPattern($pattern = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pattern)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pattern)) {
                $pattern = str_replace('*', '%', $pattern);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelAttributeFilterPeer::PATTERN, $pattern, $comparison);
    }

    /**
     * Filter the query on the replacement column
     *
     * Example usage:
     * <code>
     * $query->filterByReplacement('fooValue');   // WHERE replacement = 'fooValue'
     * $query->filterByReplacement('%fooValue%'); // WHERE replacement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $replacement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelAttributeFilterQuery The current query, for fluid interface
     */
    public function filterByReplacement($replacement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($replacement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $replacement)) {
                $replacement = str_replace('*', '%', $replacement);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelAttributeFilterPeer::REPLACEMENT, $replacement, $comparison);
    }

    /**
     * Filter the query on the limit column
     *
     * Example usage:
     * <code>
     * $query->filterByLimit(1234); // WHERE limit = 1234
     * $query->filterByLimit(array(12, 34)); // WHERE limit IN (12, 34)
     * $query->filterByLimit(array('min' => 12)); // WHERE limit > 12
     * </code>
     *
     * @param     mixed $limit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelAttributeFilterQuery The current query, for fluid interface
     */
    public function filterByLimit($limit = null, $comparison = null)
    {
        if (is_array($limit)) {
            $useMinMax = false;
            if (isset($limit['min'])) {
                $this->addUsingAlias(iceModelAttributeFilterPeer::LIMIT, $limit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($limit['max'])) {
                $this->addUsingAlias(iceModelAttributeFilterPeer::LIMIT, $limit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelAttributeFilterPeer::LIMIT, $limit, $comparison);
    }

    /**
     * Filter the query on the position column
     *
     * Example usage:
     * <code>
     * $query->filterByPosition(1234); // WHERE position = 1234
     * $query->filterByPosition(array(12, 34)); // WHERE position IN (12, 34)
     * $query->filterByPosition(array('min' => 12)); // WHERE position > 12
     * </code>
     *
     * @param     mixed $position The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelAttributeFilterQuery The current query, for fluid interface
     */
    public function filterByPosition($position = null, $comparison = null)
    {
        if (is_array($position)) {
            $useMinMax = false;
            if (isset($position['min'])) {
                $this->addUsingAlias(iceModelAttributeFilterPeer::POSITION, $position['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($position['max'])) {
                $this->addUsingAlias(iceModelAttributeFilterPeer::POSITION, $position['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelAttributeFilterPeer::POSITION, $position, $comparison);
    }

    /**
     * Filter the query by a related iceModelAttribute object
     *
     * @param     iceModelAttribute|PropelCollection $iceModelAttribute The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelAttributeFilterQuery The current query, for fluid interface
     */
    public function filterByiceModelAttribute($iceModelAttribute, $comparison = null)
    {
        if ($iceModelAttribute instanceof iceModelAttribute) {
            return $this
                ->addUsingAlias(iceModelAttributeFilterPeer::ATTRIBUTE_ID, $iceModelAttribute->getId(), $comparison);
        } elseif ($iceModelAttribute instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(iceModelAttributeFilterPeer::ATTRIBUTE_ID, $iceModelAttribute->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByiceModelAttribute() only accepts arguments of type iceModelAttribute or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the iceModelAttribute relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    iceModelAttributeFilterQuery The current query, for fluid interface
     */
    public function joiniceModelAttribute($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('iceModelAttribute');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'iceModelAttribute');
        }

        return $this;
    }

    /**
     * Use the iceModelAttribute relation iceModelAttribute object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    iceModelAttributeQuery A secondary query class using the current class as primary query
     */
    public function useiceModelAttributeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joiniceModelAttribute($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'iceModelAttribute', 'iceModelAttributeQuery');
    }

    /**
     * Exclude object from result
     *
     * @param     iceModelAttributeFilter $iceModelAttributeFilter Object to remove from the list of results
     *
     * @return    iceModelAttributeFilterQuery The current query, for fluid interface
     */
    public function prune($iceModelAttributeFilter = null)
    {
        if ($iceModelAttributeFilter) {
            $this->addUsingAlias(iceModelAttributeFilterPeer::ID, $iceModelAttributeFilter->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}