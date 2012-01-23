<?php


/**
 * Base class that represents a query for the 'attribute_measure_unit' table.
 *
 * 
 *
 * @method     iceModelAttributeMeasureUnitQuery orderById($order = Criteria::ASC) Order by the id column
 *
 * @method     iceModelAttributeMeasureUnitQuery groupById() Group by the id column
 *
 * @method     iceModelAttributeMeasureUnitQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     iceModelAttributeMeasureUnitQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     iceModelAttributeMeasureUnitQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     iceModelAttributeMeasureUnitQuery leftJoiniceModelAttribute($relationAlias = null) Adds a LEFT JOIN clause to the query using the iceModelAttribute relation
 * @method     iceModelAttributeMeasureUnitQuery rightJoiniceModelAttribute($relationAlias = null) Adds a RIGHT JOIN clause to the query using the iceModelAttribute relation
 * @method     iceModelAttributeMeasureUnitQuery innerJoiniceModelAttribute($relationAlias = null) Adds a INNER JOIN clause to the query using the iceModelAttribute relation
 *
 * @method     iceModelAttributeMeasureUnitQuery leftJoiniceModelAttributeMeasureUnitI18n($relationAlias = null) Adds a LEFT JOIN clause to the query using the iceModelAttributeMeasureUnitI18n relation
 * @method     iceModelAttributeMeasureUnitQuery rightJoiniceModelAttributeMeasureUnitI18n($relationAlias = null) Adds a RIGHT JOIN clause to the query using the iceModelAttributeMeasureUnitI18n relation
 * @method     iceModelAttributeMeasureUnitQuery innerJoiniceModelAttributeMeasureUnitI18n($relationAlias = null) Adds a INNER JOIN clause to the query using the iceModelAttributeMeasureUnitI18n relation
 *
 * @method     iceModelAttributeMeasureUnit findOne(PropelPDO $con = null) Return the first iceModelAttributeMeasureUnit matching the query
 * @method     iceModelAttributeMeasureUnit findOneOrCreate(PropelPDO $con = null) Return the first iceModelAttributeMeasureUnit matching the query, or a new iceModelAttributeMeasureUnit object populated from the query conditions when no match is found
 *
 * @method     iceModelAttributeMeasureUnit findOneById(int $id) Return the first iceModelAttributeMeasureUnit filtered by the id column
 *
 * @method     array findById(int $id) Return iceModelAttributeMeasureUnit objects filtered by the id column
 *
 * @package    propel.generator.plugins.iceAttributesPlugin.lib.model.om
 */
