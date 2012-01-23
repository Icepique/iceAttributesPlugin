<?php


/**
 * Base class that represents a query for the 'attribute_category' table.
 *
 * 
 *
 * @method     iceModelAttributeCategoryQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     iceModelAttributeCategoryQuery orderByPosition($order = Criteria::ASC) Order by the position column
 *
 * @method     iceModelAttributeCategoryQuery groupById() Group by the id column
 * @method     iceModelAttributeCategoryQuery groupByPosition() Group by the position column
 *
 * @method     iceModelAttributeCategoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     iceModelAttributeCategoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     iceModelAttributeCategoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     iceModelAttributeCategoryQuery leftJoiniceModelAttributeCategoryI18n($relationAlias = null) Adds a LEFT JOIN clause to the query using the iceModelAttributeCategoryI18n relation
 * @method     iceModelAttributeCategoryQuery rightJoiniceModelAttributeCategoryI18n($relationAlias = null) Adds a RIGHT JOIN clause to the query using the iceModelAttributeCategoryI18n relation
 * @method     iceModelAttributeCategoryQuery innerJoiniceModelAttributeCategoryI18n($relationAlias = null) Adds a INNER JOIN clause to the query using the iceModelAttributeCategoryI18n relation
 *
 * @method     iceModelAttributeCategory findOne(PropelPDO $con = null) Return the first iceModelAttributeCategory matching the query
 * @method     iceModelAttributeCategory findOneOrCreate(PropelPDO $con = null) Return the first iceModelAttributeCategory matching the query, or a new iceModelAttributeCategory object populated from the query conditions when no match is found
 *
 * @method     iceModelAttributeCategory findOneById(int $id) Return the first iceModelAttributeCategory filtered by the id column
 * @method     iceModelAttributeCategory findOneByPosition(int $position) Return the first iceModelAttributeCategory filtered by the position column
 *
 * @method     array findById(int $id) Return iceModelAttributeCategory objects filtered by the id column
 * @method     array findByPosition(int $position) Return iceModelAttributeCategory objects filtered by the position column
 *
 * @package    propel.generator.plugins.iceAttributesPlugin.lib.model.om
 */
abstract class BaseiceModelAttributeCategoryQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseiceModelAttributeCategoryQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'iceModelAttributeCategory', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new iceModelAttributeCategoryQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    iceModelAttributeCategoryQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof iceModelAttributeCategoryQuery) {
            return $criteria;
        }
        $query = new iceModelAttributeCategoryQuery();
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
     * @return    iceModelAttributeCategory|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = iceModelAttributeCategoryPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    iceModelAttributeCategoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(iceModelAttributeCategoryPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    iceModelAttributeCategoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(iceModelAttributeCategoryPeer::ID, $keys, Criteria::IN);
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
     * @return    iceModelAttributeCategoryQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(iceModelAttributeCategoryPeer::ID, $id, $comparison);
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
     * @return    iceModelAttributeCategoryQuery The current query, for fluid interface
     */
    public function filterByPosition($position = null, $comparison = null)
    {
        if (is_array($position)) {
            $useMinMax = false;
            if (isset($position['min'])) {
                $this->addUsingAlias(iceModelAttributeCategoryPeer::POSITION, $position['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($position['max'])) {
                $this->addUsingAlias(iceModelAttributeCategoryPeer::POSITION, $position['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelAttributeCategoryPeer::POSITION, $position, $comparison);
    }

    /**
     * Filter the query by a related iceModelAttributeCategoryI18n object
     *
     * @param     iceModelAttributeCategoryI18n $iceModelAttributeCategoryI18n  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelAttributeCategoryQuery The current query, for fluid interface
     */
    public function filterByiceModelAttributeCategoryI18n($iceModelAttributeCategoryI18n, $comparison = null)
    {
        if ($iceModelAttributeCategoryI18n instanceof iceModelAttributeCategoryI18n) {
            return $this
                ->addUsingAlias(iceModelAttributeCategoryPeer::ID, $iceModelAttributeCategoryI18n->getId(), $comparison);
        } elseif ($iceModelAttributeCategoryI18n instanceof PropelCollection) {
            return $this
                ->useiceModelAttributeCategoryI18nQuery()
                ->filterByPrimaryKeys($iceModelAttributeCategoryI18n->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByiceModelAttributeCategoryI18n() only accepts arguments of type iceModelAttributeCategoryI18n or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the iceModelAttributeCategoryI18n relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    iceModelAttributeCategoryQuery The current query, for fluid interface
     */
    public function joiniceModelAttributeCategoryI18n($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('iceModelAttributeCategoryI18n');

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
            $this->addJoinObject($join, 'iceModelAttributeCategoryI18n');
        }

        return $this;
    }

    /**
     * Use the iceModelAttributeCategoryI18n relation iceModelAttributeCategoryI18n object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    iceModelAttributeCategoryI18nQuery A secondary query class using the current class as primary query
     */
    public function useiceModelAttributeCategoryI18nQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joiniceModelAttributeCategoryI18n($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'iceModelAttributeCategoryI18n', 'iceModelAttributeCategoryI18nQuery');
    }

    /**
     * Exclude object from result
     *
     * @param     iceModelAttributeCategory $iceModelAttributeCategory Object to remove from the list of results
     *
     * @return    iceModelAttributeCategoryQuery The current query, for fluid interface
     */
    public function prune($iceModelAttributeCategory = null)
    {
        if ($iceModelAttributeCategory) {
            $this->addUsingAlias(iceModelAttributeCategoryPeer::ID, $iceModelAttributeCategory->getId(), Criteria::NOT_EQUAL);
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
   * @return    iceModelAttributeCategoryQuery The current query, for fluid interface
   */
  public function joinI18n($culture = null, $relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    if (null === $culture)
    {
      $culture = sfPropel::getDefaultCulture();
    }
  
    $relationName = $relationAlias ? $relationAlias : 'iceModelAttributeCategoryI18n';
    return $this
      ->joiniceModelAttributeCategoryI18n($relationAlias, $joinType)
      ->addJoinCondition($relationName, $relationName . '.Culture = ?', $culture);
  }
  
  /**
   * Adds a JOIN clause to the query and hydrates the related I18n object.
   * Shortcut for $c->joinI18n($culture)->with()
   *
   * @param     string $culture Locale to use for the join condition, e.g. 'fr_FR'
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'. Defaults to left join.
   *
   * @return    iceModelAttributeCategoryQuery The current query, for fluid interface
   */
  public function joinWithI18n($culture = null, $joinType = Criteria::LEFT_JOIN)
  {
    $this
      ->joinI18n($culture, null, $joinType)
      ->with('iceModelAttributeCategoryI18n');
    $this->with['iceModelAttributeCategoryI18n']->setIsWithOneToMany(false);
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
   * @return    iceModelAttributeCategoryI18nQuery A secondary query class using the current class as primary query
   */
  public function useI18nQuery($culture = null, $relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    return $this
      ->joinI18n($culture, $relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'iceModelAttributeCategoryI18n', 'iceModelAttributeCategoryI18nQuery');
  }

}