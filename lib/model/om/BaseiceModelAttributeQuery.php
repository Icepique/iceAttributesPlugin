<?php


/**
 * Base class that represents a query for the 'attribute' table.
 *
 * 
 *
 * @method     iceModelAttributeQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     iceModelAttributeQuery orderByMeasureUnitId($order = Criteria::ASC) Order by the measure_unit_id column
 * @method     iceModelAttributeQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     iceModelAttributeQuery orderByIsSpecial($order = Criteria::ASC) Order by the is_special column
 *
 * @method     iceModelAttributeQuery groupById() Group by the id column
 * @method     iceModelAttributeQuery groupByMeasureUnitId() Group by the measure_unit_id column
 * @method     iceModelAttributeQuery groupByType() Group by the type column
 * @method     iceModelAttributeQuery groupByIsSpecial() Group by the is_special column
 *
 * @method     iceModelAttributeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     iceModelAttributeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     iceModelAttributeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     iceModelAttributeQuery leftJoiniceModelAttributeMeasureUnit($relationAlias = null) Adds a LEFT JOIN clause to the query using the iceModelAttributeMeasureUnit relation
 * @method     iceModelAttributeQuery rightJoiniceModelAttributeMeasureUnit($relationAlias = null) Adds a RIGHT JOIN clause to the query using the iceModelAttributeMeasureUnit relation
 * @method     iceModelAttributeQuery innerJoiniceModelAttributeMeasureUnit($relationAlias = null) Adds a INNER JOIN clause to the query using the iceModelAttributeMeasureUnit relation
 *
 * @method     iceModelAttributeQuery leftJoiniceModelAttributeI18n($relationAlias = null) Adds a LEFT JOIN clause to the query using the iceModelAttributeI18n relation
 * @method     iceModelAttributeQuery rightJoiniceModelAttributeI18n($relationAlias = null) Adds a RIGHT JOIN clause to the query using the iceModelAttributeI18n relation
 * @method     iceModelAttributeQuery innerJoiniceModelAttributeI18n($relationAlias = null) Adds a INNER JOIN clause to the query using the iceModelAttributeI18n relation
 *
 * @method     iceModelAttributeQuery leftJoiniceModelAttributeFilter($relationAlias = null) Adds a LEFT JOIN clause to the query using the iceModelAttributeFilter relation
 * @method     iceModelAttributeQuery rightJoiniceModelAttributeFilter($relationAlias = null) Adds a RIGHT JOIN clause to the query using the iceModelAttributeFilter relation
 * @method     iceModelAttributeQuery innerJoiniceModelAttributeFilter($relationAlias = null) Adds a INNER JOIN clause to the query using the iceModelAttributeFilter relation
 *
 * @method     iceModelAttribute findOne(PropelPDO $con = null) Return the first iceModelAttribute matching the query
 * @method     iceModelAttribute findOneOrCreate(PropelPDO $con = null) Return the first iceModelAttribute matching the query, or a new iceModelAttribute object populated from the query conditions when no match is found
 *
 * @method     iceModelAttribute findOneById(int $id) Return the first iceModelAttribute filtered by the id column
 * @method     iceModelAttribute findOneByMeasureUnitId(int $measure_unit_id) Return the first iceModelAttribute filtered by the measure_unit_id column
 * @method     iceModelAttribute findOneByType(string $type) Return the first iceModelAttribute filtered by the type column
 * @method     iceModelAttribute findOneByIsSpecial(boolean $is_special) Return the first iceModelAttribute filtered by the is_special column
 *
 * @method     array findById(int $id) Return iceModelAttribute objects filtered by the id column
 * @method     array findByMeasureUnitId(int $measure_unit_id) Return iceModelAttribute objects filtered by the measure_unit_id column
 * @method     array findByType(string $type) Return iceModelAttribute objects filtered by the type column
 * @method     array findByIsSpecial(boolean $is_special) Return iceModelAttribute objects filtered by the is_special column
 *
 * @package    propel.generator.plugins.iceAttributesPlugin.lib.model.om
 */
