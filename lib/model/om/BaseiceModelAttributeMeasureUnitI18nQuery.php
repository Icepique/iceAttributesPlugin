<?php


/**
 * Base class that represents a query for the 'attribute_measure_unit_i18n' table.
 *
 * 
 *
 * @method     iceModelAttributeMeasureUnitI18nQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     iceModelAttributeMeasureUnitI18nQuery orderByUnit($order = Criteria::ASC) Order by the unit column
 * @method     iceModelAttributeMeasureUnitI18nQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     iceModelAttributeMeasureUnitI18nQuery orderBySlug($order = Criteria::ASC) Order by the slug column
 * @method     iceModelAttributeMeasureUnitI18nQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     iceModelAttributeMeasureUnitI18nQuery orderByCulture($order = Criteria::ASC) Order by the culture column
 *
 * @method     iceModelAttributeMeasureUnitI18nQuery groupById() Group by the id column
 * @method     iceModelAttributeMeasureUnitI18nQuery groupByUnit() Group by the unit column
 * @method     iceModelAttributeMeasureUnitI18nQuery groupByName() Group by the name column
 * @method     iceModelAttributeMeasureUnitI18nQuery groupBySlug() Group by the slug column
 * @method     iceModelAttributeMeasureUnitI18nQuery groupByDescription() Group by the description column
 * @method     iceModelAttributeMeasureUnitI18nQuery groupByCulture() Group by the culture column
 *
 * @method     iceModelAttributeMeasureUnitI18nQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     iceModelAttributeMeasureUnitI18nQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     iceModelAttributeMeasureUnitI18nQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     iceModelAttributeMeasureUnitI18nQuery leftJoiniceModelAttributeMeasureUnit($relationAlias = null) Adds a LEFT JOIN clause to the query using the iceModelAttributeMeasureUnit relation
 * @method     iceModelAttributeMeasureUnitI18nQuery rightJoiniceModelAttributeMeasureUnit($relationAlias = null) Adds a RIGHT JOIN clause to the query using the iceModelAttributeMeasureUnit relation
 * @method     iceModelAttributeMeasureUnitI18nQuery innerJoiniceModelAttributeMeasureUnit($relationAlias = null) Adds a INNER JOIN clause to the query using the iceModelAttributeMeasureUnit relation
 *
 * @method     iceModelAttributeMeasureUnitI18n findOne(PropelPDO $con = null) Return the first iceModelAttributeMeasureUnitI18n matching the query
 * @method     iceModelAttributeMeasureUnitI18n findOneOrCreate(PropelPDO $con = null) Return the first iceModelAttributeMeasureUnitI18n matching the query, or a new iceModelAttributeMeasureUnitI18n object populated from the query conditions when no match is found
 *
 * @method     iceModelAttributeMeasureUnitI18n findOneById(int $id) Return the first iceModelAttributeMeasureUnitI18n filtered by the id column
 * @method     iceModelAttributeMeasureUnitI18n findOneByUnit(string $unit) Return the first iceModelAttributeMeasureUnitI18n filtered by the unit column
 * @method     iceModelAttributeMeasureUnitI18n findOneByName(string $name) Return the first iceModelAttributeMeasureUnitI18n filtered by the name column
 * @method     iceModelAttributeMeasureUnitI18n findOneBySlug(string $slug) Return the first iceModelAttributeMeasureUnitI18n filtered by the slug column
 * @method     iceModelAttributeMeasureUnitI18n findOneByDescription(string $description) Return the first iceModelAttributeMeasureUnitI18n filtered by the description column
 * @method     iceModelAttributeMeasureUnitI18n findOneByCulture(string $culture) Return the first iceModelAttributeMeasureUnitI18n filtered by the culture column
 *
 * @method     array findById(int $id) Return iceModelAttributeMeasureUnitI18n objects filtered by the id column
 * @method     array findByUnit(string $unit) Return iceModelAttributeMeasureUnitI18n objects filtered by the unit column
 * @method     array findByName(string $name) Return iceModelAttributeMeasureUnitI18n objects filtered by the name column
 * @method     array findBySlug(string $slug) Return iceModelAttributeMeasureUnitI18n objects filtered by the slug column
 * @method     array findByDescription(string $description) Return iceModelAttributeMeasureUnitI18n objects filtered by the description column
 * @method     array findByCulture(string $culture) Return iceModelAttributeMeasureUnitI18n objects filtered by the culture column
 *
 * @package    propel.generator.plugins.iceAttributesPlugin.lib.model.om
 */