abstract class BaseiceModelAttributeMeasureUnitQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseiceModelAttributeMeasureUnitQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'iceModelAttributeMeasureUnit', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new iceModelAttributeMeasureUnitQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    iceModelAttributeMeasureUnitQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof iceModelAttributeMeasureUnitQuery) {
            return $criteria;
        }
        $query = new iceModelAttributeMeasureUnitQuery();
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
     * @return    iceModelAttributeMeasureUnit|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = iceModelAttributeMeasureUnitPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    iceModelAttributeMeasureUnitQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(iceModelAttributeMeasureUnitPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    iceModelAttributeMeasureUnitQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(iceModelAttributeMeasureUnitPeer::ID, $keys, Criteria::IN);
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
     * @return    iceModelAttributeMeasureUnitQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(iceModelAttributeMeasureUnitPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query by a related iceModelAttribute object
     *
     * @param     iceModelAttribute $iceModelAttribute  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelAttributeMeasureUnitQuery The current query, for fluid interface
     */
    public function filterByiceModelAttribute($iceModelAttribute, $comparison = null)
    {
        if ($iceModelAttribute instanceof iceModelAttribute) {
            return $this
                ->addUsingAlias(iceModelAttributeMeasureUnitPeer::ID, $iceModelAttribute->getMeasureUnitId(), $comparison);
        } elseif ($iceModelAttribute instanceof PropelCollection) {
            return $this
                ->useiceModelAttributeQuery()
                ->filterByPrimaryKeys($iceModelAttribute->getPrimaryKeys())
                ->endUse();
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
     * @return    iceModelAttributeMeasureUnitQuery The current query, for fluid interface
     */
    public function joiniceModelAttribute($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useiceModelAttributeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joiniceModelAttribute($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'iceModelAttribute', 'iceModelAttributeQuery');
    }

    /**
     * Filter the query by a related iceModelAttributeMeasureUnitI18n object
     *
     * @param     iceModelAttributeMeasureUnitI18n $iceModelAttributeMeasureUnitI18n  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelAttributeMeasureUnitQuery The current query, for fluid interface
     */
    public function filterByiceModelAttributeMeasureUnitI18n($iceModelAttributeMeasureUnitI18n, $comparison = null)
    {
        if ($iceModelAttributeMeasureUnitI18n instanceof iceModelAttributeMeasureUnitI18n) {
            return $this
                ->addUsingAlias(iceModelAttributeMeasureUnitPeer::ID, $iceModelAttributeMeasureUnitI18n->getId(), $comparison);
        } elseif ($iceModelAttributeMeasureUnitI18n instanceof PropelCollection) {
            return $this
                ->useiceModelAttributeMeasureUnitI18nQuery()
                ->filterByPrimaryKeys($iceModelAttributeMeasureUnitI18n->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByiceModelAttributeMeasureUnitI18n() only accepts arguments of type iceModelAttributeMeasureUnitI18n or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the iceModelAttributeMeasureUnitI18n relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    iceModelAttributeMeasureUnitQuery The current query, for fluid interface
     */
    public function joiniceModelAttributeMeasureUnitI18n($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('iceModelAttributeMeasureUnitI18n');

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
            $this->addJoinObject($join, 'iceModelAttributeMeasureUnitI18n');
        }

        return $this;
    }

    /**
     * Use the iceModelAttributeMeasureUnitI18n relation iceModelAttributeMeasureUnitI18n object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    iceModelAttributeMeasureUnitI18nQuery A secondary query class using the current class as primary query
     */
    public function useiceModelAttributeMeasureUnitI18nQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joiniceModelAttributeMeasureUnitI18n($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'iceModelAttributeMeasureUnitI18n', 'iceModelAttributeMeasureUnitI18nQuery');
    }

    /**
     * Exclude object from result
     *
     * @param     iceModelAttributeMeasureUnit $iceModelAttributeMeasureUnit Object to remove from the list of results
     *
     * @return    iceModelAttributeMeasureUnitQuery The current query, for fluid interface
     */
    public function prune($iceModelAttributeMeasureUnit = null)
    {
        if ($iceModelAttributeMeasureUnit) {
            $this->addUsingAlias(iceModelAttributeMeasureUnitPeer::ID, $iceModelAttributeMeasureUnit->getId(), Criteria::NOT_EQUAL);
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
   * @return    iceModelAttributeMeasureUnitQuery The current query, for fluid interface
   */
  public function joinI18n($culture = null, $relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    if (null === $culture)
    {
      $culture = sfPropel::getDefaultCulture();
    }
  
    $relationName = $relationAlias ? $relationAlias : 'iceModelAttributeMeasureUnitI18n';
    return $this
      ->joiniceModelAttributeMeasureUnitI18n($relationAlias, $joinType)
      ->addJoinCondition($relationName, $relationName . '.Culture = ?', $culture);
  }
  
  /**
   * Adds a JOIN clause to the query and hydrates the related I18n object.
   * Shortcut for $c->joinI18n($culture)->with()
   *
   * @param     string $culture Locale to use for the join condition, e.g. 'fr_FR'
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'. Defaults to left join.
   *
   * @return    iceModelAttributeMeasureUnitQuery The current query, for fluid interface
   */
  public function joinWithI18n($culture = null, $joinType = Criteria::LEFT_JOIN)
  {
    $this
      ->joinI18n($culture, null, $joinType)
      ->with('iceModelAttributeMeasureUnitI18n');
    $this->with['iceModelAttributeMeasureUnitI18n']->setIsWithOneToMany(false);
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
   * @return    iceModelAttributeMeasureUnitI18nQuery A secondary query class using the current class as primary query
   */
  public function useI18nQuery($culture = null, $relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    return $this
      ->joinI18n($culture, $relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'iceModelAttributeMeasureUnitI18n', 'iceModelAttributeMeasureUnitI18nQuery');
  }

}