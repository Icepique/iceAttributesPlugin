<?php


/**
 * Base class that represents a query for the 'attribute_category_i18n' table.
 *
 * 
 *
 * @method     iceModelAttributeCategoryI18nQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     iceModelAttributeCategoryI18nQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     iceModelAttributeCategoryI18nQuery orderByNameTranslit($order = Criteria::ASC) Order by the name_translit column
 * @method     iceModelAttributeCategoryI18nQuery orderBySlug($order = Criteria::ASC) Order by the slug column
 * @method     iceModelAttributeCategoryI18nQuery orderByCulture($order = Criteria::ASC) Order by the culture column
 *
 * @method     iceModelAttributeCategoryI18nQuery groupById() Group by the id column
 * @method     iceModelAttributeCategoryI18nQuery groupByName() Group by the name column
 * @method     iceModelAttributeCategoryI18nQuery groupByNameTranslit() Group by the name_translit column
 * @method     iceModelAttributeCategoryI18nQuery groupBySlug() Group by the slug column
 * @method     iceModelAttributeCategoryI18nQuery groupByCulture() Group by the culture column
 *
 * @method     iceModelAttributeCategoryI18nQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     iceModelAttributeCategoryI18nQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     iceModelAttributeCategoryI18nQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     iceModelAttributeCategoryI18nQuery leftJoiniceModelAttributeCategory($relationAlias = null) Adds a LEFT JOIN clause to the query using the iceModelAttributeCategory relation
 * @method     iceModelAttributeCategoryI18nQuery rightJoiniceModelAttributeCategory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the iceModelAttributeCategory relation
 * @method     iceModelAttributeCategoryI18nQuery innerJoiniceModelAttributeCategory($relationAlias = null) Adds a INNER JOIN clause to the query using the iceModelAttributeCategory relation
 *
 * @method     iceModelAttributeCategoryI18n findOne(PropelPDO $con = null) Return the first iceModelAttributeCategoryI18n matching the query
 * @method     iceModelAttributeCategoryI18n findOneOrCreate(PropelPDO $con = null) Return the first iceModelAttributeCategoryI18n matching the query, or a new iceModelAttributeCategoryI18n object populated from the query conditions when no match is found
 *
 * @method     iceModelAttributeCategoryI18n findOneById(int $id) Return the first iceModelAttributeCategoryI18n filtered by the id column
 * @method     iceModelAttributeCategoryI18n findOneByName(string $name) Return the first iceModelAttributeCategoryI18n filtered by the name column
 * @method     iceModelAttributeCategoryI18n findOneByNameTranslit(string $name_translit) Return the first iceModelAttributeCategoryI18n filtered by the name_translit column
 * @method     iceModelAttributeCategoryI18n findOneBySlug(string $slug) Return the first iceModelAttributeCategoryI18n filtered by the slug column
 * @method     iceModelAttributeCategoryI18n findOneByCulture(string $culture) Return the first iceModelAttributeCategoryI18n filtered by the culture column
 *
 * @method     array findById(int $id) Return iceModelAttributeCategoryI18n objects filtered by the id column
 * @method     array findByName(string $name) Return iceModelAttributeCategoryI18n objects filtered by the name column
 * @method     array findByNameTranslit(string $name_translit) Return iceModelAttributeCategoryI18n objects filtered by the name_translit column
 * @method     array findBySlug(string $slug) Return iceModelAttributeCategoryI18n objects filtered by the slug column
 * @method     array findByCulture(string $culture) Return iceModelAttributeCategoryI18n objects filtered by the culture column
 *
 * @package    propel.generator.plugins.iceAttributesPlugin.lib.model.om
 */