abstract class BaseiceModelAttributeMeasureUnitI18nQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseiceModelAttributeMeasureUnitI18nQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'iceModelAttributeMeasureUnitI18n', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new iceModelAttributeMeasureUnitI18nQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    iceModelAttributeMeasureUnitI18nQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof iceModelAttributeMeasureUnitI18nQuery) {
            return $criteria;
        }
        $query = new iceModelAttributeMeasureUnitI18nQuery();
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
     * @return    iceModelAttributeMeasureUnitI18n|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = iceModelAttributeMeasureUnitI18nPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    iceModelAttributeMeasureUnitI18nQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(iceModelAttributeMeasureUnitI18nPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(iceModelAttributeMeasureUnitI18nPeer::CULTURE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    iceModelAttributeMeasureUnitI18nQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(iceModelAttributeMeasureUnitI18nPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(iceModelAttributeMeasureUnitI18nPeer::CULTURE, $key[1], Criteria::EQUAL);
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
     * @see       filterByiceModelAttributeMeasureUnit()
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelAttributeMeasureUnitI18nQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(iceModelAttributeMeasureUnitI18nPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the unit column
     *
     * Example usage:
     * <code>
     * $query->filterByUnit('fooValue');   // WHERE unit = 'fooValue'
     * $query->filterByUnit('%fooValue%'); // WHERE unit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $unit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelAttributeMeasureUnitI18nQuery The current query, for fluid interface
     */
    public function filterByUnit($unit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($unit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $unit)) {
                $unit = str_replace('*', '%', $unit);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelAttributeMeasureUnitI18nPeer::UNIT, $unit, $comparison);
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
     * @return    iceModelAttributeMeasureUnitI18nQuery The current query, for fluid interface
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
        return $this->addUsingAlias(iceModelAttributeMeasureUnitI18nPeer::NAME, $name, $comparison);
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
     * @return    iceModelAttributeMeasureUnitI18nQuery The current query, for fluid interface
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
        return $this->addUsingAlias(iceModelAttributeMeasureUnitI18nPeer::SLUG, $slug, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%'); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelAttributeMeasureUnitI18nQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $description)) {
                $description = str_replace('*', '%', $description);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelAttributeMeasureUnitI18nPeer::DESCRIPTION, $description, $comparison);
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
     * @return    iceModelAttributeMeasureUnitI18nQuery The current query, for fluid interface
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
        return $this->addUsingAlias(iceModelAttributeMeasureUnitI18nPeer::CULTURE, $culture, $comparison);
    }

    /**
     * Filter the query by a related iceModelAttributeMeasureUnit object
     *
     * @param     iceModelAttributeMeasureUnit|PropelCollection $iceModelAttributeMeasureUnit The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelAttributeMeasureUnitI18nQuery The current query, for fluid interface
     */
    public function filterByiceModelAttributeMeasureUnit($iceModelAttributeMeasureUnit, $comparison = null)
    {
        if ($iceModelAttributeMeasureUnit instanceof iceModelAttributeMeasureUnit) {
            return $this
                ->addUsingAlias(iceModelAttributeMeasureUnitI18nPeer::ID, $iceModelAttributeMeasureUnit->getId(), $comparison);
        } elseif ($iceModelAttributeMeasureUnit instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(iceModelAttributeMeasureUnitI18nPeer::ID, $iceModelAttributeMeasureUnit->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return    iceModelAttributeMeasureUnitI18nQuery The current query, for fluid interface
     */
    public function joiniceModelAttributeMeasureUnit($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useiceModelAttributeMeasureUnitQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joiniceModelAttributeMeasureUnit($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'iceModelAttributeMeasureUnit', 'iceModelAttributeMeasureUnitQuery');
    }

    /**
     * Exclude object from result
     *
     * @param     iceModelAttributeMeasureUnitI18n $iceModelAttributeMeasureUnitI18n Object to remove from the list of results
     *
     * @return    iceModelAttributeMeasureUnitI18nQuery The current query, for fluid interface
     */
    public function prune($iceModelAttributeMeasureUnitI18n = null)
    {
        if ($iceModelAttributeMeasureUnitI18n) {
            $this->addCond('pruneCond0', $this->getAliasedColName(iceModelAttributeMeasureUnitI18nPeer::ID), $iceModelAttributeMeasureUnitI18n->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(iceModelAttributeMeasureUnitI18nPeer::CULTURE), $iceModelAttributeMeasureUnitI18n->getCulture(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}