abstract class BaseiceModelAttributeQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseiceModelAttributeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'iceModelAttribute', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new iceModelAttributeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    iceModelAttributeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof iceModelAttributeQuery) {
            return $criteria;
        }
        $query = new iceModelAttributeQuery();
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
     * @return    iceModelAttribute|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = iceModelAttributePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    iceModelAttributeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(iceModelAttributePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    iceModelAttributeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(iceModelAttributePeer::ID, $keys, Criteria::IN);
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
     * @return    iceModelAttributeQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(iceModelAttributePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the measure_unit_id column
     *
     * Example usage:
     * <code>
     * $query->filterByMeasureUnitId(1234); // WHERE measure_unit_id = 1234
     * $query->filterByMeasureUnitId(array(12, 34)); // WHERE measure_unit_id IN (12, 34)
     * $query->filterByMeasureUnitId(array('min' => 12)); // WHERE measure_unit_id > 12
     * </code>
     *
     * @see       filterByiceModelAttributeMeasureUnit()
     *
     * @param     mixed $measureUnitId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelAttributeQuery The current query, for fluid interface
     */
    public function filterByMeasureUnitId($measureUnitId = null, $comparison = null)
    {
        if (is_array($measureUnitId)) {
            $useMinMax = false;
            if (isset($measureUnitId['min'])) {
                $this->addUsingAlias(iceModelAttributePeer::MEASURE_UNIT_ID, $measureUnitId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($measureUnitId['max'])) {
                $this->addUsingAlias(iceModelAttributePeer::MEASURE_UNIT_ID, $measureUnitId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelAttributePeer::MEASURE_UNIT_ID, $measureUnitId, $comparison);
    }

    /**
     * Filter the query on the type column
     *
     * Example usage:
     * <code>
     * $query->filterByType('fooValue');   // WHERE type = 'fooValue'
     * $query->filterByType('%fooValue%'); // WHERE type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelAttributeQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $type)) {
                $type = str_replace('*', '%', $type);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelAttributePeer::TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the is_special column
     *
     * Example usage:
     * <code>
     * $query->filterByIsSpecial(true); // WHERE is_special = true
     * $query->filterByIsSpecial('yes'); // WHERE is_special = true
     * </code>
     *
     * @param     boolean|string $isSpecial The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelAttributeQuery The current query, for fluid interface
     */
    public function filterByIsSpecial($isSpecial = null, $comparison = null)
    {
        if (is_string($isSpecial)) {
            $is_special = in_array(strtolower($isSpecial), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(iceModelAttributePeer::IS_SPECIAL, $isSpecial, $comparison);
    }

    /**
     * Filter the query by a related iceModelAttributeMeasureUnit object
     *
     * @param     iceModelAttributeMeasureUnit|PropelCollection $iceModelAttributeMeasureUnit The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelAttributeQuery The current query, for fluid interface
     */
    public function filterByiceModelAttributeMeasureUnit($iceModelAttributeMeasureUnit, $comparison = null)
    {
        if ($iceModelAttributeMeasureUnit instanceof iceModelAttributeMeasureUnit) {
            return $this
                ->addUsingAlias(iceModelAttributePeer::MEASURE_UNIT_ID, $iceModelAttributeMeasureUnit->getId(), $comparison);
        } elseif ($iceModelAttributeMeasureUnit instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(iceModelAttributePeer::MEASURE_UNIT_ID, $iceModelAttributeMeasureUnit->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByiceModelAttributeMeasureUnit() only accepts arguments of type iceModelAttributeMeasureUnit or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the iceModelAttributeMeasureUnit relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    iceModelAttributeQuery The current query, for fluid interface
     */
    public function joiniceModelAttributeMeasureUnit($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('iceModelAttributeMeasureUnit');

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
            $this->addJoinObject($join, 'iceModelAttributeMeasureUnit');
        }

        return $this;
    }

    /**
     * Use the iceModelAttributeMeasureUnit relation iceModelAttributeMeasureUnit object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    iceModelAttributeMeasureUnitQuery A secondary query class using the current class as primary query
     */
    public function useiceModelAttributeMeasureUnitQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joiniceModelAttributeMeasureUnit($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'iceModelAttributeMeasureUnit', 'iceModelAttributeMeasureUnitQuery');
    }

    /**
     * Filter the query by a related iceModelAttributeI18n object
     *
     * @param     iceModelAttributeI18n $iceModelAttributeI18n  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelAttributeQuery The current query, for fluid interface
     */
    public function filterByiceModelAttributeI18n($iceModelAttributeI18n, $comparison = null)
    {
        if ($iceModelAttributeI18n instanceof iceModelAttributeI18n) {
            return $this
                ->addUsingAlias(iceModelAttributePeer::ID, $iceModelAttributeI18n->getId(), $comparison);
        } elseif ($iceModelAttributeI18n instanceof PropelCollection) {
            return $this
                ->useiceModelAttributeI18nQuery()
                ->filterByPrimaryKeys($iceModelAttributeI18n->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByiceModelAttributeI18n() only accepts arguments of type iceModelAttributeI18n or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the iceModelAttributeI18n relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    iceModelAttributeQuery The current query, for fluid interface
     */
    public function joiniceModelAttributeI18n($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('iceModelAttributeI18n');

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
            $this->addJoinObject($join, 'iceModelAttributeI18n');
        }

        return $this;
    }

    /**
     * Use the iceModelAttributeI18n relation iceModelAttributeI18n object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    iceModelAttributeI18nQuery A secondary query class using the current class as primary query
     */
    public function useiceModelAttributeI18nQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joiniceModelAttributeI18n($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'iceModelAttributeI18n', 'iceModelAttributeI18nQuery');
    }

    /**
     * Filter the query by a related iceModelAttributeFilter object
     *
     * @param     iceModelAttributeFilter $iceModelAttributeFilter  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelAttributeQuery The current query, for fluid interface
     */
    public function filterByiceModelAttributeFilter($iceModelAttributeFilter, $comparison = null)
    {
        if ($iceModelAttributeFilter instanceof iceModelAttributeFilter) {
            return $this
                ->addUsingAlias(iceModelAttributePeer::ID, $iceModelAttributeFilter->getAttributeId(), $comparison);
        } elseif ($iceModelAttributeFilter instanceof PropelCollection) {
            return $this
                ->useiceModelAttributeFilterQuery()
                ->filterByPrimaryKeys($iceModelAttributeFilter->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByiceModelAttributeFilter() only accepts arguments of type iceModelAttributeFilter or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the iceModelAttributeFilter relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    iceModelAttributeQuery The current query, for fluid interface
     */
    public function joiniceModelAttributeFilter($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('iceModelAttributeFilter');

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
            $this->addJoinObject($join, 'iceModelAttributeFilter');
        }

        return $this;
    }

    /**
     * Use the iceModelAttributeFilter relation iceModelAttributeFilter object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    iceModelAttributeFilterQuery A secondary query class using the current class as primary query
     */
    public function useiceModelAttributeFilterQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joiniceModelAttributeFilter($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'iceModelAttributeFilter', 'iceModelAttributeFilterQuery');
    }

    /**
     * Exclude object from result
     *
     * @param     iceModelAttribute $iceModelAttribute Object to remove from the list of results
     *
     * @return    iceModelAttributeQuery The current query, for fluid interface
     */
    public function prune($iceModelAttribute = null)
    {
        if ($iceModelAttribute) {
            $this->addUsingAlias(iceModelAttributePeer::ID, $iceModelAttribute->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

  // symfony_i18n behavior
  
  /**
   * Adds a JOIN clause to the query using the i18n relation
   *
   * @param     string $culture Locale to use for the join condition, e.g. 'fr_FR'
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'. Defaults to left join.
   *
   * @return    iceModelAttributeQuery The current query, for fluid interface
   */
  public function joinI18n($culture = null, $relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    if (null === $culture)
    {
      $culture = sfPropel::getDefaultCulture();
    }
  
    $relationName = $relationAlias ? $relationAlias : 'iceModelAttributeI18n';
    return $this
      ->joiniceModelAttributeI18n($relationAlias, $joinType)
      ->addJoinCondition($relationName, $relationName . '.Culture = ?', $culture);
  }
  
  /**
   * Adds a JOIN clause to the query and hydrates the related I18n object.
   * Shortcut for $c->joinI18n($culture)->with()
   *
   * @param     string $culture Locale to use for the join condition, e.g. 'fr_FR'
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'. Defaults to left join.
   *
   * @return    iceModelAttributeQuery The current query, for fluid interface
   */
  public function joinWithI18n($culture = null, $joinType = Criteria::LEFT_JOIN)
  {
    $this
      ->joinI18n($culture, null, $joinType)
      ->with('iceModelAttributeI18n');
    $this->with['iceModelAttributeI18n']->setIsWithOneToMany(false);
    return $this;
  }
  
  /**
   * Use the I18n relation query object
   *
   * @see       useQuery()
   *
   * @param     string $culture Locale to use for the join condition, e.g. 'fr_FR'
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'. Defaults to left join.
   *
   * @return    iceModelAttributeI18nQuery A secondary query class using the current class as primary query
   */
  public function useI18nQuery($culture = null, $relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    return $this
      ->joinI18n($culture, $relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'iceModelAttributeI18n', 'iceModelAttributeI18nQuery');
  }

}