abstract class BaseiceModelAttributeCategoryI18nQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseiceModelAttributeCategoryI18nQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'iceModelAttributeCategoryI18n', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new iceModelAttributeCategoryI18nQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    iceModelAttributeCategoryI18nQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof iceModelAttributeCategoryI18nQuery) {
            return $criteria;
        }
        $query = new iceModelAttributeCategoryI18nQuery();
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
     * <code>
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     * @param     array[$id, $culture] $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    iceModelAttributeCategoryI18n|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = iceModelAttributeCategoryI18nPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
     * @return    iceModelAttributeCategoryI18nQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(iceModelAttributeCategoryI18nPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(iceModelAttributeCategoryI18nPeer::CULTURE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    iceModelAttributeCategoryI18nQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(iceModelAttributeCategoryI18nPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(iceModelAttributeCategoryI18nPeer::CULTURE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @see       filterByiceModelAttributeCategory()
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelAttributeCategoryI18nQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(iceModelAttributeCategoryI18nPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelAttributeCategoryI18nQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelAttributeCategoryI18nPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the name_translit column
     *
     * Example usage:
     * <code>
     * $query->filterByNameTranslit('fooValue');   // WHERE name_translit = 'fooValue'
     * $query->filterByNameTranslit('%fooValue%'); // WHERE name_translit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nameTranslit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelAttributeCategoryI18nQuery The current query, for fluid interface
     */
    public function filterByNameTranslit($nameTranslit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nameTranslit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nameTranslit)) {
                $nameTranslit = str_replace('*', '%', $nameTranslit);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelAttributeCategoryI18nPeer::NAME_TRANSLIT, $nameTranslit, $comparison);
    }

    /**
     * Filter the query on the slug column
     *
     * Example usage:
     * <code>
     * $query->filterBySlug('fooValue');   // WHERE slug = 'fooValue'
     * $query->filterBySlug('%fooValue%'); // WHERE slug LIKE '%fooValue%'
     * </code>
     *
     * @param     string $slug The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelAttributeCategoryI18nQuery The current query, for fluid interface
     */
    public function filterBySlug($slug = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($slug)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $slug)) {
                $slug = str_replace('*', '%', $slug);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelAttributeCategoryI18nPeer::SLUG, $slug, $comparison);
    }

    /**
     * Filter the query on the culture column
     *
     * Example usage:
     * <code>
     * $query->filterByCulture('fooValue');   // WHERE culture = 'fooValue'
     * $query->filterByCulture('%fooValue%'); // WHERE culture LIKE '%fooValue%'
     * </code>
     *
     * @param     string $culture The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelAttributeCategoryI18nQuery The current query, for fluid interface
     */
    public function filterByCulture($culture = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($culture)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $culture)) {
                $culture = str_replace('*', '%', $culture);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelAttributeCategoryI18nPeer::CULTURE, $culture, $comparison);
    }

    /**
     * Filter the query by a related iceModelAttributeCategory object
     *
     * @param     iceModelAttributeCategory|PropelCollection $iceModelAttributeCategory The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelAttributeCategoryI18nQuery The current query, for fluid interface
     */
    public function filterByiceModelAttributeCategory($iceModelAttributeCategory, $comparison = null)
    {
        if ($iceModelAttributeCategory instanceof iceModelAttributeCategory) {
            return $this
                ->addUsingAlias(iceModelAttributeCategoryI18nPeer::ID, $iceModelAttributeCategory->getId(), $comparison);
        } elseif ($iceModelAttributeCategory instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(iceModelAttributeCategoryI18nPeer::ID, $iceModelAttributeCategory->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByiceModelAttributeCategory() only accepts arguments of type iceModelAttributeCategory or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the iceModelAttributeCategory relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    iceModelAttributeCategoryI18nQuery The current query, for fluid interface
     */
    public function joiniceModelAttributeCategory($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('iceModelAttributeCategory');

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
            $this->addJoinObject($join, 'iceModelAttributeCategory');
        }

        return $this;
    }

    /**
     * Use the iceModelAttributeCategory relation iceModelAttributeCategory object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    iceModelAttributeCategoryQuery A secondary query class using the current class as primary query
     */
    public function useiceModelAttributeCategoryQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joiniceModelAttributeCategory($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'iceModelAttributeCategory', 'iceModelAttributeCategoryQuery');
    }

    /**
     * Exclude object from result
     *
     * @param     iceModelAttributeCategoryI18n $iceModelAttributeCategoryI18n Object to remove from the list of results
     *
     * @return    iceModelAttributeCategoryI18nQuery The current query, for fluid interface
     */
    public function prune($iceModelAttributeCategoryI18n = null)
    {
        if ($iceModelAttributeCategoryI18n) {
            $this->addCond('pruneCond0', $this->getAliasedColName(iceModelAttributeCategoryI18nPeer::ID), $iceModelAttributeCategoryI18n->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(iceModelAttributeCategoryI18nPeer::CULTURE), $iceModelAttributeCategoryI18n->getCulture(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}